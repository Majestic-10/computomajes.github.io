<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimun-scale=1.0">
    <title>login</title>
<!--css-->
    <link rel="stylesheet" href="backb.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
</head>
<!--barra  -->
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="https://www.uv.mx">
            <img src="img\uvicon.png" width="40" height="30" class="d-inline-block align-top" alt=""> <strong>UNIVERSIDAD VERACRUZANA</strong>
        </a>
<!--probable eliminación del icono-->
        <a class="navbar-brand" href="loginuser.php">
              <img src="img\alum.png" width="30" height="30" alt=""> <strong>Alumnos</strong>
        </a>
    </nav>
<body>
    <header class="container">
        <div class="row justify-content-center pt-5 mt-5">
            <span class="border border-white rounded">
            <div class="card bg-dark" style="width: 23.1rem;">
                <div class="card-header p-3 mb-2 bg-dark"><h1 class="text-light">Inicio de Sesión</h1>
                </div>
                    <div class="card-body">
                        <form action="validar.php" method="post">
                        <p class="text-light">Usuario  <input type="text"placeholder="Ingrese su usuario" name="usuario"></p>
                        <p class="text-light">Contraseña <input type="password"placeholder="Ingrese su contraseña" name="contrasena"></p>
                        <input class= "justify-content-center border-white rounded " type="submit" value="ingresar">
                        </form>
                    </div>
            </div>
            </span>
        </div>
    </header>
</body>
</html>