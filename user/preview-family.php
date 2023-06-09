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
            
                                            <h4 class="mt-0 header-title">Preview</h4>
<!--
                                            <p class="text-muted font-14">Here are examples of <code
                                                    class="highlighter-rouge">.form-control</code> applied to each
                                                textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code
                                                        class="highlighter-rouge">type</code>.</p>
-->
            
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="Rakesh" id="example-text-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Email Id</label>

                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="admin@gmail.com" id="example-text-input" disabled>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="example-email-input" class="col-sm-2 col-form-label">Membership Type</label>
                                                <div class="col-sm-10">
                                                    <div class="form-group ">
                                                    
                                                        <select class="form-control">
                                                            <option>Select</option>
                                                            <option>Family</option>
                                                            <option>Couple</option>
                                                            <option>Single Parent</option>
                                                            <option>Individual</option>
                                                            <option>Student Family</option>
                                                            <option>Student Couple</option>
                                                            <option>Student Single Parent</option>
                                                            <option>Student Individual</option>
                                                            <option>Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-url-input" class="col-sm-2 col-form-label">Membership Date</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="url" value="04-02-2022" id="example-url-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-tel-input" class="col-sm-2 col-form-label">Membership Fee</label>

                                                <div class="col-sm-10">
                                                    <input class="form-control" type="tel" value="$285.00" id="example-tel-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-password-input" class="col-sm-2 col-form-label">BSC interested</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control">
                                                        <option>Select</option>
                                                        <option>Yes</option>
                                                        <option>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-number-input" class="col-sm-2 col-form-label">Age Group</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control">
                                                            <option>Select</option>
                                                           <option>6 - 11</option>
                                                            <option>12 - 14</option>
                                                            <option>15 - 18</option>
                                                            <option>19 - 23</option>
                                                            
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-datetime-local-input" class="col-sm-2 col-form-label">BYC interested</label>
                                                 <div class="col-sm-10">
                                                    <select class="form-control">
                                                        <option>Select</option>
                                                        <option>Yes</option>
                                                        <option>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-date-input" class="col-sm-2 col-form-label">Occupation</label>
                                                <div class="col-sm-10">
                                                   <select class="form-control">
                                                            <option>Select</option>
                                                            <option>Business</option>
                                                            <option>Engineer</option>
                                                            <option>Scientist</option>
                                                            <option>Software</option>
                                                            <option>Teaching</option>
                                                            <option>Retired</option>
                                                            <option>Real Estate</option>
                                                            <option>House Wife</option>
                                                            <option>Insurance</option>
                                                            <option>Lawyer</option>
                                                            <option>Others</option>
                                                        </select>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="example-week-input" class="col-sm-2 col-form-label">Address</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="Salt lake, Kolkata" id="example-week-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-time-input" class="col-sm-2 col-form-label">City</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="kolkata" id="example-time-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-time-input" class="col-sm-2 col-form-label">State</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="West Bengal" id="example-time-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-time-input" class="col-sm-2 col-form-label">Zipcode</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="789456" id="example-time-input">
                                                </div>
                                            </div>
                                            
                         


                      
                                           
                                           <div class="col-md-12 text-center">
                                                    <div class="form-group mb-0">
                                                        <div>
                                                           <a href="#"> <button type="submit" class="btn btn-success waves-effect waves-light">
                                                                Update
                                                               </button></a>
                                                            <a href="../thankyou.php"><button type="reset" class="btn btn-danger waves-effect m-l-5">
                                                                Pay Now
                                                                </button></a>
                                                        </div>
                                                    </div>
                                                </div>
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