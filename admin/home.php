
<?php
session_start();
//error_reporting(0);

//pabiila user yang mengakses tidak sah
if (empty ($_SESSION['namauser']) and empty ($_SESSION['passuser'])) {
  echo "<center>Untuk mengakses halaman ini, anda harus login terlebih dahulu <br>";
  echo "<a href=index.php><b>LOGIN</b></a></center";
}

//apabila user yang mengakses sah
else {
  ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Page</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="home.php">PUISIku</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="home.php">
            <span>Home</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span>Kategori</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="Romance.php">Romance</a>
            <a class="dropdown-item" href="Islami.php">Islami</a>
            <a class="dropdown-item" href="Pendidikan.php">Pendidikan</a>
            <a class="dropdown-item" href="Harapan.php">Harapan</a>
            <div class="dropdown-divider"></div>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

         <?php
    include 'koneksi.php';
$sql ='select *from create_puisi';
$query=mysqli_query($connect,$sql);
?>
<table width="807" border="1" cellpadding="0" cellspacing="0" align="center">
<tr><td width="112" height="29" align="center" valign="middle">Judul</td>
<td width="112" height="29" align="center" valign="middle">Nama Penulis</td>
<td width="112" height="29" align="center" valign="middle">Kategori</td>
<td width="112" height="29" align="center" valign="middle">Isi_Puisi</td>
<td width="112" height="29" align="center" valign="middle"><a href="tambah_puisi.php">Tambah</a></td></tr>
<?php
while($data=mysqli_fetch_array($query)){
  ?>
  <tr>
  <td p align="center" hidden=""><?php echo $data['id_puisi'];?></td>
  <td p align="center"><?php echo $data['judul'];?></td>
  <td p align="center"><?php echo $data['nama_penulis'];?></td>
  <td p align="center"><?php echo $data['kategori'];?></td>
  <td p align="center"><?php echo $data['isi_puisi'];?></td>
<td p align="center"><a href="edit_puisi.php?ni=<?php echo $data['id_puisi'];?>" title="Edit data puisi ini">||edit||</a><a href="delete_puisi.php?ni=<?php echo $data['id_puisi'];?>" onclick="return confirm('yakin mau di hapus ?');"> ||hapus||</a></td></tr>
  <?php
}
?>
</table>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin keluar?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Jika yakin klik "Logout"</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

   
</article>
</div>
 <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Puisiku 2018</span>
            </div>
          </div>
        </footer>
  </body>

</html>
  <?php
}
?>