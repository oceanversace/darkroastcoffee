<?php 
	include("config.php");
	session_start();
	if ( !(isset($_SESSION["login"])) ) {
		header('Location: index.php');
		die;
	}

	$id = $_SESSION['id'];
    $data = mysqli_query($conn, "SELECT * FROM appointment WHERE user_id=$id;");

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>Name</td>
            <td>Packages</td>
            <td>Order Date</td>
            <td>Order Time</td>
        </tr>

        <?php while( $res = mysqli_fetch_assoc($data) ) :
            $usr_id = $res['user_id'];
            $pck_id = $res['package_id'];
            $data2 = mysqli_query($conn, "SELECT nama FROM user WHERE id=$usr_id;");
            $data3 = mysqli_query($conn, "SELECT pname FROM package WHERE id=$pck_id;");
            $res2 = mysqli_fetch_assoc($data2);
            $res3 = mysqli_fetch_assoc($data3);            
            $usr_nama = $res2['nama'];
            $pck_name = $res3['pname'];
            ?>
            <tr>
                <td><?=$usr_nama?></td>
                <td><?=$pck_name?></td>
                <td><?=$res['order_date']?></td>
                <td><?=$res['order_time']?></td>
            </tr>

        <?php endwhile; ?>

    </table>
</body>
</html>