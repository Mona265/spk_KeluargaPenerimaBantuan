<?php 
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];
$penghasilan = $_POST['penghasilan'];
$jumlah_jiwa = $_POST['jumlah_jiwa'];
$luas_rumah = $_POST['luas_rumah'];



$data = mysqli_query($koneksi,"update calon_penerima set nama = '$nama', alamat = '$alamat', umur= '$umur', penghasilan = '$penghasilan', jumlah_jiwa = '$jumlah_jiwa', luas_rumah = '$luas_rumah' where id = '$id'");

header("location:tampildata.php");
 ?>
