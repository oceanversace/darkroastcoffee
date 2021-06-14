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
	<title>Sign In HelloPet</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
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
		height: 578px;
		left: 469px;
		top: 40px;

		background: #FFFFFF;
		box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
		border-radius: 30px;
	}
	.title{
		position: absolute;
		width: 110px;
		height: 29px;
		left: 163px;
		top: 29px;

		font-family: Roboto;
		font-style: normal;
		font-weight: bold;
		font-size: 25px;
		line-height: 29px;

		color: #000000;
	}
	.email{
		position: absolute;
		width: 119px;
		height: 19px;
		left: 48px;
		top: 118px;

		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		line-height: 19px;
		color: #000000;
	}
	.user-email{
		position: absolute;
		width: 300px;
		height: 30px;
		left: 515px;
		top: 190px;
		border: none;
		background: #E5EAED;
		border-radius: 5px;
		padding: 10px;
	}
	.pass{
		position: absolute;
		width: 71px;
		height: 19px;
		left: 517px;
		top: 260px;

		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		line-height: 19px;
		color: #000000;
	}
	.user-password{
		position: absolute;
		width: 300px;
		height: 30px;
		left: 0px;
		top: 30px;
		border: none;
		background: #E5EAED;
		border-radius: 5px;
		padding: 10px
	}
	.signin-button{
		position: absolute;
		width: 113px;
		height: 39px;
		left: 625px;
		top: 480px;
		font-family: Roboto;
		font-style: normal;
		font-weight: bold;
		font-size: 16px;
		color: #FFFFFF;
		background: #53B2F2;
		border-radius: 10px;
		border: none;
		cursor: pointer;
	}
	.signin-button:hover{
		background : #309BE4;
	}
	.signin-button:focus{
		outline: none;
	}
	.not-member{
		position: absolute;
		width: 110px;
		height: 19px;
		left: 580px;
		top: 544px;

		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		line-height: 19px;
		color: #000000;
	}
	.sign-up{
		position: absolute;
		width: 83px;
		height: 19px;
		left: 695px;
		top: 544px;

		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		line-height: 19px;
		text-decoration-line: underline;

		color: #000000;
	}
	#hide1{
		display: none;
	}
</style>
<body>
	<div id="card">
		<p class="title">SIGN IN</p>
		<form action="proseslogin.php" method="POST">
		<label for="user-email" class="email">Email</div>
		<input
  				id="user-email"
  				class="user-email"
  				type="email" type="text"
   				name="email"
   				autocomplete="on"
   				required />
   		<div class="pswd">
   			<label for="user-password" class="pass">Password</span>
   			<input
  				id="user-password"
   				class="user-password"
   				type="password"
   				name="password"
   				required />
   				<i id="hide1" onclick="myFunction()" class="iconify" data-icon="bi:eye-fill" style="font-size: 20px; position: absolute;
				left: 280px; top: 45px; color:#666666; cursor:pointer;"></i>
   				<i id="hide2" onclick="myFunction()" class="iconify" data-icon="bi:eye-slash-fill" style="font-size: 20px; position: absolute;
				left: 280px; top: 45px; color:#666666; cursor: pointer;"></i>
   			</span>
   		</div>
   		<button type="submit" name="submit" class="signin-button">SIGN IN</button>
   		</form> 
   		<span class="not-member">Not a member?</span>
   		<a class="sign-up" href="sign-up.html">Signup now</a>
   	</div>
   	<a href="home-sebelumlogin.html">
  		<i class="iconify" data-inline="false" data-icon="gridicons:cross" style="font-size: 35px; position: absolute; top: 30px; left: 1300px; color:#000000"></i>
 	</a>
   	<script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
	<script>
  	 function myFunction(){
  	 	var x = document.getElementById("user-password");
  	 	var y = document.getElementById("hide1");
  	 	var z = document.getElementById("hide2");
  	 	if(x.type=='password'){
  	 		x.type="text";
  	 		y.style.display="block";
  	 		z.style.display="none";
  	 	}
  	 	else{
  	 		x.type="password";
  	 		y.style.display="none";
  	 		z.style.display="block";
  	 	}
  	 }
  </script>
</body>
</html>
