<!doctype html>
<html lang="es-CO">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Gestión de Estudiantes</title>
</head>

<body>
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
    <symbol id="persona" viewBox="0 0 16 16">
      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
    </symbol>
    <symbol id="lista" viewBox="0 0 16 16">
      <path d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
    </symbol>
  </svg>


  <!--barra lateral-->
  <div class="container-fluid">
    <div class="row flex-nowrap">
      <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
          <a href="https://thumbs.dreamstime.com/z/rata-calva-de-la-esfinge-77933117.jpg" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <strong class="fs-5 d-none d-sm-inline">UNIVERSIDAD VERACRUZANA</strong>
          </a>
          <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <li class="nav-item">
              <a href="interfazAdministrador.php" class="nav-link align-middle px-0">
                <svg class="bi me-2" width="40" height="32">
                  <use xlink:href="#persona" />
                </svg>
                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline text-white">Inicio</span>
              </a>
             
              <a href="registrosE.php" class="nav-link align-middle px-0">
                <svg class="bi me-2" width="40" height="32">
                  <use xlink:href="#lista" />
                </svg>
                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline text-white">Registro de entradas</span>
              </a>
             
             <a href="registrosS.php" class="nav-link align-middle px-0">
               <svg class="bi me-2" width="40" height="32">
                 <use xlink:href="#lista" />
               </svg>
               <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline text-white">Registro de salidas</span>
             </a> 
             
             <a href="administradores.php" class="nav-link align-middle px-0">
               <svg class="bi me-2" width="40" height="32">
                 <use xlink:href="#lista" />
               </svg>
               <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline text-white">Administradores</span>
             </a>   
            </li>

          </ul>
        </div>
      </div>
 

  <!-- fin barra lateral-->
  <body>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "centros");
    $consu = "SELECT*FROM estudiantes";
    $resultado = mysqli_query($conexion, $consu);
    ?>
    <div class="container bg-white roundee p-4 col-xl-8 col-lg-8 mt-5">
    <h2 class="w-100 text-center mb-4">Lista de Registros de Ingresos</h2>
        <table class= "table table-hover">
            <thead class= "text-dark">
                <tr>
                    <Th>Matricula</Th>
                    <th>Nombre</th>
                    <Th>Apellido Paterno</Th>
                    <Th>Apellido Materno</Th>
                    <th>Carrera</th>
                    <Th>Fecha</Th>
            </thead>
            <tbody>
                <?php while ($filas = mysqli_fetch_assoc($resultado)) {
                ?>
                    <tr>
                        <td><?php echo $filas['matricula'] ?></td>
                        <td><?php echo $filas['nombre'] ?></td>
                        <td><?php echo $filas['apellido_p'] ?></td>
                        <td><?php echo $filas['apellido_m'] ?></td>
                        <td><?php echo $filas['carrera'] ?></td>
                        <td><?php echo $filas['fecha'] ?></td>
                        <td>
                            <a href="eliminarES.php?id_in=<?php echo $filas['id_in'] ?>">
                            <button class="btn btn-danger btn-sm" type="button">Eliminar</button></div></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
            </table>
        </table>
    </div>
</body>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>



</body>

</html>