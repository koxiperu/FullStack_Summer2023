<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require '../../vendor/autoload.php';
$mail = new PHPMailer(true);
//elmwemwnlnwbhurf
$ats='';
$atm='';
$ate='';
if (isset($_POST['sbtn'])){
    if (empty($_POST['subject'])){
        $ats='Subject is mandatory';
    };
    if(empty($_POST['message'])){
        $atm='Message is mandatory';
    };
    if(empty($_POST['email'])){
        $ate='Email is mandatory';
    };
    if (empty($ats) and empty($atm)) {
        if (empty($_POST['name'])) $name='John Gold';
        else $name=$_POST['name'];
        if (empty($_POST['phone'])) $phone='no phone';
        else $phone=$_POST['phone'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $message=$_POST['message'].$phone;
        try {
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = 'smtp.gmail.com';
    $mail->Username = 'annbushuev@gmail.com';
    $mail->Password='elmwemwnlnwbhurf';
    $mail->Port = 587; //587 if 465 doesn't work
    $mail->setFrom('annbushuev@gmail.com', 'AnnaBu');
    $mail->addAddress($email, $name);
    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->send();
    $answer= '<h2>We received your contact request. We will reply asap.</h2>';
}catch(Exception $e)
{
    echo "Message could not be send. MAiler Error: {$mail->ErrorInfo}";
}
}
    }
    
if (isset($answer)) {
    echo $answer;
}else {
    ?>
<form method="POST">
    <label for="name">Your name: </label>
    <input type="text" name="name" id=""><hr>
    <label for="phone">Your phone-number: </label>
    <input type="tel" name="phone" id=""><hr>
    <label for="email">Your e-mail: </label>
    <input type="email" name="email" id="">
    <?php if (!empty($ate)) echo $ate?><hr>
    <label for="subject">Subject: </label>
    <input type="text" name="subject" id="">
    <?php if (!empty($ats)) echo $ats?> <hr>
    <label for="message">Message: </label>
    <input type="text" name="message" id="">
    <?php if (!empty($atm)) echo $atm?><hr>
    <input type="submit" name="sbtn" value="Send">
</form>
<?
}
?>