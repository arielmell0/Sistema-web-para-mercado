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
            echo '<tr><th>' . $row_user['id'] . '</th>';
            echo '<td>' . $row_user['nome'] . '</td>';
            echo '<td>' . $row_user['email'] . '</td>';
            echo '<td>' . $row_user['created'] . '</td>';
            if($row_user['modified'] === null){
                echo '<td>Não existem modificações</td></tr>';
            } else {
                echo '<td>' . $row_user['modified'] . '</td></tr>';
            }
        }

    }

?>
