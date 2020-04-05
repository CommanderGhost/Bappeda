<?php
   $koneksi = mysqli_connect("localhost","root","","db_bappeda_data_v1");
 
   // Check connection
   if (mysqli_connect_errno()){
       echo "Koneksi database gagal : " . mysqli_connect_error();
   }
?>