<?php

class connectClass{

    private $conn;

    private $host;
    private $userDB;
    private $passDB;
    private $nameDB;

    public function openConn(){

        $this -> conn = mysqli_connect($this -> getHost(), $this -> getUser(),
        $this -> getPassword(), $this -> getNameDB());

        mysqli_set_charset($this -> conn, 'utf8');

        if(mysqli_errno($this -> conn)){
            echo 'Banco de dados não conectado, erro: ' . mysqli_error($this -> conn);
        } 
        
    }

    public function getConn(){
        return $this -> conn;
    }

    //Getters e setters

    public function __construct($host, $user, $pass, $name){
        $this -> setHost($host);
        $this -> setUser($user);
        $this -> setPassword($pass);
        $this -> setNameDB($name);
    }
    

    private function setHost($host){
        $this -> host = $host;
    }
    private function getHost(){
        return $this -> host;
    }

    private function setUser($userDB){
        $this -> userDB = $userDB;
    }
    private function getUser(){
        return $this -> userDB;
    }

    private function setPassword($passDB){
        $this -> passDB = $passDB;
    }
    private function getPassword(){
        return $this -> passDB;
    }

    private function setNameDB($nameDB){
        $this -> nameDB = $nameDB;
    }
    private function getNameDB(){
        return $this -> nameDB;
    }
}