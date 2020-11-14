<h2 class="title">List of products</h2>
<?php
require_once('models/productsModel.php');

$Products_model = new productsModel();
$result = $Products_model->getConsult();

while($row_user = mysqli_fetch_assoc($result)){
    echo $row_user;
}
