	<style type="text/css">
	 	font-family: "roboto";
	.background{
		background: #F4F4F4;
	}
	h1,p{
	text-align: center;
	}
	.kotak{
	margin: 10px auto;
	background: #fff;
	
	width: 400px;
	padding: 20px 0px;
	}
 
	.kotak table tr td{
	padding: 5px;
	}
 
	.kotak table tr td input{
	padding: 5px;
	font-size: 12pt;
	}
</style>
<body style="background: url(img/bagroundsas.jpg);">>
<div >
	<div class="overlay"></div>
<center><h2 style="color: yellow;">LOGIN ADMIN</h2></center>
<?php 
require_once("koneksi.php");
if (!isset($_SESSION)) {
	# code...
session_start();

}
	// if (@$_GET['act'] == 1)
	// {
	// 	echo "<font color=red>Data yang diisi tidak ditemukan. Mohon isi dengan data yang sesuai !</font><br />";
	// }
	// if (@$_GET['act'] == 2)
	// {
	// 	echo "<font color=red>Formulir belum diisi !</font><br />";
	// }
	// if (@$_GET['act'] == 3)
	// {
	// 	echo "<font color=red>Captcha Salah !</font><br />";
	// }
	// if (@$_GET['act'] == 4)
	// {
	// 	echo "<font color=red>Anda telah meninggalkan aplikasi selama lebih dari 5 menit<br />Untuk keamanan, silahkan login kembali</font><br />";
	// }

?>
<div class="kotak">	
<table>
<form name="login" method="post" action="cek_login.php">
  <tr>
	<td>Username</td>
	<td>: <input name="username" class="username" type="text" ></td>
  </tr>
  <tr>
	<td>Password</td>
	<td>: <input name="password" class="password" type="password"></td>
  </tr>
 <!--  <tr>
	<td>SALIN CAPTCHA</td>
	<td>: <input name="captcha" type="text" maxlength="5" size="9"> <img src="captcha.php"></td>
  </tr> -->
  <tr>
	<td>&nbsp;</td>
	<td> &nbsp; 
		<div class="submit">
		<input type="submit" name="submit" value="LOGIN">
		</div>
			</td>
  </tr>
</form>
</table>
</div>
</body>


