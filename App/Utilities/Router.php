<?php
namespace II\Utilities;

use II\Utilities\Abstracts\Router as RouterAbstract;
use II\Utilities\Configure;
use II\Utilities\Request;
use II\Exceptions\RouterException;

class Router extends RouterAbstract
{

    private $url;

    public function __construct($url){
        $this->url = trim($url, '/');
    }

    public function run(){
        
        $params = explode('/', $this->url);
        if(!isset($params[0]) || $params[0] === '') $params[0] = 'Pages';

        if(!\is_file(SITE . '/Controllers/' . $params[0] . 'Controller.php'))
        {
            $controller = 'Pages';
            $action = $params[0];
            $arguments = array_slice($params, 1);
        }
        else
        {
            $controller = $params[0];    
            $action = isset($params[1]) && trim($params[1]) !== '' ? $params[1] : 'index';
            $arguments = array_slice($params, 2);    
        }
        
        $controller .= 'Controller';

        require_once SITE . '/Controllers/' . $controller . '.php';
        
        if(!class_exists($controller))
            throw new RouterException('Le controller ' . $controller . ' n\'éxiste pas');
            
        if(!method_exists($controller, $action))
            throw new RouterException('Métode ' . $controller . '::' . $action . ' inexistante');
            
        $methodReflection = new \ReflectionMethod($controller, $action);
        $countArguments = count($arguments);
        if($countArguments > $methodReflection->getNumberOfParameters() || $countArguments < $methodReflection->getNumberOfRequiredParameters())
            throw new RouterException('Nombre de paramêtres (' . $countArguments . ') incorrecte pour la métode ' . $controller . '::' . $action . '. ');

        return [
            [new $controller, $action],
            $arguments,
        ];
    }

}