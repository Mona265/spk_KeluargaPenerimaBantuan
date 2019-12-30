<html> <h3>
<?php

include("koneksi.php");

	$sql_bobot1 = "SELECT * FROM bobot WHERE nama_kriteria = 'penghasilan' ";
	$query_bobot1 =  mysqli_query($koneksi, $sql_bobot1);
	$baris_1 = mysqli_fetch_array($query_bobot1);
	$bobot_gaji = $baris_1['nilai_bobot'];

	$sql_bobot2 = "SELECT * FROM bobot WHERE nama_kriteria = 'jumlah jiwa' ";
	$query_bobot2 =  mysqli_query($koneksi, $sql_bobot2);
	$baris_2 = mysqli_fetch_array($query_bobot2);
	$bobot_jiwa = $baris_2['nilai_bobot'];

	$sql_bobot3 = "SELECT * FROM bobot WHERE nama_kriteria = 'luas rumah' ";
	$query_bobot3 =  mysqli_query($koneksi, $sql_bobot3);
	$baris_3 = mysqli_fetch_array($query_bobot3);
	$bobot_rumah = $baris_3['nilai_bobot'];

	$sql_bobot4 = "SELECT * FROM bobot WHERE nama_kriteria = 'umur' ";
	$query_bobot4 =  mysqli_query($koneksi, $sql_bobot4);
	$baris_4 = mysqli_fetch_array($query_bobot4);
	$bobot_umur = $baris_4['nilai_bobot'];

	$sql = "SELECT * FROM `normalisasi`";
    $query = mysqli_query($koneksi, $sql);
    if ($query){
	    while($row = mysqli_fetch_array($query)){
	    	$id_h = $row['id'];
	    	$id_cp_h = $row['id_cp'];
	    	$penghasilan_h = $row['gaji']* $bobot_gaji;
	    	$jumlah_jiwa_h = $row['jiwa']* $bobot_jiwa;
	    	$luas_rumah_h = $row['rumah']* $bobot_rumah;
	    	$umur_h = $row['umur']* $bobot_umur;

	    	$hasil = round($penghasilan_h + $jumlah_jiwa_h + $luas_rumah_h + $umur_h, 5);
	    	
	    	$sql_h = "INSERT INTO `hasil` (`id`, `id_cp`, `value`) VALUES ('$id_h', '$id_cp_h', '$hasil')";
	    	$query2 = mysqli_query($koneksi, $sql_h);
	    }
	}



if( $query2 ) {
		echo "berhasil";
        
    }


?>
</h3>
<a href="normalisasi.php">kembali</a>
</html>