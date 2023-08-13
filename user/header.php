<link rel="stylesheet" href="./assets/css/header.css">
<?php
session_start();

if ($_SESSION["uno"] == "") {
    echo "<script>window.location.replace('./logout.php')</script>";
    // header('location: ./login');
}

$now = time(); // Checking the time now when home page starts.

if ($now > $_SESSION['expire']) {
    session_destroy();
    echo "<script>window.location.replace('./logout.php')</script>";
    // header('location: ../');
}

?>

<?php
include_once '../admin/dBconn/database.php';
$database = new Database();
$db = $database->connect();

$uniqueNo = $_SESSION["uno"];

$sql = "SELECT * from users WHERE uniqueNo='" . $uniqueNo . "'";
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
            <a href="./" class="logo"><img
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
                    <a href="./"
                        class="waves-effect waves-light"><i class="mdi mdi-view-dashboard"></i><span> Shortened
                            Links</span></a>
                </li>
                <li>
                    <a href="newLink"
                        class="waves-effect waves-light"><i class="mdi mdi-tooltip-outline-plus"></i><span> Make New
                            Link</span></a>
                </li>

                <li>
                    <a href="profile"
                        class="waves-effect waves-light"><i class="mdi mdi-account"></i><span> Profile </span></a>
                </li>
                <li>
                    <a href="change-password"
                        class="waves-effect waves-light"><i class="ti-lock"></i><span> Change password </span></a>
                </li>
                <li>
                    <a href="./logout"
                        class="waves-effect waves-light"><i class="mdi mdi-logout"></i><span> Logout </span></a>
                </li>


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
                                href="profile"><i
                                    class="	far fa-address-card text-dark" aria-hidden="true"></i>
                                Profile</a>
                            <a class="dropdown-item text-danger" href="./logout"><i
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
                        $sql = "SELECT * FROM users WHERE uniqueNo='" . $uniqueNo . "'";
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

           
                });
            });  
        </script>
