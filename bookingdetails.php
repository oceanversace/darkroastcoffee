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

    if ( $status == 'cancelled' ) {
      header('Location:bookingdetails-cancelled.php?id=' . $id);
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
  overflow: scroll;
  height: 300px;
  overflow-x: hidden;
  overflow-y: scroll; 
}
 .title {
    position: relative;
    left: 180px;
    font-size: 30px;
    font-weight: bold;
}
.title1{
  font-size: 20px;
  position: relative;
  left: 185px;
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
.set {
  background-color: #FDADC7;
  color: white;
  padding: 10px;
  margin-left:450px;
  margin-top: 0px;
  border: none;
  width: 18%;
  font-weight: bold;
  border-radius: 12px;
  cursor: pointer;
  font-size: 16px;
  position: relative;
  left: 190px;
}
.set:hover {
  background-color: #DE7F9E;
}
.review {
  background-color: #53B2F2;
  padding: 12px;
  margin: 0;
  margin-top: 30px;
  color: white;
  border: none;
  width: 18%;
  font-weight: bold;
  border-radius: 12px;
  cursor: pointer;
  font-size: 16px;
  position: relative;
  left: 220px;
}
.review:hover {
  background-color: #309BE4;
}
.cancel-button{
  background-color: #FFFFFF;
  padding: 12px;
  color: black;
  border: 1px solid #53B2F2;
  width: 18%;
  font-weight: bold;
  border-radius: 12px;
  cursor: pointer;
  font-size: 16px;
  position: relative;
  left: 350px;
}
.cancel-button:hover{
    background : #E7E7E7;
}
.complete{
  background-color: #53B2F2;
  padding: 12px;
  color: white;
  border: none;
  width: 15%;
  font-weight: bold;
  border-radius: 10px;
  cursor: pointer;
  font-size: 16px;
  position: relative;
  left: 70px;
}
.complete:hover {
  background-color: #309BE4;
}
.completed{
  background-color: #32CD32;
  padding: 12px;
  color: white;
  border: none;
  width: 15%;
  font-weight: bold;
  border-radius: 10px;
  cursor: pointer;
  font-size: 16px;
  position: relative;
  left: 70px;
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
   #overlay {
      position: fixed;
      display: none;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(0,0,0,0.5);
      z-index: 2;
      cursor: pointer;
    }
   .cancel-overlay{
    position: fixed;
    width: 432px;
    height: 208px;
    left: 460px;
    top: 220px;
    background: #FFFFFF;
    box-shadow: 0px 4px 32px 700px rgba(0, 0, 0, 0.4);
    border-radius: 12px;
   }
   .surement{
    position: absolute;
    width: 320px;
    height: 36px;
    left: 57px;
    top: 58px;
    font-family: Roboto;
    font-size: 18px;
    line-height: 21px;
    text-align: center;

    color: #000000;

   }
   #no-button{
    position: absolute;
    left: 70px;
    top: 120px;
    bottom: 20px;
    width: 108px;
    height: 41px;
    background: #FFFFFF;
    border: 1px solid #53B2F2;
    box-sizing: border-box;
    border-radius: 10px;
    cursor: pointer;
    font-family: Roboto;
   }
   #no-button:focus{
    outline: none;
   }
   #yes-button:hover{
    background : #309BE4;
   }
   #yes-button{
    position: absolute;
    left: 260px;
    top: 120px;
    bottom: 20px;
    width: 108px;
    height: 41px;
    background: #53B2F2;
    border-radius: 10px;
    border: none;
    cursor: pointer;
    color: #FFFFFF;
    font-family: Roboto;
   }
   #yes-button:focus{
    outline: none;
   }
   #no-button:hover{
    background : #E7E7E7;
   }
   .complete-overlay{
    position: fixed;
    width: 432px;
    height: 208px;
    left: 460px;
    top: 220px;
    background: #FFFFFF;
    box-shadow: 0px 4px 32px 700px rgba(0, 0, 0, 0.4);
    border-radius: 12px;
   }
   .sure-complete{
    position: absolute;
    width: 250px;
    height: 160px;
    left: 90px;
    top: 30px;
    font-family: Roboto;
    font-size: 18px;
    line-height: 21px;
    text-align: center;

    color: #000000;
   }
   #overlay1 {
      position: fixed;
      display: none;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(0,0,0,0.5);
      z-index: 2;
      cursor: pointer;
    }
   #no-complete{
    position: absolute;
    left: 67px;
    top: 140px;
    bottom: 20px;
    width: 108px;
    height: 41px;
    background: #FFFFFF;
    border: 1px solid #53B2F2;
    box-sizing: border-box;
    border-radius: 10px;
    cursor: pointer;
    font-family: Roboto;
   }
   #yes-complete{
    position: absolute;
    left: 260px;
    top: 140px;
    bottom: 20px;
    width: 108px;
    height: 41px;
    background: #53B2F2;
    border-radius: 10px;
    border: none;
    cursor: pointer;
    color: #FFFFFF;
    font-family: Roboto;
   }
   #yes-complete:hover{
    background : #309BE4;
   }
   #no-complete:hover{
    background : #E7E7E7;
   }
   button:focus{
      outline: none;
   }
</style>
  <body style="background: url(bgbiru.png)">
    <footer id="foot">
      <div>
        <span class="learn">LEARN MORE</span>
        <a class="cancel" href="cancel.php">Cancelation Policy</a>
        <a class="safe" href="safety.php">Safety</a>
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
    <div class="scroll" id="pack">
        <header class="title">
            <span>Thank You for Choosing HelloPet</span>
            <br>
        </header>
        <header class="title1">
            <span>Your Pet Grooming Service has been Booked with Us</span>
            <br>
        </header>
            <div class="line-1"></div>

        <div class="text">
            <h4>Pet Details</h4>
            <ul>
                <li>Pet Type : <?php if( $pet=='anjing' ) echo 'Dog'; else echo 'Kucing';?></li>
                <li>Pet Size : <?php if( $size=='kecil' ) echo 'Small'; else if( $size=='sedang' ) echo 'Medium'; else echo 'Besar';?></li>
                <li>Pet Age : <?=$age?>&nbsp month</li>
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
    <?php if( $status != 'completed' && $status_bayar != 'sudah bayar' ) :?>
    <button class="set" onclick="window.location.href='transaction.php?id=<?=$id?>'">PAY NOW</button>
    <?php endif; ?>
    <br><br><br>
    <?php if( $status != 'completed' ) :?>
    <button onclick="on();" class="complete">COMPLETE</button>
    <?php else : ?>
      <medium class="completed">COMPLETED</medium>
    <?php endif; ?>
    <button class="review" onclick="window.location.href='review.php'">REVIEW</button>
    <?php if( $status != 'completed' ) :?>
    <button onclick="muncul()" class="cancel-button">CANCEL</button>  
    <?php endif; ?>
  </div>
  <div id="overlay">
        <div class="cancel-overlay">
          <p class="surement">Are you sure to cancel your order?</p>
          <button onclick="window.location.href='cancelapt.php?id=<?=$id?>'"class="yes" id="yes-button"><b>YES</b></button></form>
          <button onclick="tutup()" class="no" id="no-button"><b>NO</b></button>
        </div>
  </div>
  <div id="overlay1">
        <div class="complete-overlay">
          <p class="sure-complete">Are you sure to complete your order?</p>
          <button onclick="window.location.href='completeapt.php?id=<?=$id?>'" class="yes" id="yes-complete"><b>YES</b></button></form>
          <button onclick="off()" class="no" id="no-complete"><b>NO</b></button>
        </div>
  </div>

  <script>
    function muncul() {
    document.getElementById("overlay").style.display = "block";
    }

    function tutup() {
      document.getElementById("overlay").style.display = "none";
    }
  </script> 
  <script>
    function on() {
    document.getElementById("overlay1").style.display = "block";
    }

    function off() {
      document.getElementById("overlay1").style.display = "none";
    }
  </script>
</body>
</html>