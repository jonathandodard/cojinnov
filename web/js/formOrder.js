var idProduct = '';
var priceByProduct = 0;
var quantity = 0;
var test = [];
var datas = '';
var isDoublon = false;

$(document).ready(function(){


    $('.modal').modal();

    $('.search-order').keypress(function (e) {
        if (e.which == 13) {
            e.stopImmediatePropagation();
            search($(this));

        }
    });

    /**
     * search product matches reference and call is double
     * @param element
     */
    function search(element) {
        $.ajax({
            url: $('.search-order').attr('data-url'),
            data: {'data': element.val()},
            success: function (data) {
                datas = data;
                if (!data) {
                    $('#modalReferenceNotExist').modal('open');
                    $('.search-order').val('')
                } else {
                    modal(isDouble(data));
                }
            }
        })
    }

    /**
     * checked if is duplicate
     * @param ref
     */
    function isDouble(ref){
        isDoublon = false;
        if ($('.co-js-ref').length) {
            $('.co-js-ref').each(function () {
                if( $(this).attr('data-reference') == ref[0].Reference ) {
                    isDoublon = true;
                }
            })
        }
    }

    /**
     * open modal duplicate or modal price
     */
    function modal() {
        if(isDoublon){
            $('#modalDoublon').modal('open');

        } else {
            $('#modal1').modal('open');
            $( ".co-js-price-modal" ).focus();

            $('.co-js-price-modal').keypress(function (e) {
                if (e.which == 13) {
                    e.stopImmediatePropagation();

                    priceByProduct = $('.co-js-price-modal').val();

                    addQuantity();
                }
            });
        }
    }

    function addQuantity() {
        $('#modal1').modal('close');
        $('#modal2').modal('open');
        $( ".co-js-quantity-modal" ).focus();

        $('.co-js-quantity-modal').keypress(function (e) {
            if (e.which == 13) {
                e.stopImmediatePropagation();

                quantity = $('.co-js-quantity-modal').val();

                $('#modal2').modal('close');

                productsList(datas);
            }
        });
    }

    function priceHT(quantity, price) {

        return quantity*price

    }

    function priceTTC(quantity, price) {

        var priceTVA = (priceHT(quantity, price)*$('#appbundle_customer_tva').val()/100);

        return parseInt(price*quantity)+parseInt(priceTVA)

    }

    function insertProduct() {
        $.ajax({
            url: $('.search-order').attr('data-url-insert'),
            data: {
                'product': idProduct,
                'customer': $('.customer-id').attr('value'),
                'quantity': quantity,
                'price': priceByProduct,
                'status': '2',
            }
        })
    }

    function productsList(data) {
        for (var counter = 0; counter < data.length; counter++) {
            console.log(idProduct = data[counter].Id);
            idProduct = data[counter].Id;
            $('.co-js-search').append(
                '<tr class="co-js-search-result">' +
                '<td class="center co-js-ref" data-reference="'+data[counter].Reference+'">' + data[counter].Reference + '</a></td>' +
                '<td class="center">' + data[counter].Name + '</td>' +
                '<td class="center">' + priceByProduct + '</td>' +
                '<td class="center">' + quantity + '</td>' +
                '<td class="center price-product-ht" data-value="'+priceHT(quantity,priceByProduct)+'">' + priceHT(quantity,priceByProduct) + '</td>' +
                '<td class="center price-product-ttc test" data-value="'+priceTTC(quantity,priceByProduct)+'">' + priceTTC(quantity,priceByProduct) + '</td>' +
                '<td class="center">' +
                '</tr>'
            )
        }
        insertProduct()
        totalPriceTTC();
        totalPriceHT();
        $( ".search-order" ).val("");
        $( ".co-js-price-modal" ).val("");
        $( ".co-js-quantity-modal" ).val("");
        $( ".search-order" ).focus();

    }
    
    function totalPriceHT() {
        var inputTHT = parseInt($('#appbundle_customer_totalHT').val());
        $('.price-product-ht').each(function () {
            var totalPriceHT = inputTHT;
            totalPriceHT = totalPriceHT +  parseInt($(this).attr('data-value'));

            $('#appbundle_customer_totalHT').val(totalPriceHT)
        })
    }
    
    function totalPriceTTC() {
        // console.log( $('.price-product-TTC'))
        var inputTTTC = parseInt($('#appbundle_customer_totalTTC').val());
        $('.price-product-ttc').each(function () {
            var totalPriceTTC = inputTTTC;
            totalPriceTTC = totalPriceTTC +  parseInt($(this).attr('data-value'));
            $('#appbundle_customer_totalTTC').val(totalPriceTTC)
        })
    }



    function deleteProduct() {

    }

    function updateProduct() {

    }
});
