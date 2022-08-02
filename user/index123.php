<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Membership - Baga</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="themesdesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="../assets/images/logout-logo.png">

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
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Membership</h4>
                                            <p class="text-muted  font-14">The Buttons extension for DataTables
                                                provides a common set of options, API methods and styling to display
                                                buttons on a page that will interact with a DataTable. The core library
                                                provides the based framework upon which plug-ins can built.
                                            </p>
            
                                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap table_wrapper" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                                <thead>
                                                <tr>
                                                    <th>Sl.No</th>
                                                    <th>Name</th>
                                                    <th>Membership Type</th>
                                                    <th>Membership Date</th>
                                                    
                                                    <th>Membership Fee</th>
                                                    <th>BSC interested</th>
                                                    <th>Age Group</th>
                                                    <th>BYC interested</th>
                                                    <th>Occupation</th>
                                                    <th>payment Method</th>
                                                    <th>Email Id</th>
                                                    <th>Mobile No.</th>
                                                    <th>Address</th>
                                                    <th>City</th>
                                                    <th>State</th>
                                                    <th>Zipcode</th>
                                                    <th>Edit</th>
                                                  
                                                </tr>
                                                </thead>
            
            
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Rakesh</td>
                                                    <td>Family</td>
                                                    <td>04-02-2022</td>
                                                   
                                                    <td>$285.00</td>
                                                    <td>Yes</td>
                                                    <td>15 - 18</td>
                                                    <td>Yes</td>
                                                    <td>Business</td>
                                                    <td>Credit Card</td>
                                                    <td>admin@gmail.com</td>
                                                    <td>0123456789</td>
                                                    <td>Saltlake sector 5</td>
                                                    <td>Kolkata</td>
                                                    <td>West Bengal</td>
                                                    <td>700091</td>
                                                    <td><button type="button" class="tabledit-edit-button btn btn-sm btn-light" style="float: none; margin: 5px;"><span class="ti-pencil"></span></button></td>
                                                   
                                                </tr>
                                               
                                                
                                               
                                                </tbody>
                                            </table>
            
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