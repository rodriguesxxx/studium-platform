<?php
namespace src\controllers;

use \core\Controller;
use src\models\dao\UserDao;
use src\models\utils\Cryptografy;
use src\models\utils\CookieHandling as cookie;
use src\models\utils\CheckUserLogged as checkLogged;


class ProfileController extends Controller {

    public function profile(){

        
        if(checkLogged::isLogged()){
            $userID = $_SESSION['userID'];
            $fullName = UserDao::getNameById( $userID );
            
            $this->render('profile',
                ['fullName' => $fullName]
            );
        }
        else{
            $this->redirect('signin_signup');
        }
    }

}