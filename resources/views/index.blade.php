<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Toko Bunga - Toko Bunga</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  {{-- <link href="{{ asset("template") }}/assets/img/favicon.png" rel="icon"> --}}
  <link href="{{ asset("template") }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset("template") }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset("template") }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset("template") }}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset("template") }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset("template") }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset("template") }}/assets/css/main.css" rel="stylesheet">
  @vite("resources/js/app.js")
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="{{ asset("template") }}/assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Toko Bunga</h1>
      </a>

      <x-navbar />

      <a class="btn-getstarted" href="about.html">Pesan Sekarang</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        @foreach($sliders as $index => $slider)
        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
          <img src="{{ asset('storage/' . $slider->image) }}" alt="{{ $slider->title }}">
          
          <div class="carousel-container">
            <h2 align="center">{{ $slider->title }}</h2>
            <p align="center">{{ $slider->description }}</p>
          </div>
        </div>
        @endforeach

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>
      </div>
    </section>
    <!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Tentang</h2>
        <p>Kisah Toko Bunga<br></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p>
              Toko Bunga hadir sejak 2015 dengan misi menyebarkan kebahagiaan melalui keindahan bunga segar. Kami percaya setiap rangkaian bunga adalah karya seni.
            </p>
            <ul>
              <li><i class="bi bi-check2-circle"></i> <span>Bunga segar langsung dari petani pilihan.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Florist berpengalaman dengan desain eksklusif.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Pengiriman cepat dan gratis kartu ucapan.</span></li>
            </ul>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <p>Kami menyediakan berbagai macam bunga: mawar, tulip, lily, krisan, dan bunga musiman lainnya. Setiap pesanan dirangkai dengan hati-hati dan dikirim dalam kondisi prima. Layanan kami melayani perorangan hingga event besar.</p>
            <a href="about.html" class="read-more"><span>Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-briefcase icon flex-shrink-0"></i>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Buket Ulang Tahun</a></h4>
                <p class="description">Rangkaian bunga ceria dengan warna-warna cerah, cocok untuk merayakan hari spesial. Tersedia tambahan balon dan boneka.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-card-checklist icon flex-shrink-0"></i>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Buket Pernikahan</a></h4>
                <p class="description">Desain elegan untuk pengantin, dengan bunga-bunga segar pilihan. Bisa disesuaikan dengan tema pernikahan Anda.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-bar-chart icon flex-shrink-0"></i>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Bunga Duka Cita</a></h4>
                <p class="description">Ungkapan simpati yang tulus melalui rangkaian bunga putih yang anggun dan khidmat. Antar 24 jam.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-binoculars icon flex-shrink-0"></i>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Langganan Bunga</a></h4>
                <p class="description">Dapatkan bunga segar setiap minggu atau bulan di rumah atau kantor Anda. Harga hemat untuk pemesanan rutin.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-brightness-high icon flex-shrink-0"></i>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Dekorasi Event</a></h4>
                <p class="description">Layanan dekorasi bunga untuk pesta, grand opening, anniversary, dan acara perusahaan lainnya.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-calendar4-week icon flex-shrink-0"></i>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Workshop Merangkai Bunga</a></h4>
                <p class="description">Belajar merangkai bunga langsung dari florist profesional. Cocok untuk hobi atau bisnis. Sertifikat disediakan.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Koleksi</h2>
        <p>Inspirasi rangkaian terbaik kami</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters">
            <li data-filter="*" class="filter-active">Semua</li>
            @foreach($categories as $category)
              <li data-filter=".filter-{{ $category->slug }}">
                {{ $category->name }}
              </li>
            @endforeach
          </ul>

          <div class="row gy-4 isotope-container">
            @foreach($products as $product)
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item 
                  filter-{{ $product->category->slug }}">

                <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid">

                <div class="portfolio-info">
                  <h4>{{ $product->name }}</h4>
                  <p>{{ $product->description }}</p>
                </div>

              </div>
            @endforeach
          </div>
          <!-- End Portfolio Container -->

        </div>

      </div>

    </section>
    <!-- /Portfolio Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Toko Bunga</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Jl. Melati No. 12</p>
            <p>Jakarta Selatan, 12180</p>
            <p class="mt-3"><strong>Telepon:</strong> <span>+62 812 3456 7890</span></p>
            <p><strong>Email:</strong> <span>hello@Toko Bunga.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Tautan</h4>
          <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Tentang Kami</a></li>
            <li><a href="#">Layanan</a></li>
            <li><a href="#">Syarat & Ketentuan</a></li>
            <li><a href="#">Kebijakan Privasi</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Layanan Kami</h4>
          <ul>
            <li><a href="#">Buket Bunga</a></li>
            <li><a href="#">Box Bunga</a></li>
            <li><a href="#">Standing Flower</a></li>
            <li><a href="#">Dekorasi</a></li>
            <li><a href="#">Workshop</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Newsletter</h4>
          <p>Dapatkan promo menarik dan inspirasi rangkaian bunga terbaru langsung ke email Anda!</p>
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Berlangganan"></div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Terima kasih! Pendaftaran Anda telah dikirim.</div>
          </form>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Hak Cipta</span> <strong class="px-1 sitename">Toko Bunga</strong> <span>Semua Hak Dilindungi</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href=“https://themewagon.com>ThemeWagon
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset("template") }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset("template") }}/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{ asset("template") }}/assets/vendor/aos/aos.js"></script>
  <script src="{{ asset("template") }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset("template") }}/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="{{ asset("template") }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset("template") }}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{ asset("template") }}/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="{{ asset("template") }}/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="{{ asset("template") }}/assets/js/main.js"></script>

</body>

</html>