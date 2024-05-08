<?php

namespace controller;
use config\View;
use model\TablaProducto;

require_once realpath('./vendor/autoload.php');

class Test extends View{
    public function index() {
        return parent::vista('login');
    }
    public function prueba(){
        echo "desde prueba";
    }
}
$controlador = new Test();
?>