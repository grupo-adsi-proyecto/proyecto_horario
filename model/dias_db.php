<?php
require '../conection.php';
//Create
//// Insercion DIA //////////////////////////////////////////////////////////////
 function createDia($Cod_D,$Nom_D){
 global $conn;
 $dia1 = "INSERT  INTO Dias (Cod_D,Nom_D) VALUES ('$Cod_D','$Nom_D')";


if ($conn->query($dia1) == TRUE) {
   return true;

  exit;
}else{
  trigger_error('Invalid query: ' . $conn->error);
  return false;
}
}

   

//Read



//Update



//Delete


?>