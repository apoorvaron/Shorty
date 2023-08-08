<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Edit User Profile</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="themesdesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="../assets/images/logout-logo.webp">

    <!-- DataTables -->
    <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <style>
        .table_wrapper {
            display: block;
            overflow-x: auto;
            white-space: nowrap;
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
        .file-upload {
            display: none;
        }

        .custom-file-upload {
            display: inline-block;
            width: fit-content;
            padding: 10px 20px;
            cursor: pointer;
            background-color: #04307c;
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

    </style>
</head>
<?php
if (isset($_POST['submit'])) {
    // echo "<br><br><br><br><br><br><br><br>erthjg,hgrwetqrtjfhkmjgdeqrw  etsjfhkmjgdrtwerjfhkg,hkfte".$sql;

    require('../admin/dBconn/database.php');
    $database = new Database();
    $link = $database->connect();

    $username = $_GET['username'];
    $email = $_POST['email'];
    $user = $_GET['username'];
    $uno = $_GET['uno'];
    $UploadedFileName = $_FILES['UploadImage']['name'];


    if ($UploadedFileName != '') {
        $sql = "SELECT * FROM users WHERE username='" . $_GET['username'] . "'";
        if ($result = mysqli_query($link, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_array($result);
                if ($row['img'] != '../assets/img/inside-header-logo.webp') {
                    unlink("" . $row['img'] . "");
                }

                mysqli_free_result($result);
            } else {
                echo "<p class='lead'><em>No Record Found.</em></p>";
            }
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

        }



        $upload_directory = "../assets/user-img/"; //This is the folder which you created just now
        $TargetPath = time() . $UploadedFileName;

        if (move_uploaded_file($_FILES['UploadImage']['tmp_name'], $upload_directory . $TargetPath)) {
            $upload_directory = "../assets/user-img/" . $TargetPath;



            $sql = "UPDATE users SET username = '" . $username . "' ,email = '" . $email . "',img = '" . $upload_directory . "' WHERE username='" . $user . "';";
            // echo "<br><br><br><br><br><br><br><br>erthjg,hgrwetqrtjfhkmjgdeqrw  etsjfhkmjgdrtwerjfhkg,hkfte".$sql;
            $result = mysqli_query($link, $sql);

            session_start();
            ob_start();
            $_SESSION["" . $username . ""] = "" . $username . "";


            if ($result == 1) {
                echo "  <script>
                                    $(document).ready(function(){
                                        swal('Successfully Updated !!','','success').then(function() {
                                            window.location = './profile.php?username=" . $_GET['username'] . "&uno=" . $_GET['uno'] . "';
                                        });
                                    });
                                </script>";


            } else {
                echo "  <script>
                                    $(document).ready(function(){
                                        swal('Email Already Exist !!','','error');
                                    });
                                </script>";
            }

        }
    } else {
        $sql = "UPDATE users SET username = '" . $username . "' ,email = '" . $email . "' WHERE username='" . $user . "';";
        $result = mysqli_query($link, $sql);

        session_start();
        ob_start();
        $_SESSION["" . $username . ""] = "" . $username . "";


        // echo "<br><br><br><br><br><br><br><br>erthjg,hgrwetqrtjfhkmjgdeqrw  etsjfhkmjgdrtwerjfhkg,hkfte".$result;
        if ($result == 1) {
            echo "  <script>
                                $(document).ready(function(){
                                    swal('Successfully Updated !!','','success').then(function() {
                                        window.location = './profile.php?username=" . $username . "&uno=" . $_GET['uno'] . "';
                                    });
                                });
                            </script>";

        } else {
            echo "  <script>
                                $(document).ready(function(){
                                    swal('Email Already Exist !!','','error');
                                });
                            </script>";
        }
    }






}
?>

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

                            <h4 class="page-title"></h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-30">
                            <div class="card-body">



                                <h2 class="mt-0 header-title">Edit Profile</h2>
                                <br>
                                <!-- 
                                            <p class="text-muted font-14">Here are examples of <code
                                                    class="highlighter-rouge">.form-control</code> applied to each
                                                textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code
                                                        class="highlighter-rouge">type</code>.</p> -->

                                <?php
                                // require('../admin/dBconn/database.php');
                                $database = new Database();
                                $db = $database->connect();

                                $sql = "SELECT * FROM users WHERE username='" . $_GET['username'] . "'";
                                if ($result = mysqli_query($db, $sql)) {
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = mysqli_fetch_array($result);
                                        echo "
                                                        <form method='POST' action='./edit-profile.php?username=" . $username . "&uno=" . $uno . "' enctype='multipart/form-data'>
                                                            
                                                            <div class='form-group row'>
                                                                <label for='example-text-input' class='col-sm-2 col-form-label'>Email</label>
                
                                                                <div class='col-sm-10'>
                                                                    <input class='form-control' readonly type='text' value='" . $row['email'] . "' id='email' name='email' required aria-label='Email'>
                                                                </div>
                                                            </div>
                                                            <div class='form-group row'>
                                                                <label for='example-text-input' class='col-sm-2 col-form-label'>Your Image </label>
                
                                                                <div class='col-sm-10'>
                                                       
                                                                    <img style='border-radius:50%; height:10rem;' src='" . $row['img'] . "' alt=''> or 
                                                                 


                                                                    <div class='form-group row d-flex flex-col'>
                                                                        <div class='col-12'>
                                            
                                                                            <label id='file-label'>Upload Profile Image : </label>
                                                                            <div class='uplodInputFileds form-control p-0 h-full'>
                                                                                <input data-parsley-type='file' type='file' class='file-upload' name='UploadImage'
                                                                                    aria-labelledby='file-label' aria-label='Upload Image'
                                                                                    accept='image/png, image/gif, image/jpeg, image/jpg' />
                                                                                <span class='custom-file-upload'>Choose File</span>
                                                                                <span class='selected-file'></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>



                                                                </div>
                                                 
                                                       
                                                            
                                                                
                                                            </div>
                                                            <div class='col-md-12 text-center'>
                                                            <div class='form-group mb-0'>
                                                             
                                                                <div>
                                                                    
                                                                    <button type='submit' name='submit' id='submit' class='btn btn-success waves-effect waves-light' aria-label='Edit Profile'>
                                                                        Edit 
                                                                       </button>
                                                                    <a href='./index.php?username=" . $username . "&uno=" . $uno . "'><button type='button' class='btn btn-danger waves-effect m-l-5' aria-label='Cancel'>
                                                                        Cancel
                                                                        </button></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </form>

                                                        ";
                                        mysqli_free_result($result);
                                    } else {
                                        echo "<p class='lead'><em>No Record Found.</em></p>";
                                    }
                                } else {
                                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

                                }
                                ?>










                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->



            </div><!-- container -->

        </div> <!-- Page content Wrapper -->

    </div> <!-- content -->

    <?php include 'footer.php'; ?>

    </div>
    <!-- End Right content here -->

    </div>
    <!-- END wrapper -->



    <script>
        // Custom JavaScript for fileuplod
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

    <!-- Required datatable js -->
    <!--        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>-->
    <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="assets/plugins/datatables/jszip.min.js"></script>
    <script src="assets/plugins/datatables/pdfmake.min.js"></script>
    <script src="assets/plugins/datatables/vfs_fonts.js"></script>
    <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="assets/plugins/datatables/buttons.print.min.js"></script>
    <script src="assets/plugins/datatables/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="assets/pages/datatables.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>

</body>

</html>