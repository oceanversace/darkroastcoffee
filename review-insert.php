<?php
    session_start();
	include('config.php');
	if( !isset($_SESSION["login"]) ) {
    	header('Location: home.php');
  	}

    if ( !isset($_POST['review']) ) {
        header('Location: home.php');
    }
      
    // var_dump($_POST);
    $usr_id = $_SESSION['id'];
    $feedback = $_POST['review'];
    $data = mysqli_query($conn, "INSERT INTO `feedback` (`id`, `cust_id`, `feedback`) VALUES (NULL, '$usr_id', '$feedback');");
    if ( $data ) {
        echo "<script type='text/javascript'>
    			alert('Terima kasih atas masukan anda!');
    			window.location.replace('home.php');
				</script>";
    }
    else {
        echo "<script type='text/javascript'>
    			alert('Review Error');
    			window.location.replace('home.php')
				</script>";
    }
?>