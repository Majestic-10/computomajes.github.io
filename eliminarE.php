<?php
$conexion = mysqli_connect("localhost", "root", "", "centros");
$ide=$_GET['id_en'];
$sql="DELETE FROM entradas where id_en='".$ide."'";
mysqli_query($conexion, $sql);
header('location:registrosE.php')
?>