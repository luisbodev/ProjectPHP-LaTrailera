<?php
    require('pdf/fpdf.php');

    class PDF extends FPDF
    {
        // Cabecera de página
        function Header()
        {
            $this->setFont('Arial','B','20');
            $this->SetXY(15,10);
            $this->cell(0,40,"Reporte de Kilometraje");
            $this->SetXY(25,20);
            $this->Cell(0,40," Recorrido por Vehilulo.");
            $this->SetXY(25,10);
            $this->Image('Logo-LaTrailera.png',140,10,50,50,'PNG');
            $this->Ln();
            $this->Ln();
            $this->setFont('Arial','B','12');
            $this->SetXY(20,75);
            $this->SetFillColor(232,232,232);
            $this->Cell(30,7,"ID Vehiculo",1,0,'C',1);
            $this->Cell(30,7,"Placa",1,0,'C',1);
            $this->Cell(25,7,"Marca",1,0,'C',1);
            $this->Cell(25,7,"Modelo",1,0,'C',1);
            $this->Cell(25,7,"ID Ruta",1,0,'C',1);
            $this->Cell(30,7,"Kilometraje",1,1,'C',1);
        }

        // Pie de página
        function Footer()
        {
            // Posición: a 1,5 cm del final
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial','I',8);
            // Número de página
            $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
        }
    }

    require 'conex.php';
    $consulta = "select V.idVehiculo,V.placa,V.marca,V.modelo,R.idRuta,R.kilometraje From vehiculo as V inner JOIN ruta as R on V.idVehiculo=R.idVehiculo";
    $res = $mysqli->query($consulta);
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->setFont('Arial','','10');
    $pdf->cell(10);
    while ($row = $res->fetch_assoc()) {
        $pdf->Cell(30,7,$row['idVehiculo'],1,0,'C',0);
        $pdf->Cell(30,7,$row['placa'],1,0,'C',0);
        $pdf->Cell(25,7,$row['marca'],1,0,'C',0);
        $pdf->Cell(25,7,$row['modelo'],1,0,'C',0);
        $pdf->Cell(25,7,$row['idRuta'],1,0,'C',0);
        $pdf->Cell(30,7,$row['kilometraje'],1,1,'C',0);
        $pdf->cell(10);
    }

    $pdf->Output();
?>