<?php
include "proses/config.php";
if(!isset($_SESSION['username']) and !isset($_SESSION['password'])){
    header('location:login.php');
} 

$username = $_SESSION['username'];
$password = $_SESSION['password'];
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
  <a class="navbar-brand " href="penggunaan.php">Kembali</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link " href="index.php?keluar=keluar"><b>Log Out</b><span class="sr-only">(current)</span></a>
      </li>
    </ul>
  
  </div>
</nav>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-xl-10">
            <h3>Data Penggunaan</h3>
            <hr>
            <h5>Tambah Penggunaan</h5>
            <form action="proses/pt_penggunaan.php" method="post">
            <div class="row">
                <div class="col-6 mt-4">
                <input type="date" class="form-control" name="start_date" placeholder="satart date" required>
                </div>
                <div class="col-6 mt-4">
                <select class="custom-select my-1 mr-sm-2"  name="kode_barang">
                <?php 
                  $barang = mysqli_query($conn,"SELECT * FROM barang");
                  if($cek = mysqli_num_rows($barang) > 0){
                    while($rs= mysqli_fetch_row($barang)){
                        echo "<option value='".$rs[0]."'>".$rs[1]."</option>";
                      }
                  }else{
                        echo "<option selected>Kosong</option>";
                  }
                ?>
                </select>
                </div>
                <div class="col-6 mt-4">
                <select class="custom-select my-1 mr-sm-2"  name="id_divisi">
                <?php 
                  $divisi = mysqli_query($conn,"SELECT * FROM divisi");
                  if($cek = mysqli_num_rows($divisi) > 0){
                    while($rs= mysqli_fetch_row($divisi)){
                        echo "<option value='".$rs[0]."'>".$rs[1]."</option>";
                      }
                  }else{
                        echo "<option selected>Kosong</option>";
                  }
                ?>
                </select>
                </div>
                <div class="col-6 mt-4">
                <input type="hidden" name="id_user" value="<?= $_SESSION['id_user']; ?>"> 
                 <button class="btn btn-primary btn-block">Simpan</button>
                </div>
            </div>
            </form>

            
        </div>
    </div>
</div>

<?php mysqli_close($conn); ?>
</body>
</html>