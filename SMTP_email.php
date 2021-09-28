<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require '/home/fayz/vendor/autoload.php';

$mail = new PHPMailer(true);
try{
    //SMTP Server Confid
    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'fayzmagento@gmail.com';                //SMTP username
    $mail->Password   = 'Helloworld123';                        //SMTP password
    $mail->SMTPSecure = 'tls';                                  //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('fayzmagento@gmail.com', 'Fayz');
    $mail->addAddress('fayzhasan@gmail.com');     //Add a recipient
    $mail->addReplyTo('fayzhasan240@gmail.com');

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'PHP SMTP Email';
    $mail->Body = "Hello World! <br>My First PHP SMTP email ";

    $mail->send();
    echo 'Mail has been sent successfully!';
} catch (Excemption $e){
    echo 'Mail could not be sent. Error: ', $mail->ErrorInfo;
}