<?php 
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	require_once ('process/dbh.php');
	$sql = "SELECT * FROM `project` WHERE eid = '$id'";
	$result = mysqli_query($conn, $sql);
	
?>

<html>
<head>
	<title>Panel del Empleado | Sistema de Gestión de Empleados</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
</head>
<body>
	
	<header>
		<nav>
			<h1>Sistema de Gestión de Empleados</h1>
			<ul id="navli">
				<li><a class="homeblack" href="eloginwel.php?id=<?php echo $id?>"">INICIO</a></li>
				<li><a class="homeblack" href="myprofile.php?id=<?php echo $id?>"">Mi Perfil</a></li>
				<li><a class="homered" href="empproject.php?id=<?php echo $id?>"">Mis Proyectos</a></li>
				<li><a class="homeblack" href="applyleave.php?id=<?php echo $id?>"">Solicitar Permiso</a></li>
				<li><a class="homeblack" href="elogin.html">Cerrar Sesión</a></li>
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
	<div id="divimg">

		<table>
			<tr>
				<th align="center">ID del Proyecto</th>
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
					echo "<td>".$employee['pname']."</td>";
					echo "<td>".$employee['duedate']."</td>";
					echo "<td>".$employee['subdate']."</td>";
					echo "<td>".$employee['mark']."</td>";
					echo "<td>".$employee['status']."</td>";
					

					 echo "<td><a href=\"psubmit.php?pid=$employee[pid]&id=$employee[eid]\">Entregar</a>";

				}
			?>

		</table>

		</body>
</html>
