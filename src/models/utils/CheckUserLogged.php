<?php

namespace src\models\utils;

use src\models\dao\UserDao;
use src\models\utils\Cryptografy;
use src\models\utils\CookieHandling as CH;

class CheckUserLogged{

    public static function isLogged(){

        $userIdDescrypted = Cryptografy::decrypted( CH::isSetCookie("userID") );
        
        $isValidId = UserDao::isValidId( $userIdDescrypted );

        if( CH::isSetCookie("logged") && $isValidId )
            return true;
        else
            return false;
    }
    
}