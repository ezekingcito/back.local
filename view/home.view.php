<?php

use config\Config;

$config = new Config();
?>

<body>
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="text-center">
            <h1 class="display-1 fw-bold"><?php echo $_SESSION['usuario']?></h1>
            <p class="fs-3"> <span class="text-danger">Bienvenido!</span></p>
            <a href="<?= $config->redireccion('logout'); ?>" class="btn btn-outline-danger">Cerrar Sesión</a>
        </div>
    </div>
</body>
