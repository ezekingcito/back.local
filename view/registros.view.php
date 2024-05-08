<?php

use config\Config;

$config = new Config();
?>

<body>
    <div class="text-center">
        <div class="container">
            <div class="row mt-4">
                <div class="col">
                    <h2 class="fw-bold"><?php echo $_SESSION['usuario'] ?></h2>
                    <p class="fs-3"> <span class="text-danger">Bienvenido!</span></p>
                    <a href="<?= $config->redireccion('logout'); ?>" class="btn btn-outline-danger">Cerrar Sesión</a>

                    <br><br>

                    <a href="<?= $config->redireccion('addUser'); ?>" class="btn btn-outline-primary">Agregar Usuario</a>

                    <table class="table table-hover mt-4">
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Sexo</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Usuario</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($datos as $dato) : ?>
                                <tr>

                                    <td><?= $dato['nombre']; ?></td>
                                    <td><?= $dato['apellido']; ?></td>
                                    <td><?= $dato['sexo']; ?></td>
                                    <td><?= $dato['correo_electronico']; ?></td>
                                    <td><?= $dato['usuario']; ?></td>
                                    <td><a href="/editar/<?= $dato['id_usuario']; ?>" class="btn btn-outline-warning">Editar</a></td>
                                    <td><a href="/eliminarRegistro/<?= $dato['id_usuario']; ?>" class="btn btn-outline-danger">Eliminar</a></td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>