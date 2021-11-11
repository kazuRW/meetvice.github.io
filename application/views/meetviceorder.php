<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Meetvice order</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url().'assets/assets/img/meetvice-icon.png'?>" rel="icon">
  <link href="<?php echo base_url().'assets/assets/img/meetvice-icon.png'?>" rel="meetvice-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url().'assets/assets/vendor/aos/aos.css" rel="stylesheet'?>">
  <link href="<?php echo base_url().'assets/assets/vendor/meetvice/css/meetvice.min.css" rel="stylesheet'?>">
  <link href="<?php echo base_url().'assets/assets/vendor/meetvice-icons/meetvice-icons.css" rel="stylesheet'?>">
  <link href="<?php echo base_url().'assets/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet'?>">
  <link href="<?php echo base_url().'assets/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet'?>">
  <link href="<?php echo base_url().'assets/assets/vendor/remixicon/remixicon.css" rel="stylesheet'?>">
  <link href="<?php echo base_url().'assets/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet'?>">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url().'assets/assets/css/style.css'?>" rel="stylesheet">

</head>

<body>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

              <!-- Image and text -->
      <nav class="navbar navbar-dark bg-dark mt-4 mb-4">
        <a class="navbar-brand" href="home">
          <img src="<?php echo base_url().'assets/assets/img/meetvice-icon.png'?>" width="30" height="30" class="d-inline-block align-top" alt="">
          Meetvice
        </a>
      </nav>
        <ol>
          <li><a href="meetvice.html">Layar utama</a></li>
          <li>Meetvice Order</li>
        </ol>
        <h2>Meetvice Order Pesanan</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="halaman-order">
      <div class="container">
        <section id="contact" class="contact">
          <div class="container" data-aos="fade-up">
    
            <div class="section-title">
              <h2>Isi Form Order</h2>
              <p>Diharapkan untuk selalu aktif menyalakan handphone bila di hubungi sewaktu waktu</p>
            </div>
    
            <div class="row">

              <div class="center">
              <form name="meetvice-contact-form">
                  <div class="center">
                    <div class="form-group col-md-6">
                      <label for="name">Nama kamu</label>
                      <input type="text" name="nama" class="form-control" id="name" required placeholder="Contoh : Rama">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="name">Email / Nomor kamu</label>
                      <input type="email" class="form-control" name="email" id="email" required placeholder="duniacahaya@gmail.com / +628123456789">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="name">Barang yang ingin di servis</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="subjek" id="subject" required type ="text">
                      <option>Laptop</option>
                      <option>Macbook</option>
                      <option>Android</option>
                      <option>Iphone</option>
                    </select>
                    <div class="form-group">
                      <label for="exampleFormControlFile1">Gambar barang yang ingin di servis (untuk bukti kami): </label>
                      <br/>
                      <br/>
                      <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                  <div class="form-group"><div class="form-group">
                    <br/>
                    <textarea class="form-control" name="pesan" rows="10" required placeholder="Contoh : Selesai hari sabtu ya"></textarea>
                  </div>
                  <div class="text-center d-none"><input type="submit" onclick="javascript:eraseText();"></div>
                  <script type="text/javascript">
                    function showDiv(toggle){
                    document.getElementById(toggle).style.display = 'block';
                    }
                    </script>
                     
                    <input type="submit" name="answer" onclick="showDiv('toggle')" value="Kirim Pesan"/>
                     
                    <div id="toggle" style="display:none">Pesan kamu telah berhasil kami terima</div>
                </form>
              </div>
    
            </div>
    
          </div>
        </section>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Meetvice</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://Meetvice.com/">Meetvice</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url().'assets/assets/vendor/aos/aos.js'?>"></script>
  <script src="<?php echo base_url().'assets/assets/vendor/meetvice/js/meetvice.bundle.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/assets/vendor/glightbox/js/glightbox.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/assets/vendor/isotope-layout/isotope.pkgd.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/assets/vendor/php-email-form/validate.js'?>"></script>
  <script src="<?php echo base_url().'assets/assets/vendor/swiper/swiper-bundle.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/assets/vendor/waypoints/noframework.waypoints.js'?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url().'assets/assets/js/main.js'?>"></script>

  <script>
    const scriptURL = 'https://script.google.com/macros/s/AKfycbwdd36c1Cb-_TOctbOuB1yB-1k_0a1G_VhkKSnZaON6SlqtF6xpCE66xpg6FMiqaJBG/exec'
    const form = document.forms["meetvice-contact-form"]
  
    form.addEventListener('submit', e => {
      e.preventDefault()
      fetch(scriptURL, { method: 'POST', body: new FormData(form)})
        .then(response => console.log('Success!', response))
        .catch(error => console.error('Error!', error.message))
        form.reset()
    })
  </script>

</body>

</html>