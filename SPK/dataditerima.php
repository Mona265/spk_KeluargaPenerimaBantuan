<!DOCTYPE html>
<html>
<head>
  <title>Lihat data diterima</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


            <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
 
  
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
          <a class="navbar-brand" href="halamanutama.php"><img src="img/log.png" height="60px" width="65px" style="position: relative;"></a>
      <a class="navbar-brand" href="halamanutama.php">Sistem Pendukung Keputusan <br>Keluarga Penerima Bantuan</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="halamanutama.php">Home</a></li> 
                <li class="nav-item"><a class="nav-link" href="about-us.html">About</a></li> 
            </div>
    </div>
  </nav>
  

<div class="container">
    <br>
    <h4>Daftar Penerima</h4>

    <hr>
    
    <table class="table table-striped table-hover table-sm table-bordered">
      <thead class="table-primary">
      
  </tr>
    <tr>
      <th scope="col" width="10%">No</th>
      <th scope="col" width="15%">Nama</th>
      <th scope="col" width="15%">Alamat</th>
      <th scope="col" width="15%">Value</th>
      <th scope="col" width="15%"></th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    include 'koneksi.php';
    $nomer = 1;
    $data = mysqli_query($koneksi,"select * from calon_penerima");
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
      </tbody>   
</table>

<!--  <footer class="footer_area">
          <div class="container">
            <div class="row footer_inner">
              <div class="col-lg-5 col-sm-6">
                <aside class="f_widget ab_widget">
                  <div class="f_title">
                    <h3>About Me</h3>
                  </div>
                  <p>Tugas Mata Kuliah Sistem Pendukung Keputusan</p>
                            <p>Kelompok 5</p>
                            <p>Anggiawan Prasetyo</p>
                            <p>Dendy Dharmawan</p>
                            <p>Musyaffa Nur Qisty</p>
                            <p>Ramona Matovani</p>
                  <p>Copyright 2019 Kelompok 5<i class="fa fa-heart-o" aria-hidden="true"></i></p>
                </aside>
              </div>
              <div class="col-lg-5 col-sm-6">
                <aside class="f_widget news_widget">
                  <div class="f_title">
                    <h3>Newsletter</h3>
                  </div>
                  <p>Stay updated with our latest trends</p>
                  <div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                  <div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>    
                                    </div>        
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
                </aside>
              </div>
              <div class="col-lg-2">
                <aside class="f_widget social_widget">
                  <div class="f_title">
                    <h3>Follow Me</h3>
                  </div>
                  <p>Let us be social</p>
                  <ul class="list">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                  </ul>
                </aside>
              </div>
            </div>
          </div>
        </footer> -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 </body>
</html>
