<?php

namespace src\controllers;

use \core\Controller;

class ForgotController extends Controller {

    public function forgot(){
        $this->render('forgot');
    }

}
