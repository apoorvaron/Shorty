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

    <link href="../assets/img/logo.png" rel="icon" />

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        .file-upload {
            display: none;
        }

        .custom-file-upload {
            display: inline-block;
            width: fit-content;
            padding: 10px 20px;
            cursor: pointer;
            background-color: #0d6efd;
            color: #fff;
            border-radius: 5px;
        }

        .custom-file-upload:hover {
            background-color: #2c7df7;

        }

        .selected-file {
            display: inline-block;
            margin-left: 10px;
            font-size: 14px;
            color: #555;
        }

        .uplodInputFileds {
            height: fit-content;
        }

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

<body class="fixed-left" style="   background-color: #0e1d34;
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
                    <a href="./register" class="vert-move logo logo-admin"><img class="vert-move" src="../assets/img/registerpage--logo.png" height="100" alt="logo"></a>
                </h3>



                <h6 class="text-center">Registration Form</h6>

                <div class="p-3">

                    <form class="form-horizontal" method="POST" action='./register.php' enctype="multipart/form-data">

                        <div class="form-group row">
                            <div class="col-12">
                                <input class="form-control" type="email" required name="email" id="email" placeholder="Email">
                            </div>
                        </div>


                        <!-- <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="password" id="password" minlength="8" required placeholder="Password" name="password" onblur="removeInclude()" onfocus="addInclude()">
                                </div>
                            </div> -->


                        <div class="form-group row">
                            <div class="col-12">
                                <div class="input-group">
                                    <input type="password" class="form-control " id="password" required minlength="8" name="password" placeholder="Password" onblur="removeInclude()" onfocus="addInclude()">
                                    <div class="input-group-append">
                                        <span class="input-group-text" onclick="changeType()">
                                            <i id="eyei" style="margin-left:-15%;margin-top:4%;z-index:9999;" onclick="" class="fa fa-eye-slash" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <div class="input-group">
                                    <input type="password" class="form-control " id="cnfrmPass" required minlength="8" name="cnfrmPass" placeholder="Confirm Password">
                                    <div class="input-group-append">
                                        <span class="input-group-text" onclick="changeTypei()">
                                            <i id="eyeii" style="margin-left:-15%;margin-top:4%;z-index:9999;" class="fa fa-eye-slash" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="form-group row">
                            <div class="col-12">
                                <center id="warnDiv">
                                    <span id="warning" style="width:50%;display: none; background-color:red;padding:2%;font-size:1rem;margin-top:-100%" class="badge displayBadge">Weak</span>
                                </center>

                            </div>
                        </div>
                        <div id="includeDiv">



                        </div>
                        <!-- <div class="form-group row">
                                <div class="col-12" >
                                    <center id="warning"></center>

                                </div>
                            </div> -->

                        <div class="form-group row d-flex flex-col">
                            <div class="col-12">

                                <label>Upload Profile Image : </label>
                                <div class="uplodInputFileds form-control p-0 h-full">
                                    <input data-parsley-type="file" type="file" class="file-upload" name="UploadImage" />
                                    <span class="custom-file-upload">Choose File</span>
                                    <span class="selected-file"></span>
                                </div>
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
                                <button class="btn  btn-block waves-effect waves-light" style="background-color: #0d42ff; color:white; border: 1px solid #0d42ff;" id="submit" name="submit" type="submit">Register</button>
                            </div>
                        </div>
                        <div class="form-group m-t-10 mb-0 row">
                            <div class="col-sm-7 m-t-20">
                                <a href="../" class="text-muted"><i class="mdi mdi-arrow-left-bold"></i> &nbsp; Home Page</a>
                            </div>
                            <div class="col-sm-5 m-t-20">
                                <a href="./login" class="text-muted"><i class="mdi mdi-account-circle"></i> &nbsp; Login </a>
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

    <script>
        let password = document.getElementById('password');
        // let warning = document.getElementById('warning');
        let warning = document.querySelector('#warning');
        // console.log(warning.textContent);
        // StrengthDisp.value="dfs";
        let strongPassword = new RegExp('(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{8,})');



        function StrengthChecker(PasswordParameter) {
            // We then change the badge's color and text based on the password strength

            if (strongPassword.test(PasswordParameter)) {
                warning.style.display = 'inline-block';
                warning.style.backgroundColor = "green";
                warning.textContent = "Strong Password";
                // StrengthDisp.value="Strong";
            } else {
                // console.log(2);
                warning.style.display = 'inline-block';
                warning.style.backgroundColor = "red";
                warning.textContent = "Weak Password";

            }
        }
        password.addEventListener("input", () => {

            setTimeout(() => StrengthChecker(password.value), 500);

            //Incase a user clears the text, the badge is hidden again

            if (password.value.length !== 0) {
                // let warnDiv = document.querySelector('#warnDiv');
                // warning.style.display = 'none';

            } else {
                console.log(90);
                // warnDiv.style.display = 'none';
                warning.style.display = 'none';
            }
        });

        let includeDiv = document.querySelector('#includeDiv');

        function addInclude() {
            includeDiv.innerHTML = `  
                                <div class="col-12" style="margin-left: 0%;" >
                                    <ul style="color:grey">
                                        <li>Atleast 8 characters</li>
                                        <li>Atleast one uppercase letter</li>
                                        <li>Atleast one lowercase letter </li>
                                        <li>Atleast one digit </li>
                                        <li>Atleast one special character</li>
                                    </ul>
                                </div>
                                    `;
        }

        function removeInclude() {
            includeDiv.innerHTML = ``;
        }

        // Custom JavaScript for fileuplod
        window.onload = function() {
            var fileInput = document.querySelector('.file-upload');
            var customBtn = document.querySelector('.custom-file-upload');
            var selectedFileText = document.querySelector('.selected-file');

            customBtn.addEventListener('click', function() {
                fileInput.click();
            });

            fileInput.addEventListener('change', function() {
                if (fileInput.files.length > 0) {
                    selectedFileText.textContent = fileInput.files[0].name;
                } else {
                    selectedFileText.textContent = '';
                }
            });
        };
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
        $UploadedFileName = $_FILES["UploadImage"]["name"];

        $query = "SELECT * from `users` WHERE email='$email'";
        $result = mysqli_query($db, $query);
        if (!mysqli_num_rows($result)) {
            if ($valid) {
                if ($cnfrmPass == $password) {
                    if (!empty($UploadedFileName)) {
                        $filename = $UploadedFileName;
                        $fileExplode = explode(".", $filename);
                        $fileExt = strtolower(end($fileExplode));
                        $fileExtStored = [
                            "png",
                            "jpg",
                            "jpeg",
                            "gif",
                            "tiff",
                            "webp",
                        ];
                        if (in_array($fileExt, $fileExtStored)) {
                            $upload_directory = "../assets/user-img/"; //This is the folder which you created just now
                            $TargetPath = time() . $UploadedFileName;

                            if (
                                move_uploaded_file(
                                    $_FILES["UploadImage"]["tmp_name"],
                                    $upload_directory . $TargetPath
                                )
                            ) {
                                $upload_directory =
                                    "../assets/user-img/" . $TargetPath;
                                $queryIns = "INSERT INTO `users` (`uniqueNo`,`username`, `password`, `img`,`email`) VALUES ('$randNum','$username', '$password', '$upload_directory','$email')";
                                if (mysqli_query($db, $queryIns)) {
                                    echo "  <script>
                            swal('Registration Successful !!','* Please Login *','success').then(function() {
                                window.location = './login';
                            });
                         </script>";
                                } else {
                                    echo "<script>swal('Could not Register','', 'error');</script>";
                                }
                            } else {
                                echo "<script>swal('unexpected error','', 'error');</script>";
                            }
                        } else {
                            echo "<script>swal('Please Upload a valid Image','', 'error');</script>";
                        }
                    } else {
                        echo "<script>swal('Please Upload an Image','', 'error');</script>";
                    }
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