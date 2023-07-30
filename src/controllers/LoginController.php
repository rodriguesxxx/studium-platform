<?php

namespace src\controllers;

use \core\Controller;

use src\models\service\UserLogin;

use src\models\dao\UserDao;

use src\models\utils\CheckUserLogged as check;

class LoginController extends Controller{
    
    public function login(){
        if(check::isLogged())
            $this->redirect("/");
        
        else
            $this->render("signin_signup");
    }

    public function loginAction(){

        $credential = $_POST['credential'];
        $password = $_POST['password'];
        $userLogin = new UserLogin($credential, $password);
        
        if($userLogin->login()){
            return $this->redirect("/");
        }
        
        return $this->render("signin_signup" ,[
            'error' => UserDao::$error,
            'errorLoginInfo' => [
                'credential' => $credential,
            ]
        ]);


    }

} 