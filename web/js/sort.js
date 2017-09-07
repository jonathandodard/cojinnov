$('.co-js-sort').on('click', function () {
    $.ajax({
        url: $(this).attr('data-url'),
        data: {'data': $(this).attr('data-sort')},
        success: function (data) {
            removeTr(data);
        }
    })
});

function removeTr(data) {
    $('.co-js-remove-sort').remove();
    customersListSort(data);
}

function customersListSort(data) {
    for (var counter = 0; counter < data.length; counter ++){
        $('.co-js-search').append(
            '<tr class="co-js-remove-sort">'+
                '<td class="center"><a href="/customer/show/' + data[counter].Id + ' "> ' + data[counter].NumberAccount + ' </a></td>' +
                '<td class="center">' + data[counter].Entitled + '</td>' +
                '<td class="center">' + data[counter].Ranking + '</td>' +
                '<td class="center">' + data[counter].NameRepresentative + '</td>' +
                '<td class="center">' + data[counter].Name + '</td>' +
                '<td class="center">' + data[counter].Email + '</td>' +
                '<td class="center">' + data[counter].Address + '</td>' +
                '<td class="center">' + data[counter].AdditionalAddress + '</td>' +
                '<td class="center">' + data[counter].ZipCode + '</td>' +
                '<td class="center">' + data[counter].City + '</td>' +
                '<td class="center">' + data[counter].PhoneNumber + '</td>' +
                '<td class="center">'+
            '</tr>'
        )
    }
}