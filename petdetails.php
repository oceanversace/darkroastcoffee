<? php 
	session_start();
	include('config.php');
	if( !isset($_SESSION["login"]) ) {
    	header('Location: home.php');
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

	<title>Pet Details HelloPet</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
	<link rel="icon" href="img/logo.png" type="image/x-icon">
</head>
<style>
#header-background{
		position: absolute;
		width: 1349px;
		height: 658px;
		left: 0px;
		top: 0px;
		background: url('img/gropack.png');
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
#container{
	 	position: absolute;
		width: 665px;
		height: 450px;
		left: 480px;
		top: 110px;

		background: #FFFFFF;
		box-shadow: 0px 4px 32px rgba(170, 170, 170, 0.25);
		border-radius: 30px;
	 }
	 .title{
	 	position: absolute;
		width: 334px;
		height: 34px;
		left: 212px;
		top: 20px;

		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 25px;
		line-height: 34px;
		letter-spacing: 0.12em;

		color: #000000;
	 }
	 .title-1{
	 	position: absolute;
		width: 334px;
		height: 34px;
		left: 150px;
		top: 80px;

		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		line-height: 34px;
		letter-spacing: 0.12em;

		color: #000000;
	 }
	 .title-2{
	 	position: absolute;
		width: 334px;
		height: 34px;
		left: 150px;
		top: 188px;

		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		line-height: 34px;
		letter-spacing: 0.12em;

		color: #000000;
	 }
	 .title-3{
	 	position: absolute;
		width: 334px;
		height: 34px;
		left: 150px;
		top: 270px;

		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		line-height: 34px;
		letter-spacing: 0.12em;

		color: #000000;
	 }
	 .age{
		position: absolute;
		width: 100px;
		height: 34px;
		left: 150px;
		top: 308px;
		background: #ffffff;
        border-radius: 12px;
		border: 1px solid rgb(185, 185, 185);
		padding: 12px 15px;
		cursor: pointer;
	 }
	 .title-4{
	 	position: absolute;
		width: 334px;
		height: 34px;
		left: 301px;
		top: 270px;

		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		line-height: 34px;
		letter-spacing: 0.12em;

		color: #000000;
	 }
	 .next{
        position: absolute;
        width: 78px;
        height: 35px;
        height: 35px;
        left: 480px;
        top: 380px;
        color: #ffffff;
        background: #9edffd;
        border-radius: 12px;
        border: none;
        background: -webkit-linear-gradient(bottom, #bebebe 1%, #7f8cff 10%);
        background: -moz-linear-gradient(bottom, #bebebe 1%, #7f8cff 10%);
        background: linear-gradient(bottom, #bebebe 1%, #7f8cff 10%);
        cursor: pointer;
        font-family: century Gothic;
        font-style: bold;
    }
	.pet1{
        color: #000000;
        background: #ffffff;
        border-radius: 12px;
		border: 1px solid rgb(185, 185, 185);
        cursor: pointer;
        font-family: century Gothic;
		font-size: 14px;
		text-align: left;
    }
	
#button-logo{
	 	position: absolute;
		width: 53px;
		height: 79px;
		left: 222px;
		top: 103px;
	 }
	 .pet2{
        color: #000000;
        background: #ffffff;
        border-radius: 12px;
		border: 1px solid rgb(185, 185, 185);
        cursor: pointer;
        font-family: century Gothic;
		font-size: 14px;
		text-align: left;
    }
	
#button1-logo{
	 	position: absolute;
		width: 53px;
		height: 79px;
		left: 430px;
		top: 120px;
	 }
	 .size1{
        color: #000000;
        background: #ffffff;
        border-radius: 12px;
		border: 1px solid rgb(185, 185, 185);
        cursor: pointer;
        font-family: century Gothic;
		font-size: 14px;
		text-align: left;
    }	 
	.size2{
        color: #000000;
        background: #ffffff;
        border-radius: 12px;
		border: 1px solid rgb(185, 185, 185);
        cursor: pointer;
        font-family: century Gothic;
		font-size: 14px;
		text-align: left;
    }	 
	.size3{
        color: #000000;
        background: #ffffff;
        border-radius: 12px;
		border: 1px solid rgb(185, 185, 185);
        cursor: pointer;
        font-family: century Gothic;
		font-size: 14px;
		text-align: left;
    }	 
	.gender1{
        color: #000000;
        background: #ffffff;
        border-radius: 12px;
		border: 1px solid rgb(185, 185, 185);
        cursor: pointer;
        font-family: century Gothic;
		font-size: 14px;
		text-align: left;
    }	 
	.gender2{
        color: #000000;
        background: #ffffff;
        border-radius: 12px;
		border: 1px solid rgb(185, 185, 185);
        cursor: pointer;
        font-family: century Gothic;
		font-size: 14px;
		text-align: left;
    }	 
#cate{
 	position: absolute;
	width: 584px;
	height: 482px;
	left: 50px;
	top: 85px;
}
#foot{
		position: absolute;
		width: 1349px;
		height: 144px;
		left: 0px;
		top: 593px;
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
        <div>
			<a href="#" type="button" class="buttonprofile" id="buttonprofile"><img id="profile" src="img/profile.png"/></a>
		</div>
	</div>
        <div id="container">
			<form method="GET" action="dateandtime.php">
				<span class="title">ADD PET DETAILS</span>
				<label class="title-1">Pet Type:</label>
					<input type="hidden" id="pack_id" name="pack_id" value="<?=$_GET['pck_id']?>">
					<input type="radio" class="pet1" id="pet" name="pet" value="anjing" style="position: absolute; left: 150px; top: 140px;">
					<label for="pet" style="position: absolute; left: 175px; top: 135px; font-family: Roboto;"><b>DOG</b></label>
						<a href="#" id="button-logo"><img src="img/Dog-2.png"/></a>
						
					<input type="radio" class="pet2" id="pet" name="pet" value="kucing" style="position: absolute; left: 365px; top: 140px;">
					<label for="pet" style="position: absolute; left: 390px; top: 135px; font-family: Roboto;"><b>CAT</b></label>
						<a href="#" id="button1-logo"><img src="img/Dog-3.png"/></a>

				<label class="title-2">Pet Size:</label>
					<input type="radio" class="size1" id="size" name="size" value="kecil" style="position: absolute; left: 150px; top: 230px;">
					<label for="size" style="position: absolute; left: 175px; top: 225px; font-family: Roboto;"><b>Small</b></label>
					<input type="radio" class="size2" id="size" name="size" value="sedang" style="position: absolute; left: 280px; top: 230px;">
					<label for="size" style="position: absolute; left: 305px; top: 225px; font-family: Roboto;"><b>Medium</b></label>
					<input type="radio" class="size3" id="size" name="size" value="besar" style="position: absolute; left: 410px; top: 230px;">
					<label for="size" style="position: absolute; left: 430px; top: 225px; font-family: Roboto;"><b>Large</b></label>

					<label class="title-3">Pet Age</label>
						<input type="number" class="age" name="age">

				<span class="title-4">Pet Gender:</span>
					<input type="radio" class="gender1" id="gender" name="gender" value="jantan" style="position: absolute; left: 300px; top: 315px;">
					<label for="gender" style="position: absolute; left: 325px; top: 310px; font-family: Roboto;"><b>MALE</b></label>
					<input type="radio" class="gender2" id="gender" name="gender" value="betina" style="position: absolute; left: 430px; top: 315px;">
					<label for="gender" style="position: absolute; left: 455px; top: 310px; font-family: Roboto;"><b>FEMALE</b></label>

					<button type="submit" href="#" class="next"><b>NEXT</b></button>
			</form>
        </div>
        <img id="cate" src="img/cate.png"></img>
	<footer id="foot">
		<div>
			<span class="learn">LEARN MORE</span>
			<a class="cancel" href="img/cancel.html">Cancelation Policy</a>
			<a class="safe" href="img/safety.html">Safety</a>
			<div class="copyright">HelloPet, Depresso Ltd</div>
			<img href="#" id="copyright-logo" src="img/copyright.png">
			<div class="copyright2">2021, All Rights Reserved</div>
		</div>
	</footer>
</body>
</html>
