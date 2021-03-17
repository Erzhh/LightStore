<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>banner</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
	<meta name="author" content="Bootlab">
	<title>Default Dashboard | AppStack - Admin &amp; Dashboard Template</title>
	<link rel="shortcut icon" href="img/favicon.ico">


	<link class="js-stylesheet" href="https://appstack.bootlab.io/css/light.css" rel="stylesheet">
	<script src="js/settings.js"></script>
	<link rel="stylesheet" href="assets/font/css/icons.css">
	<link rel="stylesheet" href="../assets/css/select_city.css">
	<script src="js/settings.js"></script>
	
</head>
<body>
<form method="POST" enctype="multipart/form-data">>
					<div class="row">
						<div class="col-12 col-xl-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Баннер</h5>
									<h6 class="card-subtitle text-muted"></h6>
								</div>
								<?php
													if(isset($_POST['title_ru'])){
														 mysqli_query($c,"INSERT INTO `city`( `title_ru`, `title_kz`) 
														 VALUES ('$_POST[title_ru]','$_POST[title_kz]')");
													}	
													?>
								<div class="card-body">
									<form>

									
										<div class="form-group">
											<label class="form-label">Заголовок</label>
											<textarea type="text" name="title" id="titb" class="form-control"></textarea>

										</div>
										
				 <div class="form-group">
				<label for="ti">Заголовок кз</label>
				<br>
				<textarea type="text" name="titlekz" id="titk" class="form-control"></textarea>
				</div>
								
								<div class="nameng">
			<div class="form-group">
				<label for="tt">кнопка</label>
				
				<textarea type="text" name="btnru" id="tit" class="form-control"></textarea>
              
			</div>  
			<div class="namenb">
			<div class="fn">
				<label for="t">кнопка кз</label>
				<br>
				<textarea type="text" name="btnkz" id="titt" class="form-control"></textarea>
              
			</div>  
            
							
							<div class="sn">
				<label for="im">Фото</label>
				<br>
				<input type="file" name="img" id="im" class="form-control">
			</div>

			<div class="dis">
			<label for="dis">Описание</label>
			<br>
			<textarea type="text" name="des_ru" id="dis" class="form-control"></textarea>
		</div>
        <div class="disk">

			<label for="disk">Описание кз</label>
			<br>
			<textarea type="text" name="des_kz" id="dis"  class="form-control"></textarea>
		</div>
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