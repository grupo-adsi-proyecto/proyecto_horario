<?php

 require "../model/dias_db.php";


    
if(isset($_POST['Cod_D']) && isset($_POST['Nom_D'])){
$Cod_D=$_POST['Cod_D'];
$Nom_D=$_POST['Nom_D'];


        
 $result = createDia($Cod_D, $Nom_D);
          if ($result==true){
            $mensaje="Dia guardado con exito";
            header('Location: ../views2/ingreso_dia.php?mensaje_dia='.$mensaje);  
            
            
            
          }else{
            $error="Error: Revisar datos ingresados";  
            header('Location: ../views2/ingreso_dia.php?error_dia='.$error);
              
          }
        }




    























<!-- /*else if(gettype($lista_usurios)=="string"){
           
        if(strcmp($lista_usurios, "vacio") == 0){
            //No hay registros en la consulta
            $error="los dotos no conisiden, vuelva a intentarlo o consulte con su administrador";
            
            header('Location: ../views/signup.php?ERROR='.$error);           
        }
    }else{
             
        session_start();

        $_SESSION['ADMIN']=true;
        //accedemos a la primera posicion del primer registro del listado del administrador
        $_SESSION['id'] = $lista_usurios->fetch_assoc()["ID_Ad"];
        // de finiendo el rol
        $_SESSION['rol'] = "administrador";
     

        //redireccionar a la pagina del administrador
        header('Location: ../views/Admin.php');

    }


 }//else if($rol==2){ //Rol de coordinador

    //$passwCrypt = md5($passw);

    //$lista_usurios = readcoor($documento, $passwCrypt);//$passwCrypt
//202cb962ac59075b964b07152d234b70
   /* if($lista_usurios==false){
        echo "error en el servidor";

    }else if(gettype($lista_usurios)=="string"){
           
        if(strcmp($lista_usurios, "vacio") == 0){
            //No hay registros en la consulta
            $error="los dotos no conisiden, vuelva a intentarlo o consulte con su administrador";
            
            header('Location: ../views/signup.php?ERROR='.$error);           
        }
    }else{          
        session_start();
        $_SESSION['COOR']=true;
        //accedemos a la primera posicion del primer registro del listado del administrador
        $_SESSION['id'] = $lista_usurios->fetch_assoc()["ID_Coor"];
        // de finiendo el rol
        $_SESSION['rol'] = "coordinador";
        //redireccionar a la pagina del administrador
        header('Location: ../views/coordinador.php');//agregar get
    }
  



 }else if($rol==3){ //Rol de instructor
    //$passwCrypt = md5($documento);
    $lista_Instructor = readInstructor($documento);//$passwCrypt
    if($lista_Instructor==false){
        echo "error en el servidor";
    }else if(gettype($lista_Instructor)=="string"){           
        if(strcmp($lista_Instructor, "vacio") == 0){
            //No hay registros en la consulta
            $error="los dotos no conisiden, vuelva a intentarlo o comuniquese con su administrador";
            //iniciar nuevamente
            header('Location: ../views/signup.php?ERROR='.$error);           
        }
    }else{           
        session_start();
        $_SESSION['INSTRUC']=true;
        //accedemos a la primera posicion del primer registro del listado del administrador
        $_SESSION['id'] = $lista_Instructor->fetch_assoc()["ID_Inst"];
        // de finiendo el rol
        $_SESSION['rol'] = "coordinador";
        //redireccionar a la pagina del administrador
        header('Location: ../views/Instructor.php?documento='.$documento);
    }

    


 }else if($rol==4){ //Rol de aprendiz
    //$passwCrypt = md5($ficha);
    $lista_Aprendiz = readAprendiz($ficha);//$passwCrypt
    if($lista_Aprendiz==false){
        echo "error en el servidor";
    }else if(gettype($lista_Aprendiz)=="string"){           
        if(strcmp($lista_Aprendiz, "vacio") == 0){
            //No hay registros en la consulta
            $error="los datos no conisiden, vuelva a intentarlo o comuniquese con su administrador";
            //iniciar nuevamente
            header('Location: ../views/signup.php?ERROR='.$error);           
        }
    }else{           
        session_start();
        $_SESSION['APRE']=true;
        //accedemos a la primera posicion del primer registro del listado del administrador
        $_SESSION['id'] = $lista_Aprendiz->fetch_assoc()["ID_Apre"];
        // de finiendo el rol
        $_SESSION['rol'] = "Aprendiz";
        //redireccionar a la pagina del administrador
        header('Location: ../views/Aprendiz.php?ficha='.$ficha);
        
    }*/

    
//}-->





