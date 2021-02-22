<?php 

    $message =  "Hello";
    $mail = "erzhigit1407@gmail.com";


    $headers .= "X-PHP-Originating-Script: 0:1.php";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= 'From: Myarena.com  <bekasyl00106@icloud.com>' . "\r\n";

    $m = mail($mail, 'Код подтверждений',$message, $headers);

     if($m) {
		echo "The email message was sent.";
    } else {
    	echo "The email message was not sent.";
    }
     ?>