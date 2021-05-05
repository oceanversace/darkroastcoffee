<?php 
	session_start();
	if( isset($_SESSION['login']) ) :
		$username = $_SESSION['username'];
	endif;
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
				<a href="proseslogout.php">Logout</a><br>
				<a onClick="\javascript: return confirm('Please confirm deletion');\" href='prosesdelete.php?delet=$username'>Delete Account</a>
			<?php endif; ?>

	</p>

</body>
</html>