<?php
  //require '../database.php';
  $message = '';
/*
  if (!empty($_POST['documento']) && !empty($_POST['password'])) {
    echo "adentro...";

    $sql = "INSERT INTO users (documento, password) VALUES (:documento, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':documento', $_POST['documento']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Nuevo usuario creado con éxito.';
    } else {
      $message = 'Losiento el ingreso no corresponde.';
    }
    
  }
*/
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <font face="Verdana">

    <title>SignUp</title>
   <!--<link rel="stylesheet" href="../assets/css/estilos.css">-->
    <!-- diseño 1<link rel="stylesheet" href="../assets/css/style.css">  fuente -->
    <!-- diseño 2<link rel="stylesheet" href="../assets/css/stl.css">-->


    <!--Dos diseños en bootstrab el primero esta modificado-->
    <!--1--<link rel="stylesheet" href="../assets/css/bootstrap/bootstrap.min.css">-->
    <!-- diseño numero(1)<link rel="stylesheet" href="../assets/css/bootstrap/bootstrap.css"> -->
    <link rel="stylesheet" href="../assets/css/bootstrap/bootstrap.css">

<!--diseño en bootstrab-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
   
    <!--jquery-->
  </head>
  <!--fondo de pantalla-->
  <body background="../assets/img/7.png" bgcolor="FFCECB" class="text-center" data-gr-c-s-loaded="true" onload="init();">
  	<!--responsive de pantalla-->
   <!--<link rel="stylesheet" href="../assets/css/fondo.css">-->
   
    <link rel="stylesheet" href="../assets/css/fondo.css">
 
    <?php require '../partials/header.php' ?>

    <h2 ><b><font color="#fc7323">Ingreso de Usuarios </h2></b></font>
    
    <!-- <form method="POST" action="../controller/userManagment.php">  
      <input name="documento" type="number" placeholder="Ingrese numero de Cedula" Required="required">
      <input name="password" type="password" placeholder="constraseña" Required="required">
      <input name="confirm_password" type="password" placeholder="Confirmar Contraseña" Required="required">
      <input type="submit" value="Guardar">
    </form> -->

    <?php
  echo $message;
?>
<br>
<br>
<div class="container">

  <div class="row featurette">

      

      </div>
  <div class="row" >
  <div class="col-md-6">
                          <form class="form-signin" method="post" action="../controller/userManagment.php" >



                         <img class="mb-4" src="../assets/img/icono.png" alt="" width="72" height="72">
                          <h1 class="h3 mb-3 font-weight-normal">Seleccione su rol de ingreso</h1>


        <div class="row">
        <!--contenedor de seleccion con las opciones de los roles -->
        <div class="col-6">
                         <center>
    <select class="btn btn-outline-secondary dropdown-toggle" name="rol" id="rol" >
    <option value="1">Administrador</option>
    <option value="2">Coordinador</option>
    <option value="3">Instructor</option>
    <option value="4">Aprendiz</option>
  </select>

<!--
     <div class="input-group-prepend">
      <SELECT  class="btn btn-outline-secondary dropdown-toggle" name="rol" id="rol" Required="required">
      <OPTION SELECTED>Seleccione un rol
	    <OPTION class="dropdown-item" value="1">Administrador</option><!--label="DOCUMENTACION"
	    <OPTION class="dropdown-item" value="2">Coordinador</option>
	    <OPTION class="dropdown-item" value="3">Instructor</option>
	    <OPTION class="dropdown-item" value="4">Aprendiz</option>
	   </SELECT>

     </div>

-->


                      </center>
      </div>
      </div>
      
       <div class="row">

        <div class="col-10">
      <label for="inputEmail" style="display:none" class="sr-only">Docoumento</label>
             <input type="number" id="inputDocumento" name="documento" style="display:none"
              class="form-control" placeholder="Documento"  autofocus="">

      <label for="inputPassword" class="sr-only" >Password</label>
             <input type="password" id="inputPassword" name="passw"
              style="display:none" class="form-control" placeholder="Password">

      <label for="inputFicha" style="display:none" class="sr-only" >Ficha</label> 
             <input type="number" id="inputFicha" name="ficha" style="display:none" 
              class="form-control" placeholder="Ficha" >

        </div>
       </div>
      <div class="input-group mb-3">

       </div>

      <div style="display:none" class="checkbox mb-1">
        <label>
          <input type="checkbox" value="remember-me"> Recordar
        </label>
      </div>

      <!--<button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>-->
      <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>

   
<br>

     <!-- boton modificado <section class=botones>  
               <div id="separar">    
               <span class="boton" type="submit">    Ingresar   </span>
               </div>     
      </section>-->



      <h3>
      <p class="mt-5 mb-3 text-muted">© 2019-2022</p>
       </h3>   
    </form>
  </div>
</div>

<div class="col-3">
</div>

<p>
Regional Cundimarca
</p>

<div class="row">
<div class="col-md-12">
otro tipo de informacion centrada como agradecimientos 
</div>
<div class="col-md-6">
redes sociales 
</div>
<div class="col-md-6">
contactos correos y direccion
</div>
</div>
</div>
</div>
<script>

/* $(document).ready(function(){
  $("p").click(function(){
    $(this).hide();
  });
}); */

$("#rol").click(function(){
var opcion =  $(this)[0].value;
//alert(opcion);
//logica para el administrador y el coordinador
if(opcion==1 || opcion==2){
  $("#inputDocumento").show();
  $("#inputPassword").show();
  $("#inputFicha").hide();
}
//logica para el instructor
if(opcion==3){
  $("#inputDocumento").show();
  $("#inputPassword").hide();
  $("#inputFicha").hide();
}
//logica para el aprendiz
if(opcion==4){

  $("#inputDocumento").hide();
  $("#inputPassword").hide();
  $("#inputFicha").show();
}

});

</script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  <!--CIERRO EL TIPO DE LETRA-->
  </font>
</html>
