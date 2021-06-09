<?php
    session_start();
    include('config.php');
    if( !isset($_SESSION["login"]) ) {
    	header('Location: adminlogin.php');
  	}
    else if( $_SESSION["role"] != "admin" ) {
        header('Location: ../');
    }

    $id = $_GET['id'];
    $data = mysqli_query($conn, "SELECT * FROM appointment WHERE id=$id");
    $res = mysqli_fetch_assoc($data);
    // var_dump($res);
    $pck_id = $res['package_id'];
    $usr_id = $res['user_id'];
    $date = $res['order_date'];
    $time = $res['order_time'];
    $status = $res['status'];
    $payment = $res['payment'];
    $pet = $res['pet_type'];
    $size = $res['pet_size'];
    $age = $res['pet_age'];
    $gender = $res['pet_gender'];
    $status_bayar = $res['status_bayar'];


    $data1 = mysqli_query($conn, "SELECT * from user where id=$usr_id");
    $res1 = mysqli_fetch_assoc($data1);
    // var_dump($res1);
    $nama = $res1['nama'];
    $email = $res1['email'];
    $phone = $res1['no_telp'];
    $address = $res1['alamat'];

    $data2 = mysqli_query($conn, "SELECT * FROM package WHERE id=$pck_id");
    $res2 = mysqli_fetch_assoc($data2);
    // var_dump($res2);
    $pname = $res2['pname'];
    $price = $res2['price'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details | Hellopet</title>
</head>
<body>
    
    <button onclick="window.history.back();">Kembali</button>
    <h1>Order Details</h1>

    <h3>Pet Details</h3>
    <ul>
        <li>Pet Type : <?php if( $pet=='anjing' ) echo 'Dog'; else echo 'Kucing';?></li>
        <li>Pet Size : <?php if( $size=='kecil' ) echo 'Small'; else if( $size=='sedang' ) echo 'Medium'; else echo 'Besar';?></li>
        <li>Pet Age : <?=$age?> month</li>
        <li>Pet Gender : <?php if( $gender=='jantan' ) echo 'Male'; else echo 'Female'?></li>
    </ul>
    <h3>Customer Details</h3>
    <ul>
        <li>Name : <?=$nama?></li>
        <li>Email : <?=$email?></li>
        <li>Phone : <?=$phone?></li>
        <li>Adress : <?=$address?></li>
        <li>Appointment : <?=$date,", ", $time?></li>
    </ul>
    <h3>Package Details</h3>
    <ul>
        <li>Package : <?=$pname?></li>
        <li>Cost : <?=$price?></li>
    </ul>
    <h3>Payment Details</h3>
    <ul>
        <li>Method : <?php if( $payment=='transfer' ) echo 'Transfer'; else echo 'Pay After Service';?></li>
        <li>Status : <?php if( $status_bayar=='sudah bayar' ) echo 'Paid'; else echo 'Not yet paid';?></li>
        <?php if( $status_bayar!='sudah bayar' ) : ?>
            <li><button onclick="window.location.href='paid.php?id=<?=$id?>'">Set to Paid</button></li>
        <?php endif;?>
    </ul>
    
</body>
</html>