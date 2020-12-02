<?php

require_once "controladores/ControladorRutas.php";
require_once "controladores/ClientesControlador.php";
require_once "controladores/CursosControlador.php";


$rutas = new ControladorRutas();
$rutas->index();

