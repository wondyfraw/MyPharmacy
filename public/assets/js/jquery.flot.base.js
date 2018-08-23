

// Colors 
var color01 = '#00B7C2';
var color02 = '#1DAF15';
var color03 = '#0078D7';
var color04 = '#FEB900';
var color05 = '#E72522';
var color06 = '#FF8431';
var color07 = '#5AC8FF';
var color08 = '#7266BA';
var color09 = '#BE2077';
var color10 = '#00B293';
var color11 = '#515B6B';
var color12 = '#8664B7';

        
var Basic = function() {
    
    var handleBasicChart = function() {
        
        if (!jQuery.plot) { return; };
        
        var d1 = [[0, 2], [1, 5], [2, 3], [3, 4], [4, 7], [5, 9], [6, 6], [7, 2], [8, 5], [9, 8]];
        var d2 = [[0, 6], [1, 6], [2, 8], [3, 3], [4, 5], [5, 4], [6, 7], [7, 3], [8, 1], [9, 6]];
        var d3 = [[0, 0], [1, 3], [2, 2], [3, 5], [4, 3], [5, 7], [6, 4], [7, 5], [8, 2], [9, 5]];
        
        
        $.plot("#basicChart", [
            {label: "Data 1", data: d1, color: color01},
            {label: "Data 2", data: d2, color: color02},
            {label: "Data 3", data: d3, color: color03}], {
            
            series: {
                shadowSize: 0
            },
            yaxis: {
                tickColor: "#e5e5e5"
            },
            xaxis: {
                tickColor: "#e5e5e5"
            },
            grid: {
                hoverable: true,
                backgroundColor: {
                    colors: ["#fff", "#fff"]
                },
                borderWidth: {
                    top: 1,
                    right: 1,
                    bottom: 2,
                    left: 2
                },
                borderColor: {
                    top: "#e5e5e5", 
                    right: "#e5e5e5",
                    bottom: "#a5b2c0",
                    left: "#a5b2c0"
                }
            },
            tooltip: true,
            tooltipOpts: {
                content: "<strong>%s</strong> of %x is %y.4",
                shifts: {
                    x: -60,
                    y: 25
                }
            }
        });
        
    };
    
    var handelBasicChart2 = function () {
        
        if (!jQuery.plot) { return; };
        
        var d1 = [];
        for (var i = 0; i < Math.PI * 2; i += 0.25) {
            d1.push([i, Math.sin(i)]);
        }

        var d2 = [];
        for (var i = 0; i < Math.PI * 2; i += 0.25) {
            d2.push([i, Math.cos(i)]);
        }


        $.plot("#basicChart2", [
            {label: "sin(x)", data: d1, color: color03},
            {label: "cos(x)", data: d2, color: color05}
        ], {
            series: {
                lines: {show: true},
                points: {show: true}
            },
            xaxis: {
                ticks: [
                    0, [Math.PI / 2, "\u03c0/2"], [Math.PI, "\u03c0"],
                    [Math.PI * 3 / 2, "3\u03c0/2"], [Math.PI * 2, "2\u03c0"]
                ]
            },
            yaxis: {
                ticks: 10,
                min: -2,
                max: 2,
                tickDecimals: 3
            },
            grid: {
                hoverable: true,
                backgroundColor: {
                    colors: ["#fff", "#fff"]
                },
                borderWidth: {
                    top: 1,
                    right: 1,
                    bottom: 2,
                    left: 2
                },
                borderColor: {
                    top: "#e5e5e5", 
                    right: "#e5e5e5",
                    bottom: "#a5b2c0",
                    left: "#a5b2c0"
                }
            },
            tooltip: true,
            tooltipOpts: {
                content: "'%s' of %x.1 is %y.4",
                shifts: {
                    x: -60,
                    y: 25
                }
            }
        });
    }
    
    var handelTrackingCurves = function () {
        
        if (!jQuery.plot) { return; };
        
        var sin = [],
                cos = [];
        for (var i = 0; i < 14; i += 0.1) {
            sin.push([i, Math.sin(i)]);
            cos.push([i, Math.cos(i)]);
        }

        plot = $.plot($("#trackingCurves"), [{
                data: sin,
                label: "sin(x) = -0.00",
                color: color01
            }, {
                data: cos,
                label: "cos(x) = -0.00",
                color: color02
            }], {
            series: {
                lines: {
                    show: true
                }
            },
            crosshair: {
                mode: "x"
            },
            grid: {
                hoverable: true,
                backgroundColor: {
                    colors: ["#fff", "#fff"]
                },
                borderWidth: {
                    top: 1,
                    right: 1,
                    bottom: 2,
                    left: 2
                },
                borderColor: {
                    top: "#e5e5e5", 
                    right: "#e5e5e5",
                    bottom: "#a5b2c0",
                    left: "#a5b2c0"
                }
            },
            yaxis: {
                min: -1.2,
                max: 1.2
            },
            tooltip: true,
            tooltipOpts: {
                content: "'%s' of %x.1 is %y.4",
                shifts: {
                    x: -60,
                    y: 25
                }
            }
        });
        
    };
    
    var handleRealTimeChart = function() {

        if (!jQuery.plot) { return; };

        var data = [];
        var totalPoints = 250;

        // random data generator for plot charts
        function getRandomData() {
            if (data.length > 0)
                data = data.slice(1);
            // do a random walk
            while (data.length < totalPoints) {
                var prev = data.length > 0 ? data[data.length - 1] : 50;
                var y = prev + Math.random() * 10 - 5;
                if (y < 0)
                    y = 0;
                if (y > 100)
                    y = 100;
                data.push(y);
            }
            // zip the generated y values with the x values
            var res = [];
            for (var i = 0; i < data.length; ++i)
                res.push([i, data[i]])
            return res;
        }


        var updateInterval = 90;    // Intervel Time
        
        var plot_statistics = $.plot($("#realTimeChart"), [getRandomData()], {
            series: {
                shadowSize: 0
            },
            lines: {
                show: true,
                lineWidth: 1,
                fill: true,
                fillColor: {
                    colors: [{
                            opacity: .3
                        }, {
                            opacity: .3
                        }]
                }
            },
            yaxis: {
                min: 0,
                max: 100,
                tickFormatter: function(v) {
                    return v + "%";
                }
            },
            xaxis: {
                show: false
            },
            colors: [color02],
            grid: {
                hoverable: true,
                backgroundColor: {
                    colors: ["#fff", "#fff"]
                },
                borderWidth: {
                    top: 1,
                    right: 1,
                    bottom: 2,
                    left: 2
                },
                borderColor: {
                    top: "#e5e5e5", 
                    right: "#e5e5e5",
                    bottom: "#a5b2c0",
                    left: "#a5b2c0"
                }
            }
        });

        function statisticsUpdate() {
            plot_statistics.setData([getRandomData()]);
            plot_statistics.draw();
            setTimeout(statisticsUpdate, updateInterval);
        }
        statisticsUpdate();

       
    };
    
    var handleSeriesTypes = function() {

        if (!jQuery.plot) { return; }
        
        var d1 = [];
        for (var i = 0; i < 14; i += 0.5) {
            d1.push([i, Math.sin(i)]);
        }

        var d2 = [[0, 3], [4, 8], [8, 5], [9, 13]];

        var d3 = [];
        for (var i = 0; i < 14; i += 0.5) {
            d3.push([i, Math.cos(i)]);
        }

        var d4 = [];
        for (var i = 0; i < 14; i += 0.1) {
            d4.push([i, Math.sqrt(i * 10)]);
        }

        var d5 = [];
        for (var i = 0; i < 14; i += 0.5) {
            d5.push([i, Math.sqrt(i)]);
        }

        var d6 = [];
        for (var i = 0; i < 14; i += 0.5 + Math.random()) {
            d6.push([i, Math.sqrt(2 * i + Math.sin(i) + 5)]);
        }

        $.plot("#seriesTypes", [{
                data: d1,
                color: color01,
                lines: {show: true, fill: true}
            }, {
                data: d2,
                color: color02,
                bars: {show: true}
            }, {
                data: d3,
                color: color03,
                points: {show: true}
            }, {
                data: d4,
                color: color04,
                lines: {show: true}
            }, {
                data: d5,
                color: color05,
                lines: {show: true},
                points: {show: true}
            }, {
                data: d6,
                color: color06,
                lines: {show: true, steps: true}
            }], {
            
            grid: {
                hoverable: true,
                backgroundColor: {
                    colors: ["#fff", "#fff"]
                },
                borderWidth: {
                    top: 1,
                    right: 1,
                    bottom: 2,
                    left: 2
                },
                borderColor: {
                    top: "#e5e5e5", 
                    right: "#e5e5e5",
                    bottom: "#a5b2c0",
                    left: "#a5b2c0"
                }
            },
            tooltip: true,
            tooltipOpts: {
                content: "'%s' of %x.1 is %y.4",
                shifts: {
                    x: -60,
                    y: 25
                }
            }
        });
       
    };
    
    
    
    return {
        init: function() {

            handleBasicChart();
            handelBasicChart2();
            handelTrackingCurves();
            handleRealTimeChart();
            handleSeriesTypes();
            
        }

    };
}();    // Handel Dashboard

