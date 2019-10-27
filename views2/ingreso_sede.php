<?php

session_start();
require '../conection.php';
require '../controller/sedeManagment.php';
if (!isset($_SESSION['ADMIN'])) {
  header('Location: ../views/signup.php');
}

?>
<!DOCTYPE html>
<html>

<head>
  <title>Sedes</title>
  <meta charset='utf-8'>
  <meta http-equiv="X-UA-Compatible" content="chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="jquery.calendar.css" />
  <link rel="stylesheet" type="text/css" href="estilo.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="jquery.calendar.js"></script>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

  <!--menuvertical-->
  <link rel="stylesheet" type="text/css" href="../assets/css/easy-responsive-tabs.css " />
  <script src="../assets/js/jquery-1.9.1.min.js"></script>
  <script src="../assets/js/easyResponsiveTabs.js"></script>
  <script src="../assets/js/texto.js"></script>


</head>

<body>

  </head>

  <BODY>
    <table>
      <font size="9" color="Black" face="Arial"><img src="../assets/img/Logosede.png" style="float: left;width: 30%;height: 50%;" class="text-success">
        <center> SOFTWARE GESTION DE HORARIO DEL C.D.M </ceter><img src="../assets/img/rayas.png" style="float: right;width: 8.5%;height: 35%;">
      </font>
      <br>
      <center>
        <font size="6" color="1FE415" face="Arial">ANALISIS Y DESAROLLO DE SISTEMAS DE INFORMACION </font>
      </center>
    </table>
    <button  class="btn btn-success"><a href="javascript:history.back()"> Volver Atrás</a></button>
    <div class="row-5">
      <div class="col-md-9"> </div>
      <button lass="btn btn-primary" class="btn btn-danger"><a href="../controller/logOutController.php">Cerrar sesión</a></button>
    </div>

  </body>

</html>
<div class="container">
  <!--posición 6 de 12 en las rejillas para dispositivos medianos-->
  <div class="cold-md-6">
    <table class="table table-condensed">

      <thead>
        <tr>
          <th>

            <nav class="navbar navbar-expand-lg navbar-light bg-light">

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                  <li class="nav-item">
                    <a class="nav-link" href="#">HORARIOS TRIMESTRALES</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">INFORMACION
                  </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="Ingresar numero de ficha " placeholder="Ingresar numero de ficha " aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">CONSULTAR HORARIOS
                </form>
              </div>
            </nav>

            </html>
            </body>

            <body>

              <!-- <form class="form-signin" method="post" action="../controller/infManagment.php" > -->
              <div id="container">
                <!--Vertical Tab-->
                <div id="parentVerticalTab">
                  <ul class="resp-tabs-list hor_1">
                    <li>INICIO </li>
                    <li>INGRESAR INFORMACION</li>
                    <li>INGRESAR NUMERO DE FICHA </li>
                    <li>PLANTILLAS </li>
                  </ul>
                  <div class="resp-tabs-container hor_1">
                    <div>

                      <?php if (isset($_GET['mensaje_sede_delete'])) { ?>
                        <div class="alert alert-success" role="alert">
                          <?php echo $_GET['mensaje_sede_delete']; ?>
                        </div>
                      <?php } ?>
                      <?php if (isset($_GET['error_sede_delete'])) { ?>
                        <div class="alert alert-danger" role="alert">

                          <?php echo $_GET['error_sede_delete']; ?>
                        <?php } ?>
                        <!--akkk-->

                        <?php
                        $listado_sedes = getAllSedes();
                        ?>

                        <table class="table">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Código</th>
                              <th scope="col">Nombre</th>
                              <th scope="col">Dirección</th>
                              <th scope="col">Opciones</th>
                            </tr>
                          </thead>
                          <tbody>


                            <?php if ($listado_sedes == 'vacio') { ?>
                              <div class="alert alert-info" role="alert">
                                <?php echo "No hay elementos para listar"; ?>
                              </div>
                            <?php } ?>


                            <?php
                            if ($listado_sedes != 'vacio') {
                              ?>
                              <?php foreach ($listado_sedes as $key => $value) { ?>
                                <tr>
                                  <th scope="row"><?php echo $key ?></th>
                                  <td><?php echo $value['Cod_S'] ?></td>
                                  <td><?php echo $value['Nom_S'] ?></td>
                                  <td><?php echo $value['Direc_S'] ?></td>
                                  <td>
                                    <button class="btn"><i class="fa fa-trash" onclick="borrarSede(<?php echo $value['Cod_S']; ?>)"></i></button>
                                    <button class="btn"><i class="fa fa-edit" onclick="actualizarSede()"></i></button>
                                  </td>

                                </tr>
                              <?php } ?>
                            <?php } ?>


                          </tbody>
                        </table>



                      </div>
                      <div>
                        <form class="form-signin" method="post" action="../controller/sedeManagment.php">
                          Ingresar Codigo de la Sede:
                          <input class="form-control mr-sm-2" name="Cod_S" type="number" placeholder="CodigoSede" aria-label="Search">
                          Ingresar Nombre de la Sede:
                          <input class="form-control mr-sm-2" name="Nom_S" type="text" placeholder="Sede" aria-label="Search">
                          Ingresar Dirección de la Sede:
                          <input class="form-control mr-sm-2" name="Direc_S" type="text" placeholder="Direccion de la Sede" aria-label="Search">

                          <input type="submit" name="Guardar" class="Guardar-form btn btn-success" value="Guardar" />
                        </form>
                        <?php if (isset($_GET['mensaje_sede'])) { ?>
                          <!-- desde aqui los alertas -->
                          <div class="alert alert-success" role="alert">
                            <?php echo $_GET['mensaje_sede']; ?>
                          </div>
                        <?php } ?>
                        <?php if (isset($_GET['error_sede'])) { ?>
                          <div class="alert alert-danger" role="alert">

                            <?php echo $_GET['error_sede']; ?>
                          <?php } ?>
                          <!-- hasta aca los alertas -->


                          <br>
                          <br>

                        </div>
                        <div>

                          <br>
                          <br>
                          <p>Tab 3 Container</p>
                        </div>
                        <div>
                          Opciones de plantilla... formularios con crud
                          <div class="row">
                            <div class="col-md-2"> </div>
                            <button class="btn btn-danger"> Descargar PDF</button>

                            <div class="col-md-6"><button class="btn btn-danger"> Descargar Excel</BR></button></div>
                            <br>
                            <br>
                            <p>Tab 3 Container</p>
                          </div>
                        </div>
                      </div>

                    </div>
                    <br>
                    <br>


                    <div> <img src="../assets/img/rayas2.png" style="float: left;width: 12%;height: 15%">

                    </div>
                  </div>

                  <script>
                    function borrarSede(sede_id) {
                      alert("¿Está seguro de eliminar el registro?");
                      window.location.href = "../controller/sedeManagment.php?DELETE=true&Cod_S=" + sede_id;
                    }

                    function actualizarSede() {
                      alert("Falta el codigo para editar la sede ...   :(  ");
                    }
                  </script>

            </body>


            </html>