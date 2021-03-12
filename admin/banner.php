<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>banner</title>

	<link rel="stylesheet" href="insert.css">
</head>
<body>


	<form method="POST" enctype="multipart/form-data">
	<div class="name">
			<div class="fn">
				<label for="tit">Заголовок</label>
				<br>
				<textarea type="text" name="title" id="titb" class="nk"></textarea>
				</div>

				<div class="f">
				<label for="ti">Заголовок кз</label>
				<br>
				<textarea type="text" name="titlekz" id="titk" class="nb"></textarea>
				</div>

		<div class="nameng">
			<div class="fn">
				<label for="tt">кнопка</label>
				<br>
				<textarea type="text" name="btnru" id="tit" class="ng"></textarea>
              
			</div>  
            <div class="namenb">
			<div class="fn">
				<label for="t">кнопка кз</label>
				<br>
				<textarea type="text" name="btnkz" id="titt" class="nj"></textarea>
              
			</div>  
            
			<div class="sn">
				<label for="im">Фото</label>
				<br>
				<input type="file" name="img" id="im" class="n i" >
			</div>
		<br>

		

		</div>

        <div class="dis">
			<label for="dis">Описание</label>
			<br>
			<textarea type="text" name="des_ru" id="dis"></textarea>
		</div>
        <div class="disk">

			<label for="disk">Описание кз</label>
			<br>
			<textarea type="text" name="des_kz" id="dis"></textarea>
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
									  '../assets/img/'.$new_name
			);	
							
				$insert = mysqli_query($c, "INSERT INTO `banner` (`title`,`titlekz`,`des_ru`, `des_kz`,  `btn_text_ru`,`btn_text_kz`, `image` ) VALUES ('$_POST[title]', '$_POST[titlekz]', '$_POST[des_ru]',  '$_POST[des_kz]', '$_POST[btnru]','$_POST[btnkz]',    '$new_name')");	


	}

?>	








</body>
</html>