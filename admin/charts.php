<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Pike Admin - Free Bootstrap 4 Admin Template</title>
		<meta name="description" content="Free Bootstrap 4 Admin Theme | Pike Admin">
		<meta name="author" content="Pike Web Development - https://www.pikephp.com">

		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">
		
		<!-- Bootstrap CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		
		<!-- Font Awesome CSS -->
		<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		
		<!-- Custom CSS -->
		<link href="assets/css/style.css" rel="stylesheet" type="text/css" />		
		
		<!-- BEGIN CSS for this page -->
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>
		<!-- END CSS for this page -->

</head>

	<!-- firebase -->
	<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>
	<script src="../firebase.js"></script>
	<script src="function.js"></script>
		
<body class="adminbody">
<div id="main">

	<!-- top bar navigation -->
	<div class="headerbar">

		<!-- LOGO -->
        <div class="headerbar-left">
			<a href="index.html" class="logo"><img alt="logo" src="assets/images/logo.png" /> <span>Ajarin</span></a>
        </div>

        <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">
                        <li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/avatars/admin.png" alt="Profile image" class="avatar-rounded">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small id="masuk"></small> </h5>
                                </div>

                                <!-- item-->
                                <a href="pro-profile.php" class="dropdown-item notify-item">
                                    <i class="fa fa-user"></i> <span>Profile</span>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item" onclick="logout()">
                                    <i class="fa fa-power-off"></i> <span>Logout</span>
                                </a>
                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left">
                                <i class="fa fa-fw fa-bars"></i>
                            </button>
                        </li>                        
                    </ul>

        </nav>

	</div>
	<!-- End Navigation -->
	
 
	<!-- Left Sidebar -->
	<div class="left main-sidebar">
	
		<div class="sidebar-inner leftscroll">

			<div id="sidebar-menu">
        
			<ul>

					<li class="submenu">
						<a href="index.php"><i class="fa fa-fw fa-bars"></i><span> Dashboard </span> </a>
                    </li>

					<li class="submenu">
                        <a class="active" href="#"><i class="fa fa-fw fa-area-chart"></i><span> Charts </span> </a>
                    </li>
					
            </ul>

            <div class="clearfix"></div>

			</div>
        
			<div class="clearfix"></div>

		</div>

	</div>
	<!-- End Sidebar -->

    <div class="content-page">
	
		<!-- Start content -->
        <div class="content">
            
			<div class="container-fluid">


							
					<div class="row">
							<div class="col-xl-12">
									<div class="breadcrumb-holder">
											<h1 class="main-title float-left">Charts</h1>
											<ol class="breadcrumb float-right">
												<li class="breadcrumb-item">Home</li>
												<li class="breadcrumb-item active">Charts</li>
											</ol>
											<div class="clearfix"></div>
									</div>
							</div>
					</div>
					<!-- end row -->

					
					<div class="row">
					
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">						
								<div class="card mb-3">
									<div class="card-header">
										<i class="fa fa-table"></i> Statistik Penerimaan
									</div>
										
									<div class="card-body">
										<canvas id="barChart"></canvas>
									</div>							
									<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
								</div><!-- end card-->					
							</div>
							
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">						
								<div class="card mb-3">
									<div class="card-header">
										<i class="fa fa-table"></i> Statistik Orderan
									</div>
										
									<div class="card-body">
										<canvas id="comboBarLineChart"></canvas>
									</div>							
									<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
								</div><!-- end card-->					
							</div>

					</div>
					
					
					<div class="row">
					
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">						
								<div class="card mb-3">
									<div class="card-header">
										<i class="fa fa-table"></i> Pie Chart
									</div>
										
									<div class="card-body">
										<canvas id="pieChart"></canvas>
									</div>
									<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
								</div>					
							</div>
							
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">						
								<div class="card mb-3">
									<div class="card-header">
										<i class="fa fa-table"></i> Doughnut Chart
									</div>
										
									<div class="card-body">
										<canvas id="doughnutChart"></canvas>
									</div>
									<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
								</div>					
							</div>
							
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">						
								<div class="card mb-3">
									<div class="card-header">
										<i class="fa fa-table"></i> Radar Chart
									</div>
										
									<div class="card-body">
										<canvas id="radarChart"></canvas>
									</div>
									<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
								</div>					
							</div>
							
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">						
								<div class="card mb-3">
									<div class="card-header">
										<i class="fa fa-table"></i> Polar Area Chart
									</div>
										
									<div class="card-body">
										<canvas id="polarAreaChart"></canvas>
									</div>
									<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
								</div>					
							</div>
							
					</div>
					<!-- end row -->
            </div>
			<!-- END container-fluid -->

		</div>
		<!-- END content -->

    </div>
	<!-- END content-page -->
    
	<footer class="footer">
		<span class="text-right">
		Copyright <a target="_blank" href="#">Your Website</a>
		</span>
		<span class="float-right">
		Powered by <a target="_blank" href="https://www.pikeadmin.com"><b>Pike Admin</b></a>
		</span>
	</footer>

</div>
<!-- END main -->

<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/moment.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>

<!-- App js -->
<script src="assets/js/pikeadmin.js"></script>

<!-- BEGIN Java Script for this page -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>


	<script>
	// barChart
	var ctx1 = document.getElementById("barChart").getContext('2d');
	var barChart = new Chart(ctx1, {
		type: 'bar',
		data: {
			labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
			datasets: [{
				label: 'Jumlah Penerimaan',
				data: [12, 19, 3, 5, 10, 5, 13, 17, 11, 8, 11, 9],
				backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)',
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)'				
				],
				borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)',
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
				],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});

	// comboBarLineChart
	var ctx2 = document.getElementById("comboBarLineChart").getContext('2d');
	var comboBarLineChart = new Chart(ctx2, {
		type: 'bar',
		data: {
			labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
			datasets: [{
					type: 'line',
					label: 'Orderan',
					borderColor: '#484c4f',
					borderWidth: 3,
					fill: false,
					data: [8, 12, 7, 5, 9, 3, 13, 17, 11, 8, 11, 9],
				}, {
					type: 'bar',
					label: 'Online',
					backgroundColor: '#FF6B8A',
					data: [10, 11, 7, 5, 9, 13, 10, 16, 7, 8, 12, 5],
					borderColor: 'white',
					borderWidth: 0
				}, {
					type: 'bar',
					label: 'Offline',
					backgroundColor: '#059BFF',
					data: [10, 11, 7, 5, 9, 13, 10, 16, 7, 8, 12, 5],
				}], 
				borderWidth: 1
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});	
			
	// pieChart
	var ctx3 = document.getElementById("pieChart").getContext('2d');
	var pieChart = new Chart(ctx3, {
		type: 'pie',
		data: {
				datasets: [{
					data: [12, 19, 3, 5, 2, 3],
					backgroundColor: [
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)'
					],
					label: 'Dataset 1'
				}],
				labels: [
					"Red",
					"Orange",
					"Yellow",
					"Green",
					"Blue"
				]
			},
			options: {
				responsive: true
			}
	 
	});

	// doughnutChart
	var ctx4 = document.getElementById("doughnutChart").getContext('2d');
	var doughnutChart = new Chart(ctx4, {
		type: 'doughnut',
		data: {
				datasets: [{
					data: [12, 19, 3, 5, 2, 3],
					backgroundColor: [
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)'
					],
					label: 'Dataset 1'
				}],
				labels: [
					"Red",
					"Orange",
					"Yellow",
					"Green",
					"Blue"
				]
			},
			options: {
				responsive: true
			}
	 
	});

	// radarChart
	var ctx5 = document.getElementById("radarChart").getContext('2d');
	var doughnutChart = new Chart(ctx5, {
		type: 'radar',
		data: {
				labels: [["Eating", "Dinner"], ["Drinking", "Water"], "Sleeping", ["Designing", "Graphics"], "Coding", "Running"],
				datasets: [{
					label: "My First dataset",
					backgroundColor: 'rgba(255, 99, 132, 0.2)',
					borderColor: 'rgba(255,99,132,1)',
					pointBackgroundColor: 'red',
					data: [12, 19, 13, 11, 19, 17]
				}, {
					label: "My Second dataset",
					backgroundColor: 'rgba(250, 80, 112, 0.3)',
					borderColor: 'rgba(54, 162, 235, 1)',
					pointBackgroundColor: 'blue',
					data: [15, 12, 14, 15, 9, 11]
				},]
			},
			options: {
				responsive: true
			}
	 
	});

	// polarAreaChart
	var ctx6 = document.getElementById("polarAreaChart").getContext('2d');
	var doughnutChart = new Chart(ctx6, {
		type: 'polarArea',
		data: {
			labels: ["Red","Green","Yellow","Grey","Blue"],
			datasets: [{
				label: "My First Dataset",
				data: [11,16,7,3,14],
				backgroundColor: ["rgb(255, 99, 132)","rgb(75, 192, 192)","rgb(255, 205, 86)","rgb(201, 203, 207)","rgb(54, 162, 235)"]
				}]
		}
	 
	});
	</script>
<!-- END Java Script for this page -->

</body>
</html>