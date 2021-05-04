<?php 
	include("config.php");
	session_start();
	if ( !(isset($_SESSION["login"])) ) {
		header('Location: index.php');
		die;
	}

	$username = $_SESSION['username'];
	$userRes = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	$res = mysqli_fetch_assoc($userRes);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title> Form Edit | Hellopet</title>
</head>
<body>

		<header>
			<h1>Edit Profile</h1>
		</header>

		<form action="prosesedit.php" method="POST">
		<p>
			<input type="hidden" name="id" value="<?= $res["id"]?>">
			<label for="nama">Nama: </label>
			<input type="text" name="nama" required value="<?php echo $res["nama"] ?>" />
		</p>
		<p>
			<label for="email">Email: </label>
			<input type="text" name="email" required value="<?php echo $res["email"] ?>" />
		</p>
		<p>
			<label for="no_telp">Nomor Telepon: </label>
			<input type="text" name="no_telp" required value="<?php if ( (isset($res["no_telp"])) ) {echo $res["no_telp"];} ?>" />
		</p>
		<p>
			<label for="alamat">Alamat: </label>
			<textarea name="alamat" required></textarea>
		</p>
		<p>
			<input type="submit" value="Edit" name="ubah" />
		</p>
	</form>
</body>
</html>