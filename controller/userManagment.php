
<?php


$ficha=$_POST['ficha'];
$documento=$_POST['documento'];
$passw=$_POST['passw'];
$rol=$_POST['rol'];



require "../model/user_db.php";

foreach (array_keys($_POST) as $value ){
    echo $value;
    echo '  --- ';
}



//Rol de adminstrador
//
if($rol==1){

    $passwCrypt = md5($passw);

    $lista_usurios = readAdmin($documento, $passwCrypt);

    if($lista_usurios==false){
        echo "error en el servidor";

    }else if(gettype($lista_usurios)=="string"){
           
        if(strcmp($lista_usurios, "vacio") == 0){
            //No hay registros en la consulta
            $error="los dotos no conisiden, vuelva a intentarlo o consulte con su administrador";
            
            header('Location: ../views/signup.php?ERROR='.$error);         
            
        }
    }else{
             
        session_start();

        $_SESSION['IS_SESSION']=true;
        //accedemos a la primera posicion del primer registro del listado del administrador
        $_SESSION['id'] = $lista_usurios->fetch_assoc()["ID_Ad"];
        // de finiendo el rol
        $_SESSION['rol'] = "administrador";
        
        //redireccionar a la pagina del administrador
        header('Location: ../views/admin.php');

    }


 }else if($rol==2){ //Rol de coordinador



 }else if($rol==3){ //Rol de instructor
    
 }else if($rol==4){ //Rol de aprendiz
    
}





?>