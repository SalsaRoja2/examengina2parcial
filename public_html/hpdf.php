

<?php
        
    include_once("../fpdf/fpdf.php");
    $doc=new FPDF();
    $doc->AddPage('L','A4');

    $doc->Image('images/fc.png',3,null,0,0,'PNG');

    $doc->Image('images/c++.png',20,20,45,40,'PNG');
    $doc->Image('images/logo.png',190,25,80,30,'PNG');
    $doc->SetFont('Helvetica','B','30');
    $doc->Text('115','40','Xtreme Code');
    $doc->SetFont('Arial','B','20');
    $doc->Text('135','50','Otorga');
    $doc->SetFont('Arial','I','30');
    $doc->Text('120','70','Constancia');
    $doc->SetFont('Arial','B','20');
    $doc->Text('145','80','a:');
    $doc->Ln();
    $doc->SetFont('Courier','I','35');
    $doc->Text('50','110',"nombre persona");
    $doc->SetFont('Arial','','20');
    $fechah=date('d-m-y');
    $doc->Text('50','130','Por haber finalizado el dia '.$fechah.' el curso de Manejo de C++');
    $doc->SetFont('Courier','I','20');
    $doc->Text('40','140',' Impartido por "Juan Teran" en Aguascalientes,Ags');
    $doc->Image('images/mmf.png',30,157,45,15,'PNG');
    $doc->Text('30','175','Juan Teran');
    
    $doc->Output('constancia.pdf','I');

?>