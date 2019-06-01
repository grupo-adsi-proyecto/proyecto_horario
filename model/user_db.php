<?php


 //create
 require '../conection.php';

//// lectura /////

 function createUser( $documento, $passw){

 global $conn;

 
 $insertar = "INSERT INTO administrador (ID_Ad, Nom_Ad, Contra_Ad, Tel_Ad, Email_Ad, Direc_Ad) VALUE (".$documento.", 'jhgj',".$passw.",24324, 'bfghgf@hghf', 'hgfhfjf')";
 


 
 //sin comillas dobles 
 //LA INSERCION ES EN MAYUSCULA

if ($conn->query($insertar) == TRUE) {
   echo "listo";	
	exit;
    
}else{
	trigger_error('Invalid query: ' . $conn->error);

	echo'Error al registrarse';
}

}






//// lectura /////

function readAdmin($documento, $password){

    global $conn;
    
    $sql = "SELECT * FROM administrador WHERE ID_Ad='".$documento."' AND Contra_Ad='".$password."'";
    
    $result =  $conn->query($sql);

    if (!$result) {
        trigger_error('Invalid query: ' . $conn->error);
        return false;
    }else if ($result->num_rows > 0) {
        // output data of each row
        return $result;
        /*while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - documento: " . $row["documento"]. " " . $row["password"]. "<br>";
        }*/
    } else {
        return "vacio";
    }
    $conn->close();
    
  
    }


