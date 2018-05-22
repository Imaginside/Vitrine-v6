<?php
define('ROOT', rtrim(str_replace('\\', '/', dirname(dirname(__DIR__))), '/') . '/');
define('BASE_URL', str_replace($_SERVER['DOCUMENT_ROOT'], '', ROOT));
define('APP', ROOT . 'App/');
define('CORE_CONFIG', APP . 'Config/');
define('CORE_CLASSES', APP . 'Core/');
define('CORE_UTILITIES', APP . 'Utilities/');
define('CORE_HELPERS', CORE_UTILITIES . 'helpers/');
define('SITE', ROOT . 'site/');
define('IMAGES', 'site/Medias/img/');
define('CONFIG', SITE . 'Config/');