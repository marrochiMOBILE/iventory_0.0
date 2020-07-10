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
$username = $_SESSION['username'];
$password = $_SESSION['password'];

if($_GET['id']){
    $id = $_GET['id'];
    $sql = mysqli_query($conn,"SELECT * FROM user WHERE id_user='$id'");
    $rsql= mysqli_fetch_row($sql);
    if($rsql > 0){

    }else{
        die('Di database tidak ada id tersebut');
    }
}else{
    die('$_GET[ID]  TIDAK TERSEDIA');
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
  <a class="navbar-brand " href="user.php">Kembali</a>

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
            <h3>Data User</h3>
            <hr>
            <h5>Edit data</h5>
            <form action="proses/pe_user.php" method="post">
            <?php
                   
            ?>
            <div class="row">
                <div class="col-10 mt-4">
                <input type="hidden" class="form-control" value="<?= $rsql[0];?>" name="id_user" placeholder="username">
                <input type="text" class="form-control" value="<?= $rsql[1];?>" name="username" placeholder="username">
                </div>
                <div class="col-10 mt-4">
                <input type="text" class="form-control" value="<?= $rsql[2];?>" name="password" placeholder="password">
                </div>
                <div class="col-4 mt-4">
                 <button class="btn btn-primary">Simpan</button>
                </div>
            </div>
            </form>

           
        </div>
    </div>
</div>
</body>
</html>