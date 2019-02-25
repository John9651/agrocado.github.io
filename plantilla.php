<?php

	require 'fpdf/fpdf.php';

	class PDF extends FPDF
	{
		function Header()
		{
			$this->Image('c.png', 10, 10, 15 );
			$this->SetFont('Arial','B',15);
			$this->Cell(90);
			$this->Cell(90,10, 'Reporte',1,0,'C');
			$this->Ln(20);
		}

		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}
	}
?>
