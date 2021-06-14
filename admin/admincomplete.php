<?php
    session_start();
    include('config.php');
    if( !isset($_SESSION["login"]) ) {
    	header('Location: adminlogin.php');
  	}
    else if( $_SESSION["role"] != "admin" && $_SESSION["role"] != "owner") {
        header('Location: ../');
    }

    $id = $_GET['id'];
    $data = mysqli_query($conn, "UPDATE appointment SET status = 'completed', status_bayar = 'sudah bayar' WHERE id=1;");
    var_dump($data);

    if ($data) {
        echo "<script type='text/javascript'>
    		alert('Complete Order Berhasil!');
    		window.history.back();
			</script>";
    }
    else {
        echo "<script type='text/javascript'>
    		alert('Complete Order Gagal!');
    		window.history.back();
			</script>";
    }
?>