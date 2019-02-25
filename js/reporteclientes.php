<?php
	include 'plantilla.php';
	$h='localhost';
	$u='root';
	$p='';
	$bd='Agrocado';
	$conexion=mysqli_connect($h,$u,$p,$bd);
	$query = "SELECT `idCliente`, `Nombre`, `tel`, `cel`, `direccion`, `colonia`, `ciudad`, `cp`, `eMail` FROM `clientes`";
	$resultado=mysqli_query($conexion,$query);

	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();

	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(70,6,'ID',1,0,'C',1);
	$pdf->Cell(20,6,'Nombre',1,0,'C',1);
	$pdf->Cell(70,6,'Telefono',1,1,'C',1);

	$pdf->SetFont('Arial','',10);

	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(70,6,utf8_decode($row['idCliente']),1,0,'C');
		$pdf->Cell(20,6,$row['Nombre'],1,0,'C');
		$pdf->Cell(70,6,utf8_decode($row['tel']),1,1,'C');
	}
	$pdf->Output();
?>
