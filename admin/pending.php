<?php
    session_start();
    include('config.php');
    if( !isset($_SESSION["login"]) ) {
    	header('Location: adminlogin.php');
  	}
    else if( $_SESSION["role"] != "admin" || $_SESSION["role"] != "owner") {
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
    left: 70px;
    top: 30px;
    border-radius: 12px;
    background: #FFFFFF;
    box-shadow: 0px 4px 20px rgba(121, 98, 77, 0.5);
    background: url('gropack.png');
 }

.scroll{
  width: 300px;
  background: orange;
  padding: 10px;
  overflow: scroll;
  height: 300px;
  scrollbar-face-color: #CE7E00; 
  scrollbar-shadow-color: #FFFFFF; 
  scrollbar-highlight-color: #6F4709; 
  scrollbar-3dlight-color: #11111; 
  scrollbar-darkshadow-color: #6F4709; 
  scrollbar-track-color: #FFE8C1; 
  scrollbar-arrow-color: #6F4709;
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
    <div class="scroll" id="pack">
        <header class="title">
            <h1>Pending Orders</h1>
        </header>
        <div class="mrg">
            <div class="btn">
                <a href="index.php" class="text">Dashboard</a>
            </div> 
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
        </div>
</body>
</html>
