<?php
require_once("koneksi.php");
    if (!isset($_SESSION)) {
        session_start();
    }
$username = $_POST['username'];
$password = $_POST['password'];
$cekuser = mysqli_query($connect,"SELECT * FROM login WHERE username = '$username' AND password = '$password'");
$jumlah = mysqli_num_rows($cekuser);
$hasil = mysqli_fetch_array($cekuser,MYSQLI_ASSOC);
if($jumlah == 0) {
	header('location:logiin.php?login=gagal');
	}else{
$_SESSION['username'] = $hasil['username'];
$_SESSION['password'] = $hasil['password'];
if (empty($ref)) {
	    echo "<script>alert('Selamat Datang, tulislah puisi mereka!');document.location.href='index.html'</script>";
}else{
header('location:logiin.php'.$ref.'');
}
}
?>
