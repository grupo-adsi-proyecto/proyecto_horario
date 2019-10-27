<?php
require '../conection.php';

//Create

function createCoordinador($ID_Coor,$Nom_Coor,$Contra_Coor,$Tel_Coor,$Email_Coor,$Direc_Coor,$Cod_S){
    global $conn;
    $co1 = "INSERT INTO coordinador (ID_Coor,Nom_Coor,Contra_Coor,Tel_Coor,Email_Coor,Direc_Coor,Cod_S) values({$ID_Coor},{$Nom_Coor},{$Contra_Coor},{$Tel_Coor},{$Email_Coor},{$Direc_Coor},{$Cod_S})";

    if ($conn->query($co1) === TRUE) {
        return true;
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
       trigger_error('Invalid query: ' . $conn->error);
        return false;
    }
    
}
// Read
function readAllCoor(){
    global $conn;
    $sql = "SELECT * from Coordinador";
    //Consulta para verificar que coinsiden los datos del instructor en este caso la identificación.
    $listacoor = $conn->query($sql);
    if (!$listacoor) {
        trigger_error('Invalid query: ' . $conn->error);// dispparador para indicar errores detallados en el servidor
         return false;
    }else if ($listacoor->num_rows > 0) {
    // Datos de entrada de cada fila en ciclo while 
    return $listacoor;
    /*while($row = $result->fetch_assoc()) //para imprimir{
    echo "id: " . $row["id"]. " - documento: " . $row["documento"]. " " . $row["password"]. "<br>";
    }*/
     } else {
     return "vacio";
         }
   $conn->close();
}

