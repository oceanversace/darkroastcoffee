<?php 
	include("config.php");
	if( isset($_POST["register"]) ) {

		$email = strtolower(stripslashes($_POST["email"]));
		$password = mysqli_real_escape_string($conn, $_POST["password"]);
		$konfpassword = mysqli_real_escape_string($conn, $_POST["konfpassword"]);

		$res = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'");

		if(mysqli_fetch_assoc($res)) {
			echo "<script>
					alert('Email telah terdaftar!');
					window.location.replace('registrasi.php');
				</script>";
			die;
		}

		if ( $password !== $konfpassword ) {

			echo "<script type='text/javascript'>
    			alert('Konfirmasi password tidak sesuai!');
    			window.location.replace('registrasi.php');
				</script>";

		}

		
		
		$password = password_hash($password, PASSWORD_DEFAULT);

		mysqli_query($conn, "INSERT INTO user VALUES('', '', '$password','','$email','','','customer');");
		echo '<script>
				alert("Registrasi Sukses!");
				window.location.replace("index.php");
			</script>';
	}
 ?>