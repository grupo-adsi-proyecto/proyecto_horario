<?php

require "../conection.php";

$sql = mysqli_query($conn, "SELECT * FROM dias;");
echo "<option value='0'> Seleccionar Dia </option>";
while ($a=mysqli_fetch_array($sql)) {
  echo "<option value='".$a['Cod_D']."'> ".$a['Nom_D']." </option>";
}
?>
