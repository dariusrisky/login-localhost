

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design/hitung.css">
    <link rel="icon" href="application/logo.icon" type="image/ico">
    <title>Perhitungan Page</title>
</head>
<body>

    <form action="perhitungan.php" method="post">
        <input type="number" placeholder="Masukan Angka" name="1"><br>
        <input type="number" placeholder="Masukan Angka" name="2"><br>
        <input type="submit" name="button">
        <a href="home.php">Home Page</a>
    </form>
    <p><strong><?php

if(isset($_POST['button'])){
    $a = $_POST['1'];
    $b = $_POST['2'];
    $c = $a + $b;

    echo "hasilnya adalah $c";
}else{
    echo "<p>Masukan Angka</p>";
}
?></p></strong>
</body>
</html>