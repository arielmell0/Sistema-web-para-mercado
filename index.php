<?php

if(!isset($_GET['controller'])){
    require_once('controllers/siteController.php');
    $site = new siteController();
    $site->getHome();
} else {
    switch($_GET['controller']){
        case 'products':
            require_once('controllers/siteController.php');
            $site = new siteController();
            switch($_GET['acao']){
                case 'registerProduct':
                    $site->registerProduct();
                break;
                case 'listProducts':
                    $site->listProducts();
                break;
            }
        break;

        case 'clients':
            switch($_GET['acao']){
                case 'registerClient':
                    $site->registerClient();
                break;
                case 'listClients':
                    $site->listClients();
                break;
            }
        break;

    }
}


?>