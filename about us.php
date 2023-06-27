<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

<!-- importing the SEO FROM SEO.PHP FILE (mrprayag) -->
<?php include './includes/seo.php'; ?>

    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="./assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="./assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" />
    <link href="./assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="./assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link href="./assets/vendor/aos/aos.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="./assets/css/shorty.css" rel="stylesheet" />



    <!-- =======================================================
  * Template Name: Logis
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <?php include './includes/header.php'; ?>


    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs"
            style=" background: #010b1a;background-image: url('../assets/images/hero-bg.png'); background-repeat: no-repeat; background-size: cover;">
            <div class="page-header d-flex align-items-center">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-12 text-center">
                            <h2>FAQ</h2>

                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="./">Home</a></li>
                        <li>FAQ</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Breadcrumbs -->

        <!-- ======= About Us ======= -->
        <section id="About us" class="About us">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-10">

                        <div class="accordion accordion-flush" id="faqlist">

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-1">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Know about us
                                    </button>
                                </h3>
                                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <p>Apoorv Aron, A full stack developer, the maker of this website has been working on this project to make it possible and finally 
                                        it came true. </p>
                                        <br>
                                        <p>Welcome to Shorty, your one-stop shop for shortening long URLs. We make it easy to create and share short, 
                                        memorable links that will help you boost your traffic and engagement.
                                        Unlike other URL shorteners, we offer a number of features that make us the best choice for businesses and 
                                        individuals alike. </p>
                                        <br>

                                        <p>We're always working to improve our product and add new features, 
                                        so you can be sure you're always using the best URL shortener available.           
                                         </p>

                                    </div>
                                </div>
                        
                            </div>    
                        </div>    
                    </div>    
                </div>
            </div>
        </section><!-- End About Us -->
    </main><!-- End #main -->  
</body>

<!-- importing the FOOTER CODE FROM FOOTER PHP FILE -->
<?php include './includes/footer.php'; ?>


<!-- importing the CHATBOX && SCROLL BUTTON FROM COMMON PHP FILE -->
<?php include './includes/chatbotsidebar.php'; ?>



<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="./assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="./assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="./assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="./assets/vendor/aos/aos.js"></script>
<script src="./assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="./assets/js/shorty.js"></script>
<script src="./js/jquery-3.3.1.min.js"></script>

</body>

</html>


