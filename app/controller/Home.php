<?php

namespace controller;

use config\View;
use config\Config;

require_once realpath('./vendor/autoload.php');

class Home extends View
{

    public function index()
    {
        $conf = new Config();
        $conf->verificarSesion();
        return parent::vista('home');
    }
}
$controlador = new Home();
