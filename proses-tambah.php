<?php
//cek apakah ini hasil dari submit dari form atau langsung buka file
if(isset($_POST['simpan'])){
    include_once("./config.php");
    $nama_barang = $_POST['nama_barang'];
    $kode_barang = $_POST['kode_barang'];
    $jumlah_barang = $_POST['jumlah_barang'];
    $tanggal = $_POST['tanggal'];

    //Berikan perintah simpan
    $sql = "INSERT INTO produk SET nama_barang='$nama_barang', kode_barang='$kode_barang', jumlah_barang='$jumlah_barang', tanggal='$tanggal'";
    $simpan=mysqli_query($db, $sql);
    if($simpan){
        header('location:listproduk.php');
    }else{
		include "listproduk.php";
        echo '<script language="JavaScript">';
            echo 'alert("Data Gagal Ditambahkan.")';
        echo '</script>';
    }
}else{
	echo "Jangan Akses langsung kemari, cek name pada submit <a href='listproduk.php'>Kembali</a>";
}
?>