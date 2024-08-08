<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kategori</title>
    <Style>
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    padding: 20px;
}
h2 {
    color: #333;
    margin-bottom: 20px;
}
a.button {
    display: inline-block;
    margin-bottom: 20px;
    padding: 10px 15px;
    background-color: #007bff;
    color: white;
    text-decoration: none;
    border-radius: 4px;
}
a.button:hover {
    background-color: #0056b3;
}
table {
    width: 25%;
    border-collapse: collapse;
    margin-bottom: 10px;
}
th, td {
    padding: 12px;
    border: 1px solid #ddd;
    text-align: left;
}
th {
    background-color: #f2f2f2;
    color: #333;
}
tr:nth-child(even) {
    background-color: #f9f9f9;
}
tr:hover {
    background-color: #f1f1f1;
}
td.aksi {
    text-align: center;
}
.button-action {
    padding: 5px 10px;
    border-radius: 4px;
    text-decoration: none;
    color: white;
}
.button-action.edit {
    background-color: #28a745;
}
.button-action.delete {
    background-color: #dc3545;
}
.button-action:hover {
    opacity: 0.8;
}
</Style>
</head>
<body>
    <h2>kategori</h2>
    <a href="tambah_kategori.php">Tambah kategori</a>

    <br></br>

    <a href="admin.html" class="btn">Kembali</a>
    <br></br>
<table cellspacing="0" cellspacing="8px" border="1">
        <tr>
            <th>Id</th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
        </tr>
    
<?php
    include 'koneksi.php';

    $sql = "SELECT id,name FROM kategori";
    $query = mysqli_query($koneksi, $sql);

?>

<?php while ($row = mysqli_fetch_assoc($query)) : ?>
    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['name']?></td>
        <td>
        <a href="edit_kategori.php?id=<?php echo $row['id'] ?>">Edit</a>
            <a href="hapus_kategori.php?id=<?php echo $row['id'] ?>">Hapus</a>
        </td>
    </tr>
<?php endwhile; ?>

</table>
</body>
</html>