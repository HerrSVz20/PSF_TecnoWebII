<?php
//este es el arvhivo verdad
//
include 'conex.php';

    $sql="SELECT * FROM usuarios";
    
    $consulta=mysqli_query($conexion,$sql);
        
        include 'tcpdf/xtcpdf.php';

        // crea el documento PDF
        $pdf = new XTCPDF();

        // Modificar información del PDF
        $pdf->setTitulo('Reporte de usuarios');
//        $pdf->setSubTitulo($subtitulo)
        // set font
        $pdf->SetFont('Times', '', 12);

        $pdf->setAutoPageBreak(false);

 //tal ves sea el error en el arvhivo xtcpdf????
        // add a page  amigo cesar y si lo borramos la carpeta de tcpdf y copiamos la del ing mas las demas convocatorias crees?
        $pdf->AddPage();
//        debug($clientes);
        $pdf->SetY(30);
        $pdf->SetFont('Times', 'B', 8);
        $pdf->SetFillColor(234, 234, 234);
        $pdf->SetLineStyle(array('width' => 0.4, 'color' => array(187, 187, 187)));
        $pdf->MultiCell(10, 8, '#', 1, 'C', true, 0, '', '', true, 0, false, true, 8, 'M');
        $pdf->MultiCell(60, 8, 'ci', 1, 'C', true, 0, '', '', true, 0, false, true, 8, 'M');
        $pdf->MultiCell(30, 8, 'nombres', 1, 'C', true, 0, '', '', true, 0, false, true, 8, 'M');
        $pdf->MultiCell(25, 8, 'apellidos', 1, 'C', true, 0, '', '', true, 0, false, true, 8, 'M');
        $pdf->MultiCell(25, 8, 'celular', 1, 'C', true, 0, '', '', true, 0, false, true, 8, 'M');
        $pdf->MultiCell(45, 8, 'estudios_universitarios', 1, 'C', true, 0, '', '', true, 0, false, true, 8, 'M');
        $pdf->Ln();

        $i = 0;
        $a = '';
        while($row = mysqli_fetch_array($consulta)){
            //en extas celdas amarillas cambialo por los datos de tu BD
             
            $y_1 = ceil($pdf->getStringHeight(60, '' . $row['ci'], $reseth = false, $autopadding = true, $cellpadding = '', $border = 1));
            $y_2 = ceil($pdf->getStringHeight(30, '' . $row['nombres'], $reseth = false, $autopadding = true, $cellpadding = '', $border = 1));
            $y_3 = ceil($pdf->getStringHeight(25, '' . $row['apellidos'], $reseth = false, $autopadding = true, $cellpadding = '', $border = 1));
            $y_4 = ceil($pdf->getStringHeight(25, '' . $row['celular'], $reseth = false, $autopadding = true, $cellpadding = '', $border = 1));
            $y_5 = ceil($pdf->getStringHeight(45, '' . $row['estudios_universitarios'], $reseth = false, $autopadding = true, $cellpadding = '', $border = 1));
            $y = max($y_1, $y_2, $y_3, $y_4, $y_5) + 2;

            if ($pdf->getY() + $y > $pdf->getPageHeight() - 20) {
                $pdf->AddPage();
                $pdf->SetY(16);
                $pdf->SetFont('freesans', 'B', 8);
                $pdf->SetFillColor(234, 234, 234);
                $pdf->SetLineStyle(array('width' => 0.4, 'color' => array(187, 187, 187)));
                $pdf->MultiCell(10, 8, '#', 1, 'C', true, 0, '', '', true, 0, false, true, 8, 'M');
                $pdf->MultiCell(60, 8, 'ci', 1, 'C', true, 0, '', '', true, 0, false, true, 8, 'M');
                $pdf->MultiCell(30, 8, 'nombres ', 1, 'C', true, 0, '', '', true, 0, false, true, 8, 'M');
                $pdf->MultiCell(25, 8, 'apellidos  ', 1, 'C', true, 0, '', '', true, 0, false, true, 8, 'M');
                $pdf->MultiCell(25, 8, 'celular', 1, 'C', true, 0, '', '', true, 0, false, true, 8, 'M');
                $pdf->MultiCell(45, 8, 'estudios_universitarios', 1, 'C', true, 0, '', '', true, 0, false, true, 8, 'M');
                $pdf->Ln();
            }

            $pdf->SetFont('freesans', '', 8);
            $i++;
            if ($i % 2) {
                $pdf->SetFillColor(255, 255, 255);
            } else {
                $pdf->SetFillColor(249, 249, 249);
            }
            $pdf->MultiCell(10, $y, $i, 1, 'C', true, 0, '', '', true, 0, false, true, $y, 'M');
            $pdf->MultiCell(60, $y, '' . $row['ci'], 1, 'C', true, 0, '', '', true, 0, false, true, $y, 'M');
            $pdf->MultiCell(30, $y, '' . $row['nombres'], 1, 'C', true, 0, '', '', true, 0, false, true, $y, 'M');
            $pdf->MultiCell(25, $y, '' . $row['apellidos'], 1, 'C', true, 0, '', '', true, 0, false, true, $y, 'M');
            $pdf->MultiCell(25, $y, '' . $row['celular'], 1, 'C', true, 0, '', '', true, 0, false, true, $y, 'M');
            $pdf->MultiCell(45, $y, '' . $row['estudios_universitarios'], 1, 'C', true, 0, '', '', true, 0, false, true, $y, 'M');

            $pdf->Ln();
        }

        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        $pdf->Output('reporte_usuarios_' . date('Y-m-d') . '.pdf', 'I');


?>