<?php 
 include "../components/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
	<meta name="author" content="Bootlab">
	<title>Default Dashboard | AppStack - Admin &amp; Dashboard Template</title>
	<link rel="canonical" href="https://appstack.bootlab.io/dashboard-default.html">
	<link rel="shortcut icon" href="img/favicon.ico">

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&amp;display=swap" rel="stylesheet">
	<link class="js-stylesheet" href="https://appstack.bootlab.io/css/light.css" rel="stylesheet">
	<script src="js/settings.js"></script>
	<link rel="stylesheet" href="assets/font/css/icons.css">

	<script src="js/settings.js"></script>
	<!-- END SETTINGS -->
	<link rel="stylesheet" href="../assets/css/cssforadmin.css">
	<link rel="stylesheet" href="../assets/css/form.css">
	<link rel="stylesheet" href="../assets/css/main.css">
	<link rel="canonical" href="https://appstack.bootlab.io/dashboard-default.html">
	<link rel="shortcut icon" href="img/favicon.ico">

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&amp;display=swap" rel="stylesheet">
	<link class="js-stylesheet" href="https://appstack.bootlab.io/css/light.css" rel="stylesheet">
	
</head>
<style>
.btn_delete{
	float:right;
	border: none;
    background: red;
    color: white;
	border-radius:5px;
	width:20px;
	display: flex;
    align-items: center;
    justify-content: center;
}
.wrapper2{
	width:225%;
	display: flex;
    flex-direction: row;
}
.margin{
	height:60px;
}
.btn2{
	border: none;
    background:#3f80ea;
    color: white;
}
.mysqli_true{
	color:green;
	font-family: Helvetica,Arial,sans-serif;
	text-align:center;
}
.mysqli_false{
	color:green;
}

</style>

<body>
	<div class="wrapper">
	<?php 
			include "../includes/site_bar.php"
			
		?>
		<div class="main">
			
			<main class="content">
				<div>
					<div class="row">
						<div class="col-12 col-xl-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Basic form</h5>
									<h6 class="card-subtitle text-muted"></h6>
									
								</div>
								<?php
									if(isset($_POST['title_ru'])){
											//test 
											$time = time(); // 1977 - now time
											$random = mt_rand(10000,99999);
											$new_name = md5( $time.$random ); 
											$exp = explode('.',$_FILES['image']['name']);   // 123.jpg to [ 123 , jpg ]
											$format = $exp[1];
								
											$img_name = $new_name.'.'.$format;
											$upload = move_uploaded_file( $_FILES['image']['tmp_name'] , '../assets/img/categories/'.$img_name);
										$mysqli_q = mysqli_query($c,"INSERT INTO `categories`( `title_ru`, `title_kz`,`image`) 
											VALUES ('$_POST[title_ru]','$_POST[title_kz]','$img_name')");
									}
								?>
								<div class="card-body">
									<form method="post" enctype="multipart/form-data">
										<div class="form-group">
											<label class="form-label">Title-ru</label>
											<input type="text" class="form-control" placeholder="title" name="title_ru">
										</div>
										<div class="form-group">
											<label class="form-label">Title-kz</label>
											<input type="text" class="form-control" placeholder="title" name="title_kz"></textarea>
										</div>
										<div class="example-1">
											<div class="form-group">
												<label class="label">
													<i class="material-icons">выберите файл</i>
													<span class="title">Добавить файл</span>
													<input type="file" class="form-control" placeholder="title" name="image">
												</label>
											</div>
										</div>
										<button class="btn2">Отправить</button>
									</form>
								</div>

				<div class="margin"></div>
				<div class="wrapper2" style="width:100%">
					<div class="card flex-fill" style="width:100%">
						<div class="card-header">
							<div class="card-actions float-right">
								<div class="dropdown show">
									<a href="#" data-toggle="dropdown" data-display="static">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
											viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
											stroke-linecap="round" stroke-linejoin="round"
											class="feather feather-more-horizontal align-middle">
											<circle cx="12" cy="12" r="1"></circle>
											<circle cx="19" cy="12" r="1"></circle>
											<circle cx="5" cy="12" r="1"></circle>
										</svg>
									</a>

									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
									</div>
									
								</div>
							</div>
							<h5 class="card-title mb-0">categories</h5>
						</div>
						<div id="datatables-dashboard-projects_wrapper"
							class="dataTables_wrapper dt-bootstrap4 no-footer">
							<div class="row">
								<div class="col-sm-12 col-md-6"></div>
								<div class="col-sm-12 col-md-6"></div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div id="datatables-dashboard-projects_wrapper"
										class="dataTables_wrapper dt-bootstrap4 no-footer">
										<div class="row">
											<div class="col-sm-12 col-md-6"></div>
											<div class="col-sm-12 col-md-6"></div>
										</div>
										
										<div class="row">
											<div class="col-sm-12">
												<table id="datatables-dashboard-projects"
													class="table table-striped my-0 dataTable no-footer" >
													<thead>
														<tr role="row">
														<th class="d-none d-xl-table-cell sorting" tabindex="0"
																rowspan="1" colspan="1">
																</th>
															<th class="d-none d-xl-table-cell sorting" tabindex="0"
																aria-controls="datatables-dashboard-projects"
																rowspan="1" colspan="1"
																aria-label="End Date: activate to sort column ascending">
																Русский</th>
																<th class="d-none d-xl-table-cell sorting" tabindex="0"
																aria-controls="datatables-dashboard-projects"
																rowspan="1" colspan="1">
																Қазақ тілі</th>
														</tr>
													</thead>
													<!-- добавление строкаааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааа -->
													<tbody>
													
														<?php 
											
												$query = mysqli_query($c,"SELECT * FROM `categories`");
												
												while($fetch=mysqli_fetch_assoc($query)){
													echo "
													
													<tr role='row' class='odd'>
														<td class='d-none d-md-table-cell'>$i</td>	
														<td class='d-none d-md-table-cell'>$fetch[id]</td>											
														<td class='d-none d-md-table-cell'>$fetch[title_ru] </td>
                                                        
														<td class='d-none d-md-table-cell'>$fetch[title_kz] 
														
															<a class='btn_delete' href='?title_id=$fetch[id]'>-</a>
                                                            
														</td>
														<td class='d-none d-md-table-cell'>$img_name</td> 	
                                                        									
													</tr>
																																						
													";
													$i++;
												}

														?>
														</tbody>
													
												<?php 
												if(isset($_GET['title_id'])){
													mysqli_query($c,"DELETE FROM `categories` WHERE id='$_GET[title_id]'");
												}
												?>

												</table>
											</div>
										</div>
										<script src="js/app.js"></script>

										<div class="container-fluid">
											<div class="row text-muted">
												<div class="col-6 text-left">
												</div>
												<div class="col-6 text-right">
													<p class="mb-0">
														© 2021 - <a href="index.html" class="text-muted">LightStore</a>
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


			</main>

		</div>

	</div>


    


</body>

</html>



<?php
  
//   if(isset($_POST['title'])){
      
//       $time = time(); // 1977 - now time
//       $random = mt_rand(10000,99999);
//       $new_name = md5( $time.$random ); 
//       //160876843567123
//       //E^&7btgn23br7b8fn8oq7etbrfiwbut7roo1e3t26e
//       $exp = explode('.',$_FILES['photo']['name']);   // 123.jpg to [ 123 , jpg ]
//       $format = $exp[1];
//       //jpg
  
//       $img_name = $new_name.'.'.$format;
//       //E^&7btgn23br7b8fn8oq7etbrfiwbut7roo1e3t26e.jpg
//       $upload = move_uploaded_file( $_FILES['photo']['tmp_name'] , '../assets/img'.$img_name);
      
  
//       mysqli_query( $c , "INSERT INTO `categories`(`image`,`city_id`,`author_id`)
//       VALUES ('$img_name')");
  
//   }
  
  
  ?>
												