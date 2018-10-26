<?php
namespace II\Utilities;

use II\Utilities\Inflector;

class Form {

    protected $formName = null;
    protected $action = null;
    protected $method = 'Post';
    protected $attributes = [];
    
    protected $forbiddenFormIds = [];
    protected $formAttributes = [];

    protected $fields = [];
    private $additionalFields = [];

    protected $errors = [];

    private $fp;

    protected $templates = [
        /**
         * Champs
         */
        'input' => '<input type="{{ type }}" name="{{ name }}" id="{{ id }}" {{ attributes }}>',
        'textarea' => '<textarea name="{{ name }}" id="{{ id }}" {{ attributes }}>{{ value }}</textarea>',
        'submit' => '<button type="submit" {{ attributes }}>{{ title }}</button>',
        'hidden' => '<input type="hidden" name="{{ name }}" id="{{ id }}" value="{{ value }}">',
        'select' => '<select id="{{ id }}" name="{{ name }}" {{ attributes }}>{{ options }}</select>',
        'select-option' => '<option value="{{ value }}" {{ attributes }}>{{ title }}</option>',
        /**
         * Autres
         */
        'div' => '<div class="{{ class }}">{{ fields }}</div>',
        'html' => '{{ content }}',
        'recaptcha' => '<div class="{{ class }}" data-sitekey="{{ data-sitekey }}">{{ fields }}</div>',
        /**
         * Form
         */
        'form' => '<form action="{{ action }}" method="{{ method }}" {{ attributes }}>{{ fields }}</form>',
        /**
         *  Groupes
         */
        'formGroup' => '<div class="{{ groupClasses }}"> <label for="{{ inputId }}">{{ title }}</label> {{ input }} </div>',
        // - Template pour le wrapper des éléments input[type=radio]
        'formGroup--radio' => '<div class="{{ groupClasses }}"><label class="{{ labelClasses }}" for="{{ inputId }}">{{ input }}{{ title }}</label></div>',
        // - Template pour le wrapper des éléments input[type=checkbox]
        'formGroup--checkbox' => '<div class="{{ groupClasses }}"><label class="{{ labelClasses }}" for="{{ inputId }}">{{ input }}{{ title }}</label></div>',
        // - Template pour le wrapper lors de la création de multiples radios. Contient tous les input[type=radio] du même groupe
        'formGroup--radios' => '<div class="{{ radiosGroupClasses }}"> <label>{{ title }}</label> {{ radios }} </div>',
        // - Template pour le wrapper lors de la création de multiples checkboxes. Contient tous les input[type=checkbox] du même groupe
        'formGroup--checkboxes' => '<div class="{{ checkboxesGroupClasses }}"> <label>{{ title }}</label> {{ checkboxes }} </div>',
        'formGroup--div' => '{{ input }}', // affichage directement de l'input, sans wrapper
        'formGroup--html' => '{{ input }}', // affichage directement de l'input, sans wrapper
        'formGroup--submit' => '{{ input }}', // affichage directement de l'input, sans wrapper
        'formGroup--hidden' => '{{ input }}', // affichage directement de l'input, sans wrapper
        'formGroup--select' => '<div class="{{ groupClasses }}"><label for="{{ inputId }}">{{ title }}</label>{{ input }}</div>', // affichage directement de l'input, sans wrapper
        'formGroup--select-option' => '{{ input }}', // affichage directement de l'input, sans wrapper
        // - Wrapper d'un formulaire
        'formGroup--form' => '{{ input }}', // affichage directement du tag form, sans wrapper
    ];

    public function __construct ()
    {
        $formName = $this->formName;
        $action = $this->action;
        $method = $this->method;
        $attributes = $this->attributes;

        if(\is_numeric($formName) || !\is_string($formName))
            $formName = (new \ReflectionClass($this))->getShortName();
            
        $this->formName = $formName;
        $this->formAttributes['id'] = Inflector::hyphenate($this->formName);

        $x = 0;
        while(\in_array($this->formAttributes['id'], $this->forbiddenFormIds))
        {
            $x ++;
            $this->formAttributes['id'] = Inflector::hyphenate($this->formName . '-' . $x);
        }

        if($action === null)
        {
            $action = $_SERVER['REQUEST_URI'];
        }

        $this->formAttributes['action'] = $action;
        $this->formAttributes['method'] = $method;
        $this->formAttributes = $this->formAttributes + $attributes;

        $this->fp = \password_hash(\get_called_class(), PASSWORD_BCRYPT);

        $this->additionalFields[] = [
            'type' => 'hidden',
            'name' => 'fp',
            'value' => $this->fp,
        ];

    }

    protected function render()
    {
        $fields = $this->_render($this->fields + $this->additionalFields);
        return $this->renderField('form', $this->formAttributes + [
            'type' => 'form',
            'fields' => $fields
        ]);
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

    protected function fieldGetDefaultAttributes($name, $attributes = [])
    {
        $defaultAttributes = [];
        $defaultAttributes['type'] = 'text';
        $defaultAttributes['name'] = Inflector::hyphenate($name);
        $defaultAttributes['title'] = Inflector::humanize($name);
        $defaultAttributes['id'] = $this->formAttributes['id'] . '--' . Inflector::hyphenate($name);
        return $defaultAttributes;
    }

    protected function renderField($name, $attributes = [])
    {
       
        $defaultAttributes = $this->fieldGetDefaultAttributes($name, $attributes);

        $type = strtolower($attributes['type']);

        $attributes = $attributes + $defaultAttributes;
        $methodName = Inflector::camelize($type, Inflector::UPCASE_FIRST_LETTER);
        
        if(method_exists($this, 'attributes' . $methodName))
            $attributes = call_user_func_array([$this, 'attributes' . $methodName], [$attributes]);
        
        $template = $this->getTemplate($type);
        $WrapperTemplate = $this->getWrapperTemplate($type);

        preg_match_all('/\{\{\s([a-zA-Z]*)\s\}\}/', $template, $matches);
        preg_match_all('/\{\{\s([a-zA-Z]*)\s\}\}/', $WrapperTemplate, $WrapperMatches);

        $attributes['attributes'] = [];
        
        if(!empty($this->errors))
        {
            if(!empty($this->errors[$attributes['name']]))
            {
                $attributes['class'] = explode(' ', $attributes['class']);
                $attributes['class'][] = 'error';
                $attributes['class'] = implode(' ', $attributes['class']);
            }
            
            $submitted = $this->getData();
            if(preg_match('/\[[^\]]*\]/', $attributes['name']))
            {
                $valuesAsArray = $attributes['name'];
                
                $valuesAsArray = preg_replace('/(\[\])/', '', $valuesAsArray);
                $valuesAsArray = preg_replace('/\[([^\]]*)\]/', '.$1', $valuesAsArray);
                $valuesAsArray = explode('.', $valuesAsArray);
                $verifyValuesAsArray = $submitted;
                foreach($valuesAsArray as $t)
                    $verifyValuesAsArray = $verifyValuesAsArray[$t];

            }
            if(!empty($submitted[$attributes['name']]) || !empty($verifyValuesAsArray))
            {
                switch($type)
                {
                    case 'text':
                    case 'email':
                    case 'textarea':
                        $attributes['value'] = $submitted[$attributes['name']];
                        break;
                    case 'radio':
                    case 'checkbox':
                        // var_dump($submitted[$attributes['name']], $attributes['value']);
                        if($submitted[$attributes['name']] === $attributes['value'] || in_array($attributes['value'], $verifyValuesAsArray))
                            $attributes['checked'] = 'checked';
                    case 'hidden':
                        break;
                    case 'select-option':
                        $name = $attibutes['name'];
                        unset($attributes['name']);
                        if($submitted[$name] === $attributes['value'] || in_array($attributes['value'], $verifyValuesAsArray))
                            $attributes['selected'] = true;
                        break;
                }
            }

        }

        foreach($attributes as $key => $value)
        {
            if(is_array($value)) continue;
            if(in_array($key, $matches[1])) continue;
            if(in_array($key, $WrapperMatches[1])) continue;
            if(in_array($key, ['type'])) continue;

            if($value === false) continue;

            if($value === true)
            {
                $attributes['attributes'][] = $key . '="' . $key . '"';
                continue;
            }

            $attributes['attributes'][] = $key . '="' . $value . '"';
        }

        $attributes['attributes'] = implode(' ', $attributes['attributes']);
        
        $field = str_replace(array_map(function($key){
            return '{{ ' . $key . ' }}';
        }, array_keys($attributes)), $attributes, $template);
        
        // Wrapper
        $WrapperAttributes = $attributes;

        unset($WrapperAttributes['id']);
        $WrapperAttributes['input'] = $field;
        $WrapperAttributes['inputId'] = $attributes['id'];

        $field = str_replace(array_map(function($key){
            return '{{ ' . $key . ' }}';
        }, array_keys($WrapperAttributes)), $WrapperAttributes, $WrapperTemplate);
        
        $field = preg_replace('/\{\{\s[^\s(\}\})]*\s\}\}/', '', $field);

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

    protected function attributesDiv(array $attributes)
    {
        $attributes['fields'] = $this->_render($attributes['fields']);
        return $attributes;
    }

    protected function attributesHtml(array $attributes)
    {
        if(isset($attributes['escape']) && $attributes['escape'] === true)
            $attributes['content'] = htmlentities($attributes['content']);
        return $attributes;
    }

    protected function attributesRadios(array $attributes)
    {
        $radios = [];

        $attr = $attributes;
        $attr['type'] = 'radio';
        unset($attr['options']);
        
        $default = !empty($attributes['default']) ? $attributes['default'] : null;
        unset($attributes['default']);

        foreach($attributes['options'] as $value => $title)
        {
            $attr['title'] = $title;
            $attr['value'] = $value;
            $attr['id'] = $attributes['id'] . '--' . Inflector::hyphenate($value);
            
            if(!empty($default) && $default === $value)
                $attr['checked'] = true;

            $radios[] = $attr;
        }

        $attributes['radios'] = $this->_render($radios);
        return $attributes;
    }

    protected function attributesCheckboxes(array $attributes)
    {
        $checkboxes = [];

        $attr = $attributes;
        $attr['type'] = 'checkbox';
        unset($attr['options']);

        $default = !empty($attributes['default']) ? $attributes['default'] : null;
        unset($attributes['default']);

        foreach($attributes['options'] as $value => $title)
        {
            $attr['title'] = $title;
            $attr['value'] = $value;
            $attr['id'] = $attributes['id'] . '--' . Inflector::hyphenate($value);
            
            if(!empty($default) && $default === $value)
                $attr['checked'] = true;

            $checkboxes[] = $attr;
        }

        $attributes['checkboxes'] = $this->_render($checkboxes);
        return $attributes;
    }

    protected function attributesSelect(array $attributes)
    {
        $options = [];

        $default = !empty($attributes['default']) ? $attributes['default'] : null;
        unset($attributes['default']);

        foreach($attributes['options'] as $value => $title)
        {

            $options[] = [
                'type' => 'select-option',
                'id' => $attributes['id'] . '--' . Inflector::hyphenate($value),
                'value' => $value,
                'title' => $title,
                'selected' => !empty($default) && $default === $value,
                'name' => $attributes['name'],
            ];
        }

        $attributes['options'] = $this->_render($options);

        return $attributes;
    }

    protected function attributesForm(array $attributes)
    {
        unset($attributes['name']);
        unset($attributes['title']);
        return $attributes;
    }

    public function getData()
    {
        switch(strtolower($this->method))
        {
            case 'post':
                $data = $_POST;
                break;
            case 'get':
                $data = $_GET;
                break;
            default:
                $data = $_POST;
                break;
        }
        
        return $data ?: [];
    }

    public function isSubmitted()
    {
        
        $data = $this->getData();

        return !empty($data['fp']) && \password_verify(\get_called_class(), $data['fp']);

    }


    public function validate()
    {
        
        $validator = '\\II\\Models\\Validation\\' . (new \ReflectionClass($this))->getShortName() . 'Validator'; 

        if(class_exists($validator))
            $validator = new $validator($this);
        else
            $validator = new \II\Models\Validation\FormValidator($this); 
        
        return $validator->validate();

    }

    public function getFields()
    {
        return $this->fields;
    }

    public function addError($field_name, $message = '')
    {
        if(empty($this->errors[$field_name]))
            $this->errors[$field_name] = [];
        $this->errors[$field_name][] = $message; 
    }

}