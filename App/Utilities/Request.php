<?php
namespace II\Utilities;

class Request
{
    
    protected static $domain;
    protected static $requestUri;
    protected static $uri;
    protected static $uriGet;
    protected static $get;
    protected static $post;
    protected static $files;
    protected static $httpMethod;

    public static function init()
    {
        static $init = false;
        if($init)
            return;
        $init = true;

        static::$domain = static::fetchDomain();
        static::$requestUri = static::fetchRequestUri();
        static::$uri = static::getRequestedFile(static::$requestUri);
        static::$uriGet = static::getGetParameters(static::$requestUri);
        static::$get = static::fetchGET();
        static::$post = static::fetchPOST();
        static::$files = static::fetchFILES();
        static::$httpMethod = static::fetchMethod();
    }

    protected static function fetchRequestUri()
    {
        $uri = preg_replace('/^' . str_replace('/','\/', BASE_URL) . '/', '', $_SERVER['REQUEST_URI']);
        return $uri;
    }

    protected static function fetchDomain()
    {
        return $_SERVER['HTTP_HOST'];
    }

    protected static function getRequestedFile($uri)
    {
        if($im = strrpos($uri, '?'))
           return substr($uri, 0, $im);
        return $uri;
    }

    protected static function getGetParameters($uri)
    {
        if($im = strrpos($uri, '?'))
           return substr($uri, $im + 1);
        return '';
    }

    protected static function fetchGET()
    {
        return isset($_GET) ? $_GET : [];
    }

    protected static function fetchPOST()
    {
        return isset($_POST) ? $_POST : [];
    }

    protected static function fetchFILES()
    {
        return isset($_FILES) ? $_FILES : [];
    }

    protected static function fetchMethod()
    {
        return isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';
    }

    public static function isGET()
    {
        return static::$httpMethod === 'GET' && empty(static::post());
    }

    public static function isPOST()
    {
        return static::$httpMethod === 'POST' || !empty(static::post()) || !empty(static::files());
    }

    public static function isPUT()
    {
        return static::$httpMethod === 'PUT';
    }

    public static function isDELETE()
    {
        return static::$httpMethod === 'DELETE';
    }

    public static function get()
    {
        return static::$get;
    }

    public static function post()
    {
        return static::$post;
    }

    public static function files()
    {
        return static::$files;
    }

    public static function getDomain()
    {
        return static::$domain;
    }

    public static function getURI()
    {
        return static::$uri;
    }

    public static function getHttpMethod()
    {
        return static::$httpMethod;
    }

}
