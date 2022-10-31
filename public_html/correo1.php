<?php


$mail = $_POST['emaill'];
$asunto = 'Xtreme Code';


$header = "Nos contactaremos contigo en la brevedad posible"."\r\n";




mail($mail,$asunto,$header);



?>