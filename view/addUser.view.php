<?php

use config\Config;

$config = new Config;
?>

<body>
    <div class="container">
        <section class="vh-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <div class="card">
                        <div class="card-body">
                            <form id="registroForm" action="/validarRegistroUser" method="post">
                                <a href="<?= $config->redireccion('registros'); ?>" class="btn btn-outline-primary"><- Regresar</a>
                                <div class="divider d-flex align-items-center my-4">
                                    <h4 style="font-weight: bold;" class="text-center w-100">CREA UNA CUENTA</h4>
                                </div>

                                <div class="row form-outline mb-2">
                                    <div class="col">
                                        <label class="form-label" for="nombre" style="font-weight: bold;">Nombre(s)</label>
                                        <input type="text" id="nombre" name="nombre" class="form-control form-control-lg" placeholder="Nombre" autofocus required>
                                    </div>
                                    <div class="col">
                                        <label class="form-label" for="apellido" style="font-weight: bold;">Apellido(s)</label>
                                        <input type="text" id="apellido" name="apellido" class="form-control form-control-lg" placeholder="Apellido" required>
                                    </div>
                                </div>

                                <div class="row form-outline mb-2">
                                    <div class="col">
                                        <div class="mb-2">
                                            <label class="form-label" for="sexo" style="font-weight: bold;">Sexo</label>
                                            <select id="sexo" name="sexo" class="form-select" required>
                                                <option selected value="No definido">Prefiero no decirlo</option>
                                                <option value="Masculino">Masculino</option>
                                                <option value="Femenino">Femenino</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-4">
                                            <label class="form-label" for="fecha_nacimiento" style="font-weight: bold;">F. de Nacimiento</label>
                                            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-outline mb-2">
                                    <label class="form-label text-center w-100" for="correo_electronico" style="font-weight: bold;">Correo Electronico</label>
                                    <input type="email" id="correo_electronico" class="form-control form-control-lg" placeholder="Ingresa un correo electronico" name="correo_electronico" required>
                                </div>

                                <div class="form-outline mb-2">
                                    <label class="form-label text-center w-100" for="usuario" style="font-weight: bold;">Usuario</label>
                                    <input type="text" id="usuario" class="form-control form-control-lg" placeholder="Ingresa un usuario válido" name="usuario" required>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label text-center w-100" for="password" style="font-weight: bold;">Contraseña</label>
                                    <input type="password" id="password" class="form-control form-control-lg" placeholder="Ingrese una contraseña" name="password" required>
                                </div>

                                <div class="row form-outline mb-2">
                                    <button type="submit" class="btn btn-lg btn-dark btn-login text-uppercase fw-bold w-100">Registar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</body>

</html>