<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Sistem Pendukung Keputusan</title>
  </head>
  <body>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
<table class="table">
  <thead class="thead-dark" style="outline-color: blue">
  <tr>
      <td>
      <form method="post" action="index.php">
        <button type="submit" >Home</button>
    </form><br><form method="post" action="tambahdatapenerima.php">
        <button type="submit" >Tambah Data Penerima</button><br><br><form method="post" action="prosesdata.php">
        <button type="submit" >Proses Data</button>
    </form> </td>
  </tr>
    <tr>
      <th scope="col" width="10%">No</th>
      <th scope="col" width="15%">Nama</th>
      <th scope="col" width="15%">Alamat</th>
      <th scope="col" width="15%">Umur</th>
      <th scope="col" width="15%">Penghasilan</th>
      <th scope="col" width="15%">Jumlah Jiwa</th>
      <th scope="col" width="15%">Luas Tanah</th>


    </tr>
  </thead>
  
     <?php
    include 'koneksi.php';
    $nomer = 1;
    $data = mysqli_query($koneksi,"select * from calon_penerima");
    while ($d = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td><?php echo $nomer++; ?></td>
            <td><?php echo $d['nama']; ?></td>
            <td><?php echo $d['alamat']; ?></td>
            <td><?php echo $d['umur']; ?></td>
            <td><?php echo $d['penghasilan']; ?></td>
            <td><?php echo $d['jumlah_jiwa']; ?></td>
            <td><?php echo $d['luas_rumah']; ?></td>
            
            <td>
                <a href="editpengunjung.php?id=<?php echo $d['id']; ?>">EDIT</a>
                <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
            </td>
        </tr>
        <?php
    }
      ?>   
  
</table>
 </body>
</html>