

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="application/logo.icon" type="image/ico">
    <link rel="stylesheet" href="design/hitung.css">
    <title>Berat Page</title>
</head>
<body>

    <form action="berat.php" method="post">
        Masukan Berat Badan
        <input type="number" placeholder="Masukan Angka" name="1"><br>
        <input type="submit" name="button">
        <a href="home.php">Home Page</a>
    </form>
    <p><strong><?php

if(isset($_POST['button'])){
    $a = $_POST['1'];
    if($a <50){
        echo"Anda terlalu kurus gemukin badan lagi";
    }elseif($a == 55 || $a == 56 || $a == 57 || $a == 58 || $a == 59 || $a == 60 || $a < 70){
        echo"Anda ideal untuk ukuran manusia";
    }else{
        echo"telalu gemuk";
    }

}
?></p></strong>
</body>
</html>