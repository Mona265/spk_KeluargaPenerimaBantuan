<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <title>Tambah Penerima</title>
  
</head>
<body>

<div class="container">

 -->

 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- table -->
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


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
 

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
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
            <div class="main_menu">
              <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="banner_content text-center">
              <h3>Sistem Pendukung Keputusan Keluarga Penerima Bantuan</h3>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="halamanutama.php">Home</a></li> 
                <li class="nav-item"><a class="nav-link" href="about-us.html">About</a></li> 
            </div> 
          </div>
              </nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
            <div class="box_1622"><br>
              <h2>Tambah Data Penerima</h2>
  <form>
    <div class="form-group">
      <label for="nama">Nama :</label>
      <input type="text" class="form-control" placeholder="Masukan nama" name="nama">
    </div>
    <div class="form-group">
      <label for="alamat">Alamat :</label>
      <input type="text" class="form-control"  placeholder="Masukan alamat" name="alamat">
    </div>
    <div class="form-group">
      <label for="umur">Umur :</label>
      <input type="number" class="form-control"  placeholder="Masukan umur" name="umur">
    </div>
    <div class="form-group">
      <label for="penghasilan">Penghasilan :</label>
      <input type="number" class="form-control"  placeholder="Masukan penghasilan" name="penghasilan">
    </div>
    <div class="form-group">
      <label for="jumlahjiwa">Jumlah Jiwa :</label>
      <input type="number" class="form-control"  placeholder="Masukan jumlah jiwa" name="jumlah_jiwa">
    </div>
    <div class="form-group">
      <label for="luasrumah">Luas Rumah :</label>
      <input type="number" class="form-control"  placeholder="Masukan luas rumah" name="luas_rumah">
    </div>
    
   
<a class="main_btn" href="insertpenerima.php" onclick="return confirm('Simpan data?');">Simpan</a>
  </form>
</div>



</div>
</section>
        <!--================End Home Banner Area =================-->
        
 
        
        <!--================Footer Area =================-->
        <footer class="footer_area">
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
                  <p>
Copyright 2019 Kelompok 5<i class="fa fa-heart-o" aria-hidden="true"></i>

</p>
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