$('.main-pic').slick({
    arrows: false,
    autoplay: true,
    dots: true
});

// Partners slider
$('.partners').slick({
    arrows: false,
    autoplay: true,
    slidesToShow: 9,
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 5,
                slidesToScroll: 1,
                infinite: true
            }
        },
        {
            breakpoint: 996,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
                slidesToScroll:1
            }
        }
    ]
});