/*
 Template Name: Dashor - Responsive Bootstrap 4 Admin Dashboard
 Author: Themesdesign
 Website: www.themesdesign.in
 File: Main js
 */

!function ($) {
    "use strict";

    var MainApp = function () {
        this.$body = $("body"),
            this.$wrapper = $("#wrapper"),
            this.$btnFullScreen = $("#btn-fullscreen"),
            this.$leftMenuButton = $('.button-menu-mobile'),
            this.$menuItem = $('.has_sub > a')
    };
    //scroll
    MainApp.prototype.initSlimscroll = function () {
        $('.slimscrollleft').slimscroll({
            height: 'auto',
            position: 'right',
            size: "10px",
            color: '#9ea5ab'
        });
    },
        //left menu
        MainApp.prototype.initLeftMenuCollapse = function () {
            var $this = this;
            this.$leftMenuButton.on('click', function (event) {
                event.preventDefault();
                $this.$body.toggleClass("fixed-left-void");
                $this.$wrapper.toggleClass("enlarged");
            });
        },
        //left menu
        MainApp.prototype.initComponents = function () {
            $('[data-toggle="tooltip"]').tooltip();
            $('[data-toggle="popover"]').popover();
        },
        //full screen
        MainApp.prototype.initFullScreen = function () {
            var $this = this;
            $this.$btnFullScreen.on("click", function (e) {
                e.preventDefault();

                if (!document.fullscreenElement && /* alternative standard method */ !document.mozFullScreenElement && !document.webkitFullscreenElement) {  // current working methods
                    if (document.documentElement.requestFullscreen) {
                        document.documentElement.requestFullscreen();
                    } else if (document.documentElement.mozRequestFullScreen) {
                        document.documentElement.mozRequestFullScreen();
                    } else if (document.documentElement.webkitRequestFullscreen) {
                        document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
                    }
                } else {
                    if (document.cancelFullScreen) {
                        document.cancelFullScreen();
                    } else if (document.mozCancelFullScreen) {
                        document.mozCancelFullScreen();
                    } else if (document.webkitCancelFullScreen) {
                        document.webkitCancelFullScreen();
                    }
                }
            });
        },
        //full screen
        MainApp.prototype.initMenu = function () {
            var $this = this;
            $this.$menuItem.on('click', function () {
                var parent = $(this).parent();
                var sub = parent.find('> ul');

                if (!$this.$body.hasClass('sidebar-collapsed')) {
                    if (sub.is(':visible')) {
                        sub.slideUp(300, function () {
                            parent.removeClass('nav-active');
                            $('.body-content').css({height: ''});
                            adjustMainContentHeight();
                        });
                    } else {
                        visibleSubMenuClose();
                        parent.addClass('nav-active');
                        sub.slideDown(300, function () {
                            adjustMainContentHeight();
                        });
                    }
                }
                return false;
            });

            //inner functions
            function visibleSubMenuClose() {
                $('.has_sub').each(function () {
                    var t = $(this);
                    if (t.hasClass('nav-active')) {
                        t.find('> ul').slideUp(300, function () {
                            t.removeClass('nav-active');
                        });
                    }
                });
            }

            function adjustMainContentHeight() {
                // Adjust main content height
                var docHeight = $(document).height();
                if (docHeight > $('.body-content').height())
                    $('.body-content').height(docHeight);
            }
        },
        MainApp.prototype.activateMenuItem = function () {
            // === following js will activate the menu in left side bar based on url ====
            $("#sidebar-menu a").each(function () {
                if (this.href == window.location.href) {
                    $(this).addClass("active");
                    $(this).parent().addClass("active"); // add active to li of the current link
                    $(this).parent().parent().prev().addClass("active"); // add active class to an anchor
                    $(this).parent().parent().parent().addClass("active"); // add active class to an anchor
                    $(this).parent().parent().prev().click(); // click the item to make it drop
                }
            });
        },
        MainApp.prototype.init = function () {
            this.initSlimscroll();
            this.initLeftMenuCollapse();
            this.initComponents();
            this.initFullScreen();
            this.initMenu();
            this.activateMenuItem();
        },
        //init
        $.MainApp = new MainApp, $.MainApp.Constructor = MainApp
}(window.jQuery),

//initializing
    function ($) {
        "use strict";
        $.MainApp.init();
    }(window.jQuery);

    document.addEventListener('DOMContentLoaded', () => {
        //calculate the width of the texts
        function measureWidth(text, font){
            const ele = document.createElement('div');
            ele.style.position = 'absolute';
            ele.style.visibility = 'hidden';
            ele.style.whiteSpace = 'nowrap';
            ele.style.left = '-9999px';
            ele.style.font = font;
            ele.innerText = text;
            document.body.appendChild(ele);

            const width = window.getComputedStyle(ele).width.replace('px','') * 1;
            document.body.removeChild(ele);
            return width;
        }

        
        document.querySelectorAll('input[required]').forEach(input => {
            const parent = input.parentNode,
                placeholder = input.placeholder + "_",
                inputStyle = window.getComputedStyle(input),
                font = inputStyle.font,
                lineHeight = inputStyle.lineHeight,
                left = ((inputStyle.paddingLeft.replace('px','') * 1) + input.getClientRects()[0].left - parent.getClientRects()[0].left),
                top = (input.getClientRects()[0].top - parent.getClientRects()[0].top),
                leftPos = measureWidth(placeholder, font);


            const star = document.createElement('span');
            star.style = `
                position: absolute;
                pointer-events: none;
                color: #f00;
                top: ${top+5}px;
                line-height: 1 !important;
                font: ${font};
                left: ${leftPos+left}px;
            `;
            star.innerText = '*';

            star.style.visibility = (input.value.length == 0) ? 'visible' : 'hidden';

            parent.style.setProperty('position', 'relative');
            parent.append(star);

            //detact value change in the input to remove the star symbol
            input.addEventListener('input', function(e) {
                const visibility = (input.value.length == 0) ? 'visible' : 'hidden';

                star.style.visibility = visibility;
            });
        })
    })