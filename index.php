<?php

require_once "controladores/ControladorRutas.php";
require_once "controladores/ClientesControlador.php";
require_once "controladores/CursosControlador.php";

require_once "modelos/CursosModelos.php";


$rutas = new ControladorRutas();
$rutas->index();


