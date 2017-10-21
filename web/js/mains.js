$('.button-collapse').sideNav({
    menuWidth: 300, // Default is 300
    edge: 'right',
});
$(document).ready(function(){
    $('.modal').modal();
});

$('.modal-user').on('click', function(){
    $('#modal_user').modal('open');
});

$('.hover-view').mouseover(function() {
    $( this ).find('i').css( "display", 'inline-block');
    $('.co-js-bouton-edit-name').on('click', function () {
        $('.co-js-input-edit-name').k();
        $('.co-js-input-edit-name').keypress(function (e) {
            if(e.which == 13) {
                console.log('test');
            }
        });
    });
    $('.co-js-bouton-edit-email').on('click', function () {
        $('.co-js-input-edit-email').toggle();
        $('.co-js-input-edit-email').keypress(function (e) {
            if(e.which == 13) {
                console.log('test2');
            }
        });
    });
});
$('.hover-view').mouseleave(function() {
    $( this ).find('i').css( "display", 'none');
});

// $('.dateAt').on('click',function () {
//     $(this).pickadate({
//         selectMonths: true, // Creates a dropdown to control month
//         selectYears: 15, // Creates a dropdown of 15 years to control year,
//         today: 'Today',
//         clear: 'Clear',
//         close: 'Ok',
//         closeOnSelect: false // Close upon selecting a date,
//     });
// });
// $('.dateTo').on('click',function () {
//     $(this).pickadate({
//         selectMonths: true, // Creates a dropdown to control month
//         selectYears: 15, // Creates a dropdown of 15 years to control year,
//         format: 'd mmmm, yyyy',
//         today: 'Today',
//         clear: 'Clear',
//         close: 'Ok',
//         closeOnSelect: false // Close upon selecting a date,
//     });
// });