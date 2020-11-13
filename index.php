<?php

require_once('models/ProductsModel.php');

$sis_mercado = new productsModel();
$sis_mercado -> getConsult();

?>