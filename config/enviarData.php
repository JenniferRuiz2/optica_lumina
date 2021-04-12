<?php

include("../config/conexion.php");

if (isset($_POST['id']) && isset($_POST['id_armazon']) ) {

   $id = $_POST['id'];
   $id_armazon = $_POST['id_armazon'];

   $query = "INSERT INTO carrito(id_cliente,id_armazon) VALUES ('$id','$id_armazon');";
    $runQuery = mysqli_query($conn, $query);

    $data = array();

    while ($row = $runQuery->fetch_array()) {
        $data[] = $row;
    }
    $response = $data;

    mysqli_close($conn);
    $res = json_encode($response);
    echo $res;
}else{
    
}

?>