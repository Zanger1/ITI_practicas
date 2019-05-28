<h1>REGISTRO DE ALUMNOS</h1>

<form method="post">
	
	<input type="text" placeholder="matricula" name="matriculaRegistro" required><br><br>

	<input type="text" placeholder="nombre" name="nombreRegistro" required><br><br>

	<input type="text" placeholder="apellido" name="apellidoRegistro" required><br><br>

    <input type="text" placeholder="carrera" name="carreraRegistro" required><br><br>

	<input type="email" placeholder="email" name="emailRegistro" required><br><br>

	<input type="submit" value="Enviar">

</form>

<?php

$registro = new MvcController();
$registro -> registroAlumnoController();

if(isset($_GET["action"])){

	if($_GET["action"] == "ok"){

		echo "Registro Exitoso";
	
	}

}

?>