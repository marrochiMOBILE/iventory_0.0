<?php 
include 'config.php';

$id = $_POST['id_user'];
$username = $_POST['username'];
$password = md5($_POST['password']);
// echo $id." | ".$username." | ".$password;

$rs = mysqli_query($conn,"UPDATE user SET username='$username', `password`='$password' WHERE id_user='$id'");
if($rs){
    header('location:../user.php?berhasil');
}else{
    die("Ada Masalah Dalam update user ke database");
}

mysqli_close($conn);

?>