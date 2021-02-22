<?php 

    $message =  "Hello";
    $mail = "erzhigit1407@gmail.com";


    // $headers .= "X-PHP-Originating-Script: 0:1.php";
    // $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers = 'From: bekasyl00106@icloud.com';

    $m = mail($mail, 'Код подтверждений',"X-PHP-Originating-Script: 0:1.php", $headers);

     if($m) {
		echo "The email message was sent.";
    } else {
    	echo "The email message was not sent.";
    }
     ?>