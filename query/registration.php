<?php
    if(isset($_POST['nickname'])){

	    $regis =	mysqli_query($c, "INSERT INTO `users`(`name`, `email`, `password`, `number`) 
        VALUES ('$_POST[nickname]','$_POST[email]','$_POST[password]','$_POST[number]')");

        if($regis){
            header("Location: in.php");
        }
	}
?>