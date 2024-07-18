<?php
// Incluyendo el archivo de conexión a la base de datos
include("process/dbh.php");

// Obteniendo el ID de los datos desde la URL
$id = $_GET['id'];
$token = $_GET['token'];

// Eliminando la fila de la tabla
$result = mysqli_query($conn, "UPDATE `employee_leave` SET `status`='Cancelado' WHERE `id`=$id and `token` = $token");

// Redirigiendo a la página de visualización (empleave.php en nuestro caso)
header("Location:empleave.php");
?>

