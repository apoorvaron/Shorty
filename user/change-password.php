<?php
    session_start();
    error_reporting(0);
?>

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



    <link rel="icon" type="image/x-icon" href="../assets/images/logout-logo.webp">

    <!-- Bootsrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="icon" type="image/x-icon" href="../assets/images/logout-logo.png">


    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./assets/css/btn-new.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>


    <!-- sweet alert css -->
    <link rel="stylesheet" href="../assets/css/sweetAlertButton.css">
    
    <!-- sweet alert js -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">

    <style>
        .inputIconContainer {
            position: relative;
            width: 100%;
        }

        .inputIconContainer i {
            position: absolute;
            top: 5px;
            left: 5px;
            color: #04307d;
            font-size: 15px;
        }

        #changepassword input {
            padding-left: 32px;
        }

        .hidden {
            display: none;
        }
        .error{
            margin-top: -15px;
        }
    </style>
</head>

<body class="fixed-left">
    <!-- Begin page -->
    <div id="wrapper">

        <?php include 'header.php'; ?>
        <!-- Top Bar End -->

        <div class="page-content-wrapper">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Change Your Password</h4>
                            <a href="profile"><button
                                    type="submit" class="btn btn-danger waves-effect waves-light"
                                    style="position: absolute;top: 29px;right: 15px;">Profile</button></a>
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
                                <p class="text-muted font-14">Frequently changing passwords renders old or saved ones useless, enhancing data security.</p>

                                <form method="POST" id="changepassword">
                                    <div class="row">



                                        <div class="col-12">
                                            <label>Old Password</label>
                                            <div class="input-group form-group" id="passwordBorderOld" style="flex-wrap: nowrap;">

                                                <div class="inputIconContainer" id="password-iconDiv">
                                                    <i class="bi bi-key-fill"></i>
                                                    <input type="password" class="form-control" name="oldPass"  id="oldPass" required placeholder="Old Password" aria-required="true" aria-label="Old Password" onkeyup="validate(event)">
                                                </div>
                                                <div class="input-group-append eye">
                                                    <span class="input-group-text" onclick="changeTypeOld()">
                                                        <i id="eyeOld" onclick="" class="fa fa-eye-slash ml-np15 mt-p4 zIndexTop"
                                                            aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <p class="error hidden" id="oldPassError">Please fill this field</p>
                                        </div>












                                        <div class="col-12">
                                            <label>New password</label>
                                            <div class="input-group form-group" id="passwordBorderNew" style="flex-wrap: nowrap;">

                                                <div class="inputIconContainer" id="password-iconDiv">
                                                    <i class="bi bi-lock-fill"></i>
                                                    <input type="password" class="form-control" name="newPass"  id="newPass" required placeholder="New Password" aria-required="true" aria-label="New Password" onkeyup="validate(event)">
                                                </div>
                                                <div class="input-group-append eye">
                                                    <span class="input-group-text" onclick="changeTypeNew()">
                                                        <i id="eyeNew" onclick="" class="fa fa-eye-slash ml-np15 mt-p4 zIndexTop"
                                                            aria-hidden="true"></i>
                                                </div>
                                            </div>
                                                <p class="error hidden" id="newPassError">Minimum 8 characters, 1 uppercase, 1 lowercase, 1 symbol (@$%#^&*), 1 number (0-9)</p>
                                        </div>

              






                                        <div class="col-12">
                                            <label>Confirm password</label>
                                            <div class="input-group form-group" id="passwordBorderCnfrm" style="flex-wrap: nowrap;">

                                                <div class="inputIconContainer" id="password-iconDiv">
                                                    <i class="bi bi-check-square-fill"></i>
                                                    <input type="password" class="form-control" name="cnfrmPass"  id="cnfrmPass" required placeholder="Confirm Password" aria-required="true" aria-label="Confirm Password" onkeyup="validate(event)">
                                                </div>
                                                <div class="input-group-append eye">
                                                    <span class="input-group-text" onclick="changeTypeCnfrm()">
                                                        <i id="eyeCnfrm" onclick="" class="fa fa-eye-slash ml-np15 mt-p4 zIndexTop"
                                                            aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <p class="error hidden" id="cnfrmPassError">Password does not match</p>
                                        </div>





                                        <div class="col-md-6">
                                            <div class="form-group mb-0">
                                                <div>
                                                    <button type="submit" name="submit" id="submit"
                                                        class="btn btn-success waves-effect waves-light btn-new"
                                                        onclick="removeValidation()">
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

    <script>
        // Function for inline validation of fields
        function validate(e) {
            const passwordRegex = /(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{8,})/
            const error = document.getElementById(`${e.target.name}Error`);
            if (e.target.name === "oldPass") {
                const div = document.getElementById("passwordBorderOld").style;

                (e.target.value) ? error.classList.add("hidden") : error.classList.remove("hidden");
                (e.target.value) ? div.border = "2px solid rgba(170, 170, 170, 0.3)" : div.border = "2px solid red";
                (e.target.value) ? div.borderRadius = "5px" : div.borderRadius = "5px" ;

            } else if (e.target.name === "newPass") {
                const div = document.getElementById("passwordBorderNew").style;
                const valid = passwordRegex.test(e.target.value);
                (valid) ? error.classList.add("hidden") : error.classList.remove("hidden");
                (valid) ? div.border = "2px solid #04cb04" : div.border = "2px solid red";
                (valid) ? div.borderRadius = "5px" : div.borderRadius = "5px";

            } else {
                const div = document.getElementById("passwordBorderCnfrm").style;
                const passwordVal = document.getElementById("newPass").value;
                const valid = (passwordVal === e.target.value && e.target.value !== "");
                (valid) ? error.classList.add("hidden") : error.classList.remove("hidden");
                (valid) ? div.border = "2px solid #04cb04" : div.border = "2px solid red";
                (valid) ? div.borderRadius = "5px" : div.borderRadius = "5px";

            }
        }

        function removeValidation() {
            const errors = [...document.getElementsByClassName("error")]
            errors.forEach((err) => {
                err.classList.add("hidden")
            })

        }






        // eye control
        let loopOld = 0;
        passwordOld = document.querySelector('#oldPass');
        let eyeOld = document.querySelector('#eyeOld');

        function changeTypeOld() {
            if (loopOld % 2 == 0) {
                eyeOld.classList.remove("fa-eye-slash");
                eyeOld.classList.add("fa-eye");
                passwordOld.type = "text";
            } else {
                eyeOld.classList.remove("fa-eye");
                eyeOld.classList.add("fa-eye-slash");
                passwordOld.type = "password";
            }
            loopOld++;
        }



        // eye control
        let loopNew = 0;
        passwordNew = document.querySelector('#newPass');
        let eyeNew = document.querySelector('#eyeNew');

        function changeTypeNew() {
            if (loopNew % 2 == 0) {
                eyeNew.classList.remove("fa-eye-slash");
                eyeNew.classList.add("fa-eye");
                passwordNew.type = "text";
            } else {
                eyeNew.classList.remove("fa-eye");
                eyeNew.classList.add("fa-eye-slash");
                passwordNew.type = "password";
            }
            loopNew++;
        }


        // eye control Confirm Password
        let loopCnfrm = 0;
        passwordCnfrm = document.querySelector('#cnfrmPass');
        let eyeCnfrm = document.querySelector('#eyeCnfrm');

        function changeTypeCnfrm() {
            if (loopCnfrm % 2 == 0) {
                eyeCnfrm.classList.remove("fa-eye-slash");
                eyeCnfrm.classList.add("fa-eye");
                passwordCnfrm.type = "text";
            } else {
                eyeCnfrm.classList.remove("fa-eye");
                eyeCnfrm.classList.add("fa-eye-slash");
                passwordCnfrm.type = "password";
            }
            loopCnfrm++;
        }

    </script>

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

        $uno = $_SESSION["uno"];
        $oldPass = $_POST["oldPass"];
        $newPass = $_POST["newPass"];
        $valid = validatePassword($newPass);
        $cnfrmPass = $_POST["cnfrmPass"];
        $oldPass = md5($oldPass);
        $newPass = md5($newPass);
        $cnfrmPass = md5($cnfrmPass);

        $query = "SELECT * from users WHERE uniqueNo='" . $uno . "' and password='" . $oldPass . "'";
        $result = mysqli_query($db, $query);
        if (mysqli_num_rows($result)) {
            if ($valid) {
                if ($cnfrmPass == $newPass) {
                    $sql = "UPDATE users SET password = '" . $newPass . "' WHERE uniqueNo='" . $uno. "';";
                    if (mysqli_query($db, $sql)) {


                        //Alert Message 
                        $msz = "Password Changed !!";
                        $type = "success";
                        $redirection = "./";
                        include "./swal.php";


                    } else {

                        //Alert Message 
                        $msz = "Try Again !!";
                        $type = "error";
                        $redirection = "./change-password";
                        include "./swal.php";

                    }
                } else {

                        //Alert Message 
                        $msz = "Enter Same Password !!";
                        $type = "error";
                        $redirection = "./change-password";
                        include "./swal.php";

                }
            } else {

                        //Alert Message 
                        $msz = "Enter Strong Password !!";
                        $type = "error";
                        $redirection = "./change-password";
                        include "./swal.php";
            }
        } else {

                        //Alert Message 
                        $msz = "Incorrect Old Password !!";
                        $type = "error";
                        $redirection = "./change-password";
                        include "./swal.php";
        }
    }
    ?>
    <?php include 'footer.php'; ?>

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