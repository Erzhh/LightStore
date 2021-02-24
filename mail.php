<?php 

<<<<<<< HEAD
    $message =  "Hello";
    $mail = "kasymhr@gmail.com";


    $headers .= "X-PHP-Originating-Script: 0:1.php";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= 'From: kasymhr@gmail.com' . "\r\n";
=======
    // $message =  "Hello";
    // $mail = "erzhigit1407@gmail.com";


    // $headers .= "MIME-Version: 1.0\r\n";
    // $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    // $headers .= 'From: Your@gmail.com' . "\r\n";

    // $m = mail($mail, 'Код подтверждений',$message, $headers);

    //  if($m) {
		// echo "The email message was sent.";
    // } else {
    // 	echo "The email message was not sent.";
    // }

    require_once "setting/SMTP.php";
    $mailSMTP = new SendMailSmtpClass('yourmail@gmail.com', 'password', 'ssl://smtp.gmail.com', 'From', 465);
    $headers= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: From<yourmail@gmail.com>\r\n";
    $result =  $mailSMTP->send('yourmail@gmail.com', 'Subject', "Text", $headers);
>>>>>>> 5229da13b10a05bc58a40b56ba49792959470ca2


     ?>