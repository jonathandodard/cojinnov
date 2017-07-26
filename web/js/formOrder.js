var tabProducts = [];
$('.search-order').keyup(function (e) {
    if (e.which == 13) {
        search($(this))
    }
});

function search(element) {
    if (element.val().length > 2) {
        $.ajax({
            url: $('.search-order').attr('data-url'),
            data: {'data': element.val()},
            success: function (data) {
                productsList(data)
            }
        })
    }
}

function productsList(data) {
    for (var counter = 0; counter < data.length; counter++) {
        $('.co-js-search').append(
            '<tr class="co-js-search-result">' +
            '<td class="center">' + data[counter].Reference + '</a></td>' +
            '<td class="center">' + data[counter].Name + '</td>' +
            '<td class="center">' + data[counter].ConditionProduct + '</td>' +
            '<td class="center">' + data[counter].TaTwo + '</td>' +
            '<td class="center">' + data[counter].TaTwo + '</td>' +
            '<td class="center">' + data[counter].Ppdia + '</td>' +
            '<td class="center">' +
            '</tr>'
        )
    }
}