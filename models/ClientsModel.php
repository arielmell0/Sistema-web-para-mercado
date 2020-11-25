<?php

class clientsModel {

    public $result;
    
    public function listClients(){
        require_once('db/ConnectClass.php');
        $Oconn = new connectClass('localhost:3306', 'root', '', 'pw_exemple');
        $Oconn->openConn();
        $conn = $Oconn->openConn();

        $sql = 'SELECT * FROM `clients`';

        $this -> result = mysqli_query($conn, $sql);

        return $this -> result;

    }

}