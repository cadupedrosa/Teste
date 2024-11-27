<?php $v->layout("_theme"); ?>

<div id="modal" class="popupContainer" style="display:none;">
    <div class="popupHeader">
        <span class="header_title">Login</span>
        <span class="modal_close"><i class="fa fa-times"></i></span>
    </div>

    <section class="popupBody">
        <!-- Social Login -->
        <div class="social_login">
            <div class="">
                <a href="#" class="social_box fb">
                    <span class="icon"><i class="fab fa-facebook"></i></span>
                    <span class="icon_title">Connect with Facebook</span>

                </a>

                <a href="#" class="social_box google">
                    <span class="icon"><i class="fab fa-google-plus"></i></span>
                    <span class="icon_title">Connect with Google</span>
                </a>
            </div>

            <div class="centeredText">
                <span>Or use your Email address</span>
            </div>

            <div class="action_btns">
                <div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
                <div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
            </div>
        </div>

        <!-- Username & Password Login form -->
        <div class="user_login">
            <form>
                <label>Email / Username</label>
                <input type="text" />
                <br />

                <label>Password</label>
                <input type="password" />
                <br />

                <div class="checkbox">
                    <input id="remember" type="checkbox" />
                    <label for="remember">Remember me on this computer</label>
                </div>

                <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><a href="#" class="btn btn_red">Login</a></div>
                </div>
            </form>

            <a href="#" class="forgot_password">Forgot password?</a>
        </div>

        <!-- Register Form -->
        <div class="user_register">
            <form>
                <label>Full Name</label>
                <input type="text" />
                <br />

                <label>Email Address</label>
                <input type="email" />
                <br />

                <label>Password</label>
                <input type="password" />
                <br />

                <div class="checkbox">
                    <input id="send_updates" type="checkbox" />
                    <label for="send_updates">Send me occasional email updates</label>
                </div>

                <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><a href="#" class="btn btn_red">Register</a></div>
                </div>
            </form>
        </div>
    </section>
</div>

<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2>Get The Latest App From App Stores</h2>
                                    <p>Chain App Dev is an app landing page HTML5 template based on Bootstrap v5.1.3 CSS layout provided by TemplateMo, a great website to download free CSS templates.</p>
                                </div>
                                <div class="col-lg-12">
                                    <div class="white-button first-button scroll-to-section">
                                        <a href="#contact">Free Quote <i class="fab fa-apple"></i></a>
                                    </div>
                                    <div class="white-button scroll-to-section">
                                        <a href="#contact">Free Quote <i class="fab fa-google-play"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img src="<?= theme("/assets/images/slider-dec.png", CONF_VIEW_TELE); ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ======= Cliens Section ======= -->
<section id="cliens" class="cliens section-bg">
    <div class="container">

        <div class="row" data-aos="zoom-in">

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="<?= theme("/assets/images/clients/client-1.png", CONF_VIEW_MED); ?>" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="<?= theme("/assets/images/clients/client-2.png", CONF_VIEW_TELE); ?>" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="<?= theme("/assets/images/clients/client-3.png", CONF_VIEW_TELE); ?>" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="<?= theme("/assets/images/clients/client-4.png", CONF_VIEW_TELE); ?>" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="<?= theme("/assets/images/clients/client-5.png", CONF_VIEW_TELE); ?>" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="<?= theme("/assets/images/clients/client-6.png", CONF_VIEW_TELE); ?>" class="img-fluid" alt="">
            </div>

        </div>

    </div>
</section>
<!-- End Cliens Section -->
<div id="services" class="services section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h4>Amazing <em>Services &amp; Features</em> for you</h4>
                    <img src="<?= theme("/assets/images/heading-line-dec.png", CONF_VIEW_TELE); ?>" alt="">
                    <p>If you need the greatest collection of HTML templates for your business, please visit <a rel="nofollow" href="://www.toocss.com/" target="_blank">TooCSS</a> Blog. If you need to have a contact form PHP script, go to <a href="https://templatemo.com/contact" target="_parent">our contact page</a> for more information.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="service-item first-service">
                    <div class="icon"></div>
                    <h4>App Maintenance</h4>
                    <p>You are not allowed to redistribute this template ZIP file on any other website.</p>
                    <div class="text-button">
                        <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="service-item second-service">
                    <div class="icon"></div>
                    <h4>Rocket Speed of App</h4>
                    <p>You are allowed to use the Chain App Dev HTML template. Feel free to modify or edit this layout.</p>
                    <div class="text-button">
                        <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="service-item third-service">
                    <div class="icon"></div>
                    <h4>Multi Workflow Idea</h4>
                    <p>If this template is beneficial for your work, please support us <a rel="nofollow" href="https://paypal.me/templatemo" target="_blank">a little via PayPal</a>. Thank you.</p>
                    <div class="text-button">
                        <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="service-item fourth-service">
                    <div class="icon"></div>
                    <h4>24/7 Help &amp; Support</h4>
                    <p>Lorem ipsum dolor consectetur adipiscing elit sedder williamsburg photo booth quinoa and fashion axe.</p>
                    <div class="text-button">
                        <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="about" class="about-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="section-heading">
                    <h4>About <em>What We Do</em> &amp; Who We Are</h4>
                    <img src="<?= theme("/assets/images/heading-line-dec.png", CONF_VIEW_TELE); ?>" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eismod tempor incididunt ut labore et dolore magna.</p>
                </div>
                <div class=" row">
                    <div class="col-lg-6">
                        <div class="box-item">
                            <h4><a href="#">Maintance Problems</a></h4>
                            <p>Lorem Ipsum Text</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="box-item">
                            <h4><a href="#">24/7 Support &amp; Help</a></h4>
                            <p>Lorem Ipsum Text</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="box-item">
                            <h4><a href="#">Fixing Issues About</a></h4>
                            <p>Lorem Ipsum Text</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="box-item">
                            <h4><a href="#">Co. Development</a></h4>
                            <p>Lorem Ipsum Text</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eismod tempor idunte ut labore et dolore adipiscing magna.</p>
                        <div class="gradient-button">
                            <a href="#">Start 14-Day Free Trial</a>
                        </div>
                        <span>*No Credit Card Required</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-image">
                    <img src="<?= theme("/assets/images/about-right-dec.png", CONF_VIEW_TELE); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div id="clients" class="the-clients">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="section-heading">
                    <h4>Check What <em>The Clients Say</em> About Our App Dev</h4>
                    <img src="<?= theme("/assets/images/heading-line-dec.png", CONF_VIEW_TELE); ?>" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eismod tempor incididunt ut labore et dolore magna.</p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="naccs">
                    <div class="grid">
                        <div class="row">
                            <div class="col-lg-7 align-self-center">
                                <div class="menu">
                                    <div class="first-thumb active">
                                        <div class="thumb">
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-4 col-12">
                                                    <h4>David Martino Co</h4>
                                                    <span class="date">30 November 2021</span>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                                                    <span class="category">Financial Apps</span>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-12">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span class="rating">4.8</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="thumb">
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-4 col-12">
                                                    <h4>Jake Harris Nyo</h4>
                                                    <span class="date">29 November 2021</span>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                                                    <span class="category">Digital Business</span>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-12">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span class="rating">4.5</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="thumb">
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-4 col-12">
                                                    <h4>May Catherina</h4>
                                                    <span class="date">27 November 2021</span>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                                                    <span class="category">Business &amp; Economics</span>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-12">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span class="rating">4.7</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="thumb">
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-4 col-12">
                                                    <h4>Random User</h4>
                                                    <span class="date">24 November 2021</span>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                                                    <span class="category">New App Ecosystem</span>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-12">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span class="rating">3.9</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="last-thumb">
                                        <div class="thumb">
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-4 col-12">
                                                    <h4>Mark Amber Do</h4>
                                                    <span class="date">21 November 2021</span>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                                                    <span class="category">Web Development</span>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-12">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span class="rating">4.3</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <ul class="nacc">
                                    <li class="active">
                                        <div>
                                            <div class="thumb">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="client-content">
                                                            <img src="<?= theme("/assets/images/quote.png", CONF_VIEW_TELE); ?>" alt="">
                                                            <p>“Lorem ipsum dolor sit amet, consectetur adpiscing elit, sed do eismod tempor idunte ut labore et dolore magna aliqua darwin kengan
                                                                lorem ipsum dolor sit amet, consectetur picing elit massive big blasta.”</p>
                                                        </div>
                                                        <div class="down-content">
                                                            <img src="<?= theme("/assets/images/client-image.jpg", CONF_VIEW_TELE); ?>" alt="">
                                                            <div class="right-content">
                                                                <h4>David Martino</h4>
                                                                <span>CEO of David Company</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <div class="thumb">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="client-content">
                                                            <img src="<?= theme("/assets/images/quote.png", CONF_VIEW_TELE); ?>" alt="">
                                                            <p>“CTO, Lorem ipsum dolor sit amet, consectetur adpiscing elit, sed do eismod tempor idunte ut labore et dolore magna aliqua darwin kengan
                                                                lorem ipsum dolor sit amet, consectetur picing elit massive big blasta.”</p>
                                                        </div>
                                                        <div class="down-content">
                                                            <img src="<?= theme("/assets/images/client-image", CONF_VIEW_TELE); ?>" alt="">
                                                            <div class="right-content">
                                                                <h4>Jake H. Nyo</h4>
                                                                <span>CTO of Digital Company</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <div class="thumb">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="client-content">
                                                            <img src="<?= theme("/assets/images/quote.png", CONF_VIEW_TELE); ?>" alt="">
                                                            <p>“May, Lorem ipsum dolor sit amet, consectetur adpiscing elit, sed do eismod tempor idunte ut labore et dolore magna aliqua darwin kengan
                                                                lorem ipsum dolor sit amet, consectetur picing elit massive big blasta.”</p>
                                                        </div>
                                                        <div class="down-content">
                                                            <img src="<?= theme("/assets/images/client-image", CONF_VIEW_TELE); ?>" alt="">
                                                            <div class="right-content">
                                                                <h4>May C.</h4>
                                                                <span>Founder of Catherina Co.</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <div class="thumb">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="client-content">
                                                            <img src="<?= theme("/assets/images/quote.png", CONF_VIEW_TELE); ?>" alt="">
                                                            <p>“Lorem ipsum dolor sit amet, consectetur adpiscing elit, sed do eismod tempor idunte ut labore et dolore magna aliqua darwin kengan
                                                                lorem ipsum dolor sit amet, consectetur picing elit massive big blasta.”</p>
                                                        </div>
                                                        <div class="down-content">
                                                            <img src="<?= theme("/assets/images/client-image", CONF_VIEW_TELE); ?>" alt="">
                                                            <div class="right-content">
                                                                <h4>Random Staff</h4>
                                                                <span>Manager, Digital Company</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <div class="thumb">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="client-content">
                                                            <img src="<?= theme("/assets/images/quote.png", CONF_VIEW_TELE); ?>" alt="">
                                                            <p>“Mark, Lorem ipsum dolor sit amet, consectetur adpiscing elit, sed do eismod tempor idunte ut labore et dolore magna aliqua darwin kengan
                                                                lorem ipsum dolor sit amet, consectetur picing elit massive big blasta.”</p>
                                                        </div>
                                                        <div class="down-content">
                                                            <img src="<?= theme("/assets/images/client-image", CONF_VIEW_TELE); ?>" alt="">
                                                            <div class="right-content">
                                                                <h4>Mark Am</h4>
                                                                <span>CTO, Amber Do Company</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="pricing" class="pricing-tables">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="section-heading">
                    <h4>We Have The Best Pre-Order <em>Prices</em> You Can Get</h4>
                    <img src="<?= theme("/assets/images/heading-line-dec.png", CONF_VIEW_TELE); ?>" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eismod tempor incididunt ut labore et dolore magna.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pricing-item-regular">
                    <span class="price">$12</span>
                    <h4>Standard Plan App</h4>
                    <div class="icon">
                        <img src="<?= theme("/assets/images/pricing-table-01.png", CONF_VIEW_TELE); ?>" alt="">
                    </div>
                    <ul>
                        <li>Lorem Ipsum Dolores</li>
                        <li>20 TB of Storage</li>
                        <li class="non-function">Life-time Support</li>
                        <li class="non-function">Premium Add-Ons</li>
                        <li class="non-function">Fastest Network</li>
                        <li class="non-function">More Options</li>
                    </ul>
                    <div class="border-button">
                        <a href="#">Purchase This Plan Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pricing-item-pro">
                    <span class="price">$25</span>
                    <h4>Business Plan App</h4>
                    <div class="icon">
                        <img src="<?= theme("/assets/images/pricing-table-01.png", CONF_VIEW_TELE); ?>" alt="">
                    </div>
                    <ul>
                        <li>Lorem Ipsum Dolores</li>
                        <li>50 TB of Storage</li>
                        <li>Life-time Support</li>
                        <li>Premium Add-Ons</li>
                        <li class="non-function">Fastest Network</li>
                        <li class="non-function">More Options</li>
                    </ul>
                    <div class="border-button">
                        <a href="#">Purchase This Plan Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pricing-item-regular">
                    <span class="price">$66</span>
                    <h4>Premium Plan App</h4>
                    <div class="icon">
                        <img src="<?= theme("/assets/images/pricing-table-01.png", CONF_VIEW_TELE); ?>" alt="">
                    </div>
                    <ul>
                        <li>Lorem Ipsum Dolores</li>
                        <li>120 TB of Storage</li>
                        <li>Life-time Support</li>
                        <li>Premium Add-Ons</li>
                        <li>Fastest Network</li>
                        <li>More Options</li>
                    </ul>
                    <div class="border-button">
                        <a href="#">Purchase This Plan Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>