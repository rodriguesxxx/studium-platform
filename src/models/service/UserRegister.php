<?php

namespace src\models\service;

use src\models\service\User;

use src\models\dao\UserDao;

use src\models\utils\CookieHandling as cookie;

class UserRegister extends User{
    
    public function register(){

        $add = UserDao::add($this);
        if($add === true){
            cookie::setCookie($cookieName="logged", $cookieValue="studiumapp", $numberDays=365);
            return "";
        }
         return UserDao::$error;    
    }

    
}