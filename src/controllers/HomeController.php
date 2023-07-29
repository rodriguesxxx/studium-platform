<?php
namespace src\controllers;

use \core\Controller;
use src\models\dao\UserDao;
use src\models\utils\Cryptografy;
use src\models\utils\CookieHandling as cookie;
use src\models\utils\CheckUserLogged as check;


class HomeController extends Controller {

    public function index() {


        if(check::isLogged()){

            $userID = Cryptografy::descrypted( cookie::isSetCookie("userID") );
    
            $this->render("home", [
                'userInfo'=>UserDao::getAllInfoById($userID)
            ]);
        }
            
        else
            $this->render("signin_signup");    
    }
    
}