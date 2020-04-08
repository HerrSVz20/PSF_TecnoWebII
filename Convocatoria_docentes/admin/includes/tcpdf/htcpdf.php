<?php 
App::import('Vendor', 'tcpdf/tcpdf');
App::import('Vendor', 'tcpdf/tcpdf/config/lang/spa');

class XTCPDF extends TCPDF 
{ 
    private $autor  = 'Mihael Adhemar Cruz Salas'; 
    private $sistema  = 'Sistema de Gestión de Datos - Monterrey v1.0';
    private $copyright  = 'Copyright © 2014 M.A.C.S. Todos los derechos reservados.';
    private $titulo = 'Productos Monterrey';
    private $subtitulo = 'Sistema de Gestión de Datos';
    private $titulo_reporte = '';
    private $palabras_claves = 'Monterrey';
    private $header_footer = true;
    
    public function __construct($orientation = 'P', $unit = 'mm', $format = array(279, 215), $unicode = true, $encoding = 'UTF-8', $diskcache = false) {
        parent::__construct($orientation, $unit, $format, $unicode, $encoding, $diskcache);
        
        $this->SetCreator(PDF_CREATOR);
        $this->SetAuthor($this->autor);
        $this->SetTitle($this->titulo);
        $this->SetSubject($this->autor);
        $this->SetKeywords($this->palabras_claves);
        
        //cambiar margenes
        $this->SetMargins(10, 15, 10, 15);
        $this->SetHeaderMargin(PDF_MARGIN_HEADER);
        $this->SetFooterMargin(PDF_MARGIN_FOOTER);

        //set auto page breaks
        $this->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        
        //set image scale factor
        $this->setImageScale(PDF_IMAGE_SCALE_RATIO);
        
        $this->setJPEGQuality(100);
    }

    public function Header() {
        if ($this->header_footer) {
            if ($this->getPage() == 1) {
                $y = $this->GetY();
               $this->SetFillColor(230, 230, 230);
//                $this->SetLineStyle(array('width' => 0.3, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)));
                $this->RoundedRect(165, $y, 40, 20, 2.50, '1111', 'DF');
//                $this->RoundedRect(10, $y, 195, 20, 2.50, '1111', 'DF');

                $this->SetY($y + 1);
                $this->Image('img/escudo.png', 12, '', '', 18);
                $this->SetFont('freesans', 'B', 17);
                $this->SetTextColor(0, 0, 0);
                $this->SetY($this->GetY());
                $this->MultiCell('', 8, $this->titulo, 0, 'C', '', 1, '', '', '', '', '', '', 7, 'M');
//                $this->Ln();
                $this->SetFont('freesans', 'B', 12);
                $this->SetTextColor(22, 102, 152);
                $this->MultiCell('', 6, $this->subtitulo, 0, 'C', '', 1, '', '', 1, '', '', '', 6, 'M');
                $this->SetTextColor(0, 0, 0);

                $this->SetY($y + 1.5);
                $this->SetFont('freesans', 'B', 7);
                $this->MultiCell(30, 4, 'Usuario', 0, 'C', '', 1, 170, '', 1, '', '', '', 4, 'M');
                $this->SetFont('freesans', '', 7);
                $this->MultiCell(30, 4, AuthComponent::user('nick'), 0, 'C', '', 1, 170, '', 1, '', '', '', 4, 'M');
                $this->SetFont('freesans', 'B', 7);
                $this->SetY($this->GetY() + 1);
                $this->MultiCell(30, 4, 'Fecha de Emisión', 0, 'C', '', 1, 170, '', 1, '', '', '', 4, 'M');
                $this->SetFont('freesans', '', 7);
                $this->MultiCell(30, 4, date('d/m/Y H:i'), 0, 'C', '', '', 170, '', 1, '', '', '', 4, 'M');
            
                 
            } else {
                $this->SetFont('freesans', '', 9);
                $this->Cell(105, 10, $this->titulo, 0, 0, 'L');
                $this->SetFont('freesans', '', 8);
                $this->Cell(90, 10, $this->subtitulo, 0, 0, 'R');
                $this->Ln();
                $this->SetY(12);
                $this->Cell(0, 0, null, 'T', 0);
            }
        }
    }

   public function Footer() {
        if ($this->header_footer) {
            $this->SetY(-14);
            $this->SetFont('freesans', '', 8);
            $this->Cell(105, 0, $this->sistema, 0, 0, 'L');
            $this->Cell(105, 0, 'Página ' . $this->getAliasNumPage() . ' de ' . $this->getAliasNbPages(), 0, 0, 'R');

            $this->Ln();

            $this->SetFont('freesans', '', 8);
            $this->Cell(0, 0, $this->copyright, 0, 0);

            $this->SetY(-14);
            $this->Cell(0, 5, '', 'T', 0);
        }
    }
    
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    
    public function setSubTitulo($subtitulo) {
        $this->subtitulo = $subtitulo;
    }
    
    public function setCopyright($copyright) {
        $this->copyright = $copyright;
    }
    
    public function setSistema($sistema) {
        $this->sistema = $sistema;
    }
    
    public function setTituloPDF($titulo_reporte) {
        $this->SetTitle($titulo_reporte);
        $this->titulo_reporte = $titulo_reporte;
    }
} 
?>
