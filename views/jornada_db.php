<?php
require '../conection.php';
//Create
//// Insercion FICHA  //////////////////////////////////////////////////////////////
function createFicha($Cod_F,$Num_Cupo,$Cod_P,$Cod_J){ 
    global $conn;
    $fi1 = "INSERT  INTO Ficha (Cod_F,Num_Cupo,Cod_P,Cod_J) VALUES ('$Cod_F','$Num_Cupo','$Cod_P','$Cod_J')";
   //faltan las foraneas
   
   if ($conn->query($fi1) == TRUE) {
      return true;
   }else{
     trigger_error('Invalid query: ' . $conn->error);
     return false;
   }
   }

//Read
function readAllFichas(){
    global $conn;
    $sql = "select * from Ficha";
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