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
            if(!isset($_GET['acao'])){
                $site->getHome();
            }else{
                switch($_GET['acao']){
                    case 'listProducts':
                        $site->listProducts();
                    break;
                    case 'registerProduct':
                        $site->registerProduct();
                    break;
                }
            }
        break;

        case 'clients':
            switch($_GET['acao']){
                case 'listClients':
                    $site->listClients();
                break;
                case 'registerClient':
                    $site->registerClient();
                break;
            }
        break;

    }
}
