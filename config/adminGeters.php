<?php
    include('conexion.php');

    class AdminGeters{
    public function getCategoria()
    {
        $query = 'SELECT nombre from categorias where tipo = "marca";';
        $runQuery = mysqli_query($conn, $query);
        $data = array();

        if($runQuery){
            while($row = $runQuery->fetch_array()){
                $data[] = $row;
            }
        }
        return $data;

        mysqli_close($conn);
    }
}
?>