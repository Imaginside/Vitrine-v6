<?php
namespace II\Utilities;

use II\Utilities\Configure;

class ConfigureCore extends Configure {

    protected static $core = [];

    public static function write($name, $value)
    {
        static::_write($name, $value, static::$core);
    }

    public static function read($name)
    {
        return static::_read($name, static::$core);
    }

}