<?php
    session_start();
	include('config.php');
	if( !isset($_SESSION["login"]) ) {
    	header('Location: home.php');
  	}
  
    $usr_id = $_SESSION['id'];
    $data = mysqli_query($conn, "SELECT nama FROM user WHERE id=$usr_id;");
    $res = mysqli_fetch_assoc($data);
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
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
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
	#rectangle{
		position: absolute;
		width: 1160px;
		height: 470px;
		left: 100px;
		top: 125px;

		background: #FFFFFF;
		box-shadow: 0px 4px 30px rgba(0, 0, 0, 0.1);
		border-radius: 12px;
	}
	.back{
		position: absolute;
		left: 30px;
		top: 50px;
		cursor: pointer;
		background: none;
		border: none;
	}
	#photo-profile{
		position: absolute;
		width: 75px;
		height: 75px;
		left: 120px;
		top: 30px;
	}
	.name{
		position: absolute;
		width: 300px;
		height: 43px;
		left: 220px;
		top: 60px;

		font-family: Roboto;
		font-size: 16px;
		line-height: 19px;

		color: #000000;
	}
	#line{
		position: absolute;
		width: 1060px;
		height: 0px;
		left: 45px;
		top: 130px;

		border: 1px solid #000000;
	}
	#review{
		position: absolute;
		width: 1060px;
		height: 216px;
		left: 47px;
		top: 160px;
		text-align: top;
		border: 1px solid #000000;
		box-sizing: border-box;
		padding: 25px;
	}
	.button{
		position: absolute;
		width: 120px;
		height: 40px;
		left: 980px;
		top: 400px;
		background: #53B2F2;
		border-radius: 10px;
		border: none;
		cursor: pointer;
		color: #FFFFFF;
		font-size: 16px;
	}
	.button:hover{
		background : #309BE4;
	}
	#foot{
	position: absolute;
	width: 1349px;
	height: 144px;
	left: 0px;
	top: 690px;
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
 	textarea:focus{
 		outline: 1px solid #53B2F2;
 	}
</style>
<body style="background-color: #F3F6F6;">
	<div class="header">
		<header id="header-background">
		<div class="logo"></div>
          <nav class="navbar navbar-expand-lg navbar-light">
			<div class="container">
					<div class="navbar-nav ml-auto">
                      <a class="nav-item nav-link" href="home.php">Home</a>
					  <a class="nav-item nav-link" href="packages.php">Packages</a>
					  <a class="nav-item nav-link" href="aboutus.php">About Us</a>
					  <a class="nav-item nav-link" href="#">Contact Us</a>
					</div>
			</div>
		  </nav>
		</header>
	</div>
	<div>
		<a href="editprofile.php" type="button" class="buttonprofile" id="buttonprofile"><img id="profile" src="img/profile.png"/></a>
	</div>
	<form id="rectangle" name="box-form">
		<button onclick="window.history.back()" class="back" type="button">
			<span class="iconify" data-inline="false" data-icon="eva:arrow-back-fill" style="font-size: 40px;"></span>
		</button>
		<img id="photo-profile" src="img/Mask.png"></img>
		<span class="name"><b><?=$res['nama'];?></b></span>
		<div id="line"></div>
		<textarea name="review" id="review" class="review" placeholder="Describe your experience with us"></textarea> 
		<button type="submit" id="send-button" class="button"><b>SEND</b></button>
	</form>
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
	<script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
</body>
</html>
