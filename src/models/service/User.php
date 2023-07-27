<?php

namespace src\models\service;
class User{
    private $name;
    private $username;
    private $email;
    private $password;

    
    function __construct($name, $username, $email, $password){
        $this->setName($name);
        $this->setUsername($username);
        $this->setEmail($email);
        $this->setPassword($password);
    }

    public function setName($name){
        $this->name = ucwords($name);
    }

    public function setUsername($username){
        $this->username = strtolower(str_replace(" ", "", $username));
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setPassword($password){
        $password_encrypted = password_hash($password, PASSWORD_DEFAULT);
        $this->password = $password_encrypted;
    }

    public function getName(){
        return $this->name;
    }
    public function getUsername(){
        return $this->username;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
}