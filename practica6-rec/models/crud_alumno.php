<?php

#EXTENSIÓN DE CLASES: Los objetos pueden ser extendidos, y pueden heredar propiedades y métodos. Para definir una clase como extensión, debo definir una clase padre, y se utiliza dentro de una clase hija.

require_once "conexion.php";

class Datos_alumnos extends Conexion{

	#REGISTRO DE alumnos
	#-------------------------------------
	public function registroAlumnoModel($datosModel, $tabla){

		#prepare() Prepara una sentencia SQL para ser ejecutada por el método PDOStatement::execute(). La sentencia SQL puede contener cero o más marcadores de parámetros con nombre (:name) o signos de interrogación (?) por los cuales los valores reales serán sustituidos cuando la sentencia sea ejecutada. Ayuda a prevenir inyecciones SQL eliminando la necesidad de entrecomillar manualmente los parámetros.

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (matricula, nombre, apellido, carrera, email) VALUES (:matricula, :nombre, :apellido, :carrera, :email)");	

		#bindParam() Vincula una variable de PHP a un parámetro de sustitución con nombre o de signo de interrogación correspondiente de la sentencia SQL que fue usada para preparar la sentencia.

		$stmt->bindParam(":matricula", $datosModel["matricula"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":apellido", $datosModel["apellido"], PDO::PARAM_STR);
		$stmt->bindParam(":carrera", $datosModel["carrera"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "success";

		}

		else{

			return "error";

		}

		$stmt->close();

	}

	#Obtener Alumnos
	#-------------------------------------

	public function obtenerAlumnosModel($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");	
		$stmt->execute();

		#fetchAll(): Obtiene todas las filas de un conjunto de resultados asociado al objeto PDOStatement. 
		return $stmt->fetchAll();

		$stmt->close();

	}

	#EDITAR alumnos
	#-------------------------------------

	public function editarAlumnoModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("SELECT matricula, nombre, apellido, carrera, email FROM $tabla WHERE matricula = :matricula");
		$stmt->bindParam(":matricula", $datosModel, PDO::PARAM_STR);	
		$stmt->execute();

		return $stmt->fetch();

		$stmt->close();

	}

	#ACTUALIZAR alumnos
	#-------------------------------------

	public function actualizarAlumnoModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET matricula = :matricula, nombre = :nombre, apellido = :apellido, carrera = :carrera, email = :email WHERE matricula = :matricula");

		$stmt->bindParam(":matricula", $datosModel["matricula"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":apellido", $datosModel["apellido"], PDO::PARAM_STR);
		$stmt->bindParam(":carrera", $datosModel["carrera"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "success";

		}

		else{

			return "error";

		}

		$stmt->close();

	}


	#BORRAR alumno
	#------------------------------------
	public function borrarAlumnoModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE matricula = :matricula");
		$stmt->bindParam(":matricula", $datosModel, PDO::PARAM_STR);

		if($stmt->execute()){

			return "success";

		}

		else{

			return "error";

		}

		$stmt->close();

	}

}

?>