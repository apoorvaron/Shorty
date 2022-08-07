<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Shorty</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="./assets/img/logo.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="./assets/css/shorty.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Logis - v1.1.0
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
    img.vert-move {
        -webkit-animation: mover 1s infinite  alternate;
        animation: mover 1s infinite  alternate;
    }
    img.vert-move {
        -webkit-animation: mover 1s infinite  alternate;
        animation: mover 1s infinite  alternate;
    }
    @-webkit-keyframes mover {
        0% { transform: translateY(0); }
        100% { transform: translateY(-50px); }
    }
    @keyframes mover {
        0% { transform: translateY(0); }
        100% { transform: translateY(-50px); }
    }

  </style>
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
      <div
        class="container-fluid container-xl d-flex align-items-center justify-content-between"
      >
        <a href="./index.php" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <img
            src="https://rocketlink.io/wp-content/uploads/2020/01/undraw_share_link_qtxe.png"
            alt="logo"
            style="border-radius: 10px;"
          />
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
          <ul>
            <li>
              <a class="get-a-quote" href="./user/login.php">Login</a>
            </li>
            <li>
              <a class="get-a-quote" href="./user/register.php">Register</a>
            </li>
          </ul>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
      <div class="container">
        <div class="row gy-4 d-flex justify-content-between">
          <div
            class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center"
          >
            <h2 data-aos="fade-up" style="margin-top:15%">Shorty</h2>
            <p data-aos="fade-up" data-aos-delay="100">
            To help you grow, scale, and dominate through the power of link management. Our shortened links strive to help brands fulfil their greatest ambitions. Whether you’re sharing one link or millions, Shorty lets you personalize, share, and track your content links, while capturing data with every click.
            </p>

            <form
              action="#"
              class="form-search d-flex align-items-stretch mb-3"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <input type="text" class="form-control" placeholder="Your Link" />
              <button type="submit" class="btn btn-primary">Shorten</button>
            </form>

            <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">
              <div class="col-lg-3 col-6">
                <div class="stats-item text-center w-100 h-100">
                  <span
                    data-purecounter-start="0"
                    data-purecounter-end="232"
                    data-purecounter-duration="1"
                    class="purecounter"
                  ></span>
                  <p>Visitors</p>
                </div>
              </div>
              <!-- End Stats Item -->

              <div class="col-lg-3 col-6">
                <div class="stats-item text-center w-100 h-100">
                  <span
                    data-purecounter-start="0"
                    data-purecounter-end="521"
                    data-purecounter-duration="1"
                    class="purecounter"
                  ></span>
                  <p>Shorten Links</p>
                </div>
              </div>
              <!-- End Stats Item -->
            </div>
          </div>

          <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img
              src="assets/img/hero-img.svg"
              class="img-fluid mb-3 mb-lg-0 vert-move"
              style="margin-top:20%"
            />

          </div>
        </div>
      </div>
    </section>
    <!-- End Hero Section -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <center>
      <div class="container ">
        <div class="row gy-4" style="justify-content: center;">
          <div class="col-lg-5 col-md-12 footer-info " >
            <a href="index.html" class="logo d-flex align-items-center">
           
            </a>

            <div class="social-links d-flex mt-4" style="justify-content: center;">
              <a target="_blank"  href="https://github.com/apoorvaron" class="github"><i class="bi bi-github"></i></a>
              <a target="_blank"  href="https://www.linkedin.com/in/apoorv-aron-742882212/" class="linkedin"><i class="bi bi-linkedin"></i></a>
              <a target="_blank"  href="https://twitter.com/AronApoorv" class="twitter"><i class="bi bi-twitter"></i></a>
            </div>
          </div>
        </div>
      </div>
      </center>

      <div class="container mt-4">
        <div class="copyright">
          &copy; Copyright <strong><span> <a target="_blank" href="https://github.com/apoorvaron/tiny">Shorty</a> </span></strong
          >. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a  target="_blank" href="https://github.com/apoorvaron">Apoorv Aron</a>
        </div>
      </div>
    </footer>
    <!-- End Footer -->
    <!-- End Footer -->

    <a
      href="#"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/shorty.js"></script>
  </body>
</html>
