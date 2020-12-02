<?php

class  CursosControlador 
{
    public function index(){

        $jon = [
            "detalle"=>"Listado de Cursos"
        ];
        echo json_encode($jon, true);

        return;
    }

    public function create(){

        $jon = [
            "detalle"=>"Curso creado"
        ];
        echo json_encode($jon, true);

        return;
    }
    
}
