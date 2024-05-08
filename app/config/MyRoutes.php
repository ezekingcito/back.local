<?php

namespace Config;

use config\Config;

require_once realpath('./vendor/autoload.php');
$router = new Config;

$router->get("/", ['Login', 'index']);
$router->get("/login", ['Login', 'index']);
$router->get("/sigin", ['Sigin', 'index']);
$router->post("/validarLogin", ['Login', 'validarLogin']);
$router->post("/validarRegistro", ['Login', 'validacionRegistro']);
$router->get("/home", ['Home', 'index']);
$router->get("/addUser", ['AddUser', 'index']);

$router->get("/registros", ['Registros', 'index']);

$router->get("/editar", ['Registros', 'mostrarRegistro']);
$router->post("/validarActualizacion", ['Registros', 'validarActualizacion']);

$router->get("/eliminarRegistro", ['Registros', 'eliminarRegistro']);
$router->post("/validarRegistroUser", ['Registros', 'validarRegistroUser']);

$router->get("/logout", ['Login', 'cerrarSesion']);

$router->run();


?>