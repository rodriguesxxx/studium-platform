<?php
namespace src\controllers;

use \core\Controller;
use src\models\utils\CheckUserLogged as check;


class HomeController extends Controller {

    public function index() {

        if(check::isLogged())
            $this->render("home");
            
        else
            $this->render("signin_signup");
            
    }
}