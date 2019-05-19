<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Admin Ajarin</title>
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
	<!-- The core Firebase JS SDK is always required and must be listed first -->
	<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase-app.js"></script>

	<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->
    <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase-auth.js"></script>
	<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase-firestore.js"></script>
<script>
	// Your web app's Firebase configuration
	var firebaseConfig = {
	apiKey: "AIzaSyAP_lJoCoBzIyiiM58yU76JOHzUxKa_wwE",
	authDomain: "ajarin-f515.firebaseapp.com",
	databaseURL: "https://ajarin-f515.firebaseio.com",
	projectId: "ajarin-f515",
	storageBucket: "ajarin-f515.appspot.com",
	messagingSenderId: "670749567079",
	appId: "1:670749567079:web:47f5ed922a2f33ae"
	};
	// Initialize Firebase
	firebase.initializeApp(firebaseConfig);

	let db = firebase.firestore();
	let totalGuru = 0;
	let totalMurid = 0;
	let totalPesan = 0;
	let totalMapel1 = 0;
	let totalMapel2 = 0;
	let totalMapel3 = 0;
	let totalMapel4 = 0;
	let totalMapel5 = 0;
	let totalMapel6 = 0;

	db.collection("orders").get().then(function(querySnapshot){
  		querySnapshot.forEach(function(doc){
  			totalPesan++;
  		});
  			document.getElementById('J_pesan').innerHTML = totalPesan;
	});

	db.collection("users").where("profession", "==", "Guru").get().then(function(querySnapshot) {
	    querySnapshot.forEach(function(doc) {
	        totalGuru++;
	    });
	        document.getElementById('J_guru').innerHTML = totalGuru;
	});

	db.collection("users").where("profession", "==", "Murid").get().then(function(querySnapshot){
  		querySnapshot.forEach(function(doc){
  			totalMurid++;
  		});
  			document.getElementById('J_murid').innerHTML = totalMurid;
	});


	db.collection("orders").where("subjects", "array-contains", "MTK").get().then(function(querySnapshot) {
	    querySnapshot.forEach(function(doc) {
	    	totalMapel1++;
	    });
	    	document.getElementById('mtk').innerHTML = totalMapel1;
	    	// console.log(totalMapel1);
	});

	db.collection("orders").where("subjects", "array-contains", "PKN").get().then(function(querySnapshot) {
	    querySnapshot.forEach(function(doc) {
	    	totalMapel2++;
	    });
	    	document.getElementById('pkn').innerHTML = totalMapel2;
	    	// console.log(totalMapel2);
	});

	db.collection("orders").where("subjects", "array-contains", "IPS").get().then(function(querySnapshot) {
	    querySnapshot.forEach(function(doc) {
	    	totalMapel3++;
	    });
	    	document.getElementById('ips').innerHTML = totalMapel3;
	    	// console.log(totalMapel3);
	});

	db.collection("orders").where("subjects", "array-contains", "IPA").get().then(function(querySnapshot) {
	    querySnapshot.forEach(function(doc) {
	    	totalMapel4++;
	    });
	    	document.getElementById('ipa').innerHTML = totalMapel4;
	    	// console.log(totalMapel4);
	});

	db.collection("orders").where("subjects", "array-contains", "Inggris").get().then(function(querySnapshot) {
	    querySnapshot.forEach(function(doc) {
	    	totalMapel5++;
	    });
	    	document.getElementById('bin').innerHTML = totalMapel5;
	    	// console.log(totalMapel5);
	});

	db.collection("orders").where("subjects", "array-contains", "Sejarah").get().then(function(querySnapshot) {
	    querySnapshot.forEach(function(doc) {
	    	totalMapel6++;
	    });
	    	document.getElementById('sej').innerHTML = totalMapel6;
	    	// console.log(totalMapel6);
	});
</script>

<script src="function.js"></script>
		
<body class="adminbody"><div id="main">

<div id="mtk"></div>
<div id="ipa"></div>
<div id="ips"></div>
<div id="pkn"></div>
<div id="sej"></div>
<div id="bin"></div>
	<!-- top bar navigation -->
	<div class="headerbar">

		<!-- LOGO -->
        <div class="headerbar-left">
			<a href="index.php" class="logo"><img alt="Logo" src="assets/images/logo.png" /> <span>Ajarin</span></a>
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
                        <a class="active" href="#"><i class="fa fa-fw fa-bars"></i><span> Dashboard </span> </a>
                    </li>

                    <li class="submenu">
                        <a href="charts.php"><i class="fa fa-fw fa-area-chart"></i><span> Charts </span> </a>
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
													<h1 class="main-title float-left">Dashboard</h1>
													<ol class="breadcrumb float-right">
														<li class="breadcrumb-item">Home</li>
														<li class="breadcrumb-item active">Dashboard</li>
													</ol>
													<div class="clearfix"></div>
											</div>
									</div>
						</div>
						<!-- end row -->
						
							<div class="row">
									<div class="col-xs-12 col-md-6 col-lg-6 col-xl-4">
											<div class="card-box noradius noborder bg-default">
													<i class="fa fa-file-text-o float-right text-white"></i>
													<h6 class="text-white text-uppercase m-b-20">Pemesanan</h6>
													<h1 class="m-b-20 text-white counter" id="J_pesan"></h1>
													<span class="text-white">&nbsp;</span>
											</div>
									</div>

									<div class="col-xs-12 col-md-6 col-lg-6 col-xl-4">
											<div class="card-box noradius noborder bg-warning">
													<i class="fa fa-bar-chart float-right text-white"></i>
													<h6 class="text-white text-uppercase m-b-20">Guru</h6>
													<h1 class="m-b-20 text-white counter" id="J_guru"></h1>
													<span class="text-white">&nbsp;</span>
											</div>
									</div>

									<div class="col-xs-12 col-md-6 col-lg-6 col-xl-4">
											<div class="card-box noradius noborder bg-info">
													<i class="fa fa-user-o float-right text-white"></i>
													<h6 class="text-white text-uppercase m-b-20">Murid</h6>
													<h1 class="m-b-20 text-white counter" id="J_murid"></h1>
													<span class="text-white">&nbsp;</span>
											</div>
									</div>
									</div>
							</div>
							<!-- end row -->


							
							<div class="row">
							
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">						
										<div class="card mb-3">
											<div class="card-header">
												<h3><i class="fa fa-line-chart"></i> Tingkat Pemesanan</h3>
												Laporan banyaknya Pemesanan.
											</div>
												
											<div class="card-body">
												<canvas id="lineChart"></canvas>
											</div>							
											<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
										</div><!-- end card-->					
									</div>

									<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">						
										<div class="card mb-3">
											<div class="card-header">
												<h3><i class="fa fa-bar-chart-o"></i> Matapelajaran Yang Sering Dipesan</h3>
												Grafik mata pelajaran yang paling banyak dipesan.
											</div>
												
											<div class="card-body">
												<canvas id="pieChart"></canvas>
											</div>
											<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
										</div><!-- end card-->					
									</div>
									
									<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">						
										<div class="card mb-3">
											<div class="card-header">
												<h3><i class="fa fa-bar-chart-o"></i> Matapelajaran Yang Kurang Diminati</h3>
												Grafik mata pelajaran yang tidak kurang disukai.
											</div>
												
											<div class="card-body">
												<canvas id="doughnutChart"></canvas>
											</div>
											<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
										</div><!-- end card-->					
									</div>
									
							</div>
							<!-- end row -->
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
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

	<!-- Counter-Up-->
	<script src="assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
	<script src="assets/plugins/counterup/jquery.counterup.min.js"></script>

	<script>
		$(document).ready(function() {
			// data-tables
			$('#example1').DataTable();
					
			// counter-up
			$('.counter').counterUp({
				delay: 10,
				time: 600
			});
		} );		
	</script>
	
	<script>
	var ctx1 = document.getElementById("lineChart").getContext('2d');
	var lineChart = new Chart(ctx1, {
		type: 'bar',
		data: {
			labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
			datasets: [{
					label: 'Online',
					backgroundColor: '#3EB9DC',
					data: [5, 14, 6, 7, 13, 9, 13, 16, 11, 8, 12, 9] 
				}, {
					label: 'Offline',
					backgroundColor: '#EBEFF3',
					data: [12, 14, 6, 7, 13, 6, 13, 16, 10, 8, 11, 12]
				}]
				
		},
		options: {
						tooltips: {
							mode: 'index',
							intersect: false
						},
						responsive: true,
						scales: {
							xAxes: [{
								stacked: true,
							}],
							yAxes: [{
								stacked: true
							}]
						}
					}
	});


	var ctx2 = document.getElementById("pieChart").getContext('2d');
	var pieChart = new Chart(ctx2, {
		type: 'pie',
		data: {
				datasets: [{
					data: [
					Number(document.getElementById('mtk').innerHTML),
					Number(document.getElementById('pkn').innerHTML),
					Number(document.getElementById('ips').innerHTML),
					Number(document.getElementById('ipa').innerHTML),
					Number(document.getElementById('bin').innerHTML),
					Number(document.getElementById('sej').innerHTML)
					],
					backgroundColor: [
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)'
					],
					label: 'Mata Pelajaran'
				}],
				labels: [
					"Matematika",
					"PKN",
					"IPS",
					"IPA",
                    "Bahasa Inggris",
                    "Sejarah"
				]
			},
			options: {
				responsive: true
			}
	 
	});


	var ctx3 = document.getElementById("doughnutChart").getContext('2d');
	var doughnutChart = new Chart(ctx3, {
		type: 'doughnut',
		data: {
				datasets: [{
					data: [6, 10, 5, 4, 7, 5],
                    backgroundColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    label: 'Mata Pelajaran'
                }],
                labels: [
                    "Bahasa Indonesia",
                    "Matematika",
                    "PKN",
                    "IPS",
                    "IPA",
                    "Bahasa Inggris"
                ]
			},
			options: {
				responsive: true
			}
	 
	});
	</script>
<!-- END Java Script for this page -->

</body>
</html>