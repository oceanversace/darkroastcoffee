<?php 
	session_start();
	include('config.php');
	if( !isset($_SESSION["login"]) ) {
    	header('Location: home.php');
  	}
	
	$usr_id = $_SESSION['id'];
	$apt_id = $_SESSION['id'];
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
    height: 510px;
    left: 162px;
    top: 75px;

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
    top: 430px;
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
  input[type="text"],
    button[type="button"] {
        padding: 10px 15px;
        font-size: 16px;
        border-radius: 12px;
        text-align: center;
    }
    input[type="text"] {
        width: 150px;
        border: 1px solid #bbb;
  
    }
    button[type="button"] {
        background: #53B2F2;
        border: 1px solid #53B2F2;
        color: #fff;
        cursor: pointer;
    }
    .rek{
      position: absolute;
      top: 185px;
      left: 350px;
      width: 50%;
    }
    .rek1{
      position: absolute;
      top: 267px;
      left: 350px;
      width: 50%;
    }
    .rek2{
      position: absolute;
      top: 347px;
      left: 350px;
      width: 50%;
    }
    .rek3{
      position: absolute;
      top: 429px;
      left: 350px;
      width: 50%;
    }

</style>
<body style="background-color: #F3F6F6;">
  <div class="box" id="box">
      <button class="back" onclick="window.history.back();" >
        <span class="iconify" data-inline="false" data-icon="eva:arrow-back-fill" style="font-size: 40px;"></span>
	  </button>
      <span class="title" id="title" name="title"><b>HelloPet Order</b></span>
      <span class="trans" id="trans" name="trans">Transaction ID : <?php echo $apt_id ?></span>
      <span class="id-trans" id="id-trans" name="id-trans"></span>
      <div class="line"></div>
      <form>
        <p class="select" name="select">Select bank :</p>
        <input type="radio" id="BCA" name="Bank" value="BCA" style="position: absolute; cursor: pointer; left: 55px; top: 200px;">
        <img src="img/bca.png" style="position: absolute; width: 98px; height: 61px; left: 100px; top: 180px; cursor: pointer;">
        <label for="BCA" style="position: absolute; left: 210px; top: 200px; font-family: Roboto; cursor: pointer;">Bank BCA</label>
        <div class="rek">
            <input type="text" style="font-family: Roboto;" value="12345678910" id="pilih" readonly />
            <button type="button" onclick="copy_text()">Copy</button>
            <label for="atasnama" style="position: absolute; font-family: Roboto; width: 300px; font-size: 12px; height: 31px; left: 0px; top: 42px;">p.p Tiara Putri Bellini</label>
        </div>

        <input type="radio" id="Mandiri" name="Bank" value="Mandiri" style="position: absolute; cursor: pointer; left: 55px; top: 282px;">
        <img src="img/mandiri.png" style="position: absolute; width: 81px; height: 31px; left: 108px; top: 277px; cursor: pointer;">
        <label for="Mandiri" style="position: absolute; left: 210px; top: 282px; font-family: Roboto; cursor: pointer;">Bank Mandiri</label>
        <div class="rek1">
            <input type="text" style="font-family: Roboto;" value="11800112218340" id="pilih1" readonly />
            <button type="button" onclick="copy_text1()">Copy</button>
            <label for="atasnama" style="position: absolute; font-family: Roboto; width: 300px; font-size: 12px; left: 0px; top: 42px;">p.p Wika Fauziah</label>
        </div>

        <input type="radio" id="BNI" name="Bank" value="BNI" style="position: absolute; cursor: pointer; left: 55px; top: 362px;">
        <img src="img/bni.png" style="position: absolute; width: 67px; height: 42px; left: 115px; top: 352px; cursor: pointer;">
        <label for="BNI" style="position: absolute; left: 210px; top: 362px; font-family: Roboto; cursor: pointer;">Bank BNI</label>
        <div class="rek2">
            <input type="text" style="font-family: Roboto;" value="0828192113" id="pilih2" readonly />
            <button type="button" onclick="copy_text2()">Copy</button>
            <label for="atasnama" style="position: absolute; font-family: Roboto; width: 300px; font-size: 12px; height: 31px; left: 0px; top: 42px;">p.p Herdika Shidqi Wibowo</label>
        </div>

        <input type="radio" id="BRI" name="Bank" value="BRI" style="position: absolute; cursor: pointer; left: 55px; top: 445px;">
        <img src="img/bri.png" style="position: absolute; width: 67px; height: 41px; left: 115px; top: 435px; cursor: pointer;">
        <label for="BRI" style="position: absolute; left: 210px; top: 445px; font-family: Roboto; cursor: pointer;">Bank BRI</label>
        <div class="rek3">
            <input type="text" style="font-family: Roboto;" value="015001054185500" id="pilih3" readonly />
            <button type="button" onclick="copy_text3()">Copy</button>
            <label for="atasnama" style="position: absolute; font-family: Roboto; width: 300px; font-size: 12px; height: 31px; left: 0px; top: 42px;">p.p Reru Dharmastiawan Palentino</label>
        </div>
        <label for="atasnama" style="position: absolute; font-family: Roboto; width: 300px; font-weight: bold; font-size: 14px; height: 31px; left: 730px; top: 185px;">Note:</label>
        <br>
        <label for="atasnama" style="position: absolute; font-family: Roboto; width: 300px; font-size: 12px; height: 31px; left: 730px; top: 205px;">"Proof of Transfer send to WhatsApp number <span style="font-weight: bold;">(+6285212332730)</span> for verification"</label>

        
        </form>
		<button class="next" onclick="window.history.back()"><b>OK</b></button>
    </div>
  </div>
  <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
  <script type="text/javascript">
    function copy_text() {
        document.getElementById("pilih").select();
        document.execCommand("copy");
        alert("Text berhasil dicopy");
    }
        function copy_text1() {
        document.getElementById("pilih1").select();
        document.execCommand("copy");
        alert("Text berhasil dicopy");
    }
        function copy_text2() {
        document.getElementById("pilih2").select();
        document.execCommand("copy");
        alert("Text berhasil dicopy");
    }
        function copy_text3() {
        document.getElementById("pilih3").select();
        document.execCommand("copy");
        alert("Text berhasil dicopy");
    }
</script>
</body>
</html>
