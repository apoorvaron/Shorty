<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <center>
        <div class="container ">
            <div class="row gy-4" style="justify-content: center;">
                <div class="col-lg-5 col-md-12 footer-info ">
                    <a href="index.html" class="logo d-flex align-items-center">

                    </a>

                    <div class="social-links d-flex mt-4" style="justify-content: center;padding-bottom: 3%;">
                        <a target="_blank" rel=”noopener noreferrer” aria-label="Follow Apoorv on Github"
                            title="Link to Github profile (External Link)" href="https://github.com/apoorvaron"
                            class="github">
                            <i class="bi bi-github"></i>
                        </a>
                        <a target="_blank" rel=”noopener noreferrer” aria-label="Follow Apoorv on LinkedIn"
                            title="Link to Linkedin profile (External Link)"
                            href="https://www.linkedin.com/in/apoorv-aron-742882212/" class="linkedin">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a target="_blank" rel=”noopener noreferrer” aria-label="Follow Apoorv on Twitter"
                            title="Link to Twitter profile (External Link)" href="https://twitter.com/AronApoorv"
                            class="twitter">
                            <i class="bi bi-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </center>

    <div class="container mt-4">
        <div class="copyright">
            &copy; Copyright <strong>
                <script>document.write(new Date().getFullYear());</script><span> <a target="_blank"
                        href="https://github.com/apoorvaron/tiny">Shorty</a> </span>
            </strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a target="_blank" href="https://github.com/apoorvaron">Apoorv Aron</a>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <script>
        function copy() {
            // console.log(document.querySelector('#shortInput').value);

            //check if navigator.clipboard is supported or not 
            if (navigator.clipboard && navigator.clipboard.writeText) {
                navigator.clipboard.writeText(document.querySelector('#shortInput').value);
            } else {
                var tempInput = document.createElement("input");
                tempInput.setAttribute("value", document.querySelector('#shortInput').value);
                document.body.appendChild(tempInput);
                tempInput.select();
                document.execCommand("copy");
                document.body.removeChild(tempInput);

            }
            let copyBtn = document.querySelector('#copyBtn');
            copyBtn.value = "Copied !!";
            copyBtn.classList.remove("btn-primary");
            copyBtn.classList.add("btn-success");
            setTimeout(() => {
                copyBtn.value = "Copy";
                copyBtn.classList.remove("btn-success");
                copyBtn.classList.add("btn-primary");
            }, 1500);


        }
        const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

        function generateString(length) {
            let result = '';
            const charactersLength = characters.length;
            for (let i = 0; i < length; i++) {
                result += characters.charAt(Math.floor(Math.random() * charactersLength));
            }

            return result;
        }
        function generateShorty() {

            let originalLink = document.querySelector('#originalLink').value;

            // Check original link was shortened previously 
            let urllink = "./admin/dBconn/api.php?q=getAlreadyShortened&originalLink=" + originalLink;
            let linkPage = document.getElementById("linkPage");
            $(document).ready(function () {
                $.ajax({
                    url: urllink,
                    method: 'GET',
                    dataType: 'JSON',
                    success: function (data) {
                        let avail = generateString(5);
                        console.log(data.length);
                        console.log(data);

                        // if link is previusly shortened 
                        if (data.length > 0) {
                            avail = data[0].shortenLink;
                        } else {
                            // if link is not previously shortened 
                        }
                        console.log(avail);
                        let regexp = /^(?:(?:https?|ftp):\/\/)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})))(?::\d{2,5})?(?:\/\S*)?$/;
                        if (regexp.test(originalLink)) {

                            let generateShorty = document.querySelector('#generateShorty');
                            let full_shortlink = "<?php echo $siteName ?>";
                            // full_shortlink.slice(0, -2);
                            // console.log(full_shortlink+avail);
                            generateShorty.innerHTML = `
                                                        <form
                                                              class="form-search d-flex align-items-stretch mb-3"
                                                              data-aos="fade-up"
                                                              data-aos-delay="200"
                                                        >
                                                              <input type="text" id="shortInput" disabled style="font-size: 0.9rem;" disbaled class="form-control" placeholder="" value="<?php echo $siteName ?>${avail}"/>
                                                              <input class="btn btn-primary" type="button" onclick="copy()" id="copyBtn" value="Copy">
                                                        </form>
                              `;

                            let originalLink = document.querySelector('#originalLink').value;

                            var formData = new FormData();
                            formData.append('originalLink', originalLink);
                            // formData.append('shortenLink', avail);


                            // for (const value of formData.values()) {
                            // // console.log(value);

                            // }   


                            let url = "./admin/dBconn/api.php/?q=shorty&shortenLink=" + avail;
                            $.ajax({
                                type: "POST",
                                url: "./admin/dBconn/api.php/?q=shorty&shortenLink=" + avail,
                                data: formData,
                                cache: false,
                                processData: false,
                                contentType: false,
                                success: function (data) {
                                    console.log("success");
                                },
                                error: function (xhr, status, error) {
                                    console.log("No");
                                },
                            });







                        } else {

                            swal("Enter Valid URL !!", "", "error");
                        }

                    }, error: function (xhr, status, error) {
                        console.log("No");
                    },
                });
            });





            // console.log(Boolean(new URL(originalLink)));





        }


        function generateShorty() {

            let originalLink = document.querySelector('#originalLink').value;

            // Check original link was shortened previously 
            let urllink = "./admin/dBconn/api.php?q=getAlreadyShortened&originalLink=" + originalLink;
            let linkPage = document.getElementById("linkPage");
            $(document).ready(function () {
                $.ajax({
                    url: urllink,
                    method: 'GET',
                    dataType: 'JSON',
                    success: function (data) {
                        let avail = generateString(5);
                        console.log(data.length);
                        console.log(data);

                        // if link is previusly shortened 
                        if (data.length > 0) {
                            avail = data[0].shortenLink;
                        } else {
                            // if link is not previously shortened 
                        }
                        console.log(avail);
                        let regexp = /^(?:(?:https?|ftp):\/\/)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})))(?::\d{2,5})?(?:\/\S*)?$/;
                        if (regexp.test(originalLink)) {

                            let generateShorty = document.querySelector('#generateShorty');
                            let full_shortlink = "<?php echo $siteName ?>";
                            // full_shortlink.slice(0, -2);
                            // console.log(full_shortlink+avail);
                            generateShorty.innerHTML = `
                                                        <form
                                                              class="form-search d-flex align-items-stretch mb-3"
                                                              data-aos="fade-up"
                                                              data-aos-delay="200"
                                                        >
                                                              <input type="text" id="shortInput" disabled style="font-size: 0.9rem;" disbaled class="form-control" placeholder="" value="<?php echo $siteName ?>${avail}"/>
                                                              <input class="btn btn-primary" type="button" onclick="copy()" id="copyBtn" value="Copy">
                                                        </form>
                              `;

                            let originalLink = document.querySelector('#originalLink').value;

                            var formData = new FormData();
                            formData.append('originalLink', originalLink);
                            // formData.append('shortenLink', avail);


                            // for (const value of formData.values()) {
                            // // console.log(value);

                            // }   


                            let url = "./admin/dBconn/api.php/?q=shorty&shortenLink=" + avail;
                            $.ajax({
                                type: "POST",
                                url: "./admin/dBconn/api.php/?q=shorty&shortenLink=" + avail,
                                data: formData,
                                cache: false,
                                processData: false,
                                contentType: false,
                                success: function (data) {
                                    console.log("success");
                                },
                                error: function (xhr, status, error) {
                                    console.log("No");
                                },
                            });







                        } else {

                            swal("Enter Valid URL !!", "", "error");
                        }

                    }, error: function (xhr, status, error) {
                        console.log("No");
                    },
                });
            });





            // console.log(Boolean(new URL(originalLink)));





        }

        function generateShorty() {

            let originalLink = document.querySelector('#originalLink').value;

            // Check original link was shortened previously 
            let urllink = "./admin/dBconn/api.php?q=getAlreadyShortened&originalLink=" + originalLink;
            let linkPage = document.getElementById("linkPage");
            $(document).ready(function () {
                $.ajax({
                    url: urllink,
                    method: 'GET',
                    dataType: 'JSON',
                    success: function (data) {
                        let avail = generateString(5);
                        console.log(data.length);
                        console.log(data);

                        // if link is previusly shortened 
                        if (data.length > 0) {
                            avail = data[0].shortenLink;
                        } else {
                            // if link is not previously shortened 
                        }
                        console.log(avail);
                        let regexp = /^(?:(?:https?|ftp):\/\/)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})))(?::\d{2,5})?(?:\/\S*)?$/;
                        if (regexp.test(originalLink)) {

                            let generateShorty = document.querySelector('#generateShorty');
                            let full_shortlink = "<?php echo $siteName ?>";
                            // full_shortlink.slice(0, -2);
                            // console.log(full_shortlink+avail);
                            generateShorty.innerHTML = `
                                            <form
                                                  class="form-search d-flex align-items-stretch mb-3"
                                                  data-aos="fade-up"
                                                  data-aos-delay="200"
                                            >
                                                  <input type="text" id="shortInput" disabled style="font-size: 0.9rem;" disbaled class="form-control" placeholder="" value="<?php echo $siteName ?>${avail}"/>
                                                  <input class="btn btn-primary" type="button" onclick="copy()" id="copyBtn" value="Copy">
                                            </form>
                  `;

                            let originalLink = document.querySelector('#originalLink').value;

                            var formData = new FormData();
                            formData.append('originalLink', originalLink);
                            // formData.append('shortenLink', avail);


                            // for (const value of formData.values()) {
                            // // console.log(value);

                            // }   


                            let url = "./admin/dBconn/api.php/?q=shorty&shortenLink=" + avail;
                            $.ajax({
                                type: "POST",
                                url: "./admin/dBconn/api.php/?q=shorty&shortenLink=" + avail,
                                data: formData,
                                cache: false,
                                processData: false,
                                contentType: false,
                                success: function (data) {
                                    console.log("success");
                                },
                                error: function (xhr, status, error) {
                                    console.log("No");
                                },
                            });







                        } else {

                            swal("Enter Valid URL !!", "", "error");
                        }

                    }, error: function (xhr, status, error) {
                        console.log("No");
                    },
                });
            });
        }


        // function generateCustomShorty() {
        //     let originalLink = document.querySelector('#originalLink').value;
        //     let shortenLink = document.querySelector('#shortenLink').value;
        //     console.log(originalLink)
        //     console.log(shortenLink)
        //     // Generate a new shortened link
        //     let avail = shortenLink;

        //     let regexp = /^(?:(?:https?|ftp):\/\/)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})))(?::\d{2,5})?(?:\/\S*)?$/;
        //     let ifValidLink = regexp.test(originalLink);
        //     if (ifValidLink) {
        //         console.log("Testing", ifValidLink);
        //         let generateShorty = document.querySelector('#generateShorty');
        //         let full_shortlink = "<?php echo $siteName ?>";
        //         generateShorty.innerHTML = `
        //     <form class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
        //         <input type="text" id="shortInput" disabled style="font-size: 0.9rem;" disbaled class="form-control" placeholder="" value="<?php echo $siteName ?>${avail}"/>
        //         <input class="btn btn-primary" type="button" onclick="copy()" id="copyBtn" value="Copy">
        //     </form>
        // `;

        //         let originalLink = document.querySelector('#originalLink').value;

        //         var formData = new FormData();
        //         formData.append('originalLink', originalLink);

        //         let url = "./admin/dBconn/api.php/?q=shorty&shortenLink=" + avail;
        //         $.ajax({
        //             type: "POST",
        //             url: "./admin/dBconn/api.php/?q=shorty&shortenLink=" + avail,
        //             data: formData,
        //             cache: false,
        //             processData: false,
        //             contentType: false,
        //             success: function (data) {
        //                 console.log("success");
        //             },
        //             error: function (xhr, status, error) {
        //                 console.log("No");
        //             },
        //         });
        //     } else {
        //         swal("Enter Valid URL !!", "", "error");
        //     }
        // }


        function generateCustomShorty() {
            let originalLink = document.querySelector('#originalLink').value;
            let shortenLink = document.querySelector('#shortenLink').value;
            console.log(originalLink);
            console.log(shortenLink);
            let avail = shortenLink;
            // Check if the original link has been previously shortened
            let urllink = "./admin/dBconn/api.php?q=alreadyShortenCustom&shortenLink=" + shortenLink;
            $.ajax({
                url: urllink,
                method: 'GET',
                dataType: 'JSON',
                success: function (data) {
                    console.log("this is datt", data);
                    // If the link is previously shortened
                    if (data) {
                        swal("Custom Name Not available", "", "error");
                        return;

                    } else {
                        // If the link is not previously shortened
                    }

                    let regexp = /^(?:(?:https?|ftp):\/\/)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff]-*)*[a-z\u00a1-\uffff]+)(?:\.(?:[a-z\u00a1-\uffff]-*)*[a-z\u00a1-\uffff]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})))(?::\d{2,5})?(?:\/\S*)?$/;
                    let ifValidLink = regexp.test(originalLink);
                    if (ifValidLink) {
                        console.log("Testing", ifValidLink);
                        let generateShorty = document.querySelector('#generateShorty');
                        let full_shortlink = "<?php echo $siteName ?>";
                        generateShorty.innerHTML = `
                    <form class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
                        <input type="text" id="shortInput" disabled style="font-size: 0.9rem;" disabled class="form-control" placeholder="" value="<?php echo $siteName ?>${avail}"/>
                        <input class="btn btn-primary" type="button" onclick="copy()" id="copyBtn" value="Copy">
                    </form>
                `;

                        let originalLink = document.querySelector('#originalLink').value;

                        var formData = new FormData();
                        formData.append('originalLink', originalLink);

                        let url = "./admin/dBconn/api.php/?q=shorty&shortenLink=" + avail;
                        $.ajax({
                            type: "POST",
                            url: "./admin/dBconn/api.php/?q=shorty&shortenLink=" + avail,
                            data: formData,
                            cache: false,
                            processData: false,
                            contentType: false,
                            success: function (data) {
                                console.log("success");
                            },
                            error: function (xhr, status, error) {
                                console.log("No");
                            },
                        });
                    } else {
                        swal("Enter Valid URL !!", "", "error");
                    }
                },
                error: function (xhr, status, error) {
                    console.log("No");
                },
            });
        }


    </script>
</footer>
<!-- End Footer -->
<!-- End Footer -->