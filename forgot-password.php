
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from doccure-html.dreamguystech.com/template/admin/forgot-password.php by HTTrack Website Copier/3.x [XR&CO'2017], Tue, 12 Jan 2021 13:07:14 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Doccure - Forgot Password</title>

		 <!-- Favicon -->
		 <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Fontawesome CSS -->
         <link rel="stylesheet" href="assets/css/font-awesome.min.css">
         <!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">

    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper login-body">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                    	<div class="login-left">
							<img class="img-fluid" src="assets/img/logo-white.png" alt="Logo">
                        </div>
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>Forgot Password?</h1>
								<p class="account-subtitle">Enter your email to get a password reset link</p>
								
								<!-- Form -->
								<form action="../../../external.php?link=https://doccure-html.dreamguystech.com/template/admin/login.php">
									<div class="form-group">
										<input class="form-control" type="text" placeholder="Email">
									</div>
									<div class="form-group mb-0">
										<button class="btn btn-primary btn-block" type="submit">Reset Password</button>
									</div>
								</form>
								<!-- /Form -->
								
								<div class="text-center dont-have">Remember your password? <a href="login.php">Login</a></div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
			<?php include("include/footer.php"); ?>