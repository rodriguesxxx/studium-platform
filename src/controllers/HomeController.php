<?php
namespace src\controllers;

use \core\Controller;
use src\models\utils\CookieHandling as ch;

class HomeController extends Controller {

    public function index() {
        #checa se o usuario ja esta logado
        /*implementar*/ 
        if(ch::isSetCookie($cookieName="logged") == "")
            // $this->render("home");
            $this->redirect("/teste");
        
        else
            // $this->render("signin_signup");
            echo "index";
            
    }
    public function teste() {
        echo "teste";
    }
}