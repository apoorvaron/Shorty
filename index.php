<?php
include('./siteName.php');
require('./admin/dBconn/database.php');

$new_url = "";
if (isset($_GET)) {
  // print_r( $_GET);
  $database = new Database();
  $db = $database->connect();

  foreach ($_GET as $key => $val) {
    $u = mysqli_real_escape_string($db, $key);
    $new_url = str_replace('/', '', $u);

  }

  $sql = "SELECT * from links WHERE shortenLink='" . $new_url . "'";
  $result = mysqli_query($db, $sql);


  if (mysqli_num_rows($result) > 0) {
    mysqli_query($db, "UPDATE total_clicks SET total_clicks = total_clicks+1 WHERE id=1");
    $row = mysqli_fetch_assoc($result);
    header("Location:" . $row['originalLink']);
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <!-- importing the SEO FROM SEO.PHP FILE -->
  <?php include './includes/seo.php'; ?>


  <!-- Favicons -->
  <link href="./assets/img/logo.webp" rel="icon" />
  <link href="assets/img/apple-touch-icon.webp" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
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
    .swal-button {
      padding: 7px 19px;
      border-radius: 2px;
      background-color: #0d6efd;
      font-size: 12px;
      border: 1px solid #0a53be;
      text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.3);
    }

    img.vert-move {
      -webkit-animation: mover 1s infinite alternate;
      animation: mover 1s infinite alternate;
    }

    img.vert-move {
      -webkit-animation: mover 1s infinite alternate;
      animation: mover 1s infinite alternate;
    }

    @-webkit-keyframes mover {
      0% {
        transform: translateY(0);
      }

      100% {
        transform: translateY(-50px);
      }
    }

    @keyframes mover {
      0% {
        transform: translateY(0);
      }

      100% {
        transform: translateY(-50px);
      }
    }
  </style>
</head>
<?php
// require('./admin/dBconn/database.php');
$database = new Database();
$db = $database->connect();
// echo "aefgsrdhtfjgk,hfrtwerfhjkgfdf".$db;
$random = bin2hex(random_bytes(3));
// $random = '209b01';

$sql = "SELECT * from links WHERE shortenLink='" . $random . "'";
$result = mysqli_query($db, $sql);
$rows = mysqli_num_rows($result);

$avail;
if ($rows == 0) {
  $avail = $random;

} else {
  $avail = bin2hex(random_bytes(3));
  ;
}
// echo $avail;



?>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->

<body>
  <!-- importing the HEADER FROM HEADER PHP FILE -->
  <?php include './includes/header.php'; ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-6  order-lg-1 d-flex flex-column justify-content-center">
          <h2 data-aos="fade-up" style="margin-top:4%">Shorty</h2>
          <p data-aos="fade-up" data-aos-delay="100">
            To help you grow, scale, and dominate through the power of link management.Whether you’re sharing one link
            or millions, Shorty lets you personalize, share, and track your content links, while capturing data with
            every click.
          </p>

          <form class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200"
            method="POST">
            <input type="text" class="form-control" style="font-size: 0.9rem;" placeholder="Your Link" id="originalLink"
              onkeydown="if(event.keyCode === 13) { event.preventDefault(); generateShorty(); }">

            <button type="button" class="btn btn-primary" onclick="generateShorty()">Shorten</button>
          </form>
          <div id="generateShorty"></div>


          <?php

          $database = new Database();
          $link = $database->connect();

          $visitor_ip = $_SERVER['REMOTE_ADDR'];
          // $visitor_ip = "54:54:24:54";
          $query = "SELECT * FROM counter_table  WHERE ip_address='$visitor_ip'";
          $result = mysqli_query($link, $query);

          if (!$result) {
            die("Retriving Error");
          }
          $total_visitors = mysqli_num_rows($result);
          if ($total_visitors < 1) {
            $query = "INSERT INTO counter_table(ip_address) VALUES('$visitor_ip')";
            $result = mysqli_query($link, $query);
          }


          $query = "SELECT * FROM counter_table ";
          $result = mysqli_query($link, $query);

          if (!$result) {
            die("Retriving Error");
          }


          $total_visitors = mysqli_num_rows($result);
          ?>

          <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">
            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="<?php echo $total_visitors ?>"
                  data-purecounter-duration="1" class="purecounter"></span>
                <p>Total Visitors</p>
              </div>
            </div>
            <!-- End Stats Item -->
            <?php
            // require('../admin/dBconn/database.php');
            $database = new Database();
            $link = $database->connect();

            $sql = "SELECT * FROM links";
            $result = mysqli_query($link, $sql);

            $count_links = mysqli_num_rows($result);
            ?>
            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="<?php echo $count_links ?>"
                  data-purecounter-duration="1" class="purecounter"></span>
                <p>Shorten Links</p>
              </div>
            </div>
            <?php
            // require('../admin/dBconn/database.php');
            $database = new Database();
            $link = $database->connect();

            $sql = "SELECT * FROM total_clicks where id=1";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_array($result);

            $clicks = $row['total_clicks'];



            $registeredUsers = 0;
            $sql = "SELECT * FROM users";
            if ($result = mysqli_query($link, $sql)) {
              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                  $registeredUsers++;
                }
                mysqli_free_result($result);
              } else {
                echo "<p class='lead'><em></em></p>";
              }
            }
            ?>

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="<?php echo $clicks ?>"
                  data-purecounter-duration="1" class="purecounter"></span>
                <p>Total Clicks</p>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="<?php echo $registeredUsers ?>"
                  data-purecounter-duration="1" class="purecounter"></span>
                <p>Registered Users</p>
              </div>
            </div>
            <!-- End Stats Item -->
          </div>
        </div>

        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
          <img src="assets/img/hero-img.svg" class="img-fluid mb-3 mb-lg-0 vert-move mobile-size"
            style="margin-top:20%" />

        </div>
      </div>
    </div>
  </section>
  <!-- End Hero Section -->

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