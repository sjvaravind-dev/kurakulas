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

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">


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
        <!-- financial Loans -->
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
                                    <img src="./assets/img/financial/credit-card.jpg" alt="Credit Cards">
                                </div>

                                <div class="swiper-slide">
                                    <img src="./assets/img/financial/personal-loan.jpg" alt="Personal Loan">
                                </div>

                                <div class="swiper-slide">
                                    <img src="./assets/img/financial/business-loan.jpg" alt="Business Loan">
                                </div>

                                <div class="swiper-slide">
                                    <img src="./assets/img/financial/Professional-loan.jpg" alt="Professional Loan">
                                </div>
                                <div class="swiper-slide">
                                    <img src="./assets/img/financial/home-loan.jpg" alt="Home Loan">
                                </div>
                                <div class="swiper-slide">
                                    <img src="./assets/img/financial/mortgage-loan.png" alt="Mortgage Loan">
                                </div>
                                <div class="swiper-slide">
                                    <img src="./assets/img/financial/car-loan.jpg" alt="Car Loan">
                                </div>
                                <div class="swiper-slide">
                                    <img src="./assets/img/financial/Commercial_Vehicle_Loan.jpeg"
                                        alt="Commercial Vehicle Loan">
                                </div>
                                <div class="swiper-slide">
                                    <img src="./assets/img/financial/machinery-loan.jpg" alt="Machinery Loan">
                                </div>
                                <div class="swiper-slide">
                                    <img src="./assets/img/financial/over-draft.jpg" alt="Over Draft">
                                </div>
                                <div class="swiper-slide">
                                    <img src="./assets/img/financial/cash-credit-loan.jpg" alt="Cash Credit">
                                </div>
                                <div class="swiper-slide">
                                    <img src="./assets/img/financial/gold-loan.jpg" alt="Gold Loan">
                                </div>
                            </div>

                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>

                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </section>
                <div class="section-title mt-5" data-aos="fade-up">
                    <h2>Financial</h2>
                    <div><span class="description-title">How to Choose the Right Loan for You</span>
                    </div>
                </div>


                <div class="row gy-3">
                    <div class="col-md-4 col-lg-4" data-aos="zoom-out" data-aos-delay="100">
                        <!-- Adjusted to fit 3 cards in a row -->
                        <div class="icon-box text-center" style="padding: 10px; min-height: 250px;">
                            <!-- Maintained card size -->
                            <div class="icon"><i class="bi bi-credit-card"></i></div>
                            <h4 class="title"><a href="creditCards.php">CREDIT CARDS</a></h4>
                            <p class="description">
                                Credit cards let users borrow for purchases. Repayment with interest is required if
                                overdue. They offer rewards but can lead to debt.
                            </p>
                            <br>
                            <div class="d-flex" style="float:right;padding-right: 10px;">
                                <!-- Adjusted button position -->
                                <a href="creditCards.php" class="read-more">Read More <i
                                        class="bi bi-arrow-right"></i></a>
                                <!-- Read More text with arrow -->
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-4" data-aos="zoom-out" data-aos-delay="200">
                        <div class="icon-box text-center" style="padding: 10px; min-height: 250px;">
                            <div class="icon"><i class="bi bi-person"></i></div>
                            <h4 class="title"><a href="#">PERSONAL LOAN</a></h4>
                            <p class="description">
                                A personal loan is an unsecured loan for various purposes, repaid in fixed monthly
                                installments with interest. It requires a credit check.
                            </p>
                            <br>
                            <div class="d-flex" style="float:right;padding-right: 10px;">
                                <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-4" data-aos="zoom-out" data-aos-delay="300">
                        <div class="icon-box text-center" style="padding: 10px; min-height: 250px;">
                            <div class="icon"><i class="bi bi-briefcase"></i>

                            </div>
                            <h4 class="title"><a href="businessLoans.php">BUSSINESS LOANS</a></h4>
                            <p class="description">
                                Business loans provide capital for expansion, equipment, or cash flow. They can be
                                secured or unsecured, with terms based on eligibility.
                            </p>
                            <br>
                            <div class="d-flex" style="float:right;padding-right: 10px;">
                                <a href="businessLoans.php" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4" data-aos="zoom-out" data-aos-delay="300">
                        <div class="icon-box text-center" style="padding: 10px; min-height: 250px;">
                            <div class="icon"><i class="bi bi-person-badge"></i></div>
                            <h4 class="title"><a href="professionalLoans.php">PROFESSIONAL LOANS</a></h4>
                            <p class="description">
                                Professional loans are for individuals in specific professions to fund their practice.
                                They offer flexible terms and lower interest rates.
                            </p>
                            <br>
                            <div class="d-flex" style="float:right;padding-right: 10px;">
                                <a href="professionalLoans.php" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4" data-aos="zoom-out" data-aos-delay="300">
                        <div class="icon-box text-center" style="padding: 10px; min-height: 250px;">
                            <div class="icon"><i class="bi bi-house-door"></i></div>
                            <h4 class="title"><a href="#">HOME LOANS</a></h4>
                            <p class="description">
                                Home loans are provided for purchasing or refinancing property, repaid in installments
                                with interest, and secured by the property.
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
                            <h4 class="title"><a href="#">MORTGAGE LOANS</a></h4>
                            <p class="description">
                                Mortgage loans are long-term loans to finance property, with payments over 15 to 30
                                years. If unpaid, the lender can seize the property.
                            </p>
                            <br>
                            <div class="d-flex" style="float:right;padding-right: 10px;">
                                <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4" data-aos="zoom-out" data-aos-delay="300">
                        <div class="icon-box text-center" style="padding: 10px; min-height: 250px;">
                            <div class="icon"><i class="fas fa-car"></i>

                            </div>
                            <h4 class="title"><a href="#">CAR LOANS</a></h4>
                            <p class="description">
                                A car loan lets you finance a vehicle with monthly payments, and interest rates depend
                                on your credit score and car type.
                            </p>
                            <br>
                            <div class="d-flex" style="float:right;padding-right: 10px;">
                                <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4" data-aos="zoom-out" data-aos-delay="300">
                        <div class="icon-box text-center" style="padding: 10px; min-height: 250px;">
                            <div class="icon"><i class="bi bi-truck"></i></div>
                            <h4 class="title"><a href="#">COMMERCIAL VEHICLE LOANS</a></h4>
                            <p class="description">
                                Commercial vehicle loans help businesses finance vehicles with flexible terms, typically
                                secured by the vehicle purchased.
                            </p>
                            <br>
                            <div class="d-flex" style="float:right;padding-right: 10px;">
                                <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4" data-aos="zoom-out" data-aos-delay="300">
                        <div class="icon-box text-center" style="padding: 10px; min-height: 250px;">
                            <div class="icon"><i class="bi bi-gear"></i></div>
                            <h4 class="title"><a href="#">MACHINERY LOANS</a></h4>
                            <p class="description">
                                Machinery loans help businesses finance equipment like tractors or excavators, with
                                flexible repayment terms and the machinery as collateral.
                            </p>
                            <br>
                            <div class="d-flex" style="float:right;padding-right: 10px;">
                                <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4" data-aos="zoom-out" data-aos-delay="300">
                        <div class="icon-box text-center" style="padding: 10px; min-height: 250px;">
                            <div class="icon"><i class="bi bi-wallet"></i>
                            </div>
                            <h4 class="title"><a href="#">OVER DRAFT</a></h4>
                            <p class="description">
                                An overdraft allows you to withdraw more money from your bank account than your current
                                balance, up to a set limit, typically with interest and fees.
                            </p>
                            <br>
                            <div class="d-flex" style="float:right;padding-right: 10px;">
                                <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4" data-aos="zoom-out" data-aos-delay="300">
                        <div class="icon-box text-center" style="padding: 10px; min-height: 250px;">
                            <div class="icon"><i class="bi bi-cash-stack"></i>

                            </div>
                            <h4 class="title"><a href="#">CASH CREDIT</a></h4>
                            <p class="description">
                                Cash credit provides businesses with immediate working capital by offering a revolving
                                credit line based on their assets.
                            </p>
                            <br>
                            <div class="d-flex" style="float:right;padding-right: 10px;">
                                <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4" data-aos="zoom-out" data-aos-delay="300">
                        <div class="icon-box text-center" style="padding: 10px; min-height: 250px;">
                            <div class="icon"><i class="fas fa-coins"></i>
                            </div>
                            <h4 class="title"><a href="#">GOLD LOAN</a></h4>
                            <p class="description">
                                A gold loan lets you borrow money by pledging your gold as collateral, offering quick
                                access to funds with low-interest rates.
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
        <!-- financial Loans -->
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