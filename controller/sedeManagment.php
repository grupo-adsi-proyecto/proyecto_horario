<?php
 require "../model/sede_db.php";


 

 /** Elimina una sede */
 if(isset($_GET['DELETE']) && isset($_GET['Cod_S'])){

    $result =  deleteSede($_GET['Cod_S']);

    if ($result==true){
      $mensaje="Sede eliminada con exito";
      header('Location: ../views2/ingreso_sede.php?mensaje_sede_delete='.$mensaje);
    }else{
      $error="Error: El elemento no puede ser eliminado";
      header('Location: ../views2/ingreso_sede.php?error_sede_delete='.$error);
    }

 }


/** Crear una nueva sede */

if(isset($_POST['Cod_S']) && isset($_POST['Nom_S'])&& isset($_POST['Direc_S'])){
$Cod_S=$_POST['Cod_S'];
$Nom_S=$_POST['Nom_S'];
$Direc_S=$_POST['Direc_S'];

        
 $result = createSede($Cod_S, $Nom_S, $Direc_S);

          if ($result==true){
            $mensaje="Sede guardada con exito";
            header('Location: ../views2/ingreso_sede.php?mensaje_sede='.$mensaje);  
            
            
          }else{
            $error="Error: Revisar datos ingresados";  
            header('Location: ../views2/ingreso_sede.php?error_sede='.$error);
              
          }
        }


/** Consulta todas las sede */
function getAllSedes(){
  $result = readAllSedes();
  return $result;
}



?>