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

/* who we are section */
.about-content {
    text-align: justify;
}

.txt-hg {
    color: #124265;
}

</style>
<body class="index-page">
    <?php
    include('includes/navbar.php');
    ?>
    <main class="main">
        <!-- slider Section -->
        <!-- <div class="page-title dark-background" data-aos="fade"
            style="background-color:#2487ce">
            <div class="container position-relative">
                <h1>Reach Out</h1>
                <p>We are a trusted financial services provider, dedicated to helping individuals and businesses achieve their financial goals through expert advice and tailored solutions. With a commitment to transparency, integrity, and innovation, we empower you to make informed financial decisions.</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">About</li>
                    </ol>
                </nav>
            </div>
        </div> -->
        <!-- /slider Section -->

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

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Expanding Reach</h2>
                <div><span></span> <span class="description-title">Discover Our Branch Network</span>
                </div>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100" style="width:100%; margin-top:-80px">
                <!-- End Google Maps -->
                <!-- <div class="mapouter">
                    <div class="gmap_canvas">
                        <a
                            href="https://www.google.com/maps/search/Flat+No:+302,+3rd+Floor,+Classic+Avenue,+Ameerpet,+Hyderabad,+Telangana+-+500016/@17.4340215,78.4474549,17z/data=!3m1!4b1?entry=ttu&g_ep=EgoyMDI1MDEyOS4xIKXMDSoASAFQAw%3D%3D">
                            <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0"
                                marginwidth="0"
                                src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Flat No: 302, 3rd Floor, Classic Avenue, Ameerpet, Hyderabad, Telangana - 500016&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></a>
                       
                    </div>
                    <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        width: 100%;
                        height: 400px;
                    }

                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        width: 100%;
                        height: 400px;
                    }

                    .gmap_iframe {
                        height: 400px !important;
                    }
                    </style>
                </div> -->

                <!-- <div class="row gy-4 mt-2">
                    <div class="col-lg-4">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Address</h3>
                                <p><?php echo $comp_address; ?></p>
                            </div>
                        </div>

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p><?php echo $comp_mobile; ?></p>
                            </div>
                        </div>

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p><?php echo $comp_email; ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name"
                                        required="">
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message"
                                        required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div> -->

                <!-- <div class="row gy-4 mt-2">
                    <div class="col-lg-3">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Address</h3>
                                <p><?php echo $comp_address; ?></p>
                            </div>
                        </div>
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p><?php echo $comp_mobile; ?></p>
                            </div>
                        </div>

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p><?php echo $comp_email; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-building"></i>
                            <div class="mt-3">
                                <h3>Branches</h3>
                            </div>
                        </div>

                        <p class="mt-1"><span class="diff-branches">Hyderabad: </span>Ameerpet, Madhapur,
                            <br>Madeenaguda, Begumpet</p>

                        <p class="mt-1"><span class="diff-branches">Telangana: </span>Khammam, Warangal, <br>Nizambad,
                            Nalgonda, Karimnagar, <br>Kothagudem</p>

                        <p class="mt-1"><span class="diff-branches">Andra Pradesh: </span>Anantapur, Tirupati,
                            <br>Kadapa, Kurnool, Nellore, Kakinada ,<br> Guntur, Vijayawada, Bhimavaram, <br> Ongole,
                            Vizag, Vijayanagaram</p>
                    </div>

                    <div class="col-lg-5">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name"
                                        required="">
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message"
                                        required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div> -->
                <!-- <div class="container section-title" data-aos="fade-up">
                    <h3>TELANGANA</h3>
                </div> -->
                <div class="row gy-4">
                    <h4 style="text-align:left;">TELANGANA :</h4>

                    <div class="col-lg-3">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <div>
                                <h3>HEAD OFFICE</h3>
                                <p>Classic Avenue, 3rd Floor,<br>
                                    Dental Specialists, <br> Ameerpet, <br>
                                    Hyderabad - 500016, <br>Telangana, India.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <div>
                                <h3>BASHEERBAGH</h3>
                                <p>H.No - 3-6-290, Flat No - 309,<br>
                                    Malik Chambers, Hyderguda,<br>
                                    Basheerbagh,<br>
                                    Hyderabad-500029,<br>
                                    Telangana, India.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <div>
                                <h3>BEGUMPET</h3>
                                <p>1-8-617(31/2RT), 2nd Floor, <br>
                                    UdayamVilla,PrakashNagar <br>
                                    Begumpet, <br>
                                    Hyderabad-500016 <br>
                                    Telangana, India.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <div>
                                <h3>KUKATPALLY</h3>
                                <p>Flat:301, MIG-84, <br>
                                    Rajeshekar Enclave, <br>
                                    Dharma Reddy Colony, Phase-2, <br>
                                    Kukatpally, <br>
                                    Hyderabad-500085, <br>
                                    Telangana, India.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gy-4 mt-1">
                    <div class="col-lg-3">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <div>
                                <h3>NARAYANGUDA</h3>
                                <p>H.No - 3-4-526/1/2 &amp; 3-4-519/5, <br>
                                    Sangameshwar Nilayam, <br>
                                    Near : Aruna Photo Studios, <br>
                                    Barkathpura, Narayanguda <br>
                                    Hyderabad-500027, <br>
                                    Telangana, India.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <div>
                                <h3>S.R.NAGAR</h3>
                                <p>H.NO: B-57, Plot No: 12, <br>
                                    Opposite to B 68, Madura <br>
                                    Nagar,Indoor Stadium, <br>
                                    S.R.Nagar, <br>
                                    Hyderabad-500016, <br>
                                    Telangana, India.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <div>
                                <h3>WARANGAL</h3>
                                <p>H.no 5-11/349/a, <br>
                                    Seeta Rama Yasodha Niyalayam <br>
                                    Flat no-103 first floor, <br>
                                    Bokkala Gadda, Nayeem Nagar, <br>
                                    Warangal-506001, <br>
                                    Telangana, India.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <div>
                                <h3>KHAMMAM</h3>
                                <p>H.NO: 2-5-589/4/5, <br> Motinagar, 
                                    Kaluvaoddu, <br> Gandichowk (Village Post), <br>
                                    Khammam-507003, <br>
                                    Telangana, India.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row gy-4 mt-2">
                    <h4 style="text-align:left;">ANDHRA PRADESH :</h4>
                    <div class="col-lg-3">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <div>
                                <h3>KURNOOL</h3>
                                <p>Plot No: 404, 5th Floor, <br>
                                    Ucon&#39;s R.K Residency, <br>
                                    Hussain Khan Estate, Bellary Road <br>
                                    Kurnool-518001, <br>
                                    Andhra Pradesh, India.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <div>
                                <h3>VIJAYAWADA</h3>
                                <p>39-12/1-1A, <br>
                                    Thurlapati Kutumba Rao Street, <br>
                                    Labbipet, <br>
                                    Vijayawada-520001, <br>
                                    Andhra Pradesh, India.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <div>
                                <h3>GUNTUR</h3>
                                <p>D.NO: 4-5-49/42, <br>
                                    Road No: 5, Kalyani Road <br>
                                    Guntur-522601, <br>
                                    Andhra Pradesh, India.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <div>
                                <h3>RAJAHMUNDRY</h3>
                                <p>H.NO:46-10-40, <br>
                                    Chinna Gandhi Bomma Veedi, <br>
                                    Danvaipeta, <br>
                                    Rajahmundry-533101, <br>
                                    Andhra Pradesh, India.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gy-4 mt-1">
                    <div class="col-lg-3">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <div>
                                <h3>VISHAKAPATNAM</h3>
                                <p>H.No:12-2-6; Flat No: S-2, <br>
                                    Surya Narayana Residency, <br>
                                    Back to Green Park Hotel, <br>
                                    Kanayyapeta; Near CMR School, <br>
                                    Vishakapatnam-530002, <br>
                                    Andhra Pradesh, India</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <div>
                                <h3>TIRUPATI</h3>
                                <p>H.NO:19-9-44a8, <br>
                                    Old Tiruchanur Road, <br>
                                    Kenedy Nagar, <br>
                                    Tirupathi-517501, <br>
                                    Andhra Pradesh, India.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- /Contact Section -->

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