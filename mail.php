<?php 

    $message =  "Hello";
    $mail = "erzhigit1407@gmail.com";


    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= 'From: bekasyl00106@icloud.com' . "\r\n";

    $m = mail($mail, 'Код подтверждений',$message, $headers);

     if($m) {
		echo "The email message was sent.";
    } else {
    	echo "The email message was not sent.";
    }
     ?>