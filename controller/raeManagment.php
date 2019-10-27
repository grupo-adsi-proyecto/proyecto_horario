<?php

 require "../model/rae_db.php";
require "../model/competencia_db.php";
     



if(isset($_POST['Cod_RAE']) && isset($_POST['Descrip_RAE'])&& isset($_POST['Estado_RAE'])&& isset($_POST['Cod_C'])){
  $Cod_RAE=$_POST['Cod_RAE'];
  $Descrip_RAE=$_POST['Descrip_RAE'];
  $Estado_RAE=$_POST['Estado_RAE'];
  $Cod_RAE=$_POST['Cod_C'];

  $result = createRae($Cod_RAE,$Descrip_RAE,$Estado_RAE,$Cod_RAE);
  if ($result==true){
    $mensaje="rae guardada con exito";
    header('Location: ../views2/ingreso_RAE.php?mensaje_rae='.$mensaje);  
    
    
    
  }else{
    $error="Error: Revisar datos ingresados";  
    header('Location: ../views2/ingreso_RAE.php?error_rae='.$error);
      
  } 
}






// llamar programa y jornada

function getCompetencia(){

  $lista_competencia = readAllCompetencias();

  if($lista_competencia==false){
      echo "error en el servidor";
  }else if(gettype($lista_competencia)=="string"){           
      if(strcmp($lista_competencia, "vacio") == 0){
          //No hay registros en la consulta
          $error="los datos no conisiden, vuelva a intentarlo o comuniquese con su administrador";
          //iniciar nuevamente
          //header('Location: ../views/signup.php?ERROR='.$error);           
      }
  }else{           

      return $lista_competencia;   
  }

}


