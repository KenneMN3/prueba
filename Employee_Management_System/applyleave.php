<?php 
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	require_once ('process/dbh.php');
	$sql = "SELECT * FROM `employee` WHERE id = '$id'";
	$result = mysqli_query($conn, $sql);
	$employee = mysqli_fetch_array($result);
	$empName = ($employee['firstName']);
	//echo "$id";
?>

<html>
<head>
	<title>Solicitar Licencia | Panel de Empleado | Sistema de Gestión de Empleados</title>
	<link rel="stylesheet" type="text/css" href="styleapply.css">
</head>
<body bgcolor="#F0FFFF">
	
	<header>
		<nav>
			<h1>Sistema de Gestión de Empleados</h1>
			<ul id="navli">
				<li><a class="homeblack" href="eloginwel.php?id=<?php echo $id?>">INICIO</a></li>
				<li><a class="homeblack" href="myprofile.php?id=<?php echo $id?>">Mi Perfil</a></li>
				<li><a class="homeblack" href="empproject.php?id=<?php echo $id?>">Mis Proyectos</a></li>
				<li><a class="homered" href="applyleave.php?id=<?php echo $id?>">Solicitar Licencia</a></li>
				<li><a class="homeblack" href="elogin.html">Cerrar Sesión</a></li>
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
	<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Formulario de Solicitud de Licencia</h2>
                    <form action="process/applyleaveprocess.php?id=<?php echo $id?>" method="POST">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Razón" name="reason">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                            	<p>Fecha de Inicio</p>
                                <div class="input-group">
                                    <input class="input--style-1" type="date" placeholder="inicio" name="start">
                                </div>
                            </div>
                            <div class="col-2">
                            	<p>Fecha de Fin</p>
                                <div class="input-group">
                                    <input class="input--style-1" type="date" placeholder="fin" name="end">
                                </div>
                            </div>
                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <table>
        <tr>
            <th align="center">ID Empl.</th>
            <th align="center">Nombre</th>
            <th align="center">Fecha de Inicio</th>
            <th align="center">Fecha de Fin</th>
            <th align="center">Total de Días</th>
            <th align="center">Razón</th>
            <th align="center">Estado</th>
        </tr>

        <?php
            $sql = "SELECT employee.id, employee.firstName, employee.lastName, employee_leave.start, employee_leave.end, employee_leave.reason, employee_leave.status FROM employee, employee_leave WHERE employee.id = $id AND employee_leave.id = $id ORDER BY employee_leave.token";
            $result = mysqli_query($conn, $sql);
            while ($employee = mysqli_fetch_assoc($result)) {
                $date1 = new DateTime($employee['start']);
                $date2 = new DateTime($employee['end']);
                $interval = $date1->diff($date2);

                echo "<tr>";
                echo "<td>".$employee['id']."</td>";
                echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
                echo "<td>".$employee['start']."</td>";
                echo "<td>".$employee['end']."</td>";
                echo "<td>".$interval->days."</td>";
                echo "<td>".$employee['reason']."</td>";
                echo "<td>".$employee['status']."</td>";
            }
        ?>
    </table>

</body>
</html>
