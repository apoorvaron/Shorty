<?php
include(__DIR__ . '/../env.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>User Panel</title>
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
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>
    <link rel="stylesheet" href="./assets/css/btn-new.css">

    <!-- sweet alert css -->
    <link rel="stylesheet" href="../assets/css/sweetAlertButton.css">
    
    <!-- sweet alert js -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>



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
                            <h1 class="page-title text-center">Your Link has been shortened previously.</h1>

                            <a href="newLink"><button
                                    type="submit" class="btn btn-success waves-effect waves-light btn-new"
                                    style="position: absolute;top: 29px;right: 15px;">Make New Link</button></a>
                        </div>
                    </div>
                </div>

                <!-- end page title end breadcrumb -->



                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">

                                <h3 class="mt-0 header-title"></h3>
                                <p class="text-muted  font-14">
                                </p>

                                <table id="datatable-buttons"
                                    class="table table-striped table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%; text-align:center;">

                                    <thead>
                                        <tr>
                                            <th>Sl.No</th>
                                            <th>Link is For</th>
                                            <th>Original</th>
                                            <th>Shortened</th>
                                            <th>Clicks</th>
                                            <th>Copy</th>
                                            <th>Edit</th>
                                            <th>Delete</th>



                                        </tr>


                                    </thead>


                                    <tbody>

                                        <?php
                                        // require('../admin/dBconn/database.php');
                                        $database = new Database();
                                        $db = $database->connect();
                                        $sno = 1;
                                        $uno = $_SESSION["uno"];
                                        $linkID = $_GET['linkID'];

                                        if (!ctype_digit($linkID)) {

                                                //Alert Message 
                                                $msz = "Unauthorized Access !!";
                                                $type = "error";
                                                $redirection = "./";
                                                include "./swal.php";
                                        }
                                        $sql = "SELECT * FROM links WHERE uniqueNo='" . $uno . "' AND linkID='" . $linkID . "'";
                                    

                                        if ($result = mysqli_query($db, $sql)) {
                                            if (mysqli_num_rows($result) > 0) {
                                                while ($row = mysqli_fetch_array($result)) {
                                                    if(strlen($row['originalLink'])>30){
                                                        $row['originalLink'] = substr($row['originalLink'], 0, 20);
                                                        $row['originalLink'] .="...";
                                                    }
                                                    echo "
                                                                        <tr>
                                                                        <td>" . $sno . "</td>
                                                                        <td>" . $row['linkIsFor'] . "</td>
                                                                        <td>" . $row['originalLink'] . "</td>
                                                                        <td ><a style='color:green;' target='_blank' href='" . $env_domain . "" . $row['shortenLink'] . "'>" . $env_domain . "" . $row['shortenLink'] . "</a></td>
                                                                        <td>" . $row['clicks'] . "</td>
                                                                        <td class='text-center'>
                                                                            <i id='copyIcon' class='fa fa-files-o copy-icon' aria-hidden='true' style='cursor: pointer;' onclick='copyLink(\"" . $env_domain . "" . $row['shortenLink'] . "\")'></i>
                                                                        </td>
                                                                      
                                                                        <td><a href='./preview?linkID=" . $row['linkID'] . "'> <button type='button' class='tabledit-edit-button btn btn-sm btn-light' style='float: none; margin: 5px'><span class='ti-pencil'></span></button></a></td>
                                                                        <td><a href='./successDelete?linkID=" . $row['linkID'] . "'  class='tabledit-delete-button btn btn-sm btn-light' style='float: none; margin: 5px;'><span class='ti-trash text-danger'></span></a></td>
                                                                        
                                                                        </tr>
                                                                            ";
                                                    $sno++;
                                                }
                                                mysqli_free_result($result);
                                            } else {

                                                    //Alert Message 
                                                    $msz = "Unauthorized Access !!";
                                                    $type = "error";
                                                    $redirection = "./";
                                                    include "./swal.php";

                                            }
                                        } else {
                                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

                                        }
                                        ?>



                                    </tbody>
                                </table>

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

        function copyLink(word) {
            // console.log(word);

            // Check if navigator.clipboard is supported or not
            if (navigator.clipboard && navigator.clipboard.writeText) {
                navigator.clipboard.writeText(word).then(() => {
                    // Show copied icon for main copy button
                    const copyIcon = document.getElementById("copyIcon");
                    copyIcon.classList.remove("fa-files-o");
                    copyIcon.classList.add("fa-check");

                    // Show copied icon for spanWithCopyIcon if it exists
                    const spanWithCopyIcon = document.querySelector(`span.dtr-data i#copyIcon`);
                    if (spanWithCopyIcon) {
                        spanWithCopyIcon.classList.remove("fa-files-o");
                        spanWithCopyIcon.classList.add("fa-check");
                    }

                    setTimeout(() => {
                        // Restore the original icon after 1500ms
                        copyIcon.classList.remove("fa-check");
                        copyIcon.classList.add("fa-files-o");

                        // Restore the original icon for spanWithCopyIcon if it exists
                        if (spanWithCopyIcon) {
                            spanWithCopyIcon.classList.remove("fa-check");
                            spanWithCopyIcon.classList.add("fa-files-o");
                        }
                    }, 1500);
                }).catch((error) => {
                    console.error("Copying failed:", error);
                });
            } else {
                // console.log("2");

                var tempInput = document.createElement("input");
                tempInput.setAttribute("value", word);
                document.body.appendChild(tempInput);
                tempInput.select();
                document.execCommand("copy");
                document.body.removeChild(tempInput);

                // Show copied icon for main copy button
                const copyIcon = document.getElementById("copyIcon");
                copyIcon.classList.remove("fa-files-o");
                copyIcon.classList.add("fa-check");

                // Show copied icon for spanWithCopyIcon if it exists
                const spanWithCopyIcon = document.querySelector(`span.dtr-data i#copyIcon`);
                if (spanWithCopyIcon) {
                    spanWithCopyIcon.classList.remove("fa-files-o");
                    spanWithCopyIcon.classList.add("fa-check");
                }

                setTimeout(() => {
                    // Restore the original icon after 1500ms
                    copyIcon.classList.remove("fa-check");
                    copyIcon.classList.add("fa-files-o");

                    // Restore the original icon for spanWithCopyIcon if it exists
                    if (spanWithCopyIcon) {
                        spanWithCopyIcon.classList.remove("fa-check");
                        spanWithCopyIcon.classList.add("fa-files-o");
                    }
                }, 1500);
            }
        }

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
    <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
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