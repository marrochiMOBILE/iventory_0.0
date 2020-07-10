<?php 
include 'config.php';
$username = $_POST['username'];
$password = md5($_POST['password']);

echo var_dump($_POST);

$sql = "SELECT * FROM user WHERE username='$username' AND `password`='$password'";
$result = mysqli_query($conn, $sql);
$rs =mysqli_fetch_array($result);
if (mysqli_num_rows($result) > 0) {
    $_SESSION['id_user'] = $rs['id_user'];
    $_SESSION['username'] = $rs['username'];
    $_SESSION['password'] = $rs['password'];
    header('location:../index.php');
} else {
    header('location:../login.php?pesan=password/username salah');
}

mysqli_close($conn);

?>