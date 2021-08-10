<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toko UMKM</title>
</head>
<body>

    <a href="./index.php">Home</a> | <a href="tambah.php">Tambah</a>
    <h1>Modul List Produk</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <div class="form-group">
        <label for="sel1">Kata Kunci:</label>
        <?php
        $kata_kunci="";
        if (isset($_POST['kata_kunci'])) {
            $kata_kunci=$_POST['kata_kunci'];
        }
        ?>
        <input type="text" name="kata_kunci" value="<?php echo $kata_kunci;?>" class="form-control"  required/>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-info" value="Cari">
    </div>
    </form>

    <table cellspacing=0 cellpadding=5 border=1>
        <tr bgcolor="#ccc">
            <th>No</th>
            <th>Nama Barang</th>
            <th>Kode Barang</th>
            <th>Jumlah Barang</th>
            <th>Tanggal </th>
            <th>Action</th>
        </tr>
        <?php
        include("config.php");
        if (isset($_POST['kata_kunci'])) {
            $kata_kunci=trim($_POST['kata_kunci']);
                $sql="select * from produk where nama_barang like '%".$kata_kunci."%' or kode_barang like '%".$kata_kunci."%' or jumlah_barang like '%".$kata_kunci."%' order by nama_barang asc";
        } else {
            $sql="select * from produk order by nama_barang asc";
        }
        $query=mysqli_query($db, $sql);
        if(mysqli_num_rows($query)==0){
            echo "<td colspan=7>Data Masih Kosong</td>";
        }else{
            $no=1;
            while($r=mysqli_fetch_assoc($query)){
                echo "<tr>";
                    echo "<td>$no</td>";
                    echo "<td>" . $r['nama_barang'] . "</td>";
                    echo "<td>" . $r['kode_barang'] . "</td>";
                    echo "<td>" . $r['jumlah_barang'] . "</td>";
                    echo "<td>" . $r['tanggal'] . "</td>";
                    echo '<td><a href="edit.php?id='.$r['id'].'">Edit</a> | <a href="delete.php?id='.$r['id'].'" onclick="return confirm(\'Yakin Akan dihapus?\')">Hapus</a></td>';
                echo "</tr>";
                $no++;
            }
        }
        ?>


    </table>
</body>
</html>