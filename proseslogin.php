<?php 
	include('config.php');
	if (isset($_POST["login"])) {

		$username = $_POST["username"];
		$password = $_POST["password"];

		$userRes = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

		$res = mysqli_fetch_assoc($userRes);

		if($res) {
			if ($res["password"] = $password) {
				echo "<script type='text/javascript'>
    			alert('Login Sukses!');
    			window.location.replace('index.php')
				</script>";
			}
		}
		else {
			header('Location: index.php');
		}
	}
	else {
		header('Location: index.php');
	}
 ?>