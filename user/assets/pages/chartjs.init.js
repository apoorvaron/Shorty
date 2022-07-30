/*
 Template Name: Dashor - Responsive Bootstrap 4 Admin Dashboard
 Author: Themesdesign
 Website: www.themesdesign.in
 File: Chart js 
 */

!function($) {
    "use strict";

    var ChartJs = function() {};

    ChartJs.prototype.respChart = function(selector,type,data, options) {
        //default config
        Chart.defaults.global.defaultFontColor = "rgba(255,255,255,0.5)";
        // get selector by context
        var ctx = selector.get(0).getContext("2d");
        // pointing parent container to make chart js inherit its width
        var container = $(selector).parent();

        // enable resizing matter
        $(window).resize( generateChart );

        // this function produce the responsive Chart JS
        function generateChart(){
            // make chart width fit with its container
            var ww = selector.attr('width', $(container).width() );
            switch(type){
                case 'Line':
                    new Chart(ctx, {type: 'line', data: data, options: options});
                    break;
                case 'Doughnut':
                    new Chart(ctx, {type: 'doughnut', data: data, options: options});
                    break;
                case 'Pie':
                    new Chart(ctx, {type: 'pie', data: data, options: options});
                    break;
                case 'Bar':
                    new Chart(ctx, {type: 'bar', data: data, options: options});
                    break;
                case 'Radar':
                    new Chart(ctx, {type: 'radar', data: data, options: options});
                    break;
                case 'PolarArea':
                    new Chart(ctx, {data: data, type: 'polarArea', options: options});
                    break;
            }
            // Initiate new chart or Redraw

        };
        // run function - render chart at first load
        generateChart();
    },
    //init
    ChartJs.prototype.init = function() {
        //creating lineChart
        var lineChart = {
            labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September","October"],
            datasets: [
                {
                    label: "Sales Analytics",
                    fill: true,
                    lineTension: 0.5,
                    backgroundColor: "rgba(89, 206, 181, 0.3)",
                    borderColor: "#59ceb5",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    pointBorderColor: "#59ceb5",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 5,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "#59ceb5",
                    pointHoverBorderColor: "#59ceb5",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: [65, 59, 80, 81, 56, 55, 40, 55, 30, 80]
                },
                {
                    label: "Monthly Earnings",
                    fill: true,
                    lineTension: 0.5,
                    backgroundColor: "rgba(221, 221, 221, 0.3)",
                    borderColor: "#ddd",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    pointBorderColor: "#ddd",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 5,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "#ddd",
                    pointHoverBorderColor: "#ccc",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: [80, 23, 56, 65, 23, 35, 85, 25, 92, 36]
                }
            ]
        };

        var lineOpts = {
            scales: {
                yAxes: [{
                    ticks: {
                        max: 100,
                        min: 20,
                        stepSize: 10
                    }
                }]
            }
        };

        this.respChart($("#lineChart"),'Line',lineChart, lineOpts);

        //donut chart
        var donutChart = {
            labels: [
                "Desktops",
                "Tablets"
            ],
           
            datasets: [
                {
                    
                    data: [300, 210],
                   
                    backgroundColor: [
                        "#59ceb5",
                        "#365d6e"
                    ],
                    borderColor: "transparent",
                    innerRadius: "55%",                    
                    hoverBackgroundColor: [
                        "#59ceb5",
                        "#365d6e"
                        
                    ],
                    hoverBorderColor: "#aaa"
                }]
        };
        
        this.respChart($("#doughnut"),'Doughnut',donutChart);


        //Pie chart
        var pieChart = {
            labels: [
                "Desktops",
                "Tablets"
            ],
            datasets: [
                {
                    data: [300, 180],
                    backgroundColor: [
                        "#59ceb5",
                        "#365d6e"
                    ],
                    hoverBackgroundColor: [
                        "#59ceb5",
                        "#365d6e"
                    ]
                }]
        };
        this.respChart($("#pie"),'Pie',pieChart);


        //barchart
        var barChart = {
            labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September"],
            datasets: [
                {
                    label: "Sales Analytics",
                    backgroundColor: "rgba(54, 93, 110, 0.4)",
                    borderColor: "#365d6e",
                    borderWidth: 2,
                    hoverBackgroundColor: "rgba(54, 93, 110, 0.4)",
                    hoverBorderColor: "#365d6e",
                    barPercentage: 0.3,
                    categoryPercentage: 0.5,
                    data: [65, 59, 81, 45, 56, 80, 50, 20, 81, 50,14]
                }
            ]
        };

        var barOpts = {
            responsive: true,
            scales: {
                xAxes: [
                    {
                        barPercentage: 0.8,
                        categoryPercentage: 0.4,
                        display: true
                    }
                ]
            }
            
        };
        
        this.respChart($("#bar"),'Bar',barChart, barOpts);


        //radar chart
        var radarChart = {
            labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
            datasets: [
                
                {   
                    label: "Desktops",
                    backgroundColor: "rgba(89, 206, 181, 0.4)",
                    borderColor: "#59ceb5",
                    pointBackgroundColor: "#59ceb5",
                    pointBorderColor: "#fff",
                    pointHoverBackgroundColor: "#59ceb5",
                    pointHoverBorderColor: "#59ceb5",
                    data: [65, 59, 90, 81, 56, 55, 40],
                    datasetStroke : "true",
                },
                {   
                    label: "Tablets",
                    backgroundColor: "rgba(54, 93, 110, 0.4)",
                    borderColor: "#365d6e",
                    pointBackgroundColor: "#365d6e",
                    pointBorderColor: "#fff",
                    pointHoverBackgroundColor: "#365d6e",
                    pointHoverBorderColor: "#365d6e",
                    data: [28, 48, 40, 19, 96, 27, 100],
                    datasetStroke : "true",
                }
            ]
        };

        var radarOpts = {           
            scale: {                
                gridLines: {
                  color: '#ddd'
                },
                angleLines: {
                  color: '#ddd' // lines radiating from the center
                }
              }            
        };
        this.respChart($("#radar"),'Radar',radarChart,radarOpts);

        //Polar area  chart
        var polarChart = {
            datasets: [{
                data: [
                    11,
                    16,
                    7,
                    18
                ],
                backgroundColor: [
                    "#365d6e",
                    "#59ceb5",
                    "#aaaaaa",
                    "#eef0f6"
                ],
                borderColor: "#ddd",
                label: 'My dataset', // for legend
                hoverBorderColor: "#aaa"
            }],
            labels: [
                "Series 1",
                "Series 2",
                "Series 3",
                "Series 4"
            ]
        };
        var polarAreaOpts = {           
            scale: {                
                gridLines: {
                  color: '#ddd'
                },
                angleLines: {
                  color: '#ddd' // lines radiating from the center
                }
              }            
        };
        this.respChart($("#polarArea"),'PolarArea',polarChart,polarAreaOpts);
    },
    $.ChartJs = new ChartJs, $.ChartJs.Constructor = ChartJs

}(window.jQuery),

//initializing
function($) {
    "use strict";
    $.ChartJs.init()
}(window.jQuery);
