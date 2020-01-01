<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Sistem pendukung Keputusan</title>
  </head>
  <body>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
    <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        
<table class="table">
  <thead class="thead-dark">
   <tr>
     <td>
       <a class="main_btn" href='dataditerima.php'>kembali</a>
     </td>
    </tr>

  </thead>
  <tr class="bg-primary">
      <th scope="col" width="15%">Nama</th>
      <th scope="col" width="15%">Alamat</th>
      <th scope="col" width="15%">Umur</th>
      <th scope="col" width="15%">Penghasilan</th>
      <th scope="col" width="15%">Jumlah Jiwa</th>
      <th scope="col" width="15%">Luas Tanah</th>
    </tr>
     <?php
    include 'koneksi.php';

    if( !isset($_GET['id']) ){
    header('Location: dataditerima.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_penerima WHERE id=$id";
$query = mysqli_query($koneksi, $sql);

    $d = mysqli_fetch_array($query); //tanpa while karena data hanya satu baris
        ?>
        <tr>
            <td><?php echo $d['nama']; ?></td>
            <td><?php echo $d['alamat']; ?></td>
            <td><?php echo $d['umur']; ?></td>
            <td><?php echo $d['penghasilan']; ?></td>
            <td><?php echo $d['jumlah_jiwa']; ?></td>
            <td><?php echo $d['luas_rumah']; ?></td>
            
        </tr>
        
        <?php
    
      ?>   
  
</table>
 </body>
</html>