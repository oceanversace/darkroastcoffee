<?php 
	session_start();
	include('config.php');
	if( !isset($_SESSION["login"]) ) {
    	header('Location: home.php');
  	}

    $data = mysqli_query($conn, "SELECT * FROM feedback;");
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
	
	#foot{
	position: relative;
	width: 1349px;
	height: 144px;
	left: 0px;
	top: 790px;
	background: #C4C4C4;
	}
	.learn{
		width: 131px;
	  color: rgba(0,0,0,1);
	  position: absolute;
	  top: 20px;
	  left: 80px;
	  font-family: Roboto;
	  font-weight: Regular;
	  font-size: 20px;
	  opacity: 1;
	  text-align: left;
	}
	.cancel{
		width: 150px;
	  color: rgba(0,0,0,1);
	  position: absolute;
	  top: 60px;
	  left: 80px;
	  font-family: Roboto;
	  font-weight: Regular;
	  font-size: 16px;
	  opacity: 1;
	  text-align: left;
	}
	.safe{
		width: 50px;
	  color: rgba(0,0,0,1);
	  position: absolute;
	  top: 90px;
	  left: 80px;
	  font-family: Roboto;
	  font-weight: Regular;
	  font-size: 16px;
	  opacity: 1;
	  text-align: left;
	}
	.copyright{
		position: absolute;
		width: 216.75px;
		height: 25.62px;
		left: 910px;
		top: 60px;

		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		line-height: 19px;

		color: #000000;
	 }
	 #copyright-logo{
	 	position: absolute;
		width: 23px;
		height: 23px;
		left: 1075px;
		top: 58px;
	 }
	 .copyright2{
	 	position: absolute;
		width: 204px;
		height: 25.62px;
		left: 1100px;
		top: 60px;

		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		line-height: 19px;

		color: #000000;

	 }
	 	.box{
		 	background:#F3F6F6;
			border-radius: 5px;
			padding: 20px;
			width: 378px;
			height: 217px;
			filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
		}
		#box1{
		position: absolute;
		left: 47px;
		top: 234px;
		}

		#box2{
		position: absolute;
		left: 48px;
		top: 499px;
		}

		#box3{
		position: absolute;
		left: 491px;
		top: 499px;
		}

		#box4{
		position: absolute;
		left: 929px;
		top: 499px;
		}

		#box5{
		position: absolute;
		left: 926px;
		top: 234px;
		}

		#box6{
		position: absolute;
		left: 490px;
		top: 234px;
		}
		.line{
			position: absolute;
			width: 145.03px;
			height: 0px;
			left: 603.98px;
			top: 160px;

			border: 1px solid #000000;
		}
		h2{
			font-family: Roboto;
			font-size: 25px;
			line-height: 29px;
			color: #000000;
		}
		.comment{
			width: 330px;
			height: 113px;

			font-family: Roboto;
			font-style: normal;
			font-weight: normal;
			font-size: 16px;
			line-height: 19px;
			text-align: justify;

			color: #000000;
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
	<div class="box" id="box1">
		<span class="iconify" data-inline="false" data-icon="gg:profile" style="color: #000; font-size: 33px;"></span>
		&nbsp Lee Min Ho
		<br><br>
		<p class="comment"> 10 out of 10! BEST PET GROOMING SERVICE EVER!!! My cats really beautiful...</p>
	</div>
	<br>
<div class="box" id="box2">
		<span class="iconify" data-inline="false" data-icon="gg:profile" style="color: #000; font-size: 33px;"></span>
		&nbsp Justin Bieber
		<br><br>
		<p class="comment"> Yahoo!!! AKAMARU LOVES IT! Incredible job, this is awesome. Highly recommend this groomer service!</p>
	</div>
	<br>
<br>
<div class="box" id="box3">
		<span class="iconify" data-inline="false" data-icon="gg:profile" style="color: #000; font-size: 33px;"></span>
		&nbsp Shahrukhan
		<br><br>
		<p class="comment"> Big thanks to HelloPet for taking such a great care of my dog, Bolt. I don’t have to worry about anything because HelloPet is really amazing.</p>
</div>
<br>
<div class="box" id="box4">
		<span class="iconify" data-inline="false" data-icon="gg:profile" style="color: #000; font-size: 33px;"></span>
		&nbsp Aldebaran
		<br><br>
		<p class="comment"> I’m doing everything by myself, but when I change into cat form? I told my student to call HelloPet as soon as possible. </p>
</div>
<br>
<div class="box" id="box5">
		<span class="iconify" data-inline="false" data-icon="gg:profile" style="color: #000; font-size: 33px;"></span>
		&nbsp Bae Suzy
		<br><br>
		<p class="comment"> I love it. They are doing a great job!  This is the best grooming facility I’ve been to. The staff really friendly, they’re knowledgeable too. The best thing is HelloPet have a good prices! Really recommended.</p>
</div>
<br>
<div class="box" id="box6">
		<span class="iconify" data-inline="false" data-icon="gg:profile" style="color: #000; font-size: 33px;"></span>
		&nbsp Kekeyi
		<br><br>
		<p class="comment"> Excellent, trustworthy, organized, and helpful.</p>
</div>
<br>
<footer id="foot">
		<div>
			<span class="learn">LEARN MORE</span>
			<a class="cancel" href="cancel.html">Cancelation Policy</a>
			<a class="safe" href="safety.html">Safety</a>
			<div class="copyright">HelloPet, Depresso Ltd</div>
			<img href="#" id="copyright-logo" src="img/copyright.png">
			<div class="copyright2">2021, All Rights Reserved</div>
		</div>
	</footer>
<script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
</body>
</html>

