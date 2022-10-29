

<?php
    include_once("fpdf/fpdf.php");
    $doc=new FPDF();
    $doc->AddPage('L','A4');
   
    $doc->Image('images/c++',10,10,50,28,'PNG');
    $doc->SetFont('Helvetica','B','30');
    $doc->Text('60','30','Nombre empresa');
    $doc->SetFont('Arial','B','20');
    $doc->Text('135','40','Otorga');
    $doc->SetFont('Arial','I','30');
    $doc->Text('120','60','Constancia');
    $doc->SetFont('Arial','B','20');
    $doc->Text('140','70','a:');
    $doc->Ln();
    $doc->SetFont('Courier','I','35');
    $doc->Text('50','90','Nombre persona');
    $doc->SetFont('Arial','','20');
    $fechah=date('d-m-y');
    $doc->Text('40','120','Por haber finalizado el dia '.$fechah.' el curso de Manejo de C++');
    $doc->SetFont('Courier','I','20');
    $doc->Text('100','130',' Impartido por "Nombre de instructor" en Aguascalientes,Ags');
    $doc->Text('100','140','Por "Nombre de la Empresa"');
    $doc->Image('images/mmf.png',20,157,35,15,'PNG');
    $doc->Text('20','175','Nombre prof');
    
    $doc->Output('constancia.pdf','I');

?>