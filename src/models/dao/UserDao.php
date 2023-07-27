<?php

namespace src\models\dao;

use src\models\service\User;
use \core\Model;


abstract class UserDao extends Model{
    static $error;

    public static function add(User $user){
        
        if(UserDao::isAvaibleEmail($user->getEmail()) === true && 
            UserDao::isAvaibleUsername($user->getUsername()) === true ) {
                
                parent::insert([
                    'name'=>$user->getName(),
                    'username'=>$user->getUsername(),
                    'email'=>$user->getEmail(),
                    'password'=>$user->getPassword(),
                ])->execute();
                return true;

        }
        return UserDao::$error;
    }

    ### VALIDATIONS ###
    public static function isValidCredential($credential, $passwordInput){
        $query = (parent::select('password')
        ->where('username', $credential)
        ->orWhere('email', $credential)
        ->get());

        if(count($query) > 0){
            $passwordDB = $query[0]['password'];
            return (password_verify($passwordInput, $passwordDB)) ? true : false;

        } else {
            return false;
        }
    }


    ### AVAIBLES VALIDATIONS###
    public static function isAvaibleEmail($email){

        return !(parent::select()->where([
            'email'=>$email
        ])->execute()) ? true : UserDao::$error = "not available email address";
    
    }


    public static function isAvaibleUsername($username){

        return !(parent::select()->where([
            'username'=>$username
        ])->execute()) ? true : UserDao::$error = "not available username";
    }
}