<?php
namespace II;

use II\Utilities\Request;
use II\Utilities\Configure;
use II\Utilities\ConfigureCore;
/**
 * Classe principale du framework
 */
class App
{

    protected $routers = [];

    public function __construct()
    {
        require_once 'Config/define.php';
        ConfigureCore::loadConfigurationFile(CONFIG . 'app.php');
        ConfigureCore::loadConfigurationFile(SITES . 'sites.conf.php');
        Request::init();

        $siteConf = ConfigureCore::read('sites.default');
        foreach(ConfigureCore::read('sites') as $site)
        {
            if(isset($site['domain']) && Request::getDomain() === $site['domain'])
            {
                $siteConf = array_merge($siteConf, $site);
                break;
            }
        }

        $this->addRouter(new $siteConf['Router']);
    }

    public function addRouter(\II\Utilities\Abstracts\Router $router)
    {
        $this->routers = $router;
    }

    public function run()
    {
        $match = $this->matchRoute();
        var_dump($match);
    }

    protected function matchRoute()
    {
        foreach($this->routers as $router)
        {
            if($match = $router->match(Request::getURI()))
                return $match;
        }
        return false;
    }

}