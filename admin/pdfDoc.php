<?php
   require'fpdf/fpdf.php';
   
   $pdf=new FPDF();
   $pdf->AddPage();
    $pdf->Setfont("Arial","B",16);
   $pdf ->cell(22,20,"Welcome",1,0) ;
   $pdf->output();
 
?>