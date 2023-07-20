<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Change Password</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="themesdesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        
  <link rel="icon" type="image/x-icon" href= "../assets/images/logout-logo.png">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>
    </head>

    <body class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">

            <?php include'header.php'; ?>
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper">

                        <div class="container-fluid">

                        <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <h4 class="page-title">Change Your Password</h4>
                                       <a href="profile.php?username=<?php echo $username ?>&uno=<?php echo $uno?>"><button type="submit" class="btn btn-danger waves-effect waves-light" style="position: absolute;top: 29px;right: 15px;">My Profile</button></a>
                                    </div>
                                </div>
                            </div>
        
                            <div class='row' id="alertModal"></div>

                            <!-- end page title end breadcrumb -->
                            <div class="row">
                 
                                <div class="col-md-12 col-xl-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                                    <!-- <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center" role="alert">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                       <i class="mdi mdi-alert-circle font-32"></i><strong>If you don't have any children</strong> 
                                                    </div> -->
            
                                            <h4 class="mt-0 header-title">Change Password</h4>
                                            <p class="text-muted font-14">Regularly updating your passwords means that even if someone finds an old or saved password, it will no longer be useful, and your data will be secure.</p>
            
                                            <form method="POST">
                                                <div class="row">
                                                
                                               
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Old Password</label>
                                                        <input type="password" class="form-control" name="oldPass" id="oldPass" required placeholder="Old Password"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>New password</label>
                                                        <input type="password" class="form-control" name="newPass" id="newPass" required placeholder="New password"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Confirm Password</label>
                                                        <input type="password" class="form-control" name="cnfrmPass" id="cnfrmPass" required placeholder="Confirm password"/>
                                                    </div>
                                                </div>
                                               
                                               
                                                <div class="col-md-6">
                                                    <div class="form-group mb-0">
                                                        <div>
                                                            <button type="submit" name="submit" id="submit" class="btn btn-success waves-effect waves-light">
                                                                Update
                                                            </button>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
            
                            </div> <!-- end row -->


                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->
                 <?php
                function validatePassword($password)
                {
                    // Minimum 8 characters
                    if (strlen($password) < 8) {
                        return false;
                    }

                    // At least one lowercase alphabet
                    if (!preg_match("/[a-z]/", $password)) {
                        return false;
                    }

                    // At least one uppercase alphabet
                    if (!preg_match("/[A-Z]/", $password)) {
                        return false;
                    }

                    // At least one number
                    if (!preg_match("/\d/", $password)) {
                        return false;
                    }

                    // At least one special character
                    if (!preg_match("/[^a-zA-Z\d]/", $password)) {
                        return false;
                    }

                    // All requirements met
                    return true;
                }
                if (isset($_POST["submit"])) {
                    // require('../admin/dBconn/database.php');
                    $database = new Database();
                    $db = $database->connect();

                    $oldPass = $_POST["oldPass"];
                    $newPass = $_POST["newPass"];
                    $valid = validatePassword($newPass);
                    $cnfrmPass = $_POST["cnfrmPass"];
                    $oldPass = md5($oldPass);
                    $newPass = md5($newPass);
                    $cnfrmPass = md5($cnfrmPass);

                    $query =
                        "SELECT * from users WHERE username='" .
                        $_GET["username"] .
                        "' and password='" .
                        $oldPass .
                        "'";
                    $result = mysqli_query($db, $query);
                    if (mysqli_num_rows($result)) {
                        if ($valid) {
                            if ($cnfrmPass == $newPass) {
                                $sql =
                                    "UPDATE users SET password = '" .
                                    $newPass .
                                    "' WHERE username='" .
                                    $_GET["username"] .
                                    "';";
                                if (mysqli_query($db, $sql)) {
                                    $alertMsz = "Password Changed !!";
                                    include "../user/alertModal.php";
                                } else {
                                    $alertMsz = "Try Again !!";
                                    include "../user/alertModal-red.php";
                                }
                            } else {
                                $alertMsz = "Enter Same Password !!";
                                include "../user/alertModal-red.php";
                            }
                        } else {
                            $alertMsz = "Pls choose strong password !!";
                            include "../user/alertModal-red.php";
                        }
                    } else {
                        $alertMsz = "Incorrect old password !!";
                        include "../user/alertModal-red.php";
                    }
                }
                ?>
                <?php include'footer.php';?>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


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

        <!-- Parsley js -->
        <script src="assets/plugins/parsleyjs/parsley.min.js"></script>
        <script src="assets/pages/form-validation.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>