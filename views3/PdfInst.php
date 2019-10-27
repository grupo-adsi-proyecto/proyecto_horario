<?php

session_start();
require '../conection.php';
if(!isset($_SESSION['INSTRUC'])){
  header('Location: ../views/signup.php');         
}
$variable3=$_SESSION['variable2'];
?>

<?php

	require 'fpdf/fpdf.php';

	class PDF extends FPDF
	{
		function Header()
		{
			$this->Image('../assets/img/Sena.png', 5, 10, 35 );
			$this->SetFont('Arial','B',15);
			$this->Cell(250,25, 'Reporte Instructor',0,0,'C');
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
	$query = "SELECT i.ID_Inst,h.ID_Inst,i.Nom_Inst, ID_Hor,Cod_T,Nom_S,a.Cod_Amb,Tipo_Amb,Cod_P,Descrip_P, Cod_F,Nom_D,Nom_J,Hora_I,Hora_F,Cod_RAE,Descrip_RAE
	FROM Instructor i,Ambiente a inner join Sede s,Plantilla_Horario h
	WHERE a.Cod_Amb=h.Cod_Amb AND s.Cod_S=a.Cod_S and i.ID_Inst='$variable3' and(i.ID_Inst=h.ID_Inst)";
	$resultado = $conn->query($query);

	$pdf = new PDF('L');
	$pdf->AliasNbPages();
	$pdf->AddPage();

	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(25,7,'FICHA',1,0,'C',1);
	$pdf->Cell(35,7,'PROGRAMA',1,0,'C',1);
	$pdf->Cell(25,7,'DIA',1,0,'C',1);
	$pdf->Cell(30,7,'SEDE',1,0,'C',1);
	$pdf->Cell(30,7,'AMBIENTE',1,0,'C',1);
	$pdf->Cell(30,7,'HORA INICIO',1,0,'C',1);
	$pdf->Cell(30,7,'HORA FIN',1,0,'C',1);
	$pdf->Cell(55,7,'RAE',1,1,'C',1);
	//$pdf->SetXY(15,15);

	$pdf->SetFont('Arial','',10);

	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(25,7,utf8_decode($row['Cod_F']),1,0,'C');
		$pdf->Cell(35,7,utf8_decode($row['Cod_P']),1,0,'C');
		$pdf->Cell(25,7,utf8_decode($row['Nom_D']),1,0,'C');
		$pdf->Cell(30,7,utf8_decode($row['Nom_S']),1,0,'C');
		$pdf->Cell(30,7,utf8_decode($row['Cod_Amb']),1,0,'C');
		$pdf->Cell(30,7,utf8_decode($row['Hora_I']),1,0,'C');
		$pdf->Cell(30,7,utf8_decode($row['Hora_F']),1,0,'C');
		$pdf->Cell(55,7,utf8_decode($row['Cod_RAE']),1,1,'C');
		//$pdf->Cell(20,6,$row['id_municipio'],1,0,'C');
	}
	$pdf->Output('D');//Guardar en
	//$pdf->Output('F','Reporte.pdf');
	//$pdf->Output();//Abrir en el navegador
?>
