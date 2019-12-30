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
 
<table class="table">
  <thead class="thead-dark" style="outline-color: blue">
  <tr>
      <td>
      <form method="post" action="halamanutama.php">
        <button type="submit">Home</button>
    </form><br>
    </form> </td>
  </tr>
    <tr>
      <th scope="col" width="10%">No</th>
      <th scope="col" width="15%">Nama</th>
      <th scope="col" width="15%">Alamat</th>
      <th scope="col" width="15%">Value</th>
      <th scope="col" width="15%"></th>
      
    </tr>
  </thead>
    <?php
    include 'koneksi.php';
    $nomer = 1;
    $data = mysqli_query($koneksi,"SELECT calon_penerima.id, calon_penerima.nama, calon_penerima.alamat, hasil.value FROM hasil LEFT JOIN calon_penerima ON hasil.id_cp=calon_penerima.id ORDER BY VALUE DESC");

    while ($d = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td><?php echo $nomer++; ?></td>
            <td><?php echo $d['nama']; ?></td>
            <td><?php echo $d['alamat']; ?></td>
            <td><?php echo $d['value']; ?></td>
            <td>
                <a class="white_bg_btn" href='lihatprofil.php?id="<?php echo $d['id'] ?>"'>Lihat</a>
            </td>
            
        </tr>
        <?php
    }
      ?>   
</table>
 </body>
</html>