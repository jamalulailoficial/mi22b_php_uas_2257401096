<?php 
    session_start();
    include 'koneksi.php';

    $kode = $_GET['kode'];

    $sql = "SELECT kode, name FROM produk WHERE kode = '$kode'";
    $result = mysqli_query($koneksi, $sql);

    if (!$result) {
        header('location: produk.php'); 
    }

    $kategori = mysqli_fetch_assoc($result);

    if (!$produk) {
        $_SESSION['error'] = "produk tidak ditemukan";
        header('location: produk.php'); 
    }

?>

<form action="" method="post">

    <h2>Edit produk</h2>

    Nama produk<br>
    <input type="text" name="name" kode="name" value="<?php echo $produk['name']; ?>">

    Kategori <br>
    <select name="kategori" required>
        <option value="">Pilih Kategori</option>
        <option value="aksesoris">Aksesoris</option>
        <option value="benda">Benda</option>
        <option value="pakaian">Pakaian</option>
        <option value="makanan">Makanan</option>
    </select>

    <br><br>

    <button type="submit" name="ubah">Ubah</button>
    <a href="produk.php">Kembali</a>

</form>

<?php 

    if (isset($_POST['ubah'])) {

        include 'koneksi.php';

        $nama = $_POST['name'];

        $sql = "UPDATE produk SET name = '$nama' WHERE kode = '$kode'; ";
        $result = mysqli_query($koneksi, $sql);

        if ($result) {
            $_SESSION['success'] = "produk berhasil diubah";
            header('location: produk.php');
        } else {
            $_SESSION['error'] = "produk gagal diubah";
            header('location: produk.php');
        }


    }

?>