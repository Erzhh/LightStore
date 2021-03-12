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
				<form method="POST">
					<div class="row">
						<div class="col-12 col-xl-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Basic form</h5>
									<h6 class="card-subtitle text-muted"></h6>
									
								</div>
								<?php

													if(isset($_POST['title_ru'])){

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
                                                                      $upload = move_uploaded_file( $_FILES['photo']['tmp_name'] , '../assets/img'.$img_name);


														$mysqli_q = mysqli_query($c,"INSERT INTO `categories`( `title_ru`, `title_kz`,`image`) VALUES ('$_POST[title_ru]','$_POST[title_kz]','$img_name')");

													// 		if($_POST['title_ru']==''){
													// 				echo "напишите что то";
													// 		 	}
													// 		 if(isset($mysqli_q)){
													// 		 	echo "<span class='mysqli_true'>Успешно отправленo!</span>";
													// 		 }	
														
													 }
													//  echo "INSERT INTO `categories`( `title_ru`, `title_kz`) VALUES ('$_POST[title_ru]','$_POST[title_kz]')";
													 
															
															
													
													?>
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
								<div class="card-body">
									<form method ="POST" enctype="multipart/form-data">
										
										<div class="form-group">
											<label class="form-label">Title-ru</label>
											<input type="text" class="form-control" placeholder="title" name="title_ru">
										</div>
										<div class="form-group">
											<label class="form-label">Title-kz</label>
											<input type="text" class="form-control" placeholder="title" name="title_kz"></textarea>
										</div>
								</div>
<!-- lfkfmkigmkifgnfikjfnjigjfnjkbjnfjkgmnfmkgmnmk -->
                     
                                <div class="example-1">
                                    <div class="form-group">
                                        <label class="label">
                                            <i class="material-icons">attach_file</i>
                                            <span class="title">Добавить файл</span>
                                            <input type="file" class="form-control" placeholder="title" name="image">
                                        </label>
                                    </div>
                                </div>

<!-- ndjcndjcvnfdjkfjvnfdjkfvjnfdjkfjnd -->
							</div>
							<button class="btn2">SEND</button>
							
				</form>
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
									<footer class="footer">
										
									</footer>
									<div class="notyf"></div>
									<div class="notyf-announcer" aria-atomic="true" aria-live="polite"
										style="border: 0px; clip: rect(0px, 0px, 0px, 0px); height: 1px; margin: -1px; overflow: hidden; padding: 0px; position: absolute; width: 1px; outline: 0px;">
									</div>
									<div class="settings js-settings">
										<div class="settings-toggle">
											<div class="settings-toggle-option settings-toggle-option-text js-settings-toggle"
												title="Theme Builder">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none" stroke="currentColor"
													stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
													class="feather feather-sliders align-middle">
													<line x1="4" y1="21" x2="4" y2="14"></line>
													<line x1="4" y1="10" x2="4" y2="3"></line>
													<line x1="12" y1="21" x2="12" y2="12"></line>
													<line x1="12" y1="8" x2="12" y2="3"></line>
													<line x1="20" y1="21" x2="20" y2="16"></line>
													<line x1="20" y1="12" x2="20" y2="3"></line>
													<line x1="1" y1="14" x2="7" y2="14"></line>
													<line x1="9" y1="8" x2="15" y2="8"></line>
													<line x1="17" y1="16" x2="23" y2="16"></line>
												</svg>
												Builder
											</div>
											<a class="settings-toggle-option" title="Documentation"
												href="docs-introduction.html" target="_blank">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none" stroke="currentColor"
													stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
													class="feather feather-book-open align-middle">
													<path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
													<path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
												</svg>
											</a>
										</div>

										<div class="settings-panel">
											<div class="settings-content">
												<div class="settings-title">
													<button type="button" class="close float-right js-settings-toggle"
														aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>

													<h4 class="mb-0 d-inline-block">Theme Builder</h4>
												</div>

												<div class="settings-body">

													<div class="alert alert-primary" role="alert">
														<div class="alert-message">
															<strong>Hey there!</strong> Set your own customized style
															below.
															Choose the ones that best fits your needs.
														</div>
													</div>

													<div class="mb-3">
														<span class="d-block font-size-lg font-weight-bold">Color
															scheme</span>
														<span class="d-block text-muted mb-2">The perfect color mode for
															your app.</span>

														<div class="row no-gutters text-center mx-n1 mb-2">
															<div class="col">
																<label class="mx-1 d-block mb-1">
																	<input class="settings-scheme-label" type="radio"
																		name="theme" value="default">
																	<div class="settings-scheme">
																		<div
																			class="settings-scheme-theme settings-scheme-theme-default">
																		</div>
																	</div>
																</label>
																Default
															</div>
															<div class="col">
																<label class="mx-1 d-block mb-1">
																	<input class="settings-scheme-label" type="radio"
																		name="theme" value="colored">
																	<div class="settings-scheme">
																		<div
																			class="settings-scheme-theme settings-scheme-theme-colored">
																		</div>
																	</div>
																</label>
																Colored
															</div>
														</div>
														<div class="row no-gutters text-center mx-n1">
															<div class="col">
																<label class="mx-1 d-block mb-1">
																	<input class="settings-scheme-label" type="radio"
																		name="theme" value="dark">
																	<div class="settings-scheme">
																		<div
																			class="settings-scheme-theme settings-scheme-theme-dark">
																		</div>
																	</div>
																</label>
																Dark
															</div>
															<div class="col">
																<label class="mx-1 d-block mb-1">
																	<input class="settings-scheme-label" type="radio"
																		name="theme" value="light">
																	<div class="settings-scheme">
																		<div
																			class="settings-scheme-theme settings-scheme-theme-light">
																		</div>
																	</div>
																</label>
																Light
															</div>
														</div>
													</div>

													<hr>

													<div class="mb-3">
														<span class="d-block font-size-lg font-weight-bold">Sidebar
															position</span>
														<span class="d-block text-muted mb-2">Toggle the position of the
															sidebar.</span>

														<div>
															<label>
																<input class="settings-button-label" type="radio"
																	name="sidebarPosition" value="left">
																<div class="settings-button">
																	Left
																</div>
															</label>
															<label>
																<input class="settings-button-label" type="radio"
																	name="sidebarPosition" value="right">
																<div class="settings-button">
																	Right
																</div>
															</label>
														</div>
													</div>

													<hr>

													<div class="mb-3">
														<span class="d-block font-size-lg font-weight-bold">Sidebar
															behavior</span>
														<span class="d-block text-muted mb-2">Change the behavior of the
															sidebar.</span>

														<div>
															<label>
																<input class="settings-button-label" type="radio"
																	name="sidebarBehavior" value="sticky">
																<div class="settings-button">
																	Sticky
																</div>
															</label>
															<label>
																<input class="settings-button-label" type="radio"
																	name="sidebarBehavior" value="fixed">
																<div class="settings-button">
																	Fixed
																</div>
															</label>
															<label>
																<input class="settings-button-label" type="radio"
																	name="sidebarBehavior" value="compact">
																<div class="settings-button">
																	Compact
																</div>
															</label>
														</div>
													</div>

													<hr>

													<div class="mb-3">
														<span
															class="d-block font-size-lg font-weight-bold">Layout</span>
														<span class="d-block text-muted mb-2">Toggle container layout
															system.</span>

														<div>
															<label>
																<input class="settings-button-label" type="radio"
																	name="layout" value="fluid">
																<div class="settings-button">
																	Fluid
																</div>
															</label>
															<label>
																<input class="settings-button-label" type="radio"
																	name="layout" value="boxed">
																<div class="settings-button">
																	Boxed
																</div>
															</label>
														</div>
													</div>

												</div>

												<div class="settings-footer">
													<a class="btn btn-primary btn-lg btn-block"
														href="https://themes.getbootstrap.com/product/appstack-responsive-admin-template/"
														target="_blank">Purchase</a>
												</div>

											</div>
										</div>
									</div><svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg"
										version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
										xmlns:svgjs="http://svgjs.com/svgjs"
										style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
										<defs id="SvgjsDefs1002"></defs>
										<polyline id="SvgjsPolyline1003" points="0,0"></polyline>
										<path id="SvgjsPath1004" d="M0 0 "></path>
									</svg>
									<div id="datatables-dashboard-projects_wrapper"
										class="dataTables_wrapper dt-bootstrap4 no-footer">
										<div class="row">
											<div class="col-sm-12 col-md-6"></div>
											<div class="col-sm-12 col-md-6"></div>
										</div>
										
										<div class="row">
											<div class="col-sm-12">
												<table id="datatables-dashboard-projects"
													class="table table-striped my-0 dataTable no-footer" role="grid"
													aria-describedby="datatables-dashboard-projects_info">
													<thead>
														<tr role="row">
														<th class="d-none d-xl-table-cell sorting" tabindex="0"
																aria-controls="datatables-dashboard-projects"
																rowspan="1" colspan="1"
																aria-label="Start Date: activate to sort column ascending">
																</th>
															<th class="d-none d-xl-table-cell sorting" tabindex="0"
																aria-controls="datatables-dashboard-projects"
																rowspan="1" colspan="1"
																aria-label="End Date: activate to sort column ascending">
																Русский</th>
																<th class="d-none d-xl-table-cell sorting" tabindex="0"
																aria-controls="datatables-dashboard-projects"
																rowspan="1" colspan="1"
																aria-label="Start Date: activate to sort column ascending">
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
                                                        <td class='d-none d-md-table-cell'>$img_name</td>
														<td class='d-none d-md-table-cell'>$fetch[title_kz] 
															<a class='btn_delete' href='?title_id=$fetch[id]'>-</a>
                                                            
														</td>
                                                        														
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
													<script src="js/app.js"></script>
													<script>
														document.addEventListener("DOMContentLoaded", function () {
															// Bar chart
															new Chart(document.getElementById("chartjs-dashboard-bar"), {
																type: "bar",
																data: {
																	labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct",
																		"Nov", "Dec"
																	],
																	datasets: [{
																		label: "Last year",
																		backgroundColor: window.theme.primary,
																		borderColor: window.theme.primary,
																		hoverBackgroundColor: window.theme.primary,
																		hoverBorderColor: window.theme.primary,
																		data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
																		barPercentage: .325,
																		categoryPercentage: .5
																	}, {
																		label: "This year",
																		backgroundColor: window.theme["primary-light"],
																		borderColor: window.theme["primary-light"],
																		hoverBackgroundColor: window.theme["primary-light"],
																		hoverBorderColor: window.theme["primary-light"],
																		data: [69, 66, 24, 48, 52, 51, 44, 53, 62, 79, 51, 68],
																		barPercentage: .325,
																		categoryPercentage: .5
																	}]
																},
																options: {
																	maintainAspectRatio: false,
																	cornerRadius: 15,
																	legend: {
																		display: false
																	},
																	scales: {
																		yAxes: [{
																			gridLines: {
																				display: false
																			},
																			stacked: false,
																			ticks: {
																				stepSize: 20
																			},
																			stacked: true,
																		}],
																		xAxes: [{
																			stacked: false,
																			gridLines: {
																				color: "transparent"
																			},
																			stacked: true,
																		}]
																	}
																}
															});
														});
													</script>
													<script>
														document.addEventListener("DOMContentLoaded", function () {
															$("#datetimepicker-dashboard").datetimepicker({
																inline: true,
																sideBySide: false,
																format: "L"
															});
														});
													</script>
													<script>
														document.addEventListener("DOMContentLoaded", function () {
															// Pie chart
															new Chart(document.getElementById("chartjs-dashboard-pie"), {
																type: "pie",
																data: {
																	labels: ["Direct", "Affiliate", "E-mail", "Other"],
																	datasets: [{
																		data: [2602, 1253, 541, 1465],
																		backgroundColor: [
																			window.theme.primary,
																			window.theme.warning,
																			window.theme.danger,
																			"#E8EAED"
																		],
																		borderWidth: 5,
																		borderColor: window.theme.white
																	}]
																},
																options: {
																	responsive: !window.MSInputMethodContext,
																	maintainAspectRatio: false,
																	cutoutPercentage: 70,
																	legend: {
																		display: false
																	}
																}
															});
														});
													</script>
													<script>
														document.addEventListener("DOMContentLoaded", function () {
															$("#datatables-dashboard-projects").DataTable({
																pageLength: 6,
																lengthChange: false,
																bFilter: false,
																autoWidth: false
															});
														});
													</script>



												</table>
											</div>
										</div>
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
												