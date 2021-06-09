<?php 
	include("config.php");
	session_start();
	if ( !(isset($_SESSION["login"])) ) {
		header('Location: index.php');
		die;
	}
	// var_dump($_POST);
	// die;
	$username = htmlspecialchars($_POST['username']);
	$nama = htmlspecialchars($_POST['nama']);
	$email = htmlspecialchars($_POST['email']);
	$alamat = htmlspecialchars($_POST['alamat']);
	$notelp = htmlspecialchars($_POST['no_telp']);

	$query = "UPDATE user SET nama='$nama', email='$email', alamat='$alamat', no_telp='$notelp' WHERE username='$username'";
	$res = mysqli_query($conn, $query);
	// var_dump($res);
	// die;
	echo "<script type='text/javascript'>
    			alert('Edit Profile Sukses!');
    			window.history.back();
				</script>";
	exit;
 ?>
