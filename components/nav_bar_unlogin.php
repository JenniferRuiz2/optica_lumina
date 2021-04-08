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
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Enfermedad
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php
                    
                    $query = "SELECT nombre FROM categorias WHERE tipo = 'enfermedad'";
                    $result = mysqli_query($conn,$query) or die("database error:". mysqli_errno($conn));
                    while ($valores = mysqli_fetch_array($result)) {
                        echo '<a class="dropdown-item" value = "'.$valores["nombre"].'">'.$valores["nombre"].'</a>';
                    }
                   ?>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Categorias
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php
                    
                    $query = "SELECT nombre FROM categorias WHERE tipo = 'lente'";
                    $result = mysqli_query($conn,$query) or die("database error:". mysqli_errno($conn));
                    while ($valores = mysqli_fetch_array($result)) {
                        echo '<a class="dropdown-item" value = "'.$valores["nombre"].'">'.$valores["nombre"].'</a>';
                    }
                   ?>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Marcas
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php
                    
                    $query = "SELECT nombre FROM categorias WHERE tipo = 'marca'";
                    $result = mysqli_query($conn,$query) or die("database error:". mysqli_errno($conn));
                    while ($valores = mysqli_fetch_array($result)) {
                        echo '<a class="dropdown-item" value = "'.$valores["nombre"].'">'.$valores["nombre"].'</a>';
                    }
                   ?>
                </div>
            </li>
        </ul>
        <span class="navbar-text">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item mt-2" title="Iniciar Sesión">
                <a href="../pages/inicio-sesion.php"><img src="../images/userlogin.png" width="30px"></a>
            </li>
        </ul>
        </span>
    </div>
</nav>