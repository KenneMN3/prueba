<?php
// Incluyendo el archivo de conexión a la base de datos
include("process/dbh.php");

// Obteniendo el id y el token de la URL
$id = $_GET['id'];
$token = $_GET['token'];

// Actualizando el estado de la fila en la tabla
$result = mysqli_query($conn, "UPDATE `employee_leave` SET `status`='Aprobado' WHERE id = $id AND token = $token;");

// Redirigiendo a la página de visualización (empleave.php en nuestro caso)
header("Location:empleave.php");
?>

