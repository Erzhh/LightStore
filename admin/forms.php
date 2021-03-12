<?php include "../components/db.php"; ?>

<head>
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
	<!-- END SETTINGS -->

</head>

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
									<h5 class="card-title">Города</h5>
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
											<label class="form-label">Title-ru</label>
											<input type="text" class="form-control" placeholder="Город" name="title_ru">
										</div>
										<div class="form-group">
											<label class="form-label">Title-kz</label>
											<input type="text" class="form-control" placeholder="Қала"
												name="title_kz"></textarea>
										</div>
								</div>
							</div>
							<button class="btn2">SEND</button>

				</form>
				<div class="margin"></div>
				<div class="wrapper2" style="width:100%">
					<div class="card flex-fill" style="width:100%">
						<div class="card-header">
							<h5 class="card-title mb-0">Cities</h5>
						</div>
						<div id="datatables-dashboard-projects_wrapper"
							class="dataTables_wrapper dt-bootstrap4 no-footer">							
							<div class="row">
								<div class="col-sm-12">
									<form method="GET">
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
													<tbody>

														<?php 
												$i = 1;
												$query = mysqli_query($c,"SELECT * FROM `city`");												
												while($fetch=mysqli_fetch_assoc($query)){
													echo "		
																								
													<tr role='row' class='odd'>
														<td class='d-none d-md-table-cell'>$i</td>												
														<td class='d-none d-md-table-cell'>$fetch[title_ru] </td>
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
													mysqli_query($c,"DELETE FROM `city` WHERE id='$_GET[title_id]'");
												}
												?>
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
									</form>
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