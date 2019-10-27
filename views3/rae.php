<?php

require "../conection.php";
$comp = $_POST['competencia'];
print_r("andres se durmio");
print_r($competencia);
echo $competencia;
$sql = mysqli_query($conn, "SELECT * FROM resultados_de_aprendizaje  WHERE Cod_C ={$comp};");
echo "<option value='0'> Seleccionar RAE {$competencia} </option>";
while ($f=mysqli_fetch_array($sql)) {
  echo "<option value='".$f['Cod_RAE']."'> ".$f['Descrip_RAE']." </option>";
}
?>
