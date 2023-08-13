<?php
error_reporting(0);
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
    <link rel="stylesheet" href="./assets/css/btn-new.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>

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
                            <h4 class="page-title">Shortened Links</h4>

                            <a href="newLink"><button
                                    type="submit"
                                    class="btn btn-success waves-effect waves-light btn-new position-absolute top-29 right-15">Make New Link</button></a>
                        </div>
                    </div>
                </div>

                <!-- end page title end breadcrumb -->



                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="mt-0 header-title">Your Links</h3>
                                <p class="text-muted  font-14">Here , You can edit , delete or make new customised
                                    shorted links.
                                </p>

                                <table id="datatable-buttons"
                                    class="table table-striped table-bordered dt-responsive nowrap table table-bordered w-full text-align-center">

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
                                    <?php
                                    $database = new Database();
                                    $db = $database->connect();
                                    $sno = 1;
                                    $uno = $_SESSION["uno"];
                                    $sql = "SELECT * FROM links WHERE uniqueNo='" . $uno . "' ORDER BY linkID DESC ";
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
                <td><a class='text-green' target='_blank' href='" . $env_domain . "" . $row['shortenLink'] . "'>" . $env_domain . "" . $row['shortenLink'] . "</a></td>
                <td>" . $row['clicks'] . "</td>
                <td class='text-center'>
                      <i id='copyIcon" . $sno . "' class='fa fa-files-o copy-icon cursor-pointer' aria-hidden='true'  onclick='copyLink(\"" . $env_domain . "" . $row['shortenLink'] . "\", " . $sno . ")'></i>
                </td>
                <td><a href='./preview?linkID=" . $row['linkID'] . "'> <button type='button' class='tabledit-edit-button btn btn-sm btn-ligh float-none m-5px'><span class='ti-pencil'></span></button></a></td>
                <td><a href='./successDelete?linkID=" . $row['linkID'] . "' class='tabledit-delete-button btn btn-sm btn-light float-none m-5px' ><span class='ti-trash text-danger'></span></a></td>
            </tr>";
                                                $sno++;
                                            }
                                            mysqli_free_result($result);
                                        } else {
                                            echo "<p class='lead'><em></em></p>";
                                        }
                                    } else {
                                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                                    }
                                    ?>




                                    </tbody>
                                </table>



                                <!-- **********************************************       GET API           ********************************************** -->


                                <!-- <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%; text-align:center;">
                                                <thead >
                                                <tr>
                                                    <th>Sl.No</th>
                                                    <th>Link is For</th>
                                                    <th>Original Link</th>
                                                </tr>
                                                </thead>
                                                <tbody id="linkPage">
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Docs</td>
                                                        <td>https://docs.google.com/spreadsheets/</td>
                                                    </tr>
                                                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                                                    <script>
                                                            let urllink = '../admin/dBconn/api.php?q=getLinks';

                                                            let linkPage=document.getElementById("linkPage");
                                                            // linkPage.innerHTML="";
                                                            let sno = 1;
                                                            $(document).ready(function() {
                                                                $.ajax({
                                                                    url: urllink,
                                                                    method: 'GET',
                                                                    dataType: 'JSON',
                                                                    success: function(data) {
                                                                       // console.log("check data ywar",data);
                                                                        data.forEach(allEvent);                    
                                                                        function allEvent(event) {
                                                                            
                                                                            // console.log(event.linkID);
                                                                            // linkPage.innerHTML+=`${event.linkID}`;
                                                                            linkPage.innerHTML+=`<tr>
                                                                                                    <td>${sno}</td>
                                                                                                    <td>${event.linkIsFor}</td>
                                                                                                    <td>${event.originalLink}</td>  
                                                                                                </tr>`;
                                                                            sno++;
                                                                                        
                                                                        } 
                                                        
                                                        
                                                                    },error: function(xhr, status, error){
                                                                      //  console.log("No");
                                                                    },
                                                                });
                                                            });
                                                    </script>  
                                                </tbod>
                                            </table> -->

                                <!-- **********************************************       GET API Ends        ********************************************** -->




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

        function copyLink(word, sno) {
            // console.log(word);

            // Check if navigator.clipboard is supported or not
            if (navigator.clipboard && navigator.clipboard.writeText) {
                navigator.clipboard.writeText(word).then(() => {
                    // Show copied icon for main copy button
                    const copyIcon = document.getElementById("copyIcon" + sno);
                    copyIcon.classList.remove("fa-files-o");
                    copyIcon.classList.add("fa-check");

                    // Show copied icon for spanWithCopyIcon if it exists
                    const spanWithCopyIcon = document.querySelector(`span.dtr-data i#copyIcon${sno}`);
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
                const copyIcon = document.getElementById("copyIcon" + sno);
                copyIcon.classList.remove("fa-files-o");
                copyIcon.classList.add("fa-check");

                // Show copied icon for spanWithCopyIcon if it exists
                const spanWithCopyIcon = document.querySelector(`span.dtr-data i#copyIcon${sno}`);
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