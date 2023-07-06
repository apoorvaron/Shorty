<?php
  if(isset($_POST['submit'])){
    require('../admin/dBconn/database.php');
    $database = new Database();
    $db = $database->connect();

    $email=$_POST['email'];


    $query = "SELECT * from users where email='".$email."'";
    $result = mysqli_query($db,$query);
    $row = mysqli_fetch_array($result);

    $rows = mysqli_num_rows($result);
    if($rows){
        $subject = "Password Reset";
        $body = "Hii ".$row['username']."";
        $sender_email = "FROM: micro@gmail.com";
        if(mail($email,$subject,$body,$sender_email)){

        }
    }else{
        echo "<script>alert('No Email Found')</script>";
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

        <link rel="shortcut icon" href="../assets/images/logout-logo.webp">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <!-- <body class="fixed-left" style="background-image:url(assets/images/background.webp)"> -->
    <body class="fixed-left" style="background: -webkit-linear-gradient(-135deg, #6862d5, #dd2476);
  background: -o-linear-gradient(-135deg, #6862d5, #dd2476);
  background: -moz-linear-gradient(-135deg, #6862d5, #dd2476);
  background: linear-gradient(-135deg, #1C3879, #EB4747);">
        
        <!-- Begin page -->
        <!--<div class="accountbg"></div>-->
        <div id="stars"></div>
        <div id="stars2"></div>
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center mt-0">
                        <a href="./forget-pass.php" class="logo logo-admin"><img src="../assets/images/forget.webp" height="100" alt="logo"></a>
                    </h3>

                    <h6 class="text-center">Recover Account</h6>

                    <div class="p-3">
                        
                        <form class="form-horizontal" method="POST">

                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="email" id="email" required name="email" placeholder="Enter your Email" >
                                </div>
                            </div>


                            <div class="form-group text-center row m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-danger btn-block waves-effect waves-light" id="submit" name="submit" type="submit">Send Email</button>
                                </div>
                            </div>

                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-sm-7 m-t-20">
                                    <a href="./login.php" class="text-muted"><i class="fa fa-user"></i> Back to Login</a>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


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