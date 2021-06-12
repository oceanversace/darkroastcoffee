<?php 
	session_start();
	include('config.php');
 ?>

<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<title> Safety HelloPet</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

	<link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
	<link rel="icon" href="img/logo.png" type="image/x-icon">
</head>
<style>
	#header-background{
		position: absolute;
		width: 1349px;
		height: 586px;
		left: 0px;
		top: 0px;
		background: url('img/dog.png');
	}
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
    
#search-box{
	position: absolute;
	width: 365.02px;
	height: 32px;
	left: 357px;
	top: 30.21px;
	border: none;
	background: rgba(0, 0, 0, 0.1);
	border-radius: 10px;
	padding: 10px;
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
/* container */
	 .container{
	 	position: absolute;
		width: 1156px;
		height: 806px;
		left: 101px;
		top: 265px;

		background: #FFFFFF;
		box-shadow: 0px 4px 32px rgba(170, 170, 170, 0.25);
		border-radius: 30px;
	 }
	 .safety{
	 	position: absolute;
		width: 107px;
		height: 34px;
		left: 520px;
		top: 60px;

		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 25px;
		line-height: 34px;
		letter-spacing: 0.12em;

		color: #000000;
	 }
	 #line-title{	 	
		position: absolute;
		width: 50px;
		height: 0px;
		left: 545px;
		top: 100px;

		border: 1px solid #000000;
	 }
	 #wash-logo{
	 	position: absolute;
		width: 128.19px;
		height: 121.53px;
		left: 90px;
		top: 170px;
	 }
	 .wash-detail{
	 	position: absolute;
		width: 282.02px;
		height: 68.06px;
		left: 240px;
		top: 210px;

		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		line-height: 19px;

		color: #000000;
	 }
	 #shoes-logo{
	 	position: absolute;
		width: 128.19px;
		height: 121.53px;
		left: 690px;
		top: 170px;
	 }
	 .shoes-detail{
	 	position: absolute;
		width: 152px;
		height: 26px;
		left: 840px;
		top: 220px;

		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		line-height: 19px;

		color: #000000;
	 }
	 #distance-logo{
	 	position: absolute;
		width: 128.19px;
		height: 121.53px;
		left: 90px;
		top: 400px;
	 }
	 .distance-detail{
	 	position: absolute;
		width: 282.02px;
		height: 68.06px;
		left: 240px;
		top: 448px;

		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		line-height: 19px;

		color: #000000;
	 }
	 #gloves-logo{
	 	position: absolute;
		width: 128.19px;
		height: 121.53px;
		left: 690px;
		top: 400px;
	 }
	 .gloves-detail{
	 	position: absolute;
		width: 282px;
		height: 26px;
		left: 840px;
		top: 448px;

		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		line-height: 19px;

		color: #000000;
	 }
	 #mask-logo{
	 	position: absolute;
		width: 128.19px;
		height: 121.53px;
		left: 90px;
		top: 630px;
	 }
	 .mask-detail{
	 	position: absolute;
		width: 282.02px;
		height: 68.06px;
		left: 240px;
		top: 678px;

		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		line-height: 19px;

		color: #000000;
	 }
	 #steril-logo{
	 	position: absolute;
		width: 128.19px;
		height: 121.53px;
		left: 690px;
		top: 630px;
	 }
	 .steril-detail{
	 	position: absolute;
		width: 282px;
		height: 26px;
		left: 840px;
		top: 673px;

		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		line-height: 19px;

		color: #000000;
	 }
	 #foot{
		position: absolute;
		width: 1349px;
		height: 144px;
		left: 0px;
		top: 1150px;
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
</style>
<body>
	<div class="header">
		<header id="header-background">
		<div class="logo"></div>
      	<input type="search" placeholder="  search..." id="search-box">
          <nav class="navbar navbar-expand-lg navbar-light">
			<div class="container">
					<div class="navbar-nav ml-auto">
						<a class="nav-item nav-link" href="home.php">Home</a>
					  <a class="nav-item nav-link" href="packages.php">Packages</a>
					  <a class="nav-item nav-link" href="aboutus.php">About Us <span class="sr-only"></span> </a>
					  <a class="nav-item nav-link" href="contactus.html">Contact Us</a>
					</div>
			</div>
		  </nav>
		</header>
	</div>
		<div>
			<button class="buttonprofile" id="buttonprofile" onclick="window.location.href='myprofile.php'"><img id="profile" src="img/profile.png"></img>
		</div>
	<div class="container">
		<span class="safety" id="safety" namae="safety">SAFETY</span>
		<div id="line-title"></div>
		<div class="safe1">
			<img id="wash-logo" src="img/Wash.png">
			<span class="wash-detail">Wash and sanitize hands before and after grooming</span>
		</div>
		<div class="safe2">
			<img id="shoes-logo" src="img/Shoes.png">
			<span class="shoes-detail">Wear shoe covers</span>
		</div>
		<div class="safe3">
			<img id="distance-logo" src="img/distance.png">
			<span class="distance-detail">Maintan social distance at all times</span>
		</div>
		<div class="safe4">
			<img id="gloves-logo" src="img/gloves.png">
			<span class="gloves-detail">Wear gloves while grooming</span>
		</div>
		<div class="safe5">
			<img id="mask-logo" src="img/Masker.png">
			<span class="mask-detail">Wear face mask</span>
		</div>
		<div class="safe6">
			<img id="steril-logo" src="img/Steril.png">
			<span class="steril-detail">Sanitize and clean grooming tools before and after service</span>
		</div>
	</div>
	<footer id="foot">
		<div>
			<span class="learn">LEARN MORE</span>
			<a class="cancel" href="cancel.php">Cancelation Policy</a>
			<a class="safe" href="safety.php">Safety</a>
			<div class="copyright">HelloPet, Depresso Ltd</div>
			<img href="#" id="copyright-logo" src="img/copyright.png">
			<div class="copyright2">2021, All Rights Reserved</div>
		</div>
	</footer>
</body>
</html>
