<?php
require '../conection.php';
//Create
//// Insercion FICHA  //////////////////////////////////////////////////////////////
function createAprendiz($ID_Apre,$Nom_Apre,$Tel_Apre,$Email_Apre,$Estado_Apre,$Cod_F){ 
    global $conn;
    $ap1 = "INSERT  INTO aprendiz (ID_Apre,Nom_Apre,Tel_Apre,Email_Apre,Estado_Apre,Cod_F) VALUES ('$ID_Apre','$Nom_Apre','$Tel_Apre','$Email_Apre','$Estado_Apre','$Cod_F')";
   //faltan las foraneas
   
   if ($conn->query($ap1) == TRUE) {
      return true;
   }else{
     trigger_error('Invalid query: ' . $conn->error);
     return false;
   }
   }

//Read
function readAllAprendiz(){
    global $conn;
    $sql = "SELECT * from aprendiz";
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