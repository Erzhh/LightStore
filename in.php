<?php 
    include "components/db.php";
    include "setting/language.php";
    include "query/auth.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Light Store</title>
    <link rel="stylesheet" href="assets/css/in.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <?php include "includes/head.php";?>
</head>

<body style="background-color:var(--color-bg2);">
      <?php include "includes/header.php";?>
    <form method="POST">
        
        <div class="pasha_main">
            <div class="or">
                <div class="in">
                    <a><?=$L['enter']?></a>
                </div>
                <div class="reg">
                    <a href='registr.php'
                        style="text-decoration: none;color: var(--color-bg2);"><?=$L['registration']?></a>
                </div>
            </div>

            <div class="da" style="width: 100%; height: auto;">

                <div class="forinput" style="margin-left: 10%;
	margin-right: 10%;width: 80%;margin-top: 5%;">
                    <label for="lastName" class="form-label">Email</label>
                    <input type="email" placeholder="<?=$L['email']?>" name="email">
                </div>

                <div class="forinput" style="margin-left: 10%;
	margin-right: 10%;width: 80%;margin-top: 5%;">
                    <label for="email" class="form-label">Password</label>
                    <input type="text" placeholder="<?=$L['password']?>" name="pass">
                </div>

                <button class="pasha_btn" type="submit"><?=$L['enter']?></button>
            </div>

        </div>
    </form>



</body>

</html>