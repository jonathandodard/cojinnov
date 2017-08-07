var tabProducts = [];
var idProduct = '';
var priceByProduct = 0;
var priceByProductQuantity = 0;
var quantity = 0;
var test = [];
var datas = '';
$(document).ready(function(){


    $('.modal').modal();


    $('.search-order').keyup(function (e) {
        if (e.which == 13) {
            search($(this))
        }
    });

    function search(element) {
        $.ajax({
            url: $('.search-order').attr('data-url'),
            data: {'data': element.val()},
            success: function (data) {
                datas = data;
                $('#modal1').modal('open');
                $( ".co-js-price-modal" ).focus();
                $('.co-js-price-modal').keyup(function (e) {
                    if (e.which == 13) {
                        addPrice();
                    }
                });
            }
        })
    }

    function productsList(data) {
        for (var counter = 0; counter < data.length; counter++) {
            idProduct = data[counter].Id;
            $('.co-js-search').append(
                '<tr class="co-js-search-result">' +
                    '<td class="center">' + data[counter].Reference + '</a></td>' +
                    '<td class="center">' + data[counter].Name + '</td>' +
                    '<td class="center">' + priceByProduct + '</td>' +
                    '<td class="center">' + quantity + '</td>' +
                    '<td class="center">' + priceByProductQuantity + '</td>' +
                    '<td class="center">' +
                '</tr>'
            )

        }
    }

    function insertProduct() {
        $.ajax({
            url: $('.search-order').attr('data-url-insert'),
            data: {
                'product':idProduct,
                'customer':$('.customer-id').attr('value'),
                'quantity': quantity,
                'price': priceByProduct,
                'status':'2',
            },
        })
    }

    function addPrice() {
        priceByProduct = $('.co-js-price-modal').val();
        $('#modal1').modal('close');

        addQuantity()
    }

    function addQuantity() {
        $('#modal2').modal('open');
        $( ".co-js-quantity-modal" ).focus();

        $('.co-js-quantity-modal').keyup(function (e) {
            if (e.which == 13) {

                quantity = $('.co-js-quantity-modal').val();

                $('#modal2').modal('close');

                priceByProductQuantity = quantity*priceByProduct;

                productsList(datas);
                insertProduct();
            }
        });


    }

    function deleteProduct() {

    }

    function updateProduct() {

    }
});
