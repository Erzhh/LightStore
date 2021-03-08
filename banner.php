<?php
$connect=mysqli_connect('localhost','root','root','lightstore');
$query=mysqli_query($connect,"SELECT * FROM `banner` WHERE `id`='$_GET[news_id]'");
$banner=mysqli_fetch_assoc($query);
	$c = mysqli_connect('localhost', 'root', 'root', 'it start');         

    $update = mysqli_query($c, "UPDATE  `banner` SET `btn_text_ru`='$_POST[title]', `btn_text_kz`='$_POST[titlekz]', `des_ru`='$_POST[desk]',`image`='$_POST[img]', `des_kz`='$_POST[deskkz]', WHERE `id`='$_GET[news_id]'");
    
	if($update){
 header("Location:banner.php");

	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>Redact News</title>

	<link rel="stylesheet" href="insert.css">
</head>
<body>


	<form method="POST" enctype="multipart/form-data">
		<div class="name">
			<div class="fn">
				<label for="tit">Заголовок</label>
				<br>
				<textarea type="text" name="title" id="tit" class="n"><?=$banner['btn_text_ru']?></textarea>
              
			</div>  
            <div class="name">
			<div class="fn">
				<label for="tit">Заголовок</label>
				<br>
				<textarea type="text" name="titlekz" id="titt" class="nj" value="<?=$banner['btn_text_kz']?>"></textarea>
              
			</div>  
            
			<div class="sn">
				<label for="im">Фото</label>
				<br>
				<input type="file" name="img" id="im" class="n i" value="<?=$banner['image']?>">
			</div>
		<br>

		

		</div>

        <div class="dis">
			<label for="dis">Описание</label>
			<br>
			<textarea type="text" name="desk" id="dis"><?=$banner['des_ru']?></textarea>
		</div>
        <div class="dis">

			<label for="dis">Описание</label>
			<br>
			<textarea type="text" name="deskkz" id="dis"><?=$banner['des_kz']?></textarea>
		</div>

		

		<button class="btn btn-primary">Отредактировать</button>
	</form>



	<?php

       
		if(isset($_POST['title'])){
        	$c = mysqli_connect('localhost', 'root', 'root', 'lightstore');
		

			$old_name=$_FILES['img']['name'];
			$format=end(explode('.',$old_name));
			$new_name=mt_rand(3000,10000).time().'.'.$format;

			$upload=move_uploaded_file(
									  $_FILES['img']['tmp_name'],
									  'assets/img/'.$new_name
			);
			
		
	$insert = mysqli_query($c, "INSERT INTO `banner` (`btn_text_ru`,`btn_text_kz`, `des_ru`, `des_kz`, `image` ) VALUES ('$_POST[title]', '$_POST[titlekz]', '$new_name', '$_POST[desk]', '$_POST[deskkz]','$_POST[img]')");
		
	if($insert){
	echo "news";
	}
	else{
		echo "INSERT INTO `banner`(`btn_text_ru`, `btn_text_kz`, `desk`, `deskkz`, `image`) VALUES ('$_POST[titleNews]', '$_POST[textNews]', '$new_name', '$_POST[authorNews]', '$_POST[dateOfNews]')";
	}

} 
		 
    
	?>
</body>
</html>