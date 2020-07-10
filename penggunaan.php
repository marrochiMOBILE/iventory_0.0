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
            <h3>Data penggunaan</h3>
            <hr>
            <a href="t_penggunaan.php" class="btn btn-primary">Tambah Barang [+]</a>
             <hr>   
            <h5>Table</h5>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                    <th scope="col">start date</th>
                    <th scope="col">kode barang</th>
                    <th scope="col">id divisi</th>
                    <th scope="col">id user</th>
                    <th scope="col" width="20%">optional</th>
                    </tr>
                </thead>
                <tbody>
               
                    <?php
                    $sql = "SELECT p.* FROM penggunaan p, barang b, divisi d, `user` u WHERE p.id_divisi=d.id_divisi AND p.kode_barang=b.kode_barang AND p.id_user = u.id_user";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo "<td>".$row['start_date']."</a></td>";
                        echo "<td><a href='barang.php'>".$row['kode_barang']."</a></td>";
                        echo "<td><a href='divisi.php'>".$row['id_divisi']."</a></td>";
                        echo "<td><a href='user.php'>".$row['id_user']."</a></td>";
                        echo "<td>
                        <a href='e_penggunaan.php?id=".$row['id_penggunaan']."' class='btn btn-warning'>Edit</a>
                        <a href='proses/ph_penggunaan.php?id=".$row['id_penggunaan']."' class='btn btn-danger'>Hapus</a>
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