
<?php
 //require '../conection.php';
session_start();
require '../conection.php';
if(!isset($_SESSION['APRE'])){
  header('Location: ../views/signup.php');         
}
//llega la variable con el metodo get
$variable1=$_SESSION['variable'];
//llava la varible con el metodo session

?>
<!DOCTYPE html>
   <html lang="en">

    <head>
       <title>Aprendiz</title><!--titulo de la pestaña-->
       <meta charset="utf-8"><!--Estandar en HTML5-->
       <meta name="viewport" content="width=device-width, initial-scale=1"> 

  
     <!--MEJORAR ESTE CSS-->
       <link rel="stylesheet" href="../assets/css/stylead.css">

      <!-- se utiliza la estructura del boostrap como medio de diseño y estructuracion para la vista y el diseño de la pagina  -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

       

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
            <!--Titulos-->
            <table>
          <font size="9" color="Black" face="Arial"><img src="../assets/img/Logosede.png" style="float: left;width: 30%;height: 50%;"class="text-success"><center>  SOFTWARE GESTION DE HORARIO DEL C.D.M  </ceter><img src="../assets/img/rayas.png" style="float: right;width: 8.5%;height: 35%;"></font>
         <br>
           <center><font size="6" color="1FE415" face="Arial" >ANALISIS Y DESAROLLO DE SISTEMAS DE INFORMACION </font></center>
      </table>

    </head>

<body background="">
  
    <!-- Se utiliza la etiqueta div agrupar secciones o contenido  
       se agrega la clase  boton: para cerrar la sesion  -->
  

   <div class="col text-right center">
   <button lass="btn btn-primary" class="btn btn-danger"><a  href="../controller/logOutController.php">Cerrar sesión</a></button>
   </div>



   <div class="container">
   <div class="row">
  	 <div class="col-md-4">
     <table width="280" cellspacing="1" cellpadding="3" border="2" bgcolor="#1E679A">
<tr>
    <td><font color="white" face="arial, verdana, helvetica">
    <b>Sesion Activa </b>
     
     </font></td>
     </tr>
		
      </div>
      
   </div>
</div>

<tr>
    <td bgcolor="ffffff">
    <font face="arial, verdana, helvetica">
   <?php echo "Numero de ficha del aprendiz"."<br>".$variable1 ?>

   </font>
   </td>
</tr>
</table>

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

      <nav class="navbar navbar-expand-lg navbar-light bg-light"> <!-- barrita bajo cerra -->

            <button class="navbar-toggler" type="button" data-toggle="collapse" 
                  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                  aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
     

            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" 
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
           
            </li>
            <li class="nav-item">
               <a class="nav-link" href="">Informacion</a>
               </li> 
                     
         </ul><!--espacio &nbsp;-->
         
      </nav>

    

      <!-- se utiliza el estructuracion para tener encuenta lastablas y el proceso del calendario donde se utiliza para los botones y calndario -->


      <div class="table-responsive">          
        <table class="table" border="2px" bgcolor= "">
       <div class="col text-center">
         <thead>
          <tr>
          
          <th><center>Trimestre</th>
          <th><center>Dia</th>
          <th><center>Resultado de Aprendizaje</th>
          <th><center>Nombre del Instructor</th>
          <th><center>Ambiente</th>    
           
      </tr>
      <?php 
      $num1="SELECT Cod_D,Nom_D,ID_Hor, ID_Inst, Cod_Amb, Cod_RAE,Descrip_RAE, Cod_F, Hora_I,Hora_F,Cod_T,Nom_J
       FROM Plantilla_Horario H where H.Cod_F=(SELECT Cod_F from Aprendiz A where A.Cod_F=".$variable1.") ORDER BY Cod_D ASC";
      
      $result=mysqli_query($conn,$num1);
       while ($mostrar=mysqli_fetch_array($result)){
        ?>
       <tr>
        <th><?php echo "<center>".$mostrar['Cod_T']."</center>" ?><?php echo "<br>Jornada<br>".$mostrar['Nom_J'] ?></th>
        <th><?php echo $mostrar['Nom_D']."<br>" ?><?php echo "<br>".$mostrar['Hora_I'] ?><?php echo "<br>".$mostrar['Hora_F'] ?></th>
        <th><?php echo "Codigo:&nbsp;".$mostrar['Cod_RAE'] ?><?php echo "<br>".$mostrar['Descrip_RAE'] ?></th>
        <th><?php echo $mostrar['ID_Inst'] ?></th>
        <th><?php echo $mostrar['Cod_Amb'] ?></th>
        
      </tr>
      <?php
       }
       ?>
      
















      <div class="">
      
      </div>
     

  
    </div>
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
<script type="text/javascript" src="../assets/js/botonesdemenu.js"></script><!--Esta ruta contiene la funcion para menu-->    
              <!-- se utiliza para dividir los botones en diferentes tablas y de igual foorma el horario con s su calendario -->
      

    <td>
      <li id="calendar">
        <div class="col text-left">

        <div id="calendar_wrap">
          <table summary="Calendar">
            <caption>
            Diciembre 2019
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
        <div class="row">
        <div class="col-md-4"> </div>
          <div class="col-md-2"><button class="btn btn-danger"> Descargar PDF</button></div>

         <div class="col-md-2"><button class="btn btn-danger"> Descargar Excel</BR></button></div>

       </div>
     </td>
   
    <body>
</html>
