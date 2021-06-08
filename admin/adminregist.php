<?php 
	session_start();
	include('config.php');
	if( !isset($_SESSION["login"]) && $_SESSION["role"] != "admin") {
    	header('Location: ../');
  	}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Registrasi</title>
</head>
<body>

	<h1>Halaman Registrasi</h1>

	<form action="adminregistrasi.php" method="post">
		
		<ul>
			
			<li>
				
				<label for="username">Username : </label>
				<input type="text" name="username" id="username">

			</li>
			<li>
				
				<label for="password">Password : </label>
				<input type="password" name="password" id="password">

			</li>
			<li>
				
				<label for="konfpassword">Konfirmasi Password : </label>
				<input type="password" name="konfpassword" id="konfpassword">

			</li>

			<button type="submit" name="register">Register!</button>

		</ul>

	</form>

</body>
</html>