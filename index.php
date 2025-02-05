<?php 
include('includes/dbConfig.php');
?>
<!DOCTYPE html>
<html lang="en">

<?php 
include('includes/header.php');
?>
<style>
/* Styling for Read More link */
.read-more {
    font-weight: bold;
    color: #124265;
    text-decoration: none;
    font-size: 14px;
    transition: color 0.3s ease-in-out;
}

.read-more:hover {
    color: #007bff;
    /* Blue on hover */
}

/* read button  */

/* happy customer */
.plus-sign {
    font-size: 20px;
    /* Adjust size if needed */
    margin-left: 5px;
    /* Adds space between the number and the plus sign */
}

/* happy customer */
</style>

<body class="index-page">

    <?php
    include('includes/navbar.php');
    ?>
    <main class="main">
        <!-- slider Section -->
        <section id="hero" class="hero section" style="margin-top: -180px;">

            <img src="assets/img/hero-bg-abstract.jpg" alt="hero-image" data-aos="fade-in">

            <div class="container">
                <!-- Slider Section -->

                <section id="slider" class="slider section dark-background">

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
                                    <a href="#">
                                        <img src="./assets/img/silders/financial-services (2).jpg" alt="financial"></a>
                                    <div class="content">
                                        <!----
                              <h2><a href="single-post.html">The Best Homemade Masks for Face (keep the Pimples Away)</a></h2>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia!</p>--
                              <a href="single-post.html" class="btn">Read More</a>-->
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <a href="#" target="_blank">
                                        <img src="./assets/img/silders/INVESTMENTS.png" alt="investment"></a>
                                    <div class="content">
                                        <!----
                              <h2><a href="single-post.html">17 Pictures of Medium Length Hair in Layers</a></h2>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia!</p>
                              <a href="single-post.html" class="btn">Read More</a>-->
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <a href="#" target="_blank">
                                        <img src="./assets/img/silders/INSURANCE.png" alt="INSURANCE"></a>
                                </div>

                                <div class="swiper-slide">
                                    <a href="#" target="_blank">
                                        <img src="./assets/img/silders/IT-SERVICES.jpg" alt="IT-SERVICES"></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" target="_blank">
                                        <img src="./assets/img/silders/media-services.png" alt="media-services"></a>
                                    <div class="content">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" target="_blank">
                                        <img src="./assets/img/silders/placement-services.png"
                                            alt="placement-services"></a>
                                    <div class="content">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" target="_blank">
                                        <img src="./assets/img/silders/NBFC.png" alt="NBFC"></a>
                                    <div class="content">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" target="_blank">
                                        <img src="./assets/img/silders/BUSINESS CORRESPONDING.png"
                                            alt="business CORRESPONDING"></a>
                                    <div class="content">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" target="_blank">
                                        <img src="./assets/img/silders/REAL ESTATE.jpeg" alt="real ESTATE"></a>
                                    <div class="content">
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>

                            <div class="swiper-pagination"></div>
                        </div>

                    </div>

                </section>


                <div class="row gy-3 mt-4">
                    
                    <div class="row gy-3 mt-4">
                        <div class="col-md-4 col-lg-4" data-aos="zoom-out" data-aos-delay="100">
                            <!-- Adjusted to fit 3 cards in a row -->
                            <div class="icon-box text-center" style="padding: 10px; min-height: 250px;">
                                <!-- Maintained card size -->
                                <div class="icon"><i class="bi bi-cash-stack"></i></div>
                                <h4 class="title"><a href="financial.php">FINANCIAL SERVICES</a></h4>
                                <p class="description">
                                Our financial services offer expert guidance to help you grow and protect your wealth, providing solutions to secure your financial future.
                                </p>
                                <br>
                                <div class="d-flex" style="float:right;padding-right: 10px;">
                                    <!-- Adjusted button position -->
                                    <a href="financial.php" class="read-more">Read More <i
                                            class="bi bi-arrow-right"></i></a>
                                    <!-- Read More text with arrow -->
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4" data-aos="zoom-out" data-aos-delay="200">
                            <div class="icon-box text-center" style="padding: 10px; min-height: 250px;">
                                <div class="icon"><i class="bi bi-piggy-bank"></i></div>
                                <h4 class="title"><a href="#">INVESTMENTS</a></h4>
                                <p class="description">
                                Investments help individuals and businesses grow wealth over time by allocating funds into assets like share broking and mutual funds.
                                </p>
                                <br>
                                <div class="d-flex" style="float:right;padding-right: 10px;">
                                    <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4" data-aos="zoom-out" data-aos-delay="300">
                            <div class="icon-box text-center" style="padding: 10px; min-height: 250px;">
                                <div class="icon"><i class="bi bi-shield-check"></i></div>
                                <h4 class="title"><a href="#">INSURANCE</a></h4>
                                <p class="description">
                                Insurance provides financial protection against unexpected events, with coverage for health, life, property, and businesses.
                                </p>
                                <br>
                                <div class="d-flex" style="float:right;padding-right: 10px;">
                                    <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4" data-aos="zoom-out" data-aos-delay="300">
                            <div class="icon-box text-center" style="padding: 10px; min-height: 250px;">
                                <div class="icon"><i class="bi bi-laptop"></i></div>
                                <h4 class="title"><a href="#">IT SERVICES</a></h4>
                                <p class="description">
                                Our IT services deliver solutions to optimize operations, from development to consulting, ensuring seamless technology integration.
                                </p>
                                <br>
                                <div class="d-flex" style="float:right;padding-right: 10px;">
                                    <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4" data-aos="zoom-out" data-aos-delay="300">
                            <div class="icon-box text-center" style="padding: 10px; min-height: 250px;">
                                <div class="icon"><i class="bi bi-camera-reels"></i></div>
                                <h4 class="title"><a href="#">MEDIA SERVICES</a></h4>
                                <p class="description">
                                Media services encompass content creation, digital marketing, broadcasting, and public relations to connect brands with their audiences.
                                </p>
                                <br>
                                <div class="d-flex" style="float:right;padding-right: 10px;">
                                    <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4" data-aos="zoom-out" data-aos-delay="300">
                            <div class="icon-box text-center" style="padding: 10px; min-height: 250px;">
                                <div class="icon"><i class="bi bi-briefcase"></i></div>
                                <h4 class="title"><a href="#">PLACEMENT SERVICES</a></h4>
                                <p class="description">
                                Placement services help job seekers find the right roles and assist companies in hiring qualified candidates, including recruitment.
                                </p>
                                <br>
                                <div class="d-flex" style="float:right;padding-right: 10px;">
                                    <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4" data-aos="zoom-out" data-aos-delay="300">
                            <div class="icon-box text-center" style="padding: 10px; min-height: 250px;">
                                <div class="icon"><i class="bi bi-bank"></i></div>
                                <h4 class="title"><a href="#">NBFC</a></h4>
                                <p class="description">
                                NBFCs offer financial services such as loans and investments without a banking license, providing flexible solutions for individuals and businesses.
                                </p>
                                <br>
                                <div class="d-flex" style="float:right;padding-right: 10px;">
                                    <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4" data-aos="zoom-out" data-aos-delay="300">
                            <div class="icon-box text-center" style="padding: 10px; min-height: 250px;">
                                <div class="icon"><i class="bi bi-envelope"></i></div>
                                <h4 class="title"><a href="#">BUSINESS CORRESPONDING</a></h4>
                                <p class="description">
                                Business Correspondents (BCs) serve as intermediaries for banks, delivering financial services in remote and underserved areas.
                                </p>
                                <br>
                                <div class="d-flex" style="float:right;padding-right: 10px;">
                                    <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4" data-aos="zoom-out" data-aos-delay="300">
                            <div class="icon-box text-center" style="padding: 10px; min-height: 250px;">
                                <div class="icon"><i class="bi bi-house"></i></div>
                                <h4 class="title"><a href="#">INFRA & REAL ESTATE</a></h4>
                                <p class="description">
                                Infrastructure and real estate drive economic growth by developing essential facilities, housing, and commercial spaces.
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
        <!-- /slider Section -->

        <!-- happy customer section -->
        <section id="stats" class="stats section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <!-- Swiper Container -->
                <div class="swiper stats-slider">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="stats-item d-flex align-items-center">
                                <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
                                <div>
                                    <span data-purecounter-start="0" data-purecounter-end="10000"
                                        data-purecounter-duration="1" class="purecounter"></span><span
                                        class="plus-sign">+</span>
                                    <p>Happy customer</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="stats-item d-flex align-items-center">
                                <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
                                <div>
                                    <span data-purecounter-start="0" data-purecounter-end="20"
                                        data-purecounter-duration="1" class="purecounter"></span><span
                                        class="plus-sign">+</span>
                                    <p>Projects</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="stats-item d-flex align-items-center">
                                <i class="bi bi-headset color-green flex-shrink-0"></i>
                                <div>
                                    <span data-purecounter-start="0" data-purecounter-end="190000"
                                        data-purecounter-duration="1" class="purecounter"></span><span
                                        class="plus-sign">+</span>
                                    <p>Hours Of Support</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="stats-item d-flex align-items-center">
                                <i class="bi bi-calendar4-week flex-shrink-0" style="color: #1f809e;"></i>
                                <div>
                                    <span data-purecounter-start="0" data-purecounter-end="17"
                                        data-purecounter-duration="1" class="purecounter"></span><span
                                        class="plus-sign">+</span>
                                    <p>Years</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="stats-item d-flex align-items-center">
                                <i class="bi bi-people color-pink flex-shrink-0"></i>
                                <div>
                                    <span data-purecounter-start="0" data-purecounter-end="200"
                                        data-purecounter-duration="1" class="purecounter"></span><span
                                        class="plus-sign">+</span>
                                    <p>Employee </p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="stats-item d-flex align-items-center">
                                <i class="bi bi-building  flex-shrink-0" style="color: #4d3e6e;"></i>
                                <div>
                                    <span data-purecounter-start="0" data-purecounter-end="40"
                                        data-purecounter-duration="1" class="purecounter"></span><span
                                        class="plus-sign">+</span>
                                    <p>Branches</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <style>

                    </style>

                    <!-- Removed the Swiper Navigation Buttons -->
                    <!-- The buttons are hidden by default using CSS -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

            </div>
        </section>
        <!-- happy customer section -->

        <!-- Include Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <script>
        var swiper = new Swiper(".stats-slider", {
            slidesPerView: 4,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            breakpoints: {
                1400: {
                    slidesPerView: 4
                },
                1200: {
                    slidesPerView: 3
                },
                992: {
                    slidesPerView: 2
                },
                768: {
                    slidesPerView: 2
                },
                576: {
                    slidesPerView: 1
                },
                0: {
                    slidesPerView: 1
                }
            }
        });
        </script>

        <!-- vision and mission section -->
        <section id="features" class="features section">

            <div class="container section-title" data-aos="fade-up">

                <h2>FOCUS</h2>
                <p>A clear focus on your vision and mission ensures consistent progress toward a purposeful future.</p>
            </div>

            <div class="container">

                <div class="d-flex justify-content-center">
                    <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
                        <li class="nav-item">
                            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                                <h4>VISION</h4>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                                <h4>MISSION</h4>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

                    <div class="tab-pane fade active show" id="features-tab-1">
                        <div class="row align-items-center">
                            <div
                                class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3>Our Vision</h3>
                                <ul class="custom-list">
                                    <li><i class="bi bi-check2-circle"></i>KURAKULA'S, our vision is to be the
                                        leading financial
                                        services
                                        provider in All Over India, renowned for delivering comprehensive
                                        and personalized solutions that empower individuals and
                                        businesses to achieve their financial goals.</li>
                                    <li><i class="bi bi-check2-circle"></i> To continually expand our range of products
                                        and services,
                                        setting new benchmarks in customer satisfaction and financial excellence.</li>
                                    <li><i class="bi bi-check2-circle"></i> Foster a culture of integrity, innovation,
                                        and dedication.
                                    </li>
                                    <li><i class="bi bi-check2-circle"></i> To be the trusted partner for all clients'
                                        financial needs,
                                        contributing positively to their success and well-being.</li>
                                    <li><i class="bi bi-check2-circle"></i> Aims to be the premier destination for all
                                        financial needs by
                                        blending expertise with personalized service to create tailored solutions that
                                        drive success.</li>
                                    <li><i class="bi bi-check2-circle"></i> Build lasting relationships with clients,
                                        fostering financial
                                        growth and stability..</li>
                                    <li><i class="bi bi-check2-circle"></i> To be the trusted partner in achieving
                                        financial success for
                                        individuals and businesses alike.</li>
                                    <li><i class="bi bi-check2-circle"></i> Focus on innovation, customer satisfaction,
                                        and community
                                        engagement.</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="assets/img/vision.jpeg" alt="Vision Image" class="img-fluid feature-img">
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="features-tab-2">
                        <div class="row align-items-center">
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="assets/img/mission.jpeg" alt="Mission Image" class="img-fluid feature-img">
                            </div>
                            <div
                                class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3>Our Mission</h3>
                                <ul class="custom-list">
                                    <li><i class="bi bi-check2-circle"></i> Provide innovative, comprehensive, and
                                        flexible financial
                                        solutions to empower individuals, businesses, and organizations to achieve their
                                        goals.</li>
                                    <li><i class="bi bi-check2-circle"></i> Offer a wide range of services, including
                                        financial services,
                                        investment strategies, property solutions, IT solutions, consulting services,
                                        and tailored travel
                                        experiences.</li>
                                    <li><i class="bi bi-check2-circle"></i> Provide customized products such as
                                        commercial finance, real
                                        estate financing, project financing, and bridging finance to meet the diverse
                                        and evolving needs of
                                        clients.</li>
                                    <li><i class="bi bi-check2-circle"></i> Focus on providing personalized solutions
                                        designed to support
                                        sustainable growth and long-term success.</li>
                                    <li><i class="bi bi-check2-circle"></i> Work closely with clients to understand
                                        their challenges and
                                        opportunities, ensuring solutions align with their objectives.</li>
                                    <li><i class="bi bi-check2-circle"></i> Assist clients in navigating complex
                                        financial landscapes,
                                        securing funding for growth, and optimizing business operations.</li>
                                    <li><i class="bi bi-check2-circle"></i> Strive to build lasting partnerships based
                                        on trust and mutual
                                        success through innovation, transparency, and excellence.</li>
                                    <li><i class="bi bi-check2-circle"></i> Constantly explore new opportunities,
                                        technologies, and
                                        strategies to stay ahead of market trends and deliver solutions that drive
                                        progress.</li>
                                    <li><i class="bi bi-check2-circle"></i> Provide expert advice, insights, and
                                        actionable
                                        recommendations that help clients make informed decisions and capitalize on new
                                        opportunities.</li>

                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>
        <!-- vision and mission section -->

        <!-- Clients Section -->
        <section id="clients" class="clients section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Clients</h2>
                <p>We work with best clients<br></p>
            </div><!-- End Section Title -->

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
                        "pagination": {
                            "el": ".swiper-pagination",
                            "type": "bullets",
                            "clickable": true
                        },
                        "breakpoints": {
                            "320": {
                                "slidesPerView": 2,
                                "spaceBetween": 40
                            },
                            "480": {
                                "slidesPerView": 3,
                                "spaceBetween": 60
                            },
                            "640": {
                                "slidesPerView": 4,
                                "spaceBetween": 80
                            },
                            "992": {
                                "slidesPerView": 6,
                                "spaceBetween": 120
                            }
                        }
                    }
                    </script>
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="assets/img/clients/Giridhari-Constructions.png"
                                class="img-fluid" alt="Giridhari-Constructions"></div>
                        <div class="swiper-slide"><img src="assets/img/clients/surana-group.png" class="img-fluid"
                                alt="surana-group"></div>
                        <div class="swiper-slide"><img src="assets/img/clients/infotech.png" class="img-fluid"
                                alt="infotech"></div>
                        <div class="swiper-slide"><img src="assets/img/clients/amt.png" class="img-fluid" alt="amt">
                        </div>
                        <div class="swiper-slide"><img src="assets/img/clients/ups.png" class="img-fluid" alt="ups">
                        </div>
                        <div class="swiper-slide"><img src="assets/img/clients/ncl.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/fi.jpeg" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img src="assets/img/clients/sapdana.jpeg" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section>
        <!-- /Clients Section -->

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Testimonials</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper init-swiper" data-speed="600" data-delay="5000"
                    data-breakpoints="{ &quot;320&quot;: { &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 40 }, &quot;1200&quot;: { &quot;slidesPerView&quot;: 3, &quot;spaceBetween&quot;: 40 } }">
                    <script type="application/json" class="swiper-config">
                    {
                        "loop": true,
                        "speed": 600,
                        "autoplay": {
                            "delay": 5000
                        },
                        "slidesPerView": "auto",
                        "pagination": {
                            "el": ".swiper-pagination",
                            "type": "bullets",
                            "clickable": true
                        },
                        "breakpoints": {
                            "320": {
                                "slidesPerView": 1,
                                "spaceBetween": 40
                            },
                            "1200": {
                                "slidesPerView": 3,
                                "spaceBetween": 20
                            }
                        }
                    }
                    </script>
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item" "="">
            <p>
              <i class=" bi bi-quote quote-icon-left"></i>
                                <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                    rhoncus.
                                    Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at
                                    semper.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum
                                        quid malis
                                        quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim
                                        culpa.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla
                                        quem veniam duis
                                        minim tempor labore quem eram duis noster aute amet eram fore quis sint
                                        minim.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                        fugiat dolor
                                        enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum
                                        veniam.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor
                                        noster veniam
                                        sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum
                                        quid.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- /Testimonials Section -->

        <!-- Team Section -->
        <section id="team" class="team section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Directors</h2>
                <p>Meet the Directors Steering Our Company Forward: Leading with Innovation, Strategy, and Vision</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row justify-content-center gy-4">
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="assets/img/team/rajesh-sir.png" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>K.Rajesh </h4>
                                <span>Managing Director</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"></div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="assets/img/team/shilpa-mam.png" class="img-fluid" alt="shilpa">

                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>K.Shilpa</h4>
                                <span>Director</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Team Section -->

        <!-- faq section -->
        <!-- <section class="faq-9 faq section light-background" id="faq">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5" data-aos="fade-up">
                        <h2 class="faq-title">Have a question? Check out the FAQ</h2>
                        <p class="faq-description">Maecenas tempus tellus eget condimentum rhoncus sem quam semper
                            libero sit amet
                            adipiscing sem neque sed ipsum.</p>
                        <div class="faq-arrow d-none d-lg-block" data-aos="fade-up" data-aos-delay="200">
                            <svg class="faq-arrow" width="200" height="211" viewBox="0 0 200 211" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M198.804 194.488C189.279 189.596 179.529 185.52 169.407 182.07L169.384 182.049C169.227 181.994 169.07 181.939 168.912 181.884C166.669 181.139 165.906 184.546 167.669 185.615C174.053 189.473 182.761 191.837 189.146 195.695C156.603 195.912 119.781 196.591 91.266 179.049C62.5221 
                                    161.368 48.1094 130.695 56.934 98.891C84.5539 98.7247 112.556 84.0176 129.508 62.667C136.396 53.9724 146.193 35.1448 129.773 30.2717C114.292 25.6624 93.7109 41.8875 83.1971 51.3147C70.1109 63.039 59.63 78.433 54.2039 95.0087C52.1221 94.9842 50.0776 94.8683 48.0703 94.6608C30.1803 92.8027 11.2197 83.6338 5.44902 65.1074C-1.88449 41.5699 14.4994 19.0183 27.9202 1.56641C28.6411 0.625793 27.2862 -0.561638 26.5419 0.358501C13.4588 16.4098 -0.221091 34.5242 0.896608 56.5659C1.8218 74.6941 14.221 87.9401 30.4121 94.2058C37.7076 97.0203 45.3454 98.5003 53.0334 98.8449C47.8679 117.532 49.2961 137.487 60.7729 155.283C87.7615 197.081 139.616 201.147 184.786 201.155L174.332 206.827C172.119 208.033 174.345 211.287 176.537 210.105C182.06 207.125 187.582 204.122 193.084 201.144C193.346 201.147 195.161 199.887 195.423 199.868C197.08 198.548 193.084 201.144 195.528 199.81C196.688 199.192 197.846 198.552 199.006 197.935C200.397 197.167 200.007 195.087 198.804 194.488ZM60.8213 88.0427C67.6894 72.648 78.8538 59.1566 92.1207 49.0388C98.8475 43.9065 106.334 39.2953 114.188 36.1439C117.295 34.8947 120.798 33.6609 124.168 33.635C134.365 33.5511 136.354 42.9911 132.638 51.031C120.47 77.4222 86.8639 93.9837 58.0983 94.9666C58.8971 92.6666 59.783 90.3603 60.8213 88.0427Z"
                                    fill="currentColor"></path>
                            </svg>
                        </div>
                    </div>

                    <div class="col-lg-7" data-aos="fade-up" data-aos-delay="300">
                        <div class="faq-container">

                            <div class="faq-item faq-active">
                                <h3>Are there any processing fees for loans with KURAKULA'S?</h3>
                                <div class="faq-content">
                                    <p>Yes, KURAKULA'S may charge a processing fee for loan applications. The fee amount
                                        depends on the loan product and the loan amount. Generally, this fee is a small
                                        percentage of the loan amount and is charged to cover the administrative costs
                                        of processing the loan application. The exact fee is disclosed to customers at
                                        the time of loan application, ensuring transparency.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>

                            <div class="faq-item">
                                <h3> Can I repay my loan early or make partial payments?</h3>
                                <div class="faq-content">
                                    <p>Yes, KURAKULA'S allows borrowers to make early repayments or part payments on their
                                        loans. However, there may be prepayment charges or penal fees for repaying the
                                        loan early, depending on the loan product. These charges are typically outlined
                                        in the loan agreement. It is always advisable to check the specific terms before
                                        making early repayments or partial payments.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>

                            <div class="faq-item">
                                <h3>What services does" KURAKULA'S offer?</h3>
                                <div class="faq-content">
                                    <p>KURAKULA'S offers a range of financial services, primarily focusing on loan
                                        products. The services include:<br>
                                        Personal Loans: Loans for personal needs like weddings, vacations, medical
                                        expenses, etc.<br>
                                        Home Loans: Loans for purchasing or constructing residential properties.<br>
                                        Business Loans: Loans for businesses to meet their working capital needs or for
                                        expansion.<br>
                                        Car Loans: Loans to finance the purchase of new or used vehicles.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>

                            <div class="faq-item">
                                <h3>Does KURAKULA'S offer any special loan schemes or offers?</h3>
                                <div class="faq-content">
                                    <p>Yes, KURAKULA'S periodically offers special loan schemes and promotions, such
                                        as:<br>
                                        Festive Offers: Reduced interest rates or processing fees during festival
                                        seasons.<br>
                                        Exclusive Deals: Special offers for specific groups, like first-time borrowers,
                                        women, or senior citizens.<br>
                                        Referral Bonuses: If you refer someone who successfully applies for a loan, you
                                        might receive incentives.<br>
                                        Details of ongoing offers can be found on KURAKULA'S website or by contacting
                                        customer support.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>

                            <div class="faq-item">
                                <h3> What makes KURAKULA'S different from other financial institutions</h3>
                                <div class="faq-content">
                                    <p>KURAKULA'S stands out for several reasons:<br>
                                        Customer-Centric Approach: KURAKULA'S emphasizes understanding customer needs and
                                        providing tailored solutions to help individuals and businesses access
                                        financing.<br>
                                        Competitive Interest Rates: KURAKULA'S offers loan products with attractive
                                        interest rates, making borrowing more affordable.<br>
                                        Fast and Easy Processing: KURAKULA'S has a streamlined loan approval process with
                                        minimal paperwork and quick disbursement, ensuring customers get access to funds
                                        as quickly as possible.<br>
                                        Transparency: The company ensures full transparency in its loan products, with
                                        no hidden charges or fees.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>

                            <div class="faq-item">
                                <h3> How do I apply for a loan through KURAKULA'S?</h3>
                                <div class="faq-content">
                                    <p>You can apply for a loan from KURAKULA'S in several ways:<br>
                                        Online Application: Visit KURAKULA'S website, fill out the loan application
                                        form, and submit the required documents.<br>
                                        Through a DSA (Direct Selling Agent): You can approach a DSA who will guide you
                                        through the application process.<br>
                                        In-Branch: If you prefer face-to-face assistance, you can visit one of
                                        KURAKULA'S branches to apply for a loan.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section> -->
        <!-- /Faq Section -->

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