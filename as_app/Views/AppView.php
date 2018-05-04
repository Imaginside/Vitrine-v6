<?php
class AppView
{
    protected $viewVars = [
        'Title' => 'default'
    ];

    public function render($file, $variables = []){
        extract($variables);
        extract($this->viewVars);
        ob_start();
        include $file;
        return ob_get_clean();
    }

    public function element($element, $variables = []){
        return $this->render(ELEMENTS . $element . '.php', $variables);
    }

    protected function set($name, $value = null){
        if(is_array($name)){
            foreach($name as $_name => $_value){
                $this->set($_name, $_value);
            }
            return;
        }
        $this->viewVars[$name] = $value;
    }
}