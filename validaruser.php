<?php
//establecer conexion con base de datos
$conexion=mysqli_connect("localhost","root","","centros");

//recibe datos del index
$matricula=$_POST['matricula'];
$PASSWORD=$_POST['contrasena'];
$CC=$_POST['salon'];
//session_start();
//$_SESSION['matricula']=$matricula;

//Verifica la  existencia de loss datos insertados con la base de datos de la UV
$consulta = "SELECT*FROM estudiantes where matricula = '$matricula'and contrasena='$PASSWORD'";
$resultado= mysqli_query($conexion,$consulta);

$sql = "INSERT into entradas(matricula,salon) values('".$matricula."','".$CC."')";
        mysqli_query($conexion, $sql);

$filas=mysqli_fetch_array($resultado);

if($filas){
        header("location:interfazuser.php");
} 
else{
    ?>
    <?php
    include("loginuser.php");
    ?>
    <h1 class="bad">ERROR DE AUNTENTIFICACIÓN</h1>
    <?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);
?>