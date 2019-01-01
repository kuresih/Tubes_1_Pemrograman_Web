<!DOCTYPE html>
<html>
<head>

  <style>
    
      .box{
        width:500px;
        height:800px;
        background:white;
        position: center;
      }
      
    </style>
  
 <!-- <style type="text/css">

    input[type=text], select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type=submit] {
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    select {
      width: 100%;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      background-color: white;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    input[type=text]:focus {
      background-color: #FAFFBD;
    }
  </style> -->
  <title>Kategori | Romance</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-frontpage.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
<div class="bg-img" style="background-image: url('./img/images.jpg');">
 <nav class="navbar navbar-expand-lg navbar-light">
  <a style="color: #FF7F00; " class="navbar-brand" href="#"><b>PUISIku</a></b>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategori
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Romance.php">Romance</a>
          <a class="dropdown-item" href="Pendidikan.php">Pendidikan</a>
          <a class="dropdown-item" href="Islami.php">Islami</a>
          <a class="dropdown-item" href="Harapan.php">Harapan</a>
        </li>
    </ul>
  </div>
</nav>
<br><br><br>
 <?php
    include 'koneksi.php';
$sql ='select *from create_puisi where kategori="Romance"';
$query=mysqli_query($connect,$sql);
while($data=mysqli_fetch_array($query)){
?>
 <center><div class="box" align="center"><br><br>
  <h5 ><?php echo $data['judul'];?></h5>
  <p>Oleh : <?php echo $data['nama_penulis'];?></p>
    <p>Kategori : <?php echo $data['kategori'];?></p>
   <!--  <div class="box-body"> -->
    <p ><?php echo $data['isi_puisi'];?></p>
  <!-- </div> -->
</div>
</center>
   <?php
}
?>
<footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span><b>Copyright @ Puisiku 2018</span>
            </div>
          </div>
        </footer>
</body>
</html>