<?php 
	session_start();
	include('config.php');
	if( isset($_SESSION["login"]) ) {
		header('Location: index.php');
	}
 ?>

<!DOCTYPE html
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>HelloPet | Login</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
	<link rel="icon" href="logo.png" type="image/x-icon">
</head>
<style>
body{
	background: url('gropack.png');
}
#pack{
 	position: absolute;
	width: 362px;
	height: 221px;
	left: 514px;
	top: 175px;
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
  padding-top: 10px;
  padding-left: 30px;
  margin: 0 -16px;
}

.login {
	position: absolute;
	width: 78px;
  height: 35px;
	padding-right: 10px;
	margin-top: 20px;
	margin-left: 202px;
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
			<h1>Login</h1>
		</header>
		<form method="POST" action="adminloggingin.php">
		<ul>
			<div class="row">
				<li>
					<label for="username">Username : </label>
					<input type="text" name="username">
				</li>
			</div>
			<div class="row">
				<li>
					<label for="password">Password &nbsp: </label>
					<input type="password" name="password">
				</li>
			</div>
			<input class="login" type="submit" value="Login" name="login">
		</ul>
		</form>
	</div>
	</div>
</body>
</html>
