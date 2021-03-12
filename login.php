<?php 
// cek submit udah dipencet atau belum
if (isset($_POST["submit"])) {
	// cek uname & password
	if ($_POST["username"] == "admin" && $_POST["password"] == "6969") {
	// jika benar, ke profile.php
		header("Location: profile.php");
	}
	// jika salah, refresh dan tampilkan warn
	else {
		$error = true;
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

<h1>Login</h1>

<?php if(isset($error)) :  ?>
	<p style="color:red; font-style: italic">username atau password salah!</p>
<?php endif; ?>

<ul>
<form action="" method="post">
	
	<li><label for="username"></label>Username 	:
	<input type="text" name="username" id="username"></li>

	<li><label for="password"></label>Password 	:
	<input type="text" name="password" id="password"></li>

	<li><button type="submit" name="submit">Login</button></li>

</form>
</ul>

</body>
</html>