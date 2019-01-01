<script type="text/javascript" src="tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: "#mytextarea"
        });
    </script>
<body bgcolor="#CCCCCC">
<h2>
<p align="center">Edit Puisi
<?php
include "koneksi.php";
	$ni=$_GET['ni'];
	$query=mysqli_query($connect,"select *from create_puisi where id_puisi='$ni'");
	while($data=mysqli_fetch_array($query)){
?>
</p></h2>
<form method="post" name="frm" action="aksi_edit_puisi.php">
<table width="546" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" align="center">
<tr>
<td width="189" height="20"></td>
<td width="26"></td>
<td width="331"></td></tr>
<tr>
<td height="27" align="right" valign="middle">id puisi</td>
<td align="center" valign="top">:</td>
<td valign="middle">
<input type="text" name="id_puisi" value="<?php echo $data['id_puisi'];?>" readonly="readonly" >
</td>
</tr>
<tr>
<td height="27" align="right" valign="middle">Judul</td>
<td align="center" valign="top">:</td>
<td valign="middle"><label>
<input type="text" name="judul" value="<?php echo $data['judul'];?>"></label></td></tr>
<tr>
<td height="27" align="right" valign="middle">Nama Penulis</td>
<td align="center" valign="top">:</td>
<td valign="middle"><label>
<input type="text" name="nama_penulis" value="<?php echo $data['nama_penulis'];?>"></label></td></tr>
<tr>
<td height="27" align="right" valign="middle">Kategori</td>
<td align="center" valign="top">:</td>
<td valign="middle"><label>
<input type="text"size="50" name="kategori" value="<?php echo $data['kategori'];?>"></label></td></tr>
<tr>
<td height="27" align="right" valign="middle">isi puisi</td>
<td align="center" valign="top">:</td>
<td valign="middle"><label>
<textarea name="isi_puisi" id="mytextarea" value="<?php echo $data['isi_puisi'];?>"><?php echo $data['isi_puisi'];?></textarea></td></tr>
<tr>
<td height="42"></td>
<td></td>
<?php } ?>
<td>
<input type="submit" name="tedit" value="Edit">
</form>
<form method="post" action="index.php">
<input type="submit" name="tbatal" value="Batal"></td></tr>
</table>
</form>
