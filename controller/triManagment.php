<?php
 require "../model/trimestre_db.php";


    
if(isset($_POST['Cod_T'])&& isset($_POST['Trimestre']) && isset($_POST['Fechai']) && isset($_POST['Fechaf'])){
$Cod_T=$_POST['Cod_T'];
$Trimestre=$_POST['Trimestre'];
$Fechai=$_POST['Fechai'];
$Fechaf=$_POST['Fechaf'];
   
 $result = createTrimestre($Cod_T,$Trimestre,$Fechai, $Fechaf);
          if ($result==true){
            $mensaje="Trimestre guardado con exito";
            header('Location: ../views2/ingreso_trimestre.php?mensaje_tri='.$mensaje);  
                        
          }else{
            $error="Error: Revisar datos ingresados";  
            header('Location: ../views2/ingreso_trimestre.php?error_tri='.$error);
              
          }
}


?>
    
