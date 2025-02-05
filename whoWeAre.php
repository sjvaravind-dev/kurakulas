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

.gallery-item img {
    width: 100%;
    /* Adjust image width */
    max-width: 200px;
    /* Set max width for smaller size */
    height: auto;
    border: 3px solid none;
    /* Add border */
    border-radius: 10px;
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

.gallery-item img:hover {
    transform: scale(1.1);
    /* Hover effect */
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
}

.row.g-4 {
    --bs-gutter-x: 2rem;
    /* Reduce horizontal spacing */
    --bs-gutter-y: 2rem;
    /* Reduce vertical spacing */
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
                <h1>Who We Are</h1>
                <p>We are a trusted financial services provider, dedicated to helping individuals and businesses achieve their financial goals through expert advice and tailored solutions. With a commitment to transparency, integrity, and innovation, we empower you to make informed financial decisions.</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">About</li>
                    </ol>
                </nav>
            </div>
        </div> -->


        <!-- Details Section -->
        <section id="details" class="details section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Who We Are </h2>
                <div><span></span> <span class="description-title">Navigating the World of Finance with Integrity</span>
                </div>
            </div><!-- End Section Title -->

            <!-- who we are section -->
            <div class="container">

                <div class="row gy-4 align-items-center features-item">
                    <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                        <img src="assets/img/about/abt-6.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                        <!-- <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3> -->
                        <p class="about-content">
                            At <span class="txt-hg">KURAKULA'S</span>, we are a dynamic and versatile company dedicated
                            to delivering exceptional financial, investment, property, and consulting solutions to
                            individuals, businesses, and organizations. We are a trusted partner to our clients,
                            offering innovative strategies that create value and support long-term success in a
                            fast-evolving global marketplace. Our expertise spans across multiple industries, enabling
                            us to craft tailored solutions that meet the unique needs of each client. Whether you
                            require <span class="txt-hg">business finance, real estate financing, project financing,
                                bridging finance,</span> or <span class="txt-hg">IT solutions</span>, our team is
                            committed to providing personalized, impactful services that help you reach your objectives
                        </p>
                        <p class="about-content">Our diverse portfolio reflects our commitment to addressing a wide
                            range of client needs, from financial advisory and strategic investment services to property
                            solutions and consulting. We leverage cutting-edge technology and market insights to offer
                            forward-thinking services in <span class="txt-hg">investment strategies, consulting,
                                property management,</span> and even customized travel solutions. Our holistic approach
                            ensures that we are not just solving immediate challenges but also setting up our clients
                            for future success and stability.</p>
                        <!-- <ul>
                            <li><i class="bi bi-check"></i><span> Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</span></li>
                            <li><i class="bi bi-check"></i> <span>Duis aute irure dolor in reprehenderit in voluptate
                                    velit.</span>
                            </li>
                            <li><i class="bi bi-check"></i> <span>Ullam est qui quos consequatur eos accusamus.</span>
                            </li>
                        </ul> -->
                    </div>
                </div><!-- Features Item -->

                <div class="row gy-4 align-items-center features-item">
                    <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out"
                        data-aos-delay="200">
                        <img src="assets/img/about/abt-2.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200">
                        <!-- <h3>Corporis temporibus maiores provident</h3> -->
                        <p class="about-content">
                            At <span class="txt-hg">KURAKULA'S</span> we pride ourselves on fostering meaningful,
                            long-term relationships built on a foundation of trust, transparency, and integrity. Our
                            approach is client-centric, and we take the time to understand the specific goals and
                            challenges of each client we serve. This enables us to offer practical and actionable
                            solutions that are both effective and sustainable. Whether you are navigating complex
                            financial landscapes, exploring new investment opportunities, or seeking innovative IT
                            solutions, our experienced team is always ready to offer expert guidance and support.
                        </p>
                        <p class="about-content">
                            As a company, we believe in continuous innovation and staying ahead of market trends. We
                            understand the importance of adapting to the ever-changing business environment, and we are
                            constantly exploring new technologies, strategies, and methodologies to ensure our solutions
                            remain at the forefront of the industry. Our commitment to excellence drives us to maintain
                            the highest standards of service, ensuring that we deliver consistent results that have a
                            meaningful impact on the success of our clients.
                        </p>
                    </div>
                </div><!-- Features Item -->

                <div class="row gy-4 align-items-center features-item">
                    <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out">
                        <img src="assets/img/about/abt-1.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7" data-aos="fade-up">
                        <!-- <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3> -->
                        <p class="about-content">We are more than just a service provider—we are your trusted partner in
                            building a secure and prosperous future. Our goal is to be the go-to choice for individuals
                            and businesses seeking growth, financial stability, and forward-looking solutions. Whether
                            you are a startup looking for your first funding, an established company expanding your
                            operations, or an investor exploring new opportunities, <span
                                class="txt-hg">KURAKULA'S</span> is here to guide you every step of the way.</p>
                        <p class="about-content">
                            We specialize in <span class="txt-hg">financial services,</span> including <span
                                class="txt-hg">business finance, real estate financing,</span> and <span
                                class="txt-hg">project financing,</span> helping our clients navigate the complex world
                            of finance with confidence. Our expertise extends to <span class="txt-hg">IT
                                solutions,</span> where we work with organizations to optimize their operations through
                            technology, and <span class="txt-hg">consulting services,</span> offering insightful
                            strategies to businesses seeking growth, efficiency, and long-term success. In addition, we
                            provide <span class="txt-hg">property solutions</span> and <span class="txt-hg">travel
                                services,</span> ensuring that our clients' personal and professional needs are met with
                            the same level of dedication and quality that defines everything we do
                        </p>
                        <!-- <ul>
                            <li><i class="bi bi-check"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</span></li>
                            <li><i class="bi bi-check"></i><span> Duis aute irure dolor in reprehenderit in voluptate
                                    velit.</span>
                            </li>
                            <li><i class="bi bi-check"></i> <span>Facilis ut et voluptatem aperiam. Autem soluta ad
                                    fugiat</span>.
                            </li>
                        </ul> -->
                    </div>
                </div><!-- Features Item -->

                <div class="row gy-4 align-items-center features-item">
                    <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out">
                        <img src="assets/img/about/abt-4.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 order-2 order-md-1" data-aos="fade-up">
                        <!-- <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3> -->
                        <p class="about-content">
                            At <span class="txt-hg">KURAKULA'S</span> we believe that the key to success lies in the
                            strength of our partnerships. We are more than just service providers—we are your
                            collaborators, committed to understanding your unique goals and challenges and offering
                            solutions that align with your vision. By offering <span class="txt-hg">bridging finance,
                                investment strategies,</span> and <span class="txt-hg">financial technology
                                solutions,</span> we empower our clients to make informed decisions and unlock
                            opportunities that drive growth and success.
                        </p>
                        <p class="about-content">
                            Our team is made up of highly skilled professionals with a deep understanding of the markets
                            we operate in. We take a holistic approach to every project, integrating industry expertise,
                            cutting-edge technology, and a results-driven mindset to deliver solutions that have a
                            meaningful impact. Whether you are looking to expand your business, invest in real estate,
                            or secure funding for a new project, we are committed to being the partner you can rely on
                            every step of the way.
                        </p>
                    </div>
                </div><!-- Features Item -->

                <div class="row gy-4 align-items-center features-item">
                    <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out">
                        <img src="assets/img/about/abt-5.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7" data-aos="fade-up">
                        <!-- <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3> -->
                        <p class="about-content">Integrity, transparency, and innovation are the pillars of our
                            business. We are dedicated to building trust and delivering value, ensuring that each
                            service we provide contributes to the long-term success of our clients. As we continue to
                            evolve and expand, we remain focused on our core mission of delivering excellence, fostering
                            growth, and helping our clients achieve their financial and business objectives.</p>
                        <p class="about-content">
                            At <span class="txt-hg">KURAKULA'S</span> we don’t just help our clients achieve their
                            goals—we work alongside them to transform their aspirations into reality. We are here to
                            guide you through every step of your journey, offering expert advice, effective solutions,
                            and unwavering support as we create a brighter, more prosperous future together.
                        </p>

                    </div>
                </div><!-- Features Item -->

            </div>

        </section><!-- /Details Section -->

        <!-- Gallery Section -->
        <section id="gallery" class="gallery section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Our Branch Heades</h2>
                <div><span class="description-title">Passionate Professionals Driving Financial Excellence</span></div>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100" style="margin-top:-100px;">
                <div class="row g-0">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                        <!-- Image Card 1 -->
                        <div class="col">
                            <div class="gallery-item text-center">

                                <img src="assets/img/team/rambabu.png" alt="rambabu" class="img-fluid">

                                <h5 class="mt-3">K.Rambabu</h5>
                                <p>Business Head</p>
                            </div>
                        </div>

                        <!-- Image Card 2 -->
                        <div class="col">
                            <div class="gallery-item text-center">

                                <img src="assets/img/team/amar.png" alt="amar" class="img-fluid">

                                <h5 class="mt-3">G.Amarnath</h5>
                                <p>Business Head</p>
                            </div>
                        </div>

                        <!-- Image Card 3 -->
                        <div class="col">
                            <div class="gallery-item text-center">

                                <img src="assets/img/team/smaran.png" alt="Gallery Image 3" class="img-fluid">

                                <h5 class="mt-3">K.Satya Smaran</h5>
                                <p>Business Head</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="gallery-item text-center">

                                <img src="assets/img/team/shyam-kumar.png" alt="Gallery Image 3" class="img-fluid">

                                <h5 class="mt-3">S.Shyam-kumar</h5>
                                <p>Business Head</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="gallery-item text-center">

                                <img src="assets/img/team/vinod.png" alt="Gallery Image 3" class="img-fluid">

                                <h5 class="mt-3">K.Vinod</h5>
                                <p>Business Head</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="gallery-item text-center">

                                <img src="assets/img/team/nilima.png" alt="Gallery Image 3" class="img-fluid">

                                <h5 class="mt-3">S.Neelima</h5>
                                <p>Business Head</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Gallery Item -->



                </div>

            </div>

        </section><!-- /Gallery Section -->












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