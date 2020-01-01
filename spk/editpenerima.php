
  <!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Penerima</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
</head>
<body>

<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "select * from calon_penerima where id='$id'");
while ($d = mysqli_fetch_array($data)) {
  ?> 

<div class="container">
  <h2>Edit Data Penerima</h2>
  <form method="post" action="updatepenerima.php">
    <div class="form-group">
      <label for="nama">Nama :</label>
      <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
      <input type="text" class="form-control" placeholder="Masukan nama" name="nama" value="<?php echo $d['nama']; ?>">
    </div>
    <div class="form-group">
      <label for="alamat">Alamat :</label>
      <input type="text" class="form-control"  placeholder="Masukan alamat" name="alamat" value="<?php echo $d['alamat']; ?>">
    </div>
    <div class="form-group">
      <label for="umur">Umur :</label>
      <input type="number" class="form-control"  placeholder="Masukan umur" name="umur" value="<?php echo $d['umur']; ?>">
    </div>
    <div class="form-group">
      <label for="penghasilan">Penghasilan :</label>
      <input type="number" class="form-control"  placeholder="Masukan penghasilan" name="penghasilan" value="<?php echo $d['penghasilan']; ?>">
    </div>
    <div class="form-group">
      <label for="jumlahjiwa">Jumlah Jiwa :</label>
      <input type="number" class="form-control"  placeholder="Masukan jumlah jiwa" name="jumlah_jiwa" value="<?php echo $d['jumlah_jiwa']; ?>">
    </div>
    <div class="form-group">
      <label for="luasrumah">Luas Rumah :</label>
      <input type="number" class="form-control"  placeholder="Masukan luas rumah" name="luas_rumah" value="<?php echo $d['luas_rumah']; ?>">
    </div>
    
   
  <button type="submit"onclick="return confirm('Simpan Data?');">Simpan</button>
      <form action="tampildata.php">
         <button type="submit"onclick="return confirm('Yakin batal?');">Batal</button>
      </form>
  </form>
</div>

</body>
</html>
<?php
}
?>