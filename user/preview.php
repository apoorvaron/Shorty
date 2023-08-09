<?php
include __DIR__ . "/../env.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Update Link </title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="themesdesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />


    <link rel="shortcut icon" href="../assets/images/logout-logo.webp">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="shortcut icon" href="../assets/images/logout-logo.png">


    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./assets/css/btn-new.css">
    <link rel="stylesheet" href="../assets/css/preview.css">
    <link rel="stylesheet" href="../assets/css/sweetAlertButton.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<!-- jQuery CDN -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
    function blockSpecialChar(e) {
        var k;
        document.all ? k = e.keyCode : k = e.which;
        return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k >= 48 && k <= 57));
    }
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php if (isset($_POST["submit"])) {
    require "../admin/dBconn/database.php";
    $database = new Database();
    $link = $database->connect();

    $linkIsFor = $_POST["linkIsFor"];
    $originalLink = $_POST["originalLink"];
    $shortenLink = $_POST["shortenLink"];

    // Validate "Link is for" field (name for the shortened link)
    if (strlen($linkIsFor) > 50) {
        echo "<script>
            $(document).ready(function(){
                swal('Error: Link Name Exceeds 50 Characters! 🚫🔗');
            });
        </script>";
    } else {
        // Validate the originalLink as a valid URL format
        if (filter_var($originalLink, FILTER_VALIDATE_URL)) {
            $sql = "UPDATE links SET linkIsFor = '$linkIsFor', originalLink = '$originalLink', shortenLink = '$shortenLink' WHERE linkID = '{$_GET["linkID"]}';";
            $result = mysqli_query($link, $sql);

            if ($result == 1) {
                echo "<script>
                    $(document).ready(function(){
                        swal('Successfully Updated !!','','success').then(function() {
                            window.location = './index.php?username={$_GET["username"]}&uno={$_GET["uno"]}';
                        });
                    });
                </script>";
            } else {
                echo "<script>
                    $(document).ready(function(){
                        swal('Custom Name Not Available !!','','error');
                    });
                </script>";
            }
        } else {
            echo "<script>
                $(document).ready(function(){
                    swal('Enter a Valid URL !!','','error');
                });
            </script>";
        }
    }
} ?>


<body class="fixed-left">
    <!-- Begin page -->
    <div id="wrapper">

        <?php include "header.php"; ?>
        <!-- Top Bar End -->

        <div class="page-content-wrapper">

            <div class="container-fluid">


                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Update Link</h4>
                            <a href="./index.php?username=<?php echo $username; ?>&uno=<?php echo $uno; ?>"><button
                                    type=""
                                    class="btn btn-danger waves-effect waves-light position-absolute top-29 right-15">Your
                                    Links</button></a>
                        </div>
                    </div>
                </div>

                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-md-12 col-xl-12">
                        <div class="card m-b-30">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Edit Link</h4>
                                <p class="text-muted font-14">A URL shortener built with powerful tools to help you grow
                                    and protect your brand.</p>

                                <?php
                                $username = $_GET["username"];
                                $uno = $_GET["uno"];
                                $linkID = $_GET["linkID"];

                                // include '../admin/dBconn/database.php';
                                $database = new Database();
                                $link = $database->connect();

                                // Check if the uniqueNo and linkID combination is valid
                                $checkValidity = "SELECT * FROM links WHERE uniqueNo = '$uno' AND linkID = $linkID";
                                if ($CheckResult = mysqli_query($link, $checkValidity)) {
                                    if (mysqli_num_rows($CheckResult) > 0) {
                                        $sql = "SELECT * FROM links WHERE linkID = $linkID";
                                        if ($result = mysqli_query($link, $sql)) {
                                            if (mysqli_num_rows($result) > 0) {
                                                $row = mysqli_fetch_array($result);

                                                // Output the form with the fetched data
                                                echo "
                    <form method='POST' id='preview'>
                        <div class='row'>
                            <div class='col-md-12'>
                                <div class='form-group'>
                                    <label>Link is for</label>
                                    <div class='inputIconContainer'>
                                    <i class='bi bi-globe'></i>
                                    <input type='text' class='form-control' id='linkIsFor' name='linkIsFor' required placeholder='Link is for' maxlength='50' value='" . htmlspecialchars($row['linkIsFor']) . "'/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-md-12'>
                                <div class='form-group'>
                                    <label>Original Link</label>
                                    <div class='inputIconContainer'>
                                    <i class='bi bi-link-45deg'></i>
                                    <input type='text' class='form-control' id='originalLink' name='originalLink' required placeholder='Original Link' value='" . $row['originalLink'] . "'/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='col-md-12'>
                                <label>Shorten Link</label>
                            </div>
                        </div>
                        <div class='form-control col-md-12' id='customeNameInput'>
                        <div class='inputIconContainer'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='15' height='15' fill='#0d42ff' class='bi bi-browser-chrome' viewBox='0 0 16 16'>
  <path fill-rule='evenodd' d='M16 8a8.001 8.001 0 0 1-7.022 7.94l1.902-7.098a2.995 2.995 0 0 0 .05-1.492A2.977 2.977 0 0 0 10.237 6h5.511A8 8 0 0 1 16 8ZM0 8a8 8 0 0 0 7.927 8l1.426-5.321a2.978 2.978 0 0 1-.723.255 2.979 2.979 0 0 1-1.743-.147 2.986 2.986 0 0 1-1.043-.7L.633 4.876A7.975 7.975 0 0 0 0 8Zm5.004-.167L1.108 3.936A8.003 8.003 0 0 1 15.418 5H8.066a2.979 2.979 0 0 0-1.252.243 2.987 2.987 0 0 0-1.81 2.59ZM8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z'/>
</svg>
                            <span class='form-group' id='formSpan'>
                                <label><strong>" . $env_domain . " </strong> </label>
                                <span><input type='text' value='" . $row['shortenLink'] . "' required placeholder='Custom Name' class='border-0' id='shortenLink' name='shortenLink'/></span>
                            </span>
                            </div>
                        </div>

                        <br>

                        <div class='row'>
                            <div class='col-md-6 text-center'>
                                <div class='form-group mb-0'>
                                    <div>
                                        <button type='button' name='generateRandom' id='generateRandom' class='btn btn-success waves-effect waves-light btn-new'>
                                            Random Number
                                        </button>

                                        <button class='btn btn-primary new btn-new' type='button' data-toggle='modal' data-target='#myModal' onclick='join()'>Preview</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class='row'>
                            <div class='col-md-6'>
                                <div class='form-group mb-0'>
                                    <div>
                                        <button type='submit' name='submit' id='submit' class='btn btn-success waves-effect waves-light btn-new'>
                                            Update
                                        </button>

                                        <button type='reset' class='btn btn-danger waves-effect m-l-5' onclick='goBack()'>
                                            Cancel
                                        </button>
                                    </div>
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
                                            echo "<script>
                $(document).ready(function(){
                    swal('Internal Server Error : 500', '', 'error').then(function() {
                        window.location = './index.php?username={$username}&uno={$uno}';
                    });
                });
            </script>";
                                        }
                                    } else {
                                        echo "<script>
            $(document).ready(function(){
                swal('Unauthorized Access.', '', 'error').then(function() {
                    window.location = './index.php?username={$username}&uno={$uno}';
                });
            });
        </script>";
                                    }
                                } else {
                                    echo "<script>
        $(document).ready(function(){
            swal('Internal Server Error : 500', '', 'error').then(function() {
                window.location = './index.php?username={$username}&uno={$uno}';
            });
        });
    </script>";
                                }
                                ?>





                            </div>
                        </div>
                    </div> <!-- end col -->

                </div> <!-- end row -->


            </div><!-- container -->

        </div> <!-- Page content Wrapper -->

    </div> <!-- content -->
    <!-- *************************** To Go Back Cancel Button ***************************** -->

    <script>
        function goBack() {
            // Use the history object to go back to the previous page.
            // This will act like clicking the browser's back button.
            window.history.back();
        }
    </script>
    <!-- *************************** To Go Back Cancel Button ***************************** -->


    <!-- *************************** Generate Random Number ***************************** -->
    <script>
        document.querySelector('#generateRandom').addEventListener('click', function () {
            var randNum = Array.from({ length: 6 }, () => Math.floor(Math.random() * 16).toString(16)).join('');
            // console.log(randNum);
            let v = document.querySelector('#shortenLink').value = randNum;
            var previewBtn = document.querySelector('#previewBtn');
            if (v.trim().length != 0) {
                previewBtn.removeAttribute("hidden");
            } else {
                previewBtn.setAttribute("hidden", true);
            }
        });
    </script>
    <!-- *************************** Generate Random Number ends ***************************** -->

    <!-- *************************** Block SpecialChar ***************************** -->
    <script>
        $("#shortenLink").on("input", function () {
            var c = this.selectionStart,
                r = /[^a-z0-9 ]/gi,
                v = $(this).val();
            if (r.test(v)) {
                $(this).val(v.replace(r, ""));
                v.length--;
                c--;
            }
            this.setSelectionRange(c, c);
            var previewBtn = document.querySelector('#previewBtn');
            // console.log(v.trim().length);
            if (v.trim().length != 0) {
                previewBtn.removeAttribute("hidden");
            } else {
                previewBtn.setAttribute("hidden", true);
            }
        });
    </script>
    <!-- *************************** Block SpecialChar Ends ***************************** -->

    <!-- *************************** Get preview modal   *****************************  -->

    <div class='modal fade' id='myModal' role='dialog'>
        <div class='modal-dialog'>
            <div class=modal-content modal-background'>
                <div class='modal-header modal-head'>
                    <button type='button' class='close' data-dismiss='modal'>&times;</button>
                    <h4 class='modal-title'>Your Shortlink!!</h4>
                </div>
                <div class='modal-body' id='modal'>

                </div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>

        function join() {
            let value = $('#shortenLink').val();
            let new_text = value.split(' ').join('_');
            let shortlink = "<?php echo $env_domain; ?>" + new_text;
            $('#modal').html(shortlink);
            //   console.log(new_text);

        }
    </script>

    <!-- *************************** Get preview modal ends   *****************************  -->


    <?php include "footer.php"; ?>

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