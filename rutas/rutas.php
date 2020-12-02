<?php

$arrayRutas = explode("/", $_SERVER['REQUEST_URI']);

if(count(array_filter($arrayRutas)) == 0){


            $jon = [
                "detalle"=>"No encontrado"
            ];
            echo json_encode($jon, true);

            return;
}else{

    if(count(array_filter($arrayRutas)) == 1){

    if(array_filter($arrayRutas)[1] == "registro"){

        //pregunto si hay peticiones del tipo post;
        if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST"){

                  $registro = new ClientesControlador();
                  $registro->create();
                   }
               
                   $jon = [
                       "detalle"=>"Estoy en Registro"
                           ];
                   echo json_encode($jon, true);
                   return;
    }
   

      


        if(array_filter($arrayRutas)[1] == "cursos"){

            if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "GET"){

                $cursos = new CursosControlador();
                $cursos->index();
            }


            if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"]== "POST"){

            $crearCurso = new CursosControlador();
            $crearCurso->create();
            }


        }
     

    }else{
        if(array_filter($arrayRutas)[1] == "cursos" && is_numeric(array_filter($arrayRutas)[2])){


            $jon = [
                "detalle"=>"Estoy en un solo Curso"
            ];
            echo json_encode($jon, true);
            return;
}

}
}




?>