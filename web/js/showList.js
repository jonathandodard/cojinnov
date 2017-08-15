function customersList(data) {
    for (var counter = 0; counter < data.length; counter ++){
        $('.co-js-search').append(
            '<tr class="co-js-search-result">'+
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


function productsList(data) {
    for (var counter = 0; counter < data.length; counter ++){
        $('.co-js-search').append(
            '<tr class="co-js-search-result">'+
            '<td class="center">' + data[counter].Type + ' </a></td>' +
            '<td class="center"><a href="/product/show/' + data[counter].Id + ' "> ' + data[counter].Reference + '</a></td>' +
            '<td class="center">' + data[counter].Name + '</td>' +
            '<td class="center">' + data[counter].Category + '</td>' +
            '<td class="center">' + data[counter].ConditionProduct + '</td>' +
            '<td class="center">' + data[counter].Duration + '</td>' +
            '<td class="center">' + data[counter].Pcb + '</td>' +
            '<td class="center">' + data[counter].SaleUnit + '</td>' +
            '<td class="center">' + data[counter].Tg + '</td>' +
            '<td class="center">' + data[counter].Ts + '</td>' +
            '<td class="center">' + data[counter].Tb + '</td>' +
            '<td class="center">' + data[counter].TaOne + '</td>' +
            '<td class="center">' + data[counter].TaTwo + '</td>' +
            '<td class="center">' + data[counter].Ppdia + '</td>' +
            '<td class="center">'+
            '</tr>'
        )
    }
}
