<?php

    $id = $_GET['id'];

    include 'koneksi.php';

    $sql = "DELETE FROM kategori WHERE id = '$id';";
    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        header('location: kategori.php');
    } else {
        echo "Error Untuk Hapus Data";
    }
?>