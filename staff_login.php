<?php
session_start();
if (isset($_SESSION['staff_login'])) {

    header('location:staff_profile.php');
}


?>
<html>

<head>
    <title>Staff Page</title>
    <link rel="stylesheet" href="css/staff_login.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>

    <?php include 'header.php' ?>
    <div class="staff_login_container">

        <form method="post">

            <br>
            <div class="formspace">

                <div class="form">
                    <img class="userloginimg" src="img/home-logo-hi.png" height="90px" width="90px">

                    <label class="login">Staff</label>
                    <div class="input_field">
                        <label class="userdetail">Staff ID</label><br>
                        <input class="customer_id" type="text" name="staff_id" required /><br>
                        <label class="userdetail">Password</label><br>
                        <input class="password" type="password" name="password" required /><br>
                        <input class="login-btn" type="submit" name="staff_login-btn" value="LOGIN" /><br>
                        <a class="help"><label class="label_help">FORGET PASSWORD ?</label></a>
                    </div>
                </div>
            </div>
    </div>
    </form>
    <br>
    <section class="info_section layout_padding-top layout_padding2-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="info_links pl-lg-5">
                        <h4>
                            Menu
                        </h4>
                        <ul>
                            <li>
                                <a href="index.html">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="about.html">
                                    About
                                </a>
                            </li>
                            <li>
                                <a class="" href="portfolio.html">Portfolio </a>
                            </li>
                            <li>
                                <a class="" href="service.html">Services</a>
                            </li>
                            <li>
                                <a href="contact.html">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="info_contact">
                        <h4>
                            Location
                        </h4>
                        <div>
                            <img src="images/location.png" alt="" />
                            <p>
                                Malad (East)
                            </p>
                        </div>
                        <div>
                            <img src="images/telephone.png" alt="" />
                            <p>
                                ( +91 8282828282)
                            </p>
                        </div>
                        <div>
                            <img src="images/envelope.png" alt="" />
                            <p>
                                onlinebanking@cmail.com
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="info_social">
                        <h4>
                            Social Link
                        </h4>
                        <div class="social_container">
                            <div>
                                <a href="">
                                    <img src="images/facebook-logo.png" alt="" />
                                </a>
                            </div>
                            <div>
                                <a href="">
                                    <img src="images/twitter-logo.png" alt="" />
                                </a>
                            </div>
                            <div>
                                <a href="">
                                    <img src="images/instagram.png" alt="" />
                                </a>
                            </div>
                            <div>
                                <a href="">
                                    <img src="images/linkedin-sign.png" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="info_form">
                        <h4>
                            Newsletter
                        </h4>
                        <form action="#">
                            <input type="text" placeholder="Enter Your Email" />
                            <button type="submit">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="container-fluid footer_section">
        <p>
            &copy; 2023 All Rights Reserved By
            <a href="#">Online Banking</a>
        </p>
    </footer>

    <!-- <?php include 'footer.php' ?> -->
</body>

</html>

<?php include 'staff_login_process.php' ?>