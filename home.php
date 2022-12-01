<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimun-scale=1.0">
    <title>login</title>
<!--css-->
   <link rel="stylesheet" href="back.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
</head>
<!--barra-->
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="https://www.uv.mx">
            <img src="img\uvicon.png" width="40" height="30" class="d-inline-block align-top" alt=""> <strong>UNIVERSIDAD VERACRUZANA</strong>
        </a>
<!--probable eliminación del icono-->
        <a class="navbar-brand" href="loginuser.php">
              <img src="img\retorno.png" width="30" height="30" alt="">
        </a>
    </nav>
    


<body>
    <header class="container-fluid">
        <div class="row justify-content-center pt-5 mt-5">
            <span class="border border-white rounded">
                <div class="card bg-dark" style="width: 23.1rem;">
                <div class="card-header p-3 mb-2 bg-dark text-light"><h1 class="text-light">Registro de Sesión</h1></div>

                <div class="card-body">
                    <form action="registrar.php" method="post">
                        <p class="text-light">Matricula:<strong class="text-dark">......,........</strong><input type="text"placeholder="Ingrese su matricula" REQUIRED name="matricula"></p>
                        <p class="text-light">Nombre:<strong class="text-dark">.........,,......</strong><input type="text"placeholder="Ingrese su nombre" REQUIRED name="nombre"></p>
                        <p class="text-light">Apellido Paterno:<strong class="text-dark">,,,</strong><input type="text"placeholder="Ingrese su primer apellido" REQUIRED name="apellido_p"></p>
                        <p class="text-light">Apellido Materno:<strong class="text-dark">,,</strong><input type="text"placeholder="Ingrese su segundo apellido" REQUIRED name="apellido_m"></p>
                        <p class="text-light">Contraseña:<strong class="text-dark">...............,,,,</strong><input type="text"placeholder="Ingrese contraseña" REQUIRED name="contrasena"></p>
                        <p class="text-light">Carrera:<strong class="text-dark">...............,,,,</strong><input type="text"placeholder="Ingrese su carrera seleccionada" REQUIRED name="carrera"></p>


                        </div>
                        <!--<div class="card-footer">
                        <select class="custom-select mr-sm-2" name="salon">
                          <option selected>Seleccione el centro de computo.</option>
                          <option value="CC1">CC1</option>
                          <option value="CC2">CC2</option>
                          <option value="CC3">CC3</option>
                        </select>
                        </div>-->
                        <input class= "justify-content-center border-white rounded" type="submit" value="Ingresar">

                    </form>
                </div>
            </span>
        </div>    
    </header>

</body>


</html>