







jQuery(document).ready(function () {
    
    handle_Map();
    handle_Sales();
    handle_WebStats();
    handle_Visitors();
    handle_Calendar();
    
});


function handle_Map() {
    
    $('.dbMapWorld').vectorMap({
        map: 'world_mill_en',
        backgroundColor: 'transparent',
        series: {
            regions: [{
                    values: gdpData,
                    scale: ['#17BAE6', '#02A2C6'],
                    normalizeFunction: 'polynomial'
                }]
        },
        hoverOpacity: 0.7,
        hoverColor: false
    });
    
};


function handle_Sales() {
    
    Morris.Line({
        element: 'chaerSales',
        data: [
            {y: '2016-12-10', a: 2, b: 4},
            {y: '2016-12-11', a: 4, b: 6},
            {y: '2016-12-12', a: 7, b: 10},
            {y: '2016-12-13', a: 5, b: 7},
            {y: '2016-12-14', a: 6, b: 9},
            {y: '2016-12-15', a: 9, b: 12},
            {y: '2016-12-16', a: 18, b: 20}
        ],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Sales', 'Visitors'],
        resize: true,
        hideHover: true,
        xLabels: 'day',
        gridTextSize: '10px',
        lineColors: ['#00C9E6', '#FFC017'],
        gridLineColor: '#E5E5E5'
    });

};


function handle_WebStats() {
    
    Morris.Bar({
        element: 'chartStats',
        data: [
            {y: 'Jan 2', a: 75, b: 35},
            {y: 'Jan 3', a: 64, b: 26},
            {y: 'Jan 4', a: 78, b: 39},
            {y: 'Jan 5', a: 82, b: 34},
            {y: 'Jan 6', a: 86, b: 39},
            {y: 'Jan 7', a: 94, b: 40},
            {y: 'Jan 7', a: 96, b: 41}
        ],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Page Views', 'Visitors'],
        barColors: ['#5F69E0', '#7EC857'],
        gridTextSize: '10px',
        hideHover: true,
        resize: true,
        gridLineColor: '#E5E5E5'
    });

};


function handle_Visitors() {
    
    Morris.Donut({
        element: 'chartVisitors',
        data: [
            {label: "Returned", value: 2513},
            {label: "New", value: 764},
            {label: "Registred", value: 311}
        ],
        colors: ['#5F69E0', '#363A5C', '#7EC857'],
        resize: true
    });

};


function handle_Calendar() {
    
    if (!jQuery().fullCalendar) { return; }

    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();


    $('.calaendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        selectable: true,
        events: [
            {
                title: 'Lorem ipsum dolor',
                start: new Date(y, m, 1),
                msg: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
                color: '#FF5F2D'
            },
            {
                title: 'consectetur adipiscing',
                start: new Date(y, m, 3),
                end: new Date(y, m, 5),
                msg: 'Nullam sed tortor vel leo convallis facilisis',
                color: '#517BA8'
            },
            {
                title: 'Phasellus nisi libero',
                start: new Date(y, m, d - 3, 16, 0),
                allDay: false,
                msg: 'suscipit sed nunc vitae, molestie tempor ex. Proin eget enim ligula. Vestibulum id nisi justo',
                color: '#FF6562'
            },
            {
                title: 'Donec aliquet mollis',
                start: new Date(y, m, d + 4, 16, 0),
                allDay: false,
                msg: 'Pellentesque tincidunt et dui vitae iaculis. Nulla facilisi. Proin at nulla sit amet arcu tempus laoreet. Duis nibh velit, dictum consectetur fringilla vitae, tempor eu lectus',
                color: '#59534A'
            },
            {
                title: 'Maecenas eu nibh',
                start: new Date(y, m, d - 5),
                end: new Date(y, m, d - 2),
                msg: 'Nullam sed tortor vel leo convallis facilisis',
                color: '#898BE0'
            },
            {
                title: 'Cum sociis natoque penatibus',
                start: new Date(y, m, d - 3, 16, 0),
                allDay: false,
                msg: 'Vivamus feugiat nibh ut tortor efficitur volutpat',
                color: '#B8D67D'
            },
            {
                title: 'Lorem ipsum dolor sit amet',
                start: new Date(y, m, d, 10, 30),
                allDay: false,
                color: '#7AC70C',
                msg: 'Sed bibendum felis id magna semper, sit amet volutpat nibh vestibulum',
                editable: false
            },
            {
                title: 'Aliquam hendrerit libero',
                start: new Date(y, m, d + 1, 19, 0),
                end: new Date(y, m, d + 1, 22, 30),
                msg: 'Mauris et dignissim augue. Vestibulum a gravida arcu. Vestibulum eget massa faucibus risus pharetra aliquet',
                color: '#7AC70C'
            },
            {
                title: 'Personal Leave',
                start: new Date(y, m, d, 12, 0),
                end: new Date(y, m, d, 14, 0),
                msg: 'Vestibulum a gravida arcu. Vestibulum eget massa faucibus risus pharetra aliquet',
                color: '#ff6600'
            },
            {
                title: 'Planed Leave',
                start: new Date(y, m, 28),
                end: new Date(y, m, 29),
                msg: 'Praesent tincidunt mi volutpat ligula accumsan tristique',
                color: '#ffb700'

            }
        ],
        eventRender: function (e, elm) {
            elm.popover({
                title: e.title,
                placement: 'top',
                html: true,
                content: e.msg,
                trigger: 'click',
                container: "body"
            });
        }
    });

};


