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
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <link rel="icon" href="logo.png" type="image/x-icon">
</head>
<style>
body{
    background: url('gropack.png');
}
#pack{
    position: absolute;
    width: 470px;
    height: 420px;
    left: 455px;
    top: 100px;
    border-radius: 12px;
    background: #FFFFFF;
    box-shadow: 0px 4px 4px rgba(121, 98, 77, 0.5);
    background: url('dog.png');
 }
 .title {
    font-family: Raboto;
    text-align: center;
}
.mrg{
    padding-right: 50px;
    padding-left: 50px;
}
.btn {
  background-color: #0084B4;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 95%;
  border-radius: 6px;
  cursor: pointer;
  font-size: 17px;
}
.text{
    color: white;
}
.btn:hover {
  background-color: #90000d;
}
.reg {
  background-color: #0084B4;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 95%;
  border-radius: 6px;
  cursor: pointer;
  font-size: 17px;
}
.reg:hover {
  background-color: #45a049;
}
</style>
<body>
    <div id="pack">
        <header class="title">
            <h1>Hellopet Admin Page</h1>
        </header>
        <div class="mrg">
            <div class="btn">  
                <a href="pending.php" class="text">Pending Appointments</a>
             </div>  
             <div class="btn">
                <a href="completed.php" class="text">Completed Appointments</a> 
            </div>
            <div class="btn">
                <a href="cancelled.php" class="text">Cancelled Appointments</a>
            </div>
                <br>
                <div class="reg">
                    <a href="adminregist.php" class="text">Register New Admin</a>
                </div>
                <br>
                <div class="reg">
                    <a href="adminlogout.php" class="text">Logout</a>
                </div>
            </div>
    </div>
</body>
</html>
