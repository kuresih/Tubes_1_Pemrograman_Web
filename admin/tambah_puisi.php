<script type="text/javascript" src="tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: "#mytextarea"
        });
    </script>
<body bgcolor="#CCCCCC">
<h2><p align="center">Tambah Puisi</p></h2>
<form method="post" action="aksi_tambah_puisi.php">
<table width="546" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#FFFFFF">
<tr>
<td width="189" height="20"></td>
<td width"26"></td>
<td width"331"></td></tr>
<!-- <tr>
<td height="27" align="right" valign="middle">id puisi</td>
<td height="27" align="center" valign="top">:</td>
<td valign="middle"><label>
<input name="id_puisi" type="text" size="10"><br/>
</label></td></tr> -->
<tr>
<td height="27" align="right" valign="middle">Judul</td>
<td height="27" align="center" valign="top">:</td>
<td valign="middle"><label>
<input name="judul" type="text" size="30"><br/>
</label></td></tr>
<tr>
<td height="27" align="right" valign="middle">Nama Penulis</td>
<td height="27" align="center" valign="top">:</td>
<td valign="middle"><label>
<input name="nama_penulis" type="text" size="30"><br/>
</label></td></tr>
 <tr>
    <td height="27" align="right" valign="middle">Kategori</td>
    <td>:</td>
    <td><select name="kategori">
    <option value="Romance">Romance</option>
    <option value="Pendidikan">Pendidikan</option>
    <option value="Islami">Islami</option>
    <option value="Harapan">Harapan</option>
    <option value="Topeng">Topeng</option>
    </select></td>
    </tr>
<tr>
    <td>Isi Puisi</td>
    <td>:</td>
    <td><textarea id="mytextarea" name="isi_puisi"></textarea><br>
    </tr>
<td height="42"></td>
<td></td>
<td><input type="submit" name="ttambah" value="TAMBAH">
</form>
<form method="post" action="index.php">
<input type="submit" name="tbatal" value="BATAL"></td></tr>
</table>
</form>
</body>