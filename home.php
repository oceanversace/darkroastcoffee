<?php 
	session_start();
	include('config.php');
	if( isset($_SESSION["login"]) ) {
    	header('Location: home-loggedin.php');
  	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title>Home HelloPet</title>

	<link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
	<link rel="icon" href="img/logo.png" type="image/x-icon">
</head>
<body>
	<header>
		<div class="main">
			<ul>
				<li><a href="home.php" class="active">Home</a></li>
				<li><a href="packages.php">Packages</a></li>
				<li><a href="aboutus.php">About Us</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				<li><a href="login-rev.php">Login</a></li>
			</ul>
		</div>
	</header>
	<div class="logo"></div>
	<form>
		<input class="search" type="text" placeholder="Search..."><input class="button" type="submit" value="Search">
	</form>	
	<div>
		<span class="maintext">Groomers are Ready to Your Home</span>
		<span class="maintext2">Instantly groom your pet safely and comfortably to be beauty</span>
		<a href="" class="btn btn-primary tombol">Book Now</a>

	
</body>
</html>