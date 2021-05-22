<?php 
	session_start();

	include('config.php');
	// var_dump($_POST);
	// echo '<br>';
	// die;
	if (isset($_POST["submit"])) {

		$email = $_POST["email"];
		$password = $_POST["password"];
		// var_dump($_POST);
		
		$userRes = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

		$res = mysqli_fetch_assoc($userRes);
		// die;
		if($res) {
			if ( password_verify($password, $res['password']) ) {
				
				$_SESSION["login"] = true;
				$_SESSION["id"] = $res['id'];
				$_SESSION["email"] = $res['email'];
				echo "<script type='text/javascript'>
    			alert('Login Sukses!');
    			window.location.replace('home.php')
				</script>";
				exit;
			}
		}
		
	}
	
	echo "<script type='text/javascript'>
    			alert('Username/passowrd salah.');
    			window.location.replace('login-rev.php')
				</script>";
 ?>