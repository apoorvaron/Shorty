<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Edit Member - Baga</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="themesdesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

   
  <link rel="icon" type="image/x-icon" href= "../assets/images/logout-logo.png">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    </head>


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
                                        
                                        <h4 class="page-title">Edit Member</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <div class="row">
                                
                                <div class="col-md-12 col-xl-12">
                                    
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                             <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                   <strong>If you don't have any children</strong>  you can choose other membership type.
                                                </div>
                                            <h4 class="mt-0 header-title">Edit Member</h4>
                                            <p class="text-muted font-14">Parsley is a javascript form validation
                                                library. It helps you provide your users with feedback on their form
                                                submission before sending it to your server.</p>
            
                                            <form class="" action="#">
                                                <div class="row">
                                                
                                                <div class="col-md-4">
                                                    <div class="form-group ">
                                                    <label>Membership Type</label>
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
                                                <div class="col-md-4">
                                                    <div class="form-group ">
                                                    <label>Advisory member</label>
                                                        <select class="form-control">
                                                            <option>Select</option>
                                                            <option>Yes</option>
                                                            <option>No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group ">
                                                    <label>Occupation</label>
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
                                                     <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>First Name</label>
                                                        <input type="text" class="form-control" required placeholder="First Name"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Last Name</label>
                                                        <input type="text" class="form-control" required placeholder="Last Name"/>
                                                    </div>
                                                </div>
                                               
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Email Id</label>
                                                        <div>
                                                            <input type="email" class="form-control" required placeholder="Enter a valid e-mail"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group ">
                                                    <label>BSC Interested</label>
                                                        <select class="form-control">
                                                            <option>Select</option>
                                                            <option>Yes</option>
                                                            <option>No</option>
                                                           
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group ">
                                                    <label>Age Group</label>
                                                        <select class="form-control">
                                                            <option>Select</option>
                                                           <option>6 - 11</option>
                                                            <option>12 - 14</option>
                                                            <option>15 - 18</option>
                                                            <option>19 - 23</option>
                                                            

                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group ">
                                                    <label>BYC Interested</label>
                                                        <select class="form-control">
                                                            <option>Select</option>
                                                            <option>Yes</option>
                                                            <option>No</option>
                                                            

                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                               
                                                
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Mobile Number</label>
                                                        <div>
                                                            <input data-parsley-type="digits" type="text"
                                                                    class="form-control" required
                                                                    placeholder="Enter only digits"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group ">
                                                    <label>City</label>
                                                        <select class="form-control">
                                                            <option>Select City</option>
                                                            <option>City 1</option>
                                                            <option>City 2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group ">
                                                    <label>State</label>
                                                        <select class="form-control">
                                                            <option>Select</option>
                                                            <option>State 1</option>
                                                            <option>State 2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Zipcode / pincode</label>
                                                        <div>
                                                            <input data-parsley-type="digits" type="text"
                                                                    class="form-control" required
                                                                    placeholder="Enter your pincode / zipcode"/>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <div>
                                                            <textarea required class="form-control" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                         <div class="col-md-12 text-center">
                                                    <div class="form-group mb-0">
                                                        <div>
                                                            <button type="submit" class="btn btn-success waves-effect waves-light">
                                                                Update
                                                            </button>
                                                            <button type="reset" class="btn btn-danger waves-effect m-l-5">
                                                                Cancel
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                            </form>
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