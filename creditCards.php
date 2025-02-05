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
    background-color:#c2b4b521;
    color: black;
}

.white-bg {
    background-color: #fff;
    color: #333;
}

.container {
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
            <div class="container">
                <div class="left">
                    <h2 style="font-size: 29px;">Why Choose KURAKULA'S Credit Cards? </h2>
                    <p style="color:black; font-size:20px;"> <span class="txt-hg">KURAKULA'S</span>, we believe in providing you with the tools to manage your
                        finances with ease and
                        convenience. Our credit cards are packed with features that offer both immediate purchasing
                        power and long-term rewards. </p>
                    <ul>

                        <li><span class="txt-hg">Low-Interest Rates</span>: Competitive rates that make managing your balance easier and
                            more affordable. </li>
                        <li><span class="txt-hg">Flexible Repayment Options</span>: Pay in full or spread your payments over time with
                            flexible repayment plans. </li>
                        <li><span class="txt-hg">Exclusive Rewards</span>: Earn points or cashback on every purchase, redeemable for a variety
                            of exciting rewards. </li>
                        <li><span class="txt-hg">Worldwide Acceptance</span>: Use your Kurakulas Credit Card at millions of locations
                            worldwide, both online and in-store. </li>
                        
                        <li><span class="txt-hg">Instant Approval</span>: Quick approval process that gives you access to your credit line in no
                            time. </li>
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
            <div class="container">
                <div class="full-text">
                    <h4>Eligibility Criteria </h4>
                    <p>Kurakulas Credit Cards are designed for individuals looking to enhance their financial flexibility 
                    and rewards. To qualify, you need to meet the following basic criteria: </p>
                    <ul>
                        <li><span class="txt-hg">Age</span>: Minimum of 21 years old. </li>
                        <li><span class="txt-hg">Income</span>: A minimum monthly income (specifics vary depending on the card type). </li>
                        <li><span class="txt-hg">Creditworthiness</span>: A good credit score is required for approval (flexible options 
                        available for those with less-than-perfect credit). </li>
                        <li><span class="txt-hg">Employment Status</span>: Full-time employment, self-employed, or proof of consistent 
                        income from other sources. </li>
                        
                    </ul>
                    <p>Start enjoying the benefits of a Kurakulas Credit Card today! </p>
                </div>
                <div class="full-text">
                    <h4>Benefits of Choosing Kurakulas Credit Cards  </h4><!--
                    <p>Kurakulas Credit Cards are designed for individuals looking to enhance their financial flexibility 
                    and rewards. To qualify, you need to meet the following basic criteria: </p>
-->   <ul>
                        <li><span class="txt-hg">Earn Rewards & Cashback</span>: Get rewarded for your everyday spending with points or 
                        cashback that can be redeemed for a variety of perks.  </li>
                        <li><span class="txt-hg">Build Your Credit History</span>: A Kurakulas Credit Card can help you build or improve 
                        your credit score with responsible use. </li>
                        <li><span class="txt-hg">24/7 Customer Support</span>: Our dedicated customer support team is available to assist with 
                        any queries or issues you may have.  </li>
                        <li><span class="txt-hg">Exclusive Offers & Discounts</span>: Access special offers and discounts at your favorite 
                        retailers and online stores.  </li>
                        <li><span class="txt-hg">Financial Control</span>: Manage your spending and monitor your transactions with our easy-
                        to-use online banking portal or mobile app.   </li>
                        
                    </ul>
                    
                </div>
            </div>
        </section>
        <section class="section white-bg">
            <div class="container">
                <div class="full-text">
                    <h4>Start Earning Rewards Today: Apply for Your Kurakulas Credit Card Now! </h4>
                    <p>Take control of your finances and start enjoying the benefits of a Kurakulas Credit Card today. 
With low rates, flexible payments, and the ability to earn rewards, there’s no better way to 
manage your spending and get more out of every purchase. </p>
                    <ul>
                        <li><span class="txt-hg">Apply Online</span>: Fill out our simple application form and get approved fast.  </li>
                        <li><span class="txt-hg">Contact Us</span>: Have questions? Our team is ready to help you choose the right card for 
                        your needs.  </li>
                        <li><span class="txt-hg">Visit Us<span>: Drop by one of our branches for a personalized consultation. </li>
                       
                        
                    </ul>
                    <p>Don’t wait to get the financial freedom and rewards you deserve. Apply for your Kurakulas 
                    Credit Card today and start enjoying the benefits!  </p>
                </div>
                <!--
                <div class="full-text">
                    <h2>Benefits of Choosing Kurakulas Credit Cards  </h2>
                    <p>Kurakulas Credit Cards are designed for individuals looking to enhance their financial flexibility 
                    and rewards. To qualify, you need to meet the following basic criteria: </p>
--  <ul>
                        <li>Earn Rewards & Cashback: Get rewarded for your everyday spending with points or 
                        cashback that can be redeemed for a variety of perks.  </li>
                        <li>Build Your Credit History: A Kurakulas Credit Card can help you build or improve 
                        your credit score with responsible use. </li>
                        <li>24/7 Customer Support: Our dedicated customer support team is available to assist with 
                        any queries or issues you may have.  </li>
                        <li>Exclusive Offers & Discounts: Access special offers and discounts at your favorite 
                        retailers and online stores.  </li>
                        <li>Financial Control: Manage your spending and monitor your transactions with our easy-
                        to-use online banking portal or mobile app.   </li>
                        
                    </ul>-->
                    
                </div>
            </div>
        </section>



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