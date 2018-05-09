<?php
namespace II;

use II\Utilities\Request;
use II\Utilities\Configure;
use II\Exceptions\NotFoundException;
/**
 * Classe principale du framework
 */
class App
{

    protected $router = [];

    public function __construct()
    {

        set_exception_handler ( "II\Utilities\ExceptionManager::HandleAppException" );

        require_once 'Config/define.php';
        Configure::loadConfigurationFile(CORE_CONFIG . 'app.php');
        Configure::loadConfigurationFile(SITE . 'Config/app.php');
        Request::init();
        $router = Configure::read('Router');
        $this->setRouter(new $router(Request::getURI()));
        spl_autoload_register([$this, 'autoloader']);
    }

    protected function setRouter(\II\Utilities\Abstracts\Router $router)
    {
        $this->router = $router;
    }

    protected function autoloader($classname)
    {
        if(file_exists(CORE_CLASSES . $classname . '.php'))
            include CORE_CLASSES . $classname . '.php';
    }

    public function run()
    {
        
        try
        {
            list($callable, $arguments) = $this->router->run();
        }
        catch(\II\Exceptions\RouterException $e)
        {
            throw new NotFoundException('La page demandée n\'éxiste pas', [
                'message' => $e->getMessage()
            ]);
        }

        $controller = &$callable[0];
        if(is_string($controller))
            $controller = new $controller;
        
        if(!($controller instanceof \Controllers))
            throw new NotFoundException("Le Controller doit hériter de la classe \\Controllers", [get_class($controller)]);
            

        $viewVars = call_user_func_array($callable, $arguments);
        $viewVars = is_array($viewVars) ? $viewVars : [] + $controller->getViewVars();

        $view = new \Views(preg_replace('/Controller$/', '', get_class($controller)) . '/' . $callable[1] . '.php');
        $pageContent = $view->render($viewVars);

        $layout = new \Views(Configure::read('Paths.layout') . $view->layout());
        $layoutContent = $layout->render([
            'content' => $pageContent,
            ] + $viewVars);

        return $layoutContent;
    }

}