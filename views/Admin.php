<?php

session_start();
require '../conection.php';
if(!isset($_SESSION['ADMIN'])){
  header('Location: ../views/signup.php');         
}
$variable1=$_SESSION['variable'];
?>
<!DOCTYPE html>
<html>
<head>
  <title>ADMIN_horarios</title>
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

  
<body>
  <div class="jumbotron" style="background-image: url(../assets/img/fondo.PNG); background-size: 100%;width: 100%;height:1050px;"><BR><BR><BR><BR><BR><BR>

      <div class="container for-about">
      <table>
        
      </table>
 <div class="row-5">
        <div class="col-md-9"> </div> 
   <button  class="btn btn-success"><a  href="../controller/logOutController.php">Cerrar sesión</a></button>
   </div>

   <div class="container">
   <div class="row">
  	 <div class="col-md-4">
     <table width="280" cellspacing="1" cellpadding="3" border="2" bgcolor="#1E679A">
<tr>
    <td><font color="green" face="arial, verdana, helvetica">
    <b>Sesion Activa </b>
     
     </font></td>
     </tr>
		
      </div>
      
   </div>
</div>
<tr>
    <td bgcolor="ffffff">
    <font face="arial, verdana, helvetica">
   <?php echo "Documento Administrador"."<br>".$variable1 ?>

    </font>
   </td>
</tr>
</table>


</body >
</html>
</head>
<body>
<div 
 style="position: relative; z-index: 800;width:1100px">
  
   <div style="width:1000px;height:830px;"><div style=" background-color: #238276; position:absolute; z-index:-2; top:0; left:0; right: 0; bottom:0; opacity:0.9;"></div><!--posición 6 de 12 en las rejillas para dispositivos medianos-->
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
</html>
    </body>

<body>
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
                    <br>
                    <p>AQUI  ENCONTRARA informacion de inicio</p>
                    <!--ingresar ak listado-->
                    <br>
                </div>
                <div>
                  <!--insercion de datos-->
                     <br><a href="../views2/ingreso_coordinador.php"><button class="btn btn-success"> ingresar coordinador <br></button>
                     <BR><a href="../views2/Ingreso_Ambiente.php"><button class="btn btn-success"> ingresar ambientes  </BR></button>
                     <BR>  <a href="../views2/ingreso_aprendiz.php"><button class="btn btn-success"> ingresar aprendiz </BR>   </button>
                     <BR> <a href="../views2/ingreso_jornada.php"><button class="btn btn-success"> ingresar de jornada </BR></button>
                     </BR><a href="../views2/ingreso_RAE.php"><button class="btn btn-success"> ingresar R.A </BR> </button>
                     <BR><a href="../views2/competencia.php"><button class="btn btn-success"> ingresar de competencia </BR>  </button>
                     <BR><a href="../views2/ingreso_sede.php"><button class="btn btn-success">ingresar de sede  </BR>  </button>
                     </BR> <a href="../views2/ingreso_trimestre.php"><button class="btn btn-success"> ingresar trimestre</BR> </button>
                     <BR><a href="../views2/ingreso_dia.php"><button class="btn btn-success">ingresar Dia </BR> </button>
                     <BR><a href="../views2/ingreso_programa.php"> <button class="btn btn-success"> ingresar programa </BR> </button>
                     <BR> <a href="../views2/ingreso_ficha.php"><button class="btn btn-success"> ingresar ficha</BR> </button>
                    <br><a href="../views2/ingreso_instructor.php"><button class="btn btn-success"> Ingresar Instructor <br></button></a>
                    <br>
                    <br>

                    </div>
                <div>
                    <br>
                    <br>
      
                </div>
                <div>
                    <br>
                
                </div>
            </div>
        </div>
        
    </div>
  <br>
  <br>
  
    


<br><a href="../views3/crear.php"><button type="button" class="btn btn-success btn-lg btn-block">CREAR HORARIO </button>
<br><a href=""><button type="button" class="btn btn-success btn-lg btn-block">PRECARGAR INFORMACION </button>
 </div>
</body>
      
</html>

               