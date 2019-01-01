<?php
include "koneksi.php";
if(isset($_POST['ttambah'])){
  $judul = $_POST['judul'];
  $nama_penulis = $_POST['nama_penulis'];
  $kategori = $_POST['kategori'];
  $isi_puisi = $_POST['isi_puisi'];
  
  $sql='insert into create_puisi(judul,nama_penulis,kategori,isi_puisi) values("'.$judul.'","'.$nama_penulis.'","'.$kategori.'","'.$isi_puisi.'")';
  $query= mysqli_query($connect,$sql);
  if($query){
    header('location: Buatpuisibaru.html');
  }else{
    echo'gagal';
  }
}
?>