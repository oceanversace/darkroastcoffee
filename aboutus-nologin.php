<?php 
	session_start();
	include('config.php');
	if( isset($_SESSION["login"]) ) {
    	header('Location: aboutus.php');
  	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<title>About Us HelloPet</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
	<link rel="icon" href="img/logo.png" type="image/x-icon">
</head>
<style>
#header-background{
	position: absolute;
	width: 1349px;
	height: 558px;
	left: 0px;
	top: 0px;
	background: url('img/abus.png');
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
        margin-right: 169px;
        margin-left: -141px;
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
    .signin{
 	position: absolute;
	width: 78px;
	height: 35px;
	right: 175px;
	top: 26px;
	color: #FFFFFF;
	background: #FD9EBD;
	border-radius: 12px;
	border: none;
	background: -webkit-linear-gradient(bottom, #bebebe 1%, #FD9EBD 10%);
	background: -moz-linear-gradient(bottom, #bebebe 1%, #FD9EBD 10%);
	background: linear-gradient(bottom, #bebebe 1%, #FD9EBD 10%);
	cursor: pointer;
    	font-family: century Gothic;
	font-style: bold;
 }
 .signup{
 	position: absolute;
	width: 78px;
	height: 35px;
	right: 57px;
	top: 26px;
	color: #FD9EBD;
	background: #FFFFFF;
	border-radius: 12px;
	border: #FD9EBD;
    	background: -webkit-linear-gradient(bottom, #f5d6e6 1%, #FFFFFF 10%);
	background: -moz-linear-gradient(bottom, #f5d6e6 1%, #FFFFFF 10%);
	background: linear-gradient(bottom, #f5d6e6 1%, #FFFFFF 10%);
	cursor: pointer;
    	font-family: century Gothic;
	font-style: bold;
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
 
#card{
	position: absolute;
	width: 1164px;
	height: 401px;
	left: 92px;
	top: 346px;

	background: #FFFFFF;
	box-shadow: 0px 4px 32px rgba(170, 170, 170, 0.25);
	border-radius: 30px;
}
.kucing{
  width: 606px;
  height: 377px;
  background: url("img/kucing.png");
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
  opacity: 1;
  position: absolute;
  top: 53px;
  left: 377px;
  overflow: hidden;
}
.title{
	position: absolute;
	width: 154.72px;
	height: 33.83px;
	top: 46px;
	left: 520px;
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
	width: 94.02px;
	height: 0px;
	left: 543px;
	top: 88px;

	border: 1px solid #000000;
}
.about{
	position: absolute;
	width: 871px;
	height: 213px;
	left: 150px;
	top: 120px;

	font-family: Roboto;
	font-style: normal;
	font-weight: normal;
	font-size: 16px;
	line-height: 22px;
	text-align: justify;

	color: #000000;
}
#line{
	position: absolute;
	width: 1349px;
	height: 95px;
	left: 0px;
	top: 678px;
}
#foot{
	position: absolute;
	width: 1349px;
	height: 144px;
	left: 0px;
	top: 740px;
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
					  <a class="nav-item nav-link" href="home.php">Home</span> </a>
					  <a class="nav-item nav-link" href="#">About Us</a>
					</div>
			</div>
		  </nav>
			<button type="submit" onclick="window.location.href='login-rev.php'" class="signin"><b>Sign In</b></button>
			<button type="submit" onclick="window.location.href='sign-up-page.php'" class="signup"><b>Sign Up</b></button>
		</header>
	</div>
		
	<div id="card">
		<span class="title">ABOUT US</span>
		<div id="line-title"></div>
		<div class="about" id="about" name="about">
			<p>HelloPet is a website created by the Depresso team. Depresso is a team formed from the Software Engineering course at IPB University. Contains 4 people, namely Wika Fauziah, Tiara Bellini, Herdika Shidqi, and Reru Dharmastiawan. We work together with the aim of creating a great pet grooming service website.</p>
			<p>We believe that life is better with pets and we know the unconditional love that pets bring to our everyday lives.
			So, we’ve dedicated ourselves to serving pet passionate people and their pets. We provide a grooming services that they need to become great pet parents. HelloPet offers top quality services at affordable prices, all performed in the convenience and comfortability of your home.</p>
		</div>
	</div>
	<div class="kucing"></div>
	<img href="#" id="line" src="img/grs.png">
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
