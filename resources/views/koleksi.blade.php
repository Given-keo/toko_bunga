<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Koleksi - Toko Bunga Toko Bunga</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

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

<body class="portfolio-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <h1 class="sitename">Toko Bunga</h1>
      </a>

      <x-navbar/>

      <a class="btn-getstarted" href="about.html">Pesan Sekarang</a>

    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Koleksi Bunga</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Beranda</a></li>
            <li class="current">Koleksi</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

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
          <!-- End Portfolio Filters -->

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