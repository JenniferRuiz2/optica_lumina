
<?php

include("../config/conexion.php");

if (isset($_POST['id_usuario'])) {

   $datos = $_POST['id_usuario'];

   $query = "SELECT armazones.color,armazones.foto,armazones.precio,armazones.modelo,categorias.nombre, carrito.precio_total, carrito.cantidad from 
             ((armazones inner join carrito) inner join usuarios)inner join categorias
              where armazones.id_armazon = carrito.id_armazon
               and usuarios.id_usuario = '$datos' 
               and categorias.id_categoria = armazones.id_marca ;";
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