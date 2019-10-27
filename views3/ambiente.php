
<?php
require "../conection.php";
$Cod_S=$_POST['sede'];
$sql = mysqli_query($conn, "SELECT * FROM ambiente WHERE Cod_S={$Cod_S};");
echo "<option value='0'> Seleccionar ambiente </option>";
while ($c=mysqli_fetch_array($sql)) {
  echo "<option value='".$c['Cod_Amb']."'> ".$c['Nom_Amb']." - ".$c['Tipo_Amb']." - ".$c['Localizacion']."</option>";
}
?>
