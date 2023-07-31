<?php

namespace src\controllers;

use \core\Controller;

use src\models\utils\Cryptografy;

class ChangeController extends Controller{
    public function change($args){

        $id = Cryptografy::decrypted($args['id']);
        echo $id;
    }

    public function changeAction(){
        
    }
}