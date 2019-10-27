<?php
require '../conection.php';
//Create
//// Insercion TRIMESTRE  //////////////////////////////////////////////////////////////
 function createTrimestre($Cod_T,$Trimestre,$Fechai,$Fechaf){
 global $conn;
 $tri1 = "INSERT  INTO Trimestre (Cod_T,Trimestre,Fechai,Fechaf) VALUES ('".$Cod_T."','".$Trimestre."','".$Fechai."','".$Fechaf."')";


if ($conn->query($tri1) == TRUE) {
  return true;
}else{
  trigger_error('Invalid query: ' . $conn->error);
return false;
}
}

//Read
function readAllTrimestre(){

global $conn;

	$sql ="SELECT * FROM Trimestre";

	$result =$conn->query($sql);
  if(!$result){
  	trigger_error('Invalid query: '.$conn->error);
  	return false;
  	}else if ($result->num_rows > 0) {
    // Datos de entrada de cada fila en ciclo while 
    return $result;
    /*while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - documento: " . $row["documento"]. " " . $row["password"]. "<br>";
    }*/
     } else {
     return "vacio";
         }
   $conn->close();
 
}




//Update



//Delete


?>