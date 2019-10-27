<?php

session_start();
require '../conection.php';
require '../controller/instManagment.php';
if (!isset($_SESSION['ADMIN'])) {
  header('Location: ../views/signup.php');
}

?>
<!DOCTYPE html>
<html>

<head>
  <title>Instructor</title>
  <meta charset='utf-8'>
  <meta http-equiv="X-UA-Compatible" content="chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="jquery.calendar.css" />
  <link rel="stylesheet" type="text/css" href="estilo.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">



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
              <div id="container">
                <!--Vertical Tab-->
                <div id="parentVerticalTab">
                  <ul class="resp-tabs-list hor_1">
                    <li>PLANTILLA</li>
                    <li>INGRESAR INFORMACION</li>
                    <li>INGRESAR NUMERO DE FICHA </li>
                    <li>PLANTILLAS </li>
                  </ul>
                  <div class="resp-tabs-container hor_1">
                    <div>
                     <!--especio para agregar info-->
                    </div>
                    <div>
                      <form method="post" action="../controller/instManagment.php">
                        Ingresar Identificación del Instructor:
                        <!--<form class="form-inline my-2 my-lg-0">-->
                        <input class="form-control mr-sm-2" name="ID_Inst" type="text" placeholder="Identificación" aria-label="Search">
                        Ingresar Nombre completo del Instructor:

                        <input class="form-control mr-sm-2" name="Nom_Inst" type="text" placeholder="Nombre del Instructor" aria-label="Search">
                       
                        Ingresar Telefono del Instructor:

                        <input class="form-control mr-sm-2" name="Tel_Inst" type="number" placeholder="Telefono" aria-label="Search">

                        Ingresar E-mail del Instructor:

                        <input class="form-control mr-sm-2" name="Email_Inst" type="E-mail" placeholder="E-mail" aria-label="Search">

                        Ingresar dirrección del Instructor:

                        <input class="form-control mr-sm-2" name="Direc_Inst" type="text" placeholder="Dirrección" aria-label="Search">

                        Ingresar estado del instructor:
                        <div > 
                       <select class="form-control mr-sm-2" name="Estado_Ist">
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                        </select>
                        </div> 

                        Ingresar hora asignada del Instructor:

                         <div > 
                       <select class="form-control mr-sm-2" name="Hora_A">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                 <option value="3">3</option>
                                <option value="4">4</option>
                                 <option value="5">5</option>
                                <option value="6">6</option>
                                 <option value="7">7</option>
                                <option value="8">8</option>
                                 <option value="9">9</option>
                                <option value="10">10</option>
                                 <option value="11">11</option>
                                <option value="12">12</option>
                                 <option value="13">13</option>
                                <option value="14">14</option>
                                 <option value="15">15</option>
                                <option value="16">16</option>
                                 <option value="17">17</option>
                                <option value="18">18</option>
                                 <option value="19">19</option>
                                <option value="20">20</option>
                                 <option value="21">21</option>
                                <option value="22">22</option>
                                 <option value="23">23</option>
                                <option value="24">24</option>
                                 <option value="25">25</option>
                                <option value="26">26</option>
                                 <option value="27">27</option>
                                <option value="28">28</option>
                                 <option value="29">29</option>
                                <option value="30">30</option>
                                 <option value="31">31</option>
                                <option value="32">32</option>
                                 <option value="33">33</option>
                                <option value="34">34</option>
                                 <option value="35">35</option>
                                <option value="36">36</option>
                                 <option value="37">37</option>
                                <option value="38">38</option>
                                 <option value="39">39</option>
                                <option value="40">40</option>

                        </select>
                        </div> 

                        </div>
                        <br>
                        <br>

                        <input type="submit" class="btn btn-success mb-2" value="Guardar" />

                      </form>
                      <?php if (isset($_GET['mensaje_instructor'])) {?> <!-- desde aqui los alertas -->
                        <div class="alert alert-success" role="alert">
                          <?php echo $_GET['mensaje_instructor'];?>
                        </div>
                        <?php } ?>
                      <?php if (isset($_GET['error_instructor'])) {?>
                      <div class="alert alert-danger" role="alert">
                        
                          <?php echo $_GET['error_instructor'];?>
                       <?php } ?> <!-- hasta aca los alertas -->
                      </div>
                    </div>

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
  </body>

  </html>