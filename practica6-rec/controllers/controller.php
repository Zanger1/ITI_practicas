<?php
class MvcController{
    //metodo para llamar a la plantilla 
    public function plantilla(){
        //include () se utiliza para invocar el archivo que contiene el codigo html
        include "views/template.php";
    }

    //Interaccion y navegacion del usuario
    public function enlacesPaginasController(){
        if(isset($_GET["action"])){
            $enlacesController=$_GET["action"];
        }else{
            $enlacesController="alumnos";
        }
        //mandar parametro a modelo
        error_reporting(0);
        $respuesta= EnlacesPaginas::enlacesPaginasModel($enlacesController);
        include $respuesta;
    }

    #REGISTRO DE alumnos
	#------------------------------------
	public function registroAlumnoController(){

			$datosController = array( "matricula"=>$_POST["matriculaRegistro"], 
								      "nombre"=>$_POST["nombreRegistro"],
                                      "apellido"=>$_POST["apellidoRegistro"],
                                      "carrera"=>$_POST["carreraRegistro"],
                                      "email"=>$_POST["emailRegistro"]);

			$respuesta = Datos_alumnos::registroAlumnoModel($datosController, "alumno");

			if($respuesta == "success"){

				header("location:index.php?action=ok");

			}

			else{

				header("location:index.php");
			}

	}

	#Obtener alumnos
	#------------------------------------

	public function obtenerAlumnosController(){

		$respuesta = Datos_alumnos::obtenerAlumnosModel("alumno");

		#El constructor foreach proporciona un modo sencillo de iterar sobre arrays. foreach funciona sólo sobre arrays y objetos, y emitirá un error al intentar usarlo con una variable de un tipo diferente de datos o una variable no inicializada.

		foreach($respuesta as $row => $item){
		echo'<tr>
				<td>'.$item["matricula"].'</td>
				<td>'.$item["nombre"].'</td>
                <td>'.$item["apellido"].'</td>
                <td>'.$item["carrera"].'</td>
                <td>'.$item["email"].'</td>
				<td><a href="index.php?action=editar&id='.$item["matricula"].'"><button>Editar</button></a></td>
				<td><a href="index.php?action=usuarios&idBorrar='.$item["matricula"].'"><button>Borrar</button></a></td>
			</tr>';

		}

	}

	#EDITAR alumno
	#------------------------------------

	public function editarAlumnoController(){

		$datosController = $_GET["matricula"];
		$respuesta = Datos_alumnos::editarAlumnoModel($datosController, "alumno");

		echo'<input type="text" value="'.$respuesta["matricula"].'" name="idEditar">

			 <input type="text" value="'.$respuesta["nombre"].'" name="nombreEditar" required>

			 <input type="text" value="'.$respuesta["apellido"].'" name="apellidoEditar" required>

             <input type="text" value="'.$respuesta["carrera"].'" name="carreraEditar" required>
             
             <input type="email" value="'.$respuesta["email"].'" name="emailEditar" required>

			 <input type="submit" value="Actualizar">';

	}

	#ACTUALIZAR alumno
	#------------------------------------
	public function actualizarAlumnoController(){

		if(isset($_POST["nombreEditar"])){

			$datosController = array( "matricula"=>$_POST["idEditar"],
							          "nombre"=>$_POST["nombreEditar"],
				                      "apellido"=>$_POST["apellidoEditar"],
                                      "carrera"=>$_POST["carreraEditar"],
                                      "email"=>$_POST["emailEditar"]);
			
			$respuesta = Datos_alumnos::actualizarAlumnoModel($datosController, "alumno");

			if($respuesta == "success"){

				header("location:index.php?action=cambio");

			}

			else{

				echo "error";

			}

		}
	
	}

	#BORRAR alumno
	#------------------------------------
	public function borrarAlumnoController(){

		if(isset($_GET["idBorrar"])){

			$datosController = $_GET["idBorrar"];
			
			$respuesta = Datos_alumnos::borrarAlumnoModel($datosController, "alumno");

			if($respuesta == "success"){

				header("location:index.php?action=usuarios");
			
			}

		}

    }
    

    #REGISTRO DE maestros
	#------------------------------------
	public function registroMaestroController(){

			$datosController = array( "nombre"=>$_POST["nombreRegistro"],
                                      "apellido"=>$_POST["apellidoRegistro"],
                                      "email"=>$_POST["emailRegistro"],
                                      "carrera"=>$_POST["carreraRegistro"]);

			$respuesta = Datos_maestros::registroMaestroModel($datosController, "maestros");

			if($respuesta == "success"){

				header("location:index.php?action=ok");

			}

			else{

				header("location:index.php");
			}

	}

	#Obtener maestros
	#------------------------------------

	public function obtenerMaestrosController(){

		$respuesta = Datos_maestros::obtenerMaestrosModel("maestros");

		#El constructor foreach proporciona un modo sencillo de iterar sobre arrays. foreach funciona sólo sobre arrays y objetos, y emitirá un error al intentar usarlo con una variable de un tipo diferente de datos o una variable no inicializada.

		foreach($respuesta as $row => $item){
		echo'<tr>
				<td>'.$item["n_empleado"].'</td>
				<td>'.$item["nombre"].'</td>
                <td>'.$item["apellido"].'</td>
                <td>'.$item["email"].'</td>
                <td>'.$item["carrera"].'</td>
				<td><a href="index.php?action=editar&id='.$item["n_empleado"].'"><button>Editar</button></a></td>
				<td><a href="index.php?action=usuarios&idBorrar='.$item["n_empleado"].'"><button>Borrar</button></a></td>
			</tr>';

		}

	}

	#EDITAR maestros
	#------------------------------------

	public function editarMaestroController(){

		$datosController = $_GET["n_empleado"];
		$respuesta = Datos_maestros::editarMaestrosModel($datosController, "maestros");

		echo'<input type="text" value="'.$respuesta["n_empleado"].'" name="idEditar">

			 <input type="text" value="'.$respuesta["nombre"].'" name="nombreEditar" required>

			 <input type="text" value="'.$respuesta["apellido"].'" name="apellidoEditar" required>
             
             <input type="email" value="'.$respuesta["email"].'" name="emailEditar" required>

             <input type="text" value="'.$respuesta["carrera"].'" name="carreraEditar" required>

			 <input type="submit" value="Actualizar">';

	}

	#ACTUALIZAR maestro
	#------------------------------------
	public function actualizarMaestroController(){

		if(isset($_POST["nombreEditar"])){

			$datosController = array( "n_empleado"=>$_POST["idEditar"],
							          "nombre"=>$_POST["nombreEditar"],
				                      "apellido"=>$_POST["apellidoEditar"],
                                      "email"=>$_POST["emailEditar"],
                                      "carrera"=>$_POST["carreraEditar"]);
			
			$respuesta = Datos_maestros::actualizarMaestrosModel($datosController, "alumno");

			if($respuesta == "success"){

				header("location:index.php?action=cambio");

			}

			else{

				echo "error";

			}

		}
	
	}

	#BORRAR maestro
	#------------------------------------
	public function borrarMaestroController(){

		if(isset($_GET["idBorrar"])){

			$datosController = $_GET["idBorrar"];
			
			$respuesta = Datos_maestros::borrarMaestroModel($datosController, "maestros");

			if($respuesta == "success"){

				header("location:index.php?action=usuarios");
			
			}

		}

	}
}


?>