<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventory";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("TIDAK DAPAT TERHUBUNG KE DATABASE CEK FILE [iventory_0.0/proses/config.php]  |   " . mysqli_connect_error());
}
date_default_timezone_set("Asia/Bangkok");
session_start();
?>