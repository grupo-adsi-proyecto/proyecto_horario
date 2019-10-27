<?php

	//Incluimos librería y archivo de conexión
	require_once dirname(__FILE__) . '/Classes/PHPExcel.php';
	//require 'conexion.php';

	session_start();
     require '../conection.php';
    if(!isset($_SESSION['ADMIN'])){
    header('Location: ../views/signup.php');         
    }

	//Consulta
	//$sql = "SELECT e_Cedu, e_Nom, e_Ape, e_Ema, e_Com, e_Ciu FROM Ejemplo";
	$sql = "SELECT i.ID_Inst,h.ID_Inst,i.Nom_Inst, ID_Hor,Cod_T,Nom_S,a.Cod_Amb,Tipo_Amb,Cod_P,Descrip_P, Cod_F,Nom_D,Nom_J,Hora_I,Hora_F,Cod_RAE,Descrip_RAE
	FROM Instructor i,Ambiente a inner join Sede s,Plantilla_Horario h
	WHERE a.Cod_Amb=h.Cod_Amb AND s.Cod_S=a.Cod_S and i.ID_Inst=222222222 and(i.ID_Inst=h.ID_Inst)";
	$resultado = $conn->query($sql);
	$fila = 7; //Establecemos en que fila inciara a imprimir los datos

	$gdImage = imagecreatefrompng('../assets/img/Sena.png');//Logotipo

	//Objeto de PHPExcel
	$objPHPExcel  = new PHPExcel();

	//Propiedades de Documento
	$objPHPExcel->getProperties()->setCreator("")->setDescription("Reporte de Excel");

	$objDrawing = new PHPExcel_Worksheet_MemoryDrawing();
	$objDrawing->setName('Logotipo');
	$objDrawing->setDescription('Logotipo');
	$objDrawing->setImageResource($gdImage);
	$objDrawing->setRenderingFunction(PHPExcel_Worksheet_MemoryDrawing::RENDERING_PNG);
	$objDrawing->setMimeType(PHPExcel_Worksheet_MemoryDrawing::MIMETYPE_DEFAULT);
	$objDrawing->setHeight(100);
	$objDrawing->setCoordinates('A1');
	$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

	$estiloTituloReporte = array(
    'font' => array(
	'name'      => 'Arial',
	'bold'      => true,
	'italic'    => false,
	'strike'    => false,
	'size' =>13
    ),
    'fill' => array(
	'type'  => PHPExcel_Style_Fill::FILL_SOLID
	),
    'borders' => array(
	'allborders' => array(
	'style' => PHPExcel_Style_Border::BORDER_NONE
	)
    ),
    'alignment' => array(
	'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
	'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER
    )
	);

	$estiloTituloColumnas = array(
    'font' => array(
	'name'  => 'Arial',
	'bold'  => true,
	'size' =>10,
	'color' => array(
	'rgb' => 'FFFFFF'
	)
    ),
    'fill' => array(
	'type' => PHPExcel_Style_Fill::FILL_SOLID,
	'color' => array('rgb' => '538DD5')
    ),
    'borders' => array(
	'allborders' => array(
	'style' => PHPExcel_Style_Border::BORDER_THIN
	)
    ),
    'alignment' =>  array(
	'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
	'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER
    )
	);

	$estiloInformacion = new PHPExcel_Style();
	$estiloInformacion->applyFromArray( array(
    'font' => array(
	'name'  => 'Arial',
	'color' => array(
	'rgb' => '000000'
	)
    ),
    'fill' => array(
	'type'  => PHPExcel_Style_Fill::FILL_SOLID
	),
    'borders' => array(
	'allborders' => array(
	'style' => PHPExcel_Style_Border::BORDER_THIN
	)
    ),
	'alignment' =>  array(
	'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
	'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER
    )
	));

	$objPHPExcel->getActiveSheet()->getStyle('A1:G5')->applyFromArray($estiloTituloReporte);
	$objPHPExcel->getActiveSheet()->getStyle('A6:G6')->applyFromArray($estiloTituloColumnas);


	/*
	$boldArray = array('borders' => array('outline' => array('style' => PHPExcel_Style_Border::BORDER_THIN)));
	$objPHPExcel->getActiveSheet()->getStyle('A6:F6')->applyFromArray($boldArray);

	// Fuente de la primera fila en negrita
	$boldArray = array('font' => array('bold' => true),'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER));
	$objPHPExcel->getActiveSheet()->getStyle('A6:F6')->applyFromArray($boldArray);

	/*
	$boldArray = array('type' => PHPExcel_Style_Fill::FILL_SOLID,'startcolor' => array('rgb' => F28A8C));
	$objPHPExcel->getActiveSheet()->getStyle('A6:F6')->getFill('')->applyFromArray($boldArray);
	*/

	//Establecemos la pestaña activa y nombre a la pestaña
	$objPHPExcel->setActiveSheetIndex(0);
	$objPHPExcel->getActiveSheet()->setTitle("Reportes");

	$objPHPExcel->getActiveSheet()->setCellValue('B3', 'REPORTE ADMINISTRADOR');
	$objPHPExcel->getActiveSheet()->mergeCells('B3:D3');

	$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('A6', 'FICHA');
	$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('B6', 'DIA');
	$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('C6', 'SEDE');
	$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('D6', 'JORNADA');
	$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('E6', 'AMBIENTE');
	$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('F6', 'INSTRUCTOR');
	$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('G6', 'RAE');
	//$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
	//$objPHPExcel->getActiveSheet()->setCellValue('E6', 'TOTAL');

	//Recorremos los resultados de la consulta y los imprimimos
	while($rows = $resultado->fetch_assoc()){

		$objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['Cod_F']);
		$objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['Nom_D']);
		$objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['Nom_S']);
		$objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['Nom_J']);
		$objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['Cod_Amb']);
		$objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['Nom_Inst']);
		$objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $rows['Cod_RAE']);
		//$objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, '=C'.$fila.'*D'.$fila);

		$fila++; //Sumamos 1 para pasar a la siguiente fila
	}

	$fila = $fila-1;

	$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion, "A7:G".$fila);

	//$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);

	header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
	header('Content-Type: application/vnd.ms-excel');
	header('Content-Disposition: attachment;filename="Reporte.xlsx"');
	header('Cache-Control: max-age=0');

	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
	$objWriter->save('php://output');
?>
