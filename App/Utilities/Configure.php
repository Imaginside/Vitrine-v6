<?php
namespace II\Utilities;

class Configure
{

    protected static $data = [];

    public static function loadConfigurationFile($filename)
    {
        $configuration = include $filename;
        static::loadConfiguration($configuration);
    }

    public static function loadConfiguration(array $configuration){
        foreach($configuration as $name => $value)
        {
            static::write($name, $value);
        }
    }

    public static function write($name, $value)
    {
        static::_write($name, $value, static::$data);
    }

    protected static function _write($name, $value, array &$writeTo)
    {

        $name = trim($name, '.');
        if($dotPos = strpos($name, '.'))
        {
            $_name = substr($name, 0, $dotPos);

            if(!isset($writeTo[$_name]) || !is_array($writeTo[$_name]))
                $writeTo[$_name] = [];

            if(isset($writeTo[$_name]) && is_array($writeTo[$_name]))
                static::_write(substr($name, $dotPos + 1), $value, $writeTo[$_name]);

            return;
        }

        if(isset($writeTo[$name]) && is_array($writeTo[$name]))
            $writeTo[$name] = $value + $writeTo[$name];
        else
            $writeTo[$name] = $value;
        
    }

    public static function read($name)
    {
        return static::_read($name, static::$data);
    }

    protected static function _read($name, array &$readFrom)
    {
        if($dotPos = strpos($name, '.'))
        {
            $_name = substr($name, 0, $dotPos);
            if(!isset($readFrom[$_name])) return null;
            return static::_read(substr($name, $dotPos + 1), $readFrom[$_name]);
        }
        return isset($readFrom[$name]) ? $readFrom[$name] : null;
        
    }

}