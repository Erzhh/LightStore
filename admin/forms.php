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

	<script src="js/settings.js"></script>
	<!-- END SETTINGS -->

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
														 mysqli_query($c,"INSERT INTO `city`( `title_ru`, `title_kz`) VALUES ('$_POST[title_ru]','$_POST[title_kz]')");
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
											<input type="text" class="form-control" placeholder="Қала" name="title_kz"></textarea>
										</div>
								</div>
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
							<h5 class="card-title mb-0">Cities</h5>
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
											
												$query = mysqli_query($c,"SELECT * FROM `city`");
												
												while($fetch=mysqli_fetch_assoc($query)){
													echo "
													
													<tr role='row' class='odd'>
														<td class='d-none d-md-table-cell'>$fetch[id]</td>												
														<td class='d-none d-md-table-cell'>$fetch[title_ru] </td>
														<td class='d-none d-md-table-cell'>$fetch[title_kz] 
															<a class='btn_delete' href='?title_id=$fetch[id]'>-</a>
														</td>														
													</tr>
																																						
													";
												}

														?>
													</tbody>
												<?php 
												if(isset($_GET['title_id'])){
													mysqli_query($c,"DELETE FROM `city` WHERE id='$_GET[title_id]'");
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
