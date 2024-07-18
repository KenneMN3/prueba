<?php 
require_once ('process/dbh.php');
$sql = "SELECT id, firstName, lastName, points FROM employee, rank WHERE rank.eid = employee.id ORDER BY rank.points DESC";
$result = mysqli_query($conn, $sql);
?>

<html>
<head>
	<title>Panel de Administrador | Sistema de Gestion de Empleados</title>
	<link rel="stylesheet" type="text/css" href="styleemplogin.css">
</head>
<body>
	
	<header>
		<nav>
			<h1>SGE</h1>
			<ul id="navli">
				<li><a class="homered" href="aloginwel.php">INICIO</a></li>
				<li><a class="homeblack" href="addemp.php">Agregar Empleado</a></li>
				<li><a class="homeblack" href="viewemp.php">Ver Empleado</a></li>
				<li><a class="homeblack" href="assign.php">Asignar Proyecto</a></li>
				<li><a class="homeblack" href="assignproject.php">Estado del Proyecto</a></li>
				<li><a class="homeblack" href="salaryemp.php">Tabla de Sueldos</a></li>
				<li><a class="homeblack" href="empleave.php">Licencia de Empleado</a></li>
				<li><a class="homeblack" href="alogin.html">Cerrar Sesión</a></li>
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
	<div id="divimg">
		<h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px; text-align: center;">Clasificación de Empleados</h2>
    	<table>
			<tr bgcolor="#000">
				<th align="center">Seq.</th>
				<th align="center">ID Empl.</th>
				<th align="center">Nombre</th>
				<th align="center">Puntos</th>
			</tr>

			<?php
				$seq = 1;
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$seq."</td>";
					echo "<td>".$employee['id']."</td>";
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
					echo "<td>".$employee['points']."</td>";
					$seq += 1;
				}
			?>
		</table>

		<div class="p-t-20">
			<button class="btn btn--radius btn--green" type="submit" style="float: right; margin-right: 60px"><a href="reset.php" style="text-decoration: none; color: white"> Restablecer Puntos</a></button>
		</div>
	</div>
</body>
</html>
