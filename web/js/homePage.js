$('.carousel.carousel-slider').carousel({fullWidth: true});

setInterval(function(){
    $('.carousel.carousel-slider').carousel('next');
}, 5000);