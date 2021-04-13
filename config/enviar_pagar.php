<?php

include("../config/conexion.php");

if (isset($_POST['id'])){

   $id = $_POST['id'];

    $query = "SELECT SUM(carrito.precio_total) as precio_total from carrito where id_cliente = '$id';";
    $runQuery = mysqli_query($conn, $query);

    $data = array();

    while ($row = $runQuery->fetch_assoc()) {
        $data[] = $row;
    }
    $response = $data;

    mysqli_close($conn);
    $res = json_encode($response);
    echo $res;
}else{
    
}