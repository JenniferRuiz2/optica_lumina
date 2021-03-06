<?php
    include("../config/conexion.php");
?>

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow">
    <a class="navbar-brand " href="../pages/principal_ecommerce.php"><img src="../images/FOTO_LUMINA_BIEN.png" alt="logoLumina" width="50px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <p class="nav-link ml-3 my-sm-0 font-weight-bold">Tienda en linea<span class="sr-only"></span></p>
            </li>
            <li class="nav-item">
            <select class="custom-select menuDiseas border-0">
                    <option selected>Enfermedad</option>
                    <?php
                    
                    $query = "SELECT nombre FROM categorias WHERE tipo = 'enfermedad'";
                    $result = mysqli_query($conn,$query) or die("database error:". mysqli_errno($conn));
                    while ($valores = mysqli_fetch_array($result)) {
                        echo '<option value= "'.$valores["nombre"].'">'.$valores["nombre"].'</option>';
                    }
                   ?>
                </select>
            </li>
            <li class="nav-item dropdown">
            <select class="custom-select menuCategori border-0">
                    <option selected>Categoria</option>
                    <?php
                    
                    $query = "SELECT nombre FROM categorias WHERE tipo = 'lente'";
                    $result = mysqli_query($conn,$query) or die("database error:". mysqli_errno($conn));
                    while ($valores = mysqli_fetch_array($result)) {
                        echo '<option class = "border-0" value= "'.$valores["nombre"].'">'.$valores["nombre"].'</option>';
                    }
                   ?>
                </select>
            </li>
            <li class="nav-item dropdown ">
            <select class="custom-select menuBrand border-0">
                    <option selected>Marca</option>
                    <?php
                    
                    $query = "SELECT nombre FROM categorias WHERE tipo = 'marca'";
                    $result = mysqli_query($conn,$query) or die("database error:". mysqli_errno($conn));
                    while ($valores = mysqli_fetch_array($result)) {
                        echo '<option value= "'.$valores["nombre"].'">'.$valores["nombre"].'</option>';
                    }
                   ?>
                </select>
            </li>
        </ul>
        <span class="navbar-text">
        <ul class="navbar-nav mr-auto">
            <a href = "../pages/perfil.php" ><li class="nav-item"><i class="fa fa-user-circle-o" aria-hidden="true"></i><p class="name-user mr-3 mt-2">
            <?php $sesion = $_SESSION['email']; echo $sesion;?></p></li></a>
            <li class="nav-item mr-3 mt-2"><a href="../config/cerrar-sesion.php"><p class="name-user">Cerrar sesi??n</p></a></li>
            <li class="nav-item mt-2" title="Mis compras">
               <?php
               $query = "SELECT id_usuario FROM usuarios WHERE email = '$sesion'";
               $result = mysqli_query($conn,$query) or die("database error:". mysqli_errno($conn));
               while ($valores = mysqli_fetch_array($result)) {
                echo '<a href="../pages/carritoView.php?kame='.trim($valores['id_usuario']).'"><img src="../images/carrito.png" width="30px"></a>';
               }
               ?>
            </li>
        </ul>
        </span>
    </div>
</nav>