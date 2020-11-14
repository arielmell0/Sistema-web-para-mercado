<?php

if(!isset($_GET['controller'])){
    require_once('controllers/siteController.php');
    $site = new siteController();
    $site->getHome();
} 

?>