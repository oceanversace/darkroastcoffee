<?php
    var_dump($_GET);
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
    <form action="test.php" method="get">
        <p>Jenis peliharaan :</p>
        <input type="radio" id="anjing" name="hewan">Anjing</input>
        <input type="radio" id="kucing" name="hewan">Kucing</input>
        <br>
        <p>Ukuran peliharaan :</p>
        <input type="radio" id="kecil" name="ukuran">Kecil</input>
        <input type="radio" id="sedang" name="ukuran">Sedang</input>
        <input type="radio" id="besar" name="ukuran">Besar</input>
        <br>
        <p>Usia Peliharaan :</p>
        <input type="number" name="usia"></input>
        <br>
        <p>Jenis Kelamin Peliharaan :</p>
        <input type="radio" id="jantan" name="gender">Jantan</input>
        <input type="radio" id="betina" name="gender">Betina</input>
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>