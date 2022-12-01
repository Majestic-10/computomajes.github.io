<?php
$conexion = mysqli_connect("localhost", "root", "", "centros");
$id=$_GET['id_in'];
$sql="DELETE FROM estudiantes where id_in='".$id."'";
mysqli_query($conexion, $sql);
header('location:registros.php')
?>