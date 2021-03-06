<?php 
	include "components/db.php";
    include "setting/language.php";
	include "query/registration.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Light Store</title>
	<link rel="stylesheet" href="assets/css/reg.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		<?php include "includes/head.php";?>
</head>
<div class="wrapper">
<body style="background-color:var(--color-bg2);">	
     <?php include "includes/header.php";?>

	<form method="POST">

		<div class="pasha_main">
			<div class="or">
				<div class="in">
					<a href='in.php' style="text-decoration: none; color: var(--color-bg2);"><?=$L['enter']?></a>
				</div>
				<div class="reg">
					<a><?=$L['registration']?></a>
				</div>
			</div>

			<div class="da" style="width: 100%; height: auto;">
				<div class="forinput" style="margin-left: 10%;
	margin-right: 10%;width: 80%;">
					<label for="nickName" class="form-label">Nickname</label>
					<input type="text" placeholder="<?=$L['nickr']?>" name="nickname">
				</div>


				<div class="forinput" style="margin-left: 10%;
	margin-right: 10%;width: 80%;margin-top: 5%;">
					<label for="email" class="form-label">Email</label>
					<input type="email" placeholder="<?=$L['email']?>" name="email">
				</div>

				<div class="forinput" style="margin-left: 10%;
	margin-right: 10%;width: 80%;margin-top: 5%;">
					<label for="number" style="margin-bottom: 10px;">Number</label>
					<input placeholder="<?=$L['phone']?>" name="number">
				</div>

				<div class="forinput" style="margin-left: 10%;
	margin-right: 10%;width: 80%;margin-top: 5%;">
					<label for="password" class="form-label">Password</label>
					<input placeholder="<?=$L['passwordr']?>" name="pass">
				</div>



				<button class="pasha_btn" type="submit"><?=$L['registration']?></button>
			</div>

		</div>
	</form>
</div>
<?php
    if(isset($_POST['nick'])){
		$c = mysqli_connect('localhost', 'root','lightstore'); 
	}
?>
		<script src="assets/js/dark_light.js"></script>
	</body> 
		</html>
