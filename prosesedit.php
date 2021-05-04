<?php 
	include("config.php");
	session_start();
	if ( !(isset($_SESSION["login"])) ) {
		header('Location: index.php');
		die;
	}

	$username = $_SESSION['username'];
	$nama = htmlspecialchars($_POST['nama']);
	$email = htmlspecialchars($_POST['email']);
	$alamat = htmlspecialchars($_POST['alamat']);
	$notelp = htmlspecialchars($_POST['no_telp']);

	$query = "UPDATE user SET nama='$nama', email='$email', alamat='$alamat', no_telp='$notelp' WHERE username='$username'";
	$res = mysqli_query($conn, $query);
	echo "<script type='text/javascript'>
    			alert('Edit Profile Sukses!');
    			window.location.replace('index.php')
				</script>";
	exit;
 ?>
