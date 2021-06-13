<?php 
	include("config.php");
	session_start();
	if ( !(isset($_SESSION["login"])) ) {
		header('Location: index.php');
		die;
	}

	$username = $_SESSION['username'];
	$userRes = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	$res = mysqli_fetch_assoc($userRes);
 ?>


<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<title>Setting Profile HelloPet</title>
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
	.box1{
		position: absolute;
		width: 1164px;
		height: 600px;
		left: 98px;
		top: 105px;

		background: #FFFFFF;
		box-shadow: 0px 4px 30px rgba(0, 0, 0, 0.1);
		border-radius: 12px;
	}
	.box2{
		position: absolute;
		width: 293px;
		height: 600px;
		left: 0px;
		top: 0px;

		background: #D5EEFF;
		border-radius: 12px 0px 0px 12px;
	}
	#foot{
	position: absolute;
	width: 1349px;
	height: 144px;
	left: 0px;
	top: 770px;
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
	 #user-profile{
	 	position: absolute;
		width: 105px;
		height: 105px;
		left: 85px;
		top: 50px;
	 }
	 .username{
	 	position: absolute;
		width: 85px;
		height: 25px;
		left: 100px;
		top: 170px;

		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		line-height: 19px;
		display: flex;
		align-items: center;
	 }
.prl{
	 	position: absolute;
		width: 294px;
		height: 48px;
		left: 0px;
		top: 220px;
		font-family: Roboto;
		font-size: 18px;
		line-height: 21px;
		display: flex;
		align-items: center;
		cursor: pointer;
		border: none;
		background: none;
		color: #000000;
	 }
	 .myorder{
	 	position: absolute;
		width: 293px;
		height: 48px;
		left: 0px;
		top: 268px;
		color: #000000;
		font-family: Roboto;
		font-size: 18px;
		line-height: 21px;
		display: flex;
		align-items: center;
		cursor: pointer;
		border: none;
		background: none;
	 }
	 .stg{
	 	position: absolute;
		width: 293px;
		height: 48px;
		left: 0px;
		top: 316px;
		color: #000000;
		font-family: Roboto;
		font-size: 18px;
		line-height: 21px;
		display: flex;
		align-items: center;
		cursor: pointer;
		border: none;
		background: #FFFFFF;
	 }
	 .title{
	 	position: absolute;
		width: 356px;
		height: 68px;
		left: 430px;
		top: 50px;

		font-family: Roboto;
		font-size: 30px;
		line-height: 35px;
	 }
	 .line{
	 	position: absolute;
		width: 740px;
		height: 0px;
		left: 355px;
		top: 120px;

		border: 1px solid #000000;
	 }
	 .nama{
	 	position: absolute;
	 	left: 355px;
		top: 160px;
		font-family: Roboto;
		font-size: 18px;
	 }
	 .input1{
	    position: absolute;
	    width: 300px;
	    height: 31px;
	    left: 795px;
	    top: 160px;
	    padding: 10px;
	    background: #FFFFFF;
	    border: 1px solid #C6D4D7;
	    box-sizing: border-box;
   	}
   .input1:focus{
	    outline: 1px solid #53B2F2;
	} 
	.uname{
	 	position: absolute;
	 	left: 355px;
		top: 215px;
		font-family: Roboto;
		font-size: 18px;
	}
	.input2{
	   position: absolute;
	    width: 300px;
	    height: 31px;
	    left: 795px;
	    top: 215px;
	    padding: 10px;
	    background: #FFFFFF;
	    border: 1px solid #C6D4D7;
	    box-sizing: border-box;
   	}
   .input2:focus{
	    outline: 1px solid #53B2F2;
	} 
	.uemail{
	 	position: absolute;
	 	left: 355px;
		top: 270px;
		font-family: Roboto;
		font-size: 18px;
	}
	.input3{
	    position: absolute;
	    width: 300px;
	    height: 31px;
	    left: 795px;
	    top: 270px;
	    padding: 10px;
	    background: #FFFFFF;
	    border: 1px solid #C6D4D7;
	    box-sizing: border-box;
   	}
   .input3:focus{
	    outline: 1px solid #53B2F2;
	} 
	.uphone{
		position: absolute;
	 	left: 355px;
		top: 330px;
		font-family: Roboto;
		font-size: 18px;
	}
	.input4{
		position: absolute;
	    width: 300px;
	    height: 31px;
	    left: 795px;
	    top: 330px;
	    padding: 10px;
	    background: #FFFFFF;
	    border: 1px solid #C6D4D7;
	    box-sizing: border-box;
	}
	.input4:focus{
	    outline: 1px solid #53B2F2;
	} 
	.uaddress{
		position: absolute;
	 	left: 355px;
		top: 390px;
		font-family: Roboto;
		font-size: 18px;
	}
	.input5{
		position: absolute;
	    width: 300px;
	    height: 80px;
	    left: 795px;
	    top: 390px;
	    padding: 10px;
	    background: #FFFFFF;
	    border: 1px solid #C6D4D7;
	    box-sizing: border-box;
	}
	.input5:focus{
	    outline: 1px solid #53B2F2;
	} 
	.button-submit:hover{
	 	background : #309BE4;
	}
	.button-submit{
	 	position: absolute;
		left: 987px;
		top: 520px;
		bottom: 20px;
		width: 108px;
		height: 41px;
		background: #53B2F2;
		border-radius: 10px;
		border: none;
		cursor: pointer;
		color: #FFFFFF;
		font-family: Roboto;
	 }
	 .button-submit:focus{
	 	outline: none;
	 }
 </style>
 <body>
	<div class="header">
		<header id="header-background">
		<div class="logo"></div>
          	<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container">
					<div class="navbar-nav ml-auto">
					  <a class="nav-item nav-link" href="home.php">Home</a>
					  <a class="nav-item nav-link" href="packages.php">Packages</a>
					  <a class="nav-item nav-link" href="aboutus.php">About Us</a>
					  <a class="nav-item nav-link" href="contactus.html">Contact Us</a>
					</div>
			</div>
		 	</nav>
		</header>
	<div class="box1">
		<div class="box2">
			<img name="user-profile" id="user-profile" src="img/profile-1.png">
			<p class="username" id="username" name="username" value=" "><?=$res['username']?></p> <!--username disesuaikan-->
			<a class="prl" href="myprofile.php" style="text-decoration: none;"><b>&nbsp &nbsp &nbsp &nbsp &nbsp  Profile</b></a>
			<a class="myorder" href="myorder.php" style="text-decoration: none;"><b>&nbsp &nbsp &nbsp &nbsp &nbsp My Order</b></a>
			<a class="stg" href="setting.php" style="text-decoration: none;"><b>&nbsp &nbsp &nbsp &nbsp &nbsp Setting</b></a>
		</div>
		<a  href="setting.php"><i class="iconify" data-inline="false" data-icon="eva:arrow-back-fill" style="font-size: 37px; position: absolute; left: 350px; top: 50px; cursor: pointer; color: #000000;"></i></a>
		<p class="title"><b>PERSONAL DATA</b></p>
		<div class="line"></div>
		<form action="prosesedit.php" method="POST">
			<input type="hidden" name="id" value="<?= $res["id"]?>">
			<label for="name" class="nama">Nama</label>
			<input type="text" id="name" name="nama" required value="<?php echo $res['nama']?>"class="input1" />
			<label for="username" class="uname">Username</label>
			<input type="text" id="username" name="username" value="<?=$res['username']?>" class="input2"/>
			<label for="email" class="uemail">Email</label>
	      	<input type="email" name="email" id="email" value="<?=$res['email'];?>" class="input3"/>
	      	<label for="no_telp" class="uphone">Phone</label>
	      	<input type="phone" name="no_telp" id="no_telp" value="<?=$res['no_telp'];?>" class="input4"/>
	      	<label for="alamat" class="uaddress">Address</label>
	      	<textarea type="text" id="alamat" class="input5" name="alamat"><?=$res['alamat'];?></textarea>
	      	<button type="submit" id="submit" name="submit" class="button-submit"><b>SAVE</b></button>
		</form>
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
	<script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
</body>
</html>