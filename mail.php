<?php 

    $message =  "Hello";
    $mail = "nikitamatveev040@gmail.com";


    $headers .= "X-PHP-Origination-Script: 0:1.php";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= 'From: paamp89@mail.ru' . "\r\n";

    $m = mail($mail, 'Код подтверждений',$message, $headers);

     if($m) {
		echo "The email message was sent.";
    } else {
    	echo "The email message was not sent.";
    }
     ?>