<?php 
	session_start();
	include('config.php');
	if( !isset($_SESSION["login"]) ) {
    	header('Location: home.php');
  	}

    var_dump($_GET);
    $pet = $_GET['pet'];
	$size = $_GET['size'];
	$age = $_GET['age'];
	$gender = $_GET['gender'];
    $date = $_GET['date'];
    $time = $_GET['time'];
    $pck_id = $_GET['pck_id'];

    var_dump($_SESSION);
    $usr_id = $_SESSION['id'];

    $data = mysqli_query($conn, "SELECT price FROM package WHERE id=$pck_id");
    $res = mysqli_fetch_assoc($data);
    $pck_price = $res['price'];
    $tax = 0;

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
    <h1>Payment Summary</h1>
    <p>Package Fee : <?=$pck_price?></p>
    <p>Taxes : <?=$tax?></p>
    <p>Total : <?=$pck_price?></p>

    <form action="prosespayment.php">
        <input type="hidden" name="pet" value="<?=$pet?>">
		<input type="hidden" name="size" value="<?=$size?>">
		<input type="hidden" name="age" value="<?=$age?>">
		<input type="hidden" name="gender" value="<?=$gender?>">
        <input type="hidden" name="date" value="<?=$date?>">
        <input type="hidden" name="time" value="<?=$time?>">
        <input type="hidden" name="pck_id" value="<?=$pck_id?>">
        <label for="payment">Payment Method : </label>
        <input type="radio" id="payment" name="payment" value="transfer">Transfer
        <input type="radio" id="payment" name="payment" value="after service">After service
        <button type="submit" ><b>NEXT</b></button>
    </form> 

</body>
</html>