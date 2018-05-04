<?php
class Application {

    protected $router;

    public function __construct(){
        
        // Récupère les chemins
        require ROOT . '/as_app/Config/paths.php';

        // Paramétres par défaut
        // require ROOT . '/as_app/Config/config.php';

        require CONTROLLER . 'AppController.php';

        require VIEWS . 'AppView.php';

        $this->router = new Router();
        /**
         * Les routes possibles
         */
        $this->router->loadRoutes(ROUTES);
        // require ROOT . '/as_app/Config/routes.php';

        $match = $this->router->match();
        
        if($match) {

            $target =& $match['target'];

            if(is_string($target)) {
                $target = ['controller' => 'Default', 'action' => $target];
            }

            require CONTROLLER . $target['controller'] . 'Controller.php';

            $controller = $target['controller'] . 'Controller';
            $controller = new $controller();

            if(method_exists($controller, $target['action']))
                call_user_func_array([$controller, $target['action']], $match['params']);

            $controller->view($match, $this->router);

            // include $controller->pageParam($match['target']);
            // include $controller->pageContent($match['target']);

        }
        else {
        	echo '<h1 style="color:red">La page n\'existe pas.</h1>';
        }

    }


}