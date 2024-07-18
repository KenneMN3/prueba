<?php

require_once ('process/dbh.php');
$sql = "SELECT * from `employee` , `rank` WHERE employee.id = rank.eid";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>

<html>
<head>
	<title>Ver Empleado | Panel de Administración | Sistema de Gestión de Empleados</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
</head>
<body>
	<header>
		<nav>
			<h1>SGE</h1>
			<ul id="navli">
				<li><a class="homeblack" href="aloginwel.php">INICIO</a></li>
				<li><a class="homeblack" href="addemp.php">Añadir Empleado</a></li>
				<li><a class="homered" href="viewemp.php">Ver Empleado</a></li>
				<li><a class="homeblack" href="assign.php">Asignar Proyecto</a></li>
				<li><a class="homeblack" href="assignproject.php">Estado del Proyecto</a></li>
				<li><a class="homeblack" href="salaryemp.php">Tabla de Sueldos</a></li>
				<li><a class="homeblack" href="empleave.php">Licencia de Empleados</a></li>
				<li><a class="homeblack" href="alogin.html">Cerrar Sesión</a></li>
			</ul>
		</nav>
	</header>
	
	<div class="divider"></div>

		<table>
			<tr>

				<th align="center">ID Empl.</th>
				<th align="center">Imagen</th>
				<th align="center">Nombre</th>
				<th align="center">Correo Electrónico</th>
				<th align="center">Cumpleaños</th>
				<th align="center">Género</th>
				<th align="center">Contacto</th>
				<th align="center">NID</th>
				<th align="center">Dirección</th>
				<th align="center">Departamento</th>
				<th align="center">Título</th>
				<th align="center">Puntos</th>
				
				
				<th align="center">Opciones</th>
			</tr>

			<?php
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$employee['id']."</td>";
					echo "<td><img src='process/".$employee['pic']."' height = 60px width = 60px></td>";
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
					
					echo "<td>".$employee['email']."</td>";
					echo "<td>".$employee['birthday']."</td>";
					echo "<td>".$employee['gender']."</td>";
					echo "<td>".$employee['contact']."</td>";
					echo "<td>".$employee['nid']."</td>";
					echo "<td>".$employee['address']."</td>";
					echo "<td>".$employee['dept']."</td>";
					echo "<td>".$employee['degree']."</td>";
					echo "<td>".$employee['points']."</td>";

					echo "<td><a href=\"edit.php?id=$employee[id]\">Editar</a> | <a href=\"delete.php?id=$employee[id]\" onClick=\"return confirm('¿Estás seguro de que quieres eliminar?')\">Eliminar</a></td>";

				}
			?>

		</table>
		
</body>
</html>
