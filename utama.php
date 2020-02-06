<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

 <!-- Import CDN Boostrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <!-- Import CDN Boostrap CSS -->   

    <title>Utama</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light" >
</nav>


<div class="container">

<!-- Logo -->
<div>
    <img src="img/logo2.png" class="img-fluid my-2" alt="Logo Bantul" width="200px">
</div>
<!-- Logo -->

    <!-- pencarian -->
    <div class=" d-flex justify-content-center">
      <div>
      <div class="card">
      <div class="card-body">
  <form>
  <div class="form-group">
    <input type="search" class="form-control" placeholder="Memasukkan kata kunci" aria-label="Search">
    <button class="btn btn-success my-1 btn-block" type="submit">Cari</button>
    
  </div>
      </div>
      <!-- home -->
        <div class="d-flex justify-content-around">
        <!-- data utama  -->
          <div class="mx-2 my-2"><div >
    <div class="hovereffect">
        <img width="250px" class="img-responsive" src="img/datautama.png" alt="Data Utama">
            <div class="overlay">
                <a href="#"><h2>Data Utama</h2></a>
            </div>
    </div>
</div>
          </div>

        <!-- data utama  -->

        <!-- peta -->
        <div class="my-2"><div >
    <div class="hovereffect">
        <img width="250px" class="img-responsive" src="img/peta.png" alt="peta">
            <div class="overlay">
                <a href="#"><h2>Peta</h2></a>
            </div>
    </div>
</div>
          </div>
        <!-- peta -->

        <!-- login -->
        <div class="mx-2 my-2"><div >
    <div class="hovereffect">
        <img width="250px" class="img-responsive" src="img/loginlogo.png" alt="loginlogo">
            <div class="overlay">
                <a href="login.php"><h2>Login</h2></a>
            </div>
    </div>
</div>
          </div>
        <!-- login -->
          
        </div>
      <!-- home -->
      
      </div>
      </div>
    <!-- pencarian -->

</div>
</div>

<!-- brand bantul -->

    <div class="float">
        <img src="img/bantul.png" alt="Brand Bantul" width="200px">
    </div>
<!-- brand bantul -->







    <!-- Import CDN  Boostrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
    <!-- Import CDN  Boostrap JS -->

</body>
</html>

<style type="text/css">

body { 
 background: url(img/backutama.png) no-repeat center center fixed; 
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

/* overlay */
.hovereffect {
  width: 100%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
}

.hovereffect .overlay {
  position: absolute;
  overflow: hidden;
  width: 80%;
  height: 80%;
  left: 10%;
  top: 10%;
  border-bottom: 1px solid #FFF;
  border-top: 1px solid #FFF;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: scale(0,1);
  -ms-transform: scale(0,1);
  transform: scale(0,1);
}

.hovereffect:hover .overlay {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.hovereffect img {
  display: block;
  position: relative;
  -webkit-transition: all 0.35s;
  transition: all 0.35s;
}

.hovereffect:hover img {
  filter: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg"><filter id="filter"><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="linear" slope="0.6" /><feFuncG type="linear" slope="0.6" /><feFuncB type="linear" slope="0.6" /></feComponentTransfer></filter></svg>#filter');
  filter: brightness(0.6);
  -webkit-filter: brightness(0.6);
}

.hovereffect h2 {
  text-transform: uppercase;
  text-align: center;
  position: relative;
  font-size: 17px;
  background-color: transparent;
  color: #FFF;
  padding: 50px 0;
  opacity: 0;`
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(0,-100%,0);
  transform: translate3d(0,-100%,0);
}

.hovereffect a, .hovereffect p {
  color: #FFF;
  padding: 1em 0;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(0,100%,0);
  transform: translate3d(0,100%,0);
}

.hovereffect:hover a, .hovereffect:hover p, .hovereffect:hover h2 {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}
/* overlay */

.float{
	position:fixed;
	width:10px;
	height:60px;
	bottom:20px;
	right:200px;
	text-align:center;
}

</style>

<script>

</script>
