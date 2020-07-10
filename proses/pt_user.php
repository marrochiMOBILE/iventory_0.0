<?php
include 'config.php';

$username = $_POST['username'];
$password = md5($_POST['password']);
// echo $username." | ".$password

$sql = "INSERT INTO user (id_user, username, `password`) VALUES  ('','$username','$password')";
if(mysqli_query($conn,$sql)){
    header('location:../user.php');
}else{
    die('DATA USER GAGAL DITAMBAHKAN');
}

mysqli_close($conn);
?>