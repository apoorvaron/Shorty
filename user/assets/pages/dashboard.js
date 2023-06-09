
/*
 Template Name: Dashor - Responsive Bootstrap 4 Admin Dashboard
 Author: Themesdesign
 Website: www.themesdesign.in
 File: Dashboard init js
 */

!function($) {
    "use strict";

    var Dashboard = function() {};
    
    //creates area chart
    Dashboard.prototype.createAreaChart = function(element, pointSize, lineWidth, data, xkey, ykeys, labels, lineColors) {
        Morris.Area({
            element: element,
            pointSize: 0,
            lineWidth: 0,
            data: data,
            xkey: xkey,
            ykeys: ykeys,
            labels: labels,
            resize: true,
            gridLineColor: '#eee',
            hideHover: 'auto',
            lineColors: lineColors,
            fillOpacity: .9,
            behaveLikeLine: true,
        });
    },

    //creates Donut chart
    Dashboard.prototype.createDonutChart = function(element, data, colors) {
        Morris.Donut({
            element: element,
            data: data,
            resize: true,
            colors: colors,
            labelColor: '#666',
            backgroundColor: 'transparent',
            fillOpacity: 0.1,
            formatter: function (x) { return x + "%"}
        });
       
    },

    //creates line chart
    Dashboard.prototype.createLineChart = function(element, data, xkey, ykeys, labels, lineColors) {
        Morris.Line({
          element: element,
          data: data,
          xkey: xkey,
          ykeys: ykeys,
          labels: labels,
          hideHover: 'auto',
          gridLineColor: '#eee',
          resize: true, //defaulted to true
          lineColors: lineColors
        });
    },
    

    //map

    $('#world-map-markers').vectorMap({
        map : 'world_mill_en',
        scaleColors : ['rgba(255, 255, 255,0.55)', 'rgba(255, 255, 255,0.55)'],
        normalizeFunction : 'polynomial',
        hoverOpacity : 0.7,
        hoverColor : false,
        regionStyle : {
            initial : {
                fill : 'rgba(43, 58, 74, 0.2)'
            }
        },
        markerStyle: {
            initial: {
                r: 4,
                'fill': '#00c292',
                'fill-opacity': 0.9,
                'stroke': '#fff',
                'stroke-width' : 5,
                'stroke-opacity': 0.4
            },

            hover: {
                'stroke': '#fff',
                'fill-opacity': 1,
                'stroke-width': 2,
            }
        },
        backgroundColor : 'transparent',
        markers : [ {
            latLng : [61.52, 105.31],
            name : 'Russia'
        }, {
            latLng : [-25.27, 133.77],
            name : 'Australia'
        },  {
            latLng : [20.59, 78.96],
            name : 'India'
        }, {
            latLng : [39.52, -87.12],
            name : 'Brazil'
        }],
        series: {
            regions: [{
                values: {
                    "US": 'rgba(43, 58, 74, 0.3)',
                    "AU": 'rgba(43, 58, 74, 0.3)',
                    "IN": 'rgba(43, 58, 74, 0.3)',
                    "RU": 'rgba(43, 58, 74, 0.3)',
                },
                attribute: 'fill'
            }]
        },
    });

     
  

   
    //linechart
    $(".linechart").sparkline([1,4,3,7,6,4,8,9,6,8,12], {
        type: 'line',
        width: '100',
        height: '38',
        lineColor: '#547d8f',
        fillColor: 'rgba(110, 255, 235,0.55)',
        lineWidth: 2,
        minSpotColor: '#aab6a2',
        maxSpotColor: '#aab6a2',
    });

    $(".linechart-2").sparkline([1,4,3,7,6,4,12,9,6,3,2], {
        type: 'line',
        width: '100',
        height: '38',
        lineColor: '#547d8f',
        fillColor: 'rgba(110, 255, 235,0.55)',
        lineWidth: 2,
        minSpotColor: '#aab6a2',
        maxSpotColor: '#aab6a2',
    });

    $(".linechart-3").sparkline([1,6,10,3,6,8,1,5,2,7,4], {
        type: 'line',
        width: '100',
        height: '38',
        lineColor: '#547d8f',
        fillColor: 'rgba(110, 255, 235,0.55)',
        lineWidth: 2,
        minSpotColor: '#aab6a2',
        maxSpotColor: '#aab6a2',
    });

    //metro
    $(".live-tile, .flip-list").not(".exclude").liveTile();

    //nice scroll
    $(".boxscroll").niceScroll({cursorborder:"",cursorcolor:"#314e5f",boxzoom:true});
  
    
    Dashboard.prototype.init = function() {
        
          //creating area chart
          var $areaData = [
            {y: '2007', a: 0, b: 0, c:0},
            {y: '2008', a: 150, b: 45, c:15},
            {y: '2009', a: 60, b: 150, c:195},
            {y: '2010', a: 180, b: 36, c:21},
            {y: '2011', a: 90, b: 60, c:360},
            {y: '2012', a: 75, b: 240, c:120},
            {y: '2013', a: 30, b: 30, c:30}
        ];
        this.createAreaChart('morris-area-chart', 0, 0, $areaData, 'y', ['a', 'b', 'c'], ['Series A', 'Series B', 'Series C'], ['#ec536c', '#5b6be8', '#59ceb5']);

        //creating donut chart
        var $donutData = [
            {label: "Margin", value: 20},
            {label: "Profit", value: 30},
            {label: "Lost", value: 10}, 
        ];
        
        this.createDonutChart('morris-donut-example', $donutData, [ 'rgba(211, 218, 232,0.8)','rgba(64, 164, 241,0.8)', 'rgba(236, 83, 108,0.8)']);

        //create line chart
        var $data  = [
            { y: '2012', a: 0, b: 0},
            { y: '2013', a: 50,  b: 30 },
            { y: '2014', a: 50,  b: 30 },
            { y: '2015', a: 120,  b: 100},
            { y: '2016', a: 60,  b: 40 },
            { y: '2017', a: 140,  b: 120},
            { y: '2018', a: 180, b: 200 }
          ];
        this.createLineChart('multi-line-chart', $data, 'y', ['a', 'b'], ['Dom', 'Int'], ['#59ceb5', '#ec536c']);
    },
    //init
    $.Dashboard = new Dashboard, $.Dashboard.Constructor = Dashboard
}(window.jQuery),

//initializing 
function($) {
    "use strict";
    $.Dashboard.init();
}(window.jQuery);