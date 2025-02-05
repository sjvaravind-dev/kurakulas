<?php 
include('includes/dbConfig.php');
?>
<!DOCTYPE html>
<html lang="en">

<?php 
include('includes/header.php');
?>
<style>
/*--------------------------------------------------------------
# Details Section
--------------------------------------------------------------*/
.details .features-item {
    color: color-mix(in srgb, var(--default-color), transparent 20%);
}

.details .features-item+.features-item {
    margin-top: 100px;
}

@media (max-width: 640px) {
    .details .features-item+.features-item {
        margin-top: 40px;
    }
}

.details .features-item h3 {
    font-weight: 700;
    font-size: 26px;
}

.details .features-item ul {
    list-style: none;
    padding: 0;
}

.details .features-item ul li {
    padding-bottom: 10px;
    display: flex;
    align-items: center;
}

.details .features-item ul li:last-child {
    padding-bottom: 0;
}

.details .features-item ul i {
    font-size: 20px;
    padding-right: 4px;
    color: var(--accent-color);
}

.details .features-item p:last-child {
    margin-bottom: 0;
}

section,
.section {
    color: var(--default-color);
    background-color: var(--background-color);
    padding: 60px 0;
    scroll-margin-top: 100px;
    overflow: clip;
}

@media (max-width: 1199px) {

    section,
    .section {
        scroll-margin-top: 66px;
    }
}

.section-title {
    padding-bottom: 60px;
    position: relative;
}

.section-title h2 {
    font-size: 14px;
    font-weight: 500;
    padding: 0;
    line-height: 1px;
    margin: 0;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: color-mix(in srgb, var(--default-color), transparent 50%);
    position: relative;
}

.section-title h2::after {
    content: "";
    width: 120px;
    height: 1px;
    display: inline-block;
    background: var(--accent-color);
    margin: 4px 10px;
}

.section-title div {
    color: var(--heading-color);
    margin: 0;
    margin: 0;
    font-size: 28px;
    font-weight: 700;
    text-transform: uppercase;
    font-family: var(--heading-font);
}
</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

<body class="index-page">

    <?php
    include('includes/navbar.php');
    ?>
     <style>
    .section {
        margin-top: -120px;
    }
    </style>
    <main class="main">
        <!-- section start -->
        <section id="hero" class="hero section">
            <img src="assets/img/hero-bg-abstract.jpg" alt="" data-aos="fade-in" class="">
            <div class="container">
                <!-- Slider Section -->
                <section id="slider" class="slider">
                    <div class="container" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper init-swiper">
                            <script type="application/json" class="swiper-config">
                            {
                                "loop": true,
                                "speed": 600,
                                "autoplay": {
                                    "delay": 5000
                                },
                                "slidesPerView": "auto",
                                "centeredSlides": true,
                                "pagination": {
                                    "el": ".swiper-pagination",
                                    "type": "bullets",
                                    "clickable": true
                                },
                                "navigation": {
                                    "nextEl": ".swiper-button-next",
                                    "prevEl": ".swiper-button-prev"
                                }
                            }
                            </script>

                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="./assets/img/infra-real-estate/plots.jpg" alt="Plots">
                                </div>

                                <div class="swiper-slide">
                                    <img src="./assets/img/infra-real-estate/flats.jpg" alt="Flats">
                                </div>
                                <div class="swiper-slide">
                                    <img src="./assets/img/infra-real-estate/villas.jpg" alt="Villas">
                                </div>
                                <div class="swiper-slide">
                                    <img src="./assets/img/infra-real-estate/farmland.jpg" alt="Farm Land">
                                </div>
                                <div class="swiper-slide">
                                    <img src="./assets/img/infra-real-estate/high-rise.jpg" alt="High Rise">
                                </div>
                            </div>

                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>

                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </section>
                <div class="section-title mt-5" data-aos="fade-up">
                    <h2>Infrastructure & Real Estate</h2>
                    <div><span class="description-title">Navigating the Evolving Landscape of Infrastructure and Real
                            Estate</span>
                    </div>
                </div>
                <!-- Slider Section -->
                <div class="row gy-3">
                    <div class="col-md-4 col-lg-4" data-aos="zoom-out" data-aos-delay="100">
                        <!-- Adjusted to fit 3 cards in a row -->
                        <div class="icon-box text-center" style="padding: 10px; min-height: 250px;">
                            <!-- Maintained card size -->
                            <div class="icon"><i class="bi bi-geo-alt"></i></div>
                            <h4 class="title"><a href="#">PLOTS</a></h4>
                            <p class="description">
                                Plots are vacant land areas, ideal for construction or investment. They offer
                                opportunities for residential or commercial development.
                            </p>
                            <br>
                            <div class="d-flex" style="float:right;padding-right: 10px;">
                                <!-- Adjusted button position -->
                                <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                                <!-- Read More text with arrow -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4" data-aos="zoom-out" data-aos-delay="100">
                        <!-- Adjusted to fit 3 cards in a row -->
                        <div class="icon-box text-center" style="padding: 10px; min-height: 250px;">
                            <!-- Maintained card size -->
                            <div class="icon"><i class="bi bi-door-open"></i></div>
                            <h4 class="title"><a href="#">FLATS</a></h4>
                            <p class="description">
                                Flats are multi-unit residential spaces, offering convenient living options. They are
                                ideal for urban dwellers seeking a practical lifestyle.
                            </p>
                            <br>
                            <div class="d-flex" style="float:right;padding-right: 10px;">
                                <!-- Adjusted button position -->
                                <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                                <!-- Read More text with arrow -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4" data-aos="zoom-out" data-aos-delay="100">
                        <!-- Adjusted to fit 3 cards in a row -->
                        <div class="icon-box text-center" style="padding: 10px; min-height: 250px;">
                            <!-- Maintained card size -->
                            <div class="icon"><i class="bi bi-houses"></i>
                            </div>
                            <h4 class="title"><a href="#">VILLAS</a></h4>
                            <p class="description">
                                Villas are standalone homes, offering luxury and privacy. They are ideal for families
                                seeking a comfortable lifestyle.
                            </p>
                            <br>
                            <div class="d-flex" style="float:right;padding-right: 10px;">
                                <!-- Adjusted button position -->
                                <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                                <!-- Read More text with arrow -->
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-2" data-aos="zoom-out" data-aos-delay="200"></div>

                    <div class="col-md-4 col-lg-4" data-aos="zoom-out" data-aos-delay="200">
                        <div class="icon-box text-center" style="padding: 10px; min-height: 250px;">
                            <div class="icon"><i class="bi bi-tree"></i></div>
                            <h4 class="title"><a href="#">FARM LANDS</a></h4>
                            <p class="description">
                                Farm lands are agricultural properties used for cultivation or farming. They offer
                                potential for investment or commercial agriculture.
                            </p>
                            <br>
                            <div class="d-flex" style="float:right;padding-right: 10px;">
                                <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-4" data-aos="zoom-out" data-aos-delay="200">
                        <div class="icon-box text-center" style="padding: 10px; min-height: 250px;">
                            <div class="icon"><i class="bi bi-building"></i></div>
                            <h4 class="title"><a href="#">HIGH RISE</a></h4>
                            <p class="description">
                                High-rise buildings are tall structures designed for residential or commercial use. They
                                offer urban living with amenities and views.
                            </p>
                            <br>
                            <div class="d-flex" style="float:right;padding-right: 10px;">
                                <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section end -->
    </main>

    <?php 
    include('includes/footer.php');
    ?>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <?php include('includes/script.php'); ?>

</body>

</html>