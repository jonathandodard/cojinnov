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



$('.co-js-bouton-edit-name').mouseenter(function () {
    $('.co-js-icon-edit-name').css('display','inline-block');
});
$('.co-js-bouton-edit-name').mouseleave(function () {
    $('.co-js-icon-edit-name').css('display','none');
});
$('.co-js-bouton-edit-email').mouseenter(function () {
    $('.co-js-icon-edit-email').css('display','inline-block');
});
$('.co-js-bouton-edit-email').mouseleave(function () {
    $('.co-js-icon-edit-email').css('display','none');
});

$('.co-js-icon-edit-name').on('click', function () {
    $('.co-js-input-edit-name').css('display','inline-block');
});
$('.co-js-icon-edit-email').on('click', function () {
    $('.co-js-input-edit-email').css('display','inline-block');
});
$('.co-js-input-edit-name').keypress(function (e) {
    if(e.which == 13) {
        var name = $(this).val();
        if (name.length > 0) {
            $.ajax({
                url: $(this).attr('data-url'),
                data: {'data': name},
                success: function () {
                    $('.co-js-input-edit-name').css('display','none');
                    $('.co-js-bouton-edit-name').text(name);
                    $('.co-js-link-user').text(name);
                }
            });
        }
    }
});
$('.co-js-input-edit-email').keypress(function (e) {
    if(e.which == 13) {
        var email = $(this).val();
        if (email.length > 0) {
            $.ajax({
                url: $(this).attr('data-url'),
                data: {'data': email },
                success: function () {
                    $('.co-js-input-edit-email').css('display','none');
                    $('.co-js-bouton-edit-email').text(email);

                }
            });
        }
    }
});