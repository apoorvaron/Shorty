<?php
  if(isset($_POST['submit'])){
    require('../admin/dBconn/database.php');
    $database = new Database();
    $db = $database->connect();

    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $cnfrmPass=$_POST['cnfrmPass'];
    $cnfrmPass = md5($cnfrmPass);
    $password = md5($password);
    $randNum = bin2hex(random_bytes(3));
    $UploadedFileName=$_FILES['UploadImage']['name'];

    if($cnfrmPass == $password){
        if($UploadedFileName!='')
        {
            $upload_directory = "../assets/user-img/"; //This is the folder which you created just now
            $TargetPath=time().$UploadedFileName;
    
            if(move_uploaded_file($_FILES['UploadImage']['tmp_name'], $upload_directory.$TargetPath)){    
                $upload_directory = "../assets/user-img/".$TargetPath;
                $query = "INSERT INTO `users` (`uniqueNo`,`username`, `password`, `img`,`email`) VALUES ('$randNum','$username', '$password', '$upload_directory','$email')";
                $result = mysqli_query($db,$query);
                // echo "<br><br><br><br><br><br><br><br><br><br>erteyrutrhegwqrtweyryrutrhegwqrtweyryrutrhegwqrtweyryrutrhegwqrtweyryrutrhegwqrtweyryjtukyiuktyjrtehrk...".$result;
    
            
    
    
                // $result = mysqli_query($db,$sql);
                if($result==1){
                    echo "<script>alert('Registration Successful !!')</script>";
                    echo "<script>window.location.replace('./login.php')</script>";
                }else{
                    echo "<script>alert('Try Again with different username & Email!!')</script>";
                }
            }
        }
    }else{
        echo "<script>alert('Password are not Matching !!')</script>";
    }





  }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Sign Up</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="themesdesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="../assets/images/logout-logo.png">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <!-- <body class="fixed-left" style="background-image:url(assets/images/background.jpg)"> -->
    <body class="fixed-left" style="background: -webkit-linear-gradient(-135deg, #6862d5, #dd2476);
  background: -o-linear-gradient(-135deg, #6862d5, #dd2476);
  background: -moz-linear-gradient(-135deg, #6862d5, #dd2476);
  background: linear-gradient(-5deg, #EB4747, #1C3879);">
        
        <!-- Begin page -->
        <!--<div class="accountbg"></div>-->
        <div id="stars"></div>
        <div id="stars2"></div>
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center mt-0">
                        <a href="./register.php" class="logo logo-admin"><img src="https://cdni.iconscout.com/illustration/premium/thumb/user-login-4268415-3551762.png" height="100" alt="logo"></a>
                    </h3>

                    <h6 class="text-center">Registration Form</h6>

                    <div class="p-3">
                        
                        <form class="form-horizontal" method="POST" action='./register.php' enctype="multipart/form-data">

                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="email" required name="email" id="email" placeholder="Email">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="text" required name="username" id="username" placeholder="Username">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="password" id="password" required placeholder="Password" name="password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="text" id="cnfrmPass" required placeholder="Confirm Password" name="cnfrmPass">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label>Upload  Image :    </label>
                                    <input data-parsley-type="file" type="file" required  name="UploadImage" />
                                </div>
                            </div>

                            <!-- <div class="form-group row">
                                <div class="col-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Remember me</label>
                                    </div>
                                </div>
                            </div> -->

                            <div class="form-group text-center row m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-danger btn-block waves-effect waves-light" id="submit" name="submit" type="submit">Register</button>
                                </div>
                            </div>

                            <div class="form-group m-t-10 mb-0 row">
                             
                                <div class="col-sm-5 m-t-20 text-left">
                                    <a href="./login" class="text-muted"><i class="mdi mdi-account-circle"></i>  Login</a>
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