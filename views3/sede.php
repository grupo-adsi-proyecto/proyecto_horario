<?php
require "../conection.php";

$sql = mysqli_query($conn, "SELECT * FROM sede;");
echo "<option value='0'> Seleccionar Sede </option>";
while ($c=mysqli_fetch_array($sql)) {
  echo "<option value='".$c['Cod_S']."'> ".$c['Nom_S']." - ".$c['Direc_S']." </option>";
}
?>
