<?php
include(__DIR__ . '/../env.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Make New Link </title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="themesdesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />


    <link href="../assets/img/logo.webp" rel="icon" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link href="../assets/img/logo.png" rel="icon" />


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

    .inputIconContainer{
	     position: relative;
	     width: 100%;
    }

    .inputIconContainer i, .inputIconContainer svg{
       position: absolute;
      top: 3px;
      left: 5px; 
      color: #0d42ff;
      font-size: 15px;
    }

    #newLink input{
        padding-left: 32px;
    }

    #formSpan{
        display: flex;
        width: 100%;
        overflow-x: hidden;
        margin-left: 32px;
    }

    #formSpan input{
        padding-left: 0px
    } 

    #customeNameInput{
      padding-left: 0;
      padding-right: 0;
    }

    @media only screen and (max-width: 400px)   {
        #shortenLink{
            max-width:70% !important;
        }
    }
    @media only screen and (max-width: 500px) and (min-width: 400px)  {
        #shortenLink{
            width:100% !important;
        }
    }
    @media only screen and (max-width: 800px) and (min-width: 500px)  {
        #shortenLink{
            width:160% !important;
        }
    }
    @media only screen and (min-width: 800px)  {
        #shortenLink{
            width:190% !important;
        }
    }
    </style>
</head>
<!-- jQuery CDN -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<?php
if (isset($_POST['submit'])) {
    require('../admin/dBconn/database.php');
    $database = new Database();
    $db = $database->connect();

    $uno = $_GET['uno'];
    $linkIsFor = $_POST['linkIsFor'];
    $originalLink = $_POST['originalLink'];
    $shortenLink = $_POST['shortenLink'];
    $shortenLink = explode(" ", $shortenLink);
    $shortenLink = join("_", $shortenLink);

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

            $query = "SELECT * FROM links WHERE shortenLink = '$shortenLink'";
            $result = mysqli_query($db, $query);
            $count_rows = mysqli_num_rows($result);

            if ($count_rows > 0) {
                echo "<script>
                    $(document).ready(function(){
                        swal('Custom Name Not Available !!','','error');
                    });
                </script>";
            } else {
                $query = "SELECT * FROM links WHERE uniqueNo = '$uno' AND originalLink = '$originalLink'";
                $result = mysqli_query($db, $query);
                $row = mysqli_fetch_array($result);
                $count_rows = mysqli_num_rows($result);

                if ($count_rows > 0) {
                    echo "<script>window.location.replace('./alreadyOriginal.php?username={$_GET['username']}&uno={$_GET['uno']}&linkID={$row['linkID']}')</script>";
                } else {
                    $sql = "INSERT INTO links (uniqueNo, linkIsFor, originalLink, shortenLink) VALUES ('$uno', '$linkIsFor', '$originalLink', '$shortenLink')";
                    $result = mysqli_query($db, $sql);

                    if ($result) {
                        echo "<script>
                            $(document).ready(function(){
                                swal('Successfully Created !!','','success').then(function() {
                                    window.location = './index.php?username={$_GET['username']}&uno={$_GET['uno']}';
                                });
                            });
                        </script>";
                    } else {
                        echo "<script>
                            $(document).ready(function(){
                                swal('Try Again !!','','error');
                            });
                        </script>";
                    }
                }
            }
        } else {
            echo "<script>
                $(document).ready(function(){
                    swal('Enter a Valid URL !!','','info');
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
                            <h4 class="page-title">Make New Link</h4>
                            <a href="./index.php?username=<?php echo $username ?>&uno=<?php echo $uno ?>"><button
                                    type="" class="btn btn-success waves-effect waves-light"
                                    style="position: absolute;top: 29px;right: 15px;">Shorten Links</button></a>
                        </div>
                    </div>
                </div>

                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-md-12 col-xl-12">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="alert alert-success alert-dismissible fade show d-flex align-items-center"
                                    role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <i class="mdi mdi-information-outline font-32"></i><strong>Shorty</strong>
                                </div>

                                <h4 class="mt-0 header-title"></h4>
                                <p class="text-muted font-14"></p>

                                <form method="POST" id="newLink">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label></label>
                                                <div class="inputIconContainer">
                                                <i class="bi bi-globe"></i>
                                                <input type='text' class='form-control' id='linkIsFor' name='linkIsFor'
                                                    required placeholder='Link is for' maxlength='50' />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                              <div class="inputIconContainer">
                                              <i class="bi bi-link-45deg"></i>
                                              <input type="text" class="form-control" id="originalLink"
                                                    name="originalLink" required placeholder="Original Link" />
                                             </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">

                                        </div>
                                    </div>
                                    <!-- <div class="row"> -->
                                    <div class=" form-control col-md-12" id="customeNameInput">
                                        <div class="inputIconContainer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#0d42ff" class="bi bi-browser-chrome" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M16 8a8.001 8.001 0 0 1-7.022 7.94l1.902-7.098a2.995 2.995 0 0 0 .05-1.492A2.977 2.977 0 0 0 10.237 6h5.511A8 8 0 0 1 16 8ZM0 8a8 8 0 0 0 7.927 8l1.426-5.321a2.978 2.978 0 0 1-.723.255 2.979 2.979 0 0 1-1.743-.147 2.986 2.986 0 0 1-1.043-.7L.633 4.876A7.975 7.975 0 0 0 0 8Zm5.004-.167L1.108 3.936A8.003 8.003 0 0 1 15.418 5H8.066a2.979 2.979 0 0 0-1.252.243 2.987 2.987 0 0 0-1.81 2.59ZM8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
</svg>

<span class="form-group" id="formSpan">
                                              <label><strong>
                                                <?php echo $env_domain ?>
                                              </strong></label>
                                             <span>   
                                                <input type="text" placeholder="Custom Name"
                                                style="border:0px;" required id="shortenLink"
                                                name="shortenLink" /></span>
                                                
                                            </span>
                                        </div>
                                   
                                         
                                    </div>




                                    <br>
                                    <br>


                                    <div class="row">
                                        <div class="col-md-6 text-center">
                                            <div class="form-group mb-0">
                                                <div>
                                                    <button type="button" name="generateRandom" id="generateRandom"
                                                        class="btn btn-success waves-effect waves-light">
                                                        Random Number
                                                    </button>

                                                    <button class=' btn btn-primary new' type='button' id="previewBtn"
                                                        hidden data-toggle='modal' data-target='#myModal'
                                                        onclick=join()>Preview</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <div class="col-md-6 ">
                                            <div class="form-group mb-0">
                                                <div>
                                                    <button type="submit" name="submit" id="submit"
                                                        class="btn btn-success waves-effect waves-light">
                                                        Create
                                                    </button>


                                                    <button type="reset" class="btn btn-danger waves-effect m-l-5">
                                                        Cancel
                                                    </button>
                                                </div>
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


    <!-- *************************** Generate Random Number   *****************************  -->

    <script>
        document.querySelector('#generateRandom').addEventListener('click', function () {
            var randNum = Array.from({ length: 6 }, () => Math.floor(Math.random() * 16).toString(16)).join('');
          //  console.log(randNum);
            let v = document.querySelector('#shortenLink').value = randNum;
            var previewBtn = document.querySelector('#previewBtn');

            // dispatching input event to the field so to remove the star symbol
            document.querySelector('#shortenLink').dispatchEvent(new Event('input'))
            if (v.trim().length != 0) {
                previewBtn.removeAttribute("hidden");
            } else {
                previewBtn.setAttribute("hidden", true);
            }
        });
    </script>

    <!-- *************************** Generate Random Number ends  *****************************  -->



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
          //  console.log(new_text);

        }
    </script>

    <!-- *************************** Get preview modal ends   *****************************  -->
    <!-- *************************** Block SpecialChar   *****************************  -->
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
          //  console.log(v.trim().length);
            if (v.trim().length != 0) {
                previewBtn.removeAttribute("hidden");
            } else {
                previewBtn.setAttribute("hidden", true);
            }


        });
    </script>
    <!-- *************************** Block SpecialChar Ends  *****************************  -->

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
