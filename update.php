<?php
//cek apakah ini hasil dari submit dari form Edit atau bukan
if(isset($_POST['update'])){
    include_once("./config.php");
    $id      = $_POST['id'];
    $nama_barang    = $_POST['nama_barang'];
    $kode_barang      = $_POST['kode_barang'];
    $jumlah_barang  = $_POST['jumlah_barang'];
    $tanggal = $_POST['tanggal'];

    //Berikan perintah update
    $sql = "UPDATE produk SET nama_barang='$nama_barang', kode_barang='$kode_barang', jumlah_barang='$jumlah_barang', tanggal='$tanggal' WHERE id='$id'";
    $simpan=mysqli_query($db, $sql);
    if($simpan){
        header('location:listproduk.php');
    }else{
		include "listproduk.php";
        echo '<script language="JavaScript">';
            echo 'alert("Data Gagal Diupdate.")';
        echo '</script>';
    }
}else{
	echo "Jangan Akses langsung kemari, cek name pada submit <a href='index.php'>Kembali</a>";
}
?>