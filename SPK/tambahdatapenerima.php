<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tambah Penerima</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Tambah Data Penerima</h2>
  <form method="post" action="insertpenerima.php">
    <div class="form-group">
      <label for="nim">Nama :</label>
      <input type="text" class="form-control" placeholder="Masukan nama" name="nama">
    </div>
    <div class="form-group">
      <label for="nama">Alamat :</label>
      <input type="text" class="form-control"  placeholder="Masukan alamat" name="alamat">
    </div>
    <div class="form-group">
      <label for="jurusan">Umur :</label>
      <input type="text" class="form-control"  placeholder="Masukan umur" name="umur">
    </div>
    <div class="form-group">
      <label for="jurusan">Penghasilan :</label>
      <input type="text" class="form-control"  placeholder="Masukan penghasilan" name="penghasilan">
    </div>
    <div class="form-group">
      <label for="jurusan">Jumlah Jiwa :</label>
      <input type="text" class="form-control"  placeholder="Masukan jumlah jiwa" name="jumlah_jiwa">
    </div>
    <div class="form-group">
      <label for="jurusan">Luas Tanah :</label>
      <input type="text" class="form-control"  placeholder="Masukan luas tanah" name="luas_rumah">
    </div>
    
   
  <button type="submit">Tambah</button>
  </form>
</div>

</body>
</html>
