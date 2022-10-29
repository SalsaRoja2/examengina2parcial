<?php
    include_once("fpdf/fpdf.php");
    $doc=new FPDF();
    $doc->AddPage('L','A4');
   
    $doc->Image('images/fia.png',10,10,50,28,'PNG');
    $doc->SetFont('Helvetica','B','30');
    $doc->Text('60','30','Federecion Internacional de Automovilismo');
    $doc->SetFont('Arial','B','20');
    $doc->Text('135','40','Otorga');
    $doc->SetFont('Arial','I','30');
    $doc->Text('120','60','Constancia');
    $doc->SetFont('Arial','B','20');
    $doc->Text('140','70','a:');
    $doc->Ln();
    $doc->SetFont('Courier','I','35');
    $doc->Text('50','90',$_POST['nom']);
    $doc->SetFont('Arial','','20');
    $doc->Text('40','120','Por haber finalizado el dia '.$_POST['fecha'].' el curso de '.$_POST['curso']);
    $doc->SetFont('Courier','I','20');
    $doc->Text('100','130','Con duracion de '.$_POST['hrs'].' horas.');
    $doc->Image('images/mmf.png',20,157,35,15,'PNG');
    $doc->Text('20','175',$_POST['prof']);
    $doc->Text('20','180',$_POST['ocu']);
    $doc->Output('constancia.pdf','I');

?>