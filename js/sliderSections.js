// Main banner slider

$('.main-pic').slick({
    arrows: false,
    autoplay: true,
    dots: true
});

// Partners slider
$('.partners').slick({
    arrows: false,
    autoplay: true,
    slidesToShow: 7,
    draggable: false,
    variableWidth: true,
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
                slidesToShow: 1,
                slidesToScroll:1
            }
        }
    ]
});

// Clients slider
$('.clients-img').slick ({
    arrows: false,
    autoplay: true,
    slidesToShow: 7,
    draggable: false,
    variableWidth: true,
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 5,
                slidesToScroll:1,
                infinite: true
            }
        },
        {
            breakpoint: 996,
            settings: {
                slidesToShow:3
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow:2
            }
        }
    ]
});