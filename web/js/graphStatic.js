var jsonStatic = $('#chart').attr('data-static');
var tabStatic = JSON.parse(jsonStatic);

var chart = c3.generate({
    bindto: '#chart',
    data: {
        columns: [
            tabStatic[1],
            tabStatic[2],

        ],
        types: {
            data1: 'spline',
            data2: 'spline',
        }
    }
});