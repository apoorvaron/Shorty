<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Make New Link - Baga</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="themesdesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/baga-logo.gif">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <style>
            input:focus {
                outline: none;
            } 
        </style>
    </head>
        <!-- jQuery CDN -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <?php
        if(isset($_POST['submit'])){
            require('../admin/dBconn/database.php');
            $database = new Database();
            $db = $database->connect();
        
            $uno = $_GET['uno'];
            $linkIsFor = $_POST['linkIsFor'];
            $originalLink = $_POST['originalLink'];
            $short = $_POST['shortenLink'];
            $shortenLink = "http://micro.epizy.com/".$short;


            $sql = "INSERT INTO `links` (`uniqueNo`,`linkIsFor`, `originalLink`, `shortenLink`) VALUES ('$uno','$linkIsFor', '$originalLink', '$shortenLink')";
            $result = mysqli_query($db,$sql);
            if($result){
                echo "<script>alert('Successfully Created !!')</script>";
            }else{
                    echo "<script>alert('Try Again !!')</script>";
            }
    
            // echo "<br><br><br><br><br><br><br>eqfwgretgfnerwqedgnretrqthdgjrwteqwrhdgtehryw".$result;
            
          
        }
    ?>

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
                                        <h4 class="page-title">Make New Link</h4>
                                       <a href=""><button type="submit" class="btn btn-warning waves-effect waves-light" style="position: absolute;top: 29px;right: 15px;">Login as Admin</button></a>
                                    </div>
                                </div>
                            </div>

                            <!-- end page title end breadcrumb -->
                            <div class="row">
                                <div class="col-md-12 col-xl-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Link Shortener</h4>
                                            <p class="text-muted font-14">A website that reduces the length of your URL (Uniform Resource Locator).The idea is to minimize the web page address into something that's easier to remember and track.</p>
            
                                            <form  method="POST"  >
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Link is for</label>
                                                        <input type="text"  class="form-control" id="linkIsFor" name="linkIsFor" required placeholder="Link is for"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Original Link</label>
                                                        <input type="text"  class="form-control" id="originalLink" name="originalLink" required placeholder="Original Link"/>
                                                    </div>
                                                </div>
                                            </div>
                                  
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Shorten Link</label>
                                                </div>
                                            </div>
                                            <!-- <div class="row"> -->
                                                <div class=" form-control col-md-12"> 
                                                    <span class="form-group">
                                                        <label> <b>http://micro.epizy.com/</b> </label>
                                                        <span><input type="text" id="form3Example4"   placeholder="Custom Short Link" style="border:0px"  id="shortenLink" name="shortenLink"/></span>
                                                    </span>
                                                          
                                                </div>
                                            <!-- </div> -->



                                             
                                            <br>
                                           
                                            <div class="row">
                                                <div class="col-md-6 text-center">
                                                    <div class="form-group mb-0">
                                                        <div >
                                                            <button type="button" name="" id="" onclick="generateRandom()" class="btn btn-success waves-effect waves-light">
                                                                Generate Random Number
                                                            </button>
                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>

                                            <div class="row">
                                                <div class="col-md-6 ">
                                                    <div class="form-group mb-0">
                                                        <div >
                                                            <button type="submit" name="submit" id="submit" class="btn btn-success waves-effect waves-light">
                                                                Submit
                                                            </button>
                                                         
                                                 
                                                            <button  type="reset" class="btn btn-danger waves-effect m-l-5">
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