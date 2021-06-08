<?php
    session_start();
    include('config.php');
    if( !isset($_SESSION["login"]) ) {
    	header('Location: adminlogin.php');
  	}
    else if( $_SESSION["role"] != "admin" ) {
        header('Location: ../');
    }

    $id = $_SESSION['id'];
    $data = mysqli_query($conn, "SELECT * FROM user WHERE id=$id");
    $res = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hellopet Admin</title>
</head>
<body>
    <h1>Hellopet Admin Page</h1>
    <a href="pending.php">Pending Appointments</a> | 
    <a href="done.php">Completed Appointments</a>
</body>
</html>