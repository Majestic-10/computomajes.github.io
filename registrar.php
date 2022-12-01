<?php
error_reporting(0);
//establecer conexion con base de datos
$conexion=mysqli_connect("localhost","root","","centros");

//recibe datos del index
$MATRICULA=$_POST['matricula'];
$NOMBRE=$_POST['nombre'];
$APELLIDOP=$_POST['apellido_p'];
$APELLIDOM=$_POST['apellido_m'];
$CONTRASENA=$_POST['contrasena'];
$CARRERA=$_POST['carrera'];

$consulta = "INSERT INTO estudiantes(matricula,nombre,apellido_p,apellido_m,contrasena,carrera) VALUES ('$MATRICULA','$NOMBRE','$APELLIDOP','$APELLIDOM','$CONTRASENA','$CARRERA')";

$resultado= mysqli_query($conexion, $consulta);

if($resultado){
    header("location:loginuser.php");
}
else{
    ?>
    <?php
    include("home.php");
    ?>
    <h1 class="bad">ERROR DE REGISTO</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>