<?php
$conexion = mysqli_connect("localhost", "root", "", "centros");
$ids=$_GET['id_sa'];
$sql="DELETE FROM salida where id_sa='".$ids."'";
mysqli_query($conexion, $sql);
header('location:registrosS.php')
?>