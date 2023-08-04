<?php
include('./env.php');

?>
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
                                                <li>/</li>
                        <li>FAQ</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Breadcrumbs -->


        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-10">
                        <div class="accordion accordion-flush" id="faqlist">
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->

    </main><!-- End #main -->


    <!-- Script for reusable FAQs -->
    <script>

        // Add faq question and answers with id in this array to render it on screen

        const faqContent = [ 
          {
            id: 1,
            question: "How does the link shortening process work?",
            answer: ` The link shortening process takes a long URL and generates a shorter, more compact URL that redirects to the original long URL. This allows for easier sharing and tracking of links.`
          },
          {
            id: 2,
            question: " Do I need to create an account to use the link shortening service?",
            answer: ` No, you can use the link shortening service without creating an account. However, creating an account provides additional benefits such as link management, editing options, and personalized features.`
          },
          {
            id: 3,
            question: " What are the steps to shorten a link?",
            answer: ` To shorten a link, follow these steps:
            <ol>
               <li>Go to the homepage of the link shortening website.</li>
               <li>Locate the input field provided, where you can enter the original long URL.</li>
               <li>Enter the long URL into the input field.</li>
               <li>Click on the "Shorten" button or a similar button to initiate the link shortening process.</li>
               <li>After a brief moment, a shortened link will be generated.</li>
               <li>The shortened link will be displayed below, and you can simply copy it to your clipboard.</li>
             <li>The shortened link is now ready to be shared or used as needed.</li>
            </ol>`
          },
          {
            id: 4,
            question: " Can I edit or update my profile details?",
            answer: ` Yes, once you have created an account, you can access your profile settings and make changes to your personal information, such as your name, profile picture, and contact details.`
          },
          {
            id: 5,
            question: "How do I manage my stored links?",
            answer: `  After logging into your account, you will have access to a link management dashboard. From there, you can view, edit, delete, or organize your stored links, making it easy to manage and track your shortened URLs.`
          },
          {
            id: 6,
            question: "Does it require any money?",
            answer: `Its totally free application anyone can use it.`
          }
    ]
        const faqContainer = document.getElementById("faqlist");
        let html = "";

        faqContent.forEach((faq)=>{
            html += `
            <div class="accordion-item">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-${faq.id}">
                        <i class="bi bi-question-circle question-icon"></i>
                        ${faq.question}
                    </button>
                </h3>

                <div id="faq-content-${faq.id}" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                           ${faq.answer}            
                    </div>
                </div>
             </div>
            `
        })
        faqContainer.innerHTML = html;
    </script>

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
