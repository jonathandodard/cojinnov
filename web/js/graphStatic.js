var jsonStatic = $('#chart').attr('data-static');
var tabStatic = JSON.parse(jsonStatic);
var jsonStaticTopTen = $('#chart2').attr('data-static');
var tabStaticTopTen = JSON.parse(jsonStaticTopTen );

var chart1 = c3.generate({
    size: {
        width: $('.co-js-size').width()-50
    },
    bindto: '#chart',
    data: {
        columns: [
            tabStatic[1],
            tabStatic[2]
        ],
        names: {
            data1: 'total HT',
            data2: 'total TTC'
        },
        types: {
            data1: 'area-step',
            data2: 'area-step'
        }
    },
    axis: {
        x: {
            type: 'category',
            categories: ['trimestre 1', 'trimestre 2', 'trimestre 3', 'trimestre 4']
        }
    },
});


var chart2 = c3.generate({
    size: {
        width: $('.co-js-size').width()-50
    },
    bindto: '#chart2',
    data: {
        columns: [
            tabStaticTopTen[2]
        ],
        names: {
            data1: 'quantité'
        },
    },
    axis: {
        x: {
            type: 'category',
            categories: tabStaticTopTen[1]
        }
    }
});

