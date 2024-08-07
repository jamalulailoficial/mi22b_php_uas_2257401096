<form action=""method="post">
    
    <h2>Tambah Kategori</h2>

    Nama Kategori <br>
    <input type="text" name="name">
    
    <br><br>
    <a href="kategori.php">Kembali</a>
    <button type="submit" name ="submit">Simpan</button>

    <style>
        body {
    background-color: #f0f0f0;
    font-family: Arial, sans-serif;
}

form {
    width: 300px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f2f2f2;
    position: absolute;
    left: 20px;
    top: 50px;
}
    </style>
</form>

<?php

    if (isset($_POST['submit'])) {

        include 'koneksi.php';

        $nama = $_POST['name'];
        $sql = "INSERT INTO kategori (name) VALUES ('$nama')";
        $query = mysqli_query($koneksi, $sql);

        if (!$query) {
            die ("Error tambah kategori");
        }
        header('location: kategori.php');
    }
?>