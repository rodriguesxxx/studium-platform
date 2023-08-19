<?php
namespace src\controllers;

use \core\Controller;
use src\models\dao\UserDao;
use src\models\utils\Cryptografy;
use src\models\utils\CookieHandling as cookie;
use src\models\utils\CheckUserLogged as checkLogged;


class HomeController extends Controller {

    public function index() {


        if( checkLogged::isLogged() ){

            $userID = Cryptografy::decrypted( cookie::isSetCookie("userID") );
            $_SESSION['userID'] = $userID;

            $firstName = explode( " ", UserDao::getNameById( $userID ) )[0];

            return $this->render("home", [
                'firstName'=>$firstName
            ]);
        }
            
        else
            return $this->redirect("/login");    
    }
    
}