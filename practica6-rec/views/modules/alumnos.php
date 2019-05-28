<h1>ALUMNOS</h1>

	<table border="1">
		
		<thead>
			
			<tr>
				<th>Matricucla</th>
				<th>Nombre</th>
				<th>Apellido</th>
                <th>Carrera</th>
                <th>Email</th>
				<th>Editar</th>
				<th>Eliminar</th>

			</tr>

		</thead>

		<tbody>
			
			<?php

			$vistaAlumno = new MvcController();
			$vistaAlumno -> obtenerAlumnosController();
			$vistaAlumno -> borrarAlumnoController();

			?>

		</tbody>

	</table>