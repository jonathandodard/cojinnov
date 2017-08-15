$('.search').keyup(function () {
    $('.co-js-search tr').css( "display", "none" );
    if ($( this ).val().length == 0) {
        $('.co-js-search tr').toggle();
        $('.co-js-search-result').remove();
    }
    search($( this ))
});

function search(element) {
    if (element.val().length > 0) {
        $.ajax({
            url: $('.search').attr('data-url'),
            data: {'data': element.val()},
            success: function (data) {
                if($('.search').attr('data-type') == 'product') {
                    productsList(data);
                } else if ($('.search').attr('data-type') == 'customer'){
                    customersList(data);
                }
            }
        })
    }
}