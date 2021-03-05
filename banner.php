<?php 
    include "setting/language.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" enctype="multipart/form-data">
        <div class="fq">
            <label for="titt">Заголовок</label>
            <br>
            <textarea type="text" name="btn_text_ru" id="tit" class="j"></textarea>
        </div>
        <div class="fn">
            <label for="titg">Тақырыбы</label>
            <br>
            <textarea type="text" name="btn_text_kz" id="til" class="g"></textarea>
        </div>

        <div class="fb">
            <label for="tit">Заголовок </label>
            <br>
            <textarea type="text" name="title" id="tik" class="n"></textarea>
        </div>
        <div class="fc">
            <label for="titg">Тақырыбы</label>
            <br>
            <textarea type="text" name="titlekz" id="t" class="b"></textarea>
        </div>
          <div class="fhh">
          <input type="slug" name="slug" id="slug" class="slug">
           
          </div>
        <div class="sn">
          <label for="im">Фото</label>
          <br>
          <input type="file" name="image" id="im" class="n i">
        </div>
      <div class="dis">
        <label for="dis">Описание</label>
        <br>
        <textarea type="text" name="des_ru" id="dis"></textarea>
      </div>

      <div class="disk">
        <label for="diss">Сипаттама</label>
        <br>
        <textarea type="text" name="des_kz" id="disk"></textarea>
      </div>
      
      <button class="btn btn-primary">Добавить</button>
</form>

<?php    

if(isset($_POST['title'])){
    $c = mysqli_connect('localhost', 'root', 'root', 'lightstore');


    $old_name=$_FILES['image']['name'];
    $format=end(explode('.',$old_name));
    $new_name=mt_rand(3000,10000).time().'.'.$format;
    $upload=move_uploaded_file($_FILES['image']['tmp_name'],'assets/img/'.$new_name);


    $insert = mysqli_query($c, "INSERT INTO `banner`(`title`, `des_ru`,`des_kz`, `image`,`btn_text_kz`,`btn_text_ru`,`slug`,`is_public`) 
  
    VALUES ('$_POST[title]', '$_POST[des_ru]','$_POST[des_kz]','$new_name','$_POST[btn_text_kz]','$_POST[btn_text_ru]', '$_POST[image]')");
    
}
// $query=mysqli_query($c, "SELECT *FROM `banner`");
// while($banner=mysqli_fetch_assoc($query)){


// echo "<div class='card' style='width: 18rem;'>
// <img src='assets/img/$banner[image]' class='card-img-top'>
// <div class='card-body'>
//   <p class='card-text'>
//    $banner[title]
//   </p>
// </div>
// </div>";
// }
// }


// if(isset($_POST['titlebanner'])){
	
// 	$c = mysqli_connect('localhost', 'root', 'root', 'lightstore');         // nkt = cocos
// 	// $update = mysqli_query($c, "UPDATE  `banner` SET `title`='$_POST[titlebanner]', `des_ru`='$_POST['textbanner'],`img`='$_POST[image]',`author`='$_POST[authorNews]', WHERE `id`='$_GET[news_id]'");

// // 	if($update){
// // header("Location:gg.php");

// // 	}
// }
?>


</body>
</html>