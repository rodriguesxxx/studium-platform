<?php

namespace src\models\service;

use src\models\dao\UserDao;

use src\models\utils\CookieHandling as cookie;

use src\models\utils\Cryptografy;


class UserLogin{

    private $credential;
    private $password;

    function __construct($credential, $password){
        $this->credential = $credential;
        $this->password = $password;
    }

    public function login(){

        if(UserDao::isValidCredential($this->credential, $this->password)){

            $userID = Cryptografy::encrypted( UserDao::getIdByCredential($this->credential) );

            cookie::setCookie($cookieName="userID", $cookieValue=$userID, $numberDays=365);
            cookie::setCookie($cookieName="logged", $cookieValue="studiumapp", $numberDays=365);
            
            return true;
        }

        UserDao::$error = "Invalid credential or username!";
        return false;
        
    }
}