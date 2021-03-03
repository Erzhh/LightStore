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
	<base href="https://appstack.bootlab.io">
	<title>Default Dashboard | AppStack - Admin &amp; Dashboard Template</title>

	<link rel="canonical" href="https://appstack.bootlab.io/dashboard-default.html" />
	<link rel="shortcut icon" href="img/favicon.ico">

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
	<link class="js-stylesheet" href="css/light.css" rel="stylesheet">
	<link href="admin_form.css" rel="stylesheet">
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
		<nav id="sidebar" class="sidebar">
			<div class="sidebar-content js-simplebar" data-simplebar="init">
				<div class="simplebar-wrapper" style="margin: 0px;">
					<div class="simplebar-height-auto-observer-wrapper">
						<div class="simplebar-height-auto-observer"></div>
					</div>
					<div class="simplebar-mask">
						<div class="simplebar-offset" style="right: 0px; bottom: 0px;">
							<div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
								<div class="simplebar-content" style="padding: 0px;">
									<a class="sidebar-brand" href="index.html">
										<svg version="1.1" xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px"
											height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20"
											xml:space="preserve">
											<path d="M19.4,4.1l-9-4C10.1,0,9.9,0,9.6,0.1l-9,4C0.2,4.2,0,4.6,0,5s0.2,0.8,0.6,0.9l9,4C9.7,10,9.9,10,10,10s0.3,0,0.4-0.1l9-4
              C19.8,5.8,20,5.4,20,5S19.8,4.2,19.4,4.1z"></path>
											<path d="M10,15c-0.1,0-0.3,0-0.4-0.1l-9-4c-0.5-0.2-0.7-0.8-0.5-1.3c0.2-0.5,0.8-0.7,1.3-0.5l8.6,3.8l8.6-3.8c0.5-0.2,1.1,0,1.3,0.5
              c0.2,0.5,0,1.1-0.5,1.3l-9,4C10.3,15,10.1,15,10,15z"></path>
											<path d="M10,20c-0.1,0-0.3,0-0.4-0.1l-9-4c-0.5-0.2-0.7-0.8-0.5-1.3c0.2-0.5,0.8-0.7,1.3-0.5l8.6,3.8l8.6-3.8c0.5-0.2,1.1,0,1.3,0.5
              c0.2,0.5,0,1.1-0.5,1.3l-9,4C10.3,20,10.1,20,10,20z"></path>
										</svg>

										<span class="align-middle mr-3">AppStack</span>
									</a>

									<ul class="sidebar-nav">
										<li class="sidebar-header">
											Pages
										</li>
										<li class="sidebar-item active">
											<a href="#dashboards" data-toggle="collapse" class="sidebar-link">
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
												</svg> <span class="align-middle">Dashboards</span>
												<span class="badge badge-sidebar-primary">5</span>
											</a>
											<ul id="dashboards" class="sidebar-dropdown list-unstyled collapse show"
												data-parent="#sidebar">
												<li class="sidebar-item active"><a class="sidebar-link"
														href="dashboard-default.html">Default</a></li>
												<li class="sidebar-item"><a class="sidebar-link"
														href="dashboard-analytics.html">Analytics</a></li>
												<li class="sidebar-item"><a class="sidebar-link"
														href="dashboard-saas.html">SaaS</a></li>
												<li class="sidebar-item"><a class="sidebar-link"
														href="dashboard-social.html">Social</a></li>
												<li class="sidebar-item"><a class="sidebar-link"
														href="dashboard-crypto.html">Crypto</a></li>
											</ul>
										</li>
										<li class="sidebar-item">
											<a href="#pages" data-toggle="collapse" class="sidebar-link collapsed">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none" stroke="currentColor"
													stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
													class="feather feather-layout align-middle">
													<rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
													<line x1="3" y1="9" x2="21" y2="9"></line>
													<line x1="9" y1="21" x2="9" y2="9"></line>
												</svg> <span class="align-middle">Pages</span>
											</a>
											<ul id="pages" class="sidebar-dropdown list-unstyled collapse "
												data-parent="#sidebar">
												<li class="sidebar-item"><a class="sidebar-link"
														href="pages-profile.html">Profile</a></li>
												<li class="sidebar-item"><a class="sidebar-link"
														href="pages-settings.html">Settings</a></li>
												<li class="sidebar-item"><a class="sidebar-link"
														href="pages-clients.html">Clients</a></li>
												<li class="sidebar-item">
													<a href="#projects" data-toggle="collapse"
														class="sidebar-link collapsed">
														Projects
													</a>
													<ul id="projects" class="sidebar-dropdown list-unstyled collapse">
														<li class="sidebar-item">
															<a class="sidebar-link"
																href="pages-projects-list.html">List</a>
														</li>
														<li class="sidebar-item">
															<a class="sidebar-link"
																href="pages-projects-detail.html">Detail <span
																	class="badge badge-sidebar-primary">New</span></a>
														</li>
													</ul>
												</li>
												<li class="sidebar-item"><a class="sidebar-link"
														href="pages-invoice.html">Invoice</a></li>
												<li class="sidebar-item"><a class="sidebar-link"
														href="pages-pricing.html">Pricing</a></li>
												<li class="sidebar-item"><a class="sidebar-link"
														href="pages-tasks.html">Tasks</a></li>
												<li class="sidebar-item"><a class="sidebar-link"
														href="pages-chat.html">Chat <span
															class="badge badge-sidebar-primary">New</span></a></li>
												<li class="sidebar-item"><a class="sidebar-link"
														href="pages-blank.html">Blank Page</a></li>
											</ul>
										</li>
										<li class="sidebar-item">
											<a href="#auth" data-toggle="collapse" class="sidebar-link collapsed">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none" stroke="currentColor"
													stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
													class="feather feather-users align-middle">
													<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
													<circle cx="9" cy="7" r="4"></circle>
													<path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
													<path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
												</svg> <span class="align-middle">Auth</span>
												<span class="badge badge-sidebar-secondary">Special</span>
											</a>
											<ul id="auth" class="sidebar-dropdown list-unstyled collapse "
												data-parent="#sidebar">
												<li class="sidebar-item"><a class="sidebar-link"
														href="pages-sign-in.html">Sign In</a></li>
												<li class="sidebar-item"><a class="sidebar-link"
														href="pages-sign-up.html">Sign Up</a></li>
												<li class="sidebar-item"><a class="sidebar-link"
														href="pages-reset-password.html">Reset Password</a></li>
												<li class="sidebar-item"><a class="sidebar-link"
														href="pages-404.html">404 Page</a></li>
												<li class="sidebar-item"><a class="sidebar-link"
														href="pages-500.html">500 Page</a></li>
											</ul>
										</li>
										<li class="sidebar-item">
											<a href="#documentation" data-toggle="collapse"
												class="sidebar-link collapsed">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none" stroke="currentColor"
													stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
													class="feather feather-book-open align-middle">
													<path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
													<path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
												</svg> <span class="align-middle">Documentation</span>
											</a>
											<ul id="documentation" class="sidebar-dropdown list-unstyled collapse "
												data-parent="#sidebar">
												<li class="sidebar-item"><a class="sidebar-link"
														href="docs-introduction.html">Introduction</a></li>
												<li class="sidebar-item"><a class="sidebar-link"
														href="docs-installation.html">Getting Started</a></li>
												<li class="sidebar-item"><a class="sidebar-link"
														href="docs-customization.html">Customization</a></li>
												<li class="sidebar-item"><a class="sidebar-link"
														href="docs-plugins.html">Plugins</a></li>
												<li class="sidebar-item"><a class="sidebar-link"
														href="docs-changelog.html">Changelog</a></li>
											</ul>
										</li>
										<li class="form_class"><a class="form_class" href="forms.php">Forms</a></li>
										<li class="sidebar-header">
											Tools &amp; Components
										</li>
										<li class="sidebar-item">
											<a href="#ui" data-toggle="collapse" class="sidebar-link collapsed">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none" stroke="currentColor"
													stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
													class="feather feather-grid align-middle">
													<rect x="3" y="3" width="7" height="7"></rect>
													<rect x="14" y="3" width="7" height="7"></rect>
													<rect x="14" y="14" width="7" height="7"></rect>
													<rect x="3" y="14" width="7" height="7"></rect>
												</svg> <span class="align-middle">UI Elements</span>
											</a>
											<ul id="ui" class="sidebar-dropdown list-unstyled collapse "
												data-parent="#sidebar">
												<li class="sidebar-item"><a class="sidebar-link"
														href="ui-alerts.html">Alerts</a></li>
												<li class="sidebar-item"><a class="sidebar-link"
														href="ui-buttons.html">Buttons</a></li>
												<li class="sidebar-item"><a class="sidebar-link"
														href="ui-cards.html">Cards</a></li>
												<li class="sidebar-item"><a class="sidebar-link"
														href="ui-carousel.html">Carousel</a></li>
												<li class="sidebar-item"><a class="sidebar-link"
														href="ui-embed-video.html">Embed Video</a></li>
												<li class="sidebar-item"><a class="sidebar-link"
														href="ui-general.html">General <span
															class="badge badge-sidebar-primary">10+</span></a></li>
												<li class="sidebar-item"><a class="sidebar-link"
														href="ui-grid.html">Grid</a></li>
												<li class="sidebar-item"><a class="sidebar-link"
														href="ui-modals.html">Modals</a></li>
												<li class="sidebar-item"><a class="sidebar-link"
														href="ui-tabs.html">Tabs</a></li>
												<li class="sidebar-item"><a class="sidebar-link"
														href="ui-typography.html">Typography</a></li>
											</ul>
										</li>
										<li class="sidebar-item">
											<a href="#icons" data-toggle="collapse" class="sidebar-link collapsed">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none" stroke="currentColor"
													stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
													class="feather feather-heart align-middle">
													<path
														d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
													</path>
												</svg> <span class="align-middle">Icons</span>
												<span class="badge badge-sidebar-primary">1500+</span>
											</a>
											<ul id="icons" class="sidebar-dropdown list-unstyled collapse "
												data-parent="#sidebar">
												<li class="sidebar-item"><a class="sidebar-link"
														href="icons-feather.html">Feather</a></li>
												<li class="sidebar-item"><a class="sidebar-link"
														href="icons-font-awesome.html">Font Awesome</a></li>
											</ul>
										</li>
										<li class="sidebar-item">
											<a href="#forms" data-toggle="collapse" class="sidebar-link collapsed">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none" stroke="currentColor"
													stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
													class="feather feather-check-square align-middle">
													<polyline points="9 11 12 14 22 4"></polyline>
													<path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11">
													</path>
												</svg> <span class="align-middle">Forms</span>
											</a>
											<ul id="forms" class="sidebar-dropdown list-unstyled collapse "
												data-parent="#sidebar">
												<li class="sidebar-item"><a class="sidebar-link"
														href="forms-layouts.html">Layouts</a></li>
												<li class="sidebar-item"><a class="sidebar-link"
														href="forms-basic-inputs.html">Basic Inputs</a></li>
												<li class="sidebar-item"><a class="sidebar-link"
														href="forms-input-groups.html">Input Groups</a></li>
											</ul>
										</li>
										<li class="sidebar-item">
											<a class="sidebar-link" href="tables-bootstrap.html">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none" stroke="currentColor"
													stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
													class="feather feather-list align-middle">
													<line x1="8" y1="6" x2="21" y2="6"></line>
													<line x1="8" y1="12" x2="21" y2="12"></line>
													<line x1="8" y1="18" x2="21" y2="18"></line>
													<line x1="3" y1="6" x2="3.01" y2="6"></line>
													<line x1="3" y1="12" x2="3.01" y2="12"></line>
													<line x1="3" y1="18" x2="3.01" y2="18"></line>
												</svg> <span class="align-middle">Tables</span>
											</a>
										</li>

										<li class="sidebar-header">
											Plugin &amp; Addons
										</li>
										<li class="sidebar-item">
											<a href="#form-plugins" data-toggle="collapse"
												class="sidebar-link collapsed">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none" stroke="currentColor"
													stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
													class="feather feather-check-square align-middle">
													<polyline points="9 11 12 14 22 4"></polyline>
													<path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11">
													</path>
												</svg> <span class="align-middle">Form Plugins</span>
											</a>
											<ul id="form-plugins" class="sidebar-dropdown list-unstyled collapse "
												data-parent="#sidebar">
												<li class="sidebar-item"><a class="sidebar-link"
														href="forms-advanced-inputs.html">Advanced Inputs</a></li>
												<li class="sidebar-item"><a class="sidebar-link"
														href="forms-editors.html">Editors</a></li>
												<li class="sidebar-item"><a class="sidebar-link"
														href="forms-validation.html">Validation</a></li>
												<li class="sidebar-item"><a class="sidebar-link"
														href="forms-wizard.html">Wizard</a></li>
											</ul>
										</li>
										<li class="sidebar-item">
											<a href="#datatables" data-toggle="collapse" class="sidebar-link collapsed">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none" stroke="currentColor"
													stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
													class="feather feather-list align-middle">
													<line x1="8" y1="6" x2="21" y2="6"></line>
													<line x1="8" y1="12" x2="21" y2="12"></line>
													<line x1="8" y1="18" x2="21" y2="18"></line>
													<line x1="3" y1="6" x2="3.01" y2="6"></line>
													<line x1="3" y1="12" x2="3.01" y2="12"></line>
													<line x1="3" y1="18" x2="3.01" y2="18"></line>
												</svg> <span class="align-middle">DataTables</span>
											</a>
											<ul id="datatables" class="sidebar-dropdown list-unstyled collapse "
												data-parent="#sidebar">
												<li class="sidebar-item"><a class="sidebar-link"
														href="tables-datatables-responsive.html">Responsive Table</a>
												</li>
												<li class="sidebar-item"><a class="sidebar-link"
														href="tables-datatables-buttons.html">Table with Buttons</a>
												</li>
												<li class="sidebar-item"><a class="sidebar-link"
														href="tables-datatables-column-search.html">Column Search</a>
												</li>
												<li class="sidebar-item"><a class="sidebar-link"
														href="tables-datatables-multi.html">Multi Selection</a></li>
												<li class="sidebar-item"><a class="sidebar-link"
														href="tables-datatables-ajax.html">Ajax Sourced Data</a></li>
											</ul>
										</li>

										<li class="sidebar-item">
											<a href="#charts" data-toggle="collapse" class="sidebar-link collapsed">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none" stroke="currentColor"
													stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
													class="feather feather-pie-chart align-middle">
													<path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
													<path d="M22 12A10 10 0 0 0 12 2v10z"></path>
												</svg> <span class="align-middle">Charts</span>
												<span class="badge badge-sidebar-primary">New</span>
											</a>
											<ul id="charts" class="sidebar-dropdown list-unstyled collapse "
												data-parent="#sidebar">
												<li class="sidebar-item"><a class="sidebar-link"
														href="charts-chartjs.html">Chart.js</a></li>
												<li class="sidebar-item"><a class="sidebar-link"
														href="charts-apexcharts.html">ApexCharts <span
															class="badge badge-sidebar-primary">New</span></a></li>
											</ul>
										</li>
										<li class="sidebar-item">
											<a class="sidebar-link" href="notifications.html">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none" stroke="currentColor"
													stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
													class="feather feather-bell align-middle">
													<path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
													<path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
												</svg> <span class="align-middle">Notifications</span>
											</a>
										</li>
										<li class="sidebar-item">
											<a href="#maps" data-toggle="collapse" class="sidebar-link collapsed">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none" stroke="currentColor"
													stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
													class="feather feather-map-pin align-middle">
													<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
													<circle cx="12" cy="10" r="3"></circle>
												</svg> <span class="align-middle">Maps</span>
											</a>
											<ul id="maps" class="sidebar-dropdown list-unstyled collapse "
												data-parent="#sidebar">
												<li class="sidebar-item"><a class="sidebar-link"
														href="maps-google.html">Google Maps</a></li>
												<li class="sidebar-item"><a class="sidebar-link"
														href="maps-vector.html">Vector Maps</a></li>
											</ul>
										</li>
										<li class="sidebar-item">
											<a class="sidebar-link" href="calendar.html">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none" stroke="currentColor"
													stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
													class="feather feather-calendar align-middle">
													<rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
													<line x1="16" y1="2" x2="16" y2="6"></line>
													<line x1="8" y1="2" x2="8" y2="6"></line>
													<line x1="3" y1="10" x2="21" y2="10"></line>
												</svg> <span class="align-middle">Calendar</span>
											</a>
										</li>
										<li class="sidebar-item">
											<a href="#multi" data-toggle="collapse" class="sidebar-link collapsed">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none" stroke="currentColor"
													stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
													class="feather feather-share-2 align-middle">
													<circle cx="18" cy="5" r="3"></circle>
													<circle cx="6" cy="12" r="3"></circle>
													<circle cx="18" cy="19" r="3"></circle>
													<line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
													<line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
												</svg> <span class="align-middle">Multi Level</span>
											</a>
											<ul id="multi" class="sidebar-dropdown list-unstyled collapse"
												data-parent="#sidebar">
												<li class="sidebar-item">
													<a href="#multi-2" data-toggle="collapse"
														class="sidebar-link collapsed">
														Two Levels
													</a>
													<ul id="multi-2" class="sidebar-dropdown list-unstyled collapse">
														<li class="sidebar-item">
															<a class="sidebar-link" href="#">Item 1</a>
															<a class="sidebar-link" href="#">Item 2</a>
														</li>
													</ul>
												</li>
												<li class="sidebar-item">
													<a href="#multi-3" data-toggle="collapse"
														class="sidebar-link collapsed">
														Three Levels
													</a>
													<ul id="multi-3" class="sidebar-dropdown list-unstyled collapse">
														<li class="sidebar-item">
															<a href="#multi-3-1" data-toggle="collapse"
																class="sidebar-link collapsed">
																Item 1
															</a>
															<ul id="multi-3-1"
																class="sidebar-dropdown list-unstyled collapse">
																<li class="sidebar-item">
																	<a class="sidebar-link" href="#">Item 1</a>
																	<a class="sidebar-link" href="#">Item 2</a>
																</li>
															</ul>
														</li>
														<li class="sidebar-item">
															<a class="sidebar-link" href="#">Item 2</a>
														</li>
													</ul>
												</li>
											</ul>
										</li>
									</ul>

									<div class="sidebar-cta">
										<div class="sidebar-cta-content">
											<strong class="d-inline-block mb-2">Monthly Sales Report</strong>
											<div class="mb-3 text-sm">
												Your monthly sales report is ready for download!
											</div>
											<a href="https://themes.getbootstrap.com/product/appstack-responsive-admin-template/"
												class="btn btn-primary btn-block" target="_blank">Download</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="simplebar-placeholder" style="width: auto; height: 1275px;"></div>
				</div>
				<div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
					<div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
				</div>
				<div class="simplebar-track simplebar-vertical" style="visibility: visible;">
					<div class="simplebar-scrollbar"
						style="height: 96px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
				</div>
			</div>
		</nav>

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
														$mysqli_q = mysqli_query($c,"INSERT INTO `city`( `title_ru`, `title_kz`) VALUES ('$_POST[title_ru]','$_POST[title_kz]')");

															// if($_POST['title_ru']==''){
															// 		echo "напишите что то";
															// 	}
															// if(isset($mysqli_q)){
															// 	echo "<span class='mysqli_true'>Успешно отправленo!</span>";
															// }	
														
													}
													 // echo "INSERT INTO `city`( `title_ru`, `title_kz`) VALUES ('$_POST[title_ru]','$_POST[title_kz]')";
													 
															
															
													
													?>
								<div class="card-body">
									<form>
										
										<div class="form-group">
											<label class="form-label">Title-ru</label>
											<textarea type="text" class="form-control" placeholder="title"
												name="title_ru"></textarea>
										</div>
										<div class="form-group">
											<label class="form-label">Title-kz</label>
											<textarea type="text" class="form-control" placeholder="title"
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
													<tbody>
													
														<?php 
											
												$query = mysqli_query($c,"SELECT * FROM `city`");
												
												while($fetch=mysqli_fetch_assoc($query)){
													echo "
													
													<tr role='row' class='odd'>
														<td class='d-none d-md-table-cell'>1</td>												
														<td class='d-none d-md-table-cell'>$fetch[title_ru] </td>
														<td class='d-none d-md-table-cell'>$fetch[title_kz] <a class='btn_delete' href='?$_GET[title_kz]'>-</a></td>														
													</tr>
																																						
													";
												}

														?>
													</tbody>
												<?php 
												if(isset($_GET['title_kz'])){
													$mysqli_q = mysqli_query($c,"DELETE FROM `city` WHERE id='$_GET[title_kz]'");
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
