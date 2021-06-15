<?php 
	include("config.php");
	session_start();

	$usr_id = $_SESSION['id'];
	$query = mysqli_query($conn, "DELETE FROM feedback WHERE cust_id=$usr_id");
	$query = mysqli_query($conn, "DELETE FROM appointment WHERE user_id=$usr_id");
	$query = mysqli_query($conn, "DELETE FROM `user` WHERE `user`.`id` = $usr_id");
	if ($query) {
		echo "<script type='text/javascript'>
    			alert('Delete Account Sukses!');
    			window.location.replace('proseslogout.php');
				</script>";
	}
	else {
		echo "<script type='text/javascript'>
    			alert('Delete Account Gagal!');
    			window.location.replace('myprofile.php');
				</script>";
	}
 ?>