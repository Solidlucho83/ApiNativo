<?php

class Conexion {

    static public function conectar(){

        $host = "mysql:host=localhost;dbname=prueba";

         $link = new PDO("$host",
                        "root",
                        "");
        $link->exec("set names utf8");

        return $link;
    }
    
}
