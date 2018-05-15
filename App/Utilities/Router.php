<?php
namespace II\Utilities;

use II\Utilities\Abstracts\Router as RouterAbstract;
use II\Exceptions\RouterException;

class Router extends RouterAbstract
{

    private $url;
    protected $controllerInflector;
    protected $actionInflector;

    public function __construct($url)
    {
        $this->url = trim($url, '/');
        $this->setcontrollerInflector([$this, 'controllerInflector']);
        $this->setActionInflector([$this, 'actionInflector']);
    }

    public function setControllerInflector($inflector)
    {
        $this->controllerInflector = $inflector;
        return $this;
    }

    public function setActionInflector($inflector)
    {
        $this->actionInflector = $inflector;
        return $this;
    }

    protected function controllerInflector($controller)
    {
        return $controller;
    }

    protected function actionInflector($action)
    {
        return $action;
    }

    public function run()
    {
        
        // récupération de l'url sous forme de tableau
        $params = explode('/', $this->url);

        // si le premier parametre n'existe pas, le controller est celui par defaut (Pages)
        if(!isset($params[0]) || $params[0] === '') $params[0] = 'Pages';

        // Si le premier parametre ne correspond pas à un controller,
        // on considère que le controller est celui par défaut (Pages)
        // et le premier parametre est l'action
        // Les autres sont les arguments envoyés à l'action
        if(!\is_file(SITE . '/Controllers/' . $params[0] . 'Controller.php'))
        {
            $controller = 'Pages';
            $action = $params[0];
            $arguments = array_slice($params, 1);
        }
        // Sinon, le premier parametre est le controller,
        // le second l'action
        // et les autres, les arguments envoyés à l'action
        else
        {
            $controller = $params[0];    
            $action = isset($params[1]) && trim($params[1]) !== '' ? $params[1] : 'index';
            $arguments = array_slice($params, 2);    
        }
        
        // On passe l'action dans une fonction pour l'adapter
        $action = call_user_func_array($this->actionInflector, [$action]);
        
        // pour la nomenclature des controllers, on ajoute le mot 'Controller' à la fin
        // par exemple pour le controller Pages, le fichier et la classe sont PagesController
        $controller .= 'Controller';

        // on charge le fichier et on envoi des erreurs le cas echeant
        require_once SITE . '/Controllers/' . $controller . '.php';
        
        if(!class_exists($controller))
            throw new RouterException('Le controller ' . $controller . ' n\'existe pas');
        
        if(!method_exists($controller, $action))
            throw new RouterException('méthode ' . $controller . '::' . $action . ' inexistante');
        
        // On vérifie le nombre d'arguments requis et maximums que la métode accepte
        // Si ca ne matche pas, on envoi une erreur
        $methodReflection = new \ReflectionMethod($controller, $action);
        $countArguments = count($arguments);
        if($countArguments > $methodReflection->getNumberOfParameters() || $countArguments < $methodReflection->getNumberOfRequiredParameters())
            throw new RouterException('Nombre de paramètres (' . $countArguments . ') incorrecte pour la méthode ' . $controller . '::' . $action . '. ');

        // on retourne un callable sous forme de tableau
        return [
            [new $controller, $action],
            $arguments,
        ];
    }

}