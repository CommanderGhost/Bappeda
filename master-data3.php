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
    <title>Pencarian Data</title>
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
<!-- Navbar 2 -->
<div class="left-ly">
  <div class="accordion" id="accordionExample">
    <div class="card">
      <div class="card-header" id="headingOne">
        <h2 class="mb-0">
          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Data Umum
          </button>
        </h2>
      </div>

      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
          <p>1.Batas Wilayah</p>
          <p>2.Luas Wilayah</p>
          <p>3.Klasifikasi Wilayah</p>
          <p>4.Penggunaan Lahan</p>
          <p>5.Daerah Aliran Sungai</p>
          <p>6.Kawasan Rawan Bencana</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingOne">
        <h2 class="mb-0">
          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Pendidikan
          </button>
        </h2>
      </div>

      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
        <p>1.Kondisi Pendidikan Anak Usia Dini (PAUD)</p>
        <p>2.Kondisi Pendidikan Dasar</p>
        <p>3.Kondisi Pendidikan Menengah Pertama</p>
        <p>4.Kondisi Pendidikan Menengah Atas Dan Kejuruan</p>
        <p>5.Kondisi Pendidikan Non Formal</p>
        <p>6.Kondisi Program Kesetaraan</p>
        <p>7.Persentase Kelulusan</p>
        <p>8.Angka Putus Sekolah (APS) Per Jenjang Pendidikan</p>
        <p>9.Angka Partisipasi Kasar(APK)</p>
        <p>10.Angka Partisipasi Murni (APM)</p>
        <p>11.Rasio Guru dan Murid</p>
        <p>12.Angka Partisipasi Sekolah</p>
        <p>13.Angka Buta Huruf</p>
        <p>14.harapan Lama Sekolah</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingOne">
        <h2 class="mb-0">
          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Kesehatan
          </button>
        </h2>
      </div>

      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
          <p>1.isi</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Navbar 2 -->
<!-- Isi Data -->
<div class="right-ly">
  <div class="text-center">
      <h4>Master Data</h4>
      <h5>Master Data Berdasarkan :</h5>
  </div>

  <div class="row container-fluid justify-content-center">
    <div class="col-md-4">
      <table class="table">
        <thead style="background-color:yellow">
        </thead>
        <tbody>
          <tr>
            <th scope="col">2014</th>
            <th scope="col">73,24</th>
          </tr>
          <tr>
            <th scope="col">2016</th>
            <th scope="col">73,44</th>
          </tr>
          <tr>
            <th scope="col">2017</th>
            <th scope="col">73,56</th>
          </tr>
          <tr>
            <th scope="col">2018</th>
            <th scope="col">73,66</th>
          </tr>
          <tr>
          </tr>
        </tbody>
      </table>
    </div>
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
.right-ly{
  width: auto;
  height: auto;
}
.left-ly{
  position:absolute;
  width: 25%;
  height:100%;
  float:left;
.clear{
  clear:both;
}
</style>

<script>

</script>