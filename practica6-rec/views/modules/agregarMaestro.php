<h1>REGISTRO DE MAESTROS</h1>

<form method="post">

	<input type="text" placeholder="nombre" name="nombreRegistro" required><br><br>

	<input type="text" placeholder="apellido" name="apellidoRegistro" required><br><br>

	<input type="email" placeholder="email" name="emailRegistro" required><br><br>

    <input type="text" placeholder="carrera" name="carreraRegistro" required><br><br>

	<input type="submit" value="Enviar">

</form>

<?php

$registro = new MvcController();
$registro -> registroMaestroController();

if(isset($_GET["action"])){

	if($_GET["action"] == "ok"){

		echo "Registro Exitoso";
	
	}

}

?>