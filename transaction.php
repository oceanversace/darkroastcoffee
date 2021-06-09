<?php
    session_start();
	include('config.php');
	if( !isset($_SESSION["login"]) ) {
    	header('Location: home.php');
  	}

    $id = $_GET['id'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Transaction HelloPet</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
	<link rel="icon" href="img/logo.png" type="image/x-icon">
</head>
<style>
	.box{
		position: absolute;
		width: 1034px;
		height: 495px;
		left: 162px;
		top: 80px;

		background: #FFFFFF;
		box-shadow: 0px 4px 30px rgba(0, 0, 0, 0.05);
	}
	.back{
		position: absolute;
		left: 40px;
		top: 50px;
		cursor: pointer;
		background: none;
		border: none;
	}
	.title{
		position: absolute;
		width: 251px;
		height: 61px;
		left: 120px;
		top: 20px;

		font-family: Roboto;
		font-style: normal;
		font-weight: 900;
		font-size: 25px;
		line-height: 29px;
		display: flex;
		align-items: center;

		color: #000000;
	}
	.trans{
		position: absolute;
		width: 300px;
		height: 59px;
		left: 120px;
		top: 60px;

		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		line-height: 21px;
		display: flex;
		align-items: center;

		color: #000000;
	}
	.id-trans{
		position: absolute;
		width: 600px;
		height: 59px;
		left: 250px;
		top: 60px;

		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		line-height: 21px;
		display: flex;
		align-items: center;

		color: #000000;
	}
	.line{
		position: absolute;
		width: 912px;
		height: 0px;
		left: 55px;
		top: 125px;

		border: 1px solid #000000;
	}
	.select{
		position: absolute;
		width: 211px;
		height: 56px;
		left: 55px;
		top: 115px;

		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		line-height: 19px;
		display: flex;
		align-items: center;

		color: #000000;
	}
	.next{
		position: absolute;
		width: 112px;
		height: 45px;
		left: 855px;
		top: 425px;
		font-family: Roboto;
		font-size: 18px;
		color: #FFFFFF;
		background: #53B2F2;
		border-radius: 10px;
		border: none;
		cursor: pointer;
	}
	.next:hover{
		background : #309BE4;
	}
</style>
<body style="background-color: #F3F6F6;">
	<div class="box" id="box">
			<button class="back" onclick="window.location.href='home.php'" type="button">
				<span class="iconify" data-inline="false" data-icon="eva:arrow-back-fill" style="font-size: 40px;"></span>
			</button>
			<span class="title" id="title" name="title"><b>HelloPet Order</b></span>
			<span class="trans" id="trans" name="trans">Transaction ID : </span>
			<span class="id-trans" id="id-trans" name="id-trans" value=""> <?=$id?></span>
			<div class="line"></div>
			<form>
				<p class="select" name="select">Select bank :</p>
				<input type="radio" id="BCA" name="Bank" value="BCA" style="position: absolute; left: 55px; top: 200px;">
	 			<img src="img/bca.png" style="position: absolute; width: 98px; height: 61px; left: 100px; top: 180px;">
	 			<label for="BCA" style="position: absolute; left: 210px; top: 200px; font-family: Roboto;">Bank BCA</label>
				<input type="radio" id="Mandiri" name="Bank" value="Mandiri" style="position: absolute; left: 55px; top: 260px;">
	 			<img src="img/mandiri.png" style="position: absolute; width: 81px; height: 31px; left: 108px; top: 255px;">
	 			<label for="Mandiri" style="position: absolute; left: 210px; top: 260px; font-family: Roboto;">Bank Mandiri</label>
	 			<input type="radio" id="BNI" name="Bank" value="BNI" style="position: absolute; left: 55px; top: 320px;">
	 			<img src="img/bni.png" style="position: absolute; width: 67px; height: 42px; left: 115px; top: 310px;">
	 			<label for="BNI" style="position: absolute; left: 210px; top: 320px; font-family: Roboto;">Bank BNI</label>
	 			<input type="radio" id="BRI" name="Bank" value="BRI" style="position: absolute; left: 55px; top: 385px;">
	 			<img src="img/bri.png" style="position: absolute; width: 67px; height: 41px; left: 115px; top: 375px;">
	 			<label for="BRI" style="position: absolute; left: 210px; top: 385px; font-family: Roboto;">Bank BRI</label>
	 			<button type="submit" class="next"><b>NEXT</b></button>
  			</form>
		</div>
	</div>
	<script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
</body>
</html>