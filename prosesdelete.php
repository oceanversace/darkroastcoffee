<?php 
	include("config.php");
	session_start();

	$username = $_SESSION['username'];
	$query = "DELETE FROM user WHERE username = '$username'";
	$res = mysqli_query($conn, $query);
	if ($res) {
		echo "<script type='text/javascript'>
    			alert('Delete Account Sukses!');
    			window.location.replace('proseslogout.php')
				</script>";
	}
 ?>