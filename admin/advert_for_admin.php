<?php
	include "../setting/language.php";
	include "../components/db.php";

?>
<html lang="en">

<head>
	<?php include "includesforadmin/headforadmin.php";?>
</head>

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-behavior="sticky">
	<?php 
			include "../includes/site_bar.php"
			
		?>
	<div class="main">
		<nav class="navbar navbar-expand navbar-light navbar-bg">
			<a class="sidebar-toggle">
				<i class="hamburger align-self-center"></i>
			</a>

			<form class="d-none d-sm-inline-block">
				<div class="input-group input-group-navbar">

					<div class="input-group-append">

					</div>
				</div>
			</form>

		</nav>



		<form method="POST">

			<div class="nik_main">
				<h1><?=$L['aDvert']?></h1>
				<div class="nik_title div">
					<h2><?=$L['TITle']?></h2><br>

					<label for="ad_title"><?=$L['TITle']?>*</label><br>
					<input class="tit" type="text" id="ad_title" name="title"><br>


					<div id="ad.category">
						<label for="ad_сategory"><?=$L['CATEGory']?>*</label>
					<select class="opt" id="ad_city" name="city_id">
						<?php 
								$cat =mysqli_query($c, "SELECT * FROM `categories`");
							while($category =  mysqli_fetch_assoc($cat)){
								echo "<option value='$category[id]'>$category[title_ru]</option>";
							}
						?>
					</select>
						
					</div>

				</div>
			

				<div class="nik_location div">
					<h2><?=$L['LOCation']?></h2>

					<label for="ad_city"><?=$L['CIty']?>*</label><br>
					<select class="opt" id="ad_city" name="city_id">
						<?php 
								$cities =mysqli_query($c, "SELECT * FROM `city`");
							while($city =  mysqli_fetch_assoc($cities)){
								echo "<option value='$city[id]'>$city[title_ru]</option>";
							}
						?>
					</select>
				</div>


				<div class="nik_price  div">
					<h2><?=$L['COst']?></h2>

					<input class="cost" type="text" name="price" style="display: block;"><br>

					<div class="contract"  style="display: block;">
						<h2><?=$L['CONTract']?></h2>
						<div class="slideTwo">
							<input type="checkbox" value="None" id="slideTwo" name="check" style="display: none;" />
							<label for="slideTwo"></label>
						</div>
					</div>

				</div>



				<div class="nik_discription  div">
					<h2><?=$L['DISCription']?></h2>

					<label for="ad_text"><?=$L['DISCription']?>*</label><br>
					<textarea class="text" id="ad_text" name="discription"></textarea>
				</div>


				<div class="nik_images  div">
					<h2><?=$L['PHOTos']?></h2>

					<label for="ad_img"><?=$L['PHOTos']?>*</label><br>
					<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
					<div class="inputfile">
						<div class="example-1">
							<div class="form-group">
								<label class="label">
									<i class="material-icons">attach_file</i>
									<span class="title"><?=$L['FIle']?></span>
									<input type="file" name="images">
								</label>
							</div>
						</div>

					</div>

				</div>


				<div class="nik_doIt  div">
					<button>
						<h2><?=$L['PUBLik']?></h2>
					</button>
				</div>
			</div>

		</form>

		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

		<script>
			document.getElementsByClassName('l')[0].onclick = function () {

				if (localStorage.getItem('toogle')) {
					if (localStorage.getItem('toogle') == 'dark') {
						LightOrDark('light')
						localStorage.setItem('toogle', 'light');
					} else {
						LightOrDark('dark')
						localStorage.setItem('toogle', 'dark');
					}
				} else {
					localStorage.setItem('toogle', 'light');
					LightOrDark('light')
				}

			}

			function LightOrDark(color) {
				if (color == 'dark') {
					document.documentElement.style.setProperty('--color-bg', 'white');
					document.documentElement.style.setProperty('--color-bg2', 'black');
					document.documentElement.style.setProperty('--color-font', 'black');
					document.documentElement.style.setProperty('--logo-theme', "url('../img/logo-dark.png')");
					document.documentElement.style.setProperty('--color-bgD', '#333333');
				} else {
					document.documentElement.style.setProperty('--color-bg', 'black');
					document.documentElement.style.setProperty('--color-bg2', 'white');
					document.documentElement.style.setProperty('--color-font', 'white');
					document.documentElement.style.setProperty('--logo-theme', "url('../img/logo-light.png')");
					document.documentElement.style.setProperty('--color-bgD', 'white');
				}
			}

			LightOrDark(localStorage.getItem('toogle'));
		</script>



<?php
  
if(isset($_POST['title'])){
	
	$time = time(); // 1977 - now time
	$random = mt_rand(10000,99999);
	$new_name = md5( $time.$random ); 
	//160876843567123
	//E^&7btgn23br7b8fn8oq7etbrfiwbut7roo1e3t26e
	$exp = explode('.',$_FILES['photo']['name']);   // 123.jpg to [ 123 , jpg ]
	$format = $exp[1];
	//jpg

	$img_name = $new_name.'.'.$format;
	//E^&7btgn23br7b8fn8oq7etbrfiwbut7roo1e3t26e.jpg
	$upload = move_uploaded_file( $_FILES['photo']['tmp_name'] , '../assets/img/advert/'.$img_name);
	

	mysqli_query( $c , "INSERT INTO `advert`(`description`,`title`,`price`,`images`,`city_id`,`author_id`)
	VALUES ('$_POST[title]','$_POST[description]','$_POST[price]','$img_name','$_POST[city_id]','$_SESSION[id]')");

}


?>
		
			</body>

</html>