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
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>HelloPet</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
	<link rel="icon" href="img/logo.png" type="image/x-icon">
</head>
<style>
#header-background{
	position: absolute;
	width: 1349px;
	height: 666.6px;
	left: 0px;
	top: 0px;
	background: url('img/Jumb.png');
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
.pack-5{
	position: relative;
	width: 300px;
	height: 60px;
	left: 220px;
	top: 320px;

	font-family: 'Indie Flower', cursive;
	font-style: normal;
	font-weight: bold;
	font-size: 60px;
	line-height: 27px;
	text-align: center;
	letter-spacing: 0.250em;
	background: -webkit-linear-gradient(bottom, #f5d6e6 1%, #d5eeff 10%);
	background: -moz-linear-gradient(bottom, #f5d6e6 1%, #d5eeff 10%);
	background: linear-gradient(bottom, #f5d6e6 1%, #d5eeff 10%);

	color: #cc7897;
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
 .pack{
	position: absolute;
	width: 251px;
	height: 36px;
	left: 572px;
	top: 726px;

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
	width: 130px;
	height: 0px;
	left: 630.98px;
	top: 762.5px;

	border: 1px solid #000000;
 }
 .pack-1{
	position: absolute;
	width: 251px;
	height: 36px;
	left: 832px;
	top: 1195px;

	font-family: Roboto;
	font-style: normal;
	font-weight: normal;
	font-size: 23px;
	line-height: 27px;
	text-align: center;
	letter-spacing: 0.225em;

	color: #000000;
 }
 .line-1{
 	position: absolute;
	width: 130px;
	height: 0px;
	left: 889.78px;
	top: 1236.28px;

	border: 1px solid #000000;
 }
 .groom4{
 	position: absolute;
	width: 187px;
	height: 82px;
	left: 676.37px;
	top: 1275.13px;

	font-family: Roboto;
	font-style: bold;
	font-weight: normal;
	font-size: 16px;
	line-height: 19px;
	text-align: left;

	color: #000000;
 }
 .text9{
	position: absolute;
	width: 552px;
	height: 82px;
	left: 676.37px;
	top: 1300.13px;

	font-family: Roboto;
	font-style: normal;
	font-weight: normal;
	font-size: 16px;
	line-height: 19px;
	text-align: left;

	color: #000000;
 }
 .groom5{
 	position: absolute;
	width: 187px;
	height: 82px;
	left: 676.37px;
	top: 1380.13px;

	font-family: Roboto;
	font-style: bold;
	font-weight: normal;
	font-size: 16px;
	line-height: 19px;
	text-align: left;

	color: #000000;
 }
 .text10{
	position: absolute;
	width: 552px;
	height: 82px;
	left: 676.37px;
	top: 1405.13px;

	font-family: Roboto;
	font-style: normal;
	font-weight: normal;
	font-size: 16px;
	line-height: 19px;
	text-align: left;

	color: #000000;
 }
 .groom6{
 	position: absolute;
	width: 187px;
	height: 82px;
	left: 676.37px;
	top: 1485px;

	font-family: Roboto;
	font-style: normal;
	font-weight: normal;
	font-size: 16px;
	line-height: 19px;
	text-align: left;

	color: #000000;
 }
 .text11{
	position: absolute;
	width: 552px;
	height: 82px;
	left: 676.37px;
	top: 1505.13px;

	font-family: Roboto;
	font-style: bold;
	font-weight: normal;
	font-size: 16px;
	line-height: 19px;
	text-align: left;

	color: #000000;
 }
 .pack-2{
	position: absolute;
	width: 330px;
	height: 54px;
	left: 115px;
	top: 1806px;

	font-family: Roboto;
	font-style: normal;
	font-weight: normal;
	font-size: 23px;
	line-height: 27px;
	text-align: center;
	letter-spacing: 0.225em;

	color: #000000;
 }
 
 .pack-3{
	position: absolute;
	width: 416px;
	height: 27px;
	left: 133px;
	top: 2125px;

	font-family: Roboto;
	font-style: normal;
	font-weight: normal;
	font-size: 23px;
	line-height: 27px;
	text-align: center;
	letter-spacing: 0.225em;

	color: #000000;
 }
 .pack-4{
	position: absolute;
	width: 416px;
	height: 27px;
	left: 832px;
	top: 2215px;

	font-family: Roboto;
	font-style: normal;
	font-weight: normal;
	font-size: 23px;
	line-height: 27px;
	text-align: center;
	letter-spacing: 0.225em;

	color: #000000;
 }
 .text12{
	position: absolute;
	width: 150px;
	height: 73px;
	left: 948px;
	top: 2270px;

	font-family: Roboto;
	font-style: bold;
	font-weight: normal;
	font-size: 16px;
	line-height: 19px;
	text-align: left;

	color: #000000;
 }
 .text13{
	position: absolute;
	width: 200px;
	height: 73px;
	left: 948px;
	top: 2352px;

	font-family: Roboto;
	font-style: bold;
	font-weight: normal;
	font-size: 16px;
	line-height: 19px;
	text-align: left;

	color: #000000;
 }
 .text14{
	position: absolute;
	width: 150px;
	height: 66px;
	left: 924px;
	top: 2450px;

	font-family: Roboto;
	font-style: bold;
	font-weight: normal;
	font-size: 16px;
	line-height: 19px;
	text-align: left;

	color: #000000;
 }
 .text15{
	position: absolute;
	width: 100px;
	height: 66px;
	left: 1075px;
	top: 2450px;

	font-family: Roboto;
	font-style: bold;
	font-weight: normal;
	font-size: 16px;
	line-height: 19px;
	text-align: left;

	color: #000000;
 }
 .text16{
	position: absolute;
	width: 150px;
	height: 73px;
	left: 948px;
	top: 2290px;

	font-family: Roboto;
	font-style: bold;
	font-weight: normal;
	font-size: 16px;
	line-height: 19px;
	text-align: left;

	color: #000000;
 } 
 .text17{
	position: absolute;
	width: 200px;
	height: 73px;
	left: 948px;
	top: 2372px;

	font-family: Roboto;
	font-style: bold;
	font-weight: normal;
	font-size: 16px;
	line-height: 19px;
	text-align: left;

	color: #000000;
 }
 #grup1{
 	position: absolute;
	width: 255.4px;
	height: 211px;
	left: 1002px;
	top: 781px;
 }
 .groom1{
 	position: absolute;
	width: 187px;
	height: 83px;
	left: 1030px;
	top: 985px;

	font-family: Roboto;
	font-style: normal;
	font-weight: normal;
	font-size: 16px;
	line-height: 19px;
	text-align: center;

	color: #000000;
	
 }
 .text1{
	position: absolute;
	width: 260px;
	height: 83px;
	left: 991px;
	top: 1022px;

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
	width: 180.16px;
	height: 133px;
	left: 591px;
	top: 818px;
 }
 .groom2{
 	position: absolute;
	width: 187px;
	height: 82px;
	left: 590px;
	top: 985px;

	font-family: Roboto;
	font-style: normal;
	font-weight: normal;
	font-size: 16px;
	line-height: 19px;
	text-align: center;

	color: #000000;
 }
 .text2{
	position: absolute;
	width: 260px;
	height: 82px;
	left: 556px;
	top: 1022px;

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
	width: 177px;
	height: 151px;
	left: 164px;
	top: 805px;
 }
 .groom3{
 	position: absolute;
	width: 170px;
	height: 83px;
	left: 158px;
	top: 985px;

	font-family: Roboto;
	font-style: normal;
	font-weight: normal;
	font-size: 16px;
	line-height: 19px;
	text-align: center;

	color: #000000;
 }
 .text3{
	position: absolute;
	width: 260px;
	height: 83px;
	left: 110px;
	top: 1022px;

	font-family: Roboto;
	font-style: normal;
	font-weight: normal;
	font-size: 16px;
	line-height: 19px;
	text-align: center;

	color: #000000;
 }
 .text4{
	position: absolute;
	width: 338px;
	height: 83px;
	left: 108px;
	top: 1889px;

	font-family: Roboto;
	font-style: normal;
	font-weight: normal;
	font-size: 16px;
	line-height: 19px;
	text-align: center;

	color: #000000;
 }
.set {
	position: absolute;
	left: 208px;
	top: 1927px;
	color: #FFFFFF;
	background: #FD9EBD;
	border-radius: 12px;
	border: none;
	padding: 12px;
	margin: 0;
	margin-left: 0px;
	border: none;
	width: 10%;
	border-radius: 8px;
	cursor: pointer;
  	font-family: Roboto;
  	font-size: 17px;

}
.set:hover {
  background-color: #0084B4;
}
 #grup4{
 	position: absolute;
	width: 466px;
	height: 461px;
	left: 90px;
	top: 1111px;
 }
 #vector1{
 	position: absolute;
	width: 1349px;
	height: 106px;
	left: 0px;
	top: 1609px;
 }
 #vector2{
 	position: absolute;
	width: 1349px;
	height: 608px;
	left: 0px;
	top: 1517px;
 }
 #vector3{
 	position: absolute;
	width: 652px;
	height: 120px;
	left: 113px;
	top: 283px;
 }

 #vector4{
 	position: absolute;
	width: 34px;
	height: 34px;
	left: 554px;
	top: 1787px;
 }
 #vector5{
 	position: absolute;
	width: 34px;
	height: 34px;
	left: 975px;
	top: 1787px;
 }
 #pack5{
 	position: absolute;
	width: 362px;
	height: 221px;
	left: 524px;
	top: 1754px;
	border-radius: 12px;
	background: #FFFFFF;
	box-shadow: 0px 4px 28px rgba(121, 98, 77, 0.5);
 }
 .text5{
	position: absolute;
	width: 338px;
	height: 83px;
	left: 472px;
	top: 1796px;

	font-family: Roboto;
	font-style: normal;
	font-weight: normal;
	font-size: 18px;
	line-height: 19px;
	text-align: center;

	color: #000000;
 }
 .text7{
	position: absolute;
	width: 300px;
	height: 115px;
	left: 554px;
	top: 1839px;

	font-family: Roboto;
	font-style: normal;
	font-weight: normal;
	font-size: 16px;
	line-height: 19px;
	text-align: left;

	color: #000000;
 }
 #vector6{
 	position: absolute;
	width: 34px;
	height: 34px;
	left: 827px;
	top: 1915px;
 }

 #pack6{
 	position: absolute;
	width: 362px;
	height: 221px;
	left: 945px;
	top: 1754px;
	border-radius: 12px;
	background: #FFFFFF;
	box-shadow: 0px 4px 28px rgba(121, 98, 77, 0.5);
 }
 .text6{
	position: absolute;
	width: 338px;
	height: 83px;
	left: 875px;
	top: 1796px;

	font-family: Roboto;
	font-style: normal;
	font-weight: normal;
	font-size: 18px;
	line-height: 19px;
	text-align: center;

	color: #000000;
 }
 .text8{
	position: absolute;
	width: 300px;
	height: 115px;
	left: 975px;
	top: 1839px;

	font-family: Roboto;
	font-style: normal;
	font-weight: normal;
	font-size: 16px;
	line-height: 19px;
	text-align: left;

	color:}
#pack7{
 	position: absolute;
	width: 397px;
	height: 395px;
	left: 834px;
	top: 2182px;

	background: #f0efef;
	border-radius: 12px;
	border: none;
 }
 #vector7{
 	position: absolute;
	width: 34px;
	height: 34px;
	left: 1253px;
	top: 1915px;
 }
 #vector8{
 	position: absolute;
	width: 25px;
	height: 30px;
	left: 890px;
	top: 2275px;
 }
 #vector9{
 	position: absolute;
	width: 36px;
	height: 34px;
	left: 886px;
	top: 2355px;
 }

/* FAQ LEFT */
.faq{
	width:1100px;
	margin-top: 2125px;
    margin-left: 43px;
	overflow:visible;
}

.faq-left{
	float:left;
	width:550px;
}

.faq-container{
	width:500px;
	margin:20px auto;
	list-style-type:none;
}
.faq-container li{
	position:relative;
	margin:5px 0;
	-webkit-transition:height 1s ease in out;
	   -moz-transition:height 1s ease in out;
	        transition:height 1s ease in out;
}
.faq-container li input{
	display:none;
}

.faq-container li label{
	font-family: century 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
	font-weight: 400;
	font-size: 16px;
	background: #f5d6e6;
	background: -webkit-linear-gradient(top, #f5d6e6 1%, #d5eeff 100%);
	background: -moz-linear-gradient(top, #f5d6e6 1%, #d5eeff 100%);
	background: linear-gradient(top, #f5d6e6 1%, #d5eeff 100%);
	color: rgb(0, 0, 0);
	display: block;
	padding: 10px;
	cursor: pointer;
	border-radius: 5px 5px 0 0;
}
.faq-container li label:hover{
	background: -webkit-linear-gradient(top, #d5eeff 30%, #fdadc7 100%);
	background: -moz-linear-gradient(top, #d5eeff 30%, #fdadc7 100%);
	background: linear-gradient(top, #d5eeff 30%, #fdadc7 100%);
}
.faq-container li div{
	overflow: hidden;
	height:0px;
	padding:5px 10px;
	background:rgb(209, 209, 209);
	background: -webkit-linear-gradient(top, rgb(201, 201, 201) 1%, rgb(170, 170, 170) 100%);
	background: -moz-linear-gradient(top, rgb(211, 211, 211) 1%, rgb(197, 197, 197) 100%);
	background: linear-gradient(top, rgb(177, 177, 177) 1%, rgb(201, 201, 201) 100%);
	position: relative;
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
	border-radius:0 0 5px 5px;
	color:#000000;
	font-family: century 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
	font-size:14px;
}
.faq-container li div p{margin-top:10px}
.faq-container li input:checked{
	background:#000;
}
.faq-container li input:checked ~ div{
	padding-bottom:20px;
}
.faq-container li input:checked ~ div.answer{
	height:50px;
}
 #foot{
	position: absolute;
	width: 1349px;
	height: 144px;
	left: 0px;
	top: 2580px;
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
					  <a class="nav-item nav-link" href="#">Home</span> </a>
					  <a class="nav-item nav-link" href="aboutus-nologin.php">About Us</a>
					</div>
			</div>
		  </nav>
			<button type="submit" onclick="window.location.href='login-rev.php'" class="signin"><b>Sign In</b></button>
			<button type="submit" onclick="window.location.href='sign-up-page.php'" class="signup"><b>Sign Up</b></button>
		</header>
	</div>
    <div class="title">
		<span class="pack-5 font-weight-bold">WELCOME</span>
	<div class="title">
		<span class="pack">HOW IT WORKS</span>
		<div class="line"></div>
	<div id="pack2 ml-auto">
		<div class="grup1">
			<img id="grup1" src="img/group15.png">
			<h4 class="groom1 font-weight-bold"><span> Groom It!</span></h4>
			<div class="text1">Your pet groomer is on their way and your pet will soon be looking and feeling fabulous.</div>
		</div>
	</div>
	<div id="pack3 ml-auto">
		<div class="grup2">
			<img id="grup2" src="img/group16.png">
			<h4 class="groom2 font-weight-bold"><span> Book It!</span></h4>
			<div class="text2">Schedule an in-home pet grooming appointment for when it is most convenient for you.</div>
		</div>
	</div>
	<div id="pack1 ml-auto">
	</div>
		<div class="grup3">
			<img id="grup3" src="img/group17.png">
			<h4 class="groom3 font-weight-bold"><span> Chosee It!</span></h4>
			<div class="text3">Choose one of our three grooming packages for your dog or cat.</div>
		</div>
	</div>
	<div id="pack4 ml-auto">
		<div class="grup4">
			<img id="grup4" src="img/mask.png">
		</div>
	</div>
	<div class="title">
		<span class="pack-1">BENEFIT</span>
		<div class="line-1"></div>
		<h4 class="groom4 font-weight-bold"><span> Limited Exposure</span></h4>
		<div class="text9">Groomers will arrive at your time and location. This will eliminate the need for commuting to salons and pet shops. Allowing for a grooming service with minimal contact (especially in times of COVID).</div>
		<h4 class="groom5 font-weight-bold"><span> Familiar Environment</span></h4>
		<div class="text10">Pets are subject to feel less anxious and stressed in the familiar environment of their home. Creating a better experience for both pet owners and their pets during a grooming session.</div>
		<h4 class="groom6 font-weight-bold"><span> Hands on Experience</span></h4>
		<div class="text11">Personalized individual attention is given to each pet and expert care from our groomers throughout the grooming process. Pet Parents are able to constantly communicate and observe with professionals throughout the appointment.</div>

	<img id="vector1" src="img/Vector-2.png"></img>
	<img id="vector2" src="img/Gelbiru.png"></img>
		<div class="title">
		<span class="pack-2 font-weight-bold">What Customers Say About Us</span>
		<div class="text4">Some testimonials from our Customers</div>
		<div>
			<button class="set" onclick="window.location.href='review-show.php'">View More</button>
		</div>
	<div id="pack5"></div>
	<div id="pack6"></div>
	<img id="vector4" src="img/profil.png"></img>
	<img id="vector5" src="img/profil.png"></img>
	<div>
		<div class="text5">Jhon Wick</div>
			<div class="text7">My dog really love it, HelloPet is the best place to grooming your pet</div>
			<img id="vector6" src="img/quote.png"></img>
		<div class="text6">Ryder</div>
			<div class="text8">Usually take care of Marshall and Rubble, they like it! Next time i must ensure Rocky to bath properly, hope HelloPet can make my Rocky calm XD.</div>
			<img id="vector7" src="img/quote.png"></img>
	</div>
	<div class="title">
		<span class="pack-3">FREQUENTLY ASK QUETION</span>
		<div id="pack7" href="contact.php"></div>
			<span class="pack-4">NEED HELP?</span>
			<img id="vector8" src="img/telp.png"></img>
				<div class="text12">Call us on </div>
				<div class="text16 font-weight-bold">089138017238</div>
			<img id="vector9" src="img/email.png"></img>
				<div class="text13">Email us at</div>
				<div class="text17 font-weight-bold">hellopet@gmail.com</div>
			<div class="text14">Monday to Friday Saturday & Sunday </div>
			<div class="text15">8am-5pm 9am-4pm </div>
            <section class="faq">
                <div class="faq-left">
                    <!-- FAQ LEFT -->
                    <div class="faq-left">
                        <ul class="faq-container">
        
                                <li>
                                    <label for="q1">Q: What are the payment methods? </label> <input name="question" id="q1" type="checkbox" value="">
                                    <div class="answer">
                                        <p>You can make payment after service or via bank transfer.</p>
                                    </div>
                                </li>
        
                                <li>
                                    <label for="q2">Q: What do I need to provide the Pet Groomer? </label> <input name="question" id="q2" type="checkbox" value="">
                                    <div class="answer">
                                        <p>Water and a well-lit area that has access to power outlets.</p>
                                    </div>
                                </li>
        
                                <li>
                                    <label for="q3">Q: How long does a grooming service take? </label> <input name="question" id="q3" type="checkbox" value="">
                                    <div class="answer">
                                        <p>It will take about 1-2 hours.</p>
                                    </div>
                                </li>
        
                        </ul>
        
                    </div>
                </div>
            </section>
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
