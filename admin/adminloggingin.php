<?php 
	session_start();

	include('config.php');
	if (isset($_POST["login"])) {

		$username = $_POST["username"];
		$password = $_POST["password"];

		$userRes = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

		$res = mysqli_fetch_assoc($userRes);

		if($res) {
			if ( password_verify($password, $res['password']) ) {
                if ( $res["role"] == 'admin' || $res["role"] == 'owner'){
				
				    $_SESSION["login"] = true;
				    $_SESSION["id"] = $res['id'];
				    $_SESSION["username"] = $res['username'];
                    $_SESSION["role"] = $res["role"];
				    echo "<script type='text/javascript'>
    			    alert('Login Sukses!');
    			    window.location.replace('index.php')
				    </script>";
				    exit;
                }
			}
		}
		
	}
	
	echo "<script type='text/javascript'>
    			alert('Username/passowrd salah.');
    			window.location.replace('index.php')
				</script>";
 ?>