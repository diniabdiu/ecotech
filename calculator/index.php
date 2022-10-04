<!DOCTYPE html>

<head>
<?php include '../inc/head.php'; ?>
    <style>
        .nav-color {
            background-color: #262626;
        }
    </style>
</head>

<body class="calcbody">
<?php include '../inc/header.php'; ?>
    
    <section style="background-color: #F6FAFB;" class="calccc wrapper wrapper-flex-center">
        <div class="container container-fluid-custom">
            <div class=" text-center">
                <div class="">
                    <div class="row">
                        <div class="col-md-8 col-xs-12 title-calc-wrapp">
                            <h1 class="font-rounded-book title-calc">Para se ju ose kontraktori juaj të blini bojë
                                zbuloni saktësisht sa do t'ju duhet.</h1>
                        </div>
                    </div>
                    <form action="">
                        <div class="row d-flex justify-content-center">
                            <!-- <div class="col displayD"></div> -->
                            <div class="col-md-3 px-0 text-start">
                                <form action="">
                                    <div class="d-flex parent-input">
                                        <div class="pr-3">
                                            <label class="font-rounded-light" for="">Vertikal</label
                                                class="font-rounded-light">
                                            <input class="input-calc item" id="wd-height" type="number">

                                        </div>
                                        <div class="pl-3">
                                            <label class="font-rounded-light" for="">Horizontal</label
                                                class="font-rounded-light">
                                            <input class="input-calc item" id="wd-width" type="number">
                                        </div>
                                    </div>
                                    <div class="parent-input">
                                        <button type="button" class="btn-kalkulimi b" id="estimate-btn">Kalkulo &
                                            Ruaj</button>
                                        <!-- <i class="fas fa-undo-alt" id="resetwall"></i> -->
                                        <img src="assets/img/Group3008.svg" alt="" class="img-fluid" width="46px"
                                            id="resetwall">
                                    </div>
                                    <!-- <button id="choose" class="btn-kalkulimi b w-100 my-3" type="button">Ruaj
                                        dhomen</button> -->
                                    <div class=""
                                        style="text-align: center;font-family: Gotham-RoundedLight;margin-top: 55px">
                                        <label class="" for="">Zgjedh Produktin</label>
                                        <select class="btn-custom-dropdown" id="select">

                                            <option class="list-product" name="Echotech Classic" value="3">Prima Eco
                                            </option>
                                            <option class="list-product" name="Echotech Classic" value="3">Classic Weiß
                                            </option>
                                            <option class="list-product" name="Echotech Classic" value="4.3">Decoral
                                                Super Weiß</option>
                                            <option class="list-product" name="Echotech Classic" value="7">Startech Gold
                                            </option>
                                            <option class="list-product" name="Echotech Classic" value="4.5">Schimmel
                                                Schuts</option>
                                            <option class="list-product" name="Echotech Classic" value="11">Latex
                                            </option>
                                            <option class="list-product" name="Echotech Classic" value="4">
                                                Fassadenfarbe</option>
                                            <option class="list-product" name="Echotech Classic" value="3classic">
                                                Silicon Fassadenfarbe</option>

                                            <option class="list-product" name="Echotech Classic" value="5.5">Putz Grund
                                            </option>
                                            <option class="list-product" name="Echotech Classic" value="4">Beton Contact
                                            </option>

                                            <option class="list-product" name="Echotech Classic" value="3.5">Grund
                                                Standard</option>
                                            <!-- <option class="list-product" name="Echotech Classic" value="5.5">Tief Grund-LF</option>
                                            <option class="list-product" name="Echotech Classic" value="3.4">Micro Grund</option> -->

                                            <option class="list-product" name="Echotech Classic" value="2.4">
                                                Fassadenputz</option>
                                            <option class="list-product" name="Echotech Classic" value="2.4">Graffiato
                                            </option>

                                            <option class="list-product" name="Echotech Classic" value="3.5">Silicon
                                                Fassadenputz</option>
                                            <option class="list-product" name="Echotech Classic" value="3.5">
                                                Buntsteinputz</option>
                                            <option class="list-product" name="Echotech Classic" value="1.1">Aquastop
                                                Flex</option>
                                            <option class="list-product" name="Echotech Classic" value="1.1">Hidrostop
                                                Flex-2K</option>
                                            <option class="list-product" name="Echotech Classic" value="1">Hidroglet Eco
                                            </option>
                                            <!-- <option class="list-product" name="Echotech Classic" value="5.5">Anti-Rust Classic</option>
                                            <option class="list-product" name="Echotech Classic" value="3.4">Anti-Rust Rapid</option>
                                            <option class="list-product" name="Echotech Classic" value="4.4">Emajl Llak</option>
                                            <option class="list-product" name="Echotech Classic" value="1.9">Emajl Llak Direct 3in1</option>
                                            <option class="list-product" name="Echotech Classic" value="3.5">Emajl Llak Rapid</option>
                                            <option class="list-product" name="Echotech Classic" value="2.4">Lassure</option>
                                            <option class="list-product" name="Echotech Classic" value="5">Rapid 2+1</option>
                                            <option class="list-product" name="Echotech Classic" value="3">Llak Transparent</option>
                                            <option class="list-product" name="Echotech Classic" value="2.4">Wood Lacquer</option>
                                            <option class="list-product" name="Echotech Classic" value="5.5">Wood Primer</option>
                                            <option class="list-product" name="Echotech Classic" value="3.4">Classic lassure</option>
                                            <option class="list-product" name="Echotech Classic" value="4.4">Impregnant W</option>
                                            <option class="list-product" name="Echotech Classic" value="1.9">Metal Paint</option>
                                            <option class="list-product" name="Echotech Classic" value="3.5">Metal Primer</option>
                                            <option class="list-product" name="Echotech Classic" value="2.4">Parquet Lack</option>
                                            <option class="list-product" name="Echotech Classic" value="4.4">Wood Lassure</option>
                                            <option class="list-product" name="Echotech Classic" value="1.9">Wood Llak WW</option>
                                            <option class="list-product" name="Echotech Classic" value="3.5">Wood Paint</option>
                                            <option class="list-product" name="Echotech Classic" value="2.4">Wood Primer</option>   -->
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-5 px-0">
                                <div class="parent-input" id="parent-value">
                                    <!-- <label for="">Siperfaqja</label>
                                    <div class="input-siperfa" id="gfg"><span>&#13217;</span></div> -->
                                </div>
                            </div>
                            <!-- <div class="col displayD"></div> -->
                        </div>

                        <div class="row m-0">
                            <div id="totalcalculate" class="col-md-8 pt-5 px-0 mx-auto">
                                <button class="btn-kalkulimi t" id="totalCalc">Total</button>
                            </div>
                        </div>
                    </form>
                    <div class="row m-0 justify-content-center">
                        <div id="addCalculate" class="col-md-8 justify-content-end">
                            <div id="litre-result"></div>
                        </div>
                    </div>
                    <div class="row m-0">
                        <div class="mx-auto py-4" id="estimate-reset-btn">
                            <h6 class="font-rounded-light"><img src="assets/img/Group 29771.png" alt=""
                                    class="img-fluid pr-2" width="25px" id="resetCalculator">Reseto calculatorin</h6
                                class="font-rounded-light">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- <script src="assets/js/owl.carousel.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="../assets/js/main.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>