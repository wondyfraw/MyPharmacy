

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


var Pie = function() {

    var handleBasicPie = function() {
        
        if (!jQuery.plot) { return; };
        
        var dataforPie = [
            {
                label: "Leigh Taylor",
                data: 150,
                color: color01
            },
            {
                label: "Dave Gamache",
                data: 100,
                color: color02
            },
            {
                label: "Athul Athreya",
                data: 250,
                color: color03
            },
            {
                label: "Danilo Tanić",
                data: 250,
                color: color04
            },
            {
                label: "Cihangir Öziş",
                data: 250,
                color: color05
            },
            {
                label: "Nicolas Quod",
                data: 250,
                color: color07
            }
        ];

        var options = {
            series: {
                pie: {
                    show: true
                }
            },
            grid: {
                hoverable: true
            },
            tooltip: true,
            tooltipOpts: {
                content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
                shifts: {
                    x: 20,
                    y: 0
                },
                defaultTheme: false
            },
            legend: {
                show: true
            }
        };

        $.plot($("#basicPieChart"), dataforPie, options);

    };

    var handlePieWithoutLegend = function () {
        
        if (!jQuery.plot) { return; };
        
        var dataforPie = [
            {
                label: "Leigh Taylor",
                data: 150,
                color: color01
            },
            {
                label: "Dave Gamache",
                data: 100,
                color: color02
            },
            {
                label: "Athul Athreya",
                data: 250,
                color: color03
            },
            {
                label: "Danilo Tanić",
                data: 250,
                color: color04
            },
            {
                label: "Cihangir Öziş",
                data: 250,
                color: color05
            },
            {
                label: "Nicolas Quod",
                data: 250,
                color: color07
            }
        ];

        var options = {
            series: {
                pie: {
                    show: true
                }
            },
            grid: {
                hoverable: true
            },
            tooltip: true,
            tooltipOpts: {
                content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
                shifts: {
                    x: 20,
                    y: 0
                },
                defaultTheme: false
            },
            legend: {
                show: false
            }
        };

        $.plot($("#pieWithoutLegend"), dataforPie, options);
    };

    var handlePieLabelFormatter = function () {
        
        if (!jQuery.plot) { return; };

        var dataforPie = [
            {
                label: "Leigh Taylor",
                data: 150,
                color: color01
            },
            {
                label: "Dave Gamache",
                data: 100,
                color: color02
            },
            {
                label: "Athul Athreya",
                data: 250,
                color: color03
            },
            {
                label: "Danilo Tanić",
                data: 250,
                color: color04
            },
            {
                label: "Cihangir Öziş",
                data: 250,
                color: color05
            },
            {
                label: "Nicolas Quod",
                data: 250,
                color: color07
            }
        ];

        var options = {
            series: {
                pie: {
                    show: true,
                    radius: 1,
                    label: {
                        show: true,
                        radius: 1,
                        formatter: labelFormatter,
                        background: {
                            opacity: 0.8
                        }
                    }
                }
            },
            grid: {
                hoverable: true
            },
            tooltip: true,
            tooltipOpts: {
                content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
                shifts: {
                    x: 20,
                    y: 0
                },
                defaultTheme: false
            },
            legend: {
                show: false
            }
        };

        $.plot($("#pieLabelFormatter"), dataforPie, options);
        
        function labelFormatter(label, series) {
            return "<div style='font-size:8pt; text-align:center; padding:2px; color:white;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";
	}
        
    };

    var handlePieLabelRadius = function() {
        
        if (!jQuery.plot) { return; };

        var dataforPie = [
            {
                label: "Leigh Taylor",
                data: 150,
                color: color01
            },
            {
                label: "Dave Gamache",
                data: 100,
                color: color02
            },
            {
                label: "Athul Athreya",
                data: 250,
                color: color03
            },
            {
                label: "Danilo Tanić",
                data: 250,
                color: color04
            },
            {
                label: "Cihangir Öziş",
                data: 250,
                color: color05
            },
            {
                label: "Nicolas Quod",
                data: 250,
                color: color07
            }
        ];

        var options = {
            series: {
                pie: {
                    show: true,
                    radius: 1,
                    label: {
                        show: true,
                        radius: 3/4,
                        formatter: labelFormatter,
                        background: {
                            opacity: 0.8
                        }
                    }
                }
            },
            grid: {
                hoverable: true
            },
            tooltip: true,
            tooltipOpts: {
                content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
                shifts: {
                    x: 20,
                    y: 0
                },
                defaultTheme: false
            },
            legend: {
                show: false
            }
        };

        $.plot($("#pieLabelRadius"), dataforPie, options);
        
        function labelFormatter(label, series) {
            return "<div style='font-size:8pt; text-align:center; padding:2px; color:white;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";
	}

    };

    var handleRectangularPie = function() {
        
        if (!jQuery.plot) { return; };
         
        var dataforPie = [
            {
                label: "Leigh Taylor",
                data: 150,
                color: color01
            },
            {
                label: "Dave Gamache",
                data: 100,
                color: color02
            },
            {
                label: "Athul Athreya",
                data: 250,
                color: color03
            },
            {
                label: "Danilo Tanić",
                data: 250,
                color: color04
            },
            {
                label: "Cihangir Öziş",
                data: 250,
                color: color05
            },
            {
                label: "Nicolas Quod",
                data: 250,
                color: color07
            }
        ];

        var options = {
            series: {
                pie: {
                    show: true,
                    radius: 500,
                    label: {
                        show: true,
                        radius: 3/4,
                        formatter: labelFormatter,
                        background: {
                            opacity: 0.8
                        }
                    }
                }
            },
            grid: {
                hoverable: true
            },
            tooltip: true,
            tooltipOpts: {
                content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
                shifts: {
                    x: 20,
                    y: 0
                },
                defaultTheme: false
            },
            legend: {
                show: false
            }
        };

        $.plot($("#RectangularPie"), dataforPie, options);
        
        function labelFormatter(label, series) {
            return "<div style='font-size:8pt; text-align:center; padding:2px; color:white;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";
	}
        
    };

    var handleDonutHole = function() {
        
        if (!jQuery.plot) { return; };
        
        var dataforPie = [
            {
                label: "Leigh Taylor",
                data: 150,
                color: color01
            },
            {
                label: "Dave Gamache",
                data: 100,
                color: color02
            },
            {
                label: "Athul Athreya",
                data: 250,
                color: color03
            },
            {
                label: "Danilo Tanić",
                data: 250,
                color: color04
            },
            {
                label: "Cihangir Öziş",
                data: 250,
                color: color05
            },
            {
                label: "Nicolas Quod",
                data: 250,
                color: color07
            }
        ];

        var options = {
            series: {
                pie: {
                    show: true,
                    innerRadius: 0.5
                }
            },
            grid: {
                hoverable: true
            },
            tooltip: true,
            tooltipOpts: {
                content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
                shifts: {
                    x: 20,
                    y: 0
                },
                defaultTheme: false
            },
            legend: {
                show: true
            }
        };

        $.plot($("#DonutHole"), dataforPie, options);
        

    };
    
    
    


    return {
        init: function() {

            handleBasicPie();
            handlePieWithoutLegend();
            handlePieLabelFormatter();
            handlePieLabelRadius();
            handleRectangularPie();
            handleDonutHole();

        }

    };
}();    // Handel Dashboard
