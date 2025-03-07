<?php
 // session_start();
 // error_reporting(0);
 // if(!isset($_SESSION['username']))
 // {
 //     header("location:login.php?action=login");
 // }
require_once('fpdf182/fpdf.php');

class PDF extends FPDF{
function RoundedRect($x, $y, $w, $h, $r, $style = '')
    {
        $k = $this->k;
        $hp = $this->h;
        if($style=='F')
            $op='f';
        elseif($style=='FD' || $style=='DF')
            $op='B';
        else
            $op='S';
        $MyArc = 4/3 * (sqrt(2) - 1);
        $this->_out(sprintf('%.2F %.2F m',($x+$r)*$k,($hp-$y)*$k ));
        $xc = $x+$w-$r ;
        $yc = $y+$r;
        $this->_out(sprintf('%.2F %.2F l', $xc*$k,($hp-$y)*$k ));

        $this->_Arc($xc + $r*$MyArc, $yc - $r, $xc + $r, $yc - $r*$MyArc, $xc + $r, $yc);
        $xc = $x+$w-$r ;
        $yc = $y+$h-$r;
        $this->_out(sprintf('%.2F %.2F l',($x+$w)*$k,($hp-$yc)*$k));
        $this->_Arc($xc + $r, $yc + $r*$MyArc, $xc + $r*$MyArc, $yc + $r, $xc, $yc + $r);
        $xc = $x+$r ;
        $yc = $y+$h-$r;
        $this->_out(sprintf('%.2F %.2F l',$xc*$k,($hp-($y+$h))*$k));
        $this->_Arc($xc - $r*$MyArc, $yc + $r, $xc - $r, $yc + $r*$MyArc, $xc - $r, $yc);
        $xc = $x+$r ;
        $yc = $y+$r;
        $this->_out(sprintf('%.2F %.2F l',($x)*$k,($hp-$yc)*$k ));
        $this->_Arc($xc - $r, $yc - $r*$MyArc, $xc - $r*$MyArc, $yc - $r, $xc, $yc - $r);
        $this->_out($op);
    }

    function _Arc($x1, $y1, $x2, $y2, $x3, $y3)
    {
        $h = $this->h;
        $this->_out(sprintf('%.2F %.2F %.2F %.2F %.2F %.2F c ', $x1*$this->k, ($h-$y1)*$this->k,
            $x2*$this->k, ($h-$y2)*$this->k, $x3*$this->k, ($h-$y3)*$this->k));
    }
function Footer()
{
    // Go to 1.5 cm from bottom
    $this->SetY(-15);
    // Select Arial italic 8
    $this->SetFont('Arial','I',8);
    $this->SetTextColor(0,0,0);
    // Print centered page number
    // $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
}


}

$pdf = new PDF('P','mm',array(100,150));

$pdf->AddPage('P',array(100,150));
$pdf->SetDrawColor(25, 41, 158);
// $pdf->RoundedRect(6, 6, 80, 285, 3.5, 'D');
// $pdf->RoundedRect(7, 7, 196, 283, 3.5, 'D');
$pdf->SetAutoPageBreak(true, 10);
$pdf->SetFont('Arial', '', 12);
$pdf->SetTopMargin(10);
$pdf->SetLeftMargin(10);
$pdf->SetRightMargin(10);

// Image (left,)
$pdf->Image('assets/img/brand/logo.png',40,2,20,0,'PNG');
/* --- Text --- */
$pdf->Text(35, 20, 'Company Name');

// $pdf->Line(0, 27, 220, 27);

/* --- Text --- */
$pdf->SetFont('', 'B', 16);
$pdf->Text(30, 40, 'Sales Slip Print');
/* --- Line --- */
$pdf->Line(5, 25, 95, 25);
$pdf->SetFont('','',12);
$pdf->Text(28, 25, '');
$pdf->SetFont('','',10);
$pdf->Text(5,50,'Date : ____________');
$pdf->Text(16,50,"10-05-2020");

$pdf->Text(65,50,"SRNo : _________");
$pdf->Text(80,50,"100");

$pdf->Text(5,60,'Name : _______________________________________');
$pdf->Text(22,60,"May Daw");


$pdf->ln(60);

$pdf->Cell(40,13," Product Type : ",1,0,);
$pdf->Cell(40,13,"ITS",1,1,'C');

$pdf->Cell(40,13," Product Name :",1,0);
$pdf->Cell(40,13,"Name Prod",1,1,'C');

$pdf->Cell(40,13," Quantity :",1,0);
$pdf->Cell(40,13,"10",1,1,'C');

$pdf->Cell(40,13," Payment Type :",1,0);
$pdf->Cell(40,13,"Cash",1,1,'C');

$pdf->Cell(40,13," Total Amount :",1,0);
$pdf->Cell(40,13,"10",1,1,'C');

$pdf->Text(25,145,"..................Thank You..................");



$pdf->output();
?>