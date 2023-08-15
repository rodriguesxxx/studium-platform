<?php

namespace src\models\utils;

use src\models\dao\UserDao;
use src\models\utils\Cryptografy;
use src\models\utils\CookieHandling as CH;

class CheckUserLogged{

    public static function isLogged(){

        $userIdDesc = Cryptografy::decrypted( CH::isSetCookie("userID") );
        $isValidId = UserDao::isValidId( $userIdDesc );

        if( CH::isSetCookie("logged") == "studiumapp" && $isValidId )
            return true;
        else
            return false;
    }
    
}