<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- jQuery CDN -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php
// include(__DIR__.'/siteName.php');
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

  <!-- =======================================================
  * Template Name: Logis - v1.1.0
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    /* #Nishit {
color : black;
    } */
    .GuestModalLabel {
      color: #555;
      font-weight: 700;
      margin: 10px 0px;
    }

    .modal-header {
      color: #555;
      font-weight: 700;
      margin: 10px 0px;
      font-size: large;
    }

    #shortenLinkInput,
    #originalLinkModal {
      display: block;
      width: 100%;
      padding: 10px;
      font-size: 14px;
      line-height: 1.42857143;
      color: #555;
      background-color: #fff !important;
      background-image: none !important;
      border: 2px solid #ccc !important;
      border-radius: 4px;
      transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
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
            To help you grow, scale, and dominate through the power of link management.Whether you’re sharing one link
            or millions, Shorty lets you personalize, share, and track your content links, while capturing data with
            every click.
          </p>


          <form class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200"
            method="POST">
            <input type="text" class="form-control" style="font-size: 0.9rem;" placeholder="Your Link"
              id="originalLink" />
            <button type="button" class="btn btn-primary" onclick="generateShorty()">Shorten</button>
          </form>

          <button class="btn btn-block waves-effect waves-light"
            style="margin-bottom: 20px;/* width: fit-content; */background-color: #0d42ff;color:white;border: 1px solid #0d42ff;"
            id="guestLoginBtn" type="button" title="Click here to create a custom shorten link">Click to Create Custom
            Shorten Link</button>


          <div id="generateShorty"></div>
          <!-- Guest Link Modal -->
          <div id="guest-modal" class="modal fade" role="dialog">
            <div class="modal-dialog" id="Nishit">
              <div class="modal-content">
                <div class="modal-header">
                  <h3 class="modal-title">Guest Link</h3>
                  <button type="button" class="custom-close" id="customclose" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form id="guestForm" name="guestForm" method="POST">
                  <div class="modal-body">
                    <div class="form-group">
                      <label for="originalLinkModal" class="GuestModalLabel">Original Link</label>
                      <input type="text" class="form-control" id="originalLinkModal" name="originalLinkModal" required>
                    </div>
                    <div class="form-group">
                      <label for="shortenLinkModal" class="GuestModalLabel">Custom Name</label>
                      <input id="shortenLinkInput" type="text" class="form-control" name="shortenLinkModal" required>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" name="generateRandom" id="generateRandom" class="btn btn-primary">Random
                      No.</button>
                    <button type="submit" name="submit" value="GuestLoginRequestHome" class="btn btn-primary">Save
                      Link</button>
                  </div>
                </form>
              </div>

            </div>

          </div>
          <?php if (isset($_POST['submit']) && $_POST['submit'] === 'GuestLoginRequestHome') {
            $database = new Database();
            $db = $database->connect();

            $originalLink = $_POST['originalLinkModal'];
            $shortenLink = $_POST['shortenLinkModal'];
            $shortenLink = str_replace(" ", "_", $shortenLink);
            $newShortenLink = $siteName . $shortenLink;

            $uno = "shorty";
            $linkIsFor = "guestUser";

            if (filter_var($originalLink, FILTER_VALIDATE_URL)) {
              $query = "SELECT * from links WHERE shortenLink='" . $shortenLink . "'";
              $result = mysqli_query($db, $query);
              $count_rows = mysqli_num_rows($result);

              if ($count_rows > 0) {
                echo "
            <script>
                $(document).ready(function(){
                    swal('Custom Name Not Available !!','','error');
                });
            </script>";
              } else {
                $query = "SELECT * FROM links WHERE uniqueNo='" . $uno . "' AND originalLink='" . $originalLink . "'";
                $result = mysqli_query($db, $query);
                $row = mysqli_fetch_array($result);
                $count_rows = mysqli_num_rows($result);

                // if ($count_rows > 0) {
                // echo "<script>window.location.replace('./alreadyOriginal.php?username=" . $_GET['username'] . "&uno=" . $_GET['uno'] . "&linkID=" . $row['linkID'] . "')</script>";
                // } else {
                $sql = "INSERT INTO `links` (`uniqueNo`,`linkIsFor`, `originalLink`, `shortenLink`) VALUES ('$uno','$linkIsFor', '$originalLink', '$shortenLink')";
                $result = mysqli_query($db, $sql);

                if ($result) {
                  echo "
                    <script>
                        $(document).ready(function(){
                          swal('Successfully Created !!', '', 'success').then(function() {
                            $('#guestForm').modal('hide'); // Close the current modal
                            $('#guestForm')[0].reset(); // Reset the form fields
                        
                            $('#nextModal').modal('show'); // Open the next modal
                          });
                        });
                    </script>";

                  echo '
                    <div id="nextModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title">Shorten Link</h3>
                                    <button type="button" class="close custom-closeNext" id="custom-closeNext" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h4 style="
                                    color: #5d70c9;
                                ">Your shortened link goes here</h4>
                                    <p id="shortenedLinkText"><a style="color:green;" target="_blank" href="' . $siteName . $shortenLink . '">' . $siteName . $shortenLink . '</a></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" id="custom-closeNextButton" data-dismiss="modal" aria-label="Close">Close</button>
                                    <button id="copyButton" class="btn btn-primary" onclick="Copy()">Copy</button>

                                </div>
                            </div>
                        </div>
                    </div>';
                  echo "
                  <script>
                  function CopyFunction(){
                  var copyText = document.getElementById('shortenedLinkText').textContent;
                  navigator.clipboard.writeText(copyText);
                  swal('Copied!', 'The shortened link has been copied to the clipboard.', 'success');
                  }
</script>
                  ";
                  echo "
                          <script>
                              $(document).ready(function(){
                                  $('#custom-closeNext').on('click', function () {
                                    // Show the contact modal
                                    $('#nextModal').modal('hide');
                                });
                                  $('#custom-closeNextButton').on('click', function () {
                                    // Show the contact modal

                                    $('#nextModal').modal('hide');
                                });
                              });
                          </script>";


                } else {
                  echo "
                    <script>
                        $(document).ready(function(){
                            swal('Try Again !!','','error');
                        });
                    </script>";
                }
                // }
              }
            } else {
              echo "
        <script>
            $(document).ready(function(){
                swal('Please Enter Valid URL !!','','info');
            });
        </script>";
            }
          }
          ?>
          <?php
          $randNum = bin2hex(random_bytes(3));
          ;

          echo "
                                        <script>
                                                document.querySelector('#generateRandom').addEventListener('click',function(){
                                                        console.log('sadfsdg');
                                                        document.querySelector('#shortenLinkInput').value='" . $randNum . "';
                                                    });
                                        </script>
                                ";
          ?>
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
  <script>
    $(document).ready(function () {
      // Guest Login button click event
      $("#guestLoginBtn").on("click", function () {
        // Show the contact modal
        $("#guest-modal").modal("show");
      });

      // Reset the form after submission
      $("#guestForm")[0].reset();

      // Close the modal
      $("#guest-modal").modal("hide");
      $("#customclose").on("click", function () {
        // Show the contact modal

        $("#guest-modal").modal("hide");
      });

    });
  </script>
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