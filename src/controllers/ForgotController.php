<?php

namespace src\controllers;

use \core\Controller;
use src\models\dao\UserDao;
use src\models\utils\Cryptografy;
use src\models\utils\CheckUserLogged as check;

class ForgotController extends Controller {

    public function forgot(){

        if(check::isLogged())
            $this->redirect("/");
        
        else
            $this->render("forgot");
    }

    public function forgotAction(){
        $credential = $_POST['credential'];
        
        $userID = UserDao::getIdByCredential($credential);

        if($userID){

            //em alguns casos o id sera criptragrafado mas nao sera descriptografado, isso trata esse bug
            do{
                $idEncrypted = Cryptografy::encrypted($userID);
            } while(Cryptografy::decrypted($idEncrypted) != $userID); 

            $changePasswordUrl = $this->getBaseUrl() . "/change/" . $idEncrypted;

            //enviar essa url por email
            echo $changePasswordUrl;
        }

        else{
            return $this->render("forgot" ,[
                'error' => "Invalid Credential!",
                'errorLoginInfo' => [
                    'credential' => $credential,
                ]
            ]);
        }
    }

}
