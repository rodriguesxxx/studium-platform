<?php

namespace src\models\utils;

use src\models\utils\CookieHandling as CH;

class CheckUserLogged{

    public static function isLogged(){
        if(CH::isSetCookie("logged") == "studiumapp")
            return true;
        else
            return false;
    }
    
}