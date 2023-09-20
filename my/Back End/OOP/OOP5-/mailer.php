<?php
//Immport PHPMailer classes into the global namespace
//These must be at the top of your script, not inside any functions
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require '../vendor/autoload.php';
$mail = new PHPMailer(true);
//elmwemwnlnwbhurf
try {
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = 'smtp.gmail.com';
    $mail->Username = 'annbushuev@gmail.com';
    $mail->Password='elmwemwnlnwbhurf';
    $mail->Port = 587; //587 if 465 doesn't work
    $mail->setFrom('annbushuev@gmail.com', 'AnnaBu');
    $mail->addAddress('annbushuev@gmail.com', 'Dearrr');
    $mail->Subject = 'This is the subject of the e-mail';
    $mail->Body = 'Blablalblablablablabalablab';
    $mail->addAttachment('./index.php');
    $mail->send();
    echo 'Message has been send!';
}catch(Exception $e)
{
    echo "Message could not be send. MAiler Error: {$mail->ErrorInfo}";
}
?>