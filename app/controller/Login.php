<?php

namespace controller;

use Config\Config;
use model\TablaUsuario;
use config\View;

require_once realpath('./vendor/autoload.php');

class Login extends View
{

    public function index()
    {
        $conf = new Config();
        $conf->verificarLogin();
        return parent::vista('login');
    }

    public function validacionRegistro()
    {
        $config = new Config;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $sexo = $_POST['sexo'];
            $fecha_nacimiento = $_POST['fecha_nacimiento'];
            $correo_electronico = $_POST['correo_electronico'];
            $usuario = $_POST['usuario'];
            $password = $_POST['password'];
            $passhash = password_hash($password, PASSWORD_DEFAULT);
            $personaModel = new TablaUsuario();

            $personaData = [
                'nombre' => $nombre,
                'apellido' => $apellido,
                'sexo' => $sexo,
                'fecha_nacimiento' => $fecha_nacimiento,
                'correo_electronico' => $correo_electronico,
                'usuario' => $usuario,
                'password' => $passhash
            ];

            $result = $personaModel->insercion($personaData);

            if ($result[0] == 1) {
                $config->redirigir('login');
            } else {
                echo "Error al registrar el Usuario. Por favor, inténtalo de nuevo.";
            }
        } else {
            $config->redirigir('login');
            exit;
        }
    }

    public function validarLogin()
    {
        $config = new Config();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $correo_electronico = $_POST['correo_electronico'];
            $password = $_POST['password'];

            $personaModel = new TablaUsuario();

            $usuarioEncontrado = $personaModel->consulta()->where('correo_electronico', $correo_electronico)->first();

            if ($usuarioEncontrado) {
                if (password_verify($password, $usuarioEncontrado['password'])) {
                    session_start();
                    $_SESSION['usuario'] = $usuarioEncontrado['usuario'];
                    $_SESSION['usuario_id'] = $usuarioEncontrado['id_usuario'];
                    $config->redirigir('registros');
                } else {
                    $config->redirigir('login');
                }
            } else {
                echo "Usuario no encontrado o contraseña incorrecta. Por favor, inténtalo de nuevo.";
            }
        } else {
            $config->redirigir('login');
            exit;
        }
    }

    public function cerrarSesion()
    {
        $config = new Config();
        $config->cerrarSesion();
    }
}
$controlador = new Login();
