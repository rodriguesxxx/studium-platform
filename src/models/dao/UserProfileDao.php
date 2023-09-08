<?php

use src\models\service\UserProfile;
use \core\Model;

class ProfileDao extends Model{

    public static function addInfo(UserProfile $userProfile){
        if( ProfileDao::isAvalaibleUserId($userProfile->getUserId())){
            //TODO
        }
    }   


    ### AVALAIBLES   ###
    public static function isAvalaibleUserId($user_id){
        
        $query = (parent::select('id')
        ->where('user_id', $user_id)
        ->get());

        return !(count($query) > 0) ? true : false;
    }

}