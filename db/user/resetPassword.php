<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../../vendor/autoload.php';

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

    $email = $_GET["email"];

    //Recipients
    $mail->setFrom('brunoflag@sapo.pt', 'Admin');
    $mail->addAddress('brunoflag@sapo.pt', $email);         //Add a recipient
    //$mail->addAddress($email);                            //Utilizando email real de utilizador
    $pass = randomPassword();

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Projeto Fantástico - Password recovery';
    $mail->Body    = "<p>New password for $email: <b>$pass</b></p>";
    $mail->AltBody = "New password for $email: $pass";

    $mail->send();

    include('../../db/user/changePassword.php');
    //echo 'Message has been sent';
    header('Location: ../../index.php?p=administration&r=resetpasswordok');
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    header('Location: ../../index.php?p=administration&r=resetpassworerror');
}

function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}