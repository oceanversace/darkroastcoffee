<?php 
	session_start();
	include('config.php');
	if( !isset($_SESSION["login"]) ) {
    	header('Location: home.php');
  	}

    var_dump($_POST);

    if( isset($_POST['submit']) ) {
        $current_pass = $_POST['current-pass'];
        $new_pass = $_POST['new-pass'];
        $id = $_SESSION['id'];
        // var_dump($id);
        $data = mysqli_query($conn, "SELECT * FROM user WHERE id=$id");
        $res = mysqli_fetch_assoc($data);
        if ($data) {
            if ( password_verify($current_pass, $res['password']) ) {
                $new_pass = password_hash($new_pass, PASSWORD_DEFAULT);
                $data1 = mysqli_query($conn, "UPDATE user SET password='$new_pass' WHERE id=$id");

                if ($data1) {
                    echo "<script type='text/javascript'>
                        alert('Ubah Password Berhasil!');
                        window.history.back();
                        </script>";
                }
                else {
                    echo "<script type='text/javascript'>
                        alert('Ubah Password Gagal!');
                        window.history.back();
                        </script>";
                }
            }
        }
        
    }
    
 ?>