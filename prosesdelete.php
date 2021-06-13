<?php 
	include("config.php");
	session_start();

	$usr_id = $_SESSION['id'];
	$query = "DELETE FROM user WHERE id=$usr_id";
	if ($query) {
		echo "<script type='text/javascript'>
    			alert('Delete Account Sukses!');
    			window.location.replace('proseslogout.php');
				</script>";
	}
	else {
		echo "<script type='text/javascript'>
    			alert('Delete Account Gagal!');
    			window.location.replace('proseslogout.php');
				</script>";
	}
 ?>