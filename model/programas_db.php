<?php
require '../conection.php';
//Create
//de programa
 function createPrograma($Cod_P,$Descrip_P,$Duracion,$Mod_Form, $Version){
 global $conn;
 $pro1 = "INSERT  INTO Programa (Cod_P,Descrip_P,Duracion,Mod_Form,Version) VALUES ('$Cod_P','$Descrip_P','$Duracion','$Mod_Form','$Version')";


if ($conn->query($pro1) == TRUE) {
   return true;
}else{
    trigger_error('Invalid query: ' . $conn->error);
   return false;
}
}

//Read
function readAllProgramas(){
    global $conn;
    $PRO = "SELECT * from programa";
    //Consulta para verificar que coinsiden los datos del instructor en este caso la identificación.
    $result = $conn->query($PRO);
    if (!$result) {
        trigger_error('Invalid query: '.$conn->error);// dispparador para indicar errores detallados en el servidor
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
