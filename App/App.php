<?php
namespace II;

use II\Utilities\Request;
use II\Utilities\Configure;
use II\Exceptions\NotFoundException;
use \Controllers;
use \Views;

/**
 * Classe principale du framework
 */
class App
{

    // Router de l'application
    protected $router;

    public function __construct()
    {

        // Classe qui s'occupe de gérer les exceptions lancées. Son role principal est d'afficher une page 404
        set_exception_handler ( "II\Utilities\ExceptionManager::HandleAppException" );

        // Fichier contenant les define()
        require_once 'Config/define.php';

        // Charge differents fichiers contenant des tableaux de variables
        Configure::loadConfigurationFile(CORE_CONFIG . 'app.php');
        Configure::loadConfigurationFile(SITE . 'Config/app.php');

        // Si un fichier de variables existe pour le thème, on le charge
        $themeConfigurationFile = SITE . '/' . Configure::read('Paths.themes') . '/' . Configure::read('theme') . '/variables.php';
        if(file_exists($themeConfigurationFile))
            Configure::loadConfigurationFile($themeConfigurationFile);

        // Initialisation de la classe Request
        // Récupère les variables liées à la requete comme l'uri, les parametres GET/POST/PUT/FILES, etc
        Request::init();

        // Récupère la classe choisie pour le router et l'ajoute comme router de l'application
        $router = Configure::read('Router');
        $router = (new $router(Request::getURI()))
            ->setControllerInflector('II\\Utilities\\Inflector::camelize')
            ->setActionInflector('II\\Utilities\\Inflector::camelize');

        $this->setRouter($router);

        // un petit autoloader pour charger les classes utilisables dans le dossier /site/
        // comme Controllers ou Views
        spl_autoload_register([$this, 'autoloader']);
    }

    /**
     * Enregistrement du router à utiliser
     * @param $router Le router à utiliser. Doit hériter de la classe \II\Utilities\Abstracts\Router
     * @return void;
     */
    protected function setRouter(\II\Utilities\Abstracts\Router $router)
    {
        $this->router = $router;
    }

    /**
     * Inclusion des classes "CORE" si elles existes
     * @return void
     */
    protected function autoloader($classname)
    {
        if(file_exists(CORE_CLASSES . $classname . '.php'))
            include CORE_CLASSES . $classname . '.php';
    }

    public function run()
    {
        // Récupère la route matchée
        list($callable, $arguments) = $this->router->run();

        // On récupère le controller.
        // Si c'est un chaine de caractère on l'instancie
        $controller = &$callable[0];
        if(is_string($controller))
            $controller = new $controller;
        
        // On vérifie que le controller hérite bien de la classe de base "Controllers"
        if(!($controller instanceof Controllers))
            throw new NotFoundException("Le Controller doit hériter de la classe \\Controllers", [get_class($controller)]);
        
        $view = preg_replace('/Controller$/', 'View', get_class($controller));
        $siteViewsDir = SITE . Configure::read('Paths.themes') . '/Views/';
        $themeViewsDir = SITE . Configure::read('Paths.themes') . Configure::read('theme') . '/Views/';

        if(file_exists($themeViewsDir . $view . '.php'))
        {
            include $themeViewsDir . $view . '.php';
        }
        else if(file_exists($siteViewsDir . $view . '.php'))
        {
            include $siteViewsDir . $view . '.php';
        }
        else
        {
            $view = 'Views';
        }

        call_user_func_array([$controller, 'preprocess'], $arguments);

        // Execution de la route (Controller::action) matchée
        // et récupération des variables définies par cette méthode
        $viewVars = call_user_func_array($callable, $arguments);
        $viewVars = is_array($viewVars) ? $viewVars : [];
        
        $viewVars = $viewVars + $controller->getViewVars();

        call_user_func_array([$controller, 'postprocess'], $arguments);

        // Création du nom du fichier de template
        $templateFileName = preg_replace('/Controller$/', '', get_class($controller)) . '/' . $callable[1] . '.php';

        // Appel à la classe de vue pour générer le contenu à partir du template
        $view = new $view($templateFileName, Views::TEMPLATES);
        
        if(!($view instanceof Views))
            throw new NotFoundException("La classe de vue doit hériter de la classe \\Views", [get_class($view)]);

        call_user_func_array([$view, 'preprocess'], $arguments);

        if(method_exists($view, $callable[1]))
        {
            $viewsViewVars = call_user_func_array([$view, $callable[1]], $arguments);
            $viewsViewVars = is_array($viewsViewVars) ? $viewsViewVars : [];
            $viewVars = $viewVars + $viewsViewVars + $view->getViewVars();
        }

        $pageContent = $view->render($viewVars);

        call_user_func_array([$view, 'postprocess'], $arguments);
        
        // Appel à la classe de vue pour générer le layout
        $layout = new $view($view->layout(), Views::LAYOUT);

        call_user_func_array([$layout, 'prelayout'], $arguments);

        $layoutContent = $layout->render([
        'content' => $pageContent,
        ] + $viewVars);

        call_user_func_array([$layout, 'postlayout'], $arguments);
        
        // On retourne le contenu créé (layout + contenu)
        return $layoutContent;
    }

}