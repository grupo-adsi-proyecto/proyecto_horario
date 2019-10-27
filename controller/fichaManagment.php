<?php

 require "../model/ficha_db.php";
require "../model/programas_db.php";
require "../model/jornadas_db.php";      



if(isset($_POST['Cod_F']) && isset($_POST['Num_Cupo'])&& isset($_POST['Cod_P'])&& isset($_POST['Nom_J'])){
  $Cod_F=$_POST['Cod_F'];
  $Num_Cupo=$_POST['Num_Cupo'];
  $Cod_P=$_POST['Cod_P'];
  $Nom_J=$_POST['Nom_J'];

  $result = createFicha($Cod_F, $Num_Cupo, $Cod_P, $Nom_J);
  if ($result==true){
    $mensaje="Ficha guardada con exito";
    header('Location: ../views2/ingreso_ficha.php?mensaje_ficha='.$mensaje);  
    }else{
    $error="Error: Revisar datos ingresados";  
    header('Location: ../views2/ingreso_ficha.php?error_ficha='.$error);
      
  } 
}


// llamar programa y jornada

function getProgramas(){

  $lista_programas = readAllProgramas();

  if($lista_programas==false){
      echo "error en el servidor";
  }else if(gettype($lista_programas)=="string"){           
      if(strcmp($lista_programas, "vacio") == 0){
          //No hay registros en la consulta
          $error="los datos no conisiden, vuelva a intentarlo o comuniquese con su administrador";
          //iniciar nuevamente
          //header('Location: ../views/signup.php?ERROR='.$error);           
      }
  }else{           

      return $lista_programas;   
  }

}

function getJornada(){

    $lista_jornadas = readAllJornadas();
  
    if($lista_jornadas==false){
        echo "error en el servidor";
    }else if(gettype($lista_jornadas)=="string"){           
        if(strcmp($lista_jornadas, "vacio") == 0){
            //No hay registros en la consulta
            $error="los datos no conisiden, vuelva a intentarlo o comuniquese con su administrador";
            //iniciar nuevamente
            //header('Location: ../views/signup.php?ERROR='.$error);           
        }
    }else{           
  
        return $lista_jornadas;   
    }
  
  }
