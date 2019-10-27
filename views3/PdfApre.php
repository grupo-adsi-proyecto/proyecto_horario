<?php
     //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	$mysqli = new mysqli("localhost","root","","db82");

	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>

<?php

	require 'fpdf/fpdf.php';

	class PDF extends FPDF
	{
		function Header()
		{
			$this->Image('imagenes/Sena.png', 5, 10, 35 );
			$this->SetFont('Arial','B',15);
			$this->Cell(250,25, 'Reporte Aprendiz',0,0,'C');
			$this->Ln(30);
		}

		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			//$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
			$this->MultiCell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}
	}

	//include 'plantilla.php';
	//require 'conexion.php';

	//$query = "SELECT e.estado, m.id_municipio, m.municipio FROM t_municipio AS m INNER JOIN t_estado AS e ON m.id_estado=e.id_estado";
	$query = "SELECT Cod_D,Nom_D,ID_Hor, Nom_Inst, ID_Inst, Cod_Amb, Cod_RAE,Descrip_RAE, Cod_F, Hora_I,Hora_F,Cod_T,Nom_J, Nom_S FROM Plantilla_Horario H, Sede where H.Cod_F=(SELECT Cod_F from Aprendiz A where A.Cod_F=1563487) ORDER BY Cod_D ASC";
	$resultado = $mysqli->query($query);

	$pdf = new PDF('L');
	$pdf->AliasNbPages();
	$pdf->AddPage();

	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(30,7,'TRIMESTRE',1,0,'C',1);
	$pdf->Cell(25,7,'DIA',1,0,'C',1);
	$pdf->Cell(20,7,'SEDE',1,0,'C',1);
	$pdf->Cell(25,7,'JORNADA',1,0,'C',1);
	$pdf->Cell(25,7,'AMBIENTE',1,0,'C',1);
	$pdf->Cell(30,7,'HORA INICIO',1,0,'C',1);
	$pdf->Cell(30,7,'HORA FIN',1,0,'C',1);
	$pdf->Cell(50,7,'RAE',1,0,'C',1);
	$pdf->Cell(40,7,'INSTRUCTOR',1,1,'C',1);
	//$pdf->SetY(50);

	$pdf->SetFont('Arial','',10);

	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(30,7,utf8_decode($row['Cod_T']),1,0,'C');
		$pdf->Cell(25,7,utf8_decode($row['Nom_D']),1,0,'C');
		$pdf->Cell(20,7,utf8_decode($row['Nom_S']),1,0,'C');
		$pdf->Cell(25,7,utf8_decode($row['Nom_J']),1,0,'C');
		$pdf->Cell(25,7,utf8_decode($row['Cod_Amb']),1,0,'C');
		$pdf->Cell(30,7,utf8_decode($row['Hora_I']),1,0,'C');
		$pdf->Cell(30,7,utf8_decode($row['Hora_F']),1,0,'C');
		$pdf->Cell(50,7,utf8_decode($row['Cod_RAE']),1,0,'C');
		$pdf->Cell(40,7,utf8_decode($row['Nom_Inst']),1,1,'C');
		//$pdf->Cell(20,6,$row['id_municipio'],1,0,'C');
	}
	$pdf->Output('D');//Guardar en
	//$pdf->Output('F','Reporte.pdf');
	//$pdf->Output();//Abrir en el navegador
?>
