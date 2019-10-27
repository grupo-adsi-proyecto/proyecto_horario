<?php
require "../conection.php";

$sql = mysqli_query($conn, "SELECT * FROM competencia ;");
echo "<option value='0'> Seleccionar Competencia </option>";
while ($e=mysqli_fetch_array($sql)) {
  echo "<option value='".$e['Cod_C']."'> ".$e['Nom_C']." </option>";
}
?>
