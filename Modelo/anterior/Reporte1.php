<?php
    require('../Vista/Plantilla.php');
    include("../Config/conexion.php");
    $sql = "SELECT * from cliente";
    $resultado = mysqli_query($conexion, $sql);
    //crear objeto
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetMargins(10,10,10);
    $pdf->SetAutoPageBreak(true,20);

    $pdf->SetX(15);
    $pdf->SetFont('Helvetica','B',10);
    $pdf->Cell(10, 8, 'ID','B',0, 'C',0);
    $pdf->Cell(35, 8, 'Cedula','B',0, 'C',0);
    $pdf->Cell(35, 8, 'Nombre','B',0, 'C',0);
    $pdf->Cell(35, 8, 'Apellido','B',0, 'C',0);
    $pdf->Cell(35, 8, 'Telefono','B',0, 'C',0);
    $pdf->Cell(35, 8, 'Direccion','B',1, 'C',0);
    $pdf->SetFillColor(233, 229, 235);//color de fondo rgb
    $pdf->SetDrawColor(61, 61, 61);//color de linea  rgb
    //mostrar datos
    $pdf->SetFont('Arial','',10);
    while($mostrar = mysqli_fetch_array($resultado)){
        
        $pdf->Ln(0.6);
        $pdf->setX(15);    

        $pdf->Cell(10, 8, $mostrar['ID_CLI'], 1, 0, 'C');
        $pdf->Cell(35, 8, $mostrar['cedula'], 1, 0, 'C');
        $pdf->Cell(35, 8, $mostrar['nombre'], 1, 0, 'C');
        $pdf->Cell(35, 8, $mostrar['apellido'], 1, 0, 'C');
        $pdf->Cell(35, 8, $mostrar['telefono'], 1, 0, 'C');
        $pdf->Cell(35, 8, $mostrar['direccion'], 1, 1, 'C');
    }
    $pdf->Output('I', 'reporte_Cliente.pdf');
?>