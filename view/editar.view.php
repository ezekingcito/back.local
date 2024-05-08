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
                                <form id="registroForm" action="/validarActualizacion" method="post">
                                    <div class="divider d-flex align-items-center my-4">
                                        <h4 style="font-weight: bold;" class="text-center w-100">EDITAR UNA CUENTA</h4>
                                    </div>

                                    <div class="row form-outline mb-2">

                                        <input type="hidden" id="id_usuario" name="id_usuario" value="<?= $datos['id_usuario']; ?>">

                                        <div class="col">
                                            <label class="form-label" for="nombre" style="font-weight: bold;">Nombre</label>
                                            <input type="text" id="nombre" value="<?= $datos['nombre']; ?>" name="nombre" class="form-control form-control-lg" placeholder="Nombre" autofocus required>
                                        </div>
                                        <div class="col">
                                            <label class="form-label" for="apellido" style="font-weight: bold;">Apellido(s)</label>
                                            <input type="text" id="apellido" name="apellido" value="<?= $datos['apellido']; ?>" class="form-control form-control-lg" placeholder="Apellido" required>
                                        </div>
                                    </div>

                                    <div class="row form-outline mb-2">
                                        <div class="col">
                                            <div class="mb-2">
                                                <label class="form-label" for="sexo" style="font-weight: bold;">Sexo</label>
                                                <select id="sexo" name="sexo" class="form-select" required>
                                                    <option selected value="<?= $datos['sexo']; ?>  "><?= $datos['sexo']; ?></option>
                                                    <option value="Prefiero no decirlo">Prefiero no decirlo</option>
                                                    <option value="Masculino">Masculino</option>
                                                    <option value="Femenino">Femenino</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-4">
                                                <label class="form-label" for="fecha_nacimiento" style="font-weight: bold;">F. de Nacimiento</label>
                                                <input type="date" id="fecha_nacimiento" value="<?= $datos['fecha_nacimiento']; ?>" name="fecha_nacimiento" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-outline mb-2">
                                        <label class="form-label text-center w-100" for="correo_electronico" style="font-weight: bold;">Correo Electronico</label>
                                        <input type="email" id="correo_electronico" class="form-control form-control-lg" placeholder="Ingresa un correo electronico" name="correo_electronico" value="<?= $datos['correo_electronico']; ?>" required>
                                    </div>

                                    <div class="form-outline mb-2">
                                        <label class="form-label text-center w-100" for="usuario" style="font-weight: bold;">Usuario</label>
                                        <input type="text" id="usuario" class="form-control form-control-lg" placeholder="Ingresa un usuario válido" name="usuario" value="<?= $datos['usuario']; ?>" required>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label text-center w-100" for="password2" style="font-weight: bold;">Nueva Contraseña (opcional)</label>
                                        <input type="hidden" name="password_actual" value="<?= $datos['password']; ?>">

                                        <input type="password" id="password2" class="form-control form-control-lg" placeholder="Ingrese una nueva contraseña" name="password2">
                                    </div>


                                    <div class="row form-outline mb-2">
                                        <button type="submit" class="btn btn-lg btn-dark btn-login text-uppercase fw-bold w-100">Actualizar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </body>

    <script src="<?= $config->dep_js("validaciones.sigin") ?>"></script>

    </html>