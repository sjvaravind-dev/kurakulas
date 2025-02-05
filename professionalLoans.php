<?php 
include('includes/dbConfig.php');
?>
<!DOCTYPE html>
<html lang="en">

<?php 
include('includes/header.php');
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
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

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f8f9fa;
}

.h2 {
    color: black;
    font-size: 30px;

}

.section {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 60px 20px;
    transition: all 0.5s ease-in-out;
}

.blue-bg {
    background-color: #c2b4b521;
    color: black;
}

.white-bg {
    background-color: #fff;
    color: #333;
}

.containers {
    display: flex;
    max-width: 1200px;
    width: 100%;
    gap: 40px;
}

.left,
.right {
    flex: 1;
    font-family: Arial, sans-serif;
    font-size: 21px;


}

.left ul {
    list-style: none;
    padding: 0;
}

.left ul li {
    margin: 10px 0;
    font-size: 18px;
    position: relative;
    padding-left: 30px;
}

.left ul li::before {
    content: '\f00c';
    font-family: 'Font Awesome 5 Free';
    font-weight: 900;
    position: absolute;
    left: 0;
    color: rgb(167, 40, 40);
}

.right form {
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    animation: fadeInUp 1s ease-in-out;
}

.right form input,
.right form textarea {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.right form button {
    background: #007bff;
    color: white;
    padding: 10px 15px;
    border: none;
    cursor: pointer;
    transition: background 0.3s;
}

.right form button:hover {
    background: #0056b3;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Default styles apply to large screens (desktops and laptops) */

/* For Tablets (portrait and landscape) */
@media (max-width: 1024px) {
    .containers {
        flex-direction: column;
        gap: 20px;
    }

    .left,
    .right {
        flex: none;
        width: 100%;
    }

    .right form {
        padding: 15px;
    }
}

/* For Mobile Devices (landscape and portrait) */
@media (max-width: 768px) {
    .section {
        padding: 40px 15px;
    }

    h2 {
        font-size: 24px;
    }

    .containers {
        flex-direction: column;
        gap: 15px;
    }

    .left,
    .right {
        width: 100%;
    }

    .right form input,
    .right form textarea {
        font-size: 14px;
        padding: 8px;
    }

    .right form button {
        padding: 8px 12px;
        font-size: 14px;
    }
}

/* For Small Mobile Devices (small screens) */
@media (max-width: 480px) {
    .section {
        padding: 30px 10px;
    }

    h2 {
        font-size: 20px;
    }

    .left ul li {
        font-size: 16px;
    }
}

.containers {
    display: flex;
    justify-content: space-between;
    gap: 20px;
}

.full-text {
    flex: 1;
    background: #f9f9f9;
    padding: 20px;
    border-radius: 8px;
}

/* Responsive Layout */
@media (max-width: 1024px) {
    .containers {
        flex-direction: column;
        gap: 15px;
    }
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
        <section class="section blue-bg">
            <div class="containers">
                <div class="left">
                    <h2 style="font-size: 25px;">Professional Loans by KURAKULA'S: Empowering Your Career Growth </h2>
                    <p style="color:black; font-size:20px;"> Take the Next Step in Your Professional Journey with
                        Kurakulas Professional Loans.
                        Whether you’re pursuing further education, launching a business, or expanding your career, our
                        professional loan options are designed to support your goals. </p>
                    <p style="font-size:20px;">Why Choose <span class="txt-hg"> KURAKULA'S</span> Professional Loans?
                    </p>
                    <ul>
                        <p style="font-size:18px;> <span class=" txt-hg"> KURAKULA'S</span>, we believe in the potential
                            of professionals like you. Our loans are tailored
                            to
                            help you achieve career success, offering: </p>

                        <li><span class="txt-hg">Low Interest Rates</span>: Benefit from affordable rates that keep your
                            repayment manageable. </li>
                        <li><span class="txt-hg">Fast Processing</span>: Get approved quickly, so you can focus on your
                            professional goals. </li>
                        <li><span class="txt-hg">No Hidden Fees</span>: Transparent terms with no surprise charges.
                        </li>
                        <li><span class="txt-hg">Personalized Support</span>: Our team is ready to guide you through the
                            process and answer
                            all your questions. </li>

                    </ul>
                </div>
                <div class="right">
                    <h2>Get a Free Consultation</h2>
                    <form>
                        <input type="text" placeholder="Your Name" required>
                        <input type="email" placeholder="Your Email" required>
                        <input type="tel" placeholder="Your Phone" required>
                        <textarea placeholder="Your Message" rows="4" required></textarea>
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </section>

        <section class="section white-bg">
            <div class="containers">
                <div class="full-text">
                    <h4>Benefits of a Professional Loan </h4>
                    <!--
                    <p>Kurakulas Credit Cards are designed for individuals looking to enhance their financial flexibility 
                    and rewards. To qualify, you need to meet the following basic criteria: </p>-->
                    <ul>
                        <li><span class="txt-hg">No Collateral Required</span>: Since most professional loans are
                            unsecured, professionals don’t
                            need
                            to risk their assets to secure funding, making it an ideal option for those with limited
                            collateral. </li>
                        <li><span class="txt-hg">Flexible Loan Terms</span>: Professional loans offer repayment
                            flexibility, allowing professionals
                            to
                            tailor the loan tenure and repayment schedule according to their cash flow and income
                            patterns. Quick and Easy Approvals</span>: Fast-track your business growth with our swift
                            loan
                            approval process. </li>
                        <li><span class="txt-hg">Lower Interest Rates</span>: Interest rates for professional loans are
                            typically lower than those
                            of
                            personal loans, making it a more affordable option for professionals who require significant
                            funding. </li>
                        <li><span class="txt-hg">Faster Processing</span>: Lenders typically offer faster approval and
                            disbursement for professional
                            loans to ensure that professionals don’t face delays in accessing the funds they need. </li>
                        <li><span class="txt-hg">Easy Documentation: The documentation process for professional loans is
                                usually simpler than
                                that for other business loans. It often requires proof of professional qualification,
                                income, and
                                experience. </li>


                    </ul>
                    <!--
                    <p>Start enjoying the benefits of a Kurakulas Credit Card today! </p>-->
                </div>
                <div class="full-text">
                    <h4>Key Features :</h4>
                    <!--
                    <p>There are several types of business loans available, including: </p>-->
                    <ul>
                        <li><span class="txt-hg">Wide Use for Loans</span>: Whether it’s funding further education,
                            covering licensing fees, or
                            expanding your professional practice, our loans cover various professional needs.</li>
                        <li><span class="txt-hg">Quick and Easy Application</span>: A simple online process with minimal
                            documentation and
                            fast approval. </li>
                        <li><span class="txt-hg">Customizable Loan Amounts</span>: We provide loans in varying amounts
                            to suit different
                            professional needs and career stages. </li>
                        <li><span class="txt-hg">Flexible Terms</span>: Choose from a range of flexible loan durations
                            to fit your budget and
                            career timelines. </li>


                    </ul>

                </div>

            </div>

        </section>
        <section class="section white-bg">
            <div class="containers">
                <div class="full-text">
                    <h4>Eligibility Criteria:</h4>
                    <p>Kurakulas Professional Loans are designed to support individuals at different stages of their
                        careers. To qualify, you need to meet these basic criteria: </p>
                    <ul>
                        <li><span class="txt-hg">Age</span>: Minimum of 21 years old.
                        </li>
                        <li><span class="txt-hg">Employment Status</span>: Full-time or part-time employment,
                            self-employed, or pursuing
                            further education. </li>
                        <li><span class="txt-hg">Professional Focus</span>: Loans are available for doctors, lawyers,
                            entrepreneurs, consultants,
                            and other professionals looking to advance their careers. </li>
                        <li><span class="txt-hg">Credit History</span>: A satisfactory credit score (alternative options
                            available for those with
                            less-than-perfect credit). </li>
                    </ul>
                    <p>Simple, straightforward, and accessible for all professionals. </p>
                </div>
                <div class="full-text">
                    <h4>Benefits of Choosing Kurakulas Professional Loans:</h4>
                    <ul>
                        <li><span class="txt-hg">Career Advancement</span>: Use the loan to fund certifications,
                            training programs, or startup
                            costs. </li>
                        <li><span class="txt-hg">Flexible Usage</span>: Invest in the tools, resources, or education you
                            need to excel in your
                            field. </li>
                        <li><span class="txt-hg">Low Stress</span>: No more worrying about finances. With low rates and
                            easy payments, you
                            can stay focused on your professional development. </li>
                        <li><span class="txt-hg">Financial Freedom</span>: Take control of your career and financial
                            future with the funding
                            you need to succeed. </li>

                    </ul>
                </div>
                <div class="full-text">
                    <h4>Get Started Today: Apply for Your PRofessional Loan Now! </h4>
                    <ul>
                        <p>Invest in your future and unlock new opportunities with a<span class="txt-hg"> Kurakulas Professional Loan</span>.
                            Whether you’re looking to improve your qualifications, expand your business, or scale your
                            career, we are here to help. </p>
                        <li><span class="txt-hg">Apply Online: </span>Complete our simple application form to get a
                            decision in no time. </li>

                    </ul>
                </div>
            </div>
        </section>

        <!--
        <section class="section white-bg">
            <div class="container">
                <div class="full-text">
                    <h2>How It Works: </h2>
                    <p>Take control of your finances and start enjoying the benefits of a Kurakulas Credit Card today.
                        With low rates, flexible payments, and the ability to earn rewards, there’s no better way to
                        manage your spending and get more out of every purchase. </p>
                    <ul>
                        <li>Apply Online: Fill out our simple application form and get approved fast. </li>
                        <li>Contact Us: Have questions? Our team is ready to help you choose the right card for
                            your needs. </li>
                        <li>Visit Us: Drop by one of our branches for a personalized consultation. </li>


                    </ul>
                    <p>Don’t wait to get the financial freedom and rewards you deserve. Apply for your Kurakulas
                        Credit Card today and start enjoying the benefits! </p>
                </div>
                

            </div>
            </div>
        </section>-->



    </main>

    <?php 
    include('includes/footer.php');
    ?>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>
    < <?php include('includes/script.php'); ?> </body>

</html>