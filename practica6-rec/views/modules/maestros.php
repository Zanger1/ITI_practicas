<h1>MAESTROS</h1>

	<table border="1">
		
		<thead>
			
			<tr>
				<th>N_Empleado</th>
				<th>Nombre</th>
				<th>Apellido</th>
                <th>Email</th>
                <th>Carrera</th>
				<th>Editar</th>
				<th>Eliminar</th>

			</tr>

		</thead>

		<tbody>
			
			<?php

			$vistaMaestro = new MvcController();
			$vistaMaestro -> obtenerMaetrosController();
			$vistaMaestro -> borrarMaestroController();

			?>

		</tbody>

	</table>

<?php

?>