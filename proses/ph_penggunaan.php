<?php 
include 'config.php';

$id_penggunaan = $_GET['id'];

$sql = "DELETE FROM penggunaan WHERE id_penggunaan='$id_penggunaan' ";
if(mysqli_query($conn,$sql)){
   header('location:../penggunaan.php');
}else{
  die("DATA PENGGUNAAN GAGAL DIHAPUS KE DATABASE");
}

?>