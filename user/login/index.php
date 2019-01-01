<?php
//---------- OTENTIKASI -------------------
session_start();
$password = $_SESSION['pswd'];
$nama	  = $_SESSION['nama'];


if(!empty($_SESSION['nama']) && !empty($_SESSION['pswd']))
{
include("koneksi.php");
		$cek="SELECT * FROM pengguna WHERE nm_pengguna='$nama' AND psw_pengguna='$password'";
		$result=mysql_query($cek);
	
		$hasil=mysql_num_rows($result);

	if (empty($hasil))
	{
		header("location:login.php");
		exit;
	}
	else
	{
		header("location:home.php");
		exit;
	}
}
else
{
	header("location:login.php");
	exit;
}
//------------------------------------------
?>