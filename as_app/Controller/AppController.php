<?php
class AppController
{
    public $templatesDir = 'Pages/';
    public $layout = 'base';
    protected $models = [];
    protected $viewVars = [];

    public function __construct(){
        foreach($this->models as $name => $model){
            $this->loadModel($model, $name);
        }
    }

    public function __get($name){
        $this->loadModel($name);
        return $this->$name;
    }

    protected function loadModel($name, $trueName = null){

        if(!is_string($trueName))
            $trueName = $name;

        $model = $name . 'Model';

        require_once MODELS . $model . '.php';
        $this->$trueName = new $model();

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

    public function view($match, $router){

        $target = $match['target'];
        
        require VIEWS . $target['controller'] . 'View.php';
        $view = $target['controller'] . 'View';
        $view = new $view();

        if(method_exists($view, $target['action']))
            $view->{$target['action']}();
        
        $content =  $view->render(TEMPLATES . $this->templatesDir . $target['action'] . '.ctp', [
            'router' => $router,
            'match' => $match
        ] + $this->viewVars);

        print $view->render(LAYOUT . $this->layout . '.php', [
            'content' => $content
        ] + $this->viewVars);

    }
}