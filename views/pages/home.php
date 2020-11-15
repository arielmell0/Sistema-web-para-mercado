<h2 class="title">List of products</h2>
<?php
    
    listUsers();

    function listUsers(){
    
    require_once('models/ProductsModel.php');

    $Products_model = new productsModel();
    $result = $Products_model->listProducts();

    echo '<table class="table">';

    echo '<thead><tr><th scope="col">ID: </th>' . '<th scope="col">Nome: </th>' . '<th scope="col">E-mail: </th>' . '<th scope="col">Criado em: </th>' . '<th scope="col">Modificado em: </th></thead>';

    while($row_user = mysqli_fetch_assoc($result)){
    
        echo '<tbody><tr>' . $row_user['id'] . '</tr>';

        echo '<tr>' . $row_user['nome'] . '</tr>';

        echo '<tr>' . $row_user['email'] . '</tr>';
        
        echo '<tr>' . $row_user['created'] . '</tr></tbody>';
        
        echo '<tr>'; 
            if($row_user['modified'] === NULL){
                echo 'Não à modificações';
            } 
        echo '</tr></table>';

    }

    }

    

?>
