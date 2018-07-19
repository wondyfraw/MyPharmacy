



$(function () {
    
    var cities = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('text'),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        prefetch: 'demo/data/citynames.json'
    });
    cities.initialize();

    var eltment1 = $('.element1');
    eltment1.tagsinput({
        tagClass: function (item) {
            switch (item.continent) {
                case 'Europe'   :
                    return 'label label-primary';
                case 'America'  :
                    return 'label label-danger label-important';
                case 'Australia':
                    return 'label label-success';
                case 'Africa'   :
                    return 'label label-default';
                case 'Asia'     :
                    return 'label label-warning';
            }
        },
        itemValue: 'value',
        itemText: 'text',
        typeaheadjs: {
            name: 'cities',
            displayKey: 'text',
            source: cities.ttAdapter()
        }
    });
    eltment1.tagsinput('add', {"value": 1, "text": "Amsterdam", "continent": "Europe"});
    eltment1.tagsinput('add', {"value": 4, "text": "Washington", "continent": "America"});
    eltment1.tagsinput('add', {"value": 7, "text": "Sydney", "continent": "Australia"});
    eltment1.tagsinput('add', {"value": 10, "text": "Beijing", "continent": "Asia"});
    eltment1.tagsinput('add', {"value": 13, "text": "Cairo", "continent": "Africa"});
    
});