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
        session_start();
        error_reporting(0);
?>
        <?php
  if(isset($_POST['submit'])){
    require('../admin/dBconn/database.php');
    $database = new Database();
    $db = $database->connect();

    $email=$_POST['email'];
    $password=$_POST['password'];
    $originalPass = $password;
    $password = md5($password);

    $query = "SELECT * from users where email='$email' and password ='$password'";
    $result = mysqli_query($db,$query);

    if(mysqli_num_rows($result)==1){

        ob_start();
        if(isset($_POST['rememberme'])){
            setcookie('emailcookie',$email,time()+86400);
            setcookie('passwordcookie',$originalPass,time()+86400);
        }
      $row = mysqli_fetch_array($result);
      $_SESSION["".$row['username'].""]="".$row['username']."";
      echo "<script>window.location.replace('./index.php?username=".$row['username']."&uno=".$row['uniqueNo']."')</script>";
    }
    else{
        echo "  <script>
                    $(document).ready(function(){
                        swal('Wrong Email or Password !!','','error').then(function() {
                        });
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

        <link rel="shortcut icon" href="../assets/images/logout-logo.png">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
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
        100% { transform: translateY(-10px); }
    }
    @keyframes mover {
        0% { transform: translateY(0); }
        100% { transform: translateY(-10px); }
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
        <div class="wrapper-page" >

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center mt-0">
                        <a href="./login.php" class="logo logo-admin"><img class="vert-move" src="https://bootstrapmade.com/demo/templates/Arsha/assets/img/hero-img.png" height="100" alt="logo"></a>
                    </h3>

                    <h6 class="text-center">Login / Sign In</h6>

                    <div class="p-3">
                        
                        <form class="form-horizontal" method="POST">

                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="email" required="" name="email" data-parsley-type="email" id="email" placeholder="Email" value="<?php if(isset($_COOKIE['emailcookie'])){ echo $_COOKIE['emailcookie'];} ?>"> 
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="password" id="password" required="" placeholder="Password" name="password"  value="<?php if(isset($_COOKIE['passwordcookie'])){ echo $_COOKIE['passwordcookie'];} ?>" >
                                </div>
                                    <i id="eyei" style="margin-left:-15%;margin-top:4%;z-index:9999;" onclick="changeType()" class="fa fa-eye-slash" aria-hidden="true"></i>

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
                                        <input type="checkbox" class="custom-control-input" name="rememberme" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Remember me</label>
                                        <i class="ti-info-alt tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Save your password"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group text-center row m-t-20">
                                <div class="col-12">
                                <button class="btn  btn-block waves-effect waves-light" style="background-color: #0d42ff; color:white; border: 1px solid #0d42ff;" id="submit" name="submit" type="submit">Log In</button>
                                </div>
                            </div>

                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-sm-7 m-t-20">
                                    <a href="../" class="text-muted"><i class="mdi mdi-arrow-left-bold"></i> Back to Home Page</a>
                                </div>
                                <div class="col-sm-5 m-t-20">
                                    <a href="./register" class="text-muted"><i class="mdi mdi-account-circle"></i> Create an account ?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <script>
            let loop = 0;
            let password = document.querySelector('#password');
            let eyei = document.querySelector('#eyei');
            function changeType(){
                if(loop%2==0){
                    eyei.classList.remove("fa-eye-slash");
                    eyei.classList.add("fa-eye");
                    password.type="text";
                }else{
                    eyei.classList.remove("fa-eye");
                    eyei.classList.add("fa-eye-slash");
                    password.type="password";
                }
                loop++;
            }


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
        <script src="assets/plugins/parsleyjs/parsley.min.js"></script>
        <script src="assets/pages/form-validation.init.js"></script>

    </body>
</html>