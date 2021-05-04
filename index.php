<?php 
	session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Hellopet (?)</title>
</head>
<body>
	<h1>
		Masi Kosong 
	</h1>
	<p>
			<?php if ( !(isset($_SESSION["login"])) ):?>
				<a href="login.php">Login</a><br>
				<a href="registrasi.php">Registrasi</a>
			<?php else: ?>
				<a href="editprofile.php">Edit Profile</a><br>
				<a href="proseslogout.php">Logout</a>
			<?php endif; ?>

	</p>

</body>
</html>