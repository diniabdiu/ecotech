<!DOCTYPE html>

<head>
    <?php include '../../../../inc/head-2.php' ?>
    <style>
        .img-goback {
            color: #fff;
        }

        .img-goback:hover {
            color: #fff;
        }

        .title-inner-product {
            color: #fff;
        }

        .title-inner-product::after {
            background: #fff;
        }

        .nav-color {
            background-color: #262626;
        }
    </style>
</head>

<body>
<?php include("../../../../inc/header-2.php") ?>
  
    <div class="">
        <div class="wrapper wrapper-products  position-relative">
            <div class="align-self-center w-100">
                <a href="../../../../our/" class="img-goback">
                    <h2><img src="../../../img/backbutton/Group 3086.png" alt=""> PRODUCTS</h2>
                </a>


                <div class="main-carousel  animated fadeInUp">
                    <div class="carousel-cell baza">
                        <div class="wrapper-slide">
                            <a href="../../../inner-products/putzgrund/" class="">
                                <img src="../../../img/products/ndertimore/baza/Group 3257.png" width="250px"
                                    class="img-fluid" alt="">
                                <h4 class="title-inner-product text-center">PUTZ <br>GRUND</h4>
                                <h6 class="subtitle-inner-product text-center">Acrylic quartz primer</h6>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-cell baza">
                        <div class="wrapper-slide">
                            <a href="../../../inner-products/beton/" class="">
                                <img src="../../../img/products/ndertimore/baza/Rectangle 82.png" width="250px"
                                    class="img-fluid" alt="">
                                <h4 class="title-inner-product text-center">BETON <br>CONTACT</h4>
                                <h6 class="subtitle-inner-product text-center">Acrylic quartz primer</h6>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-cell baza">
                        <div class="wrapper-slide">
                            <a href="../../../inner-products/grundstandard/" class="">
                                <img src="../../../img/products/ndertimore/baza/Rectangle 83.png" width="250px"
                                    class="img-fluid" alt="">
                                <h4 class="title-inner-product text-center">GRUND <br>STANDARD</h4>
                                <h6 class="subtitle-inner-product text-center">Disperzion i brendshem</h6>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-cell baza">
                        <div class="wrapper-slide">
                            <a href="../../../inner-products/tiefgrund/" class="">

                                <img src="../../../img/products/ndertimore/baza/Rectangle 84.png" width="220px"
                                    class="img-fluid" alt="">
                                <h4 class="title-inner-product text-center">TIEF <br>GRUND-LF</h4>
                                <h6 class="subtitle-inner-product text-center">Kratzputz - Full</h6>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-cell baza">
                        <div class="wrapper-slide">
                            <a href="../../../inner-products/microgrund/" class="">

                                <img src="../../../img/products/ndertimore/baza/Rectangle 85.png" width="220px"
                                    class="img-fluid" alt="">
                                <h4 class="title-inner-product text-center">MICRO <br>GRUND</h4>
                                <h6 class="subtitle-inner-product text-center">Kratzputz - Full</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- <a href="../../products/ndertimore/llaqe.html" class="img-gonextProduct">
                    <h2>NEXT PRODUCT&nbsp;  <img src="../../img/backbutton/Group 3316.png" alt=""></h2>
                </a> -->
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js'></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="../../js/main.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        // $('.slider-for').slick({
        //     slidesToShow: 2,
        //     slidesToScroll: 3,
        //     arrows: false,
        //     fade: true,
        //     asNavFor: '.slider-nav'
        // });


        $('.owl-carousel').owlCarousel({
            loop: true,
            nav: true,
            margin: 10,
            items: 4.5,
            // responsive: {
            //     0: {
            //         items: 1
            //     },
            //     600: {
            //         items: 3
            //     },
            //     1000: {
            //         items: 5
            //     }
            // }
        })
        $(document).ready(function () {
            $('.main-carousel').flickity({
                // options
                groupCells: false,
                cellAlign: 'left',
                contain: true,
                pageDots: false
            });
        });
        $('.slick').slick({
            infinite: false,
            draggable: true,
            speed: 200,
            slidesToShow: 4.5,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: false,
                        dots: false
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1.5,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });

        // $('#carouselExample').on('slide.bs.carousel', function (e) {
        //     var $e = $(e.relatedTarget);

        //     var idx = $e.index();
        //     console.log("IDX :  " + idx);

        //     var itemsPerSlide = 6;
        //     var totalItems = $('.carousel-item').length;

        //     if (idx >= totalItems - (itemsPerSlide - 1)) {
        //         var it = itemsPerSlide - (totalItems - idx);
        //         for (var i = 0; i < it; i++) {
        //             // append slides to end
        //             if (e.direction == "left") {
        //                 $('.carousel-item').eq(i).appendTo('.carousel-inner');
        //             }
        //             else {
        //                 $('.carousel-item').eq(0).appendTo('.carousel-inner');

        //             }

        //         }
        //     }
        // });
        $(".slick").swipe({
            swipe: function (event, direction, distance, duration, fingerCount, fingerData) {
                console.log('here');
                if (direction == 'left') $(this).carousel('next');
                if (direction == 'right') $(this).carousel('prev');
            },
            allowPageScroll: "vertical"
        });

    </script>
</body>

</html>