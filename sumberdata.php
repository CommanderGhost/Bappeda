<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

 <!-- Import CDN Boostrap CSS -->
 <link href="fa\css\all.css" rel="stylesheet">
 <link rel="stylesheet" href="bs\css\bootstrap.min.css">
 <!-- Import CDN Boostrap CSS -->   
    <title>Sumber Data</title>
</head>
<body>

<!-- Navbar -->
<div class="card">
  <div class="card-header bg-success">
  <div class="d-flex flex-row bd-highlight">
  <div class="bd-highlight"><img src="img/logo.png" class="img-fluid center" alt="Logo Bantul" width="60px"></div>
  <div class="bd-highlight ml-3 text-white">Aplikasi Sentralisasi Data
  <span class="float2">
   <!-- Notifikasi -->
   <div class="dropdown dropleft">
  <button class="btn bg-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-bell"></i>
  </button>
  <ul class="dropdown-menu drop2">
      <li class="notification-box">
          <div class="row">
            <div class="col">
            <div>
            <p>Lorem ipsum dolor sit amet, consectetur</p>
              </div>
             <small class="text-warning">27.11.2015, 15:00</small>
            </div>
          </div>
      </li>
      <li class="notification-box">
          <div class="row">
            <div class="col">
            <div>
            <p>Lorem ipsum dolor sit amet, consectetur</p>
              </div>
             <small class="text-warning">27.11.2015, 15:00</small>
            </div>
          </div>
      </li>
  </ul>
</div>
   <!-- Notifikasi -->
  </span>
  <div style="color:black"><h5>BADAN PERENCANAAN PEMBANGUNAN DAERAH (BAPPEDA)</h5></div>
  <div style="color:black"><h5>KABUPATEN BANTUL</h5></div>
  </div>
</div>
  </div>
</div>
<!-- Navbar -->

<!-- Navbar 2 -->
<nav class="navbar navbar-expand-lg" style="background-color:#b5e61d">
  
  <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#" style="color:black">Beranda</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" style="color:black" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pengguna
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Ubah Password</a>
          <a class="dropdown-item" href="#">Ubah Profil</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" style="color:black" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Administrator
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Sumber Data</a>
          <a class="dropdown-item" href="#">Elemen Data</a>
          <a class="dropdown-item" href="#">Justifikasi Elemen Data</a>
          <a class="dropdown-item" href="#">Daftar User OPD</a>
        </div>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" style="color:black" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Manajemen Data
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Pencarian Data</a>
          <a class="dropdown-item" href="#">Download Template</a>
          <a class="dropdown-item" href="#">Input Data</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color:black">Master Data</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color:black">Laporan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color:black">Monitoring</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color:black">Usulan Elemen Data</a>
      </li>
      <li class="nav-item">
        <a class="nav-link mx-4" href="#" style="color:black">Keluar</a>
      </li>
    </ul>
  </div>
</nav>
<!-- Navbar 2 -->

<!-- Isi Data -->
<div class="container">
  <div class="row">

    <div class="col-12 my-1 text-center"><h4>Sumber Data</h4></div>

    <div class="col-12 text-center">
  <ol class="breadcrumb justify-content-center" style="background-color:#fcfeff">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Library</li>
  </ol>
    </div>

    <div class="col-12">
    <form class="form-inline justify-content-center">
    <input class="form-control col-sm-6" type="search" placeholder="Cari Data" aria-label="Search">
    <button class="btn btn-success mx-2" type="submit">Search</button>
    <button class="btn btn-success mx-1" type="submit">Tambah</button>
  </form>
    </div>
    
    <div class="col-12 mt-2">
    <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Sumber Data</th>
      <th scope="col">Alamat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Nama Sumber Data 1</td>
      <td>Jl. janti</td>
      <td>Lihat / Unduh</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Nama Sumber Data 2</td>
      <td>Jl. Janti 2</td>
      <td>Lihat / Unduh</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Nama Sumber Data 3</td>
      <td>Jl. Janti 3</td>
      <td>Lihat / Unduh</td>
    </tr>
  </tbody>
</table>
    </div>
  </div>
<!-- Isi Data -->


<div class="float">
        <img src="img/bantul2.png" alt="Brand Bantul" width="900px">
    </div>


    <!-- Import CDN  Boostrap JS -->
    <script src="bs\js\popper.min.js"></script>
    <script src="bs\js\slim.min.js"></script>
    <script src="bs\js\bootstrap.min.js"></script>
    <!-- Import CDN  Boostrap JS -->

</body>
</html>

<style type="text/css">

body { 
 background: url(img/back.jpg) no-repeat center center fixed; 
 -webkit-background-size: cover;
 -moz-background-size: cover;
 -o-background-size: cover;
 background-size: cover;
}

.center {
display: block;
  margin-left: auto;
  margin-right: auto;
}

.float{
	position:fixed;
    z-index:-100;
	width:10px;
	height:60px;
	bottom:3px;
	left:10px;
	text-align:center;
}

.navbar {
  height: 35px;
}

a:hover {
  background-color: yellow;
}

.float2{
	position:absolute;
	width:100px;
	height:60px;
	top:8px;
	right:100px;
	text-align:center;
}

.notification-box{
  padding: 10px;
}

.drop2 {
    width: 300px !important;
}
.breadcrumb {
    padding: 2px 15px !important;
}

</style>

<script>

</script>