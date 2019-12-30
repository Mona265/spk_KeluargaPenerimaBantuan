
<?php 
// koneksi ke database
include 'koneksi.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];
$penghasilan = $_POST['penghasilan'];
$jumlah_jiwa = $_POST['jumlah_jiwa'];
$luas_rumah = $_POST['luas_rumah'];



mysqli_query ($koneksi,"insert into calon_penerima(nama,alamat,umur,penghasilan,jumlah_jiwa,luas_rumah) values ('$nama','$alamat','$umur','$penghasilan','$jumlah_jiwa','$luas_rumah')");

header("location:tampildata.php");

 ?> 