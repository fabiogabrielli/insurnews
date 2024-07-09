$(document).ready(function(){
    $('.eventos').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: '<button class="custom-prev">❮</button>',
        nextArrow: '<button class="custom-next">❯</button>',
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});