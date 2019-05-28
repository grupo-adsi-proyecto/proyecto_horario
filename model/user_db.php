<?php


 //create
 require '../conection.php';

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




//lectura

function readUser($documento, $password, $rol){

    global $conn;

    if(!$conn){
       die("conexion fallida:" .mysqli_connect_error());
    }
/*
    $ficha=$_POST['ficha'];
    $documento= $_POST['documento'];
    $password=$_POST['password'];
    $rol=$_POST['rol'];

   //aqui conexion a base de datos etc...
  if (isset($_POST['verificar'] and $_POST['id'] null!= "")){
  //vemos si apreto verificar y consultamos si el datos esta.
 
 $sql = mysql_query("SELECT * FROM users WHERE id = '$_POST[id]'");

 while ($dato = mysql_fetch_array($sql)){

 //de estar el dato lo guaramos en las variables
 $id = $dato[id];
 $nombre = $dato[nombre];
 }

 }
 echo "leer";

 mysqli_close($conn); 
*/
}



?>
