

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

        
var Area = function() {
    
    var handleBasicArea = function() {
        
        if (!jQuery.plot) { return; };
        
        var data = [
            [new Date("2016/01/03"), 10],
            [new Date("2016/01/04"), 7],
            [new Date("2016/01/05"), 9],
            [new Date("2016/01/06"), 11],
            [new Date("2016/01/07"), 8],
            [new Date("2016/01/08"), 12],
            [new Date("2016/01/09"), 16],
            [new Date("2016/01/10"), 10],
            [new Date("2016/01/11"), 14],
            [new Date("2016/01/12"), 9],
            [new Date("2016/01/13"), 14]
        ];


        //flot options
        var options = {
            series: {
                
            },
            legend: {
                show: false
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
                color: '#2695a6',
                tickColor: 'rgba(0,0,0,.1)'
            },
            xaxis: {
                show: true,
                color: '#f5f5f5',
                mode: "time",
                tickSize: [1, "day"],
                tickLength: 0,
                timeformat: "%d/%m",
                axisLabel: "Date"
            },
            tooltip: true,
            tooltipOpts: {
                content: "<strong>%s</strong><br> %x/16 : %y"
            },
            lines: {
                show: true,
                fill: .15,
                lineWidth: 1
            },
            stack: true,
            points: {
                show: true,
                lineWidth: 1.5,
                radius: 2,
                symbol: "circle",
                fill: true,
                fillColor: "#ffffff"
            }

        };

        $.plot($("#basicArea"), [
            {
                data: data,
                label: "Jarno Fabritius's Sale",
                color: color01
            }
        ], options);
        
    };
    
    var handleMultiArea = function () {
        
        if (!jQuery.plot) { return; };
        
        var data1 = [
            [new Date("2016/01/03"), 10], 
            [new Date("2016/01/04"), 7], 
            [new Date("2016/01/05"), 9], 
            [new Date("2016/01/06"), 11], 
            [new Date("2016/01/07"), 8],
            [new Date("2016/01/08"), 12],
            [new Date("2016/01/09"), 16],
            [new Date("2016/01/10"), 10],
            [new Date("2016/01/11"), 14],
            [new Date("2016/01/12"), 9],
            [new Date("2016/01/13"), 14]
        ];
        
        var data2 = [
            [new Date("2016/01/03"), 14], 
            [new Date("2016/01/04"), 11], 
            [new Date("2016/01/05"), 10], 
            [new Date("2016/01/06"), 12], 
            [new Date("2016/01/07"), 14],
            [new Date("2016/01/08"), 11],
            [new Date("2016/01/09"), 8],
            [new Date("2016/01/10"), 11],
            [new Date("2016/01/11"), 15],
            [new Date("2016/01/12"), 10],
            [new Date("2016/01/13"), 16]
        ];

        var data3 = [
            [new Date("2016/01/03"), 18], 
            [new Date("2016/01/04"), 9], 
            [new Date("2016/01/05"), 13], 
            [new Date("2016/01/06"), 11], 
            [new Date("2016/01/07"), 15],
            [new Date("2016/01/08"), 12],
            [new Date("2016/01/09"), 9],
            [new Date("2016/01/10"), 11],
            [new Date("2016/01/11"), 8],
            [new Date("2016/01/12"), 13],
            [new Date("2016/01/13"), 14]
        ];
        
        //flot options
        var options = {
                
            series: {
                             
            },
            legend:{
                show: false
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
                color: '#2695a6',
                tickColor: 'rgba(0,0,0,.1)'               
            }, 
            xaxis: {
                show: true,
                color: '#f5f5f5',
                mode: "time",
                tickSize: [1, "day"],
                tickLength: 0,
                timeformat: "%d/%m",
                axisLabel: "Date"
            }, 
            tooltip: true,
            tooltipOpts: {
                content: "<strong>%s</strong><br> %x/16 : %y"
            },
            lines: {
                show: true,
                fill: .15,
                lineWidth: 1
            },
            stack: true,
            points: {
                show: true,
                lineWidth: 1.5,
                radius: 2,
                symbol: "circle",
                fill: true,
                fillColor: "#ffffff"
            }
            
        };
        
        $.plot($("#multiAreaChart"), [ 
            {            
                data: data1,                
                label: "Jarno Fabritius's Sale",
                color: color01
            },
            {
                data: data2,                 
                label: "Jakub Antalík's Sale", 
                color: color02
            },
            {
                data: data3,
                label: "Piotr Adam Kwiatkowski's Sale",                                 
                color: color03
            }
        ], options);
        
    };
    
    var handleCurverArea = function () {
        
        if (!jQuery.plot) { return; };
        
        var data = [
            [new Date("2016/01/03"), 10], 
            [new Date("2016/01/04"), 7], 
            [new Date("2016/01/05"), 9], 
            [new Date("2016/01/06"), 11], 
            [new Date("2016/01/07"), 8],
            [new Date("2016/01/08"), 12],
            [new Date("2016/01/09"), 16],
            [new Date("2016/01/10"), 10],
            [new Date("2016/01/11"), 14],
            [new Date("2016/01/12"), 9],
            [new Date("2016/01/13"), 14]
        ];
        
        
        //flot options
        var options = {
                
            series: {
                curvedLines: {
                    apply: true,
                    active: true,
                    monotonicFit: true
                }                
            },
            legend:{
                show: false
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
                color: '#2695a6',
                tickColor: 'rgba(0,0,0,.1)'               
            }, 
            xaxis: {
                show: true,
                color: '#f5f5f5',
                mode: "time",
                tickSize: [1, "day"],
                tickLength: 0,
                timeformat: "%d/%m",
                axisLabel: "Date"
            }, 
            tooltip: true,
            tooltipOpts: {
                content: "<strong>%s</strong><br> %x/16 : %y"
            },
            lines: {
                show: true,
                fill: .15,
                lineWidth: 1
            },
            stack: true,
            points: {
                show: false,
                lineWidth: 1.5,
                radius: 2,
                symbol: "circle",
                fill: true,
                fillColor: "#ffffff"
            }
            
        };
        
        $.plot($("#curvedAreaChart"), [ 
            {            
                data: data,                
                label: "Jarno Fabritius's Sale",
                color: color04
            }
        ], options);
        
    };
    
    var handleMultiCurverArea = function() {

        if (!jQuery.plot) { return; };

        var data1 = [
            [new Date("2016/01/03"), 10], 
            [new Date("2016/01/04"), 7], 
            [new Date("2016/01/05"), 9], 
            [new Date("2016/01/06"), 11], 
            [new Date("2016/01/07"), 8],
            [new Date("2016/01/08"), 12],
            [new Date("2016/01/09"), 16],
            [new Date("2016/01/10"), 10],
            [new Date("2016/01/11"), 14],
            [new Date("2016/01/12"), 9],
            [new Date("2016/01/13"), 14]
        ];
        
        var data2 = [
            [new Date("2016/01/03"), 14], 
            [new Date("2016/01/04"), 11], 
            [new Date("2016/01/05"), 10], 
            [new Date("2016/01/06"), 12], 
            [new Date("2016/01/07"), 14],
            [new Date("2016/01/08"), 11],
            [new Date("2016/01/09"), 8],
            [new Date("2016/01/10"), 11],
            [new Date("2016/01/11"), 15],
            [new Date("2016/01/12"), 10],
            [new Date("2016/01/13"), 16]
        ];

        var data3 = [
            [new Date("2016/01/03"), 18], 
            [new Date("2016/01/04"), 9], 
            [new Date("2016/01/05"), 13], 
            [new Date("2016/01/06"), 11], 
            [new Date("2016/01/07"), 15],
            [new Date("2016/01/08"), 12],
            [new Date("2016/01/09"), 9],
            [new Date("2016/01/10"), 11],
            [new Date("2016/01/11"), 8],
            [new Date("2016/01/12"), 13],
            [new Date("2016/01/13"), 14]
        ];
        
        //flot options
        var options = {
                
            series: {
                curvedLines: {
                    apply: true,
                    active: true,
                    monotonicFit: true
                }                
            },
            legend:{
                show: false
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
                color: '#2695a6',
                tickColor: 'rgba(0,0,0,.1)'               
            }, 
            xaxis: {
                show: true,
                color: '#f5f5f5',
                mode: "time",
                tickSize: [1, "day"],
                tickLength: 0,
                timeformat: "%d/%m",
                axisLabel: "Date"
            }, 
            tooltip: true,
            tooltipOpts: {
                content: "<strong>%s</strong><br> %x/16 : %y"
            },
            lines: {
                show: true,
                fill: .15,
                lineWidth: 1
            },
            stack: true,
            points: {
                show: false,
                lineWidth: 1.5,
                radius: 2,
                symbol: "circle",
                fill: true,
                fillColor: "#ffffff"
            }
            
        };
        
        $.plot($("#multiCurverArea"), [ 
            {            
                data: data1,                
                label: "Jarno Fabritius's Sale",
                color: color05
            },
            {
                data: data2,                 
                label: "Jakub Antalík's Sale", 
                color: color06
            },
            {
                data: data3,
                label: "Piotr Adam Kwiatkowski's Sale",                                 
                color: color07
            }
        ], options);
       
    };
    
    
    
    return {
        init: function() {

            handleBasicArea();
            handleMultiArea();
            handleCurverArea();
            handleMultiCurverArea();
            
        }

    };
}();    // Handel Dashboard

