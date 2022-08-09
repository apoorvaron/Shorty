<?php
        session_start();
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
                                    <input class="form-control" type="email" required="" name="email" id="email" placeholder="Email" value="<?php if(isset($_COOKIE['emailcookie'])){ echo $_COOKIE['emailcookie'];} ?>"> 
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="password" id="password" required="" placeholder="Password" name="password" value="<?php if(isset($_COOKIE['passwordcookie'])){ echo $_COOKIE['passwordcookie'];} ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12" >
                                    <center id="warning"></center>

                                </div>
                            </div>

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
                                    <a href="../index.php" class="text-muted"><i class="mdi mdi-arrow-left-bold"></i> Back to Home Page</a>
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
        session_start();
        ob_start();
        if(isset($_POST['rememberme'])){
            setcookie('emailcookie',$email,time()+86400);
            setcookie('passwordcookie',$originalPass,time()+86400);
        }
      $row = mysqli_fetch_array($result);
      $_SESSION["".$row['username'].""]="".$row['username']."";
    //   header('location: ./index.php?username='.$row['username'].'&uno='.$row['uniqueNo']);
      echo "<script>window.location.replace('./index.php?username=".$row['username']."&uno=".$row['uniqueNo']."')</script>";
    }
    else{
        // echo "<script>alert('Wrong username or password')</script>";
        echo "  <script>
                    let warning =  document.querySelector('#warning');
                    warning.innerHTML += `  <span style='color:red;font-weight:bold;padding-bottom:0px'>Wrong username or password </span>
                                            <p style='color:red;font-weight:bold;'>Try Again !! </p>`;
                                            
                                            
                                            let timeleft = 1;
                                            let downloadTimer = setInterval(function(){
                                            if(timeleft <= 0){
                                                warning.innerHTML=``;
                                            } else {
                                            }
                                            timeleft -= 1;
                                            }, 1000);



                </script>";
    }

  }
?>


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

    </body>
</html>