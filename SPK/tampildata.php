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
 
<!--  -->

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Sistem Pendukung Keputusan</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/popup/magnific-popup.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
           <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">

      <a class="navbar-brand" href="halamanutama.php"><img src="img/log.png" height="60px" width="65px" style="position: relative;"></a>
      <a class="navbar-brand" href="halamanutama.php">Sistem Pendukung Keputusan<br>Keluarga Penerima Bantuan</a> 
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
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
      <section class="home_banner_area">
        <div class="box_1622"><br>
            
          
      <div class="container">
      <a class="main_btn" href="tambahdatapenerima.php">Tambahkan penerima</a>
      <a class="main_btn" href="proses_spk.php">Proses data</a>
      <table class="table table-striped table-hover table-sm table-bordered">
      <thead class="table-primary">
  
        <tr>
         <th scope="col" width="5%">No</th>
         <th scope="col" width="10%">Nama</th>
         <th scope="col" width="10%">Alamat</th>
         <th scope="col" width="10%">Umur</th>
         <th scope="col" width="10%">Penghasilan</th>
         <th scope="col" width="10%">Jumlah Jiwa</th>
         <th scope="col" width="10%">Luas Rumah</th>
         <th scope="col" width="20%"></th>

       </tr>
      </thead>
      </div>

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
                <a class="white_bg_btn" href="editpenerima.php?id=<?php echo $d['id']; ?>">Edit</a>
                <a class="white_bg_btn" href="hapus.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Hapus Data?');">Hapus</a>
            </td>
        </tr>
        <?php
    }
      ?>   
  
      </table>
      </div>
      </section>
        <!--================End Home Banner Area =================-->
        
 
        
        <!--================Footer Area =================-->
        <footer class="page-footer font-small blue-grey lighten-5">

  <div style="background-color: #000000;">
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
        </footer>
        <!--================End Footer Area =================-->

 </body>
</html>