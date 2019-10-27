<?php
require '../conection.php';

//Create

function createCompetencia($codigo, $estado, $programa, $nombre)
{
    global $conn;
    $sql = "INSERT INTO Competencia values(" . $codigo . ",'" . $nombre . "'," . $estado . "," . $programa . ")";
    if ($conn->query($sql) === TRUE) {
        $conn->close();
        return true;
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
        trigger_error('Invalid query: ' . $conn->error);
        $conn->close();
        return false;
    }
    $conn->close(); 
}


//Read
function readAllCompetencias(){
    global $conn;
    $sql = "select * from Competencia";
    //Consulta para verificar que coinsiden los datos del instructor en este caso la identificación.
    $result = $conn->query($sql);
    if (!$result) {
        trigger_error('Invalid query: ' . $conn->error);// dispparador para indicar errores detallados en el servidor
         return false;
    }else if ($result->num_rows > 0) {

            $conn->close();
         return $result;
     } else {
        $conn->close();
         return "vacio";
    }
}


//Update



//Delete

function deleteCompetencias($competencia_id){

    global $conn;

    $sql = "DELETE FROM Competencia WHERE Cod_C={$competencia_id}";

    if ($conn->query($sql) === TRUE) {
        $conn->close();
        return true;
    } else {
        $conn->close();
        return false;
    }

}


?>

