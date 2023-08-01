<?php

namespace src\controllers;

use \core\Controller;

use src\models\dao\UserDao;

use src\models\utils\Cryptografy;

class ChangeController extends Controller{

    public function change($args){

        $_SESSION['id'] = Cryptografy::decrypted($args['id']);
        
        return $this->render("change");
    }

    public function changeAction(){
        
        $id = $_SESSION['id'];
        $password = $_POST['password'];
        $confPassword = $_POST['conf-password'];
        if($password == $confPassword){

            $newPassword = Cryptografy::encrypted($password);
            
            UserDao::passwordUpdate($id, $newPassword);
        
            echo "foi";
        } 
    
    }
}