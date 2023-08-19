<?php

namespace src\models\utils;

class FormatUsername{

    public static function format( $username ){

        $username = strtolower( str_replace(" ", "", $username)) ;
        if( FormatUsername::isValidUsername($username) ){
            return $username;
        }   
        
        return false;
    }
    private static function isValidUsername( $username ){

        $standard = '/^[a-zA-Z0-9\-_]+$/';
        
        if (preg_match($standard, $username)) {
            return true;

        } else {
            return false; 
        }
    }
}   