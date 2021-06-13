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

	<title>Setting Password HelloPet</title>
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
		height: 500px;
		left: 98px;
		top: 105px;

		background: #FFFFFF;
		box-shadow: 0px 4px 30px rgba(0, 0, 0, 0.1);
		border-radius: 12px;
	}
	.box2{
		position: absolute;
		width: 293px;
		height: 500px;
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
	top: 670px;
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
	 .current-pass{
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
	.new-pass{
	 	position: absolute;
	 	left: 355px;
		top: 230px;
		font-family: Roboto;
		font-size: 18px;
	}
	.input2{
	   position: absolute;
	    width: 300px;
	    height: 31px;
	    left: 795px;
	    top: 230px;
	    padding: 10px;
	    background: #FFFFFF;
	    border: 1px solid #C6D4D7;
	    box-sizing: border-box;
   	}
   .input2:focus{
	    outline: 1px solid #53B2F2;
	} 
	.reenter-pass{
	 	position: absolute;
	 	left: 355px;
		top: 300px;
		font-family: Roboto;
		font-size: 18px;
	}
	.input3{
	   position: absolute;
	    width: 300px;
	    height: 31px;
	    left: 795px;
	    top: 300px;
	    padding: 10px;
	    background: #FFFFFF;
	    border: 1px solid #C6D4D7;
	    box-sizing: border-box;
   	}
   .input3:focus{
	    outline: 1px solid #53B2F2;
	} 
	.button-submit:hover{
	 	background : #309BE4;
	}
	.button-submit{
	 	position: absolute;
		left: 987px;
		top: 420px;
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
	 .forgot-password{
	 	position: absolute;
	 	left: 355px;
		top: 370px;
		font-family: Roboto;
		font-size: 16px;
		cursor: pointer;
		text-decoration-line: underline;
		color: #000000;
	 }
	 .detail-overlay{
		position: absolute;
		width: 432px;
		height: 208px;
		left: 470px;
		top: 250px;
		background: #FFFFFF;
		box-shadow: 0px 4px 32px 700px rgba(0, 0, 0, 0.4);
		border-radius: 12px;
		border: none;
	}
	.email-sent{
		position: absolute;
		width: 111px;
		height: 27px;
		left: 160px;
		top: 24px;

		font-family: Roboto;
		font-style: normal;
		font-weight: bold;
		font-size: 23px;
		line-height: 27px;
		color: #000000;
	}
	.detail-email-sent{
		position: absolute;
		width: 320px;
		height: 82px;
		left: 56px;
		top: 68px;

		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		line-height: 21px;
		text-align: center;

		color: #000000;
	}
	.ok{
		position: absolute;
		width: 108px;
		height: 41px;
		left: 162px;
		top: 150px;
		cursor: pointer;
		border: none;
		border-radius: 10px;
		background: #53B2F2;
		color: #FFFFFF;
		font-family: Roboto;
		font-size: 18px	
	}
	.ok:hover{
		background : #309BE4;
	}
	.ok:focus{
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
	</div>
	<div class="box1">
		<div class="box2">
			<img name="user-profile" id="user-profile" src="img/profile-1.png">
			<p class="username" id="username" name="username" value=" "><?=$res['username']?></p> <!--username disesuaikan-->
			<a class="prl" href="myprofile.php" style="text-decoration: none;"><b>&nbsp &nbsp &nbsp &nbsp &nbsp  Profile</b></a>
			<a class="myorder" href="myorder.php" style="text-decoration: none;"><b>&nbsp &nbsp &nbsp &nbsp &nbsp My Order</b></a>
			<a class="stg" href="setting.php" style="text-decoration: none;"><b>&nbsp &nbsp &nbsp &nbsp &nbsp Setting</b></a>
		</div>
		<a  href="setting.php"><i class="iconify" data-inline="false" data-icon="eva:arrow-back-fill" style="font-size: 37px; position: absolute; left: 350px; top: 50px; cursor: pointer; color: #000000;"></i></a>
		<p class="title"><b>PASSWORD</b></p>
		<div class="line"></div>	
		<form action="proseseditpw.php" method="post">
			<label for="current-pass" class="current-pass">Current Password</label>
			<input type="password" id="current-pass" name="current-pass" class="input1" required/>
			<label for="new-pass" class="new-pass">New Password</label>
			<input type="password" id="new-pass" name="new-pass" class="input2" required/>
			<label for="reenter-pass" class="reenter-pass">Re-enter New Password</label>
      		<input type="password" name="reenter-pass" id="reenter-pass" class="input3" required/>
			<button type="submit" id="submit" name="submit" class="button-submit" ><b>SAVE</b></button>
		</form>

	</div>
	<script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
	<script type="text/javascript">
    function Validate() {
        var password = document.getElementById("new-pass").value;
        var confirmPassword = document.getElementById("reenter-pass").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
	</script>
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
