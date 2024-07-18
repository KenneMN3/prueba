<?php
// Incluyendo el archivo de conexión a la base de datos
include("process/dbh.php");

// Obteniendo el id de los datos desde la URL
$id = $_GET['id'];

// Eliminando la fila de la tabla
$result = mysqli_query($conn, "DELETE FROM employee WHERE id=$id");

// Redirigiendo a la página de visualización (viewemp.php en este caso)
header("Location:viewemp.php");
?>

