<?php
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $database = "favor";

    $db = mysqli_connect($localhost, $username, $password, $database);
    if($db->connect_error) {
        echo "koneksi database rusak";
        die("error!");
    }
    // if($db>mysqli_connect_error()){
    //     echo "Berhasil koneksi ke database";
    // }else   {
    //     echo "Gagal koneksi ke database";
    // }
?>