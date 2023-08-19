<?php

namespace src\controllers;

use \core\Controller;

use src\models\utils\CheckUserLogged as check;

use src\models\utils\FormatUsername;


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
        $username = FormatUsername::format( $_POST['username'] );
        $email = $_POST['email'];
        $password = $_POST['password'];


        if ( $username ){
            $userR = new UserRegister($name, $username, $email, $password);
            $result = $userR->register();
        } else{
            $result = false;
            UserDao::$error = "Invalid username! numbers, - and _ signs are allowed.";
        }

        
        if( $result ){
            return $this->redirect("/");
        }
        
        return $this->render("signin_signup", [
            'error' => UserDao::$error,

            'errorRegisterInfo' => [
                'name' => $name,
                'username' => $username,
                'email'=> $email,
            ]
        ]);
    }
}