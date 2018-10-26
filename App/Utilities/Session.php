<?php
namespace II\Utilities;

class Session
{

    public static function init()
    {
        if (session_status() == PHP_SESSION_NONE)
            session_start();
    }

    public static function set($name, $value)
    {
        static::init();
        $_SESSION[$name] = $value;
    }

    public static function read($name, $default = null)
    {
        static::init();
        if(isset($_SESSION[$name]))
            return $_SESSION[$name];
        return $default;
    }

    public static function consum($name, $default = null)
    {
        $value = static::read($name, $default);
        unset($_SESSION[$name]);
        return $value;
    }

    /**
     * Helper
     * Enregistre un message d'erreur
     *
     * @param string $value
     * @return void
     */
    public static function addError($value)
    {
        $errors = static::read('errorsMessages', []);
        $errors[] = $value;
        return static::set('errorsMessages', $errors);
    }

    /**
     * Helper
     * Retourne les erreurs ajoutées via static::addError(...)
     * Supprime les erreurs de la session
     *
     * @return array
     */
    public static function getErrors()
    {
        return static::consum('errorsMessages', []);
    }

    public static function addSuccessMessage($value)
    {
        $success = static::read('successMessages', []);
        $success[] = $value;
        return static::set('successMessages', $success);
    }

    public static function getSuccessMessages()
    {
        return static::consum('successMessages', []);
    }

    public static function addInfoMessage($value)
    {
        $info = static::read('informationsMessages', []);
        $info[] = $value;
        return static::set('informationsMessages', $info);
    }

    public static function getInfoMessages()
    {
        return static::consum('informationsMessages', []);
    }

}