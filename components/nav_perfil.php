<nav class=" bg-white border-bottom shadow-sm navbar navbar-expand-lg">
    <a class="my-0 mr-md-auto font-weight-normal text-dark" href="#">
        <img src="img/icolumina.png" class="d-inline-block align-top contemt" alt="" width="40" height="40"> Mi perfil</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarcollapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <a href="#" ><img src="img/carrito.png" class="d-inline-block align-top align-content-center contemt centro" alt="" width="20" height="20"> <br>Carrito</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                <img src="<?php echo "data:image/jpg; base64,". base64_encode($array['foto']); ?>" class="d-inline-block align-top contemt foto-perfil" alt="">
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="perfil.php">Mi perfil</a>
                    <a class="dropdown-item" href="datos-envio.php">Datos de envío</a>
                    <a class="dropdown-item" href="config/cerrar-sesion.php">Cerrar sesión</a>
                </div>
            </li>
        </ul>
    </div>
</nav>