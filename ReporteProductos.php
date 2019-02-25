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
			$this->Cell(190,17,'Fecha: '.$fechaactual,0,0,'R');
			$this->Ln(3);
			$this->Cell(70);
			$this->Cell(50,10, 'Reporte Productos',1,0,'C');

			$this->Ln(20);
		}

		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
		}
	}

	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(10,6,'ID',1,0,'C',1);
	$pdf->Cell(70,6,utf8_decode('Descripción'),1,0,'C',1);
  $pdf->Cell(40,6,utf8_decode('Tipo'),1,0,'C',1);
  $pdf->Cell(30,6,utf8_decode('Costo'),1,0,'C',1);
	$pdf->Cell(40,6,'Unidad de Medida',1,1,'C',1);
	$pdf->SetFont('Arial','',10);

	$R=mysqli_query($db,"SELECT `idProducto`, `tipoproducto`.`descripcion`, `productos`.`descripcion`, `costo`, `unidadMedida` FROM `productos` inner join `tipoproducto` on `tipoproducto`.`idTipoProd`=`productos`.`idTipoProd`");
	while($row=mysqli_fetch_array($R))
	{
		$pdf->Cell(10,6,utf8_decode($row[0]),1,0,'C');
		$pdf->Cell(70,6,utf8_decode($row[2]),1,0,'C');
		$pdf->Cell(40,6,utf8_decode($row[1]),1,0,'C');
    $pdf->Cell(30,6,utf8_decode($row[3]),1,0,'C');
    $pdf->Cell(40,6,utf8_decode($row[4]),1,1,'C');
	}
	$pdf->Output();}else{
		header("Location: index.php");
	}
?>
