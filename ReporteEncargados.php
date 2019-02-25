<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	include 'conexion.php';
	require 'fpdf/fpdf.php';

	class PDF extends FPDF
	{
		function Header()
		{
			$fechaactual = date('d-m-y');
			$this->Image('c.png', 10, 10, 15 );
			$this->SetFont('Arial','B',15);
			$this->Cell(260,17,'Fecha: '.$fechaactual,0,0,'R');
			$this->Ln(3);
			$this->Cell(90);
			$this->Cell(90,10, 'Reporte Encargados',1,0,'C');
			$this->Ln(20);
		}

		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}
	}

	$pdf = new PDF('L');
	$pdf->AliasNbPages();
	$pdf->AddPage();

	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(10,6,'ID',1,0,'C',1);
	$pdf->Cell(50,6,'Nombre',1,0,'C',1);
	$pdf->Cell(30,6,'Celular',1,0,'C',1);
  $pdf->Cell(40,6,'E-Mail',1,0,'C',1);
	$pdf->Cell(40,6,utf8_decode('Dirección'),1,0,'C',1);
	$pdf->Cell(40,6,'Colonia',1,0,'C',1);
	$pdf->Cell(40,6,'Ciudad',1,0,'C',1);
	$pdf->Cell(20,6,'CP',1,1,'C',1);


	$pdf->SetFont('Arial','',10);

	$R=mysqli_query($db,"SELECT * FROM `encargados`");
	while($row=mysqli_fetch_array($R))
	{
		$pdf->Cell(10,6,utf8_decode($row['idEncargado']),1,0,'C');
		$pdf->Cell(50,6,$row['Nombre'],1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['cel']),1,0,'C');
    $pdf->Cell(40,6,utf8_decode($row['eMail']),1,0,'C');
		$pdf->Cell(40,6,utf8_decode($row['direccion']),1,0,'C');
		$pdf->Cell(40,6,utf8_decode($row['colonia']),1,0,'C');
		$pdf->Cell(40,6,utf8_decode($row['ciudad']),1,0,'C');
		$pdf->Cell(20,6,utf8_decode($row['cp']),1,1,'C');

	}
	$pdf->Output();}else{
		header("Location: index.php");
	}
?>
