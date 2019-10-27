<?php


session_start();
$_SESSION=[];
session_destroy();

 //redireccionar a la pagina de login
 header('Location: ../views/signup.php');      

?>