<?php 
	if (isset($_POST["login"])) {
		if ($_POST["username"] == "admin" && $_POST["password"] == "pethello") {
			echo "<script type='text/javascript'>
    			alert('Login Sukses!');
    			window.location.replace('index.php')
				</script>";
		}
		else {
			header('Location: index.php');
		}
	}
	else {
		header('Location: index.php');
	}
 ?>