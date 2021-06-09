<?php
    session_start();
	include('config.php');
	if( !isset($_SESSION["login"]) ) {
    	header('Location: home.php');
  	}

    // var_dump($_GET);
    $pet = $_GET['pet'];
    $size = $_GET['size'];
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    $date = $_GET['date'];
    $time = $_GET['time'];
    $pck_id = $_GET['pck_id'];
    $payment = $_GET['payment'];

    // var_dump($_SESSION);
    $usr_id = $_SESSION['id'];

    $data = mysqli_query($conn, "INSERT INTO `appointment` (`id`, `package_id`, `user_id`, `order_date`, `order_time`, `status`, `payment`, `pet_type`, `pet_size`, `pet_age`, `pet_gender`, `butki_trf`) VALUES (NULL, '$pck_id', '$usr_id', '$date', '$time', 'pending', '$payment', '$pet', '$size', '$age', '$gender', NULL);");
    // var_dump($data);

    $data = mysqli_query($conn, "SELECT id FROM appointment WHERE package_id=$pck_id AND user_id=$usr_id AND order_date = '$date' AND order_time='$time' AND status='pending' AND pet_type='$pet' AND pet_size='$size' AND pet_age=$age;");
    // var_dump($data);
    $res = mysqli_fetch_assoc($data);
    $apt_id = $res["id"];
    // var_dump($res);

    if ($payment == "after service") :
        header('Location:bookingdetails.php?id=' . $apt_id);
    else :
        header('Location:transaction.php?id=' . $apt_id);
    endif;
?>