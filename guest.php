<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <?php
  $isGuest = "True";
  ?>
  <?php
  // include(__DIR__.'/siteName.php');
  include('./siteName.php');
  require('./admin/dBconn/database.php');

  $new_url = "";
  if (isset($_GET)) {
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

  if (isset($_POST['submit'])) {
    $database = new Database();
    $db = $database->connect();

    $uno = "shorty";
    $username = "shorty";
    $linkIsFor = "guestUser";
    $originalLink = $_POST['originalLink'];
    $shortenLink = $_POST['shortenLink'];
    // $originalLink = $_POST['originalLink'];
    // $shortenLink = $_POST['shortenLink'];
    $shortenLink = explode(" ", $shortenLink);
    $shortenLink = join("_", $shortenLink);
    $finalLink = $siteName . $shortenLink;
    // $shortenLink = "".$siteName."".$short;
    if (filter_var($originalLink, FILTER_VALIDATE_URL)) {
      $query = "SELECT * from links WHERE shortenLink='" . $shortenLink . "'";
      $result = mysqli_query($db, $query);
      $count_rows = mysqli_num_rows($result);
      if ($count_rows > 0) {


        echo "  <script>
                              $(document).ready(function(){
                                  swal('Custom Name Not Available !!','','error');
                              });
                          </script>";


      } else {

        $query = "SELECT * FROM links WHERE uniqueNo='shorty' AND originalLink='" . $originalLink . "'";



        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_array($result);
        $count_rows = mysqli_num_rows($result);
        // echo "<br><br><br><br><br><br>adegsrdhgfjhgdgrearwethjyfgytrtwyjygj.".$query;
  

        $sql = "INSERT INTO `links` (`uniqueNo`,`linkIsFor`, `originalLink`, `shortenLink`) VALUES ('$uno','$linkIsFor', '$originalLink', '$shortenLink')";
        $result = mysqli_query($db, $sql);
        if ($result) {

          echo '<script>
              $(document).ready(function(){
                
              let generateShorty = document.querySelector("#generateShorty");
              let full_shortlink = "' . $siteName . '";
              generateShorty.innerHTML = `
                  <form class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
                    <input type="text" id="shortInput" disabled style="font-size: 0.9rem;" disabled class="form-control" value="' . $finalLink . '" value=""/>
                    <input class="btn btn-primary" type="button" onclick="copy()" id="copyBtn" value="Copy">
                  </form>
                `;

                  let originalLink = document.querySelector("#originalLink").value;

                  var formData = new FormData();
                  formData.append("originalLink", originalLink);
  
});
</script>';


        } else {
          echo "  <script>
                                          $(document).ready(function(){
                                              swal('Try Again !!','','error');
                                          });
                                     </script>";


        }




      }









    } else {
      echo "  <script>
                          $(document).ready(function(){
                              swal('Please Enter Valid URL !!','','info');
                          });
                      </script>";


    }



    // echo "<br><br><br><br><br><br><br>eqfwgretgfnerwqedgnretrqthdgjrwteqwrhdgtehryw".$result;
  

  }
  ?>

  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <!-- importing the SEO FROM SEO.PHP FILE -->
  <?php include './includes/seo.php'; ?>


  <!-- Favicons -->
  <link href="./assets/img/logo.png" rel="icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

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
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


  <!-- =======================================================
  * Template Name: Logis - v1.1.0
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    #originalLink,
    #shortenLink {
      border: 0 !important;
      padding: 7px 0;
      border-bottom: 1px solid #ccc !important;
      margin-bottom: 15px;
    }

    customName input[type="text"] {
      font: 15px/24px "Lato", Arial, sans-serif;
      color: #333;
      width: 100%;
      box-sizing: border-box;
      letter-spacing: 1px;
    }


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

          </p>
          <div>
            <form class="form-search align-items-stretch mb-3 d-flex" style="
    flex-direction: column;" method="POST" data-aos="fade-up" data-aos-delay="200">

              <h2 data-aos="fade-up" style="color:gray" class="fs-2 my-2 aos-init aos-animate">Custom Link
              </h2>
              <hr style="color:gray;">
              <input type="text" class="form-control mb-4 mt-3" style="font-size: 0.9rem;" placeholder="Your Link"
                id="originalLink" name="originalLink" />
              <input type="text" class="form-control mb-4 mt-3" style="font-size: 0.9rem;" placeholder="Custom Name"
                id="shortenLink" name="shortenLink" />
              <div class="d-flex justify-content-between">
                <button type="button" class="btn btn-primary btn-sm" id="generateRandom">Random Number</button>
                <button type="button" class="btn btn-primary" name="" onclick="generateCustomShorty()"
                  class="btn-get-started">Shorten
                  Link</button>


              </div>
            </form>
          </div>


          <div id="generateShorty"></div>


          <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">
            <div class="col-lg-3 col-6">
              <div>
                <span></span>
                <p></p>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <div>
                <span></span>
                <p></p>
              </div>
            </div>

            <div class="col-lg-3 col-6">
              <div>
                <span></span>
                <p></p>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <div>
                <span></span>
                <p></p>
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
  <!-- *************************** Generate Random Number   *****************************  -->

  <?php
  $randNum = bin2hex(random_bytes(3));
  ;

  echo "
                                        <script>
                                                document.querySelector('#generateRandom').addEventListener('click',function(){
                                                        console.log('sadfsdg');
                                                        document.querySelector('#shortenLink').value='" . $randNum . "';
                                                    });
                                        </script>
                                ";
  ?>

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