<?php
?>
<script src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/jquery.countdown.min.js"></script>

<script>
    // const brandCarouselElement = document.querySelector('#brandCarousel')

    // const brandCarousel = new bootstrap.Carousel(brandCarouselElement, {
    //     interval: 1800
    // })
    // $('.carousel-item').slick({
    //     slidesToShow: 6,
    //     slidesToScroll: 1,
    //     autoplay: true,
    //     autoplaySpeed: 2000,
    // });
</script>
<script>
    const myCarouselElement = document.querySelector('#myCarousel')

    const carousel = new bootstrap.Carousel(myCarouselElement, {
        interval: 1800
    })

    $(document).ready(function () {
        $('.best-sellers-products').slick({
            dots: true,
            infinite: false,
            speed: 400,
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    });

    $(document).ready(function () {
        $('.special-products-info').slick({
            dots: true,
            infinite: true,
            speed: 400,
            slidesToShow: 2,
            slidesToScroll: 1,
            arrows: true,
        });
    });

    $(".box-timer").countdown("2024/01/01", function (event) {
        $(".day .number").text(
            event.strftime('%D ')
        );
        $('.hour .number').text(
            event.strftime('%H ')
        );
        $('.min .number').text(
            event.strftime('%M ')
        );
        $('.sec .number').text(
            event.strftime('%S ')
        );
    });

    $('.brand-logo').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
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
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
</script>