<?php

namespace controller;

use config\View;

require_once realpath('./vendor/autoload.php');

class Sigin extends View
{
    public function index()
    {
        return parent::vista('sigin');
    }

    public function validacion()
    {
        
    }
}
$controlador = new Sigin();
