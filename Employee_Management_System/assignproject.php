<?php

require_once ('process/dbh.php');
$sql = "SELECT * from `project` order by subdate desc";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>

<html>
<head>
	<title>Estado del Proyecto | Panel de Admin | Sistema de Gestión de Empleados</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
</head>
<body>
	<header>
		<nav>
			<h1>EMS</h1>
			<ul id="navli">
				<li><a class="homeblack" href="aloginwel.php">INICIO</a></li>
				<li><a class="homeblack" href="addemp.php">Agregar Empleado</a></li>
				<li><a class="homeblack" href="viewemp.php">Ver Empleado</a></li>
				<li><a class="homeblack" href="assign.php">Asignar Proyecto</a></li>
				<li><a class="homered" href="assignproject.php">Estado del Proyecto</a></li>
				<li><a class="homeblack" href="salaryemp.php">Tabla de Salarios</a></li>
				<li><a class="homeblack" href="empleave.php">Licencias de Empleados</a></li>
				<li><a class="homeblack" href="alogin.html">Cerrar Sesión</a></li>
			</ul>
		</nav>
	</header>
	
	<div class="divider"></div>

	<table>
		<tr>
			<th align="center">ID del Proyecto</th>
			<th align="center">ID del Empleado</th>
			<th align="center">Nombre del Proyecto</th>
			<th align="center">Fecha de Vencimiento</th>
			<th align="center">Fecha de Entrega</th>
			<th align="center">Calificación</th>
			<th align="center">Estado</th>
			<th align="center">Opción</th>
		</tr>

		<?php
			while ($employee = mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>".$employee['pid']."</td>";
				echo "<td>".$employee['eid']."</td>";
				echo "<td>".$employee['pname']."</td>";
				echo "<td>".$employee['duedate']."</td>";
				echo "<td>".$employee['subdate']."</td>";
				echo "<td>".$employee['mark']."</td>";
				echo "<td>".$employee['status']."</td>";
				echo "<td><a href=\"mark.php?id=$employee[eid]&pid=$employee[pid]\">Marcar</a>"; 
			}
		?>
	</table>
	
</body>
</html>
