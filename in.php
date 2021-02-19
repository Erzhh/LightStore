<?php 
    include "setting/language.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Light Store</title>
	<link rel="stylesheet" href="assets/css/in.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body style="background-color:var(--color-bg2);">

<header>
        <div class="x"></div>
        <div class="logo">
            <div class="img"></div>
          <a3>
          </a3>
        </div>
        <div class="xx">
            
            
        </div>
      <div class="ob">
          <div class="toggle12">
        <input class="l" type="checkbox">
          </div>
        <a href="?lang=kz">каз</a>
        <a href="?lang=ru">рус</a>

        <div class="bikchosen1">
            <i class="far fa-heart"></i>
            
        </div>
        <div class="profile">
            <i class="far fa-user"></i>
            <?=$L['profile']?>
        </div>
        <div class="post">
          <div class="post1">
            <?=$L['advert']?>
          </div>
        </div>
      </div>
        <div class="x"></div>
    </header>
<form>

	<div class="pasha_main">
		<div class="or">
			<div class="in">
				<a><?=$L['enter']?></a>
			</div>
			<div class="reg">
				 <a href='registr.php' style="text-decoration: none;color: var(--color-bg2);"><?=$L['registration']?></a>
			</div>
		</div>



			<div class="da" style="width: 100%; height: auto;">
				<div class="forinput" style="margin-left: 10%;
	margin-right: 10%;width: 80%;">
					<label for="firstName" class="form-label">Nikname</label>
					<input type="text"  placeholder="<?=$L['nick']?>"name="firster">
				</div>

				<div class="forinput"style="margin-left: 10%;
	margin-right: 10%;width: 80%;margin-top: 5%;">
					<label for="lastName" class="form-label">Email</label>
					<input type="text" placeholder="<?=$L['email']?>"name="laster">
				</div>

				<div class="forinput" style="margin-left: 10%;
	margin-right: 10%;width: 80%;margin-top: 5%;">
					<label for="email" class="form-label">Password</label>
					<input type="email" placeholder="<?=$L['password']?>" name="email">
				</div>



				<button class="pasha_btn" type="submit"><?=$L['enter']?></button>
			</div>

	</div>
</form>
<script>

	var toggle;

	document.getElementsByClassName('l')[0].onclick = function(){
		
		if(!toggle){
			document.documentElement.style.setProperty('--color-bg', 'white');
			document.documentElement.style.setProperty('--color-bg2', 'black');
			document.documentElement.style.setProperty('--color-font', 'black');
			document.documentElement.style.setProperty('--logo-theme', "url('../img/logo-dark.png')");

		}
		else{
			document.documentElement.style.setProperty('--color-bg', 'black');
			document.documentElement.style.setProperty('--color-bg2', 'white');
			document.documentElement.style.setProperty('--color-font', 'white');
			document.documentElement.style.setProperty('--logo-theme', "url('../img/logo-light.png')");
		
		}
		toggle = !toggle
	}

</script>


	</body>
	</html>