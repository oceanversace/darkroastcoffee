<?php 
	include("config.php");
	if( isset($_POST["submit"]) ) {

		$email = strtolower(stripslashes($_POST["email"]));
		$username = strtolower(stripslashes($_POST["username"]));
		$nama = strtolower(stripslashes($_POST["nama"]));

		$password = mysqli_real_escape_string($conn, $_POST["password"]);
		$konfpassword = mysqli_real_escape_string($conn, $_POST["confirm-password"]);

		$res = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'");

		if(mysqli_fetch_assoc($res)) {
			echo "<script>
					alert('Email telah terdaftar!');
					window.location.replace('sign-up.html');
				</script>";
			die;
		}

		if ( $password !== $konfpassword ) {

			echo "<script type='text/javascript'>
    			alert('Konfirmasi password tidak sesuai!');
    			window.location.replace('sign-up.html');
				</script>";

		}

		
		
		$password = password_hash($password, PASSWORD_DEFAULT);

		mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password','$nama','$email','','','customer');");
		echo '<script>
				alert("Registrasi Sukses!");
				window.location.replace("home.html");
			</script>';
	}
 ?>