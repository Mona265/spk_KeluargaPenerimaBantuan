<?php

include 'koneksi.php';

// fungsi mendapatkan data id yang akan dikirim dari url
$id = $_GET['id'];

// fungsi menghapus data dari database
mysqli_query($koneksi, "delete from calon_penerima where id='$id'");

//kembali ke indexcrud
header("location:tampildata.php")
?>