<html> <h3>
<?php

include("koneksi.php");

    $sql1 = "SELECT MIN(penghasilan) AS Gaji, MAX(jumlah_jiwa) AS Jiwa, MIN(luas_rumah) AS Rumah, MAX(umur) AS Umur FROM `konversi`";
    $query1 = mysqli_query($koneksi, $sql1);
    $row1 = mysqli_fetch_array($query1);    //tidak menggunakan while karena datanya hanya satu yaitu dimana id=$id
    $gaji = $row1['Gaji']; //min
    $jiwa = $row1['Jiwa']; //max
    $rumah = $row1['Rumah']; //min
    $umur = $row1['Umur']; //max
    
	$sql = "SELECT * FROM `konversi`";
    $query = mysqli_query($koneksi, $sql);
    if ($query){
	    while($row = mysqli_fetch_array($query)){
	    	$id_n = $row['id'];
	    	$id_cp_n = $row['id_cp'];
	    	$penghasilan_n = round($gaji/$row['penghasilan'], 9);
	    	$jumlah_jiwa_n = round($row['jumlah_jiwa']/$jiwa, 9);
	    	$luas_rumah_n = round($rumah/$row['luas_rumah'], 9);
	    	$umur_n = round($row['umur']/$umur, 9);

	    	$sql_n = "INSERT INTO `normalisasi` (`id`, `id_cp`, `gaji`, `jiwa`, `rumah`, `umur`) VALUES ('$id_n', '$id_cp_n', '$penghasilan_n', '$jumlah_jiwa_n', '$luas_rumah_n', '$umur_n')";
	    	$query2 = mysqli_query($koneksi, $sql_n);
	    }
	}
if( $query1 && $query2 ) {
        echo "berhasil";
    }


?>
</h3>
<a href="normalisasi.php">kembali</a>
</html>