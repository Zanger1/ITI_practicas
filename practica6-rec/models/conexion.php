<?php

class Conexion{

	public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=practica6","root","");
		return $link;

	}

}

?>