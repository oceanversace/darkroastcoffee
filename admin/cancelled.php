<?php
    session_start();
    include('config.php');
    if( !isset($_SESSION["login"]) ) {
    	header('Location: adminlogin.php');
  	}
    else if( $_SESSION["role"] != "admin" ) {
        header('Location: ../');
    }

    $data1 = mysqli_query($conn, "SELECT * FROM appointment WHERE status='cancelled'");
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
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <link rel="icon" href="logo.png" type="image/x-icon">
</head>
<style>
body{
    background: url('dog-1.png');
}
    table {
         border: 1px solid black;
          border-collapse: collapse;
          width: 100%;
        }

    th, td {
          padding: 14px;
          border: 1px solid black;
        }
#pack{
    position: absolute;
    width: 1200px;
    height: 580px;
    left: 80px;
    top: 50px;
    border-radius: 12px;
    background: #FFFFFF;
    box-shadow: 0px 4px 20px rgba(121, 98, 77, 0.5);
    background: url('gropack.png');
 }
 .title {
    font-family: Raboto;
    text-align: center;
}
.mrg{
    padding-right: 10px;
    padding-left: 10px;
}
.btn {
  background-color: #0084B4;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 6.5%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}
.text{
    color: white;
}
.btn:hover {
  background-color: #45a049;
}
</style>
<body>
    <div id="pack">
        <header class="title">
            <h1>Cancelled Orders</h1>
        </header>
        <div class="mrg">
            <div class="btn">  
                <a href="index.php" class="text">Dashboard</a>
            </div> 
            <table>
                <tr>
                    <td>Id</td>
                    <td>Nama Customer</td>
                    <td>Paket</td>
                    <td>Order Date</td>
                    <td>Order Time</td>
                </tr>

                <?php while( $res1 = mysqli_fetch_assoc($data1) ) :
                    $usr_id=$res1['user_id'];
                    $data2 = mysqli_query($conn, "SELECT nama FROM user WHERE id=$usr_id");
                    $res2 = mysqli_fetch_assoc($data2);
                    $pck_id = $res1['package_id'];
                    $data3 = mysqli_query($conn, "SELECT pname FROM package WHERE id=$pck_id");
                    $res3 = mysqli_fetch_assoc($data3);
                    ?>
                    <tr>
                        <td><?=$res1['id']?></td>
                        <td><?=$res2['nama'];?></td>
                        <td><?=$res3['pname'];?></td>
                        <td><?=$res1['order_date']?></td>
                        <td><?=$res1['order_time']?></td>
                    </tr>
                <?php endwhile;?>
            </table>
        </div>
    </div>
</body>
</html>
