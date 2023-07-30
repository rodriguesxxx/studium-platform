<?php

namespace src\controllers;

use \core\Controller;
use src\models\dao\UserDao;
use src\models\utils\Cryptografy;

class ForgotController extends Controller {

    public function forgot(){
        $this->render('forgot');
    }

    public function forgotAction(){
        $credential = $_POST['credential'];
        
        $userID = UserDao::getIdByCredential($credential);

        if($userID){

            $changePasswordUrl = $this->getBaseUrl() . "/change?id=" . Cryptografy::encrypted($userID);
            echo $changePasswordUrl;
            //puxa o email pela credencial e envia a url para a troca da senha        
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
