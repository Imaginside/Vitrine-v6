<?php

class MyError
{

    public static $error = [];

    public static function showError()
    {
        
        if(!PROD) {
            if(count(self::$error) > 0) {
                echo '<p class="warning" style="color:orange">';
                foreach (self::$error as $key => $value) {
                    echo $value . '<br>';
                }
                echo '</p>';
            }
        }
    }

    public static function addError($Value)
    {
        self::$error[] = $Value;
    }
    
}
