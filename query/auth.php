<?php
   if(isset($_POST['email'])) {
        
    $q = mysqli_query($c, "SELECT `role` FROM `users` WHERE `email`='$_POST[email]' and `password`='$_POST[pass]'");

    if(mysqli_num_rows($q)){
  
        $role =  mysqli_fetch_assoc($q)['role'];// 1 or 2

        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['pass'];
        $_SESSION['role'] =  $role;
        $_SESSION['id'] = $_POST['id'];


       if($role == 1){
        header("location: admin/index.php");
            
       }
       else if($role == 2){
            header("location: self_advert.php");
       }

    }

    else{
        echo "<div class='alert alert-danger' role='role'>Такой пользователь не существует
        </div>";
    }
}
?>