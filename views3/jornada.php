<?php
require "../conection.php";
$sql = mysqli_query($conn, "SELECT * FROM jornada;");
echo "<option value='0'> Seleccionar Jornada </option>";
while ($b=mysqli_fetch_array($sql)) {
  echo "<option value='".$b['Cod_J']."'> ".$b['Nom_J']." </option>";
}
?>
