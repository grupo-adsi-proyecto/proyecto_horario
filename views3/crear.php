<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

	<title>Horarios</title>
	<!--Diseño y estilos con bootstrap y script-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	
	<script src="../assets/js/jquery.js" charset="utf-8"></script>
	<script src="../assets/js/functioncompetencia-rae.js" charset="utf-8"></script>
	<script src="../assets/js/functiondia.js" charset="utf-8"></script>
	<script src="../assets/js/functioninstructor.js" charset="utf-8"></script>
	<script src="../assets/js/functionjornada.js" charset="utf-8"></script>
	<script src="../assets/js/functionsede-ambiente.js" charset="utf-8"></script>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="jquery.calendar.js"></script>
    
     
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

  <!--menuvertical-->
  <link rel="stylesheet" type="text/css" href="../assets/css/easy-responsive-tabs.css " />
    <script src="../assets/js/jquery-1.9.1.min.js"></script>
    <script src="../assets/js/easyResponsiveTabs.js"></script>
    <script src="../assets/js/texto.js"></script>

	<meta charset="utf-8">

	<script>
		$(function(){
				//Clona la fila oculta que tiene los campos base, y la agrega al final de la tabla
				$("#adicional").on('click', function(){
					$("#tabla tbody tr:eq(0)").clone().removeClass('fila-fija').appendTo("#tabla");
				});
				// Evento que selecciona la fila y la elimina
				$(document).on("click",".eliminar",function(){
					var parent = $(this).parents().get(0);
					$(parent).remove();
				});
			});
	</script>
</head>


<body>
<div class="jumbotron" style="background-image: url(../assets/img/fondo.PNG); background-size: 100%;width: 100%;height:1050px;"><BR><BR><BR><BR><BR><BR><BR><BR>


<div class="col text-right center">
  <button  class="btn btn-success" name="Mas" value ="Modificar"><a href="../controller/logOutController.php">Cerrar sesión</a></button>
</div>
<!-- Full Page Intro -->
<div 



 style="position: relative; z-index: 100;width:1560px">
  
   <div style="width:1000px;height:150;"><div style="	background-color: #238276; position:absolute; z-index:-2; top:0; left:0; right: 0; bottom:0; opacity:0.9;"></div>
	<h1 style="color:29E09C;" align="center">Horario</h1>
	<section>
		<form method="post"  >
			<table align="center" border="4" bordercolor="green" cellpadding="5" cellspacing="10" style="max-width: 30%;">
		<tr>
			<th bgcolor="29E09C">Dia</th>
			<th bgcolor="29E09C">Jornada</th>
			<th bgcolor="29E09C">Hora Inicio</th>
			<th bgcolor="29E09C">Hora Fin</th>
			<th bgcolor="29E09C">Sede</th>
			<th bgcolor="29E09C">Ambiente</th>
			<th bgcolor="29E09C"> Competencia</th>
			<th  bgcolor="29E09C">Resultado de Aprendizaje</th>
			<th bgcolor="29E09C">Instructor</th>
		</tr>
		<tr>
			<td>
			

				<select name="dia[]" id="DIA" required>
					<option value="">Seleccionar dia</option>(color verde)
				</select>
			</td>
			<td>
				<select name="jornada[]" id="JORNADA" required>
					<option value="">Seleccionar jornada</option>(color verde)
				</select>
			</td>
			<td><input style="max-width: 60px;" type="text" id="hi" name="hi[]" placeholders="Hora Inicio"/></td>

			<td><input style="max-width: 60px;" type="text" id="hf" name="hf[]" placeholders="Hora Fin"/></td>

			<td>
				<select name="sede[]" id="SEDE" required>
					<option value="" type="color" value="#ff0000">Seleccionar sede</option>(color verde)
				</select>
			</td>
			<td>
				<select name="ambiente[]" id="AMBIENTE" required>
					<option value="">Seleccionar ambiente</option>(color verde)
				</select>
			</td>
			<td>
				<select style="max-width: 300px;" name="competencia[]" id="COMPETENCIA" required>
					<option value="">Seleccionar competencia</option>(color verde)
				</select>
			</td>
			<td>
				<select style="max-width: 300px;" name="rae[]" id="RAE" required>
					<option value="">Seleccionar rae</option>(color verde)
				</select>
			</td>
			<td>
				<select name="instructor[]" id="INSTRUCTOR" required>
					<option value="">Seleccionar instructor</option>(color verde)
				</select>
			</td>
			<td class="eliminar">
				<input type="button" value="-"/>
			</td>
		</tr>
		<div class="btn-der">

			<td align="center" rowspan="1">
				<input type="button" name="Enviar" value ="Enviar">
			</td>
			<td>
				<input type="button" name="insertar" value="Insertar" class="btn btn-info;"/>
				<button id="adicional" type="button" name="adicional" class="btn btn-warning"/>+</button>
			</td>

			<td align="center" rowspan="1">
			</button><input type="button" class="btn btn-success btn-lg btn-block" name="Mas" value ="Modificar"></button>
			</td>
		</div>

		</table>
	</form>
	</div>
</body>

	<?php
	if(isset($_POST['insertar'])){
		$items1 = ($_POST['dia']);
		$items2 = ($_POST['jornada']);
		$items3 = ($_POST['hi']);
		$items4 = ($_POST['hf']);
		$items5 = ($_POST['sede']);
		$items6 = ($_POST['ambiente']);
		$items7 = ($_POST['competencia']);
		$items8 = ($_POST['rae']);
		$items9 = ($_POST['instructor']);

		while(true) {

			//// RECUPERAR LOS VALORES DE LOS ARREGLOS ////////
			$item1 = current($items1);
			$item2 = current($items2);
			$item3 = current($items3);
			$item4 = current($items4);
			$item5 = current($items5);
			$item6 = current($items6);
			$item7 = current($items7);
			$item8 = current($items8);
			$item9 = current($items9);

			////// ASIGNARLOS A VARIABLES ///////////////////
			$dia=(( $item1 !== false) ? $item1 : ", &nbsp;");
			$jornada=(( $item2 !== false) ? $item2 : ", &nbsp;");
			$hi=(( $item3 !== false) ? $item3 : ", &nbsp;");
			$hf=(( $item4 !== false) ? $item4 : ", &nbsp;");
			$sede=(( $item5 !== false) ? $item5 : ", &nbsp;");
			$ambiente=(( $item6 !== false) ? $item6 : ", &nbsp;");
			$competencia=(( $item7 !== false) ? $item7 : ", &nbsp;");
			$rae=(( $item8 !== false) ? $item8 : ", &nbsp;");
			$instructor=(( $item9 !== false) ? $item9 : ", &nbsp;");

			//// CONCATENAR LOS VALORES EN ORDEN PARA SU FUTURA INSERCIÓN ////////
			$valores='("'.$dia.'","'.$jornada.'","'.$hi.'","'.$hf.'","'.$sede.'","'.$ambiente.'","'.$competencia.'","'.$rae.'","'.$instructor.'"),';

			//////// YA QUE TERMINA CON COMA CADA FILA, SE RESTA CON LA FUNCIÓN SUBSTR EN LA ULTIMA FILA /////////////////////
			$valoresQ= substr($valores, 0, -1);

			///////// QUERY DE INSERCIÓN ////////////////////////////
			$sql = "INSERT INTO plantilla_horario (Nom_D, Nom_J, Hora_I, Hora_F, Nom_S, Direc_S, Nom_C, Descrip_RAE, Nom_Inst) VALUES $valoresQ";

			$sqlRes=$conexion->query($sql) or mysql_error();

			// Up! Next Value
			$item1 = next( $items1 );
			$item2 = next( $items2 );
			$item3 = next( $items3 );
			$item4 = next( $items4 );
			$item5 = next( $items5 );
			$item6 = next( $items6 );
			$item7 = next( $items7 );
			$item8 = next( $items8 );
			$item9 = next( $items9 );

			// Check terminator
			if($item1 === false && $item2 === false && $item3 === false && $item4 === false && $item5 === false && $item6 === false && $item7 === false && $item8 === false && $item9 === false) break;
		}
	}
	?>

</section>

</body>
</html>
