<?php
	session_start(); 
	require_once ("session_exp.php");
	$password=md5($_POST["pass"]);
	$nama=$_POST["nama"];


	if(!empty($nama) && !empty($password) && !empty($_POST['captcha']))
	{
	   if($_POST['captcha'] == $_SESSION['captcha'])
	   {
		include("koneksi.php");

		$sql="SELECT * FROM pengguna WHERE nm_pengguna='$nama' AND psw_pengguna='$password'";
		$result=mysql_query($sql);
	
		$count=mysql_num_rows($result);


		if($count==1)
		{
			$_SESSION['nama']=$nama; 
			$_SESSION['pswd']=$password;
			while($r=mysql_fetch_array($result)){
				$idpengguna= $r['id_pengguna'];
			}
			$_SESSION['id_user']=$id_pengguna;
			login_validate();						//setel waktu. jika halaman lebih dari 5 menit tidak digunakan, maka akan logout otomatis
			header("Location:index.php");
		}
		else 
		{
			header("Location:login.php?act=1");		//jika data tidak ditemukan
		}
	   }
	   else
	   {
		header("Location:login.php?act=3"); 		// jika captcha salah
	   }
	}
	else
	{
	    header("Location:login.php?act=2");			// jika field tidak diisi
	}
?>