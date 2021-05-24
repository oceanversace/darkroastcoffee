<?php 
  session_start();
  include('config.php');
  if( isset($_SESSION["login"]) ) {
    header('Location: home.html');
  }
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>HelloPet</title>
</head>
<style>
	body{
		background: url("img/Bcg.png");
  		background-repeat: no-repeat;
  		background-attachment: fixed;
  		background-size: cover;
	}
	#card{
		position: absolute;
		width: 422px;
		height: 609px;
		left: 469px;
		top: 27px;

		background: #FFFFFF;
		box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
		border-radius: 30px;
	}
	.title{
		position: absolute;
		width: 110px;
		height: 29px;
		left: 163px;
		top: 23px;

		font-family: Roboto;
		font-style: normal;
		font-weight: bold;
		font-size: 25px;
		line-height: 29px;

		color: #000000;
	}
	.form {
   		align-items: left;
    	display: flex;
    	flex-direction: column;
	}
	.name{
		position: absolute;
		width: 80px;
		height: 19px;
		left: 49px;
		top: 75px;

		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		line-height: 19px;

		color: #000000;
	}
	.your-name{
		position: absolute;
		width: 327px;
		height: 20px;
		left: 45px;
		top: 98px;
		border: none;
		background: #E5EAED;
		border-radius: 5px;
		padding: 10px;
	}
	.email{
		position: absolute;
		width: 40px;
		height: 19px;
		left: 49px;
		top: 149px;

		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		line-height: 19px;

		color: #000000;
	}
	.email-user{
		position: absolute;
		width: 327px;
		height: 20px;
		left: 45px;
		top: 171px;
		border: none;
		background: #E5EAED;
		border-radius: 5px;
		padding: 10px;
	}
	.user{
		position: absolute;
		width: 73px;
		height: 19px;
		left: 49px;
		top: 221px;

		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		line-height: 19px;
		color: #000000;
	}
	.user-name{
		position: absolute;
		width: 327px;
		height: 20px;
		left: 45px;
		top: 244px;
		border: none;
		background: #E5EAED;
		border-radius: 5px;
		padding: 10px;
	}
	.pass{
		position: absolute;
		width: 71px;
		height: 19px;
		left: 49px;
		top: 295px;

		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		line-height: 19px;
		color: #000000;
	}
	.password-user{
		position: absolute;
		width: 327px;
		height: 20px;
		left: 45px;
		top: 319px;
		border: none;
		background: #E5EAED;
		border-radius: 5px;
		padding: 10px;
	}
	.rptpass{
		position: absolute;
		width: 132px;
		height: 19px;
		left: 49px;
		top: 372px;

		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		line-height: 19px;

		color: #000000;

	}
	.rpt-psw{
		position: absolute;
		width: 327px;
		height: 20px;
		left: 45px;
		top: 395px;
		border: none;
		background: #E5EAED;
		border-radius: 5px;
		padding: 10px;
	}
	.phone{
		position: absolute;
		width: 107px;
		height: 19px;
		left: 49px;
		top: 448px;

		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		line-height: 19px;
		color: #000000;
	}
	.phone-numb{
		position: absolute;
		width: 327px;
		height: 20px;
		left: 45px;
		top: 473px;
		border: none;
		background: #E5EAED;
		border-radius: 5px;
		padding: 10px;
	}
	.registerbtn{
		color: #FFFFFF;
		position: absolute;
		width: 113px;
		height: 39px;
		left: 155px;
		top: 529px;
		cursor: pointer;
		border: none;
		background: #53B2F2;
		box-shadow: 0px 4px 30px rgba(83, 178, 242, 0.5);
		border-radius: 10px;
	}
	.button-icon{
		position: absolute;
		width: 50px;
		height: 50px;
		left: 1302px;
		top: 21px;
		background: none;
		border: none;
		cursor: pointer;
	}
	#hide1{
		display: none;
	}
</style>
<body>
	<div id="card">
		<form method="post" class="form" action="prosesregist.php">
		<span class="title">SIGN UP</span>
		<div class="name">Your Name</div>
		<input type="text" id="yourname" class="your-name" name="nama" required/>
		<div class="email">Email</div>
		<input
  				id="user-email"
  				class="email-user"
  				type="email"
   				name="email"
   				autocomplete="on"
   				required />
   		<div class="user">Username</div>
   		<input type="text" id="username" class="user-name" name="username" required/>
   		<div class="pswd">
   			<span class="pass">Password</span>
   			<input
  				id="user-password"
   				class="password-user"
   				type="password"
   				name="password"
   				required />
   			<span class="eye" onclick="myFunction()">
   				<i id="hide1" class="iconify" data-icon="bi:eye-fill" style="font-size: 20px; position: absolute;
				left: 338px; top: 328px; cursor:pointer;"></i>
   				<i id="hide2" class="iconify" data-icon="bi:eye-slash-fill" style="font-size: 20px; position: absolute;
				left: 338px; top: 328px; cursor:pointer;"></i>
   			</span>
   		</div>
   		<div class="pswd">
   			<span class="rptpass">Confirm Password</span>
   			<input
   				id="repeat-password"
   				class="rpt-psw"
   				type="password"
   				name="confirm-password"
   				required/>
   			<span class="eye" onclick="myFunction()">
   				<i id="hide1" class="iconify" data-icon="bi:eye-fill" style="font-size: 20px; position: absolute;
				left: 339px; top: 405px; cursor:pointer;"></i>
   				<i id="hide2" class="iconify" data-icon="bi:eye-slash-fill" style="font-size: 20px; position: absolute;
				left: 339px; top: 405px; cursor:pointer;"></i>
   			</span>
   		</div>
   		<label class="phone">Phone Number</label>
   			<input 
   				type="tel" 
   				name="notelp"
   				id="user-phone-number"
   				class="phone-numb"
   				required/>
   		<button type="submit" name="submit"class="registerbtn"><b>SIGN UP</b></button> 
  </div>
  <button type="close-outline" class="button-icon">
  	<span class="iconify" data-inline="false" data-icon="gridicons:cross" style="font-size: 35px;"></span>
  </button>
  <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
  <script>
  	 function myFunction(){
  	 	var x = document.getElementById("user-password");
  	 	var y = document.getElementById("hide1");
  	 	var z = document.getElementById("hide2");
  	 	if(x.type==='password'){
  	 		x.type="text";
  	 		y.display="block";
  	 		z.display="none";
  	 	}
  	 	else{
  	 		x.type="password";
  	 		y.style.display="none";
  	 		z.style.display="block";
  	 	}
  	 }
  </script>
	</div>	
</body>
</html>
