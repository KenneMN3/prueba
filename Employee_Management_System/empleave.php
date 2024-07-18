<?php

require_once ('process/dbh.php');

//$sql = "SELECT * from `employee_leave`";
$sql = "SELECT employee.id, employee.firstName, employee.lastName, employee_leave.start, employee_leave.end, employee_leave.reason, employee_leave.status, employee_leave.token FROM employee, employee_leave WHERE employee.id = employee_leave.id ORDER BY employee_leave.token";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>

<html>
<head>
	<title>Permisos de Empleados | Panel de Admin | Sistema de Gestión de Empleados</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
</head>
<body>
	
	<header>
		<nav>
			<h1>SGE</h1>
			<ul id="navli">
				<li><a class="homeblack" href="aloginwel.php">INICIO</a></li>
				<li><a class="homeblack" href="addemp.php">Agregar Empleado</a></li>
				<li><a class="homeblack" href="viewemp.php">Ver Empleado</a></li>
				<li><a class="homeblack" href="assign.php">Asignar Proyecto</a></li>
				<li><a class="homeblack" href="assignproject.php">Estado del Proyecto</a></li>
				<li><a class="homeblack" href="salaryemp.php">Tabla de Salarios</a></li>
				<li><a class="homered" href="empleave.php">Permisos de Empleados</a></li>
				<li><a class="homeblack" href="alogin.html">Cerrar Sesión</a></li>
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
	<div id="divimg">
		<table>
			<tr>
				<th>ID Empleado</th>
				<th>Token</th>
				<th>Nombre</th>
				<th>Fecha de Inicio</th>
				<th>Fecha de Fin</th>
				<th>Total de Días</th>
				<th>Motivo</th>
				<th>Estado</th>
				<th>Opciones</th>
			</tr>

			<?php
				while ($employee = mysqli_fetch_assoc($result)) {

				$date1 = new DateTime($employee['start']);
				$date2 = new DateTime($employee['end']);
				$interval = $date1->diff($date2);

					echo "<tr>";
					echo "<td>".$employee['id']."</td>";
					echo "<td>".$employee['token']."</td>";
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
					
					echo "<td>".$employee['start']."</td>";
					echo "<td>".$employee['end']."</td>";
					echo "<td>".$interval->days."</td>";
					echo "<td>".$employee['reason']."</td>";
					echo "<td>".$employee['status']."</td>";
					echo "<td><a href=\"approve.php?id=$employee[id]&token=$employee[token]\"  onClick=\"return confirm('¿Estás seguro de que deseas aprobar la solicitud?')\">Aprobar</a> | <a href=\"cancel.php?id=$employee[id]&token=$employee[token]\" onClick=\"return confirm('¿Estás seguro de que deseas cancelar la solicitud?')\">Cancelar</a></td>";

				}
			?>

		</table>
		
	</div>
</body>
</html>
