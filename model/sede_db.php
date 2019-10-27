<?php
require '../conection.php';
//Create
//// Insercion SEDE  //////////////////////////////////////////////////////////////
function createSede($Cod_S,$Nom_S,$Direc_S){
    global $conn;
    $sede1 = "INSERT  INTO Sede (Cod_S,Nom_S,Direc_S) VALUES ('$Cod_S','$Nom_S','$Direc_S')";
   
   
   if ($conn->query($sede1) == TRUE) {
return true; //para el mensaje
   }else{
     trigger_error('Invalid query: ' . $conn->error);
return false; //para el mensaje
   }
   }

   

//Read
function readAllSedes(){
    global $conn;
    $sql = "SELECT * from sede";
    //Consulta para verificar que coinsiden los datos del instructor en este caso la identificación.
    $result = $conn->query($sql);
    if (!$result) {
        trigger_error('Invalid query: ' . $conn->error);// dispparador para indicar errores detallados en el servidor
         return false;
    }else if ($result->num_rows > 0) {
            
         return $result;
     } else {
        $conn->close();
         return "vacio";
    }
}


//Update



//Delete

function deleteSede($sede_id){

    global $conn;

    $sql = "DELETE FROM Sede WHERE Cod_S={$sede_id}";

    if ($conn->query($sql) === TRUE) {
        $conn->close();
        return true;
    } else {
        $conn->close();
        return false;
    }

}

?>