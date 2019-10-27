<?php
require "../model/ambiente_db.php";     
require "../model/sede_db.php";      




if(isset($_POST['Cod_Amb']) && isset($_POST['Nom_Amb'])&& isset($_POST['Tipo_Amb'])&& isset($_POST['Localizacion'])&& isset($_POST['Estado_Amb'])&& isset($_POST['Cupo_Amb'])&& isset($_POST['Cod_S'])){

  $Cod_Amb=$_POST['Cod_Amb'];
  $Nom_Amb=$_POST['Nom_Amb'];
  $Tipo_Amb=$_POST['Tipo_Amb'];
  $Localizacion=$_POST['Localizacion'];
  $Estado_Amb=$_POST['Estado_Amb'];
  $Cupo_Amb=$_POST['Cupo_Amb'];
  $Cod_S=$_POST['Cod_S'];

  



  $result = createAmbiente($Cod_Amb,$Nom_Amb,$Tipo_Amb,$Localizacion,$Estado_Amb,$Cupo_Amb,$Cod_S);
            if ($result==true){
            $mensaje="ambiente guardado con exito";
             header('Location: ../views2/Ingreso_Ambiente.php?mensaje_ambiente='.$mensaje);  
    
    
    
  }else{
    echo "hasta ak";
    $error="Error: Revisar datos ingresados";  
    header('Location: ../views2/Ingreso_Ambiente.php?error_ambiente='.$error);
      
  }
}






// llamar programa y jornada
/*
function getAmbiente(){

  $lista_ambiente = readAllAmbinetes();

  if($lista_ambiente==false){
      echo "error en el servidor";
  }else if(gettype($lista_ambiente)=="string"){           
      if(strcmp($lista_ambinete, "vacio") == 0){
          //No hay registros en la consulta
          $error="los datos no conisiden, vuelva a intentarlo o comuniquese con su administrador";
          //iniciar nuevamente
          //header('Location: ../views/signup.php?ERROR='.$error);           
      }
  }else{           

      return $lista_ambinete;   
  }

}*/

function getSededeambiente(){

   $lista_sedes = readAllSedes();

  if($lista_sedes==false){
      echo "error en el servidor";
  }else if(gettype($lista_sedes)=="string"){           
      if(strcmp($lista_sedes, "vacio") == 0){
          //No hay registros en la consulta
          $error="los datos no conisiden, vuelva a intentarlo o comuniquese con su administrador";
          //iniciar nuevamente
          //header('Location: ../views/signup.php?ERROR='.$error);           
      }
  }else{           

      return $lista_sedes;   
  }

  
}

?>
