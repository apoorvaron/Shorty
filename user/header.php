<link rel="stylesheet" href="./assets/css/header.css">
<?php
$username = $_GET['username'];
$uno = $_GET['uno'];
session_start();
if ($_SESSION["" . $username . ""] == "") {
    echo "<script>window.location.replace('./logout.php?username=" . $_SESSION['username'] . "&uno=" . $_SESSION['uno'] . "')</script>";
}
if ($_SESSION["" . $uno . ""] == "") {
    echo "<script>window.location.replace('./logout.php?username=" . $_SESSION['username'] . "&uno=" . $_SESSION['uno'] . "')</script>";
    // header('location: ./login');
}

$now = time(); // Checking the time now when home page starts.

if ($now > $_SESSION['expire']) {
    session_destroy();
    echo "<script>window.location.replace('./logout.php?username=" . $_SESSION['username'] . "&uno=" . $_SESSION['uno'] . "')</script>";
    // header('location: ../');
}

?>

<?php
include_once '../admin/dBconn/database.php';
$database = new Database();
$db = $database->connect();

$username = $_GET['username'];
$uniqueNo = $_GET['uno'];

$sql = "SELECT * from users WHERE username='" . $username . "'";
$result = mysqli_query($db, $sql);

$row = mysqli_fetch_array($result);
$imgPath = $row['img'];

?>

<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left">
        <i class="ion-close"></i>
    </button>

    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            <!--<a href="index.html" class="logo"><i class="fa fa-paw"></i> Aplomb</a>-->
            <a href="index.php?username=<?php echo $username ?>&uno=<?php echo $uno ?>" class="logo"><img
                    class="mt-p10 border-radius-p30 " src="../assets/img/inside-header-logo.webp" height="100"
                    alt="logo"></a>
        </div>
    </div>


    <div class="sidebar-inner slimscrollleft" id="sidebar-main">
        <!-- Sidebar starts -->
        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">Menu</li>
                <!--

                            <li>
                                <a href="index.php" class="waves-effect waves-light"><i class="mdi mdi-view-dashboard"></i><span> Dashboard </span></a>
                            </li>
-->
                <li>
                    <a href="index.php?username=<?php echo $username ?>&uno=<?php echo $uno ?>"
                        class="waves-effect waves-light"><i class="mdi mdi-view-dashboard"></i><span> Shortened
                            Links</span></a>
                </li>
                <li>
                    <a href="newLink.php?username=<?php echo $username ?>&uno=<?php echo $uno ?>"
                        class="waves-effect waves-light"><i class="mdi mdi-tooltip-outline-plus"></i><span> Make New
                            Link</span></a>
                </li>
                <!--
                            <li>
                                <a href="member.php" class="waves-effect waves-light"><i class="mdi mdi-account-star"></i><span> Members </span></a>
                            </li>
-->

                <!--
                            <li>
                                <a href="renewal.php" class="waves-effect waves-light"><i class="mdi mdi-alert-circle-outline"></i><span> Renew </span></a>
                            </li>
-->
                <!-- <li>
                                <a href="transcations.php" class="waves-effect waves-light"><i class="mdi mdi-wallet"></i><span> Transaction </span></a>
                            </li> -->
                <li>
                    <a href="profile.php?username=<?php echo $username ?>&uno=<?php echo $uno ?>"
                        class="waves-effect waves-light"><i class="mdi mdi-account"></i><span> Profile </span></a>
                </li>
                <li>
                    <a href="change-password.php?username=<?php echo $username ?>&uno=<?php echo $uno ?>"
                        class="waves-effect waves-light"><i class="ti-lock"></i><span> Change password </span></a>
                </li>
                <li>
                    <a href="./logout.php?username=<?php echo $username ?>&uno=<?php echo $uno ?>"
                        class="waves-effect waves-light"><i class="mdi mdi-logout"></i><span> Logout </span></a>
                </li>

                <!--
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect waves-light"><i class="mdi mdi-email"></i><span> Email </span><span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="email-inbox.html"> Inbox</a></li>
                                    <li><a href="email-compose.html"> Compose Mail</a></li>
                                    <li><a href="email-read.html"> View Mail</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> Pages </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="pages-profile.html">Profile</a></li>
                                    <li><a href="pages-invoice.html">Invoice</a></li>
                                    <li><a href="pages-timeline.html">Timeline</a></li>
                                    <li><a href="pages-contact.html">Contact-List</a></li>
                                    <li><a href="pages-blank.html">Blank Page</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">Components</li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect waves-light"><i class="mdi mdi-bullseye"></i> <span> UI Elements </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="ui-alerts.html">Alerts</a></li>   
                                    <li><a href="ui-badge.html">Badge</a></li>
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-cards.html">Cards</a></li>
                                    <li><a href="ui-carousel.html">Carousel</a></li>
                                    <li><a href="ui-dropdowns.html">Dropdowns</a></li> 
                                    <li><a href="ui-grid.html">Grid</a></li>
                                    <li><a href="ui-modals.html">Modals</a></li>
                                    <li><a href="ui-navs.html">Navs</a></li>
                                    <li><a href="ui-pagination.html">Pagination</a></li>
                                    <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                    <li><a href="ui-popover-tooltips.html">Popover & Tooltips</a></li>
                                    <li><a href="ui-rangeslider.html">Range Slider</a></li>
                                    <li><a href="ui-rating.html">Rating</a></li>
                                    <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                    <li><a href="ui-typography.html">Typography</a></li>                                    
                                    <li><a href="ui-sweet-alert.html">Sweet-Alert</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect waves-light"><i class="mdi mdi-table"></i><span> Tables </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="tables-basic.html">Basic Tables</a></li>
                                    <li><a href="tables-datatable.html">Data Table</a></li>
                                    <li><a href="tables-responsive.html">Responsive Table</a></li>
                                    <li><a href="tables-editable.html">Editable Table</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect waves-light"><i class="mdi mdi-clipboard-outline"></i><span> Forms </span> <span class="badge badge-pill badge-info float-right">4</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="form-elements.html">Form Elements</a></li>
                                    <li><a href="form-advanced.html">Form Advanced</a></li>
                                    <li><a href="form-validation.html">Form Validation</a></li>
                                    <li><a href="form-summernote.html">Summernote</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect waves-light"><i class="mdi mdi-cards-outline"></i> <span> Icons </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                                    <li><a href="icons-themify.html">Themify Icons</a></li>
                                    <li><a href="icons-material.html">Material Design</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect waves-light"><i class="mdi mdi-gauge"></i><span> Charts </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="charts-chartist.html">Chartist Chart</a></li>
                                    <li><a href="charts-morris.html">Morris Chart</a></li>
                                    <li><a href="charts-flot.html">Flot Chart</a></li>
                                    <li><a href="charts-c3.html">C3 Chart</a></li>
                                    <li><a href="charts-chartjs.html">Chartjs Chart</a></li>
                                    <li><a href="charts-other.html">Jquery Knob Chart</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">Extra</li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-map-marker-multiple"></i><span> Maps </span> <span class="badge badge-pill badge-warning float-right">2</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="maps-google.html"> Google Map</a></li>
                                    <li><a href="maps-vector.html"> Vector Map</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span>Authentication </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                                    <li><a href="pages-login.html">Login</a></li>
                                    <li><a href="pages-recoverpw.html">Recover Password</a></li>
                                    <li><a href="pages-register.html">Register</a></li>
                                    <li><a href="pages-404.html">Error 404</a></li>
                                    <li><a href="pages-500.html">Error 500</a></li>
                                </ul>
                            </li>
-->
            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
<!-- Left Sidebar End -->
<!-- Start right Content here -->

<div class="content-page">
    <!-- Start content -->
    <div class="content">

        <!-- Top Bar Start -->
        <div class="topbar">
            <nav class="navbar-custom">
                <ul class="list-inline float-right mb-0">
                    <!--
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <i class="ti-email noti-icon"></i>
                                        <span class="badge badge-danger noti-icon-badge">5</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                        
                                        <div class="dropdown-item noti-title">
                                            <h5><span class="badge badge-danger float-right">5</span>Messages</h5>
                                        </div>

                                      
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon"><img src="assets/images/users/avatar-2.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                            <p class="notify-details"><b>Charles M. Jones</b><small class="">Dummy text of the printing and typesetting industry.</small></p>
                                        </a>

                                       
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon"><img src="assets/images/users/avatar-3.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                            <p class="notify-details"><b>Thomas J. Mimms</b><small class="">You have 87 unread messages</small></p>
                                        </a>

                                      
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon"><img src="assets/images/users/avatar-4.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                            <p class="notify-details"><b>Luis M. Konrad</b><small class="">It is a long established fact that a reader will</small></p>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                    
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            View All
                                        </a>
                                    </div>
                                </li>
-->



                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light nav-user"
                            data-toggle="dropdown" href="" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="<?php echo $imgPath ?>" alt="user" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5>Welcome</h5>
                            </div>

                            <a class="dropdown-item text-dark"
                                href="profile.php?username=<?php echo $username ?>&uno=<?php echo $uno ?>"><i
                                    class="	far fa-address-card text-dark" aria-hidden="true"></i>
                                Profile</a>
                            <a class="dropdown-item text-danger" href="./logout.php"><i
                                    class="mdi mdi-power text-danger"></i> Logout</a>



                        </div>
                    </li>
                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-light waves-effect">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
                    <li class="hide-phone app-search mt-4">
                        <?php
                        // require('../admin/dBconn/database.php');
                        $database = new Database();
                        $link = $database->connect();
                        $sql = "SELECT * FROM users WHERE uniqueNo='" . $uno . "'";
                        if ($result = mysqli_query($db, $sql)) {
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_array($result)) {
                                    $row['email'] = strstr($row['email'], '@', true);
                                    echo "
                                                                        <h4 class='text-white'>Hello " . $row['email'] . " !</h4>
                                                                            ";

                                }
                                mysqli_free_result($result);
                            } else {
                                echo "<p class='lead'><em></em></p>";
                            }
                        } else {
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

                        }
                        ?>


                    </li>
                    <li class="mobile-hello-text app-search mt-4">
                        <h4 class="text-white">Hello User !</h4>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </nav>
        </div>

        <!-- Session expired model-->


        <!-- <div id="sstSessionModal" class="modal fade" tabindex="-1" role="dialog" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

        
                <h4 class="modal-title">Inactive Session Warning</h4>
            </div>
            <div class="modal-body">
              
                <p>Your session will expire in <strong id="sstSessionModalExpire"></strong> minutes due to inactivity.</p>
                <p>Please click continue to extend the session or log out.</p>
            </div>
            <div class="modal-footer">
                <button id="sstSessionModalContinue" type="button" class="btn btn-primary">Continue</button>
                <button id="sstSessionModalLogout" type="button" class="btn btn-default">Log Out</button>
            </div>
        </div>
    </div>
</div> -->
        <!-- /.modal -->

        <!--<button id="OpenModalButton" type="button" class="btn btn-primary">Open Session Modal</button>-->
        <script>
            var timeoutToken = 50, // in minutes
                maxSession = 60, // in minutes,
                secondDuration = 17, // in milliseconds
                countDown = maxSession,
                modalID = "sstSessionModal",
                sessionModalHeight = 0,
                modalMsgSuccess = "<p>Your session has been succesfully extended!</p>",
                modalMsgDefault,
                sessionModalInterval,
                sessionModalTimer;

            window.SSTIsUserActive = false;

            function isMobileTouch() {
                return 'ontouchstart' in window && (navigator.maxTouchPoints > 0 || navigator.msMaxTouchPoints > 0);
            }

            document.addEventListener("DOMContentLoaded", function () {
                jQuery(function ($) {
                    function sessionModalToggle(which) {
                        if (which) {
                            $("#" + modalID).modal("show");
                        } else {
                            setTimeout(function () {
                                $("#" + modalID).modal("hide");
                            }, 2000);
                        }
                    }

                    function sessionModalMsgUpdate(newMsg, closeAfter, closeCB) {
                        $("#" + modalID + " .modal-body").animate(
                            {
                                opacity: "0"
                            },
                            250,
                            function () {
                                $(this).html(newMsg);
                                $(this).animate(
                                    {
                                        opacity: "1"
                                    },
                                    250,
                                    function () {
                                        if (closeAfter && typeof closeAfter !== "undefined")
                                            sessionModalToggle(false);
                                        if (typeof closeCB !== "undefined") closeCB();
                                    }
                                );
                            }
                        );
                    }

                    function modalFooterToggle(mode) {
                        var footer = $("#" + modalID + " .modal-footer");
                        if (mode) footer.show();
                        else footer.hide();
                    }

                    function sessionModalTimer() {
                        countDown = maxSession;
                        clearInterval(sessionModalInterval);
                        sessionModalInterval = setInterval(function () {
                            countDown--;
                            $("#sstSessionModalExpire").text(countDown);

                            // console.log(countDown);
                            if (countDown === timeoutToken) {
                                if (window.SSTIsUserActive) {
                                    sessionModalRequest();
                                    sessionModalTimer();
                                } else
                                    sessionModalToggle(true);
                            } else if (countDown <= 1) {
                                clearInterval(sessionModalInterval);
                                // $("#sstSessionModalLogout")[0].click();
                            }
                        }, 60 * secondDuration);
                    }

                    // function sessionModalEvents() {
                    //     $("#sstSessionModalContinue," + "#" + modalID + " .close").on(
                    //         "click.sst",
                    //         sessionModalRequest
                    //     );
                    //     $("#sstSessionModalLogout").on("click.sst", function(evt) {
                    //         modalFooterToggle(false);
                    //         sessionModalMsgUpdate(
                    //             "Closing session. Please wait...",
                    //             true,
                    //             function() {
                    //                     setTimeout(function(){
                    //                         window.location.href = "login.php";
                    //                     }, 2000);                           
                    //             }
                    //         );
                    //     });
                    //     $("#" + modalID)
                    //         .on("show.bs.modal.sst", function() {
                    //             $("#sstSessionModalExpire").text(countDown);
                    //         })
                    //         .on("shown.bs.modal.sst", function() {
                    //             sessionModalHeight = $(
                    //                 "#" + modalID + " .modal-dialog"
                    //             ).height();
                    //         })
                    //         .on("hidden.bs.modal.sst", function() {
                    //             if (typeof modalMsgDefault !== "undefined")
                    //                 $("#" + modalID + " .modal-body").html(modalMsgDefault);
                    //             $("#" + modalID + " .modal-footer").show();
                    //             sessionModalTimer();
                    //             $("#" + modalID).removeClass("shown");
                    //         });

                    //     var usrEvts = ["scroll", "keyup"],
                    //         touchOrClick = isMobileTouch() ? ["touchend", "touchmove"] : ["click", "mouseover"];
                    //     usrEvts = usrEvts.concat(touchOrClick);
                    //     $(usrEvts).each(function(i,v){
                    //         usrEvts[i] = v + ".sst";
                    //     });
                    //     usrEvts = usrEvts.join(" ");
                    //     var activeTimeout;
                    //     $(document).on(usrEvts, function(evt){

                    //         // console.log(evt.type);
                    //         window.SSTIsUserActive = true;
                    //         if(activeTimeout === undefined){
                    //             // console.log("timeout UNDEFINED");
                    //             activeTimeout = setTimeout(function(){
                    //                 window.SSTIsUserActive = false;
                    //             }, 3 * 1000);
                    //         } else {

                    //             // console.log("CLEAR Timeout");
                    //             clearTimeout(activeTimeout);
                    //             activeTimeout = undefined;
                    //         }

                    //     });

                    //     // FOR DEMO ONLY 
                    //     // $(window).load(function() {
                    //     //     $("#OpenModalButton").on("click", function() {
                    //     //         $("#" + modalID).modal("show");
                    //     //     });
                    //     // });
                    // }

                    // function sessionModalRequest() {
                    //     var request = $.ajax({
                    //             url: "https://codepen.io/Marventus/pen/KmdGJp.html",
                    //             method: "GET",
                    //             dataType: "html"
                    //         })
                    //         .done(function(data) {
                    //             if (typeof modalMsgDefault === "undefined")
                    //                 modalMsgDefault = $("#" + modalID + " .modal-body").html();
                    //             $("#" + modalID + " .modal-footer").hide();
                    //             sessionModalMsgUpdate(modalMsgSuccess);
                    //         })
                    //         .fail(function(fail, textStatus) {
                    //             console.log(fail, textStatus);
                    //         })
                    //         .always(function(jqXHR, textStatus) {
                    //             console.log("request executed!");
                    //             setTimeout(function() {

                    //                 sessionModalToggle(false);
                    //                 sessionModalMsgUpdate(modalMsgDefault);
                    //             }, 2000);
                    //         });
                    // }

                    // function sessionModalInit() {
                    //     sessionModalTimer();
                    //     sessionModalEvents();
                    // }

                    // Init Session Modal
                    // sessionModalInit();
                });
            });  
        </script>
