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
            "detalle"=>"Curso: ".$id." creado."
        ];
        echo json_encode($jon, true);

        return;
    }

    public function show($id){

        $jon = [
            "detalle"=>"Curso id: ".$id
        ];
        echo json_encode($jon, true);

        return;
    }

    public function update($id){

        $jon = [
            "detalle"=>"Curso: ".$id." actualizado."
        ];
        echo json_encode($jon, true);

        return;
    }

    public function delete($id){

        $jon = [
            "detalle"=>"Curso: ".$id." eliminado."
        ];
        echo json_encode($jon, true);

        return;
    }
    
}
