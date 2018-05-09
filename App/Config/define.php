<?php
define('ROOT', rtrim(str_replace('\\', '/', dirname(dirname(__DIR__))), '/') . '/');
define('BASE_URL', str_replace($_SERVER['DOCUMENT_ROOT'], '', ROOT));
define('APP', ROOT . 'App/');
define('CORE_CONFIG', APP . 'Config/');
define('CORE_CLASSES', APP . 'Core/');
define('SITE', ROOT . 'site/');
define('CONFIG', SITE . 'Config/');