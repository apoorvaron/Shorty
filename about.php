<?php
include('./env.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <title>Shorty</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="./assets/img/logo.webp" rel="icon" />
    <link href="./assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

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
    <link rel="stylesheet" href="./assets/css/about.css">


    <!-- =======================================================
* Template Name: Logis
* Updated: May 30 2023 with Bootstrap v5.3.0
* Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
======================================================== -->
</head>

<body>

    <!-- importing the HEADER FROM HEADER PHP FILE -->
    <?php include './includes/header.php'; ?>


    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-12 text-center">
                            <h2>ABOUT</h2>

                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="./" class="homebtn">Home</a></li>
                        <li>/</li>
                        <li>ABOUT</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Breadcrumbs -->


        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">
                    <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
                        <img src="./assets/img/guest.webp" class="img-fluid" alt="">
                        <!-- <a href="https://github.com/Mrprayag077/Shorty/blob/main/assets/images/about.png?raw=true"
                            class="glightbox play-btn"></a> -->
                    </div>
                    <div class="col-lg-6 content order-last order-lg-first">
                        <h3>About</h3>
                        <p class="about">
                            To help you grow, scale, and dominate through the power of link management.Whether you’re
                            sharing one link ,lets you personalize, track.
                        </p>
                        <ul>

                            <li data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-fullscreen-exit"></i>
                                <div>
                                    <h5>
                                        Powerful Link Management
                                    </h5>
                                    <p>
                                        customizable tools for organizing and sharing content links
                                        efficiently.
                                    </p>
                                </div>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-broadcast"></i>
                                <div>
                                    <h5>
                                        Real-time Performance Tracking

                                    </h5>
                                    <p>
                                        Gain insights on click rates and user engagement to optimize
                                        link strategies.

                                    </p>
                                </div>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="100">
                                <i class="bi bi-diagram-3"></i>
                                <div>
                                    <h5>
                                        Enhance Online Presence

                                    </h5>
                                    <p>
                                        empowers marketers, content creators to dominate their
                                        digital presence.
                                    </p>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Stats Counter Section ======= -->
        <section id="stats-counter" class="stats-counter pt-0">
            <div class="container" data-aos="fade-up">

                <!-- 
                <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="col-lg-3 col-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Total Visitors</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Shorten Links</p>
                        </div>
                    </div>


                    <div class="col-lg-3 col-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Total Clicks</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Registered Users</p>
                        </div>
                    </div>
            </div>
            </div> -->


            </div>
            <!-- End Stats Counter Section -->



            <!-- ======= Features Section ======= -->
            <section id="features" class="features">
                <div class="container">

                    <div class="section-header">
                        <!-- <span>Our Services</span> -->
                        <h2>WHAT WE PROVIDE</h2>

                    </div>
                    <div class="wrapper">
                        <div class="title">an orange and white cat yawns in the leaves</div>
                        <div class="img-wrapper">

                            <li class="Frame"><a href="#"><img
                                        src="http://farm8.staticflickr.com/7129/7617079532_0fddbaa8cd_z.jpg"
                                        alt="Hanafubuki - Cherry blossom blizzard" /></a></li>


                            <!-- <img src="https://images.unsplash.com/photo-1558503198-788e3547684d?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=987&amp;q=80"
                                alt="" /> -->


                        </div>
                    </div>


                    <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

                        <div class="col-md-5" class="img-hover3">
                            <a href="#" class="img-hover__link">

                                <li class="Frame"><a href="#">
                                        <img src="https://leverageedublog.s3.ap-south-1.amazonaws.com/blog/wp-content/uploads/2020/03/13211326/Marketing-Management.jpg"
                                            class="img-fluid" id="img-hover__img" alt="KK1">
                                    </a></li>
                                <!-- 
                                <img src="https://leverageedublog.s3.ap-south-1.amazonaws.com/blog/wp-content/uploads/2020/03/13211326/Marketing-Management.jpg"
                                    class="img-fluid" id="img-hover__img" alt="KK1"> -->

                            </a>
                        </div>
                        <div class="col-md-7">
                            <h3>
                                Efficient Link Management
                            </h3>
                            <p class="fst-italic">
                                Powerful link management tools for creating, customizing, and organizing content links.

                            </p>
                            <ul>
                                <li><i class="bi bi-check"></i>
                                    User-friendly interface for easy sharing and tracking, effective link management.

                                </li>
                                <li><i class="bi bi-check"></i>
                                    Measure the effectiveness of your links and improve your marketing efforts,
                                    strategies.

                                </li>
                                <li><i class="bi bi-check"></i>
                                    Enhance your online presence and drive engagement with link management
                                    capabilities.

                                </li>
                                <li><i class="bi bi-check"></i>
                                    Real-time performance tracking to gain insights into click-through rates & user
                                    engagement.
                                </li>
                            </ul>
                        </div>
                    </div><!-- Features Item -->

                    <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                        <div class="col-md-5 order-1 order-md-2" class="img-hover__img">
                            <a href="#" class="img-hover__link">

                                <li class="Frame"><a href="#">
                                        <img src="https://images.pexels.com/photos/669612/pexels-photo-669612.jpeg"
                                            class="img-fluid" id="img-hover__img" alt="">
                                    </a></li>

                                <!-- <img src="https://images.pexels.com/photos/669612/pexels-photo-669612.jpeg"
                                    class="img-fluid" id="img-hover__img" alt=""> -->
                            </a>
                        </div>
                        <div class="col-md-7 order-2 order-md-1">
                            <h3>
                                Track and Analyze Performance:

                            </h3>
                            <p class="fst-italic">
                                Real-time tracking of shortened links' performance.
                            </p>
                            <ul>

                                <li><i class="bi bi-check"></i>
                                    <!-- Leverage data analytics to optimize link strategies and make informed
                                    choices. -->


                                    Leverage data analytics to optimize link strategies and make informed choices.


                                    </i>
                                <li><i class="bi bi-check"></i>
                                    <!-- Data-driven decision-making for optimizing link strategies. -->
                                    <!-- Valuable insights into click-through rates, geographic data, and user
                                    engagement. -->


                                    Gain valuable insights into click-through rates, geographic data, and user
                                    engagement.

                                    </i>

                                <li><i class="bi bi-check"></i>
                                    Accurately track key performance indicators to enhance marketing campaign
                                    success.

                                </li>
                                <li><i class="bi bi-check"></i>
                                    Measure the effectiveness of your links and improve your marketing efforts.


                                    </i>



                            </ul>
                        </div>
                    </div><!-- Features Item -->

                    <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                        <div class="col-md-5" class="img-hover__img">
                            <a href="#" class="img-hover__link">

                                <li class="Frame"><a href="#">
                                        <img src="https://www.searchfit.com/wp-content/uploads/2017/10/10-effective-ways-online-presence.png"
                                            class="img-fluid img-frame" id="img-hover__img" alt="">
                                    </a></li>

                                <!-- <img src="https://brand24.com/blog/wp-content/uploads/2021/05/How-to-increase-Instagram-reach.png"
                                    class="img-fluid" style="width:100%;heigth:100%;" id="img-hover__img" alt=""> -->
                            </a>
                        </div>
                        <div class="col-md-7">
                            <h3>
                                Boost Your Online Presence:
                            </h3>
                            <p class="fst-italic">
                                Shorty's link management tools empower marketers, content creators, and businesses to
                                enhance their online presence.

                            </p>
                            <ul>
                                <li><i class="bi bi-check"></i>
                                    Drive engagement with personalized and trackable content links.

                                </li>
                                <li><i class="bi bi-check"></i>
                                    Improve brand visibility and reach a wider audience with Shorty's powerful link
                                    management capabilities.

                                </li>
                                <li><i class="bi bi-check"></i>
                                    Optimize your online strategies and maximize the impact of your digital presence
                                    with every click.
                                </li>
                            </ul>
                        </div>
                    </div><!-- Features Item -->



                </div>
            </section><!-- End Features Section -->


        </section>
    </main><!-- End #main -->




    <!-- importing the FOOTER CODE FROM FOOTER PHP FILE -->
    <?php include './includes/footer.php'; ?>


    <!-- importing the CHATBOX && SCROLL BUTTON FROM COMMON PHP FILE -->
    <?php include './includes/chatbotsidebar.php'; ?>

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
    <script src="js/jquery-3.3.1.min.js"></script>

</body>

</html>