<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Produk</title>
</head>
<body>
    <h1>Modul Edit Produk</h1>
<?php
//buat variabe $id ambil dari umpan GET
$id=$_GET['id'];
//panggil koneksi database
include "./config.php";
//cari anggota berdasarkan id dari umpan GET
$sql="SELECT * FROM produk WHERE id='$id'";
$query=mysqli_query($db,$sql);
$r=mysqli_fetch_assoc($query);
?>
    <form action="update.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nama_barang" placeholder="Nama Barangv" size="50" value="<?php echo$r['nama_barang'];?>" required></td>
            </tr>
            <tr>
                <td>Kode Barang</td>
                <td><input type="text" value="<?php echo$r['kode_barang'];?>" name="kode_barang"></td>
            </tr>
            <tr>
                <td>Jumlah Barang</td>
                <td><input type="number" value="<?php echo$r['jumlah_barang'];?>" name="jumlah_barang"></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td><input type="date" name="tanggal" value="<?php echo$r['tanggal'];?>"></td>
            </tr>
            <tr>
				<td><input type="hidden" name="id" value="<?php echo$r['id'];?>">
                <input type="reset"</td>
                <td><input type="submit" value="Update" name="update"></td>
            </tr>
        </table>
    </form>
</body>
</html>