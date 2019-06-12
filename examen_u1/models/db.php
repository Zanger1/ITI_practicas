<?php

class conexion{
    public function conectar(){
        $link = new PDO("mysql:host=localhost,dbname=examen_u1","root","");
        return $link;
    }
}

?>