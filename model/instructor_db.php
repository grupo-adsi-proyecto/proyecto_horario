<?php
require '../conection.php';
//Create
//de programa
 function createInstructor($ID_Inst,$Nom_Inst,$Tel_Inst,$Email_Inst, $Direc_Inst,$Estado_Ist,$Hora_A){
 global $conn;
 $inst1 = "INSERT  INTO Instructor (ID_Inst,Nom_Inst,Tel_Inst,Email_Inst,Direc_Inst,Estado_Ist,Hora_A) VALUES ('$ID_Inst','$Nom_Inst','$Tel_Inst','$Email_Inst','$Direc_Inst','$Estado_Ist','$Hora_A')";


if ($conn->query($inst1) == TRUE) {
   return true;
}else{
    trigger_error('Invalid query: ' . $conn->error);
   return false;
}
}

function readAllInstH($inst1){
    global $conn;
    $sql = "SELECT i.ID_Inst,h.ID_Inst,i.Nom_Inst, ID_Hor,Cod_T,Nom_S,a.Cod_Amb,Tipo_Amb,Cod_P,Descrip_P, Cod_F,Nom_D,Nom_J,Hora_I,Hora_F,Cod_RAE,Descrip_RAE
       FROM Instructor i,Ambiente a inner join Sede s,Plantilla_Horario h
        WHERE a.Cod_Amb=h.Cod_Amb AND s.Cod_S=a.Cod_S and i.ID_Inst=".$inst1." and(i.ID_Inst=h.ID_Inst)";
    //Consulta para verificar que coinsiden los datos del instructor en este caso la identificación.
    $result = $conn->query($sql);
    if (!$result) {
        trigger_error('Invalid query: '.$conn->error);// dispparador para indicar errores detallados en el servidor
         return false;
    }else if ($result->num_rows > 0) {
    // Datos de entrada de cada fila en ciclo while 
    return $result;
    /*while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - documento: " . $row["documento"]. " " . $row["password"]. "<br>";
    }*/
     } else {
     return "vacio";
         }
   $conn->close();
}

