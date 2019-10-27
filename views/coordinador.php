<?php

session_start();
require '../conexion.php';
require '../controller/coorManagment.php';
if (!isset($_SESSION['COOR'])) {
  header('Location: ../views/signup.php');
}

$variable1 = $_SESSION['variable1'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Coordinador</title>
  <!--titulo de la pestaña-->
  <meta charset="utf-8">
  <!--Estandar en HTML5-->
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!--MEJORAR ESTE CSS-->
  <link rel="stylesheet" href="../assets/css/stylead.css">

  <!-- se utiliza la estructura del boostrap como medio de diseño y estructuracion para la vista y el diseño de la pagina  -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <!--Titulos-->
  <div class="jumbotron" style="background-image: url(../assets/img/fondo.PNG); background-size: 100%;width: 100%;height:1050px;"><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>>


</head>

<div class="col text-right center">
  <button lass="btn btn-primary" class="btn btn-danger"><a href="../controller/logOutController.php">Cerrar sesión</a></button>
</div>

<div style="position: relative; z-index: 800;width:3500px">

  <div style="width:1000px;height:1800px;">
    <div style="  background-color: #238276; position:absolute; z-index:-2; top:0; left:0; right: 0; bottom:0; opacity:0.9;"></div>

    <body background="">

      <!-- se utiliza el Container para que las clases se 
agrupen y tener un control del diseño y su estructura -->
      <div class="container">
        <!--posición 5 de 12 en las rejillas para dispositivos medianos-->
        <div class="cold-md-5">



          <table class="table table-condensed">
            <thead>
              <tr>
                <th>
                  <!-- se utiliza par a el control los lineamientos el proceso de una etuiqueta como un item para volver y ver los horarios trimestrales 
        tambien se utiliza una selecion para escoger un rik en el cual se tienenencuenta el rol  a escojer  tambien el boton de busqueda para la informacion del horario y la ficha  -->

                  <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <!-- barrita bajo cerra -->

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">


                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Trimestre</a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="">Trimestre 1</a>
                            <a class="dropdown-item" href="">Trimestre 2</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="">Trimestre 3</a>
                            <a class="dropdown-item" href="">Trimestre 4</a>
                            <a class="dropdown-item" href="">Trimestre 5</a>
                            <a class="dropdown-item" href="">Trimestre 6</a>

                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="">Informacion</a>
                        </li>

                      </ul>
                      <!--espacio &nbsp;-->

                  </nav>


                  <!-- metodo post -->
                  <form class="form coordinador">
                    <h1 class="h3 mb-3 font-weight-normal">Seleccione busqueda de las tablas</h1>

                    <!--style="display:none"-->

                    <div class="row">

                      <div class="col-10">
                        <label for="inputFicha" class="sr-only">Ficha</label>
                        <p><input type="text" name="numficha" values="jonn" /></p>


                        <div id="enviar_datos">enviar datos </div>
                        <input type="reset" value="restaurar formulario" />
                        <p>
                  </form>



                  <!-- se utiliza el estructuracion para tener encuenta lastablas y el proceso del calendario donde se utiliza para los botones y calndario -->
                  <script>
                    $(document).ready(function() {
                          $("enviar_datos").click(function() {
                            console.log("enviar_datos");
                            var ficha = $(this).val();
                            if (ficha > 111111) {
                              $.post('../controller/tabla1managment.php', {cod_ficha: ficha}).done(
                                function(respuesta) {
                                $('#TABLA1').html(respuesta);
                              });
                            } else {
                              $.post('../views3/tabla2managment.php', {cod_ficha: ficha}).done(
                                function(respuesta) {
                                  $('#TABLA2').html(respuesta);
                                }

                              });
                          });

                          function mostrarOcultarTablas(id) {
                            mostrado = 0;
                            elem = document.getElementById(id);
                            if (elem.style.display == 'block') mostrado = 1;
                            elem.style.display = 'none';
                            if (mostrado != 1) elem.style.display = 'block';
                          }
                  </script>



                  <div id='#TABLA1'>
                  </div>

                  <div id='#TABLA2'>
                  </div>



                  <select onChange="window.location.href=this.value">
                    <option value="#">::ALL::</option>
                    <option value="javascript:mostrarOcultarTablas('tabla')">G0</option>
                    <option value="javascript:mostrarOcultarTablas('tabla2')">G2</option>
                    <option value="javascript:mostrarOcultarTablas('tabla3')">GH</option>
                  </select>

                  <div id="myDIV" class="table-responsive">ocultar</div>

                  <table class="table" id="tabla" border="2px" bgcolor="">
                    <div id="myDIV" class="col text-center">
                      <thead>
                        <tr>

                          <th>
                            <center>Trimestre
                          </th>
                          <th>
                            <center>Dia
                          </th>
                          <th>
                            <center>Resultado de Aprendizaje
                          </th>
                          <th>
                            <center>Nombre del Instructor
                          </th>
                          <th>
                            <center>Ambiente
                          </th>

                        </tr>
                        <?php
                        $result = getFicha();
                        print_r("aquiiii");
                        print_r($result);
                        while ($mostrar = $result->fetch_assoc()) {
                          ?>
                          <tr>
                            <th><?php echo "<center>" . $mostrar['Cod_T'] . "</center>" ?><?php echo "<br>Jornada<br>" . $mostrar['Nom_J'] ?></th>
                            <th><?php echo $mostrar['Nom_D'] . "<br>" ?><?php echo "<br>" . $mostrar['Hora_I'] ?><?php echo "<br>" . $mostrar['Hora_F'] ?></th>
                            <th><?php echo "Codigo:&nbsp;" . $mostrar['Cod_RAE'] ?><?php echo "<br>" . $mostrar['Descrip_RAE'] ?></th>
                            <th><?php echo $mostrar['ID_Inst'] ?></th>
                            <th><?php echo $mostrar['Cod_Amb'] ?></th>

                          </tr>
                        <?php
                        }
                        ?>
                        <script>
                          document.getElementById("myDIV").style.display = "none";
                        </script>

                      </thead>
                    </div>
                    <!-- metodo post -->

                  </table>

                  <div class="table-responsive">
                    <table class="table" id="tabla2" border="2px" bgcolor="">
                      <div class="col text-center">
                        <thead>
                          <tr>
                            <th>
                              <center>Dia
                            </th>
                            <th>
                              <center>Jornada
                            </th>

                            <th>
                              <center>Nombre del Instructor
                            </th>
                            <th>
                              <center>Sede
                            </th>

                            <th>
                              <center>Ambiente
                            </th>
                            <th>
                              <center>Ficha
                            </th>

                          </tr>
                          <?php

                          //concatenar el documento del instructor con la consulta 


                          $lista_instructor = getInstructor();
                          while ($mostrar = mysqli_fetch_array($lista_instructor)) {
                            ?>
                            <tr>
                              <th><?php echo $mostrar['Nom_D'] ?></th>
                              <th><?php echo $mostrar['Nom_J'] ?><?php echo $mostrar['Hora_I'] ?><?php echo $mostrar['Hora_F'] ?></th>
                              <th><?php echo $mostrar['Nom_Inst'] ?></th>
                              <th><?php echo $mostrar['Nom_S'] ?></th>
                              <th><?php echo $mostrar['Cod_Amb'] ?></th>
                              <th><?php echo $mostrar['Cod_F'] ?></th>



                            </tr>
                          <?php
                          }
                          ?>




                        </thead>
                      </div>
                    </table>
                  </div>


                  <!-- cumple la funcion de ejecutar las funciones de la libreria  -->
                  <script type="text/javascript" src="../assets/js/botonesdemenu.js"></script>
                  <!--Esta ruta contiene la funcion para menu-->
                  <!-- se utiliza para dividir los botones en diferentes tablas y de igual foorma el horario con s su calendario -->


                  <!-- sonbotones que se utilizan para la creacion de horarios y para cargarla informacion-->
                  <!-- cumple la funcion de ejecutar las funciones de la libreria  -->
                  <!--Esta ruta contiene la funcion para menu-->
                  <!-- se utiliza para dividir los botones en diferentes tablas y de igual foorma el horario con s su calendario -->
                <td>
                  <div class="row">
                    <div class="col-md-4"> </div>
                    <div class="col-md-2"><button class="btn btn-danger"> Descargar PDF</button></div>

                    <div class="col-md-2"><button class="btn btn-danger"> Descargar Excel</BR></button></div>

                  </div>
                </td>
                </th>
              </tr>
            </thead>
          </table>
        </div>
      </div>

    </body>
  </div>
</div>

</html>