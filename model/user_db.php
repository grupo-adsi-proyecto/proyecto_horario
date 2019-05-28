<?php


 //create
 require '../conection.php';

 function createUser($rol, $documento, $passw){

 global $conn;

 
 $insertar ="INSERT INTO users (rol,Documento,passw) values ('$rol','$documento','$passw')";


 
 //sin comillas dobles 
 //LA INSERCION ES EN MAYUSCULA

$datos = mysqli_query($conn,$insertar);
if (!$datos){
	echo'Error al registrarse';
}else{
	echo "listo";	
	exit;
}


}




//lectura

function readUser($documento, $password, $rol){

    /*global $conn;

    if(!$conn){
       die("conexion fallida:" .mysqli_connect_error());
    }

    $ficha=$_POST['ficha'];
    $documento= $_POST['documento'];
    $password=$_POST['password'];
    $rol=$_POST['rol'];

   //aqui conexion a base de datos etc...
  if (isset($_POST[verificar] && $_POST[id]null!= "")){
  //vemos si apreto verificar y consultamos si el datos esta.
 
 $sql = mysql_query("SELECT * FROM users WHERE id = '$_POST[id]'");

 while ($dato = mysql_fetch_array($sql)){

 //de estar el dato lo guaramos en las variables
 $id = $dato[id];
 $nombre = $dato[nombre];
 }

 }*/
 echo "leer";
}

mysqli_close($conn); 


?>
