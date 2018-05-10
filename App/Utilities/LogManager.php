<?php

namespace II\Utilities;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class LogManager {

    private static $debug = TRUE;
    private static $log = NULL;

    private static function InitLog() {
        if (self::$log === NULL) {
            self::$log = new Logger('debug_log');
            $logPath = ROOT . '/logs/logs.log';
            self::$log->pushHandler(new StreamHandler($logPath));
        }
    }

    private static function log($type, $message, $context){
        if (self::$debug) {
            self::InitLog();
            self::$log->$type($message, $context);
        }
    }

    public static function LogDebug ($message, $context = array()) {
        self::log('debug', $message, $context);
    }

    public static function LogError ($message, $context = array()) {
        self::log('error', $message, $context);
    }

    public static function LogWarning ($message, $context = array()) {
        self::log('warning', $message, $context);
    }

    public static function LogInfo ($message, $context = array()) {
        self::log('info', $message, $context);
    }

    public static function LogNotice ($message, $context = array()) {
        self::log('notice', $message, $context);
    }

}