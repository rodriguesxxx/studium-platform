<?php

namespace src\controllers;

use \core\Controller;

use src\models\utils\CheckUserLogged as check;

use src\models\dao\UserDao;

use src\models\service\UserRegister;

class RegisterController extends Controller{

    public function register(){

        if(check::isLogged()) 
            return $this->redirect("/");
        else
            return $this->render("signin_signup");
    }

    //recebe um  post para efetuar o cadastro
    public function registerAction(){

        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $userR = new UserRegister($name, $username, $email, $password);
        $result = $userR->register();
        
        if($result)
            return $this->redirect("/");
        
        return $this->render("signin_signup", [
            'error' => UserDao::$error
        ]);
    }
}