<?php 
	session_start();
	include('config.php');
	if( isset($_SESSION["login"]) ) {
		header('Location: index.php');
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Hellopet | Login
	</title>
</head>
<body>

	<header>
		<h1>Login</h1>
	</header>
	<form method="POST" action="proseslogin.php">
	<ul>
		<li>
			<label for="username">Username : </label>
			<input type="text" name="username">
		</li>
		<li>
			<label for="password">Password : </label>
			<input type="password" name="password">
		</li>
		<input type="submit" value="Login" name="login">
	</ul>
	</form>

</body>
</html>