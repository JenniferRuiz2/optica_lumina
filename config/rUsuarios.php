<?php
    include("../config/conexion.php");

    if(isset($_POST['nombre']) && isset($_POST['apellidoP']) && isset($_POST['apellidoM']) && isset($_POST['sexo']) && isset($_POST['user']) && isset($_POST['pass'])){
        $nombre = $_POST["nombre"];
        $apellidoP = $_POST["apellidoP"];
        $apellidoM = $_POST["apellidoM"];
        $sexo = $_POST["sexo"];
        $user =$_POST["user"];
        $pass = sha1($_POST["pass"]);
        $id_nuevo = "";
        //$array = array();
        $query = "SELECT MAX(id_usuario) as id_usuario From usuarios;";
        $runQuery = mysqli_query($conn, $query);
        while ($row = $runQuery->fetch_array()) {
            $id = $row['id_usuario'];
            $id_nuevo = $id+1;
        }
        print($id_nuevo);
        $sql = "INSERT INTO usuarios(id_usuario, nombre, acceso, tipo, email, genero) VALUES ('$id_nuevo', '$nombre $apellidoP $apellidoM', '$pass', 'Usuario', '$user', '$sexo')";
        $result = mysqli_query($conn, $sql);
        $data = array();

        while ($row = $result->fetch_array()) {
            $data[] = $row;
        }
        $response = $data;

        mysqli_close($conn);
        $res = json_encode($response);
        echo $res;
        }

    

?>