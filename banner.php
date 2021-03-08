<?php
$connect=mysqli_connect('localhost','root','root','lightstore');
$query=mysqli_query($connect,"SELECT * FROM `banner`");
$banner=mysqli_fetch_assoc($query);
	$c = mysqli_connect('localhost', 'root', 'root', 'lightstore');         
	$query=mysqli_query($c, "SELECT *FROM `banner`");
    $update = mysqli_query($c, "UPDATE  `banner` SET `btn_text_ru`='$_POST[title]', `btn_text_kz`='$_POST[titlekz]', `des_ru`='$_POST[desk]',`image`='$_POST[img]', `des_kz`='$_POST[deskkz]', WHERE `id`='$_GET[news_id]'");
    
	

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
	<div class="namen">
			<div class="fn">
				<label for="tit">Заголовок</label>
				<br>
				<textarea type="text" name="title" id="tit" class="n"><?=$banner['title']?></textarea>
				</div>

				<div class="fn">
				<label for="tit">Заголовок кз</label>
				<br>
				<textarea type="text" name="titlekz" id="tit" class="n"><?=$banner['titlekz']?></textarea>
				</div>
		<div class="namen">
			<div class="fn">
				<label for="tit">кнопка</label>
				<br>
				<textarea type="text" name="btnru" id="tit" class="n"><?=$banner['btn_text_ru']?></textarea>
              
			</div>  
            <div class="name">
			<div class="fn">
				<label for="tit">кнопка кз</label>
				<br>
				<textarea type="text" name="btnkz" id="titt" class="nj" value="<?=$banner['btn_text_kz']?>"></textarea>
              
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

			<label for="dis">Описание кз</label>
			<br>
			<textarea type="text" name="deskkz" id="dis"><?=$banner['des_kz']?></textarea>
		</div>

		

		<button class="btn btn-primary">Отредактировать</button>
	</form>



	<?php
	$query=mysqli_query($c, "SELECT *FROM `banner`");
while($banner=mysqli_fetch_assoc($query)){
	

	if(isset($_POST['title'])){
		$c = mysqli_connect('localhost', 'root', 'root', 'lightstore');
	
			$old_name=$_FILES['img']['name'];
			$format=end(explode('.',$old_name));
			$new_name=mt_rand(3000,10000).time().'.'.$format;

			$upload=move_uploaded_file(
									  $_FILES['img']['tmp_name'],
									  'assets/img/'.$new_name
			);	
			
$insert = mysqli_query($c, "INSERT INTO `banner` (`title`,`titlekz`,`des_ru`, `des_kz`,  `btn_text_ru`,`btn_text_kz`, `image` ) VALUES ('$_POST[title]', '$_POST[titlekz]', '$_POST[desk]', '$new_name', '$_POST[deskkz]', 
'$_POST[btnru]','$_POST[btnkz]',    '$new_name' ");	
// if($insert){
// echo "news";
// }
// else{
// 	echo "INSERT INTO `banner`(`btn_text_ru`, `btn_text_kz`, `des_ru`, `des_kz`, `image`) VALUES ('$_POST[title]', '$_POST[titlekz]', '$new_name', '$_POST[desk]', '$_POST[deskkz]')";

			echo "<div class='card' style='width: 18rem;'>
<img src='assets/img/$banner[image]' class='card-img-top'>
<div class='card-body'>
  <p class='card-text'>
   $banner[title]
  </p>	 
    
</div>
</div>";
	}

	}

?>	








</body>
</html>