<?php 

    $message =  "Hello";
    $mail = "kasymhr@gmail.com";


    $headers .= "X-PHP-Originating-Script: 0:1.php";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= 'From: github17112005@gmail.com' . "\r\n";

    $m = mail($mail, 'Код подтверждений',$message, $headers);

     if($m) {
		echo "The email message was sent.";
    } else {
    	echo "The email message was not sent.";
    }
     ?>