<?php
include(__DIR__ . '/../env.php');

?>
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

    <link rel="shortcut icon" href="../assets/images/logout-logo.png">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        input:focus {
            outline: none;
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
    </style>
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

<?php
if (isset($_POST['submit'])) {
    require('../admin/dBconn/database.php');
    $database = new Database();
    $link = $database->connect();

    $linkIsFor = $_POST['linkIsFor'];
    $originalLink = $_POST['originalLink'];
    $shortenLink = $_POST['shortenLink'];

    if (filter_var($originalLink, FILTER_VALIDATE_URL)) {

        $sql = "UPDATE links SET linkIsFor = '" . $linkIsFor . "' ,originalLink = '" . $originalLink . "',shortenLink = '" . $shortenLink . "' WHERE linkID='" . $_GET['linkID'] . "';";
        // echo "<br><br><br><br><br><br><br><br><br><br><br><br>safdghgkfjrwteqrtyjfdthreawaetsdjfhkjdtrysdtjfhkjdtyrsdhtgf".$sql;
        $result = mysqli_query($link, $sql);

        if ($result == 1) {
            echo "  <script>
                                $(document).ready(function(){
                                    swal('Successfully Updated !!','','success').then(function() {
                                        window.location = './index.php?username=" . $_GET['username'] . "&uno=" . $_GET['uno'] . "';
                                    });
                                });
                            </script>";


        } else {
            echo "  <script>
                                $(document).ready(function(){
                                    swal('Custom Name Not Available !!','','error');
                                });
                            </script>";
        }
    } else {

        echo "      <script>
                                $(document).ready(function(){
                                    swal('Enter Valid URL !!','','error');
                                });
                            </script>";
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
                            <h4 class="page-title">Update Link</h4>
                            <a href="./index.php?username=<?php echo $username ?>&uno=<?php echo $uno ?>"><button
                                    type="" class="btn btn-danger waves-effect waves-light"
                                    style="position: absolute;top: 29px;right: 15px;">Your Links</button></a>
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
                                $username = $_GET['username'];
                                $uno = $_GET['uno'];
                                $linkID = $_GET['linkID'];



                                // include '../admin/dBconn/database.php';
                                $database = new Database();
                                $link = $database->connect();

                                $sql = "SELECT * FROM links WHERE linkID='" . $linkID . "'";
                                if ($result = mysqli_query($link, $sql)) {
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = mysqli_fetch_array($result);
                                        // $row['shortenLink'] =  strtok($row['shortenLink'], 'm');
                                        echo "
                                                            
                                                                        <form  method='POST'  >
                                                                            <div class='row'>
                                                                                <div class='col-md-12'>
                                                                                    <div class='form-group'>
                                                                                        <label>Link is for</label>
                                                                                        <input type='text'  class='form-control' id='linkIsFor' name='linkIsFor' required placeholder='Link is for' value='" . $row['linkIsFor'] . "'/>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class='row'>
                                                                                <div class='col-md-12'>
                                                                                    <div class='form-group'>
                                                                                        <label>Original Link</label>
                                                                                        <input type='text'  class='form-control' id='originalLink' name='originalLink' required placeholder='Original Link' value='" . $row['originalLink'] . "'/>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                
                                                                            <div class='row'>
                                                                                <div class='col-md-12'>
                                                                                    <label>Shorten Link</label>
                                                                                </div>
                                                                            </div>
                                                                                <div class=' form-control col-md-12'> 
                                                                                    <span class='form-group'>
                                                                                        <label> <b>" . $env_domain . " </b> </label>
                                                                                        <span><input type='text'  value='" . $row['shortenLink'] . "' required  placeholder='Custom Short Link' style='border:0px'  id='shortenLink' name='shortenLink'/></span>
                                                                                    </span>
                                                                                        
                                                                                </div>

                                                                            <br>
                                                                        
                                                                            <div class='row'>
                                                                                <div class='col-md-6 text-center'>
                                                                                    <div class='form-group mb-0'>
                                                                                        <div >
                                                                                            <button type='button' name='generateRandom' id='generateRandom' class='btn btn-success waves-effect waves-light'>
                                                                                                Random Number
                                                                                            </button>
                                                                                        
                                                                                            <button  class='btn btn-primary new' type='button'  data-toggle='modal' data-target='#myModal' onclick = join()>Preview</button>
                                                                                        
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <br>

                                                                            <div class='row'>
                                                                                <div class='col-md-6 '>
                                                                                    <div class='form-group mb-0'>
                                                                                        <div >
                                                                                            <button type='submit' name='submit' id='submit' class='btn btn-success waves-effect waves-light'>
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
            console.log(randNum);
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
            console.log(v.trim().length);
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
            let shortlink = "<?php echo $env_domain ?>" + new_text;
            $('#modal').html(shortlink);
            console.log(new_text);

        }
    </script>

    <!-- *************************** Get preview modal ends   *****************************  -->


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