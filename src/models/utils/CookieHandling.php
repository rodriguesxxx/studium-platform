<?php

namespace src\models\utils;

class CookieHandling{
    public static function setCookie(String $cookieName, String $cookieValue = "", int $numberDays = 30){
        setcookie($cookieName, $cookieValue, time() + (86400 * $numberDays), "/");
    }
    public static function isSetCookie($cookieName){
        
        if(isset($_COOKIE[$cookieName])){
            return $_COOKIE[$cookieName];
        }
        return false;
    }
}