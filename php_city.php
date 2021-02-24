<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSS only -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
 <link rel="stylesheet" href="assets/css/php_city.css">
   
    <title>Document</title>
</head>
<body>
<style>

</style>
    <form method="POST">
    <div class="glav">
            <div class="form-group">
            <label for="exampleFormControlTextarea1">title-ru</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name = "text_area1"></textarea>
        </div>
        
        <div class="form-group">
            <label for="exampleFormControlTextarea1">title-kz</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name = "text_area2"></textarea>
        </div>
    </div>
    <button name = "btn" class = "btn1">send</button>
    </form>
    <div class="x"></div>
</body>
</html>
<?php 
if(isset($_POST['btn'])){
    $connect = mysqli_connect('localhost','root','root','light_store');
    $m =mysqli_query($connect,"INSERT INTO `city`(`title_ru`, `title_kz`) VALUES ('$_POST[text_area1]','$_POST[text_area2]')");
    

//     echo "INSERT INTO `comments`( `name`, `email`, `text`, `news_id`, `user_id`) 
// VALUES ('$_POST[name]','$_POST[email]','$_POST[text]','$_GET[news_id]',$user_id)";
}
// echo "INSERT INTO `city`(`title_ru`, `title_kz`) VALUES ('$_POST[text_area1]','$_POST[text_area2]')";
?>