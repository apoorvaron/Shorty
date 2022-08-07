<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Preview member</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="themesdesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/baga-logo.gif">

        <!-- DataTables -->
        <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" /> 

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
<style>
.table_wrapper{
    display: block;
    overflow-x: auto;
    white-space: nowrap;
}        
</style>
    </head>
    <?php
        if(isset($_POST['submit'])){
            // echo "<br><br><br><br><br><br><br><br>erthjg,hgrwetqrtjfhkmjgdeqrw  etsjfhkmjgdrtwerjfhkg,hkfte".$sql;

            require('../admin/dBconn/database.php');
            $database = new Database();
            $link = $database->connect();
        
            $username = $_POST['username'];
            $email = $_POST['email'];
            $user = $_GET['username'];
            $uno = $_GET['uno'];
     
            $sql = "UPDATE users SET username = '".$username."' ,email = '".$email." 'WHERE username='".$user."';";
            // echo "<br><br><br><br><br><br><br><br>erthjg,hgrwetqrtjfhkmjgdeqrw  etsjfhkmjgdrtwerjfhkg,hkfte".$sql;
            $result = mysqli_query($link,$sql);

            session_start();
            ob_start();
            $_SESSION["".$username.""]="".$username."";


            if($result==1){
                echo "<script>alert('Successfully Updated !!')</script>";
                echo "<script>window.location.replace('./index.php?username=".$username."&uno=".$_GET['uno']."')</script>";

            }else{
                echo "<script>alert('Email or Username Already Exist !!')</script>";
            }
      
            

        }
    ?>

    <body class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">

            <?php include'header.php';?>
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

                                                $sql = "SELECT * FROM users WHERE username='".$_GET['username']."'";
                                                if($result = mysqli_query($db, $sql)){
                                                    if(mysqli_num_rows($result) > 0){
                                                           $row = mysqli_fetch_array($result);
                                                        echo "
                                                        <form method='POST'>
                                                            <div class='form-group row'>
                                                                <label for='example-text-input' class='col-sm-2 col-form-label'>Username</label>
                                                                <div class='col-sm-10'>
                                                                    <input class='form-control' type='text' value='".$row['username']."' id='username' name='username' >
                                                                </div>
                                                            </div>
                                                            <div class='form-group row'>
                                                                <label for='example-text-input' class='col-sm-2 col-form-label'>Email</label>
                
                                                                <div class='col-sm-10'>
                                                                    <input class='form-control' type='text' value='".$row['email']."' id='email' name='email' >
                                                                </div>
                                                            </div>
                                                            <div class='form-group row'>
                                                                <label for='example-text-input' class='col-sm-2 col-form-label'>Your Image </label>
                
                                                                <div class='col-sm-10'>
                                                       
                                                                    <img style='border-radius:50%; height:10rem;' src='".$row['img']."' alt=''>
                                                                </div>
                                                            </div>
                                                            <div class='col-md-12 text-center'>
                                                            <div class='form-group mb-0'>
                                                             
                                                                <div>
                                                                    
                                                                    <button type='submit' name='submit' id='submit' class='btn btn-success waves-effect waves-light'>
                                                                        Edit 
                                                                       </button>
                                                                    <a href='./index.php?username=".$username."&uno=".$uno."'><button type='reset' class='btn btn-danger waves-effect m-l-5'>
                                                                        Cancel
                                                                        </button></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </form>

                                                        ";
                                                        mysqli_free_result($result);
                                                    } else{
                                                        echo "<p class='lead'><em>No Record Found.</em></p>";
                                                    }
                                                } else{
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