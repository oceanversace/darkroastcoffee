<?php
    session_start();
    include('config.php');
    if( !isset($_SESSION["login"]) ) {
    	header('Location: adminlogin.php');
  	}
    else if( $_SESSION["role"] != "admin" ) {
        header('Location: ../');
    }

    $data1 = mysqli_query($conn, "SELECT * FROM appointment WHERE status='pending'");
    // $res1 = mysqli_fetch_assoc($data1);
    // var_dump($res1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pending Orders | Hellopet</title>
</head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
<body>
    
    <h1>Pending Orders</h1>
    <a href="index.php">Dashboard</a>
    <table>
        <tr>
            <td>Id</td>
            <td>Nama Customer</td>
            <td>Nomor HP</td>
            <td>Paket</td>
            <td>Order Date</td>
            <td>Order Time</td>
            <td>Metode Pembayaran</td>
            <td>Status Pembayaran</td>
            <td>Actions</td>
        </tr>

        <?php while( $res1 = mysqli_fetch_assoc($data1) ) :
            $usr_id=$res1['user_id'];
            $data2 = mysqli_query($conn, "SELECT nama,no_telp FROM user WHERE id=$usr_id");
            $res2 = mysqli_fetch_assoc($data2);
            $pck_id = $res1['package_id'];
            $data3 = mysqli_query($conn, "SELECT pname FROM package WHERE id=$pck_id");
            $res3 = mysqli_fetch_assoc($data3);
            ?>
            <tr>
                <td><?=$res1['id']?></td>
                <td><?=$res2['nama'];?></td>
                <td><?=$res2['no_telp'];?></td>
                <td><?=$res3['pname'];?></td>
                <td><?=$res1['order_date']?></td>
                <td><?=$res1['order_time']?></td>
                <td><?=$res1['payment']?></td>
                <td><?=$res1['status_bayar']?></td>
                <td>
                    <?php $id = $res1['id']; ?>
                    <a href="details.php?id=<?=$id?>">Details</a>
                    <br>
                    <a href="admincomplete.php?id=<?=$id?>">Complete Order</a>
                    <br>
                    <a href="admincancel.php?id=<?=$id?>">Cancel Order</a>
                </td>
            </tr>
        <?php endwhile;?>
    </table>
</body>
</html>