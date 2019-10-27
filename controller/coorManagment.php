<?php
require '../model/coordinador_db.php';
require '../model/sede_db.php';

//------------------------------------------
  //echo $opcion; 


//INSERTAR

if (isset($_POST['ID_Coor']) && isset($_POST['Nom_Coor']) && isset($_POST['Contra_Coor']) && isset($_POST['Tel_Coor']) && isset($_POST['Email_Coor']) && isset($_POST['Direc_Coor']) && isset($_POST['Cod_S'])) { // insertar  de los campos   de las diferentes  regisro de la base de datos

    $ID_Coor = $_POST['ID_Coor'];
    $Nom_Coor = $_POST['Nom_Coor'];
    $Contra_Coor = $_POST['Contra_Coor'];
    $Tel_Coor = $_POST['Tel_Coor'];
    $Email_Coor = $_POST['Email_Coor'];
    $Direc_Coor = $_POST['Direc_Coor'];
    $Cod_S = $_POST['Cod_S'];

    $result = createCoordinador($ID_Coor,$Nom_Coor,$Contra_Coor,$Tel_Coor,$Email_Coor,$Direc_Coor,$Cod_S);
  if ($result==true){
    $mensaje="coordinador guardada con exito";
    header('Location: ../views2/ingreso_coordinador.php?mensaje_coordinador='.$mensaje);  
    }else{
    $error="Error: Revisar datos ingresados";  
    header('Location: ../views2/ingreso_coordinador.php?error_coordinador='.$error);
    
}
}

function getCoordinador(){  

    $lista_coor = readAllCoor();
    if ($lista_coor == false) {
        echo "error en el servidor";
    } else if (gettype($lista_coor) == "string") {
        if (strcmp($lista_coor, "vacio") == 0) {
            //No hay registros en la consulta
            $error = "los datos no conisiden, vuelva a intentarlo o comuniquese con su administrador";
            //iniciar nuevamente
            //header('Location: ../views/signup.php?ERROR='.$error);           
        }
    } else {
        return $lista_coor;
    }

}
/*este condicional para distingir entre cedulas y fichas en la logica de buscar del coordinador

if (isset($_POST['numficha'])){
  //$opcion = $_GET['opcion'];
  $ficha1=$_POST['numficha'];

  if ($ficha1>111111111){
  $inst1=$ficha1;
  }
}

*/

 
//function getSede(){
    //GLOBAL $ficha1;   para la logica de busqueda ingresar  varible en la funcion   
  //  print_r("Fichaaa -> 1");
   // print_r($ficha1);
//$result = readAllFichasH($ficha1);
//if($result==false){
   // echo "error del servidor";
//}//else if(gettype($result)=="string"){
//if(strcmp($result, "vacio")==0){
   //     $error="los datos no coinciden, vuelva a intentarlo otro dia :D";
  //  }

//}else{
 //   return $result;
//}
function getSede(){
    $lista_sedes= readAllSedes();
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




 


function getInstructor($inst1){
    $lista_instructor = readAllInstH($inst1);
if($lista_instructor==false){
    echo "error del servidor";
}else if(gettype($lista_instructor)=="string"){
    if(strcmp($lista_instructor, "vacio")==0){
        $error="los datos no coinciden, vuelva a intentarlo mastarde :D";
    }

}else{
    return $lista_instructor;
}
}


