$('.carousel-view').slick({
    dots: true,
    infinite: true,
    speed: 300,
    autoplay: true,
    autoplaySpeed: 2000,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
        {
            breakpoint: 1360,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
            }
        },
        {
            breakpoint: 1164,
            settings: {
                dots: false,
                slidesToShow: 2,
                slidesToScroll: 2,
            }
        },
        {
            breakpoint: 935,
            settings: {
                dots: false,
                slidesToShow: 3,
                slidesToScroll: 3,
            }
        },
        {
            breakpoint: 860,
            settings: {
                dots: false,
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 520,
            settings: {
                dots: false,
                slidesToShow: 2,
                slidesToScroll: 2
            }
        }
    ]
});
$('.carousel-view2').slick({
    dots: true,
    infinite: true,
    speed: 300,
    autoplay: true,
    autoplaySpeed: 2000,
    slidesToShow: 4,
    slidesToScroll: 4,
});