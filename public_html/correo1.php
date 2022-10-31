<?php


$mail = $_POST['emaill'];
$asunto = 'Nos contactaremos contigo en la brevedad posible';


$header = "Xtreme Code\r\n";




mail($mail,$asunto,$header);



?>