<?php
require '../conection.php';
//Create
//// Insercion FICHA  //////////////////////////////////////////////////////////////
function createAmbiente($Cod_Amb,$Nom_Amb,$Tipo_Amb,$Localizacion,$Estado_Amb,$Cupo_Amb,$Cod_S){ 
    global $conn;
    $Amb1 = "INSERT INTO ambiente (Cod_Amb,Nom_Amb,Tipo_Amb,Localizacion,Estado_Amb,Cupo_Amb,Cod_S) VALUES ('$Cod_Amb','$Nom_Amb','$Tipo_Amb','$Localizacion','$Estado_Amb','$Cupo_Amb','$Cod_S')";
   //faltan las foraneas
   
   if ($conn->query($Amb1) == TRUE) {
      return true;
   }else{
     trigger_error('Invalid query: ' . $conn->error);
     return false;
   }
   }

//Read
function readAllAmbientes(){
    global $conn;
    $sql = "SELECT * FROM Ambiente";
    //Consulta para verificar que coinsiden los datos del instructor en este caso la identificación.
    $result = $conn->query($sql);
    if (!$result) {
        trigger_error('Invalid query: ' . $conn->error);// dispparador para indicar errores detallados en el servidor
         return false;
    }else if ($result->num_rows > 0) {
    // Datos de entrada de cada fila en ciclo while 
    return $result;
    /*while($row = $result->fetch_assoc()) //para imprimir{
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