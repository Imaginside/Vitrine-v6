<?php
namespace II\Utilities\Forms;

use II\Utilities\Inflector;

class Form {

    protected $forbiddenFormIds = [];

    protected $formName;
    protected $formAttributes = [];
    protected $fields = [];
    protected $templates = [
        // Champs
        'input' => '<input type=":type" name=":name" id=":id" :attributes>',
        'textarea' => '<textarea name=":name" id=":id" :attributes></textarea>',
        // Groupes
        'formGroup' => '<div class=":groupClasses"> <label for=":inputId">:title</label> :input </div>',
        'formGroup--div' => ':input',
        // Autres
        'div' => '<div class=":class">:fields</div>'
    ];

    public function __construct ($formName = null)
    {
        if(is_numeric($formName) || !is_string($formName))
            $formName = (new \ReflectionClass($this))->getShortName();
            
        $this->formName = $formName;
        $this->formAttributes['id'] = Inflector::hyphenate($this->formName);

        $x = 0;
        while(in_array($this->formAttributes['id'], $this->forbiddenFormIds))
        {
            $x ++;
            $this->formAttributes['id'] = Inflector::hyphenate($this->formName . '-' . $x);
        }

    }

    protected function render()
    {
        return $this->_render($this->fields);
    }

    public function __toString()
    {
        return $this->render();
    }

    private function _render($fields)
    {
        $form = '';
        foreach ($fields as $name => $field)
            $form .= $this->renderField($name, $field);
        return $form;
    }

    protected function renderField($name, $attributes = [])
    {
            
        $defaultAttributes = [];

        $defaultAttributes['type'] = 'text';
        $defaultAttributes['name'] = Inflector::hyphenate($name);
        $defaultAttributes['title'] = Inflector::humanize($name);
        $defaultAttributes['id'] = $this->formAttributes['id'] . '--' . Inflector::hyphenate($name);

        $type = strtolower($attributes['type']);

        $attributes = $attributes + $defaultAttributes;
        $methodName = Inflector::camelize($type, Inflector::UPCASE_FIRST_LETTER);
        
        if(method_exists($this, 'attributes' . $methodName))
            $attributes = call_user_func_array([$this, 'attributes' . $methodName], [$attributes]);
        
        $template = $this->getTemplate($type);
        $WrapperTemplate = $this->getWrapperTemplate($type);

        preg_match_all('/:([a-zA-Z]*)/', $template, $matches);
        preg_match_all('/:([a-zA-Z]*)/', $WrapperTemplate, $WrapperMatches);

        $attributes['attributes'] = [];
        
        foreach($attributes as $key => $value)
        {
            if(is_array($value)) continue;
            if(in_array($key, $matches[1])) continue;
            if(in_array($key, $WrapperMatches[1])) continue;
            if(in_array($key, ['type'])) continue;
            $attributes['attributes'][] = $key . '="' . $value . '"';
        }
        $attributes['attributes'] = implode(' ', $attributes['attributes']);
        
        $field = str_replace(array_map(function($key){
            return ':' . $key;
        }, array_keys($attributes)), $attributes, $template);
        
        // Wrapper
        $field = strtr($WrapperTemplate, [
            ':inputId' => $attributes['id'],
            ':title' => $attributes['title'],
            ':input' => $field,
            ':groupClasses' => $attributes['groupClasses']
        ]);

        $field = str_replace(array_map(function($v){
            return ':' . $v;
        }, $matches[1]), array_map(function($v){
            return '';
        }, $matches[1]), $field);

        $field = str_replace(array_map(function($v){
            return ':' . $v;
        }, $WrapperMatches[1]), array_map(function($v){
            return '';
        }, $WrapperMatches[1]), $field);

        return $field;
    }

    protected function getTemplate($needle)
    {
        if(isset($this->templates[$needle]))
            return $this->templates[$needle];

        $needle = [
            // Mettre ici les exeptions pour chercher un template qui ne
            // correspond pas à $needle
            // ex : radios => 'radio-single'
        ][$needle] ?: 'input';

        return $this->templates[$needle];
    }

    protected function getWrapperTemplate($needle)
    {
        if(isset($this->templates['formGroup--' . $needle]))
            return $this->templates['formGroup--' . $needle];

        $needle = [
                // Mettre ici les exeptions pour chercher un template qui ne
                // correspond pas à $needle
                // ex : radios => 'radio-single'
        ][$needle] ?: 'input';

        return $this->templates['formGroup--' . $needle] ?: $this->templates['formGroup'];

    }

    protected function attributesDiv($attributes)
    {
        $attributes['fields'] = $this->_render($attributes['fields']);
        return $attributes;
    }

}