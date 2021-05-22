<?php 
	session_start();
	include('config.php');
	if( !isset($_SESSION["login"]) ) {
    	header('Location: login-rev.php');
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
	<title>Packages HelloPet</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
	<link rel="icon" href="img/logo.png" type="image/x-icon">
</head>
<style>
#header-background{
	position: absolute;
	width: 1349px;
	height: 550px;
	left: 0px;
	top: 0px;
	background: url('img/Pack.png');
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
 #vector1{
 	position: absolute;
	width: 176.89px;
	height: 252.45px;
	left: 130px;
	top: 800px;
 }
 #vector2{
 	position: absolute;
	width: 203px;
	height: 248px;
	left: 1003px;
	top: 869px;
 }
 .highlight{
 	width: 479px;
  	color: rgba(0,0,0,1);
  	position: absolute;
 	top: 300px;
  	left: 300px;
  	font-family: No Virus;
  	font-weight: Regular;
  	font-size: 40px;
  	opacity: 1;
  	text-align: left;
  	color: #000000;
 }
 .pack{
	position: absolute;
	width: 251px;
	height: 36px;
	left: 555px;
	top: 601px;

	font-family: Roboto;
	font-style: normal;
	font-weight: normal;
	font-size: 23px;
	line-height: 27px;
	text-align: center;
	letter-spacing: 0.225em;

	color: #000000;
 }
 .line{
 	position: absolute;
	width: 93.05px;
	height: 0px;
	left: 633.98px;
	top: 637.5px;

	border: 1px solid #000000;
 }
 #pack2{
 	position: absolute;
	width: 269.7px;
	height: 375.41px;
	left: 263.45px;
	top: 711.95px;

	background: #FFFFFF;
	box-shadow: 0px 4px 28px rgba(253, 173, 199, 0.5);
	border-radius: 3px;
 }
 .packages2{
 	position: absolute;
	width: 191.44px;
	height: 26.6px;
	left: 20px;
	top: 25px;
	background: -webkit-linear-gradient(#BF5477 0%, #FD9EBD, rgba(255, 255, 255, 0) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
	font-family: Roboto;
	font-style: bold;
	font-weight: bold;
	font-size: 23px;
	line-height: 27px;
 }
 .price2{
 	position: absolute;
	width: 92.23px;
	height: 12.16px;
	left: 165px;
	top: 29px;

	font-family: Roboto;
	font-style: bold;
	font-weight: bold;
	font-size: 16px;
	line-height: 19px;

	color: #000000;

 }
 .line2{
 	position: absolute;
	width: 226px;
	height: 0px;
	left: 20px;
	top: 70px;

	border: 1px solid #FD9EBD;
 }
 #checkpk2{
 	position: absolute;
	width: 18.86px;
	height: 156.06px;
	left: 20px;
	top: 105px;
 }
 .detail2{
 	position: absolute;
	width: 135px;
	height: 200px;
	left: 50px;
	top: 100px;

	font-family: Roboto;
	font-style: normal;
	font-weight: normal;
	font-size: 16px;
	line-height: 28px;
	color: #000000;
 }
 .button2{
 	position: absolute;
	width: 122px;
	height: 37px;
	left: 25px;
	top: 315px;
	color: #FFFFFF;
	background: #FD9EBD;
	border-radius: 12px;
	border: none;
	cursor: pointer;
	font-style: bold;
 }
 #pack1{
 	position: absolute;
	width: 300.44px;
	height: 418.72px;
	left: 270px;
	top: -20px;
	background: linear-gradient(180deg, #3065CC -4.9%, rgba(255, 255, 255, 0) 100%), #53B2F2;
	box-shadow: 0px 4px 28px rgba(83, 178, 242, 0.5);
 }
 .square{
 	position: absolute;
	width: 301px;
	height: 70px;
	left: 0px;
	top: 0px;

	background: #FFFFFF;
 }
 .packages1{
 	position: absolute;
	width: 191.44px;
	height: 26.6px;
	left: 20px;
	top: 20px;
	background: -webkit-linear-gradient(180deg, #0038A5 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(0deg, #53B2F2, #53B2F2);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
	font-family: Roboto;
	font-style: bold;
	font-weight: 900;
	font-size: 23px;
	line-height: 27px;
 }
 .price1{
 	position: absolute;
	width: 102.74px;
	height: 13.56px;
	left: 195px;
	top: 26px;

	font-family: Roboto;
	font-style: normal;
	font-weight: bold;
	font-size: 16px;
	line-height: 19px;

	color: #000000;
 }
 #checkpk1{
 	position: absolute;
	width: 21.02px;
	height: 210.19px;
	left: 20px;
	top: 100px;

 }
 .detail1 p{
 	position: relative;
 	left: 55px;
	font-family: Roboto;
	font-style: normal;
	font-weight: bold;
	font-size: 16px;
	line-height: 11px;

	color: #FFFFFF;
 }
 .button1{
 	position: absolute;
	width: 122px;
	height: 37px;
	left: 88px;
	top: 363px;
	color: #000000;
	border: none;
	cursor: pointer;
	background: #FFFFFF;
	border-radius: 12px;
	font-style: bold;
 }
 #pack3{
 	position: absolute;
	width: 269.7px;
	height: 375.41px;
	left: 571.5px;
	top: 0px;

	background: #FFFFFF;
	box-shadow: 0px 4px 28px rgba(232, 167, 107, 0.5);
 }
.packages3{
	position: absolute;
	width: 191.44px;
	height: 26.6px;
	left: 20px;
	top: 25px;
	background: -webkit-linear-gradient(#FFCAA4 0%, #E18229, rgba(255, 255, 255, 0) 100%);
	-webkit-background-clip: text;
  	-webkit-text-fill-color: transparent;
  	font-family: Roboto;
	font-style: bold;
	font-weight: bold;
	font-size: 23px;
	line-height: 27px;
}
.price3{
 	position: absolute;
	width: 92.23px;
	height: 12.16px;
	left: 165px;
	top: 29px;

	font-family: Roboto;
	font-style: bold;
	font-weight: bold;
	font-size: 16px;
	line-height: 19px;

	color: #000000;
}
.line3{
	position: absolute;
	width: 226px;
	height: 0px;
	left: 20px;
	top: 70px;

	border: 1px solid #FBB575;
}
.detail3{
 	position: absolute;
	width: 112px;
	height: 200px;
	left: 50px;
	top: 100px;

	font-family: Roboto;
	font-style: normal;
	font-weight: normal;
	font-size: 16px;
	line-height: 28px;
	color: #000000;
 }
 #checkpk3{
 	position: absolute;
	width: 18.86px;
	height: 101.3px;
	left: 20px;
	top: 105px;
 }
 .button3{
 	position: absolute;
	width: 122px;
	height: 37px;
	left: 123px;
	top: 315px;
	color: #FFFFFF;
	background: #FBB575;
	border-radius: 12px;
	border: none;
	cursor: pointer;
	font-style: bold;
 }
 .container{
 	position: relative;
  	text-align: center;
  	color: transparent;
 }
 #blue{
 	position: absolute;
	width: 1349px;
	height: 390px;
	left: -262px;
	top: 480px;
 }
 #grup1{
 	position: absolute;
	width: 81.46px;
	height: 129.42px;
	left:-110px;
	top:580px;
 }
 .text1{
 	position: absolute;
	width: 187px;
	height: 83px;
	left: -165px;
	top: 710px;

	font-family: Roboto;
	font-style: normal;
	font-weight: normal;
	font-size: 16px;
	line-height: 19px;
	text-align: center;

	color: #000000;
 }
 #grup2{
 	position: absolute;
	width: 78px;
	height: 95px;
	left: 200px;
	top:595px;
 }
 .text2{
 	position: absolute;
	width: 187px;
	height: 82px;
	left: 142px;
	top: 710px;

	font-family: Roboto;
	font-style: normal;
	font-weight: normal;
	font-size: 16px;
	line-height: 19px;
	text-align: center;

	color: #000000;
 }
 #grup3{
 	position: absolute;
	width: 107px;
	height: 130px;
	left: 500px;
	top: 580px;
 }
 .text3{
 	position: absolute;
	width: 170px;
	height: 83px;
	left: 470px;
	top: 713px;

	font-family: Roboto;
	font-style: normal;
	font-weight: normal;
	font-size: 16px;
	line-height: 19px;
	text-align: center;

	color: #000000;
 }
 #grup4{
 	position: absolute;
	width: 98px;
	height: 107px;
	left: 800px;
	top: 600px;
 }
 .text4{
 	position: absolute;
	width: 175px;
	height: 83px;
	left: 755px;
	top: 715px;

	font-family: Roboto;
	font-style: normal;
	font-weight: normal;
	font-size: 16px;
	line-height: 19px;
	text-align: center;

	color: #000000;
 }
 #foot{
	position: absolute;
	width: 1349px;
	height: 144px;
	left: -262px;
	top: 970px;
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
					  <a class="nav-item nav-link active font-weight-bold" href="#">Packages <span class="sr-only"></span> </a>
					  <a class="nav-item nav-link" href="aboutus.php">About Us</a>
					  <a class="nav-item nav-link" href="#">Contact Us</a>
					</div>
			</div>
		  </nav>
		</header>
	</div>
    <div>
    <button class="buttonprofile" id="buttonprofile" name="buttonprofile" onclick="window.location.replace('profile.html')"><img id="profile" src="img/profile.png"></img>
    </div>
	<img id="vector1" src="img/vector1.png"></img>
	<img id="vector2" src="img/vector2.png"></img>
	<div class="title">
		<span class="pack">PACKAGES</span>
		<div class="line"></div>
	<div id="pack2">
		<label class="packages2" id="packages2" name="packages2">Standard</label>
		<span class="price2" id="price2" name="price2">Rp 230.000</span>
		<div class="line2"></div>
		<img id="checkpk2" src="img/cekpk2.png">
		<div class="detail2" id="detail2" name="detail2">
			Standard Bath
			Blow Drying
			Style Cuts
			Nail Trimming
			Eye Stain Removal
			Teeth Brushing
		</div>
		<button class="button2" id="button2" name="button2" onclick="window.location.replace('book.html')"><b>BOOK</b></button>
	<div id="pack3">
		<label class="packages3" id="packages3" name="packages3">Basic</label>
		<span class="price3" id="price3" name="price3">Rp 150.000</span>
		<div class="line3"></div>
		<img id="checkpk3" src="img/cekpk3.png">
		<div class="detail3" id="detail3" name="detail3">
		Basic Bath
		Blow Drying
		Nail Trimming
		Teeth Brushing
		</div>
		<button class="button3" id="button3" name="button2" onclick="window.location.replace('book.html')"><b>BOOK</b></button>
	</div>
	<div id="pack1">
		<div class="square">
			<label class="packages1" id="packages1" name="packages1">Premium</label>
			<span class="price1" id="price1" name="price1">Rp 300.000</span>
			<img id="checkpk1" src="img/cekpk1.png">
			<div class="detail1" id="detail1" name="detail1">
				<br><br><br><br><br>
				<p>Premium Bath</p>
				<p>Blow Drying</p>
				<p>Specialized Shampoo</p>
				<p>Style Cuts</p>
				<p>Nail Trimming</p>
				<p>Eye Stain Removal</p>
				<p>Teeth Brushing</p>
				<p>Anal Gland Expression</p>
			</div>
			<button class="button1" id="button1" name="button1" onclick="window.location.replace('book.html')"><b>BOOK</b></button>
		</div>
	</div>
	<div class="container">
		<img id="blue" src="img/blue.png">
		<div class="grup1">
			<img id="grup1" src="img/grup1.png">
			<div class="text1">Schedule and book—all online. All you have to do is pick a day and time</div>
		</div>
		<div class="grup2">
			<img id="grup2" src="img/grup2.png">
			<div class="text2">No travel stress for your pets. Grooming service happens in your home</div>
		</div>
		<div class="grup3">
			<img id="grup3" src="img/grup3.png">
			<div class="text3">Healthy pet groomers and clean tools</div>
		</div>
		<div class="grup4">
			<img id="grup4" src="img/grup4.png">
			<div class="text4">Highly skilled and certified pet groomers</div>
		</div>
	</div>
	<footer id="foot">
		<div>
			<span class="learn">LEARN MORE</span>
			<a class="cancel" href="cancel.html">Cancelation Policy</a>
			<a class="safe" href="safety.php">Safety</a>
			<div class="copyright">HelloPet, Depresso Ltd</div>
			<img href="#" id="copyright-logo" src="img/copyright.png">
			<div class="copyright2">2021, All Rights Reserved</div>
		</div>
	</footer>
</body>
</html>
