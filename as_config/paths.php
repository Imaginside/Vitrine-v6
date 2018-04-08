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
define('ROOT', dirname(__DIR__));

define('APP_DIR', 'as_config');
define('APP_INC', 'as_include');
define('APP_CON', 'as_content');
define('WEBROOT', 'as_webroot');

/**
 * Nom des dossiers
 */
if(SERV_NAME == 'localhost:8888' || SERV_NAME == 'localhost') {
    // define('APP_WEBROOT', 'as_webroot');
    define('APP_WEBROOT', '/Vitrine-v6/as_webroot');
}
else 
    define('APP_WEBROOT', '');




/**
 * Ex. en local : D:\Programmes\wamp64\www\Vitrine-v6\as_content\Content\
 * Ex. en ligne : /var/www/vhosts/ma-vitrine.pro/httpdocs/as_content/Content\
 */
define('CONTENT',  ROOT . DS . APP_CON . DS .'Content' . DS);


/**
 * Ex. en local : D:\Programmes\wamp64\www\Vitrine-v6\as_content\Controller\
 * Ex. en ligne : /var/www/vhosts/ma-vitrine.pro/httpdocs/as_content/Controller\
 */
define('CONTROLLER',  ROOT . DS . APP_CON . DS .'Controller' . DS);


/**
 * Ex. en local : D:\Programmes\wamp64\www\Vitrine-v6\as_content\Param\
 * Ex. en ligne : /var/www/vhosts/ma-vitrine.pro/httpdocs/as_content/Param\
 */
define('PARAM',  ROOT . DS . APP_CON . DS .'Param' . DS);


/**
 * Ex. en local : D:\Programmes\wamp64\www\Vitrine-v6\as_content\Param\
 * Ex. en ligne : /var/www/vhosts/ma-vitrine.pro/httpdocs/as_content/Param\
 */
define('LAYOUT',  ROOT . DS . APP_CON . DS .'Layout' . DS);


/**
 * Ex. en local : D:\Programmes\wamp64\www\Vitrine-v6\as_config\
 * Ex. en ligne : /var/www/vhosts/ma-vitrine.pro/httpdocs/as_config/
 */
define('APP', ROOT . DS . APP_DIR . DS);


/**
 * Ex. en local : D:\Programmes\wamp64\www\Vitrine-v6\as_webroot\
 * Ex. en ligne : /var/www/vhosts/ma-vitrine.pro/httpdocs/
 */
define('WWW_ROOT', ROOT . DS . APP_WEBROOT . DS);
define('WWW_ROOT_INC' , ROOT . DS . WEBROOT . DS . 'inc' . DS);

define('THEME_DIR_IMG' , APP_WEBROOT . DS . 'img' . DS);
define('THEME_DIR_CSS' , APP_WEBROOT . DS . 'css' . DS);
define('THEME_DIR_JS' , APP_WEBROOT . DS . 'js' . DS);



/**
 * 
 */
define('INC', ROOT . DS . APP_INC . DS);

define('CONFIG', ROOT . DS . APP_DIR . DS);


