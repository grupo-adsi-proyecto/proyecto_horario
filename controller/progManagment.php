<?php
   require "../model/programas_db.php";
   require '../model/competencia_db.php';


if(isset($_POST['Cod_P']) && isset($_POST['Descrip_P'])&& isset($_POST['Duracion'])&& isset($_POST['Mod_Form'])&& isset($_POST['Version'])){
$Cod_P=$_POST['Cod_P'];
$Descrip_P=$_POST['Descrip_P'];
$Duracion=$_POST['Duracion'];
$Mod_Form=$_POST['Mod_Form'];// "select option"
$Version=$_POST['Version'];

        
 $result = createPrograma($Cod_P,$Descrip_P,$Duracion,$Mod_Form, $Version);
          if ($result==true){
            $mensaje="Programa guardado con exito";
            header('Location: ../views2/ingreso_programa.php?mensaje_pro='.$mensaje);  
            
            
            
          }else{
            $error="Error: Revisar datos ingresados";  
            header('Location: ../views2/ingreso_programa.php?error_pro='.$error);
              
          }
        }



  
    



    

    