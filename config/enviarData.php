<?php

include("../config/conexion.php");

if (isset($_POST['id']) && isset($_POST['id_armazon']) && isset($_POST['precio_total']) && isset($_POST['cantidad']) ) {

   $id = $_POST['id'];
   $id_armazon = $_POST['id_armazon'];
   $precio_total = $_POST['precio_total'];
   $cantidad = $_POST['cantidad'];

   $query = "INSERT INTO carrito(id_cliente,id_armazon,precio_total,cantidad) VALUES ('$id','$id_armazon','$precio_total','$cantidad');";
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