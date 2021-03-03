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
<div class="fn">
				<label for="tit">Заголовок </label>
				<br>
				<textarea type="text" name="titlebanner" id="tit" class="n"><?=$banner['title']?></textarea>
               </div>
                
               <label for="titg">Тақырыбы</label>
				<br>
				<textarea type="text" name="titlebanner" id="tit" class="n"><?=$banner['title']?></textarea>
               </div>
                
                <div class="sn">
				<label for="im">Фото</label>
				<br>
				<input type="file" name="image" id="im" class="n i" value="<?=$banner['image']?>">
			</div>
		<br>
			

            <div class="dis">
			<label for="dis">Описание</label>
			<br>
			<textarea type="text" name="textNews" id="dis"><?=$banner['des_ru']?></textarea>
      </div>

      <div class="disk">
			<label for="diss">Сипаттама</label>
			<br>
			<textarea type="text" name="desk" id="dis"><?=$banner['des_kz']?></textarea>
      </div>
      <!-- <a href="?lang=kz">каз</a>
        <a href="?lang=ru">рус</a> -->
      <button class="btn btn-primary">Отредактировать</button>
</form>
<button>btn_text_kz</button>
<button>btn_text_ru</button>
<input text="slug"></input>
<input text="is_public"></input>

<?php    

if(isset($_POST['titlebanner'])){
    $c = mysqli_connect('localhost', 'root', 'root', 'it start');


    $old_name=$_FILES['image']['name'];
    $format=end(explode('.',$old_name));
    $new_name=mt_rand(3000,10000).time().'.'.$format;
    $upload=move_uploaded_file(
                              $_FILES['image']['tmp_name'],
                              'img/'.$new_name
    );


    $insert = mysqli_query($c, "INSERT INTO `banner`(`title`, `des_ru`,`des_kz`, `image`,'btn_text_kz','btn_text_ru') 
    VALUES ('$_POST[title]', '$_POST[des_ru]','$_POST[des_ru]','$new_name','$_POST[btn_text_kz]','$_POST[btn_text_ru]')");
}

?>
</body>
</html>