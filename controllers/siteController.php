<?php

class siteController{

    public function getHome(){
        require_once('views/templates/header.php');
        require_once('views/pages/home.php');
        require_once('views/templates/footer.php');
    }

    public function listProducts(){
        require_once('views/templates/header.php');
        require_once('views/pages/createProducts.php');
        require_once('views/templates/footer.php');
    }

    public function registerProduct(){
        require_once('views/templates/header.php');
        require_once('views/pages/createProducts.php');
        require_once('views/templates/footer.php');
    }

    public function registerClient(){
        require_once('views/templates/header.php');
        require_once('views/pages/listClients.php');
        require_once('views/templates/footer.php');
    }

    public function listClients(){
        require_once('views/templates/header.php');
        require_once('views/pages/listClients.php');
        require_once('views/templates/footer.php');
    }


    
}