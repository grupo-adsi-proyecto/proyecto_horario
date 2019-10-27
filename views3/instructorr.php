<?php
require "../conection.php";

$sql = mysqli_query($conn, "SELECT * FROM instructor;");
echo "<option value='0'> Seleccionar Instructor </option>";
while ($g=mysqli_fetch_array($sql)) {
  echo "<option value='".$g['ID_Inst']."'> ".$g['Nom_Inst']." </option>";
}
?>
