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
<br>
<div class="text-center"
        style="color: black"><h1>ELEMEN DATA</h1>
        <h5>ADMINISTRATOR >> ELEMEN DATA</h5>
</div>
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
  <button type="button" class="btn btn-success">refresh</button>
</div>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm-2" style="background-color:yellow;">
      Elemen Data
    </div>
    <div class="col-sm-3">
      Kondisi Pendidikan Dasar
      <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Sub Elemen Data
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <p>1. a</p>
        <p>2. b</p>
        <p>3. c</p>
      </div>
    </div>
  </div>
    </div>
    </div>
    </div>

    <div class="float-left">
        <img src="img/bantul.png" alt="Brand Bantul" width="200px">
    </div>

    <!-- Import CDN  Boostrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
    <!-- Import CDN  Boostrap JS -->
