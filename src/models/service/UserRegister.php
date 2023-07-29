<?php

namespace src\models\service;

use src\models\service\User;

use src\models\dao\UserDao;

use src\models\utils\CookieHandling as cookie;

use src\models\utils\Cryptografy;

class UserRegister extends User{
    
    public function register(){

        $add = UserDao::add($this);
        
        if($add === true){
            
            $userID = Cryptografy::encrypted( UserDao::getIdByCredential( $this->getUsername() ) );

            cookie::setCookie($cookieName="userID", $cookieValue=$userID, $numberDays=365);
            cookie::setCookie($cookieName="logged", $cookieValue="studiumapp", $numberDays=365);
            return true;
        }

         return false;    
    }

    
}