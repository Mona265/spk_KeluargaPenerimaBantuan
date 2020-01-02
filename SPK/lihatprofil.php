
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.css">

<title>Sistem Pendukung Keputusan</title>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
    <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">

<a class="main_btn" href='dataditerima.php'>kembali</a>


  <div class="container">
    
      <div class="container-fluid">
     <hr>

      <div class="card card-1 col-md-6 text-md-center" id="card1">        
        <table class="table table-hover">
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

  <tbody>
    <tr>
      <td><span class="bold">Nama</span></td>
      <td><?php echo $d['nama']; ?></td>
    </tr>
    <tr>
      <td><span class="bold">Alamat</span></td>
      <td><?php echo $d['alamat']; ?></td>
    </tr>
    <tr>
      <td><span class="bold">Umur</span></td>
      <td><?php echo $d['umur']; ?></td>
    </tr>
    <tr>
      <td><span class="bold">Penghasilan</span></td>
      <td><?php echo $d['penghasilan']; ?></td>
    </tr>
    <tr>
      <td><span class="bold">Jumlah Jiwa</span></td>
      <td><?php echo $d['jumlah_jiwa']; ?></td>
    </tr>
    <tr>
      <td><span class="bold">Luas Tanah</span></td>
      <td><?php echo $d['luas_rumah']; ?></td>
    </tr>

  </tbody>
        </table>
      </div>

      </div>
    
  </div>  <!-- container -->