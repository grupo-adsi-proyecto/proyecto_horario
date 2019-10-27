<?php

require '../conection.php';
?>



<!DOCTYPE html>
   <html lang="en">

    <head>
       <title>Instrustor  horarios</title><!--titulo de la pestaña-->
       <meta charset="utf-8"><!--Estandar en HTML5-->
       <meta name="viewport" content="width=device-width, initial-scale=1"> 

  
     <!--MEJORAR ESTE CSS-->
       <link rel="stylesheet" href="css/estilo.css">

      <!-- se utiliza la estructura del boostrap como medio de diseño y estructuracion para la vista y el diseño de la pagina  -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

       
      <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet"> <!-- link de tipo de letra google fonts -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
            <!--Titulos-->
            <table>
          <font size="9" color="Black" face="Arial"><img src="logosede.png" style="float: left;width: 30%;height: 50%;"class="text-success"><center>  SOFTWARE GESTION DE HORARIO DEL C.D.M  </ceter><img src="rayas.png" style="float: right;width: 8.5%;height: 35%;"></font>
       <br>
           <center><font size="6" color="1FE415" face="Arial" >ANALISIS Y DESAROLLO DE SISTEMAS DE INFORMACION </font></center>
          </table>

<body background>
  
    <!-- Se utiliza la etiqueta div agrupar secciones o contenido  
       se agrega la clase  boton: para cerrar la sesion  -->
       <center>
   <div class="col text-right center">
    </font></center>
    </head>
    <br>
  <br>
  <br>
  <br>
  <br>
  <br>
   <button class="btn btn-primary" class="btn btn-danger derecha"> Cerrar Sesión</button>
   </div>

<!-- se utiliza el Container para que las clases se 
  agrupen y tener un control del diseño y su estructura -->
<div class="container">
<!--posición 5 de 12 en las rejillas para dispositivos medianos-->
  <div class="cold-md-5">

 

  <table class="table table-condensed" align="left">
    <thead>
      <tr>
        <th>     
        <!-- se utiliza par a el control los lineamientos el proceso de una etuiqueta como un item para volver y ver los horarios trimestrales 
        tambien se utiliza una selecion para escoger un rik en el cual se tienenencuenta el rol  a escojer  tambien el boton de busqueda para la informacion del horario y la ficha  -->

      <nav class="navbar navbar-expand-lg navbar-light bg-light nav naranja"> <!-- barrita bajo cerra -->

            <button class="navbar-toggler" type="button" data-toggle="collapse" 
                  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                  aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse naranja" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
<a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Trimestre</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="">Trimestre 1</a>
                <a class="dropdown-item" href="">Trimestre 2</a>
               <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="">Trimestre 3</a>
                <a class="dropdown-item" href="">Trimestre 4</a>
                <a class="dropdown-item" href="">Trimestre 5</a>
                <a class="dropdown-item" href="">Trimestre 6</a>
           </div>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="">Informacion</a>
               </li> 
                     
         </ul><!--espacio &nbsp;-->
         <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="Ingresar numero de ficha " placeholder="Ingresar numero de ficha " aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">CONSULTAR HORARIOS 
    </form>
      </nav>
      

    

      <!-- se utiliza el estructuracion para tener encuenta lastablas y el proceso del calendario donde se utiliza para los botones y calndario -->
 

   <div class="table-responsive"  align="left">          
        <table class="egt" border="2px" bgcolor= "" align="left">
       <div class="col text-center">
         <thead>
          <tr>
  <th>Codigo Dia</th>
        <th>Dia</th>
        <th>ID Horario</th>
        <th>Codigo Programa</th>
        <th>Programa</th>
        <th>Identificacion del instructor</th>
        <th>Nombre del Instructor</th>
       <th>Competencia</th> 
       <TH>Codigo RAE</TH>
        <th>Resultado de aprendizaje</th>
        <th>Sede</th>
        <th>Ambiente</th>
        <th>Codigo Jornada</th>
        <th>Jornada</th>
        <th>Ficha</th>
        <th>Hora de inicio</th>
        <th>Hora de Finalizacion</th>
        <th>Trimestre</th>
      </tr>
              <?php
$sql="SELECT Cod_D,Nom_D,ID_Hor,Cod_P,Descrip_P,ID_Inst,Nom_Inst,Cod_C,Cod_RAE,Decrip_RAE,Cod_S,Cod_Amb,Cod_J,Nom_J,Cod_F,Hora_I,Hora_F,Cod_T FROM plantilla_horario";

//$result= mysqli_query ($conn,$sql)or die ('Consulta fallida: '.mysqli_error());
trigger_error('Invalid query: ' . $conn->error);

$result=mysqli_query($conn,$sql);
trigger_error('Invalid query: ' . $conn->error);
while ($mostrar=mysqli_fetch_array($result)){
      ?>
       <tr>
         <th><?php echo $mostrar['Cod_D'] ?>        </th>
         <th><?php echo $mostrar['Nom_D'] ?>    /th>
         <th><?php echo $mostrar['ID_Hor'] ?></th>
         <th><?php echo $mostrar['Cod_P'] ?></th>
         <th><?php echo $mostrar['Descrip_P'] ?></th>
         <th><?php echo $mostrar['ID_Inst'] ?></th>
         <th><?php echo $mostrar['Nom_Inst'] ?></th>
         <th><?php echo $mostrar['Cod_C'] ?></th>
         <th><?php echo $mostrar['Cod_RAE'] ?></th>
         <th><?php echo $mostrar['Decrip_RAE'] ?></th>
         <th><?php echo $mostrar['Cod_S'] ?></th>
        <th><?php echo $mostrar['Cod_Amb'] ?></th>
        <th><?php echo $mostrar['Cod_J'] ?></th>
        <th><?php echo $mostrar['Nom_J'] ?></th>
        <th><?php echo $mostrar['Cod_F'] ?></th>
        <th><?php echo $mostrar['Hora_I'] ?></th>
        <th><?php echo $mostrar['Hora_F'] ?></th>
<th><?php echo $mostrar['Cod_T'] ?></th>
      </tr>
      <?php
    }
    ?>
      <tr>

        <th>Martes</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
      <tr>
        <th>Miercoles</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
      <tr>
        <th>Jueves</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
      <tr>
        <th>Viernes</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
      <tr>
        <th>Sabado</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
      <tr>
        <th>Domingo</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
    </table>
   
    

    <!-- cumple la funcion de ejecutar las funciones de la libreria  -->
<script type="text/javascript" src="javascript/botonesdemenu.js"></script><!--Esta ruta contiene la funcion para menu-->    
              <!-- se utiliza para dividir los botones en diferentes tablas y de igual foorma el horario con s su calendario -->
      

    <td>
      <li id="calendar">
        <div class="col text-left">

        <div id="calendar_wrap">
          <table summary="Calendar">
            <caption>
            Junio 2019
            </caption>
            <thead>
              <tr>
                <th abbr="Monday" scope="col" title="Monday">L</th>
                <th abbr="Tuesday" scope="col" title="Tuesday">M</th>
                <th abbr="Wednesday" scope="col" title="Wednesday">M</th>
                <th abbr="Thursday" scope="col" title="Thursday">J</th>
                <th abbr="Friday" scope="col" title="Friday">V</th>
                <th abbr="Saturday" scope="col" title="Saturday">S</th>
                <th abbr="Sunday" scope="col" title="Sunday">D</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <td abbr="February" colspan="3" id="prev"><a href="#" title="">&laquo; Nov</a></td>
                <td class="pad">&nbsp;</td>
                <td abbr="April" colspan="3" id="next"><a href="#" title="">Ener &raquo;</a></td>
              </tr>
            </tfoot>
            <tbody>
              <tr>
                <td colspan="2" class="pad">&nbsp;</td>
                <td>1</td>
                <td>2</td>
                                <td>3</td>
                <td>4</td>
                <td id="today">5</td>
              </tr>
              <tr>
                
                <td>6</td>
                <td>7</td>
                <td>8</td>
                <td>9</td>
                                <td>10</td>
                <td>11</td>
                <td>12</td>
              </tr>
              <tr>
                
                <td>13</td>
                <td>14</td>
                <td>15</td>
                <td>16</td>
                                <td>17</td>
                <td>18</td>
                <td>19</td>
              </tr>
              <tr>
                
                <td>20</td>
                <td>21</td>
                <td>22</td>
                <td>23</td>
                                <td>24</td>
                <td>25</td>
                <td>26</td>
              </tr>
              <tr>
                
                <td>27</td>
                <td>28</td>
                <td>29</td>
                <td>30</td>
                                <td>31</td>
                <td class="pad" colspan="2">&nbsp;</td>
              </tr>
              <tr>
                
              </tr>
            </tbody>
          </table>
        </div>
      </li>
      </div>

  </td>
      
      </tr>
    </tbody>
    </thead>
    <tbody>
      <tr>
  <!-- se utiliza para eldiseño y la estructuracion de la pagina  y la forma que se implementa todo -->

  </table>
  </div>
</div>
  <!-- sonbotones que se utilizan para la creacion de horarios y para cargarla informacion-->
<!-- cumple la funcion de ejecutar las funciones de la libreria  -->
<!--Esta ruta contiene la funcion para menu-->    
              <!-- se utiliza para dividir los botones en diferentes tablas y de igual foorma el horario con s su calendario -->
      <td>
       <div> <img src="rayas2.png" style="float: left;width: 12%;height: 15%">
        <div class="row">
        <div class="col-md-4"> </div>
          <div class="col-md-2"><button class="btn btn-danger"> Descargar PDF</button></div>

         <div class="col-md-2"><button class="btn btn-danger"> Descargar Excel</BR></button></div>

       </div>
     </td>
   
    <body>
</html>
   <!--
          tabla para agregar consultas
          de los horarios

          
   <table class = "table table-condensed table-hover table-bordered table-striped">
         <caption>Footballer Rank</caption>
         <thead>
            <tr>
               <th>Footballer</th>
               <th>Rank</th>
               <th>Country</th>
            </tr>
         </thead>
         <tbody>
            <tr>
               <td>Messi</td>
               <td>1</td>
               <td>Argentina</td>
            </tr>
            <tr>
               <td>Neymar</td>
               <td>2</td>
               <td>Brazil</td>
            </tr>
            <tr>
               <td>Ronaldo</td>
               <td>3</td>
               <td>Portugal</td>
            </tr>
         </tbody>
      </table>-->
