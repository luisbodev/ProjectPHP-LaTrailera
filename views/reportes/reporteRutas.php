<?php
    require('pdf/fpdf.php');

    class PDF extends FPDF
    {
        // Cabecera de página
        function Header()
        {
            $this->setFont('Arial','B','20');
            $this->SetXY(15,10);
            $this->cell(15,40,"Reporte de Rutas Realizas");
            $this->SetXY(15,20);
          //  $this->Cell(0,40," Filtrado por Cliente, Motorista y Fechas.");
            $this->SetXY(25,10);
            $this->Image('Logo-LaTrailera.png',140,10,50,50,'PNG');
            $this->Ln();
            $this->Ln();
            $this->setFont('Arial','B','9');
            $this->SetXY(20,75);
            $this->SetFillColor(232,232,232);
            $this->Cell(20,5,"ID Ruta",1,0,'C',1);
            $this->Cell(25,5,"ID Motorista",1,0,'C',1);     
            $this->Cell(20,5,"ID Envio",1,0,'C',1);
            $this->Cell(29,5,"Fecha Realizacion",1,0,'C',1);
            $this->Cell(25,5,"Fecha Entrega",1,0,'C',1);
            $this->Cell(20,5,"ID Cliente",1,0,'C',1);
            $this->Cell(30,5,"Nombre Cliente",1,1,'C',1);         
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
    $consulta = "select R.idRuta, R.descripcion, R.kilometraje, M.idMotorista, M.nombre, M.apellido, E.idEnvio, E.fechaRealizacion, E.fechaEntrega, C.idCliente, C.nombre, C.apellido From ruta as R inner JOIN motorista as M on M.idMotorista=R.idMotorista INNER JOIN envio as E INNER JOIN cliente as C on C.idCliente=E.idCliente";
    $res = $mysqli->query($consulta);
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->cell(10);
    $pdf->setFont('Arial','','9');
      while ($row = $res->fetch_assoc()) {
        $pdf->Cell(20,5,$row['idRuta'],1,0,'C',0);
        $pdf->Cell(25,5,$row['idMotorista'],1,0,'C',0);
        $pdf->Cell(20,5,$row['idEnvio'],1,0,'C',0);
        $pdf->Cell(29,5,$row['fechaRealizacion'],1,0,'C',0);
        $pdf->Cell(25,5,$row['fechaEntrega'],1,0,'C',0);
        $pdf->Cell(20,5,$row['idCliente'],1,0,'C',0);
        $pdf->Cell(30,5,$row['nombre'],1,1,'C',0);
        $pdf->cell(10);
    }

    $pdf->Output();
?>
     