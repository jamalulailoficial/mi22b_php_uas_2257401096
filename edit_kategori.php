<?php 
    session_start();
    include 'koneksi.php';

    $id = $_GET['id'];

    $sql = "SELECT id, name FROM kategori WHERE id = '$id'";
    $result = mysqli_query($koneksi, $sql);

    if (!$result) {
        header('location: kategori.php'); 
    }

    $kategori = mysqli_fetch_assoc($result);

    if (!$kategori) {
        $_SESSION['error'] = "kategori tidak ditemukan";
        header('location: kategori.php'); 
    }

?>

<form action="" method="post">

    <h2>Edit kategori</h2>

    Nama kategori<br>
    <input type="text" name="name" id="name" value="<?php echo $kategori['name']; ?>">

    <br><br>

    <button type="submit" name="ubah">Ubah</button>
    <a href="kategori.php">Kembali</a>

</form>

<?php 

    if (isset($_POST['ubah'])) {

        include 'koneksi.php';

        $nama = $_POST['name'];

        $sql = "UPDATE kategori SET name = '$nama' WHERE id = '$id'; ";
        $result = mysqli_query($koneksi, $sql);

        if ($result) {
            $_SESSION['success'] = "kategori berhasil diubah";
            header('location: kategori.php');
        } else {
            $_SESSION['error'] = "kategori gagal diubah";
            header('location: kategori.php');
        }


    }

?>