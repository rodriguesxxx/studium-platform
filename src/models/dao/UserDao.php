<?php

namespace src\models\dao;

use src\models\service\User;

use src\models\utils\Cryptografy;

use \core\Model;

use Exception;

abstract class UserDao extends Model{
    static $error;

    ### MAIN FUNCTIONS ###
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

    ### UPDATES ###
    public static function passwordUpdate($id, $newPassword){
        parent::update(['password' => $newPassword])
        ->where('id', $id)
        ->execute();
    }

    ### GETERS ###

    public static function getAllInfoById($id){
        return parent::select()->where('id', $id)->one();
    }

    public static function getIdByCredential($credential){
        try{
            return parent::select('id') 
                ->where('username', $credential)
                ->orWhere('email', $credential)
                ->one()['id'];
        } catch(Exception $e){
            return false;
        }
    }

    ### VALIDATIONS ###
    public static function isValidCredential($credential, $passwordInput){
        
        $query = (parent::select('password')
        ->where('username', $credential)
        ->orWhere('email', $credential)
        ->get());

        if(count($query) > 0){
            
            $passwordDb = $query[0]['password'];
            return ( password_verify($passwordInput, $passwordDb) ) ? true : false;

        } else {
            return false;
        }
    }


    ### AVAIBLES VALIDATIONS###
    public static function isAvaibleEmail($email){

        return !(parent::select()->where([
            'email'=>$email
        ])->execute()) ? true : UserDao::$error = "Not available email address!";
    
    }


    public static function isAvaibleUsername($username){

        return !(parent::select()->where([
            'username'=>$username
        ])->execute()) ? true : UserDao::$error = "Not available username!";
    }
}