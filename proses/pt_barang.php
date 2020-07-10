<?php 
include 'config.php';


$nama_barang = $_POST['nama_barang'];
$jenis_barang = $_POST['jenis_barang'];
$keterangan = $_POST['keterangan'];
// echo $nama_barang." | ".$jenis_barang." | ".$keterangan;
$sql = "INSERT INTO barang (kode_barang,nama_barang,jenis_barang,keterangan) VALUES ('','$nama_barang','$jenis_barang','$keterangan')";
if(mysqli_query($conn,$sql)){
   header('location:../barang.php');
}else{
    die("DATA BARANG GAGAL DITAMBAHKAN KE DATABASE");
}

mysqli_close($conn);
?>