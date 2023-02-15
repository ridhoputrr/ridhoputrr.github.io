<?php
include "koneksi.php";
$sqlget=mysqli_query($koneksi,"select * from guru where nip='$_GET[kode]'");
$data=mysqli_fetch_array($sqlget);
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

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
  <div class="card-header bg-secondary text-white">
    Update Data
  </div>
    <div class="card-body">
    <div class="d-grid gap-2">  
        <a href="dataguru.php" class="btn btn-secondary mt-3">Kembali</a>
        <form action="editguru.php" method="post">
        
            <div class="mt-3">
            <label for="nip" class="col-form-label"><h6>NIP</h6></label>
            <input class="form-control" type="text" name="nip" value="<?php echo $data['nip']; ?>"></td>
        
            <div class="mt-3">
            <label for="nama" class="col-form-label"><h6>Nama Guru</h6></label>
            <input class="form-control" type="text" name="nama" value="<?php echo $data['nama'];?>"></td>
        
            <div class="mt-3">
            <label for="jabatan" class="col-form-label"><h6>Jabatan</h6></label>
            <input class="form-control" type="text" name="jabatan" value="<?php echo $data['jabatan'];?>"></td>
        
            <div class="mt-3">
            <label for="kode" class="col-form-label"><h6>Kode</h6></label>
            <input class="form-control" type="text" name="kode" value="<?php echo $data['kode'];?>"></td>
            
        </form>

    <div class="mt-3">
    <div class="d-grid gap-2">
    <input class ="btn btn-secondary mt-4" type="submit" name="tambah" value="Tambahkan">
        
        </div>
  </body>

<?php
include "koneksi.php";

    if(isset($_POST['tambah'])) {
        $result = mysqli_query($koneksi, "UPDATE guru SET
        nama = '$_POST[nama]',
        jabatan = '$_POST[jabatan]',
        kode = '$_POST[kode]'
        WHERE nip = '$_POST[nip]'");

        echo "<script>alert('Update data berhasil');</script>";
        echo"<meta http-equiv=refresh content=0;URL='dataguru.php'>";
    }
?>
