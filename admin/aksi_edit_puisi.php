<?php
include "koneksi.php";
if(isset($_POST['tedit'])){
	$id_puisi=$_POST['id_puisi'];
	$judul=$_POST['judul'];
	$nama_penulis=$_POST['nama_penulis'];
	$kategori=$_POST['kategori'];
	$isi_puisi=$_POST['isi_puisi'];

	$sql='update create_puisi set judul="'.$judul.'", nama_penulis="'.$nama_penulis.'", kategori="'.$kategori.'", isi_puisi="'.$isi_puisi.'" where id_puisi="'.$id_puisi.'"';
	$query=mysqli_query($connect,$sql);
	if($query){
		header('location: home.php');
	}else{
		echo 'Gagal';
	}
}
?>