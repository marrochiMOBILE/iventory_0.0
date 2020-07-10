<?php 
include 'config.php';


$id = $_GET['id'];

$sql = "DELETE FROM user WHERE id_user='$id'";

if(mysqli_query($conn,$sql)){
    header('location:../user.php');
}else{
    die("DATA GAGAL DIHAPUS KE DATABASE");
}
?>