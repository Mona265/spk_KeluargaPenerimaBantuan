<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "spk_db";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
  echo "Belum Konek";
} 
?>
