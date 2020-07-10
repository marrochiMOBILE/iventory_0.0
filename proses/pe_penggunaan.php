<?php 
include 'config.php';

$id_penggunaan = $_POST['id_penggunaan'];
$start_date = $_POST['start_date'];
$kode_barang = $_POST['kode_barang'];
$id_divisi = $_POST['id_divisi'];
// $id_user = $_POST['id_user'];
// echo $id_penggunaan." | ".$start_date." | ".$kode_barang." | ".$id_divisi." | ".$id_user;

$sql = "UPDATE penggunaan SET `start_date`='$start_date',kode_barang='$kode_barang',id_divisi='$id_divisi' WHERE id_penggunaan='$id_penggunaan' ";
if(mysqli_query($conn, $sql)){
    header('location:../penggunaan.php');
}else{
    die('DATA PENGGUNAAN GAGAL DI UPDATE KE DATABASE');
}

mysqli_connect($conn);
?>