<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Sistem Informasi Perpustakaan</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url(); ?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url(); ?>assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

<style>
  .prev, .next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
}
.prev {
  left: 0;
}

</style>
  <!-- =======================================================
    Theme Name: Bell
    Theme URL: https://bootstrapmade.com/bell-free-bootstrap-4-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- Page Content
    ================================================== -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">     
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('welcome/admin'); ?>" style="color: white"><img style="width: 20px" src="<?php echo base_url()."assets/img/login-icon@3x.png";?>"> Admin</a>
          </li>
          </ul>
        </div>
      </div>
    </nav>
  <!-- Hero -->

  <section class="hero">
    <div class="container text-center">
      

      <div class="col-md-12">
        <h1>Perpustakaan Teknik UNHAS</h1>
        <br>

        <!-- <p class="tagline">
          Cari Buku</p> -->
          <form action="<?php echo base_url('/welcome/cari_u')?>" action="GET">
        <div class="search-box-wrapper">
          <input type="text" class="search-box-input" name="cari" placeholder="Cari judul/pengarang/penerbit/kategori...">
          <input class="btn btn-primary search-box-button" type="submit" value="Cari">
          
        </div>

      </div>
    </div>

    <div class="limiter">
    <div class="container-table100">
      <div class="wrap-table100">
          <div class="table">

            <div class="row header">
              <div class="cell">Judul Buku</div>
              <div class="cell">Pengarang</div>
              <div class="cell">Penerbit</div>
              <div class="cell">Kategori</div>
              <div class="cell">Rak</div>
            </div>

            <?php foreach ($cari as $row) {?>
            <div class="row">
              <div class="cell" data-title="Judul Buku"><?php echo $row->judul;?></div>
              <div class="cell" data-title="Pengarang"><?php echo $row->pengarang;?></div>
              <div class="cell" data-title="Penerbit"><?php echo $row->penerbit;?></div>
              <div class="cell" data-title="Kategori"><?php echo $row->kategori;?></div>
              <div class="cell" data-title="Rak"><?php echo $row->rak;?></div>
            </div>
            
          <?php } ?>
            

          </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="mySlides">
      <div class="numbertext">1 / 2</div>
      <img src="<?php echo base_url()."assets/img/denah_1.png"; ?>">
    </div>
    <div class="mySlides">
      <div class="numbertext">2 / 2</div>
      <img src="<?php echo base_url()."assets/img/denah_2.png"; ?>">
    </div>
     <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>
  </div>
  
  </section>

  

  
  <a class="scrolltop" href="#"><span class="fa fa-angle-up"></span></a>


  <!-- Required JavaScript Libraries -->
  <script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/tether/js/tether.min.js"></script>
  <script src="lib/stellar/stellar.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/easing/easing.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/lockfixed/lockfixed.min.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>

  <script src="contactform/contactform.js"></script>

</body>
</html>
