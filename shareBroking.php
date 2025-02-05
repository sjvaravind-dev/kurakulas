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
    background-color: #ffffff;
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
</style>

<body class="index-page">

    <?php
    include('includes/navbar.php');
    ?>
    <main class="main">
        <section class="section blue-bg">
            <div class="containers">
                <div class="left">
                    <h2 style="font-size: 30px;">Why Choose <?php echo $comp_name; ?> Share Broking Services?</h2>
                    <p style="color:black" ;>At <?php echo $comp_name; ?>, we combine cutting-edge technology, expert
                        market insights, and customer-centric support to give you an edge in the stock market. Our share
                        broking services are designed
                        to empower you to trade efficiently, with full transparency and security. </p>
                    <ul>
                        <li class="all-services"><span class="txt-hg">User-Friendly Trading Platform:</span> Our
                            intuitive platform makes trading easy, whether you're using desktop or mobile. </li>
                        <li class="all-services"><span class="txt-hg">Low Brokerage Charges:</span> Maximize your
                            investment returns with competitive and affordable brokerage fees. </li>
                        <li class="all-services"><span class="txt-hg">Fast & Reliable Execution:</span>Experience quick
                            and seamless trade execution, ensuring that you never miss an opportunity. </li>
                        <li class="all-services"><span class="txt-hg">Real-Time Market Data:</span>Get access to live
                            market feeds, charts, and tools that allow you to make informed trading decisions. </li>
                        <li class="all-services"><span class="txt-hg">Expert Insights and Research:</span>Benefit from
                            market research, expert advice, and stock recommendations to enhance your trading
                            strategies. </li>
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

        <section class="section white-bg" style="margin-top:-100px;">
            <div class="containers">
                <div class="full-text">
                    <h4>Key Features of <?php echo $comp_name; ?> Share Broking Services </h4>
                    <ul>
                        <li class="all-services"><span class="txt-hg">Comprehensive Trading Tools:</span> Enjoy
                            real-time data, advanced charting tools, and
                            analytics to track market trends and spot potential opportunities. </li>
                        <li class="all-services"><span class="txt-hg">Direct Market Access (DMA):</span> Trade directly
                            in the stock market with instant execution
                            for faster and more accurate transactions. </li>
                        <li class="all-services"><span class="txt-hg">Diverse Investment Options:</span> Invest in a
                            wide range of financial instruments, including
                            stocks, derivatives, commodities, and mutual funds. </li>
                        <li class="all-services">Margin Trading Facility: Leverage your investments with margin trading,
                            giving you
                            the potential to maximize your returns. </li>
                        <li class="all-services"><span class="txt-hg">Multiple Trading Channels:</span> Access the stock
                            market via web-based
                            platforms, mobile
                            apps, and desktop software for maximum flexibility. </li>
                        <li class="all-services"><span class="txt-hg">Personalized Customer Support:</span> Our support
                            team is always available to
                            help you with
                            any queries or technical issues, ensuring a smooth trading experience. </li>
                    </ul>
                </div>
                <div class="full-text">
                    <h4>Eligibility Criteria for Opening a Share Broking Account with <?php echo $comp_name; ?> </h4>

                    <p class="all-services">To start trading with <?php echo $comp_name; ?> Share Broking Services, you need to meet the
                        following basic
                        requirements: </p>
                    <ul>
                        <li class="all-services"><span class="txt-hg">Age:</span> Minimum of 18 years old. </li>
                        <li class="all-services"><span class="txt-hg">KYC Compliance:</span> Complete the Know Your Customer (KYC) process,
                            which involves providing necessary identification and address proof. </li>
                        <li class="all-services"><span class="txt-hg">Demat Account:</span> You must have a valid Demat account (which we can
                            help you open if
                            you don’t already have one). </li>
                        <li class="all-services"><span class="txt-hg">Income Proof:</span> Depending on the type of investments, proof of
                            income may be required
                            for margin trading. </li>

                    </ul>
                    <p class="all-services">Open your account today and start your trading journey with <?php echo $comp_name; ?> Share
                        Broking
                        Services! </p>
                </div>
            </div>
        </section>
        <section class="section white-bg" style="margin-top:-100px;">
            <div class="containers">
                <div class="full-text">
                    <h4>Benefits of Choosing <?php echo $comp_name; ?> Share Broking Services </h4>
                    <ul>
                        <li class="all-services"><span class="txt-hg">Access to All Major Stock Exchanges:</span> Trade on multiple exchanges
                            like NSE, BSE,
                            and more, all under one platform.
                        </li>
                        <li class="all-services"><span class="txt-hg">Risk Management Tools:</span> Utilize stop-loss orders, advanced risk
                            management tools, and
                            alerts to protect your investments. </li>
                        <li class="all-services"><span class="txt-hg">Tailored Trading Plans:</span> Get personalized trading strategies and
                            recommendations based
                            on your risk profile and investment goals. </li>
                        <li class="all-services"><span class="txt-hg">Real-Time Tracking:</span> Stay updated on your portfolio’s performance
                            with real-time
                            tracking, so you can make quick decisions. </li>
                        <li class="all-services"><span class="txt-hg">Educational Resources:</span> Access webinars, tutorials, and articles
                            to improve your trading
                            knowledge and skills. </li>
                        <li class="all-services"><span class="txt-hg">Mobile Trading:</span> Trade on the go with our easy-to-use mobile app,
                            so you never miss a
                            trading opportunity. </li>
                    </ul>
                </div>
                <div class="full-text">
                    <h4>Start Trading with <?php echo $comp_name; ?> Today! </h4>
                    <p class="all-services">Get ready to take your trading to the next level with <?php echo $comp_name; ?> Share Broking
                        Services. With
                        competitive pricing, powerful trading tools, and expert support, we help you make the most of
                        your investments.</p>
                        <p><span class="txt-hg">Take Action Now:</span></p>
                    <ul>
                        <li class="all-services"><span class="txt-hg">Open Your Trading Account:</span> Sign up online in minutes and start trading with 
                        <?php echo $comp_name; ?> Share Broking Services. </li>
                        <li class="all-services"><span class="txt-hg">Contact Us:</span> Have questions or need assistance? Our team is here to help you with 
                        everything from account setup to trading strategies. </li>
                        <li class="all-services"><span class="txt-hg">Visit Us:</span> Visit our offices for a personalized consultation and to get expert advice on your 
                        trading journey. </li>
                    </ul>
                    <p>Don’t wait to make the most of market opportunities. <span class="txt-hg">Start trading with <?php echo $comp_name; ?> Share 
                    Broking Services today and begin your journey toward financial success! </span></p>
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