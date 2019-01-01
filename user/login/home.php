<?php
//---------- OTENTIKASI -------------------
session_start();
$iduser = $_SESSION['id_user'];
$password = $_SESSION['pswd'];
$nama	  = $_SESSION['nama'];
require_once ("session_exp.php");

if(!empty($_SESSION["expires_by"]) && !login_check()){
	header("Location:logout.php?exp=1");
	exit(0);
	}
else{
include("koneksi.php");
		$cek="SELECT * FROM pengguna WHERE nm_pengguna='$nama' AND psw_pengguna='$password'";
		$result=mysql_query($cek);
	
		$hasil=mysql_num_rows($result);

if (empty($hasil))
{
	header("location:login.php");
	exit;
}
}
//------------------------------------------
?>
			
<h2>HALAMAN UTAMA</h2>

<br />
<p>Selamat datang <b><?php echo $nama_user; ?></b>, <br />
 di halaman utama administrator.
</p>
<p>Secure Login dengan Captcha dan Session Expire</p>
		<a href="logout.php">Logout</a>
<br /><br />

<p>Kunjungi : <a href="http://sakalvin.blogspot.com" target="_blank"> http://sakalvin.blogspot.com<a></p>