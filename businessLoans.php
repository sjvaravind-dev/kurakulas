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
    .left, .right {
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
    .left, .right {
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
                    <h2 style="font-size: 30px;">Welcome to KURAKULA'S — Your Trusted Partner for Business Loans </h2>
                    <p style="color:black; font-size:20px;"> KURAKULA'S , we understand that every business needs the right financial
                        support to thrive.
                        Whether you’re a budding entrepreneur or an established enterprise, our tailored business loan
                        solutions are designed to help you achieve your goals. </p>
                    <p>Why Do You Need a Business Loan? </p>
                    <ul>

                        <li><span class="txt-hg">Start or Grow Your Business</span>: Whether you're launching a new venture or looking to expand
                            your
                            existing business, a business loan can provide the capital you need to cover startup costs,
                            hire
                            employees, or increase production. </li>
                        <li><span class="txt-hg">Manage Cash Flow</span>: Business loans can help you cover day-to-day expenses like inventory,
                            salaries, bills, and operational costs, especially if you're dealing with seasonal
                            fluctuations or
                            delayed payments. </li>
                        <li><span class="txt-hg">Invest in Equipment and Technology</span>: Upgrading your equipment, machinery, or technology can
                            improve efficiency and productivity.</li>
                        <li>Business loans can help you finance these investments
                            without straining your cash flow. </li>

                    </ul><p style="color:black; font-size:18px;"><span class="txt-hg">Increase Working Capital</span>: A business loan can help you maintain adequate working capital to run your 
                    business smoothly, ensuring that you can meet financial obligations even during periods of high demand </p>
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
                    <h4>Why Choose KURAKULA'S  for Your Business Loan? </h4>
                    <!--
                    <p>Kurakulas Credit Cards are designed for individuals looking to enhance their financial flexibility 
                    and rewards. To qualify, you need to meet the following basic criteria: </p>-->
                    <ul>
                        <li><span class="txt-hg">Competitive Interest Rates</span>: Keep your business expenses in check with affordable
                            interest rates. </li>
                        <li><span class="txt-hg">Quick and Easy Approvals</span>: Fast-track your business growth with our swift loan
                            approval process. </li>
                        <li><span class="txt-hg">Flexible Repayment Options</span>: Choose repayment terms that suit your cash flow. </li>
                        <li><span class="txt-hg">Customized Loan Solutions</span>: Get financing tailored to your business needs. </li>
                        <li><span class="txt-hg">Customized Loan Solutions</span>: Get financing tailored to your business needs. </li>
                        <li><span class="txt-hg">Transparent Terms</span>: No hidden fees, just straightforward loan agreements. </li>

                    </ul>
                    <!--
                    <p>Start enjoying the benefits of a Kurakulas Credit Card today! </p>-->
                </div>
                <div class="full-text">
                    <h4>Our Business Loan Features: </h4>
                    <!--
                    <p>There are several types of business loans available, including: </p>-->
                    <ul>
                        <li>Loans for small, medium, and large enterprises </li>
                        <li>Financing for working capital, equipment purchase, and business expansion </li>
                        <li>High loan amounts based on business requirements </li>
                        <li>Minimal and hassle-free documentation </li>
                        <li>Flexible tenure options for convenient repayment </li>

                    </ul>

                </div>
                
            </div>
            
        </section>
        <section class="section white-bg">
    <div class="containers">
        <div class="full-text">
            <h4>How It Works:</h4>
            <ul>
                <li>Apply Online or Visit Us: Fill out a simple application form with the necessary details.</li>
                <li>Quick Approval: Receive prompt decisions on your loan application.</li>
                <li>Fund Disbursement: Get the funds you need without unnecessary delays.</li>
                <li>Grow Your Business: Utilize the funds to expand operations, purchase equipment, or manage working capital.</li>
            </ul>
        </div>
        <div class="full-text">
            <h4>Eligibility Criteria:</h4>
            <ul>
                <li>Minimum age: 21 years</li>
                <li>Stable and profitable business operations</li>
                <li>Business vintage of at least 1 year (for existing businesses)</li>
                <li>Valid identity and address proofs</li>
                <li>Satisfactory credit history</li>
            </ul>
        </div>
        <div class="full-text">
            <h4>Required Documents:</h4>
            <ul>
                <li>Identity Proof (Aadhaar Card, Passport, PAN Card, etc.)</li>
                <li>Address Proof (Utility bills, Rental agreement, etc.)</li>
                <li>Business Proof (GST registration, business license, etc.)</li>
                <li>Financial Documents (bank statements, IT returns, balance sheets)</li>
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