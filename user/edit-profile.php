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
    <link rel="stylesheet" href="./assets/css/btn-new.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <!-- sweet alert css -->
    <link rel="stylesheet" href="../assets/css/sweetAlertButton.css">

    <!-- Css for edit profile  -->
    <link rel="stylesheet" href="../assets/css/editProfile.css">

</head>
<?php
if (isset($_POST['submit'])) {
    // echo "<br><br><br><br><br><br><br><br>erthjg,hgrwetqrtjfhkmjgdeqrw  etsjfhkmjgdrtwerjfhkg,hkfte".$sql;

    require('../admin/dBconn/database.php');
    $database = new Database();
    $link = $database->connect();

    $email = $_POST['email'];
    $uno = $_SESSION["uno"];
    $UploadedFileName = $_FILES['UploadImage']['name'];


    if ($UploadedFileName != '') {
        $sql = "SELECT * FROM users WHERE uniqueNo='" . $uno . "'";
        if ($result = mysqli_query($link, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_array($result);
                if ($row['img'] != '../assets/user-img/dummy.webp') {
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



            $sql = "UPDATE users SET email = '" . $email . "',img = '" . $upload_directory . "' WHERE uniqueNo='" . $uno . "';";
            // echo "<br><br><br><br><br><br><br><br>erthjg,hgrwetqrtjfhkmjgdeqrw  etsjfhkmjgdrtwerjfhkg,hkfte".$sql;
            $result = mysqli_query($link, $sql);

            session_start();
            ob_start();


            if ($result == 1) {

                //Alert Message 
                $msz = "Successfully Updated !!";
                $type = "success";
                $redirection = "./profile";
                include "./swal.php";


            } else {

                //Alert Message 
                $msz = "Email Already Exist !!";
                $type = "error";
                $redirection = "./profile";
                include "./swal.php";
            }

        }
    } else {
        $sql = "UPDATE users SET email = '" . $email . "' WHERE uniqueNo='" . $uno . "';";
        $result = mysqli_query($link, $sql);

        session_start();
        ob_start();


        // echo "<br><br><br><br><br><br><br><br>erthjg,hgrwetqrtjfhkmjgdeqrw  etsjfhkmjgdrtwerjfhkg,hkfte".$result;
        if ($result == 1) {

                //Alert Message 
                $msz = "Successfully Updated !!";
                $type = "success";
                $redirection = "./profile";
                include "./swal.php";

        } else {
                //Alert Message 
                $msz = "Email Already Exist !!";
                $type = "error";
                $redirection = "./profile";
                include "./swal.php";
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
                                $uno = $_SESSION["uno"];
                                $sql = "SELECT * FROM users WHERE uniqueNo='" . $uno. "'";
                                if ($result = mysqli_query($db, $sql)) {
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = mysqli_fetch_array($result);
                                        echo "
                                                        <form method='POST' action='./edit-profile' enctype='multipart/form-data'>
                                                            
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
                                                                    
                                                                    <button type='submit' name='submit' id='submit' class='btn btn-success waves-effect waves-light btn-new' aria-label='Edit Profile'>
                                                                        Edit 
                                                                       </button>
                                                                    <a href='./'><button type='button' class='btn btn-danger waves-effect m-l-5' aria-label='Cancel'>
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