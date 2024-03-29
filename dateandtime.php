<?php
    session_start();
	include('config.php');
	if( !isset($_SESSION["login"]) ) {
    	header('Location: home.php');
  	}

	if ( !isset($_POST['pet']) ) {
		header('Location: home.php');
	}

	$pet = $_POST['pet'];
	$size = $_POST['size'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<title>Date and Time HelloPet</title>
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
	.box{
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
		width: 450px;
		height: 34px;
		left: 118px;
		top: 20px;

		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 25px;
		line-height: 34px;
		letter-spacing: 0.12em;

		color: #000000;
	 }
	 .time1{
        color: #000000;
        background: #ffffff;
        border-radius: 12px;
		border: 1px solid rgb(185, 185, 185);
        cursor: pointer;
        font-family: century Gothic;
		font-size: 14px;
		text-align: left;
    }
	.time2{
        color: #000000;
        background: #ffffff;
        border-radius: 12px;
		border: 1px solid rgb(185, 185, 185);
        cursor: pointer;
        font-family: century Gothic;
		font-size: 14px;
		text-align: left;
    }
	.time3{
        color: #000000;
        background: #ffffff;
        border-radius: 12px;
		border: 1px solid rgb(185, 185, 185);
        cursor: pointer;
        font-family: century Gothic;
		font-size: 14px;
		text-align: left;
    }
	.time4{
        color: #000000;
        background: #ffffff;
        border-radius: 12px;
		border: 1px solid rgb(185, 185, 185);
        cursor: pointer;
        font-family: century Gothic;
		font-size: 14px;
		text-align: left;
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
    .back{
        position: absolute;
        width: 78px;
        height: 35px;
        left: 120px;
        top: 380px;
        color: #000000;
        background: #cccccc;
        border-radius: 12px;
        border: #FD9EBD;
        background: -webkit-linear-gradient(bottom, #f5d6e6 1%, #d3d3d3 10%);
        background: -moz-linear-gradient(bottom, #f5d6e6 1%, #d3d3d3 10%);
        background: linear-gradient(bottom, #f5d6e6 1%, #d3d3d3 10%);
        cursor: pointer;
        font-family: century Gothic;
        font-style: bold;
    }
	
	
#idx-calendar {
		margin: 0 auto;
		margin-top: 60px;
		margin-left: 130px;
		width: 250px;
		height: 220px;
		text-align: center;
	} 
#idx-calendar div > ul {
		list-style: none ;
		background-color: #ffffff;
		box-shadow: 0px 4px 4px rgba(121, 98, 77, 0.5);
		margin: 0;
		padding: 0 5px;
	}
#idx-calendar #dayNames > ul {
		background-color: #ffffff;
	}
#idx-calendar ul li {
		color: #000000;
		float: left;
		font-family: Tahoma;
		font-weight: inherit;
	}
#dayNames ul li {
		font-weight: bold;
		margin: 1% 0;
		padding: 1% 0;
		width: 14.2857%;
	}
#daysNum ul li:hover {
		color: #ffffff !important;
		background-color: #0084B4;
		border-radius: 40%;
	}
#daysNum ul li {
		padding: 2.5% 0;
		width: 14.2857%;
	}
#dayNames,#daysNum {
		clear: both;
		width: 100%;
	}
#dayNames:after,#daysNum:after,#idx-calendar div > ul:after  {
		content: "";
		display: table;
		clear: both;
	}
#idx-calendar div > ul li:first-child {
		color: #F05558;
		font-weight: bold;
	}
#idx-calendar li.dayNow {
		color: #ffffff !important;
		font-weight: bold;
		background-color: #0084B4;
		border-radius: 40%;
		position: relative;
		z-index: 2;
	}
	.monthNow {
			color: #0084B4;
			font-family: arial;
			font-size: 40px;
			text-align: left;
		}
#monthNow {
		background-color:#d8d8d8;
		box-shadow: 0px 1px 1px rgba(121, 98, 77, 0.5);
		font-family: verdana;
		font-weight: bold;
		color: #000000;
		padding: 20px;
		text-transform: uppercase;
	}
#calendar-control {
		position: relative;
	}
#nextMonth, #prevMonth {
		transition:0.5s;
		background-color: #ffffff;
		color: #FFFFFF;
		font-family: verdana;
		height: 0%;
		position: absolute;
		right: 0;
		text-transform: uppercase;
		top: 0;
		width: 60px;
	}
#prevMonth{
		left: 0;            
	}
#prevMonth:before, #nextMonth:before {
		background-color: #d8d8d8;
		border-radius: 50%;
		transition:0.5s;
		border-right: 1px solid #000000;
		border-top: 1px solid #000000;
		content: "";
		display: block;
		height: 20px;
		left: 20px;
		position: relative;
		top: 18px;
		transform: rotate(45deg);
		width: 20px;
	}
#prevMonth:before{
		transform: rotate(-135deg);
	}
#nextMonth:hover, #prevMonth:hover{
		background-color: transparent;
	}
#nextMonth:hover:before, #prevMonth:hover:before{
		border-radius: 0%;
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
					  <a class="nav-item nav-link" href="contactus.html">Contact Us</a>
					</div>
			</div>
		  </nav>
		</header>
        	<div>
			<a href="#" type="button" class="buttonprofile" id="buttonprofile"><img id="profile" src="img/profile.png"/></a>
		</div>
	</div>
        <div class="box" id="box">
            <span class="title">APPOINTMENT DATE AND TIME</span>
			<div id="idx-calendar">
				<div id="daysNum"></div>
					<div>
						<form action="groomingpackages.php" method="POST">
	 						<input type="hidden" name="pet" value="<?=$pet?>">
							<input type="hidden" name="size" value="<?=$size?>">
							<input type="hidden" name="age" value="<?=$age?>">
							<input type="hidden" name="gender" value="<?=$gender?>">
							<input type="date" id="date" name="date" >
							<input type="radio" class="time1" id="time" name="time" value="08.00-10.00 WIB" style="position: absolute; left: 408px; top: 135px;">
							<label for="time1" style="position: absolute; left: 428px; top: 130px; font-family: Roboto;">08.00-10.00 WIB</label>
							<input type="radio" class="time2" id="time" name="time" value="10.00-12.00 WIB" style="position: absolute; left: 408px; top: 175px;">
							<label for="time2" style="position: absolute; left: 428px; top: 170px; font-family: Roboto;">10.00-12.00 WIB</label>
							<input type="radio" class="time3" id="time" name="time" value="13.00-15.00 WIB" style="position: absolute; left: 408px; top: 215px;">
							<label for="time3" style="position: absolute; left: 428px; top: 210px; font-family: Roboto;">13.00-15.00 WIB</label>
							<input type="radio" class="time4" id="time" name="time" value="15.00-17.00 WIB" style="position: absolute; left: 408px; top: 255px;">
							<label for="time4" style="position: absolute; left: 428px; top: 250px; font-family: Roboto;">15.00-17.00 WIB</label>
							<button type="submit" class="next"><b>NEXT</b></button>
						</form>
						<button onclick="window.location.href='petdetails.php'" class="back"><b>BACK</b></button>
        			</div>
			</div>
			</div>
		</div>
        <img id="cate" src="img/cate.png"></img>
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
	<script>
        function displayCalendar(month, year){
    
    var monthNow = new Date().getMonth();
    var yearNow = new Date().getFullYear();;
    var nextMonth = month+1;
    var prevMonth = month-1;
    var day = 0;
    
    if((month == monthNow)&&(year == yearNow)){
        var day = new Date().getDate();
    }
    
    var htmlContent ="";
    var FebNumberOfDays ="";
    var counter = 1;
    var Nameday = 1;
    
    if (month == 1){
        if ( (year%100!=0) && (year%4==0) || (year%400==0)){
            FebNumberOfDays = 29;
            }else{
            FebNumberOfDays = 28;
        }
    }
    
    var monthNames = ["January","February","March","April","May","June","July","August","September","October","November", "December"];
    var monthNum = ["1","2","3","4","5","6","7","8","9","10","11", "12"];
    var dayNames = ["Sunday","Monday","Tuesday","Wednesday","Thrusday","Friday", "Saturday"];
    var dayPerMonth = ["31", ""+FebNumberOfDays+"","31","30","31","30","31","31","30","31","30","31"]
    var nextDate = new Date(nextMonth +' 1 ,'+year);
    var weekdays = nextDate.getDay();
    var weekdays2 = weekdays
    var numOfDays = dayPerMonth[month];
                                    
    while (weekdays>0){
    htmlContent += "<li style='padding:1 0 0;'></li>";
        weekdays--;
    }
    
    while (counter <= numOfDays){
        
        if (weekdays2 > 6){
            weekdays2 = 0;
            htmlContent += "</ul><ul>";
        }
        if (counter == day){
            htmlContent +="<li class='dayNow'>"+counter+"</li>";
            Nameday = counter;
            }else{
            htmlContent +="<li>"+counter+"</li>";
        }
        weekdays2++;
        counter++;
    }
    
    document.getElementById("monthNow").innerHTML= monthNames[month]+" "+ year ;
    document.getElementById("daysNum").innerHTML= "<ul id="+monthNum[month]+" class="+year+">"+htmlContent+"</ul>";
		}


		(function() {
			var dateNow = new Date();
			var month = dateNow.getMonth();
			var year = dateNow.getFullYear();
			displayCalendar(month,year)
		})(window);


		document.getElementById("nextMonth").onclick = function(){
			var idmonth = document.getElementById("daysNum");
			var month = idmonth.getElementsByTagName("ul")[0].id;
			var nextYear = idmonth.getElementsByTagName("ul")[0].className;
			var nextMonth = Number(month);
			if(nextMonth == 12){
				nextMonth = 0;
				nextYear = Number(nextYear) + 1
			}
			displayCalendar(nextMonth,nextYear);
		}


		document.getElementById("prevMonth").onclick = function(){
			var idmonth = document.getElementById("daysNum");
			var month = idmonth.getElementsByTagName("ul")[0].id;
			var prevYear = idmonth.getElementsByTagName("ul")[0].className;
			var prevMonth = Number(month) - 2;
			if(prevMonth < 0 ){
				prevMonth = 11;    
				prevYear = Number(prevYear) - 1
			}
			displayCalendar(prevMonth,prevYear);
		}
   </script>
</body>
</html>
