<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaz de usuario</title>

    <!--css-->
    <link rel="stylesheet" href="interfazuser.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    
</head>

<!--barra  -->
<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand">
        <img src="img\uvicon.png" width="40" height="30" class="d-inline-block align-top"> <strong class="text-light">UNIVERSIDAD VERACRUZANA</strong>
    </a>


</nav>

<body>
    
    <header class="container">
        <div class="row justify-content-center pt-5 mt-5">
            <span class="border border-white rounded">

                        <div class="card">
                            <h5 class="card-header">Recordatorio</h5>
                            <div class="card-body">
                              <h5 class="card-title">Una vez termines de usar el Centro de Computo</h5>
                    <form action="validarsalida.php" method="post">
                        <p class="text-dark text-left">Matricula<strong class="text-dark">................</strong><input type="text" placeholder="Ingrese su matricula" REQUIRED name="matricula"></p>

                        <div class="card-footer">
                            <select class="custom-select mr-sm-2" name="salon">
                              <option selected>Indique el centro de computo de salida.</option>
                              <option value="CC1">CC1</option>
                              <option value="CC2">CC2</option>
                              <option value="CC3">CC3</option>
                            </select>
                            </div>

                            <p class="card-text">Deberas presionar el boton de cerrar sesión.</p>
                            <input class= "btn btn-primary" type="submit" value="Cerrar sesión">

                        </form>
                          </div>
 
            </span>
        </div>
    </header>

  
</body>
</html>
