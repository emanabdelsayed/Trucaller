<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
// require 'PHPMailer-master/PHPMailerAutoload.php';

function sendMail(
    $username,$phone   
) {
    echo "<script>alert('Your payment is successfully check your Email');</script>";
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPSecure = 'ssl';
    $mail->SMTPAuth = true;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;
    $mail->Username = 'ahmedhisham392002@gmail.com';
    $mail->Password = 'Ahmed_819';
    $mail->setFrom('ahmedhisham392002@gmail.com');
    $mail->addAddress('sabahhassan1234a@gmail.com');
    $mail->Subject = 'Truecaller - HooooRaaaaay New Account is here';
    $mail->Body = 'There is a new account with the following details: Your user name is ' .$username  .' and your phone number is ' .$phone;
    //send the message, check for errors
    if (!$mail->send()) {
        echo "ERROR: " . $mail->ErrorInfo;
    }
}