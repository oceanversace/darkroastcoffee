<?php 
	session_start();
    include('config.php');
    if( !isset($_SESSION["login"]) ) {
    	header('Location: adminlogin.php');
  	}
    else if( $_SESSION["role"] != "owner" ) {
        header('Location: ../');
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
	<title>Halaman Registrasi</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
	<link rel="icon" href="logo.png" type="image/x-icon">
<style>
	body{
	background: url('gropack.png');
}
#pack{
 	position: absolute;
	width: 470px;
	height: 320px;
	left: 455px;
	top: 160px;
	border-radius: 12px;
	background: #FFFFFF;
	box-shadow: 0px 4px 28px rgba(121, 98, 77, 0.5);
	background: url('dog.png');
 }
.title {
	font-family: Raboto;
	text-align: center;
}
.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  padding-right: 10px;
  padding-top: 20px;
  padding-left: 30px;
  margin: 0 -16px;
}

.registrasi{
	position: absolute;
	width: 78px;
    height: 35px;
	padding-right: 10px;
	margin-top: 28px;
	margin-left: 278px;
	color: #ffffff;
    background: #9edffd;
    border-radius: 5px;
    border: none;
	background: -webkit-linear-gradient(bottom, #bebebe 1%, #7f8cff 10%);
    background: -moz-linear-gradient(bottom, #bebebe 1%, #7f8cff 10%);
    background: linear-gradient(bottom, #bebebe 1%, #7f8cff 10%);
    cursor: pointer;
    font-family: century Gothic;
    font-style: bold;
}

</style>
<body>
	<div class="background">
	<div id="pack">
		<header class="title">
			<h1>Halaman Registrasi</h1>
		</header>	
	<form action="adminregistrasi.php" method="post">
		
		<ul>
			<div class="row">
				<li>
					<label for="username">Username &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : </label>
					<input type="text" name="username" id="username">
				</li>
			</div>
			<div class="row">
				<li>
					<label for="password">Password &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp: </label>
					<input type="password" name="password" id="password">

				</li>
			</div>
			<div class="row">
				<li>
					<label for="konfpassword">Konfirmasi Password &nbsp: </label>
					<input type="password" name="konfpassword" id="konfpassword">
				</li>
			</div>

			<button class="registrasi" type="submit" name="register">Register!</button>

		</ul>

	</form>
	</div>
	</div>
</body>
</html>
