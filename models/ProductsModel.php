<?php

class productsModel {

    public $result;
    
    public function listProducts(){
        require_once('db/ConnectClass.php');
        $Oconn = new connectClass('localhost:3306', 'root', '', 'sis_mercado');
        $Oconn->openConn();
        $conn = $Oconn->openConn();

        $sql = 'SELECT * FROM `usuarios`';

        $this -> result = mysqli_query($conn, $sql);

        return $this -> result;

    }

}