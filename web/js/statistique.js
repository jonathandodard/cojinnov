var chart = c3.generate({
    bindto: '#chart',
    data: {
        columns: [
            ['data1', 560, 1000, 500, 4400],
            ['data2', 2560, 1000, 500, 4400],
            ['data3', 1560, 100, 500, 4400],
            ['data4', 3560, 10, 500, 4400],
            ['data5', 60, 150, 500, 4400],
        ],
        types: {
            data1: 'bar',
            data2: 'spline',
            data3: 'bar',
            data4: 'spline',
            data5: 'bar'
        }
    }
});