<?php
include "koneksi.php";
$ni	= $_GET['ni'];
$sql 	= 'delete from create_puisi where id_puisi="'.$ni.'"';
$query	= mysqli_query($connect,$sql);
header('location: home.php');
?>