<?php 
	session_start();
	include('config.php');
	if( !isset($_SESSION["login"]) ) {
    	header('Location: home.php');
  	}

    $data = mysqli_query($conn, "SELECT username, feedback FROM user, feedback WHERE user.id=cust_id;");
	
 ?>


<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<title>Review HelloPet</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
	<link rel="icon" href="img/logo.png" type="image/x-icon">
</head>
<style>
	/* Navbar */
	.logo{
		width: 211px;
		height: 51px;
		left: 20px;
		top: 20px;
		background: url("img/logo.png");
	  	background-repeat: no-repeat;
	  	background-position: center center;
	  	background-size: cover;
	  	opacity: 1;
	  	position: relative;
	  	overflow: hidden;
	}

	.nav-link {
	        margin-right: 35px;
	        margin-left: -5px;
	        margin-top: -34px;
	        font-family: century gothic;

	    }

	.nav-link:hover::after {
	        content: '';
	        display: block;
	        border-bottom: 3px solid #cc7897;
	        width: 50%;
	        margin: auto;
	        padding-bottom: 5px;
	        margin-bottom: -8px;
	        
	    }
	#profile {
	    position: absolute;
		width: 30px;
		height: 30px;
		right: 60px;
		top: 30px;
	}
	.buttonprofile {
		border: none;
		cursor: pointer;
		border-radius: 12px;
		  text-decoration: none;
		  transition: 0.6s;
	}
	 th{
	 		position: relative;
	 		left: 50px;
		 	background:#53B2F2;
			border-radius: 5px;
			filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
			font-family: Roboto;
			font-size: 16px;
			padding: 15px;
			text-align: center;
			color: #FFFFFF;
		}
		td{
			font-family: Roboto;
			font-size: 16px;
			padding: 30px;
			text-align: center;
			left: 50px;
			position: relative;
			background: #F3F6F6;
			filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
		}
		.line{
			position: absolute;
			width: 145.03px;
			height: 0px;
			left: 603.98px;
			top: 170px;

			border: 1px solid #000000;
		}
</style>

<body>
	<div class="header">
		<header id="header-background">
		<div class="logo"></div>
          	<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container">
					<div class="navbar-nav ml-auto">
					  <a class="nav-item nav-link" href="#">Home</a>
					  <a class="nav-item nav-link" href="#">Packages</a>
					  <a class="nav-item nav-link" href="#">About Us </a>
					  <a class="nav-item nav-link" href="#">Contact Us</a>
					</div>
			</div>
		 	</nav>
		</header>
	<br>
	<br>
		<center>
			<h2>WHAT THEY SAY ABOUT US</h2>
			<div class="line"></div>
		</center>
	<br>
	<br>
	<table style="width: 93%">
		<tr>
			<th style="width: 310px;">Username</td>
			<th style="width: 75%;">Review</td>
		</tr>
		<?php while( $res = mysqli_fetch_assoc($data) ) : ?>
			<tr>
				<td><?=$res['username'];?></td>
				<td><?=$res['feedback'];?></td>
			</tr>
		<?php endwhile; ?>
	</table>
	<br><br>
<script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
</body>
</html>
