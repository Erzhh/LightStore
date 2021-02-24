<?php 

    require_once "setting/SMTP.php";
    $mailSMTP = new SendMailSmtpClass('yourmail@gmail.com', 'password', 'ssl://smtp.gmail.com', 'From', 465);
    $headers= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: From<yourmail@gmail.com>\r\n";
    $result =  $mailSMTP->send('yourmail@gmail.com', 'Subject', "Text", $headers);

     ?>