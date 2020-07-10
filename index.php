<?php
include "proses/config.php";
if(!isset($_SESSION['username']) and !isset($_SESSION['password'])){
    header('location:login.php');
} 
if(!empty($_GET['keluar'])){
    if($_GET['keluar'] == 'keluar'){
        session_destroy();header('location:login.php');
       }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVENTORY</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-transparent bg-transparent">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="javascript:(0)"><?= "[ ".$_SESSION['username']." | ".$_SESSION['password']." ]";?></a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php?keluar=keluar"><b>Log Out</b><span class="sr-only">(current)</span></a>
      </li>
    </ul>
  
  </div>
</nav>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-xl-10">
         <div class="card-deck">
            <div class="card  mb-3" >
            <!-- <div class="card-header">Data User</div> -->
            <div class="card-body ">
                <h5 class="card-title">user</h5>
                <p class="card-text">Semua berisi tentang Data User</p>
                <a href="user.php" class="btn btn-success">Selengkapnya</a>
            </div>
            </div>
            <div class="card  mb-3" >
            <!-- <div class="card-header">Data User</div> -->
            <div class="card-body ">
                <h5 class="card-title">Barang</h5>
                <p class="card-text">Semua berisi tentang Data Barang</p>
                <a href="barang.php" class="btn btn-success">Selengkapnya</a>
            </div>
            </div>
            <div class="card  mb-3" >
            <!-- <div class="card-header">Data User</div> -->
            <div class="card-body ">
                <h5 class="card-title">Divisi</h5>
                <p class="card-text">Semua berisi tentang Data Divisi</p>
                <a href="divisi.php" class="btn btn-success">Selengkapnya</a>
            </div>
            </div>
            <div class="card  mb-3" >
            <!-- <div class="card-header">Data User</div> -->
            <div class="card-body ">
                <h5 class="card-title">Penggunaan</h5>
                <p class="card-text">Semua berisi tentang Data Penggunaan</p>
                <a href="penggunaan.php" class="btn btn-success">Selengkapnya</a>
            </div>
            </div>
         </div>
        </div>
    </div>
</div>
<?php mysqli_close($conn); ?>
</body>
</html>