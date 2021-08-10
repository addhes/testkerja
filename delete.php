<?php
//cek akses lewat menu di index.php atau akses file langsung
if(isset($_GET['id'])){
	include "./config.php";
	$id=$_GET['id'];
	$sql   = "DELETE FROM produk WHERE id='$id'";
	$hapus = mysqli_query($db,$sql);
	if($hapus){
		header("Location: listproduk.php");
		//pengecekan jika hasil belum sesuai harapan
		//var_dump($sql);
	}else{
		//var_dump($sql);
		echo 'Data Kelas GAGAL di Hapus';
		echo '<a href="listproduk.php">Kembali</a>';
	}
}else{
	echo "Jangan Akses langsung kemari, cek name pada submit <a href='index.php'>Kembali</a>";
}
?>