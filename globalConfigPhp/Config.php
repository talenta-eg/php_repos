<?php

abstract class Config
{

    private static $protected = []; // for DB /  password etc .,
    private static $public = [];// For all public strings such as meta stuff for site

    /**
     * @param $key
     * @return array
     */
    public static function getProtected($key)
    {
        return isset(self::$protected[$key]) ? self::$protected[$key] : false;
    }


    /**
     * @param $key
     * @param $value
     */
    public static function setProtected($key, $value)
    {
        self::$protected[$key] = $value;
    }

    /**
     * @param array $param_arr
     */
    public static function setProtectedList(array $param_arr)
    {
        foreach ($param_arr as $key => $value) {
            self::$protected[$key] = $value;
        }
    }


    /**
     * @param $key
     * @return bool
     */
    public static function getPublic($key)
    {
        return isset(self::$public[$key]) ? self::$public[$key] : false;
    }

    /**
     * @param $key
     * @param $value
     */
    public static function setPublic($key, $value)
    {
        self::$public[$key] = $value;
    }


    /**
     * @param $key
     * @return bool
     */
    public function __get($key)
    {
        return isset(self::$public[$key]) ? self::$public[$key] : false;
    }

    /**
     * @param $key
     * @return bool
     */
    public function __isset($key)
    {
        return isset(self::$public[$key]);
    }


}


//Ref
//http://stackoverflow.com/questions/3724584/what-is-the-best-way-to-save-config-variables-in-a-php-web-app