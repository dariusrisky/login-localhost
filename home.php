<?php

include 'database/database.php';
if (isset($_POST['logout'])) {
    header('location:index.php');
    die;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="application/logo.icon" type="image/ico">
    <link rel="stylesheet" href="design/webstyle.css">
    <title>Home Page</title>
</head>

<body>
    <nav>
        <a href="perhitungan.php">PERHITUNGAN</a>
        <a href="perulangan.php">PERULANGAN</a>
        <a href="berat.php">ARAY BERAT BADAN</a>
    </nav>
    <div class="content">
        <div class="box">
        <h1><?php
            session_start();
            if (isset($_SESSION['username'])) {
                echo "Welcome " . $_SESSION['username'];
            }

            ?>
        </h1>
        <p>Website ini sekadar project login logout yang dibuat dengan skema sederhana pada akhir tahun 2023 <br>
            Seperti kebanyakan website website ini digunakan untuk beberapa project untuk project belajar php sederhana dapat dilihat pada menu diatas
            <br>Dimulai dari perulangan anda dapat memasukan kata apapun dengan kombinasi apapun untuk melakukan perulangan seperti kata "aku" dan diulang selama 10 kali
            <br>Dan tak ketinggalan system penjumlahan dengan sedernaha memasukan input nilai dan mengeluarkan hasilnya
        </p>
        </div>
        <form action="index.php" method="post">
            <input type="submit" value="LOGOUT" name="logout">
        </form>
    </div>
    <!-- <img src="https://www.pngitem.com/pimgs/m/163-1636260_3a-kid-goku-dragonball-dragon-ball-manga-png.png" > -->

    <h1 class="profile"> MY PROFILE</h1> <IMG src="image_profil.jpeg" onclick="window.location.href='aboutme.php'" alt="profile" class="smallImage">
</body>

</html>