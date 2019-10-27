
<?php

session_start();
require '../conection.php';
if(!isset($_SESSION['INSTRUC'])){
  header('Location: ../views/signup.php');         
}
$variable3=$_SESSION['variable2'];

?>



<!DOCTYPE html>
   <html lang="en">

    <head>
       <title>Instrustor_horarios</title><!--titulo de la pestaña-->
       <meta charset="utf-8"><!--Estandar en HTML5-->
       <meta name="viewport" content="width=device-width, initial-scale=1"> 

  
     <!--MEJORAR ESTE CSS-->
       <link rel="stylesheet" href="../assets/css/stylead.css">

      <!-- se utiliza la estructura del boostrap como medio de diseño y estructuracion para la vista y el diseño de la pagina  -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

       
      <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
            <!--Titulos-->
            <table>
          <font size="9" color="Black" face="Arial"><img src="../assets/img/Logosede.png" style="float: left;width: 30%;height: 50%;"class="text-success"><center>  SOFTWARE GESTION DE HORARIO DEL C.D.M  </ceter><img src="../assets/img/rayas.png" style="float: right;width: 8.5%;height: 35%;"></font>
       <br>
           <center><font size="6" color="1FE415" face="Arial" >ANALISIS Y DESAROLLO DE SISTEMAS DE INFORMACION </font></center>
          </table>

    
<body>
<body background="">
  
    <!-- Se utiliza la etiqueta div agrupar secciones o contenido  
       se agrega la clase  boton: para cerrar la sesion  -->
     <center>
   <div class="row ">
        <div class="col-md-9"> </div> 
   <button lass="btn btn-primary" class="btn btn-danger"><a  href="../controller/logOutController.php">Cerrar sesión</a></button>
   </div>

  
    <td><font color="green" face="arial, verdana, helvetica">
    <b>Sesion Activa </b>
    <font face="arial, verdana, helvetica">
   <?php echo "Documento Instructor"."<br>".$variable3 ?>

    </font>
     
     
 


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

  <button class="navbar-toggler" type="button" data-toggle="collapse" 
          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
          aria-expanded="false" aria-label="Toggle navigation">
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

    

      <!-- se utiliza el estructuracion para tener encuenta lastablas y el proceso del calendario donde se utiliza para los botones y calndario -->


      <div class="table-responsive">          
        <table class="table" border="2px" bgcolor= "">
       <div class="col text-center">
         <thead>
          <tr>
        <th><center>Dia</th>
        <th><center>Jornada</th>
     
        <th><center>Nombre del Instructor</th>
        <th><center>Sede</th>

        <th><center>Ambiente</th>
         <th><center>Ficha  y  Trimestre </th>
               <th><center>Codigo RAE </th>
        
      </tr>
      <?php 
       
//concatenar el documento del instructor con la consulta 
     
      
       $sql="SELECT i.ID_Inst,h.ID_Inst,i.Nom_Inst, ID_Hor,Cod_T,Nom_S,a.Cod_Amb,
       Tipo_Amb,Cod_P,Descrip_P, Cod_F,Nom_D,Nom_J,Hora_I,Hora_F,Cod_RAE,Descrip_RAE
       FROM Instructor i,Ambiente a inner join Sede s,Plantilla_Horario h
        WHERE a.Cod_Amb=h.Cod_Amb AND s.Cod_S=a.Cod_S and i.ID_Inst='$variable3' and(i.ID_Inst=h.ID_Inst)";

       $result=mysqli_query($conn,$sql);
       while ($mostrar=mysqli_fetch_array($result)) {
        ?>
       <tr>
        <th><center><?php echo $mostrar['Nom_D'] ?></th>
        <th><center><?php echo $mostrar['Nom_J'] ?>:&nbsp;<?php echo $mostrar['Hora_I'] ?>&nbsp;&nbsp;a&nbsp;&nbsp;<?php echo $mostrar['Hora_F'] ?></th>
        <th><center><?php echo $mostrar['Nom_Inst'] ?></th>
        <th><center><?php echo $mostrar['Nom_S'] ?></th>
        <th><center><?php echo $mostrar['Cod_Amb'] ?></th>
        <th><center><?php echo $mostrar['Cod_F'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $mostrar['Cod_T'] ?></th>
          <th><center><?php echo $mostrar['Cod_RAE'] ?></th>
        
        
       
      </tr>
      <?php
       }
       ?>
    </table>
     
    
    
      
... 
       <div> <img src="../assets/img/rayas2.png" style="float: left;width: 12%;height: 15%">
        <div class="row">
        <div class="col-md-2"> </div>
      <a href="../views3/PdfInst.php"><button class="btn btn-danger"> Descargar PDF</button></a>

       <a href="../views3/ExcelInst.php"><div class="col-md-6"><button class="btn btn-danger"> Descargar Excel</BR></button></a>
       </div>

       </div>
     </div>
   
    <!-- cumple la funcion de ejecutar las funciones de la libreria  -->
<script type="text/javascript" src="..assets/js/botonesdemenu.js"></script><!--Esta ruta contiene la funcion para menu-->    
              <!-- se utiliza para dividir los botones en diferentes tablas y de igual foorma el horario con s su calendario -->
      

    
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
     
   
    </body>


</html>

