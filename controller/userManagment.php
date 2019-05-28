
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

    $lista_usurios = createUser($documento, $passw);

    if($lista_usurios==false){
        echo "error en el servidor";

    }else if(gettype($lista_usurios)=="string"){

        
           
        if(strcmp($lista_usurios, "vacio") == 0){
            //No hay registros en la consulta
            //$_POST['ERROR']="los dotos no conisiden, vuelva a intentarlo o consulte con su administrador"
            //header('Location: ../views/signup.php');
            echo "jas";
            echo $solucion;
            //header('Location: ../views/admin.php');
            header('Location: ../views/admin.php');
            


        }
    }else{
             


        /* while($row = $lista_usurios->fetch_assoc()) {
                echo "id: " . $row["id"]. " - documento: " . $row["documento"]. " " . $row["password"]. "<br>";
            }*/

        //redireccionar a la pagina del administrador

        header('Location: ../views/admin.php');


    }


 }else if($rol==2){ //Rol de coordinador

 }else if($rol==3){ //Rol de instructor
    
 }else if($rol==4){ //Rol de aprendiz
    
}





?>