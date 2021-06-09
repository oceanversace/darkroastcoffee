<?php 
	session_start();
	include('config.php');
	if( !isset($_SESSION["login"]) ) {
    	header('Location: home.php');
  	}

    $id = $_SESSION["id"];
    $data = mysqli_query($conn, "SELECT * FROM user WHERE id=$id");
    $res = mysqli_fetch_assoc($data);
    var_dump($res);
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <h1>Edit Profile</h1>

    <form action="prosesedit.php" method="POST">
      <label for="nama">Nama : </label>
      <input type="text" id="nama" name="nama" value="<?=$res["nama"]?>"></input>
      <br>
      <label for="username">Username : </label>
      <input type="text" id="nama" name="username" value="<?=$res["username"]?>"></input>
      <br>
      <label for="email">Email : </label>
      <input type="email" id="email" name="email" value="<?=$res["email"]?>"></input>
      <br>
      <label for="no_telp">Phone : </label>
      <input type="tel" id="no_telp" name="no_telp" value="<?=$res["no_telp"]?>"></input>
      <br>
      <label for="alamat">Alamat : </label><br>
      <textarea name="alamat" id="alamat" cols="30" rows="10"><?=$res["alamat"]?></textarea>
      <br><br>
      <input type="submit">
    </form>
    
</body>
</html>