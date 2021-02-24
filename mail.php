<?php 

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
    $mailSMTP = new SendMailSmtpClass('paamp89@mail.ru', 'pasha142313', 'ssl://smtp.gmail.com', 'From', 465);
    $headers= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: From<paamp89@mail.ru>\r\n";
    $result =  $mailSMTP->send('erzhigit1407@gmail.com', 'Subject', "CUUUUUUUM", $headers);


     ?>