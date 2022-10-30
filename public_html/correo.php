<?php
            require '../Phpmailer/Exception.php';
            require '../Phpmailer/PHPMailer.php';
            require '../Phpmailer/SMTP.php';
            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\Exception;
            //if(isset($_POST["Suscribirse"])){

                $toMail = $_POST["emaill"];
                $nombreusr=$_POST["nombrecorreo"];
                $asunto = "Subscripción a Boletín";
                $mensaje = "<h1>Confirmación</h1><br> Hola ".$nombreusr. "Tu duda sera respondida en la brevedad posible";

                $myMail = new PHPMailer();
                $myMail->isSMTP();
                $myMail->Host='smtp.office365.com';
                $myMail->SMTPAuth = true;
                $myMail->Port=587;
                $myMail->Username='XtremCode@outlook.com';
                $myMail->Password='Examenp2';
                $myMail->SMTPSecure='tls';
                $myMail->setFrom('XtremCode@outloo.com','Xtreme Code');
                $myMail->addAddress($toMail);
                $myMail->Subject = $asunto;
                $myMail->isHTML();
                $myMail->Body=$mensaje;
                if($myMail->send()){
                    echo "<div class='justify-content-center'><h3 style='text-align: center;'>Se ha enviado el email</h3></div>";
                }else{
                    $error = $myMail->ErrorInfo;
                    echo "<div class='justify-content-center'><h4 style='text-align: center;'>Error, no se ha enviado el email: $error </h4></div>";
                } 
            //}
        ?>