	
<h2>LOGIN ADMINISTRATOR</h2>

<br />

<?php 
	if (@$_GET['act'] == 1)
	{
		echo "<font color=red>Data yang diisi tidak ditemukan. Mohon isi dengan data yang sesuai !</font><br />";
	}
	if (@$_GET['act'] == 2)
	{
		echo "<font color=red>Formulir belum diisi !</font><br />";
	}
	if (@$_GET['act'] == 3)
	{
		echo "<font color=red>Captcha Salah !</font><br />";
	}
	if (@$_GET['act'] == 4)
	{
		echo "<font color=red>Anda telah meninggalkan aplikasi selama lebih dari 5 menit<br />Untuk keamanan, silahkan login kembali</font><br />";
	}
?>

<table>
<form name="login" method="post" action="cek_login.php">
  <tr>
	<td>NAMA PENGGUNA</td>
	<td>: <input name="nama" type="text" ></td>
  </tr>
  <tr>
	<td>PASSWORD</td>
	<td>: <input name="pass" type="password"></td>
  </tr>
  <tr>
	<td>SALIN CAPTCHA</td>
	<td>: <input name="captcha" type="text" maxlength="5" size="9"> <img src="captcha.php"></td>
  </tr>
  <tr>
	<td>&nbsp;</td>
	<td> &nbsp; 
		<input type="submit" id="button-add" value=" LOGIN ">
	</td>
  </tr>
</form>
</table>


