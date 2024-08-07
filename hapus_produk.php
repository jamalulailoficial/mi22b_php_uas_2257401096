<?php

    $id = $_GET['kode'];

    include 'koneksi.php';

    $sql = "DELETE FROM produk WHERE kode = '$kode';";
    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        header('location: produk.php');
    } else {
        echo "Error Untuk Hapus Data";
    }
?>