<?php

    $host       = "localhost";
    $user       = "root";
    $password   = "";
    $dbname     = "uas_php";

    $koneksi = mysqli_connect ($host, $user, $password, $dbname);
    if (mysqli_connect_error()) {
    die("koneksi Gagal : " .mysqli_connect_error());
    }
?>
