<?php

    include('conexion.php');

    $state = $_POST['StateDiseas'];

    $query = "SELECT categorias.id_categoria, armazones.* from categorias inner join armazones where categorias.id_categoria = armazones.id_marca and  categorias.nombre = 'Reebok'"

?>