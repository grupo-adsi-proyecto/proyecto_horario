<?php
require '../conection.php';
//Create
//// Insercion FICHA  //////////////////////////////////////////////////////////////
function createRae($Cod_RAE,$Descrip_RAE,$Estado_RAE,$Cod_C){ 
    global $conn;
    $rae1 = "INSERT  INTO resultados_de_aprendizaje (Cod_RAE,Descrip_RAE,Estado_RAE,Cod_C) VALUES ('$Cod_RAE',{$Descrip_RAE},{$Estado_RAE},{$Cod_C})";
   //faltan las foraneas
   
   if ($conn->query($rae1) == TRUE) {
      return true;
   }else{
     trigger_error('Invalid query: ' . $conn->error);
     return false;
   }
   }

//Read
function readAllRae(){
    global $conn;
    $sql = "SELECT * from resultados_de_aprendizaje";
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

function readAllFichasH($ficha1){
    global $conn;
    $sql = "SELECT Cod_D,Nom_D,ID_Hor, ID_Inst, Cod_Amb, Cod_RAE,Descrip_RAE, Cod_F, Hora_I,Hora_F,Cod_T,Nom_J
       FROM Plantilla_Horario H where H.Cod_F=(SELECT Cod_F from Aprendiz A where A.Cod_F='$ficha1') ORDER BY Cod_D ASC";
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