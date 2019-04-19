<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Pike Admin PRO</title>
		<meta name="description" content="Bootstrap 4 Admin Theme | Pike Admin">
		<meta name="author" content="Pike Web Development - https://www.pikephp.com">

		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">

		<!-- Switchery css -->
		<link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" />
		
		<!-- Bootstrap CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		
		<!-- Font Awesome CSS -->
		<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		
		<!-- Custom CSS -->
		<link href="assets/css/style.css" rel="stylesheet" type="text/css" />		
		
		<!-- BEGIN CSS for this page -->

		<!-- END CSS for this page -->
				
</head>

<body class="adminbody">

<div id="main">

	<!-- top bar navigation -->
	<div class="headerbar">

		<!-- LOGO -->
        <div class="headerbar-left">
			<a href="index.html" class="logo"><img alt="logo" src="assets/images/logo.png" /> <span>Admin</span></a>
        </div>

        <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">

                        <li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/avatars/admin.png" alt="Profile image" class="avatar-rounded">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Hello, <?php echo $_SESSION['username']; ?></small> </h5>
                                </div>

                                <!-- item-->
                                <a href="pro-profile.php" class="dropdown-item notify-item">
                                    <i class="fa fa-user"></i> <span>Profile</span>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
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
                        <a class="active" href="charts.html"><i class="fa fa-fw fa-area-chart"></i><span> Charts </span> </a>
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
												<h1 class="main-title float-left">My Profile</h1>
												<ol class="breadcrumb float-right">
													<li class="breadcrumb-item">Home</li>
													<li class="breadcrumb-item active">Profile</li>
												</ol>
												<div class="clearfix"></div>
										</div>
								</div>
						</div>
						<!-- end row -->

							
							
						<div class="row">
							
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">						
										<div class="card mb-3">
											<div class="card-header">
												<h3><i class="fa fa-user"></i> Profile details</h3>								
											</div>
												
											<div class="card-body">
												
												
												<form action="#" method="post" enctype="multipart/form-data">
								
												<div class="row">	
												
												<div class="col-lg-9 col-xl-9">
													
													<div class="row">				
														<div class="col-lg-6">
														<div class="form-group">
														<label>Full name (required)</label>
														<input class="form-control" name="name" type="text" value="<?php $_SESSION['username']; ?>" required />
														</div>
														</div>

														<div class="col-lg-6">
														<div class="form-group">
														<label>Valid Email (required)</label>
														<input class="form-control" name="email" type="email" value="office@website.com" required />
														</div>
														</div>  
													</div>
													
													<div class="row">				
														<div class="col-lg-6">
														<div class="form-group">
														<label>Password (leave empty not to change)</label>
														<input class="form-control" name="password" type="password" value="" />
														</div>
														</div>              			                                
														
														<div class="col-lg-6">
														<div class="form-group">
														<label>Skype</label>
														<input class="form-control" name="skype" type="text" value="skypeid" />
														</div>
														</div>   
													</div>
													
													<div class="row">
														<div class="col-lg-12">
														<button type="button" class="btn btn-primary">Edit profile</button>
														</div>
													</div>
												
												</div>
												
												
												
												<div class="col-lg-3 col-xl-3 border-left">
													<b>Latest activity</b>: Dec 06 2017, 22:23	
													<br />
													<b>Register date: </b>: Nov 24 2017, 20:32	
													<br />
													<b>Register IP: </b>: 123.456.789
													
													<div class="m-b-10"></div>
													
													<div id="avatar_image">
														<img alt="image" style="max-width:100px; height:auto;" src="assets/images/avatars/admin.png" />
														<br />
														<i class="fa fa-trash-o fa-fw"></i> <a class="delete_image" href="#">Remove avatar</a>
																	
													</div>  
													<div id="image_deleted_text"></div>                      

													
													<div class="m-b-10"></div>
													
													<div class="form-group">
													<label>Change avatar</label> 
													<input type="file" name="image" class="form-control">
													</div>
													
												</div>
												</div>								
												
												</form>										
												
								</div>	
								<!-- end card-body -->								
									
							</div>
							<!-- end card -->					

						</div>
						<!-- end col -->	
															
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
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="assets/plugins/switchery/switchery.min.js"></script>

<!-- App js -->
<script src="assets/js/pikeadmin.js"></script>

<!-- BEGIN Java Script for this page -->

<!-- END Java Script for this page -->

</body>
</html>