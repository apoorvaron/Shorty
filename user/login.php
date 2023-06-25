<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- jQuery CDN -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
    .swal-overlay {
        background-color: #0e1d34;
    }

    .swal-button {
        padding: 7px 19px;
        border-radius: 2px;
        background-color: #4962B3;
        font-size: 12px;
        border: 1px solid #3e549a;
        text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.3);
    }
</style>
<?php
include(__DIR__ . '/../siteName.php');

?>
<?php
session_start();
error_reporting(0);
?>
<?php
if (isset($_POST['submit']) && $_POST['submit'] === 'LogInRequest') {
    require('../admin/dBconn/database.php');
    $database = new Database();
    $db = $database->connect();

    $email = $_POST['email'];
    $password = $_POST['password'];
    $originalPass = $password;
    $password = md5($password);

    $query = "SELECT * from users where email='$email' and password ='$password'";
    $result = mysqli_query($db, $query);

    if (mysqli_num_rows($result) == 1) {
        ob_start();
        if (isset($_POST['rememberme'])) {
            setcookie('emailcookie', $email, time() + 86400);
            setcookie('passwordcookie', $originalPass, time() + 86400);
        }

        $row = mysqli_fetch_array($result);
        $_SESSION[$row['username']] = $row['username'];
        $_SESSION[$row['uniqueNo']] = $row['uniqueNo'];

        $_SESSION["username"] = $row['username'];
        $_SESSION["uno"] = $row['uniqueNo'];

        $_SESSION['start'] = time();
        $_SESSION['expire'] = $_SESSION['start'] + (60 * 60);
        echo "<script>window.location.replace('./index?username=" . $row['username'] . "&uno=" . $row['uniqueNo'] . "')</script>";
    } else {
        $query = "SELECT * from users where email='$email'";
        $result = mysqli_query($db, $query);

        if (mysqli_num_rows($result) == 1) {
            echo "
            <script>
                $(document).ready(function(){
                    swal('Wrong Password !!','','error').then(function() {
                    });
                });
            </script>";
        } else {
            echo "
            <script>
                $(document).ready(function(){
                    swal('Please Register First !!','','error').then(function() {
                        window.location='./register';
                    });
                });
            </script>";
        }
    }
} elseif (isset($_POST['submit']) && $_POST['submit'] === 'GuestLoginRequest') {
    require('../admin/dBconn/database.php');
    $database = new Database();
    $db = $database->connect();

    $originalLink = $_POST['originalLink'];
    $shortenLink = $_POST['shortenLink'];
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
                            swal('Successfully Created !!','','success').then(function() {
                                $('#guestForm').modal('hide'); // Close the current modal
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
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h4>Your shortened link goes here</h4>
                                    <p id="shortenedLinkText"><a style="color:green;" target="_blank" href="'.$siteName.$shortenLink.'">'.$siteName.$shortenLink.'</a></p>
                                    <button id="copyButton" class="btn btn-primary">Copy</button>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        // Copy button click event
                        document.getElementById("copyButton").addEventListener("click", function() {
                            var shortenedLink = document.getElementById("shortenedLinkText").textContent;
                            copyToClipboard(shortenedLink);
                        });
                    
                        // Function to copy text to clipboard
                        function copyToClipboard(text) {
                            var dummyElement = document.createElement("textarea");
                            dummyElement.value = text;
                            document.body.appendChild(dummyElement);
                            dummyElement.select();
                            document.execCommand("copy");
                            document.body.removeChild(dummyElement);
                            swal("Copied!", "The shortened link has been copied to the clipboard.", "success");
                        }
                    </script>';
                    


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




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Login</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="themesdesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link href="../assets/img/logo.png" rel="icon" />

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <style>
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
                transform: translateY(-10px);
            }
        }

        @keyframes mover {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-10px);
            }
        }
    </style>
</head>


<!-- <body class="fixed-left" style="background-image:url(assets/images/background.jpg)"> -->

<body class="fixed-left" style="  background-color: #0e1d34;
  background-image: url('../assets/img/hero-bg.png');
  background-size: cover;
  background-position: center;">

    <!-- Begin page -->
    <!--<div class="accountbg"></div>-->
    <div id="stars"></div>
    <div id="stars2"></div>
    <div class="wrapper-page">

        <div class="card">
            <div class="card-body">

                <h3 class="text-center mt-0">
                    <a href="./login" class="logo logo-admin"><img class="vert-move"
                            src="../assets/img/loginpage--logo.png" height="100" alt="logo"></a>
                </h3>

                <h6 class="text-center">Login / Sign In</h6>

                <div class="p-3">

                    <form class="form-horizontal" method="POST">

                        <div class="form-group row">
                            <div class="col-12">
                                <input class="form-control  " type="email" required="" name="email"
                                    data-parsley-type="email" id="email" placeholder="Email" value="<?php if (isset($_COOKIE['emailcookie'])) {
                                        echo $_COOKIE['emailcookie'];
                                    } ?>">
                            </div>
                        </div>



                        <div class="form-group row">
                            <div class="col-12">
                                <div class="input-group">
                                    <input type="password" class="form-control " value="<?php if (isset($_COOKIE['passwordcookie'])) {
                                        echo $_COOKIE['passwordcookie'];
                                    } ?>" id="password" required name="password" placeholder="Password">
                                    <div class="input-group-append">
                                        <span class="input-group-text" onclick="changeType()">
                                            <!-- <img id="eyei" src="https://gvaprofile.com/app/show_hide_eye.png" onclick="changeType()"  style="height:20px; width: 20px;"/></span> -->
                                            <i id="eyei" style="margin-left:-15%;margin-top:4%;" onclick=""
                                                class="fa fa-eye-slash" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- 
                            <div class="form-group row">
                                <div class="col-12" >
                                    <center id="warning"></center>

                                </div>
                            </div> -->

                        <div class="form-group row">
                            <div class="col-12">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="rememberme"
                                        id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Remember me</label>
                                    <i class="ti-info-alt tooltips" data-placement="top" data-toggle="tooltip"
                                        data-original-title="Save your password"></i>
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-center row m-t-20">
                            <div class="col-12">
                                <button class="btn  btn-block waves-effect waves-light"
                                    style="background-color: #0d42ff; color:white; border: 1px solid #0d42ff;"
                                    id="submit" name="submit" type="submit" value="LogInRequest">Log In</button>
                                <button class="btn  btn-block waves-effect waves-light"
                                    style="background-color: #0d42ff; color:white; border: 1px solid #0d42ff;"
                                    id="guestLoginBtn" type="button">Guest Login</button>
                            </div>
                        </div>


                        <div class="form-group m-t-10 mb-0 row">
                            <div class="col-sm-7 m-t-20">
                                <a href="../" class="text-muted"><i class="mdi mdi-arrow-left-bold"></i> &nbsp; Home
                                    Page</a>
                            </div>
                            <div class="col-sm-5 m-t-20">
                                <a href="./register" class="text-muted"><i class="mdi mdi-account-circle"></i> &nbsp;
                                    Create an account</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Guest Login Modal -->
            <div id="guest-modal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">Guest Link</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="guestForm" name="guestForm" method="POST">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="originalLink">Original Link</label>
                                    <input type="text" class="form-control" name="originalLink" required>
                                </div>
                                <div class="form-group">
                                    <label for="shortenLink">Custom Name</label>
                                    <input id="shortenLinkInput" type="text" class="form-control" name="shortenLink" required>
                                </div>
                            </div>
                            <div >
                                                            
                            <div class="modal-footer">
                            <button type="button" name="generateRandom" id="generateRandom" class="btn btn-primary">
                                                                Random No.
                                                            </button>   
                                <button type="submit" name="submit" value="GuestLoginRequest"
                                    class="btn btn-primary">Save Link</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <?php
                                $randNum = bin2hex(random_bytes(3));;

                                echo "
                                        <script>
                                                document.querySelector('#generateRandom').addEventListener('click',function(){
                                                        console.log('sadfsdg');
                                                        document.querySelector('#shortenLinkInput').value='". $randNum."';
                                                    });
                                        </script>
                                ";
                ?>

        <script>
            let loop = 0;
            let password = document.querySelector('#password');
            let eyei = document.querySelector('#eyei');
            function changeType() {
                if (loop % 2 == 0) {
                    eyei.classList.remove("fa-eye-slash");
                    eyei.classList.add("fa-eye");
                    password.type = "text";
                } else {
                    eyei.classList.remove("fa-eye");
                    eyei.classList.add("fa-eye-slash");
                    password.type = "password";
                }
                loop++;
            }

            var myModal = document.getElementById('myModal');
            var myInput = document.getElementById('myInput');

            // myModal.addEventListener('shown.bs.modal', function () {
            //     myInput.focus()
            // })
        </script>
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
            });
        </script>
        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>


        <!-- Parsley js -->
        <!-- <script src="assets/plugins/parsleyjs/parsley.min.js"></script>
        <script src="assets/pages/form-validation.init.js"></script> -->

</body>

</html>