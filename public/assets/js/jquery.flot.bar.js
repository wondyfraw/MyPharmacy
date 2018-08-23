

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


var Bar = function() {

    var handelBarExtend = function () {
        
        if (!jQuery.plot) { return; };
        
        var data = [
            {data: [[0, 4.1]], color: color01},
            {data: [[1, 1.8]], color: color02},
            {data: [[2, 2]], color: color03},
            {data: [[3, 4.5]], color: color04},
            {data: [[4, 3.7]], color: color05},
            {data: [[5, 5.6]], color: color06},
            {data: [[6, 2.6]], color: color07}
        ];

        $.plot($("#barExtend"), data, {
            series: {
                lines: {
                    fill: false
                },
                points: {show: false},
                bars: {
                    show: true,
                    align: 'center',
                    barWidth: 0.5,
                    fill: 1,
                    lineWidth: 1
                }
            },
            xaxis: {
                tickLength: 0,
                ticks: [
                    [0, "Data One"],
                    [1, "Data Two"],
                    [2, "Data Three"],
                    [3, "Data Four"],
                    [4, "Data Five"],
                    [5, "Data Six"],
                    [6, "Data Seven"]]
            },
            yaxis: {
                min: 0
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
                content: "Value: %y"
            }
        });
    };

    var handelBarAnnotations = function () {
        
        if (!jQuery.plot) { return; };

        var d1 = [];
        for (var i = 0; i < 20; ++i) {
            d1.push([i, Math.sin(i)]);
        }

        var data = [{data: d1, label: "Pressure", color: color10 }];

        var markings = [
            {color: "#f6f6f6", yaxis: {from: 1}},
            {color: "#f6f6f6", yaxis: {to: -1}},
            {color: color12, lineWidth: 2, xaxis: {from: 2, to: 2}},
            {color: color11, lineWidth: 2, xaxis: {from: 8, to: 8}}
        ];

        var placeholder = $("#barAnnotations");

        var plot = $.plot(placeholder, data, {
            bars: {
                show: true, 
                barWidth: 0.5, 
                fill: 1
            },
            xaxis: {
                ticks: [], 
                autoscaleMargin: 0.02
            },
            yaxis: {
                min: -2, 
                max: 2
            },
            grid: {
                markings: markings,
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

        var o = plot.pointOffset({x: 2, y: -1.2});

        // Append it to the placeholder that Flot already uses for positioning
        placeholder.append("<div style='position:absolute;left:" + (o.left + 4) + "px;top:" + o.top + "px;color:#666;font-size:smaller'>Warming up</div>");

        o = plot.pointOffset({x: 8, y: -1.2});
        placeholder.append("<div style='position:absolute;left:" + (o.left + 4) + "px;top:" + o.top + "px;color:#666;font-size:smaller'>Actual measurements</div>");

    };

    var handleBarStack = function() {
        
        if (!jQuery.plot) { return; };

        var d1 = [];
        for (var i = 0; i <= 10; i += 1) {
            d1.push([i, parseInt(Math.random() * 30)]);
        }

        var d2 = [];
        for (var i = 0; i <= 10; i += 1) {
            d2.push([i, parseInt(Math.random() * 30)]);
        }

        var d3 = [];
        for (var i = 0; i <= 10; i += 1) {
            d3.push([i, parseInt(Math.random() * 30)]);
        }

        var stack = 0,
            bars = true,
            lines = false,
            steps = false;

        $.plot("#barStack", [
            {data: d1, color:color01},
            {data: d2, color:color02},
            {data: d3, color:color03}], {
            series: {
                stack: stack,
                lines: {
                    show: lines,
                    fill: true,
                    steps: steps,
                    align: 'center'
                },
                bars: {
                    show: bars,
                    barWidth: 0.5,
                    fill: 1
                }
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
                content: "Value: %y"
            }
        });

    };

    var handelMultiBarChart = function() {
        
        if (!jQuery.plot) { return; };
         
        var d1_1 = [
            [1325376000000, 50],
            [1328054400000, 70],
            [1330560000000, 100],
            [1333238400000, 60],
            [1335830400000, 35]
        ];

        var d1_2 = [
            [1325376000000, 80],
            [1328054400000, 60],
            [1330560000000, 30],
            [1333238400000, 35],
            [1335830400000, 30]
        ];

        var d1_3 = [
            [1325376000000, 60],
            [1328054400000, 40],
            [1330560000000, 30],
            [1333238400000, 20],
            [1335830400000, 10]
        ];

        var d1_4 = [
            [1325376000000, 15],
            [1328054400000, 10],
            [1330560000000, 15],
            [1333238400000, 20],
            [1335830400000, 15]
        ];

        var data = [
            {
                label: "Leigh Taylor",
                data: d1_1,
                bars: {
                    show: true,
                    barWidth: 12 * 24 * 60 * 60 * 300,
                    fill: true,
                    lineWidth: 0,
                    order: 1,
                    fillColor: color01
                },
                color: color01
            },
            {
                label: "Dave Gamache",
                data: d1_2,
                bars: {
                    show: true,
                    barWidth: 12 * 24 * 60 * 60 * 300,
                    fill: true,
                    lineWidth: 1,
                    order: 2,
                    fillColor: color02
                },
                color: color02
            },
            {
                label: "Athul Athreya",
                data: d1_3,
                bars: {
                    show: true,
                    barWidth: 12 * 24 * 60 * 60 * 300,
                    fill: true,
                    lineWidth: 0,
                    order: 3,
                    fillColor: color03
                },
                color: color03
            },
            {
                label: "Danilo Tanić",
                data: d1_4,
                bars: {
                    show: true,
                    barWidth: 12 * 24 * 60 * 60 * 300,
                    fill: true,
                    lineWidth: 1,
                    order: 4,
                    fillColor: color04
                },
                color: color04
            }
        ];

        $.plot($("#multiBarChart"), data, {
            xaxis: {
                min: (new Date(2011, 11, 15)).getTime(),
                max: (new Date(2012, 04, 18)).getTime(),
                mode: "time",
                timeformat: "%b",
                tickSize: [1, "month"],
                monthNames: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                tickLength: 0, // hide gridlines
                axisLabel: 'Month',
                axisLabelUseCanvas: true,
                axisLabelFontSizePixels: 12,
                axisLabelPadding: 5
            },
            yaxis: {
                axisLabel: 'Value',
                axisLabelUseCanvas: true,
                axisLabelFontSizePixels: 12,
                axisLabelPadding: 5
            },
            grid: {
                hoverable: true,
                clickable: false,
                borderWidth: 1,
                borderColor: 'rgba(0,0,0,.1)'
            },
            tooltip: true,
            tooltipOpts: {
                content: "<strong>%s's</strong> Sales: %y"
            },
            legend: {
                labelBoxBorderColor: "none",
                position: "left"
            },
            series: {
                shadowSize: 1
            }
        });
    };

    var handelMultiBarChartH = function() {
        
        if (!jQuery.plot) { return; };
        
        var d1_h = [];
        for (var i = 0; i <= 5; i += 1)
            d1_h.push([parseInt(Math.random() * 30), i]);

        var d2_h = [];
        for (var i = 0; i <= 5; i += 1)
            d2_h.push([parseInt(Math.random() * 30), i]);

        var d3_h = [];
        for (var i = 0; i <= 5; i += 1)
            d3_h.push([parseInt(Math.random() * 30), i]);

        var ds_h = new Array();
        
        ds_h.push({
            data: d1_h,
            bars: {
                horizontal: true,
                show: true,
                barWidth: 0.2,
                fill: true,
                lineWidth: 0,
                order: 1,
                fillColor: color03
            }
        });
        
        ds_h.push({
            data: d2_h,
            bars: {
                horizontal: true,
                show: true,
                barWidth: 0.2,
                fill: true,
                lineWidth: 0,
                order: 2,
                fillColor: color05
            }
        });
        
        ds_h.push({
            data: d3_h,
            bars: {
                horizontal: true,
                show: true,
                barWidth: 0.2,
                fill: true,
                lineWidth: 0,
                order: 3,
                fillColor: color06
            }
        });
        
        $.plot($("#multiBarChartH"), ds_h, {
            yaxis: {
                tickLength: 0
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
                content: "%y is %x",
                shifts: {
                    x: -60,
                    y: 25
                }
            }
        });

    };
    
    
    


    return {
        init: function() {
            
            handelBarExtend();
            handelBarAnnotations();
            handleBarStack();
            handelMultiBarChart();
            handelMultiBarChartH();

        }

    };
}();    // Handel Dashboard




