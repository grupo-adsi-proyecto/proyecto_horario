<?php
   require "../model/instructor_db.php";


if(isset($_POST['ID_Inst']) && isset($_POST['Nom_Inst'])&& isset($_POST['Tel_Inst'])&& isset($_POST['Email_Inst'])&& isset($_POST['Direc_Inst']) && isset($_POST['Estado_Ist']) && isset($_POST['Hora_A'])){
$ID_Inst=$_POST['ID_Inst'];
$Nom_Inst=$_POST['Nom_Inst'];
$Tel_Inst=$_POST['Tel_Inst'];
$Email_Inst=$_POST['Email_Inst'];// "select option"
$Direc_Inst=$_POST['Direc_Inst'];
$Estado_Ist=$_POST['Estado_Ist'];
$Hora_A=$_POST['Hora_A'];



        
 $result = createInstructor($ID_Inst,$Nom_Inst,$Tel_Inst,$Email_Inst, $Direc_Inst,$Estado_Ist,$Hora_A);
          if ($result==true){
            $mensaje="Programa guardado con exito";
            header('Location: ../views2/ingreso_instructor.php?mensaje_instructor='.$mensaje);  
            
            
            
          }else{
            $error="Error: Revisar datos ingresados";  
            header('Location: ../views2/ingreso_programa.php?error_instructor='.$error);
              
          }
        }
?>