<form action="" method="post">
    <h2>Tambah Produk</h2>

    Kode Produk <br>
    <input type="text" name="kode_produk" required>
    <br><br>

    Nama Produk <br>
    <input type="text" name="nama_produk" required>
    <br><br>

    Kategori <br>
    <select name="kategori" required>
        <option value="">Pilih Kategori</option>
        <option value="aksesoris">Aksesoris</option>
        <option value="benda">Benda</option>
        <option value="pakaian">Pakaian</option>
        <option value="makanan">Makanan</option>
    </select>
    <br><br>

    Deskripsi <br>
    <textarea name="deskripsi" rows="4" required></textarea>
    <br><br>

    Gambar <br>
    <input type="file" name="gambar" accept="image/*" required>
    <br><br>

    <a href="produk.php">Kembali</a>
    <button type="submit" name="submit">Simpan Produk</button>
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
        $sql = "INSERT INTO produk (name) VALUES ('$nama')";
        $query = mysqli_query($koneksi, $sql);

        if (!$query) {
            die ("Error tambah produk");
        }
        header('location: produk.php');
    }
?>