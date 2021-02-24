<?php 

<<<<<<< HEAD
    // $message =  "Hello";
    // $mail = "erzhigit1407@gmail.com";

=======
    $message =  "Hello";
    $mail = "erzhigit1407@gmail.com";

    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= 'From: Your@gmail.com' . "\r\n";
>>>>>>> d3e0c9387f6f7cd58fc8497dd1a55cdda9951b21

    $m = mail($mail, 'Код подтверждений',$message, $headers);

    if($m){
		  echo "The email message was sent.";
    } else {
    	echo "The email message was not sent.";
    }

    // require_once "setting/SMTP.php";
    // $mailSMTP = new SendMailSmtpClass('yourmail@gmail.com', 'password', 'ssl://smtp.gmail.com', 'From', 465);
    // $headers= "MIME-Version: 1.0\r\n";
    // $headers .= "Content-type: text/html; charset=utf-8\r\n";
    // $headers .= "From: From<yourmail@gmail.com>\r\n";
    // $result =  $mailSMTP->send('yourmail@gmail.com', 'Subject', "Text", $headers);

<<<<<<< HEAD
    require_once "setting/SMTP.php";
<<<<<<< HEAD
    $mailSMTP = new SendMailSmtpClass('kasymhr@gmail.com', 'password', 'ssl://smtp.gmail.com', 'From', 465);
    $headers= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: From<kasymhr@gmail.com>\r\n";
    $result =  $mailSMTP->send('kasymhr@gmail.com', 'Subject', "Text", $headers);

=======
    $mailSMTP = new SendMailSmtpClass('github17112005@gmail.com', 'era17112005', 'ssl://smtp.gmail.com', 'From', 465);
    $headers= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From:github17112005@gmail.com From<@gmail.com>\r\n";
    $result =  $mailSMTP->send('github17112005@gmail.com', 'Subject', "Text", $headers);
=======
>>>>>>> de6adc0c8c8a3ec3ea95ca267400e96caa6ca80a
>>>>>>> d3e0c9387f6f7cd58fc8497dd1a55cdda9951b21

?>
