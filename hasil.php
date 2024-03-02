<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design/hasilcss.css">
    <title>hasil perulangan</title>
</head>
<body> <div class="container"><p>
<?php

$kata= $_POST['1'];
$jumlah= $_POST['2'];
// $hasil=1;
for ($i=1; $i <= $jumlah; $i++) {
    echo "<strong>$kata perulangan ke-$i<br>";
}

?></p><a href="perulangan.php">Coba Lagi</a></div>
</body>
</html>
