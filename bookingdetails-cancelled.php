<?php 
	session_start();
	include('config.php');
	if( !isset($_SESSION["login"]) ) {
    	header('Location: home.php');
  	}
  if( !isset($_GET['id']) ) {
    header('Location: home.php');
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

    if ( $status == 'completed' ) {
      header('Location:bookingdetails.php?id=' . $id);
    }


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
    <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>Booking Details | HelloPet</title>
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
  <link rel="icon" href="img/logo.png" type="image/x-icon">
</head>
<style>
#header-background{
    position: absolute;
    width: 1349px;
    height: 658px;
    left: 0px;
    top: 0px;
    background: url('img/gropack.png');
  }
/* Navbar */
    .logo{
        width: 211px;
        height: 51px;
        left: 20px;
        top: 20px;
        background: url("img/logo.png");
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        opacity: 1;
        position: relative;
        overflow: hidden;
    }

    .nav-link {
            margin-right: 35px;
            margin-left: -5px;
            margin-top: -34px;
            font-family: century gothic;

        }

    .nav-link:hover::after {
            content: '';
            display: block;
            border-bottom: 3px solid #cc7897;
            width: 50%;
            margin: auto;
            padding-bottom: 5px;
            margin-bottom: -8px;
            
        }

 #profile {
    position: absolute;
  width: 30px;
  height: 30px;
  right: 60px;
  top: 30px;
}
    .buttonprofile {
        border: none;
        cursor: pointer;
        border-radius: 12px;
        text-decoration: none;
        transition: 0.6s;
    }

#pack{
    position: absolute;
    width: 900px;
    height: 800px;
    left: 240px;
    top: 100px;
    border-radius: 12px;
    background: #FFFFFF;
    box-shadow: 0px 4px 20px rgba(121, 98, 77, 0.5);
    background: #FFFFFF;
 }
 .scroll{
  width: 300px;
  padding: 15px;
  padding-bottom: 20px;
  padding-top: 30px;
  overflow: scroll;
  height: 300px;
  overflow-x: hidden;
  overflow-y: scroll; 
}
 .title {
    position: relative;
    left: 150px;
    font-size: 25px;
    font-weight: bold;
}
.line-1{
  position: absolute;
  width: 735px;
  height: 0px;
  margin-top: 10px;
  border: 1px solid #000000;
  left : 70px;
 }
 .line{
  border: 1px solid #E7E7E7;
  width: 730px;
  height: 0px;
 }
.text{
    margin-left: 60px;
    margin-top: 30px;
    font-family: Roboto;
    font-size: 16px;
}
.back:hover {
  background-color: #90000d;
}
#foot{
    position: absolute;
    width: 1349px;
    height: 144px;
    left: 0px;
    top: 950px;
    background: #C4C4C4;
    bottom: 0px;
  }
  .learn{
    width: 131px;
      color: rgba(0,0,0,1);
      position: absolute;
      top: 20px;
      left: 80px;
      font-family: Roboto;
      font-weight: Regular;
    font-size: 20px;
    opacity: 1;
    text-align: left;
  }
  .cancel{
    width: 150px;
    color: rgba(0,0,0,1);
    position: absolute;
    top: 60px;
    left: 80px;
    font-family: Roboto;
    font-weight: Regular;
    font-size: 16px;
    opacity: 1;
    text-align: left;
  }
  .safe{
    width: 50px;
    color: rgba(0,0,0,1);
    position: absolute;
    top: 90px;
    left: 80px;
    font-family: Roboto;
    font-weight: Regular;
    font-size: 16px;
    opacity: 1;
    text-align: left;
  }
  .copyright{
    position: absolute;
    width: 216.75px;
    height: 25.62px;
    left: 910px;
    top: 60px;

    font-family: Roboto;
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 19px;

    color: #000000;
   }
  #copyright-logo{
    position: absolute;
    width: 23px;
    height: 23px;
    left: 1075px;
    top: 58px;
   }
   .copyright2{
    position: absolute;
    width: 204px;
    height: 25.62px;
    left: 1100px;
    top: 60px;

    font-family: Roboto;
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 19px;

    color: #000000;
   }
   h4{
    color: #0084B4;
   }
</style>
  <body style="background: url(bgbiru.png)">
    <footer id="foot">
      <div>
        <span class="learn">LEARN MORE</span>
        <a class="cancel" href="img/cancel.html">Cancelation Policy</a>
        <a class="safe" href="img/safety.html">Safety</a>
        <div class="copyright">HelloPet, Depresso Ltd</div>
        <img href="#" id="copyright-logo" src="img/copyright.png">
        <div class="copyright2">2021, All Rights Reserved</div>
      </div>
    </footer>
    <div class="header">
      <header id="header-background">
      <div class="logo"></div>
            <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link" href="home.php">Home</a>
				<a class="nav-item nav-link" href="packages.php">Packages</a>
				<a class="nav-item nav-link" href="aboutus.php">About Us</a>
				<a class="nav-item nav-link" href="#">Contact Us</a>
            </div>
        </div>
        </nav>
      </header>
            <div>
        <a href="myprofile.php" type="button" class="buttonprofile" id="buttonprofile"><img id="profile" src="img/profile.png"/></a>
      </div>
    </div>
    <br>
    <div class="scroll" id="pack">
        <header class="title">
            <span style="color: #F85A54">Your Pet Grooming Service has been Cancelled</span>
        </header>
        <br>
            <div class="line-1"></div>
        <br>
        <div class="text">
            <h4>Pet Details</h4>
            <ul>
                <li>Pet Type : <?php if( $pet=='anjing' ) echo 'Dog'; else echo 'Kucing';?></li>
                <li>Pet Size : <?php if( $size=='kecil' ) echo 'Small'; else if( $size=='sedang' ) echo 'Medium'; else echo 'Besar';?></li>
                <li>Pet Age : <?=$age?> &nbsp month</li>
                <li>Pet Gender : <?php if( $gender=='jantan' ) echo 'Male'; else echo 'Female'?></li>
            </ul>
            <div class="line"></div><br>
            <h4>Customer Details</h4>
            <ul>
                <li>Name : <?=$nama?></li>
                <li>Email : <?=$email?></li>
                <li>Phone : <?=$phone?></li>
                <li>Adress : <?=$address?></li>
                <li>Appointment : <?=$date,", ", $time?></li>
            </ul>
            <div class="line"></div><br>
            <h4>Package Details</h4>
            <ul>
                <li>Packages name : <?=$pname?></li>
                <li>Packages price : <?=$price?></li>
            </ul>
            <div class="line"></div><br>
            <h4>Payment Details</h4>
            <ul>
                <li>Payment method : <?php if( $payment=='transfer' ) echo 'Transfer'; else echo 'Pay After Service';?></li>
                <li>Status : <?php if( $status_bayar=='sudah bayar' ) echo 'Paid'; else echo 'Not yet paid';?></li>
                
            </ul>
    </div> 
</body>
</html>
