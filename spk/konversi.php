<html>
<?php

include("koneksi.php");

    $sql = "SELECT * FROM `calon_penerima`";
    $query = mysqli_query($koneksi, $sql);

    if($query){
    	while ($row = mysqli_fetch_array($query)) {
	    	$id_cp_k = $row['id'];
	    	$jumlah_jiwa_k = $row['jumlah_jiwa'];
	    	$umur_k = $row['umur'];
    		$p = $row['penghasilan'];
    		$lr = $row['luas_rumah'];

    		if($p< 500000){	$penghasilan_k = 1;
    		}
    		elseif ($p< 1000000) {	$penghasilan_k = 2;
    		}
    		elseif ($p< 1500000) {	$penghasilan_k = 3;
    		}
    		elseif ($p<=2000000) {	$penghasilan_k = 4;
    		}
    		elseif ($p> 2000000) {	$penghasilan_k = 0;
    		}

    		if($lr< 30){	$luas_rumah_k = 1;
    		}
    		elseif ($lr< 60) {	$luas_rumah_k = 2;
    		}
    		elseif ($lr< 90) {	$luas_rumah_k = 3;
    		}
    		elseif ($lr<=120) {	$luas_rumah_k = 4;
    		}
    		elseif ($lr> 120) {	$luas_rumah_k = 0;
    		}

    		$sql_k = "INSERT INTO `konversi` (`id`, `id_cp`, `penghasilan`, `jumlah_jiwa`, `luas_rumah`, `umur`) VALUES ('$id_cp_k', '$id_cp_k', '$penghasilan_k', '$jumlah_jiwa_k', '$luas_rumah_k', '$umur_k')";

    		$query1 = mysqli_query($koneksi, $sql_k);
    	}
    }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////PERHITUNGAN NORMALISASI

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

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////PROSES HASIL

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

header("location:tampildata.php")
?>

<a href="tampildata.php">kembali</a>



</html>