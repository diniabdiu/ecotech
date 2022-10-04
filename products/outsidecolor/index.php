<!DOCTYPE html>

<head>
<?php include '../../inc/head-2.php' ?>
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
<?php include("../../inc/header-2.php") ?>
 
    <div class="wrapper wrapper-products  position-relative">
        <div class="align-self-center w-100">
            <a href="../../our/" class="img-goback">
                <h2><img src="../../assets/img/backbutton/Group 3086.png" alt=""> PRODUCTS</h2>
            </a>
           


            <div class="main-carousel  animated fadeInUp">
                <div class="carousel-cell">
                    <a href="../fassadenfarbe/" class="">
                            
                         
                        <img src="../../assets/img/products/ndertimore/ngjyrajashtme/fasadenfarbe.png" width="250px"
                            class="img-fluid" alt="">
                        <h4 class="title-inner-product text-center padding-bottom-28">FASSADENFARBE</h4>
                        <h6 class="subtitle-inner-product text-center">Disperzion i jashtem</h6>
                    </a>
                </div>
                
                <div class="carousel-cell">
                    <a href="../siliconfasad/" class="">
                        <img src="../../assets/img/products/ndertimore/ngjyrajashtme/Silicon Fassadenfarbe.png" width="250px"
                            class="img-fluid" alt="">
                        <h4 class="title-inner-product text-center">SILICON <br>FASSADENFARBE</h4>
                        <h6 class="subtitle-inner-product text-center">Siliconharz Farbe</h6>
                    </a>
                </div>
                
                <div class="carousel-cell">
                    <a href="../betonfarbe/" class="">
                            
                        <img src="../../assets/img/products/ndertimore/ngjyrajashtme/Betonfarbe.png" width="250px"
                            class="img-fluid" alt="">
                        <h4 class="title-inner-product text-center padding-bottom-28">BETONFARBE</h4>
                        <h6 class="subtitle-inner-product text-center">Siliconharz Farbe</h6>
                    </a>
                </div>
                

            </div>
            <!-- <a href="../../products/ndertimore/baza.html" class="img-gonextProduct">
                <h2>NEXT PRODUCT&nbsp;  <img src="../../img/backbutton/Group 3316.png" alt=""></h2>
            </a> -->
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
          $(document).ready(function () {
            $('.main-carousel').flickity({
                cellAlign: 'left',
                contain: true,
                pageDots: false,
                prevNextButtons: false,
                draggable: false
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

    </script>
</body>

</html>