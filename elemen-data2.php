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
    <title>Elemen Data</title>
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
<h5 class="text-center mt-2">Elemen Data</h5>

<div class="container col-md-10">
<!-- bidang urusan -->
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Pilih Bidang Urusan
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
  <button type="button" class="btn btn-success">Pilih</button>
</div>
<!-- bidang urusan -->
<br>
<!-- perangkat daerah -->
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Pilih Perangkat Daerah/ Lembaga Vertikal
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
  <button type="button" class="btn btn-success">Pilih</button>
  <button type="button" class="btn btn-success">+</button>
</div>
<!-- perangkat daerah -->
<br>
<!-- elemen data -->
<div class="container-left">
  <div class="row">
    <div class="col-sm">
    ELEMEN DATA
    <br>
    <br>
    <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Kondisi Pendidikan Dasar
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      <p>Jumlah Sekolah Dasar</p>
      <p>Jumlah Murid</p>
      <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Guru
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      <p>PNS</p>
      <p>Non PNS</p>
      </div>
    </div>
  </div>
  </div>
      </div>
    </div>
  </div>
  </div>
    </div>
    <div class="col-sm">
      Satuan
      <br>
      <br>
      <!-- DETAIL -->
      <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      <p>Unit</p>
      <p>Orang</p>
      <br>
      <p>Orang</p>
      <br>
      <p>Orang</p>
      <p>Orang</p>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>

<div>
        <p>- Data hanya dapat dirubah oleh Perangkat Daerah/ Lembaga Vertikal terpilih,
        namun tetap terlihat oleh Perangkat Daerah/ Lembaga Vertikal lainnya.</p>
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