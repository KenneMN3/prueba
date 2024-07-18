<?php

require_once('process/dbh.php');
$sql = "SELECT employee.id, employee.firstName, employee.lastName, salary.base, salary.bonus, salary.total FROM employee, `salary` WHERE employee.id = salary.id";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>

<html>
<head>
    <title>Tabla de Salarios | Sistema de Gestión de Empleados</title>
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
                <li><a class="homered" href="salaryemp.php">Tabla de Salarios</a></li>
                <li><a class="homeblack" href="empleave.php">Licencia de Empleado</a></li>
                <li><a class="homeblack" href="alogin.html">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>
    
    <div class="divider"></div>
    <div id="divimg">
        
    </div>
    
    <table>
        <tr>
            <th align="center">ID de Emp.</th>
            <th align="center">Nombre</th>
            <th align="center">Salario Base</th>
            <th align="center">Bono</th>
            <th align="center">Salario Total</th>
        </tr>
        
        <?php
            while ($employee = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$employee['id']."</td>";
                echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
                echo "<td>".$employee['base']."</td>";
                echo "<td>".$employee['bonus']." %</td>";
                echo "<td>".$employee['total']."</td>";
                echo "</tr>";
            }
        ?>
        
    </table>
</body>
</html>
