<?php 
include 'config.php';

$id = $_GET['id'];
$sql  = "DELETE FROM barang WHERE kode_barang='$id'";
if(mysqli_query($conn, $sql)){
    header('location:../barang.php');
}else{
    die("DATA BARANG GAGAL DIHAPUS SAAT DI DATABASE");
}
mysqli_close($conn);
?>