<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.sapo.pt';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'brunoflag@sapo.pt';                     //SMTP username
    $mail->Password   = 'xcN*N3z3k9Kp.Em';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->CharSet = "UTF-8"; 


    //Recipients
    $mail->setFrom('brunoflag@sapo.pt', 'Remetente');
    $mail->addAddress('brunoflag@sapo.pt', 'Destinatário');     //Add a recipient

    $email = $_POST["email"];
    $message = $_POST["message"];
    $date = (new DateTime("now", new DateTimeZone('Europe/Lisbon') ))->format('Y-m-d H:i:s');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Message from Projeto Fantastico';
    $mail->Body    = "<p><b>Message from:</b> $email</p><hr><p><b>Message: </b>$message</p><p><b>Sent:</b> $date</p>";
    $mail->AltBody = "Message from: $email -> $message -> $date";

    $mail->send();
    //echo 'Message has been sent';
    include('../content/pages/email_ok.php');
    //header('Location: ../index.php?p=contact&r=ok');
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    header('Location: ../index.php?p=contact&r=error');
}