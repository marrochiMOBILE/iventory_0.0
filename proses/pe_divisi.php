<?php
include 'config.php';


$id_divisi = $_POST['id_divisi'];
$nama_divisi = $_POST['nama_divisi'];

$sql= "UPDATE divisi SET nama_divisi='$nama_divisi' WHERE id_divisi='$id_divisi' ";

if(mysqli_query($conn,$sql)){
    header('location:../divisi.php');
}else{
    die('DATA DIVISI GAGAL DI UPDATE KE DATABASE');
}

?>