<?php

namespace src\models\service;

use src\models\dao\UserDao;

use src\models\utils\CookieHandling as cookie;


class UserLogin{

    private $credential;
    private $password;

    function __construct($credential, $password){
        $this->credential = $credential;
        $this->password = $password;
    }

    public function login(){

        if(UserDao::isValidCredential($this->credential, $this->password)){
            cookie::setCookie($cookieName="logged", $cookieValue="studiumapp", $numberDays=365);
            return true;
        }

        UserDao::$error = "Invalid credential or username!";
        return false;
        
    }
}