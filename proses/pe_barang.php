<?php
include 'config.php';

$kode_barang = $_POST['kode_barang'];
$nama_barang = $_POST['nama_barang'];
$jenis_barang = $_POST['jenis_barang'];
$keterangan = $_POST['keterangan'];
// echo $kode_barang." | ".$nama_barang." | ".$jenis_barang." | ".$keterangan;


$sql = "UPDATE barang SET nama_barang='$nama_barang', jenis_barang='$jenis_barang', keterangan='$keterangan' WHERE kode_barang='$kode_barang'  ";

if(mysqli_query($conn, $sql)){
   header('location:../barang.php');
}else{
    die('DATA BARANG GAGAL DI UPDATE KE DATABASE');
}

mysqli_close($conn);

?>