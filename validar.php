<?php
//establecer conexion con base de datos
$conexion=mysqli_connect("localhost","root","","centros");

//recibe datos del index
$USUARIO=$_POST['usuario'];
$PASSWORD=$_POST['contrasena'];
//session_start();
//$_SESSION['usuario']=$usuario;

//Verifica la  existencia de loss datos insertados con la base de datos de la UV
$consulta = "SELECT*FROM admini where usuario = '$USUARIO' and contrasena='$PASSWORD'";
$resultado= mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['usuario']){
    header("location:interfazAdministrador.php");
} 
else{
    ?>
    <?php
    include("indexadm.php");
    ?>
    <h1 class="bad">ERROR DE AUNTENTIFICACIÓN</h1>
    <?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);
?>