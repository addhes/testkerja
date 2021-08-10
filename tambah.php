<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Produk</title>
</head>
<body>
    <h1>Modul Tambah Produk</h1>
    <form action="proses-tambah.php" method="post" >
        <table>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nama_barang" placeholder="Nama Barang" size="50" required></td>
            </tr>
            <tr>
                <td>Kode Barang</td>
                <td><input type="text" name="kode_barang" required></td>
            </tr>
            <tr>
                <td>Jumlah Barang</td>
                <td><input type="number" name="jumlah_barang" required></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td><input type="date" name="tanggal"></td>
            </tr>
            <tr>
                <td><input type="reset"</td>
                <td><input type="submit" value="Simpan" name="simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>