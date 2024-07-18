<?php 
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	require_once ('process/dbh.php');
	$sql1 = "SELECT * FROM `employee` WHERE id = '$id'";
	$result1 = mysqli_query($conn, $sql1);
	$employeen = mysqli_fetch_array($result1);
	$empName = ($employeen['firstName']);

	$sql = "SELECT id, firstName, lastName, points FROM employee, rank WHERE rank.eid = employee.id ORDER BY rank.points DESC";
	$sql1 = "SELECT `pname`, `duedate` FROM `project` WHERE eid = $id AND status = 'Due'";

	$sql2 = "SELECT * FROM employee, employee_leave WHERE employee.id = $id AND employee_leave.id = $id ORDER BY employee_leave.token";

	$sql3 = "SELECT * FROM `salary` WHERE id = $id";

//echo "$sql";
$result = mysqli_query($conn, $sql);
$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);
$result3 = mysqli_query($conn, $sql3);
?>

<html>
<head>
	<title>Panel del Empleado | Sistema de Gestión de Empleados</title>
	<link rel="stylesheet" type="text/css" href="styleemplogin.css">
	<link href="https://fonts.googleapis.com/css?family=Lobster|Montserrat" rel="stylesheet">
</head>
<body>
	
	<header>
		<nav>
			<h1>Sistema de Gestión de Empleados</h1>
			<ul id="navli">
				<li><a class="homered" href="eloginwel.php?id=<?php echo $id?>">INICIO</a></li>
				<li><a class="homeblack" href="myprofile.php?id=<?php echo $id?>">Mi Perfil</a></li>
				<li><a class="homeblack" href="empproject.php?id=<?php echo $id?>">Mis Proyectos</a></li>
				<li><a class="homeblack" href="applyleave.php?id=<?php echo $id?>">Solicitar Permiso</a></li>
				<li><a class="homeblack" href="elogin.html">Cerrar Sesión</a></li>
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
	<div id="divimg">
	<div>
		<!-- <h2>Welcome <?php echo "$empName"; ?> </h2> -->

		    	<h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px; text-align: center;">Tabla de Clasificación de Empleados</h2>
    	<table>

			<tr bgcolor="#000">
				<th align="center">Sec.</th>
				<th align="center">ID Empleado</th>
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
					$seq+=1;
				}
			?>

		</table>
   
    	<h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px; text-align: center;">Proyectos Pendientes</h2>
    	
    	<table>

			<tr>
				<th align="center">Nombre del Proyecto</th>
				<th align="center">Fecha de Vencimiento</th>
			</tr>

			<?php
				while ($employee1 = mysqli_fetch_assoc($result1)) {
					echo "<tr>";
					echo "<td>".$employee1['pname']."</td>";
					echo "<td>".$employee1['duedate']."</td>";
				}
			?>

		</table>

		<h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px; text-align: center;">Estado del Salario</h2>
    	
    	<table>

			<tr>
				<th align="center">Salario Base</th>
				<th align="center">Bono</th>
				<th align="center">Salario Total</th>
			</tr>

			<?php
				while ($employee = mysqli_fetch_assoc($result3)) {
					echo "<tr>";
					echo "<td>".$employee['base']."</td>";
					echo "<td>".$employee['bonus']." %</td>";
					echo "<td>".$employee['total']."</td>";
				}
			?>

		</table>

		<h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px; text-align: center;">Estado de Permisos</h2>
    	
    	<table>

			<tr>
				<th align="center">Fecha de Inicio</th>
				<th align="center">Fecha de Fin</th>
				<th align="center">Total de Días</th>
				<th align="center">Motivo</th>
				<th align="center">Estado</th>
			</tr>

			<?php
				while ($employee = mysqli_fetch_assoc($result2)) {
					$date1 = new DateTime($employee['start']);
					$date2 = new DateTime($employee['end']);
					$interval = $date1->diff($date2);

					echo "<tr>";
					echo "<td>".$employee['start']."</td>";
					echo "<td>".$employee['end']."</td>";
					echo "<td>".$interval->days."</td>";
					echo "<td>".$employee['reason']."</td>";
					echo "<td>".$employee['status']."</td>";
				}
			?>

		</table>
	</div>
</body>
</html>
