<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

 <!-- Import CDN Boostrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <!-- Import CDN Boostrap CSS -->   
    <title>Master Data</title>
    <link rel="stylesheet" type="text/css" href="css/form.css">
    <style type="text/css">
    .ul_menu {
          list-style-type: none;
          margin: 0;
          padding-left: 40px;
          padding-right: 40px;
          overflow: hidden;
          background-color: #7CFC00;
        }

        .li_menu {
            font-size: 15px;
            float: left;
        }

        .li_menu a {
          display: block;
          color: black;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
        }

        .li_menu a:hover {
          background-color: yellow;
        }
        </style>
</head>
<body>

<!-- Navbar -->
<div class="card">
  <div class="card-header bg-success">
  <div class="d-flex flex-row bd-highlight">
  <div class="bd-highlight"><img src="img/logo.png" class="img-fluid center" alt="Logo Bantul" width="60px"></div>
  <div class="bd-highlight ml-3 text-white">Aplikasi Sentralisasi Data
  <div style="color:black"><h5>BADAN PERENCANAAN PEMBANGUNAN DAERAH (BAPPEDA)</h5></div>
  <div style="color:black"><h5>KABUPATEN BANTUL</h5></div>
  </div>
  
</div>
  </div>
</div>
<!-- Navbar -->

<div>
            <ul class="ul_menu">
              <li class="li_menu"><a href="#">Beranda</a></li>
              <li class="li_menu"><a href="#">Pengguna</a></li>
              <li class="li_menu"><a href="#">Administrator</a></li>
              <li class="li_menu"><a href="#">Manajemen Data</a></li>
              <li class="li_menu"><a href="#">Master Data</a></li>
              <li class="li_menu"><a href="#">Laporan</a></li>
              <li class="li_menu"><a href="#">Monitoring</a></li>
              <li class="li_menu"><a href="#">Usulan Klemen Data</a></li>
              <li class="li_menu"><a href="#">Keluar</a></li>
            </ul>
        </div>

<div class="text-center"
        style="color: black"><h1>MASTER DATA</h1>
        <h5>MASTER DATA >> LKPJ</h5>
</div>
<br>


<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    PILIH BIDANG URUSAN
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
  <button type="button" class="btn btn-success">Pilih</button>
</div>
<br>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Masukkan kata kunci
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
  <button type="button" class="btn btn-success">Pilih</button>
</div>
<br>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    2014
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
    </div>
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    2018
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
    </div>
    <button type="button" class="btn btn-success">Print</button>
    <button type="button" class="btn btn-success">Download</button>
  </div>

  

  <table class="table">
    <thead class="thead-dark">
  <thead>
    <tr>
      <th scope="col">Bidang Urusan</th>
      <th scope="col">Daftar Data</th>
      <th scope="col">Sumber Data</th>
      <th scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Kesehatan</th>
      <td>Umur Harapan Hidup</td>
      <td>DINKES KAB BANTUL</td>
      <td>LIHAT/UNDUH</td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td>Anggaran dan Realisasi Kegiatan Peningkatan </td>
      <td>DINKES KAB BANTUL</td>
      <td>LIHAT/UNDUH</td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td>Layanan Unggulan</td>
      <td>DINKES KAB BANTUL</td>
      <td>LIHAT/UNDUH</td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td>Kegiatan Inovasi Puskesmas</td>
      <td>DINKES KAB BANTUL</td>
      <td>LIHAT/UNDUH</td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td>Anggaran dan Realisasi</td>
      <td>DINKES KAB BANTUL</td>
      <td>LIHAT/UNDUH</td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td>Hasil Kegiatan Pengawasan Makanan</td>
      <td>DINKES KAB BANTUL</td>
      <td>LIHAT/UNDUH</td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td>Hasil Capaian Tatanan PHBS</td>
      <td>DINKES KAB BANTUL</td>
      <td>LIHAT/UNDUH</td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td>Penilaian Akreditasi Puskesmas</td>
      <td>DINKES KAB BANTUL</td>
      <td>LIHAT/UNDUH</td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td>Kelas Rumah Sakit Tahun</td>
      <td>DINKES KAB BANTUL</td>
      <td>LIHAT/UNDUH</td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td>Data Kepesertaan Jaminan Kesehatan Tahun</td>
      <td>DINKES KAB BANTUL</td>
      <td>LIHAT/UNDUH</td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td>Kemitraan Dinas Kesehatan dan Institusi</td>
      <td>DINKES KAB BANTUL</td>
      <td>LIHAT/UNDUH</td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td>Permasalahan dan Solusi dalam Urusan Kesehatan</td>
      <td>DINKES KAB BANTUL</td>
      <td>LIHAT/UNDUH</td>
    </tr>
  </tbody>
</table>

  <div class="float-left">
        <img src="img/bantul.png" alt="Brand Bantul" width="200px">
    </div>


<!-- Import CDN  Boostrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
    <!-- Import CDN  Boostrap JS -->