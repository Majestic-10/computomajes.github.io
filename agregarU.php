  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Agregar Usuario</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="container bg-white roundee p-4 col-xl-8 col-lg-8 mt-5">

<!--zona en donde se escribe al nuevo administrador-->

    <form>
    <h2 class="w-100 text mb-4">Agregue un nuevo usuario</h2>
        <label>ID:</label><br>
        <input type="text" name="txtid"><br>

        <label>USUARIO:</label><br>
        <input type="text" name="txtusu"><br>

        <label>CONTRASEÑA:</label><br>
        <input type="text" name="txtcon"><br>

        <label>NOMBRE:</label><br>
        <input type="text" name="txtnom"><br>

        <label>APELLIDO PATERNO:</label><br>
        <input type="text" name="txtap"><br>

        <label>APELLIDO MATERNO:</label><br>
        <input type="text" name="txtam"><hr>

        <input type="submit" name="" value="Agregar">
        <a href="administradores.php">Regresar</a>
    </form>
</div>
<?php
error_reporting(0);
$conexion = mysqli_connect("localhost", "root", "", "centros");

$id=$_GET['txtid'];
$usu = $_GET['txtusu'];
$con = $_GET['txtcon'];
$nom = $_GET['txtnom'];
$alp = $_GET['txtap'];
$alm = $_GET['txtam'];

if($id!=null||$usu!=null||$con!=null||$nom!=null||$alp!=null||$alm!=null){
    
    $sql="insert into admini(id_admin, usuario, contrasena, nombre, apellido_p, apellido_m) values('".$id."','".$usu."','".$con."','".$nom."','".$alp."','".$alm."')";
    mysqli_query($conexion,$sql);

    if($id=1) {
        header("location:administradores.php");
    }

}

?>