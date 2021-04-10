<?php

    include('conexion.php');

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
?>