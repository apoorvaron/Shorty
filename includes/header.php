<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="./" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <img src="./assets/img/inside-header-logo.png" alt="logo" style="border-radius: 10px;" />
            <!-- <h1  class="logo d-flex align-items-center" style="color:white;margin-left:10%">Shorty</h2> -->
        </a>
        <div class="alan-btn"></div>
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->



        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>

                <li><a href="./" id="homeLink">Home</a></li>
                <li><a href="./about" id="aboutusLink">About</a></li>
                <li><a href="./faq" id="faqLink">FAQ</a></li>
                <li><a href="./privacy" id="privacyLink">Privacy</a></li>

                <li class="navbar-spacing" style="margin-right: 50px;"></li>
                <!-- Add a list item for spacing -->

                <li>
                    <a class="get-a-quote" href="./user/login">Login</a>
                </li>
                <li>
                    <a class="get-a-quote" href="./user/register">Register</a>
                </li>
                <li>
                    <a class="get-a-quote" href="./guest">Guest</a>
                </li>

            </ul>
        </nav>
        <!-- .navbar -->
    </div>
</header>
<!-- End Header -->
<!-- End Header -->



<style>
    .alanBtn-root{
        right:10px !important;
        bottom:80px !important;
    }
  
    @media (max-width: 767px) {
        #navbar ul li {
            width: 150px;
            text-align: center;
            display: flex;
            justify-content: center;
            margin: 15px auto;
            color: #fff;
        }
    }
</style>


<script>
    // Get the current page URL
    var currentPageUrl = window.location.href;

    // Function to add the active class to the corresponding link
    function setActiveLink() {
        var homeLink = document.getElementById('homeLink');
        var faqLink = document.getElementById('faqLink');
        var privacyLink = document.getElementById('privacyLink');
        var aboutusLink = document.getElementById('aboutusLink'); 

        if (currentPageUrl.includes('/faq')) {
            faqLink.classList.add('active');
        } else if (currentPageUrl.includes('/privacy')) {
            privacyLink.classList.add('active');
        }
        else if (currentPageUrl.includes('/about')) {
            aboutusLink.classList.add('active');
        } 
        else {
            homeLink.classList.add('active');
        }
    }

    // Call the setActiveLink function on page load
    window.addEventListener('DOMContentLoaded', setActiveLink);
</script>

<script type="text/javascript" src="https://studio.alan.app/web/lib/alan_lib.min.js"></script>
<script>
    var alanBtnInstance = alanBtn({
        key: "<?php echo $env_chatbot; ?>",
        bottom: '50px',
        right: '100px',


        onCommand: function (commandData) {
            if (commandData && commandData.command === 'openURL') {
                if (commandData.target === '_blank') {
                    window.open(commandData.url, '_newtab' + Math.floor(Math.random() * 999999));
                } else {
                    window.location.href = commandData.url;
                }
            }

        },
        // onButtonState: async function (status) {
        //     if (status === "ONLINE") {
        //         if (!this.greetingWasSaid) {
        //             await alanBtnInstance.activate();
        //             this.greetingWasSaid = true;
        //         }
        //     }
        // },
        rootEl: document.getElementById("alan-btn"),
    });
   
</script>
