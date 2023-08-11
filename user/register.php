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


    <link href="../assets/img/logo.webp" rel="icon" />

    <!-- Bootsrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link href="../assets/img/logo.png" rel="icon" />


    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./assets/css/btn-new.css">
    <link rel="stylesheet" href="../assets/css/register.css">
    <link rel="stylesheet" href="../assets/css/sweetAlertButton.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body class="fixed-left">
    <!-- Begin page -->
    <!--<div class="accountbg"></div>-->
    <div id="stars"></div>
    <div id="stars2"></div>
    <div class="wrapper-page">

        <div class="card">
            <div class="card-body">

                <h3 class="text-center mt-0">
                    <a href="./register" class="vert-move logo logo-admin"><img class="vert-move"
                            src="../assets/img/registerpage--logo.webp" height="100" alt="logo"></a>
                </h3>



                <h6 class="text-center">Registration Form</h6>

                <div class="p-3">

                    <form id="register" class="form-horizontal" method="POST" action='./register.php'
                        enctype="multipart/form-data" aria-label="Register Form">

                        <div class="form-group row">
                            <div class="col-12">
                                <div class="inputIconContainer">
                                    <i class="bi bi-envelope-fill"></i>
                                    <input class="form-control" type="email" required name="email" id="email"
                                        placeholder="Email" aria-required="true" aria-label="Email"
                                        onkeyup="validate(event)">
                                </div>
                                <p class="error hidden" id="emailError">Please enter Valid email</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <div class="input-group" id="passwordBorder">
                                    <div id="password-iconDiv" class="inputIconContainer">
                                        <i class="bi bi-lock-fill"></i>
                                        <input type="password" class="form-control " id="password" required
                                            minlength="8" name="password" placeholder="Password" aria-required="true"
                                            aria-label="Password" onkeyup="validate(event)">
                                    </div>
                                    <div class="input-group-append eye">
                                        <span class="input-group-text" onclick="changeType()">
                                            <i id="eyei" onclick="" class="fa fa-eye-slash ml-np15 mt-p4 zIndexTop"
                                                aria-hidden="true"></i>
                                    </div>
                                </div>
                                <p class="error hidden" id="passwordError">Minimum 8 characters, 1 uppercase, 1
                                    lowercase, 1 symbol (@$%#^&*), 1 number (0-9)</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <div class="input-group" id="cnfrmPassBorder">
                                    <div id="cnfrmPass-iconDiv" class="inputIconContainer">
                                        <i class="bi bi-check-square-fill"></i>
                                        <input type="password" class="form-control" id="cnfrmPass" required
                                            minlength="8" name="cnfrmPass" placeholder="Confirm Password"
                                            aria-required="true" aria-label="Confirm Password"
                                            onkeyup="validate(event)">
                                    </div>

                                    <div class="input-group-append eye">
                                        <span class="input-group-text" onclick="changeTypei()">
                                            <i id="eyeii" class="fa fa-eye-slash ml-np15 mt-p4 zIndexTop"
                                                aria-hidden="true"></i>
                                    </div>
                                </div>
                                <p class="error hidden" id="cnfrmPassError">Password does not match</p>
                            </div>
                        </div>

                        <!-- <div class="form-group row d-flex flex-col">
                            <div class="col-12">

                                <label id="file-label">Upload Profile Image : </label>
                                <div class="uplodInputFileds form-control p-0 h-full">
                                    <input data-parsley-type="file" type="file" class="file-upload" name="UploadImage"
                                        aria-labelledby="file-label"
                                        accept="image/png, image/gif, image/jpeg, image/jpg" />
                                    <span class="custom-file-upload">Choose File</span>
                                    <span class="selected-file"></span>
                                </div>
                            </div>
                        </div> -->

                        <div class="form-group text-center row m-t-20">
                            <div class="col-12">
                                <button
                                    class="btn  btn-block waves-effect waves-light btn-new bg-black text-white border-primary "
                                    id="submit" name="submit" type="submit" aria-label="Register">Register</button>
                            </div>
                        </div>

                        <div class="form-group m-t-10 mb-0 row">
                            <div class="col-sm-7 m-t-20">
                                <a href="../" class="text-muted"><i class="mdi mdi-home" aria-hidden="true"></i> &nbsp;
                                    Home Page</a>
                            </div>
                            <div class="col-sm-5 m-t-20">
                                <a href="./login" class="text-muted"><i class="mdi mdi-account-circle"
                                        aria-hidden="true"></i> &nbsp; Login </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        let loop = 0;
        password = document.querySelector('#password');
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



        let loopi = 0;
        let cnfrmPass = document.querySelector('#cnfrmPass');
        let eyeii = document.querySelector('#eyeii');

        function changeTypei() {
            if (loopi % 2 == 0) {
                eyeii.classList.remove("fa-eye-slash");
                eyeii.classList.add("fa-eye");
                cnfrmPass.type = "text";
            } else {
                eyeii.classList.remove("fa-eye");
                eyeii.classList.add("fa-eye-slash");
                cnfrmPass.type = "password";
            }
            loopi++;
        }

        // Function for inline validation of fields
        function validate(e) {
            const emailRegex = /\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}\b/;
            const passwordRegex = /(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{8,})/
            const error = document.getElementById(`${e.target.name}Error`);
            if (e.target.name === "email") {
                const valid = emailRegex.test(e.target.value);
                (valid) ? error.classList.add("hidden") : error.classList.remove("hidden");
                (valid) ? e.target.style.border = "2px solid #04cb04" : e.target.style.border = "2px solid red";
            } else if (e.target.name === "password") {
                const div = document.getElementById("passwordBorder").style;
                const valid = passwordRegex.test(e.target.value);
                (valid) ? error.classList.add("hidden") : error.classList.remove("hidden");
                (valid) ? div.border = "2px solid #04cb04" : div.border = "2px solid red";

            } else {
                const passwordVal = document.getElementById("password").value;
                const div = document.getElementById("cnfrmPassBorder").style;
                const valid = (passwordVal === e.target.value);
                (valid) ? error.classList.add("hidden") : error.classList.remove("hidden");
                (valid) ? div.border = "2px solid #04cb04" : div.border = "2px solid red";

            }
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

    <!-- <script src="assets/plugins/parsleyjs/parsley.min.js"></script>
        <script src="assets/pages/form-validation.init.js"></script> -->

    <!-- Custom JavaScript for fileuplod -->
    <!-- <script>

        window.onload = function () {
            var fileInput = document.querySelector('.file-upload');
            var customBtn = document.querySelector('.custom-file-upload');
            var selectedFileText = document.querySelector('.selected-file');

            customBtn.addEventListener('click', function () {
                fileInput.click();
            });

            fileInput.addEventListener('change', function () {
                if (fileInput.files.length > 0) {
                    selectedFileText.textContent = fileInput.files[0].name;
                } else {
                    selectedFileText.textContent = '';
                }
            });
        };
    </script> -->
    <?php
    function validatePassword($password)
    {
        $passwordRegex = '/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{8,})/';
        return preg_match($passwordRegex, $password);
    }
    if (isset($_POST["submit"])) {
        require "../admin/dBconn/database.php";
        $database = new Database();
        $db = $database->connect();

        $email = $_POST["email"];
        $username = bin2hex(random_bytes(3));
        $password = $_POST["password"];
        $valid = validatePassword($password);
        $cnfrmPass = $_POST["cnfrmPass"];
        $cnfrmPass = md5($cnfrmPass);
        $password = md5($password);
        $randNum = bin2hex(random_bytes(3));
        // $UploadedFileName = $_FILES["UploadImage"]["name"];
    
        $query = "SELECT * from `users` WHERE email='$email'";
        $result = mysqli_query($db, $query);
        if (!mysqli_num_rows($result)) {
            if ($valid) {
                if ($cnfrmPass == $password) {
                    $upload_directory = "../assets/user-img/dummy.webp";
                    // if (!empty($UploadedFileName)) {
                    //     $filename = $UploadedFileName;
                    //     $fileExplode = explode(".", $filename);
                    //     $fileExt = strtolower(end($fileExplode));
                    //     $fileExtStored = [
                    //         "png",
                    //         "jpg",
                    //         "jpeg",
                    //         "gif",
                    //         "tiff",
                    //         "webp",
                    //     ];
                    //     if (in_array($fileExt, $fileExtStored)) {
                    //         $upload_directory = "../assets/user-img/"; //This is the folder which you created just now
                    //         $TargetPath = time() . $UploadedFileName;
    
                    //         if (
                    //             move_uploaded_file(
                    //                 $_FILES["UploadImage"]["tmp_name"],
                    //                 $upload_directory . $TargetPath
                    //             )
                    //         ) {
                    //             $upload_directory =
                    //                 "../assets/user-img/" . $TargetPath;
                    //             $queryIns = "INSERT INTO `users` (`uniqueNo`,`username`, `password`, `img`,`email`) VALUES ('$randNum','$username', '$password', '$upload_directory','$email')";
                    //             if (mysqli_query($db, $queryIns)) {
                    //                 echo "  <script>
                    //         swal('Registration Successful !!','* Please Login *','success').then(function() {
                    //             window.location = './login';
                    //         });
                    //      </script>";
                    //             } else {
                    //                 echo "<script>swal('Could not Register','', 'error');</script>";
                    //             }
                    //         } else {
                    //             echo "<script>swal('unexpected error','', 'error');</script>";
                    //         }
                    //     } else {
                    //         echo "<script>swal('Please Upload a valid Image','', 'error');</script>";
                    //     }
                    // } else {
                    $queryIns = "INSERT INTO `users` (`uniqueNo`,`username`, `password`, `img`,`email`) VALUES ('$randNum','$username', '$password', '$upload_directory','$email')";
                    if (mysqli_query($db, $queryIns)) {
                        echo "  <script>
                        swal('Registration Successful !!','* Please Login *','success').then(function() {
                            window.location = './login';
                        });
                        </script>";
                    }
                    // }
                } else {
                    echo "<script>swal('Passwords are not Matching !!', '', 'error');</script>";
                }
            } else {
                echo "<script>swal('Weak Password !!', '', 'error');</script>";
            }
        } else {
            echo "<script>swal('Email Already Registered!!', '', 'info');</script>";
        }
    }

    ?>

</body>

</html>