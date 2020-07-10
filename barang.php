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
  <a class="navbar-brand " href="index.php">Kembali</a>

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
            <h3>Data Barang</h3>
            <hr>
            <h5>Tambah Barang</h5>
            <form action="proses/pt_barang.php" method="post">
            <div class="row">
                <div class="col-6 mt-4">
                <input type="text" class="form-control" name="nama_barang" placeholder="nama barang" required>
                </div>
                <div class="col-6 mt-4">
                <input type="text" class="form-control" name="jenis_barang" placeholder="jenis barang" required>
                </div>
                <div class="col-12 mt-4">
                <textarea class="form-control" rows="3" name="keterangan" placeholder="keterangan barang"></textarea>
                </div>
                <div class="col-2 mt-4">
                 <button class="btn btn-primary">Simpan</button>
                </div>
            </div>
            </form>

             <hr>   
            <h5>Table</h5>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                    <th scope="col">id barang</th>
                    <th scope="col">nama barang</th>
                    <th scope="col">jenis barang</th>
                    <th scope="col">keterangan</th>
                    <th scope="col" width="20%">optional</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM barang ";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo "<td>".$row['kode_barang']."</td>";
                        echo "<td>".$row['nama_barang']."</td>";
                        echo "<td>".$row['jenis_barang']."</td>";
                        echo "<td>".$row['keterangan']."</td>";
                        echo "<td>
                        <a href='e_barang.php?id=".$row['kode_barang']."' class='btn btn-warning'>Edit</a>
                        <a href='proses/ph_barang.php?id=".$row['kode_barang']."' class='btn btn-danger'>Hapus</a>
                        </td>";
                        echo '</tr>';
                      }
                    } else {
                      echo '<tr>';
                      echo " <td colspan='4' style='text-align:center;'>Kosong</td>";
                      echo '</tr>';
                    }
                   
                    ?>
                </tbody>
                </table>
        </div>
    </div>
</div>

<?php mysqli_close($conn); ?>
</body>
</html>