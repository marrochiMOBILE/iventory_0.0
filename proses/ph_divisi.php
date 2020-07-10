<?php
include 'config.php';


$id_divisi = $_GET['id'];

$sql = "DELETE FROM divisi WHERE id_divisi='$id_divisi'";

if(mysqli_query($conn,$sql)){
    header('location:../divisi.php');
}else{
   die('DATA DIVISI GAGAL DIHAPUS DI DATABASE');
}




?>