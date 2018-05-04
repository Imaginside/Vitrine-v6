<?php

class Configuration{

    protected static $singleton = null;

    protected $settings = [];

    public function __construct(){
        /**
         * Paramètres de l'application
         */
        $this->settings = include ROOT . '/as_app/Config/settings.php';
        // require ROOT . '/as_app/Config/settings.php';
    }

    protected static function getInstance()
    {
        if(static::$singleton === null)
            static::$singleton = new static();
        return static::$singleton;
    }

    public static function read($name)
    {
        $instance = static::getInstance();
        return $instance->settings[$name];
    }

    public static function write($name, $value)
    {
        $instance = static::getInstance();
        $instance->settings[$name] = $value;
    }

}