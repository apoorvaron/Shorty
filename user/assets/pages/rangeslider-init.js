/*
 Template Name: Dashor - Responsive Bootstrap 4 Admin Dashboard
 Author: Themesdesign
 Website: www.themesdesign.in
 File: Powerange Slider
 */

$(document).ready(function () {
    
   
    // Step.
    var stp = document.querySelector('.js-step');
    var initStp = new Powerange(stp, { start: 50, step: 10 });

    // Min, max, start.
    var vals = document.querySelector('.js-min-max-start');
    var initVals = new Powerange(vals, { min: 16, max: 256, start: 128 });

    // Callback.
    var clbk = document.querySelector('.js-callback');
    var initClbk = new Powerange(clbk, { callback: displayValue, start: 88 });

    function displayValue() {
    document.getElementById('js-display-callback').innerHTML = clbk.value;
    }

    // Hide range.
    var hide = document.querySelector('.js-hiderange');
    var initHideRange = new Powerange(hide, { hideRange: true, start: 70 });

    // Vertical.
    var vert = document.querySelector('.js-vertical');
    var initVert = new Powerange(vert, { start: 80, vertical: true });


});


