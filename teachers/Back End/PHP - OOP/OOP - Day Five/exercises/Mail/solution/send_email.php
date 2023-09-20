<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside any functions
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$pass = 'dldwlacxxdtnfnyc';

//Load composer's autoloader
require '../../vendor/autoload.php';


//To use gmail you need to generate an app password on your gmail settings.

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = 'smtp.gmail.com';
    $mail->Username = 'david.ferns95@gmail.com';
    $mail->Password = $pass;
    $mail->Port = 587; //587 if 465 doesnt work
    $mail->setFrom('david.ferns95@gmail.com', 'David Ferns');
    $mail->addAddress($email, 'David Ferns');
    $mail->Subject = 'we received your contact request. We will reply asap.';
    $mail->Body = 'we received your contact request. We will reply asap.';
    $mail->send();
    echo 'Message has been sent!';
} catch(Exception $e)
{
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}