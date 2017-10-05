var jsonStatic = $('#chart').attr('data-static');
var tabStatic = JSON.parse(jsonStatic);
var jsonStaticTopTen = $('#chart2').attr('data-static');
var tabStaticTopTen = JSON.parse(jsonStaticTopTen );
console.log(tabStaticTopTen[2]);
console.log(tabStatic[1]);
console.log(tabStatic[2]);

var chart = c3.generate({
    bindto: '#chart',
    data: {
        columns: [
            tabStatic[1],
            tabStatic[2]
        ]
    },
    type: 'bar',
    axis: {
        x: {
            type: 'category',
            categories: ['trimestre 1', 'trimestre 2', 'trimestre 3', 'trimestre 4']
        }
    },
    zoom: {
        enabled: true
    }
});


var chart = c3.generate({
    bindto: '#chart2',
    data: {
        columns: [
            tabStaticTopTen[2]
        ]
    },
    axis: {
        x: {
            type: 'category',
            categories: tabStaticTopTen[1]
        }
    }
});

