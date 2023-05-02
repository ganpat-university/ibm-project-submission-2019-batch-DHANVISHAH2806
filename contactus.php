<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!-- <title> Responsive Contact Us Form  | CodingLab </title>-->
    <link rel="stylesheet" href="css/contactus.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
    <?php include 'header.php' ?>

    <div class="container1">
        <div class="content">
            <div class="left-side">
                <div class="address details">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="topic">Address</div>
                    <div class="text-one">Ahemdabad,</div>
                    <div class="text-two">India</div>
                </div>
                <div class="phone details">
                    <i class="fas fa-phone-alt"></i>
                    <div class="topic">Phone</div>
                    <div class="text-one">+91 82828 28282</div>
                    <div class="text-two">+91 82828 28282</div>
                </div>
                <div class="email details">
                    <i class="fas fa-envelope"></i>
                    <div class="topic">Email</div>
                    <div class="text-one">onlinebanking@cmail.com</div>
                </div>
            </div>
            <div class="right-side">
                <div class="topic-text">Send us a message</div>
                <form action="#">
                    <div class="input-box">
                        <input type="text" placeholder="Enter your name">
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Enter your email">
                    </div>
                    <div class="input-box message-box">
                        <textarea type="text" placeholder="Enter your message"></textarea>
                    </div>
                    <div class="button">
                        <input type="button" value="Send Now">
                    </div>
                </form>
            </div>
        </div>
    </div>
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
</body>

</html>