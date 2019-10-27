<?php
   require "../model/Phorario_db.php";

if (isset($_POST['numficha'])){
  //$opcion = $_GET['opcion'];
  $ficha1=$_POST['numficha'];

  //echo $opcion; 
}



        
 $result = readAllPhora($ficha1);
          if ($result==true){
            $mensaje="Programa guardado con exito";
            header('Location: ../views2/ingreso_programa.php?mensaje_pro='.$mensaje);  
            
            
            
          }else{
            $error="Error: Revisar datos ingresados";  
            header('Location: ../views2/ingreso_programa.php?error_pro='.$error);
              
          }
        }
?>

    



    

    