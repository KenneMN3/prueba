<?php

require_once('process/dbh.php');
//$id = (isset($_GET['id']) ? $_GET['id'] : '');
$pid = $_GET['pid'];
$id = $_GET['id'];
$fecha = date('Y-m-d');
//echo "$fecha";
$sql = "UPDATE `project` SET `subdate`='$fecha',`status`='Enviado' WHERE pid = '$pid';";
$result = mysqli_query($conn, $sql);
header("Location: empproject.php?id=$id");
?>
