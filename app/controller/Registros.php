<?php

namespace controller;

use model\TablaUsuario;

use config\View;
use config\Config;

require_once realpath('./vendor/autoload.php');

class Registros extends View
{

    public function index()
    {
        $conf = new Config();
        $conf->verificarSesion();

        $consulta = new TablaUsuario();
        $datos = $consulta->consulta()->all();
        return parent::vista('registros', $datos);
    }


    public function mostrarRegistro($id)
    {
        $conf = new Config();
        $conf->verificarSesion();

        $consulta = new TablaUsuario();
        $datos = $consulta->consulta()->where('id_usuario', $id)->first();
        return parent::vista('editar', $datos);
    }

    public function validarActualizacion()
    {
        $config = new Config;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $sexo = $_POST['sexo'];
            $fecha_nacimiento = $_POST['fecha_nacimiento'];
            $correo_electronico = $_POST['correo_electronico'];
            $usuario = $_POST['usuario'];
            $id_usuario = $_POST['id_usuario']; // Asegúrate de enviar el ID desde tu formulario

            // Obtener la nueva contraseña si se proporciona
            $password = !empty($_POST['password2']) ? $_POST['password2'] : null;

            // Crear un array con los datos a actualizar
            $datos_actualizados = [
                'nombre' => $nombre,
                'apellido' => $apellido,
                'sexo' => $sexo,
                'fecha_nacimiento' => $fecha_nacimiento,
                'correo_electronico' => $correo_electronico,
                'usuario' => $usuario
            ];

            if ($password !== null) {
                $datos_actualizados['password'] = password_hash($password, PASSWORD_DEFAULT);
            } else {
                $datos_actualizados['password'] = $_POST['password_actual'];
            }

            $usuarioModel = new TablaUsuario();

            $resultado = $usuarioModel->actualizar($datos_actualizados)->where('id_usuario', $id_usuario)->get();

            $config->redirigir('registros');
        } else {
            $config->redirigir('registros');
            exit;
        }
    }



    public function eliminarRegistro($id)
    {
        $conf = new Config();
        $conf->verificarSesion();

        $usuario = new TablaUsuario();
        $usuario->eliminar()->where('id_usuario', $id)->get();
        $this->index();
    }

    public function validarRegistroUser()
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

            $config->redirigir('registros');
        } else {
            $config->redirigir('registros');
            exit;
        }
    }
}
$controlador = new Registros();
