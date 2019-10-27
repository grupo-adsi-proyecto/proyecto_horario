<?php

 require "../model/aprendiz_db.php";
require "../model/ficha_db.php";


if(isset($_POST['ID_Apre']) && isset($_POST['Nom_Apre'])&& isset($_POST['Tel_Apre'])&& isset($_POST['Email_Apre'])&& isset($_POST['Estado_Apre'])&& isset($_POST['Cod_F'])){

  
  $ID_Apre=$_POST['ID_Apre'];
  $Nom_Apre=$_POST['Nom_Apre'];
  $Tel_Apre=$_POST['Tel_Apre'];
  $Email_Apre=$_POST['Email_Apre'];
  $Estado_Apre=$_POST['Estado_Apre'];
  $Cod_F=$_POST['Cod_F'];


  $result = createAprendiz($ID_Apre,$Nom_Apre,$Tel_Apre,$Email_Apre,$Estado_Apre,$Cod_F);
  if ($result==true){
    $mensaje="aprendiz guardada con exito";
    header('Location: ../views2/ingreso_aprendiz.php?mensaje_aprendiz='.$mensaje);  
    }else{
    $error="Error: Revisar datos ingresados";  
    header('Location: ../views2/ingreso_aprendiz.php?error_aprendiz='.$error);
      
  } 
}


// llamar programa y jornada

function getFichas(){

  $lista_fichas = readAllFichas();

  if($lista_fichas==false){
      echo "error en el servidor";
  }else if(gettype($lista_fichas)=="string"){           
      if(strcmp($lista_fichas, "vacio") == 0){
          //No hay registros en la consulta
          $error="los datos no conisiden, vuelva a intentarlo o comuniquese con su administrador";
          //iniciar nuevamente
          //header('Location: ../views/signup.php?ERROR='.$error);           
      }
  }else{           

      return $lista_fichas;   
  }

}

