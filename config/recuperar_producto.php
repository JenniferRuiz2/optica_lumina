<?php

include("../config/conexion.php");

if (isset($_POST['data'])) {

   $datos = $_POST['data'];

   $query = "SELECT * FROM armazones WHERE id_armazon = '".$datos."';";
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