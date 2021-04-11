<?php

    include('conexion.php');
    $fecha = date_create();
    $fechaformat = date_format($fecha,  'Y-m-d H:i:s');
    
if (isset($_POST['stateBrand']) && $_POST['stateBrand'] != "Marca") {
    $state = $_POST['stateBrand'];

    $query = "SELECT categorias.id_categoria, armazones.* from categorias inner join armazones where categorias.id_categoria = armazones.id_marca and  categorias.nombre = '".$state."';";
    $runQuery = mysqli_query($conn, $query);

    $data = array();

    while ($row = $runQuery->fetch_array()) {
        $data[] = $row;
    }
    $response = $data;

    mysqli_close($conn);
    $res = json_encode($response);
    echo $res;

  
}else {
    $query = "SELECT categorias.id_categoria, armazones.* from categorias inner join armazones where categorias.id_categoria = armazones.id_marca and  armazones.actualizado between '2021-03-01 00:00:00' and '".$fechaformat."';";
    $runQuery = mysqli_query($conn, $query);

    $data = array();

    while ($row = $runQuery->fetch_array()) {
        $data[] = $row;
    }
    $response = $data;

    mysqli_close($conn);
    $res = json_encode($response);
    echo $res;
}
   
?>