  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Editar administrador</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?php
error_reporting(0);
$conexion = mysqli_connect("localhost", "root", "", "centros");

$id = $_GET['id_admin'];
$sql = "SELECT*FROM admini where id_admin='" . $id . "'";
$resultado = mysqli_query($conexion, $sql);
while ($fila = mysqli_fetch_assoc($resultado)) {
?>
    <div class="container bg-white roundee p-4 col-xl-8 col-lg-8 mt-5">
        <form>
        <h2 class="w-100 text mb-4">Edite el administrador</h2>
            <input type="hidden" name="txtid" value="<?php echo $fila['id_admin'] ?>">
            <label>USUARIO:</label><br>
            <input type="text" name="txtusu" value="<?php echo $fila['usuario'] ?>"><br>
            <label>CONTRASEÑA:</label><br>
            <input type="text" name="txtcon" value="<?php echo $fila['contrasena'] ?>"><br>
            <label>NOMBRE:</label><br>
            <input type="text" name="txtnom" value="<?php echo $fila['nombre'] ?>"><br>
            <label>APELLIDO PATERNO:</label><br>
            <input type="text" name="txtap" value="<?php echo $fila['apellido_p'] ?>"><br>
            <label>APELLIDO MATERNO:</label><br>
            <input type="text" name="txtam" value="<?php echo $fila['apellido_m'] ?>">
            <hr>
            <input type="submit" name="" value="Actualizar">
            <a href="administradores.php">Regresar</a>
        </form>
    <?php } ?>
    </div>
    <?php
    
    $id = $_GET['txtid'];
    $usu = $_GET['txtusu'];
    $con = $_GET['txtcon'];
    $nom = $_GET['txtnom'];
    $alp = $_GET['txtap'];
    $alm = $_GET['txtam'];
    if ($usu != null || $con != null || $nom != null || $alp != null || $alm != null) {
        $sql2 = "update admini set USUARIO='" . $usu . "', CONTRASENA='" . $con . "', NOMBRE='" . $nom . "', APELLIDO_P='" . $alp . "', APELLIDO_M='" . $alm . "' where ID_ADMIN='" . $id . "'";
        mysqli_query($conexion, $sql2);
        if ($id = 1) {
            header("location:administradores.php");
        }
    }
    ?>