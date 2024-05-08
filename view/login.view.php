<?php

use config\Config;

$config = new Config;
?>
<div class="container">
  <section class="vh-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <div class="card">
          <div class="card-body">
            <form action="/validarLogin" method="post">
              <div class="divider d-flex align-items-center my-4">
                <h4 style="font-weight: bold;" class="text-center w-100">INICIA SESIÓN</h4>
              </div>
              <div class="form-outline mb-4">
                <label class="form-label text-center w-100" for="correo_electronico" style="font-weight: bold;">Correo Electronico</label>
                <input type="text" class="form-control form-control-lg" name="correo_electronico" id="correo_electronico" placeholder="Ingresa un usuario válido" autofocus required>
              </div>
              <div class="form-outline mb-3">
                <label class="form-label text-center w-100" for="password" style="font-weight: bold;">Contraseña</label>
                <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Enter password" required>
              </div>
              <div class="text-center mt-4 pt-2">
                <button type="submit" class="btn btn-lg btn-primary btn-login text-uppercase fw-bold w-100">Login</button>
                <p class="small fw-bold mt-4 pt-1 mb-0">¿No tienes una cuenta?
                  <a href="<?= $config->redireccion('sigin'); ?>" class="link-danger">Registrarse</a>
                </p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>