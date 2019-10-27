<?php
require '../model/programas_db.php';
require '../model/competencia_db.php';

//------------------------------------------

 /** Elimina una sede */
 if(isset($_GET['DELETE']) && isset($_GET['Cod_C'])){

    $result =  deleteSede($_GET['Cod_C']);

    if ($result==true){
      $mensaje="Competencia eliminada con exito";
      header('Location: ../views2/competencia.php?mensaje_competencia_delete='.$mensaje);
    }else{
      $error="Error: El elemento no puede ser eliminado";
      header('Location: ../views2/competencia.php?error_competencia_delete='.$error);
    }

 }

//INSERTAR

if (isset($_POST['codigo']) &&  isset($_POST['estado']) && isset($_POST['programa']) && isset($_POST['nombre'])) { // insertar  de los campos   de las diferentes  regisro de la base de datos
    $codigo = $_POST['codigo'];
    $estado = $_POST['estado'];
    $programa = $_POST['programa'];
    $nombre = $_POST['nombre'];

    $resul=createCompetencia($codigo, $estado, $programa, $nombre);
    if ($result==true){
        $mensaje="Competencia guardada con exito";
        header('Location: ../views2/competencia.php?mensaje_competencia='.$mensaje);
        

    }else{
        $error="Error: Revisar datos ingresados";  
        header('Location: ../views2/competencia.php?error_competencia='.$error);
          
      }
    
}
function getCompetencias(){

    $listado_comp = readAllCompetencias();
    if ($listado_comp == false) {
        echo "error en el servidor";
    } else if (gettype($listado_comp) == "string") {
        if (strcmp($listado_comp, "vacio") == 0) {
            //No hay registros en la consulta
            $error = "los datos no conisiden, vuelva a intentarlo o comuniquese con su administrador";
            //iniciar nuevamente
            //header('Location: ../views/signup.php?ERROR='.$error);           
        }
    } else {
        return $listado_comp;
    }
   
}



function getProgramasForCompetencia()
{

    $lista_programas = readAllProgramas();

    if ($lista_programas == false) {
        echo "error en el servidor";
    } else if (gettype($lista_programas) == "string") {
        if (strcmp($lista_programas, "vacio") == 0) {
            //No hay registros en la consulta
            $error = "los datos no conisiden, vuelva a intentarlo o comuniquese con su administrador";
            //iniciar nuevamente
            //header('Location: ../views/signup.php?ERROR='.$error);           
        }
    } else {
        return $lista_programas;
    }
}


        

/** Consulta todas las competencias */

