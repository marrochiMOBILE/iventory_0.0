<?php 
include 'config.php';

$nama_divisi = $_POST['nama_divisi'];
// echo $nama_divisi;

$sql = "INSERT INTO divisi (id_divisi, nama_divisi) VALUES ('','$nama_divisi') ";

if(mysqli_query($conn,$sql)){
  header('location:../divisi.php');
}else{
    die('DATA DIVISI GAGAL DITAMBAHKAN KE DATABASE');
}

mysqli_close($conn);
?>