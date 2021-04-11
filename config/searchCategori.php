<?php

    include('conexion.php');
    
if (isset($_POST['stateCategori']) && $_POST['stateCategori'] != "") {
    $state = $_POST['stateCategori'];

    $query = "SELECT categorias.id_categoria, armazones.* from categorias inner join armazones where categorias.id_categoria = armazones.id_tipo and  categorias.nombre = '".$state."';";
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
}
   
?>