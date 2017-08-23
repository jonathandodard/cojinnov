var idProduct = '';
var priceByProduct = 0;
var quantity = 0;
var test = [];
var datas = '';
var isDoublon = false;
var product = {};

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
                product.id = data[0].Id;
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
    function isDouble(ref) {
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
    function modal (isDoublon) {
        if(isDoublon){
            $('#modalDoublon').modal('open');
        } else {
            $('#modalPrice').modal('open');
            $( ".co-js-price-modal" ).focus();
        }
    }

    function addQuantity() {
        $('#modalPrice').modal('close');
        $('#modalQuantity').modal('open');
        $( ".co-js-quantity-modal" ).focus();
    }

    function addTva() {
        $('#modalQuantity').modal('close');
        $('#modalTva').modal('open');
        $( ".co-js-tva-modal" ).focus();
    }



    function insertProduct() {
        $.ajax({
            url: $('.search-order').attr('data-url-insert'),
            data: {
                'product': product.id,
                'customer': $('.customer-id').attr('value'),
                'quantity': product.quantity,
                'price': product.price,
                'tva': product.tva,
                'status': '2'
            },
            success: function (data) {
                productsList(data);
            }
        })
    }

    function productsList(data) {
        $('.co-js-search').append(
            '<tr  id="'+data.productsOrder.id+'" class="co-js-search-result">' +
                '<td class="center co-js-ref" data-reference="'+data.valuesProduct.reference+'">' + data.valuesProduct.reference + '</a></td>' +
                '<td class="center">' + data.valuesProduct.name + '</td>' +
                '<td id="'+data.productsOrder.id+'-price-product" class="center co-js-update-price-product" data-id="'+data.productsOrder.id+'">' + data.productsOrder.price + '</td>' +
                '<td id="'+data.productsOrder.id+'-quantity-product" class="center co-js-update-quantity-product" data-id="'+data.productsOrder.id+'">' + data.productsOrder.quantity + '</td>' +
                '<td id="'+data.productsOrder.id+'-ht-product" class="center price-product-ht co-js-update-ht-product" data-value="'+ data.productsOrder.htPrice +'">' + data.productsOrder.htPrice + '</td>' +
                '<td id="'+data.productsOrder.id+'-ttc-product" class="center price-product-ttc co-js-update-ttc-product" data-value="'+ data.productsOrder.ttcPrice +'">' + data.productsOrder.ttcPrice + '</td>' +
                '<td class="center co-js-delete-product" data-id="'+ data.productsOrder.id +'"><i class="material-icons">delete</i></td>' +
                '<td class="center">' +
            '</tr>'
        );
        totalPriceTTC();
        totalPriceHT();
        // $( ".search-order" ).val("");
        // $( ".co-js-price-modal" ).val("");
        // $( ".co-js-quantity-modal" ).val("");
        $( ".search-order" ).focus();


        $('.co-js-update-price-product').on('click', function() {
            $('#updatePrice').modal('open');
            $('#updatePrice input').attr('id', $(this).attr('data-id'))
        });
        $('.co-js-update-quantity-product').on('click', function() {
            $('#updateQuantity').modal('open');
            $('#updateQuantity input').attr('id', $(this).attr('data-id'))
        });
        $('.co-js-delete-product').on('click', function() {
            deleteProduct($(this).attr('data-id'));
            $('#'+$(this).attr('data-id')).remove();
        });
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
        var inputTTTC = parseInt($('#appbundle_customer_totalTTC').val());
        $('.price-product-ttc').each(function () {
            var totalPriceTTC = inputTTTC;
            totalPriceTTC = totalPriceTTC +  parseInt($(this).attr('data-value'));
            $('#appbundle_customer_totalTTC').val(totalPriceTTC)
        })
    }






    function updatePrice(idProduct, price)
    {
        $.ajax({
            url: '/order/product/update/price',
            data: {
                'id': idProduct,
                'price': price,
            },
            success: function (data) {
                $('#updateQuantity').modal('close');
                $('#'+data.id+'-price-product').text(data.price);
                $('#'+data.id+'-ht-product').text(data.priceHt);
                $('#'+data.id+'-ttc-product').text(data.priceTtc);
                totalPriceHT();
                totalPriceTTC();
            }
        })
    }

    function updateQuantity(idProduct, quantity)
    {
        $.ajax({
            url: '/order/product/update/quantity',
            data: {
                'id': idProduct,
                'quantity': quantity,
            },
            success: function (data) {
                $('#updatePrice').modal('close');
                $('#'+data.id+'-quantity-product').text(data.quantity);
                $('#'+data.id+'-ht-product').text(data.priceHt);
                $('#'+data.id+'-ttc-product').text(data.priceTtc);
                totalPriceHT();
                totalPriceTTC();
            }
        })
    }

    function deleteProduct(idProduct) {
        $.ajax({
            url: '/order/product/delete',
            data: {
                'id': idProduct,
            },
            success: function (data) {
                totalPriceHT();
                totalPriceTTC();
            }
        })
    }

    /**
     * add price
     * return addQuantity()
     */
    $('.co-js-price-modal').keypress(function (e) {
        if (e.which == 13) {
            e.stopImmediatePropagation();

            product.price = $('.co-js-price-modal').val();

            addQuantity();
        }
    });

    /**
     * add quantity
     * return addTva()
     */
    $('.co-js-quantity-modal').keypress(function (e) {
        if (e.which == 13) {
            e.stopImmediatePropagation();

            product.quantity = $('.co-js-quantity-modal').val();

            $('#modalQuantity').modal('close');

            addTva();
        }
    });

    /**
     * add Tva
     * return insert product
     */
    $('.co-js-tva-modal').keypress(function (e) {
        if (e.which == 13) {
            e.stopImmediatePropagation();
            product.tva = $('.co-js-tva-modal').val();
            $('#modalTva').modal('close');
            insertProduct();
        }
    });

    /**
     * return updatePrice()
     */
    $('.co-js-update-price-modal').keypress(function (e) {
        if (e.which == 13) {
            e.stopImmediatePropagation();
            updatePrice($('#updatePrice input').attr('id'), $('.co-js-update-price-modal').val());
        }
    });

    /**
     * return updateQuantity()
     */
    $('.co-js-update-quantity-modal').keypress(function (e) {
        if (e.which == 13) {
            e.stopImmediatePropagation();
            updateQuantity($('#updateQuantity input').attr('id'), $('.co-js-update-quantity-modal').val());
        }
    });
});
