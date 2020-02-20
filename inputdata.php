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
              <li class="li_menu"><a href="#">Input Data</a></li>
              <li class="li_menu"><a href="#">Keluar</a></li>
            </ul>
</div>

<div>
            <table border="0" width="100%" align="center">
                <tr>
                    <td width="25%" bgcolor="yellow" height="70px" align="center">
                    <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Pencarian Data
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
  <button type="button" class="btn btn-success">Pilih</button>
</div><br>
                    </td>
                    <td rowspan="7" width="30px"></td>
                    <td rowspan="7" valign="top">
                        <h3>Kondisi Pendidikan Anak Usia Dini</h3><br>
                        <table border="1">
                        <button type="button" class="btn btn-success">Print</button>
                         <button type="button" class="btn btn-success">Download</button>
                         <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    2019
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
    </div>
                            <tr>
                                <td align="center" bgcolor="yellow" colspan="1">No</td>
                                <td align="center" bgcolor="yellow" colspan="1">Nama Elemen Data</td>
                                <td align="center" bgcolor="yellow" colspan="1">2017</td>
                                <td align="center" bgcolor="yellow" colspan="1">2018</td>
                                <td align="center" bgcolor="yellow" colspan="1">2019</td>
                                <td align="center" bgcolor="yellow" colspan="1">Satuan</td>
                                <td align="center" bgcolor="yellow" colspan="1">Status Data</td>
                                <td align="center" bgcolor="yellow" colspan="1">Otoritas</td>
                                <td align="center" bgcolor="yellow" colspan="1">Status Validasi</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>PAUD</td>
                                <td>xxxx</td>
                                <td>xxxx</td>
                                <td>xxxx</td>
                                <td>unit</td>
                                <td>pilih Status</td>
                                <td>DIKPORA</td>
                                <td>Sudah/Belum Tervalidasi</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>PAUD</td>
                                <td>xxxx</td>
                                <td>xxxx</td>
                                <td>xxxx</td>
                                <td>unit</td>
                                <td>pilih Status</td>
                                <td>DIKPORA</td>
                                <td>Sudah/Belum Tervalidasi</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
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
  </div>
    
                    </td>
                </tr>
                <tr>
                    <td>
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
                    </td>
                </tr>
                <tr>
                    <td>
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
                    </td>
                </tr>
            </table>
        </div>

<!-- Import CDN  Boostrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
    <!-- Import CDN  Boostrap JS -->

    