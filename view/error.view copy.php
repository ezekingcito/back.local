<?php

use config\Config;

$config = new Config();
?>

<body>
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="text-center">
            <h1 class="display-1 fw-bold">404</h1>
            <p class="fs-3"> <span class="text-danger">Opps!</span> Pagina no encontrada</p>
            <p class="lead">
                La página que estas buscando parece que no esta disponible
            </p>
            <a href="<?= $config->redireccion('/'); ?>" class="btn btn-primary">Home</a>
        </div>
    </div>
</body>