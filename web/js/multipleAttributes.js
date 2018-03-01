/**
 * type definition product
 * @type {*|jQuery|HTMLElement}
 */
const inputDefProduct = $('.input_def_product');
const addDefProduct = $('#add_def_product');
const listDefProduct = $('#list_def_product');

addDefProduct.on('click', function(){
    let li = document.createElement("li");
    li.className = 'attributes_product';
    let liContent = document.createTextNode(inputDefProduct[0].value);

    li.append(liContent);
    listDefProduct.append(li);

    let arrayAttributes = [];
    let listAttributes = $('.attributes_product');

    for (let index = 0; index < listAttributes.length; index++) {
        arrayAttributes.push(listAttributes[index].innerText);
    }

    let jsonAttribute = JSON.stringify(arrayAttributes);

    $('#appBundle_provider_productDefinition').val(jsonAttribute)
});

/**
 * type price
 * @type {*|jQuery|HTMLElement}
 */
const input_add_price = $('.input_add_price');
const add_price = $('#add_price');
const list_price = $('#list_price');

add_price.on('click', function(){
    let li = document.createElement("li");
    li.className = 'attribute_price';
    let liContent = document.createTextNode(input_add_price[0].value);

    li.append(liContent);
    list_price.append(li);

    let arrayAttributes = [];
    let listAttributes = $('.attribute_price');


    for (let index = 0; index < listAttributes.length; index++) {
        arrayAttributes.push(listAttributes[index].innerText);
    }
    let jsonAttribute = JSON.stringify(arrayAttributes);

    $('#appBundle_provider_priceDefinition').val(jsonAttribute);
});
