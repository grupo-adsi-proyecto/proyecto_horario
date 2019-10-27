<?php
 //create conn con la base de datos
 require '../conection.php';

//// Creación o insercion en la base de datos  //////////////////////////////////////////////////////////////
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



//// lectura ////////////////////////////////////////////////agregar 3 variables.
    function readAdmin($documento, $password){
    global $conn;

    $sql = "SELECT * FROM Administrador WHERE ID_Ad='".$documento."' AND Contra_Ad='".$password."'";
    //consulta  para verificar que coincide tanto el password como el id del usuario
    $result =  $conn->query($sql);
    if (!$result) {
                 trigger_error('Invalid query: ' . $conn->error);// dispparador para indicar errores detallados en el servidor
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






    function readInstructor($documento){
        global $conn;
        $sql = "SELECT * FROM Instructor WHERE ID_Inst='".$documento."'";
        //Consulta para verificar que coinsiden los datos del instructor en este caso la identificación.
        $result = $conn->query($sql);
        if (!$result) {
            trigger_error('Invalid query: ' . $conn->error);// dispparador para indicar errores detallados en el servidor
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

    
      function readAprendiz($ficha){
        global $conn;
        $sql = "SELECT * FROM Aprendiz WHERE Cod_F='".$ficha."'";
        //Consulta para verificar que coinsiden los datos del instructor en este caso la identificación.
        $result = $conn->query($sql);
        if (!$result) {
            trigger_error('Invalid query: ' . $conn->error);// dispparador para indicar errores detallados en el servidor
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

    function readcoor($documento, $password){
        global $conn;
        $sql = "SELECT * FROM Coordinador WHERE ID_Coor='".$documento."' AND Contra_Coor='".$password."'";
        //consulta  para verificar que coincide tanto el password como el id del usuario
        $result =  $conn->query($sql);
        if (!$result) {
                     trigger_error('Invalid query: ' . $conn->error);// dispparador para indicar errores detallados en el servidor
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






?>
