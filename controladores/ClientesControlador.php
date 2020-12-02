<?php

class  ClientesControlador 
{

    public function create(){

        $jon = [
            "detalle"=>"Cliente"
        ];
        echo json_encode($jon, true);

        return;
    }
    
}
