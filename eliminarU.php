<?php
$conexion = mysqli_connect("localhost", "root", "", "centros");
$id=$_GET['id_admin'];
$sql="DELETE FROM admini where id_admin='".$id."'";
mysqli_query($conexion, $sql);
header('location:administradores.php')
?>