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
 
        return parent::vista('addUser');
    }
}
$controlador = new Registros();
