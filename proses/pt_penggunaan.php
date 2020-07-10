<?php
include 'config.php';

$start_date = $_POST['start_date'];
$kode_barang = $_POST['kode_barang'];
$id_divisi = $_POST['id_divisi'];
$id_user = $_POST['id_user'];
// echo $start_date." | ".$kode_barang." | ".$id_divisi." | ".$id_user;
$sql = "INSERT INTO penggunaan (id_penggunaan,`start_date`,kode_barang,id_divisi,id_user) VALUES ('','$start_date','$kode_barang','$id_divisi','$id_user')";
if(mysqli_query($conn, $sql)){
    header('location:../penggunaan.php');
}else{
  die("DATA PENGGUNAAN GAGAL DITAMBAHKAN KE DATABASE");
}
?>