<?php
namespace src\controllers;

use \core\Controller;
use src\models\dao\UserDao;
use src\models\utils\Cryptografy;
use src\models\utils\CookieHandling as cookie;
use src\models\utils\CheckUserLogged as checkLogged;


class NewsController extends Controller {

    public function news(){

        if(checkLogged::isLogged()){
            $this->render('news');
        }
        else{
            $this->redirect('signin_signup');
        }
    }

}