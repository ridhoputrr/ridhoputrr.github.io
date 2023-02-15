<?php
  include "koneksi.php";
?>  
<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>dataguru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
          
      <head>
      <nav class="navbar bg-primary fixed-top ">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="dataguru.php">Teacher Management</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">DATA GURU</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="datasiswa.php">Student Management</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="dataguru.php">Teacher Management</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="nilaisiswa.php">Student Scores</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="grade.php">Grade</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="indexs.php">Log Out</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Tentang
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="galeri.php">Orang</a></li>
           </ul>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>
      </head>

  

  <body>

    <div class="container">
    <div class="mt-3">
    <h2 class= "text-center">DATA GURU</h2>

    <div class="card mt-5">
  <div class="card-header bg-primary text-white">
    Teacher Data
  </div>
    <div class="card-body">
      <table class="table table-bordered table-striped table-hover">
        <tr>
        <th>NIP</th>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Kode</th>
        <th>Aksi</th>
      </tr>

        <?php
        $sqlget = "SELECT * FROM guru";
        $query = mysqli_query ($koneksi,$sqlget); 

        while($data = mysqli_fetch_array ($query)) {
          echo "
            <tr>
            <td>$data[nip]</td> 
            <td>$data[nama]</td>
            <td>$data[jabatan]</td>
            <td>$data[kode]</td>
            <td>
            <div class='d-grid gap-2 col-6 mx-auto'>
            <a href='editguru.php?kode=$data[nip]' class='btn btn-sm btn-warning'>Update</a>
            <a href='? kode=$data[nip]' class='btn btn-sm btn-danger'>Delete</a> 
            </td>
            </tr>  
         ";
        }
      ?>    
                 
      </table> 
      <div class="d-grid gap-2 col-6 mx-auto">
      <a href="tambahdataguru.php" class="btn btn-primary"  onclick="alert('Masuk ke halaman tambah data')" >Tambah Data</a>
      
      </div>

</div>
<?php
if(isset($_GET['kode'])){
    mysqli_query($koneksi,"delete from guru where nip='$_GET[kode]'");
    
    echo"<script>alert('Hapus data berhasil');</script>";
    echo"<meta http-equiv=refresh content=0;URL='dataguru.php'>";
}
?>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>