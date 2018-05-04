<?php
if (!defined('DS')) {
    define('DS' , DIRECTORY_SEPARATOR);
}

/**
 * http | https
 */
define('ENV_HTTP' , $_SERVER['REQUEST_SCHEME'].'://');


/**
 * Ex. en local : localhost
 * Ex. en ligne : www.ma-vitrine.pro
 */
define('SERV_NAME' , $_SERVER['SERVER_NAME']);


/**
 * Ex. en local : D:\Programmes\wamp64\www\Vitrine-v6
 * Ex. en ligne : /var/www/vhosts/ma-vitrine.pro/httpdocs
 */
// define('ROOT', dirname(dirname(__DIR__)));

define('APP_DIR', 'as_app');
define('APP_CONFIG', 'as_app/Config');
define('APP_INC', 'as_include');
define('WEBROOT', 'as_webroot');

define('ROUTES', ROOT . '/as_app/Config/routes.php');
define('MODELS', ROOT . DS . APP_DIR . DS . 'Models' . DS);

define('BASE', str_replace($_SERVER['DOCUMENT_ROOT'], '', str_replace(DS, '/', ROOT)));
define('APP_WEBROOT', BASE . DS . WEBROOT);
/**
 * Nom des dossiers
 */
// if(SERV_NAME == 'localhost:8888' || SERV_NAME == 'localhost') {
//     // define('APP_WEBROOT', 'as_webroot');
//     define('APP_WEBROOT', BASE . '/as_webroot');
// }
// else 
//     define('APP_WEBROOT', '');







/**
 * Ex. en local : D:\Programmes\wamp64\www\Vitrine-v6\as_app\Views\
 * Ex. en ligne : /var/www/vhosts/ma-vitrine.pro/httpdocs/as_app/Views\
 */
define('VIEWS',  ROOT . DS . APP_DIR . DS .'Views' . DS);


/**
 * Ex. en local : D:\Programmes\wamp64\www\Vitrine-v6\as_content\Controller\
 * Ex. en ligne : /var/www/vhosts/ma-vitrine.pro/httpdocs/as_content/Controller\
 */
define('CONTROLLER',  ROOT . DS . APP_DIR . DS .'Controller' . DS);


/**
 * Ex. en local : D:\Programmes\wamp64\www\Vitrine-v6\as_content\Param\
 * Ex. en ligne : /var/www/vhosts/ma-vitrine.pro/httpdocs/as_content/Param\
 */
define('TEMPLATES',  ROOT . DS . APP_DIR . DS .'Templates' . DS);

define('ELEMENTS',  TEMPLATES . DS . 'Elements' . DS);


/**
 * Ex. en local : D:\Programmes\wamp64\www\Vitrine-v6\as_content\Param\
 * Ex. en ligne : /var/www/vhosts/ma-vitrine.pro/httpdocs/as_content/Param\
 */
define('LAYOUT',  ROOT . DS . APP_DIR . DS . 'Layout' . DS . Configuration::read('NAMETHEME') . DS);


/**
 * Ex. en local : D:\Programmes\wamp64\www\Vitrine-v6\as_config\
 * Ex. en ligne : /var/www/vhosts/ma-vitrine.pro/httpdocs/as_config/
 */
define('APP', ROOT . DS);


/**
 * Ex. en local : D:\Programmes\wamp64\www\Vitrine-v6\as_webroot\
 * Ex. en ligne : /var/www/vhosts/ma-vitrine.pro/httpdocs/
 */
define('WWW_ROOT', ROOT . DS . APP_WEBROOT . DS);
define('WWW_ROOT_INC' , ROOT . DS . WEBROOT . DS . 'inc' . DS);


/**
 * Dossier des thèmes
 */
define('THEME_APP', ROOT . DS . APP_INC . DS . 'themes/'. Configuration::read('NAMETHEME') . '/');
define('THEME_DEFAULT', ROOT . DS . APP_INC . DS . 'themes/default/');
define('THEME_WWW', APP_WEBROOT . DS . 'themes' . DS . Configuration::read('NAMETHEME') . DS);
define('THEME_DIR_CSS' , THEME_WWW . 'css' . DS);
define('THEME_DIR_JS' , THEME_WWW . 'js' . DS);
define('THEME_DIR_IMG' , THEME_WWW . 'img' . DS);
define('DIR_IMG' , APP_WEBROOT . DS . 'img' . DS);


/**
 * 
 */
define('INC', ROOT . DS);

define('CONFIG', ROOT . DS . APP_CONFIG . DS);


