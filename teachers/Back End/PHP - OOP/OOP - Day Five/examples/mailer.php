<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside any functions
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$pass = 'slfilhijqhkiwbea';

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
    $mail->setFrom('YourEmail@gmail.com', 'David Ferns');
    $mail->addAddress('YourDestination@gmail.com', 'David Ferns');
    $mail->Subject = 'This is the subject of the Email';
    $mail->Body = 'This is the body of the email that will be send';
    $mail->addAttachment('./index.php');
    $mail->send();
    echo 'Message has been sent!';
} catch(Exception $e)
{
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}