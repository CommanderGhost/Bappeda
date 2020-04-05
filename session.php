<?php
   include('koneksi.php');
   session_start();
   
   $username = $_POST['username'];
   $password = md5($_POST['password']);
   
   $login = mysqli_query($koneksi,"select * from user where user = '$username' and password = '$password'");
   $cek = mysqli_num_rows($login);

//    echo $cek;

   if($cek>0){
       $_SESSION['username'] = $username;
       header("location:utama.php");
   }else{
       header("location:login.php");
   }
?>