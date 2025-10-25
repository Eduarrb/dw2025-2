<?php

    use PHPMailer\PHPMailer\PHPMailer;

    function sendEmail($email, $asunto, $mensaje) {
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Username = 'f58763ec4d63ad';
        $mail->Password = '3e243a6e2f8c61';
        $mail->Port = 25;
        $mail->SMTPSecure = 'tls';
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->setFrom('registro@pcmaster.com', 'Registro');

        $mail->addAddress($email);
        $mail->Subject = $asunto;
        $mail->Body = $mensaje;

        if($mail->send()) {
            $emailSent = true;
        }
    }

?>