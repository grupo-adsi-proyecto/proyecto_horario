<?php
require "../model/jornada_db.php";      

if(isset($_POST['Cod_J'])&& isset($_POST['Nom_J'])&& isset($_POST['Hora_I'])&& isset($_POST['Hora_I'])){
$Cod_J=$_POST['Cod_J'];
$Nom_J=$_POST['Nom_J'];
$Hora_I=$_POST['Hora_I'];
$Hora_F=$_POST['Hora_F'];

  $result = createJornada($Cod_J,$Nom_J,$Hora_I,$Hora_F);
  if ($result==true){
    $mensaje="Jornada guardada con exito";
    header('Location: ../views2/ingreso_jornada.php?mensaje_jornada='.$mensaje);  
  }else{
    $error="Error: Revisar datos ingresados";  
    header('Location: ../views2/ingreso_jornada.php?error_jornada='.$error); 
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
