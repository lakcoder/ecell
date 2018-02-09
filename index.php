<?php
if ( isset( $_POST['submitexpo'] ) ) {
    $con = mysqli_connect("localhost:3306", "conso", "Conso123@", "conso");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }


    $email=$_POST['emailexpo'];


    $query = mysqli_query($con, "INSERT into expo (EMAIL) values('$email')");
     mysqli_close($con);
}
?>


<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
    <head>
        <!-- Basic -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Consortium'18 | E-CELL, VNIT</title>
        <meta name="keywords" content="Ecell vnit E-cell VNIT entreprenuship cell consortium 18 2018 consortium'18 vnit consortium " />
        <meta name="description" content="Consortium'18 E-CELL VNIT annual entrepreneurship summit">
        <meta name="author" content="Vipul Wairagade">

        <!-- Web Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">

        <!-- Vendor Styles -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/animate.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/themify/themify.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/scrollbar/scrollbar.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/swiper/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>


        <!-- Theme Styles -->
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/materialize.css" rel="stylesheet" type="text/css"/>
        <link href="css/overlay.css" rel="stylesheet" type="text/css"/>
        <link href="css/global/global.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
        <link rel="apple-touch-icon" href="img/icon.png">
    </head>
    <!-- End Head -->

    <!-- Body -->
    <body id="main">

        <!--========== HEADER ==========-->
        <header class="navbar-fixed-top s-header js__header-sticky js__header-overlay">
            <!-- Navbar -->
            <div class="s-header__navbar">
                <div class="s-header__container">
                    <div class="s-header__navbar-row">
                        <div class="s-header__navbar-row-col">
                            <!-- Logo -->
                            <div class="s-header__logo">
                                <a href="#" class="s-header__logo-link">
                                    <img class="s-header__logo-img s-header__logo-img-default" src="img/logo.png" alt="Consortium Logo">
                                    <img class="s-header__logo-img s-header__logo-img-shrink" src="img/logo-conso.png" alt="Consortium Logo">
                                </a>
                            </div>
                            <!-- End Logo -->
                        </div>
                        <div class="s-header__navbar-row-col">
                            <!-- Trigger -->
                            <a href="javascript:void(0);" class="s-header__trigger js__trigger">
                                <span class="s-header__trigger-icon"></span>
                                <svg x="0rem" y="0rem" width="3.125rem" height="3.125rem" viewbox="0 0 54 54">
                                    <circle fill="transparent" stroke="#fff" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
                                </svg>
                            </a>
                            <!-- End Trigger -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Navbar -->

            <!-- Overlay -->
            <div class="s-header-bg-overlay js__bg-overlay" id="overlay">
                <!-- Nav -->
                <nav class="s-header__nav js__scrollbar">
                    <div class="container-fluid">

                        <!-- Menu List -->
                        <ul class="list-unstyled s-header__nav-menu">
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="#about">About</a></li>
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="team.php">Team</a></li>
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="#events">Events</a></li>
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="spons.php">Sponsors</a></li>

                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="#contact">Contacts</a></li>
                        </ul>
                        <!-- End Menu List -->
                    </div>
                </nav>
                <!-- End Nav -->


                <!-- Action -->
                <ul class="list-inline s-header__action s-header__action--rb">
                    <li class="s-header__action-item">
                        <a class="s-header__action-link" href=" https://m.facebook.com/vnitecell/">
                            <i class="g-padding-r-5--xs ti-facebook"></i>
                            <span class="g-display-none--xs g-display-inline-block--sm">Facebook</span>
                        </a>
                    </li>
                    <li class="s-header__action-item">
                        <a class="s-header__action-link" href="https://twitter.com/ecell_vnit">
                            <i class="g-padding-r-5--xs ti-twitter"></i>
                            <span class="g-display-none--xs g-display-inline-block--sm">Twitter</span>
                        </a>
                    </li>
                    <li class="s-header__action-item">
                        <a class="s-header__action-link" href=" https://www.instagram.com/ecellvnit/">
                            <i class="g-padding-r-5--xs ti-instagram"></i>
                            <span class="g-display-none--xs g-display-inline-block--sm">Instagram</span>
                        </a>
                    </li>
                </ul>
                <!-- End Action -->
            </div>
            <!-- End Overlay -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== SWIPER SLIDER ==========-->
        <div class="s-swiper js__swiper-one-item">
            <!-- Swiper Wrapper -->
            <div class="swiper-wrapper">
                <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('img/1920x1080/02.jpg');">
                    <div class="container g-text-center--xs g-ver-center--xs">
                        <div class="g-margin-b-30--xs">
                            <h1 class="g-font-size-45--xs g-font-size-55--sm g-font-size-75--md g-color--white"><strong>Consortium</strong><br></h1>
                            <h2 class="g-color--white">9-11th March<br>VNIT, Nagpur</h2>
                        </div>
                    </div>
                </div>
                <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('img/1920x1080/01.jpg');">
                    <div class="container g-text-center--xs g-ver-center--xs">
                        <div class="g-margin-b-30--xs">
                            <div class="g-margin-b-30--xs">
                                <h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white">push the human race forward</h1>
                            </div>
                            <!--<a class="js__popup__youtube" href="https://www.youtube.com/watch?v=lcFYdgZKZxY" title="Intro Video">
                                <i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-control-play"></i>
                            </a>-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Swiper Wrapper -->

            <!-- Arrows -->
            <a href="javascript:void(0);" class="s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
            <a href="javascript:void(0);" class="s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
            <!-- End Arrows -->
        </div>
        <!--========== END SWIPER SLIDER ==========-->

        <!--========== PAGE CONTENT ==========-->
        <!-- About -->
        <div class="g-promo-section" id="about">
            <div class="container g-padding-y-80--xs g-padding-y-60--sm">
                <div class="row">
                    <div class="col-md-4 g-margin-t-15--xs g-margin-b-60--xs g-margin-b-0--lg">
                        <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">E-cell</p>
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                            <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md">About</h2>
                        </div>
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md">Consortium</h2>
                        </div>
                    </div>
                    <div class="col-md-7 col-md-offset-1">
                        <p class="g-font-size-18--xs">Welcome to the extravaganza that is Consortium! Consortium, the Annual Entrepreneurship Summit of VNIT Nagpur comprises of invigorating events like Startup Conclave and Swades.
                        The summit aims at fueling entrepreneurial attitude amongst students through healthy competition and exciting challenges.
                        It fosters the importance of leadership and decision making and introduces young technocrats to various management practices in the corporate world.</p>
                        <p class="g-font-size-18--xs">This year Consortium’s theme is Push the Human Race Forward. Through this theme we want to focus on the disruptive innovations and inventions that have took the whole human race forward.</p>
                    </div>
                </div>
            </div>

        </div>
        <!-- End About -->

        <!-- Counter -->
        <div class="js__parallax-window" style="background: url(img/1920x1080/06.jpg) 50% 0 no-repeat fixed;">
            <div class="container g-padding-y-100--xs g-padding-y-125--sm">
                <div class="row">
                    <div class="col-md-3 col-xs-6 g-full-width--xs g-margin-b-70--xs g-margin-b-0--lg">
                        <div class="g-text-center--xs">
                            <div class="g-margin-b-10--xs">
                                <figure class="g-display-inline-block--xs g-font-size-70--xs g-color--white js__counter">20</figure>
                                <span class="g-font-size-40--xs g-color--white">k+</span>
                            </div>
                            <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                            <h4 class="g-font-size-18--xs g-color--white">No. of Attendees</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 g-full-width--xs g-margin-b-70--xs g-margin-b-0--lg">
                        <div class="g-text-center--xs">
                            <div class="g-margin-b-10--xs">
                                <figure class="g-display-inline-block--xs g-font-size-70--xs g-color--white g-margin-b-10--xs js__counter">1</figure>
                                <span class="g-font-size-40--xs g-color--white">M</span>
                            </div>
                            <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                            <h4 class="g-font-size-18--xs g-color--white">Prizes Worth</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 g-full-width--xs g-margin-b-70--xs g-margin-b-0--sm">
                        <div class="g-text-center--xs">
                            <div class="g-margin-b-10--xs">
                                <figure class="g-display-inline-block--xs g-font-size-70--xs g-color--white g-margin-b-10--xs js__counter">350</figure>
                                <span class="g-font-size-40--xs g-color--white">+</span>
                            </div>
                            <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                            <h4 class="g-font-size-18--xs g-color--white">Startups</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 g-full-width--xs">
                        <div class="g-text-center--xs">
                            <div class="g-margin-b-10--xs">
                                <figure class="g-display-inline-block--xs g-font-size-70--xs g-color--white js__counter">15</figure>
                                <span class="g-font-size-40--xs g-color--white">+</span>
                            </div>
                            <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                            <h4 class="g-font-size-18--xs g-color--white">Speakers</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Counter -->

        <!-- Events -->
        <div class="container g-padding-y-10--xs s-portfolio" id="events">
            <div class="g-text-center--xs g-margin-b-40--xs">
                <h2 class="g-font-size-32--xs g-font-size-36--md">What We Have</h2>
            </div>
            <div class="card" id="event-card-bg">
                <div class="card-tabs">
    		      <ul class="tabs tabs-fixed-width">
    		        <li class="tab"><a class="active" href="#event">Events</a></li>
    		        <li class="tab"><a href="#session">Sessions</a></li>
    		        <li class="tab"><a href="#initiative">Initiatives</a></li>
    		        <li class="tab"><a href="#startup">Startup Expo</a></li>
    		      </ul>
    		    </div>
            </div>
            <!--Event Start-->
            <div class="card-content code">
                <div class="container g-margin-b-100--xs" id="event">

                    <div id="js__grid-portfolio-gallery" class="cbp">
                        <!-- Item -->
                        <div class="s-portfolio__item cbp-item event motion">
                            <div class="s-portfolio__img-effect">
                                <img src="img/970x647/startupconclave.jpg" alt="startupconclave Image">
                            </div>
                            <div class="s-portfolio__caption-hover--cc">
                                <div class="g-margin-b-25--xs">
                                    <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Startup Conclave</h4>
                                    <p class="g-color--white">Opportunity to learn new entrepreneurial techniques.</p>
                                </div>
                                <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                                    <li>
                                        <a href="https://conso18.ecellvnit.org/events/startupconclave/" target="_blank" class=" s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Portfolio Item <br/> by KeenThemes Inc.">
                                            <i class="ti-fullscreen"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Item -->
                        <div class="s-portfolio__item cbp-item event motion">
                            <div class="s-portfolio__img-effect">
                                <img src="img/970x647/adventure.jpg" alt="Portfolio Image">
                            </div>
                            <div class="s-portfolio__caption-hover--cc">
                                <div class="g-margin-b-25--xs">
                                    <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Ad-Venture</h4>
                                    <p class="g-color--white">Roll your pitch ideas into a complete advertisement for a company.</p>
                                </div>
                                <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                                    <li>
                                        <a href="/ad-venture.php" class=" s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Portfolio Item <br/> by KeenThemes Inc.">
                                            <i class="ti-fullscreen"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Item -->
                        <div class="s-portfolio__item cbp-item event motion">
                            <div class="s-portfolio__img-effect">
                                <img src="img/970x647/ceo.jpg" alt="Portfolio Image">
                            </div>
                            <div class="s-portfolio__caption-hover--cc">
                                <div class="g-margin-b-25--xs">
                                    <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">CEO</h4>
                                    <p class="g-color--white">Aims to ignite the spark of entrepreneurship in students to showcase their leadership skills in the corporate world.</p>
                                </div>
                                <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                                    <li>
                                        <a href="/ceo.php" class=" s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Portfolio Item <br/> by KeenThemes Inc.">
                                            <i class="ti-fullscreen"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Item -->
                        <div class="s-portfolio__item cbp-item event motion">
                            <div class="s-portfolio__img-effect">
                                <img src="img/970x647/bizmantra.jpg" alt="Portfolio Image">
                            </div>
                            <div class="s-portfolio__caption-hover--cc">
                                <div class="g-margin-b-25--xs">
                                    <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">bizmantra</h4>
                                    <p class="g-color--white">Idea of surviving in the market, through an interactive competition.</p>
                                </div>
                                <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                                    <li>
                                        <a href="/bizmantra.php" class=" s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Portfolio Item <br/> by KeenThemes Inc.">
                                            <i class="ti-fullscreen"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Item -->
                        <div class="s-portfolio__item cbp-item event motion">
                            <div class="s-portfolio__img-effect">
                                <img src="img/970x647/swades.jpg" alt="Portfolio Image">
                            </div>
                            <div class="s-portfolio__caption-hover--cc">
                                <div class="g-margin-b-25--xs">
                                    <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Swades</h4>
                                    <p class="g-color--white">Aims to understand the social problems in rural India and solve them using an entrepreneurial mindset.</p>
                                </div>
                                <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                                    <li>
                                        <a href="/swades.php" class=" s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Portfolio Item <br/> by KeenThemes Inc.">
                                            <i class="ti-fullscreen"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Item -->
                        <div class="s-portfolio__item cbp-item event motion">
                            <div class="s-portfolio__img-effect">
                                <img src="img/970x647/silhouette.jpg" alt="Portfolio Image">
                            </div>
                            <div class="s-portfolio__caption-hover--cc">
                                <div class="g-margin-b-25--xs">
                                    <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Silhouette</h4>
                                    <p class="g-color--white">Design stunning logo around a theme and test your desiging skills.</p>
                                </div>
                                <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                                    <li>
                                        <a href="/silhouette.php" class=" s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Portfolio Item <br/> by KeenThemes Inc.">
                                            <i class="ti-fullscreen"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!--Event End-->

            <!--Sessions Start-->
            <div class="card-content code">
                <div class="container g-margin-b-100--xs" id="session">
                    <!--<div id="js__grid-portfolio-gallery" class="cbp">-->
                        <!-- Item -->
                        <div class="s-portfolio__item cbp-item event motion">
                            <div class="s-portfolio__img-effect">
                                <img src="img/970x647/03.jpg" alt="startupconclave Image">
                            </div>
                            <div class="s-portfolio__caption-hover--cc">
                                <div class="g-margin-b-25--xs">
                                    <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Idea Generation and Validation</h4>
                                    <p class="g-color--white">IB Hubs</p>
                                </div>
                                <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                                    <li>
                                        <a href="#idea" target="_blank" class=" s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Portfolio Item <br/> by KeenThemes Inc.">
                                            <i class="ti-fullscreen"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--idea start-->
                        <div class="card-content code">
                            <div class="container g-margin-b-100--xs" id="idea">
                                <h5><b>Info to be added here!!</b></h5>
                            </div>
                        </div>
                        <!--idea end-->
                        <!-- Item -->
                        <div class="s-portfolio__item cbp-item event motion">
                            <div class="s-portfolio__img-effect">
                                <img src="img/970x647/01.jpg" alt="Portfolio Image">
                            </div>
                            <div class="s-portfolio__caption-hover--cc">
                                <div class="g-margin-b-25--xs">
                                    <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Data Analytics</h4>
                                    <p class="g-color--white">Yash Gandhi</p>
                                </div>
                                <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                                    <li>
                                        <a href="#data" class=" s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Portfolio Item <br/> by KeenThemes Inc.">
                                            <i class="ti-fullscreen"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--data start-->
                        <div class="card-content code">
                            <div class="container g-margin-b-100--xs" id="data">
                                <h3><b>Data Analytics by Yash Gandhi</b></h3>
                                <br>
                                <h4>About the Speaker</h4>
                                <ul type="none">
                                    <li>Yash Gandhi,</li>
                                    <li>Lead Statistician,</li>
                                    <li>Helpshift,</li>
                                    <li>Purdue University</li>
                                </ul>
                                <br>
                                <b>Date : </b><b>24<sup>th</sup> August, 2017</b>
                                <br>
                                <br>
                                <h4>Insights</h4>
                                <p>
                                    Data science, also known as data-driven science, is an interdisciplinary field of scientific
                                    methods, processes, and systems to extract knowledge or insights from data in various forms,
                                    either structured or unstructured, similar to data mining.
                                    Data science is a "concept to unify statistics, data analysis and their related methods" in
                                    order to "understand and analyze actual phenomena" with data.
                                </p>
                                <p>Here's a look at some of the key Big Data trends entrepreneurs need to be aware of today:</p>
                                <ol>
                                    <li>Heavier emphasis on predictive analytics</li>
                                    <li>Deep learning</li>
                                    <li>The rise of the data engineer</li>
                                    <li>Shifting away from Hadoop</li>
                                    <li>Big Data-as-a-Self Service</li>
                                </ol>
                            </div>
                        </div>
                        <!--data end-->
                        <!-- Item -->
                        <div class="s-portfolio__item cbp-item event motion">
                            <div class="s-portfolio__img-effect">
                                <img src="img/970x647/06.jpg" alt="Portfolio Image">
                            </div>
                            <div class="s-portfolio__caption-hover--cc">
                                <div class="g-margin-b-25--xs">
                                    <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Error Management</h4>
                                    <p class="g-color--white">Michael Frese</p>
                                </div>
                                <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                                    <li>
                                        <a href="#error" class=" s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Portfolio Item <br/> by KeenThemes Inc.">
                                            <i class="ti-fullscreen"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--error start-->
                        <div class="card-content code">
                            <div class="container g-margin-b-100--xs" id="idea">
                                <h3><b>Error Management</b></h3>
                                <br>
                                <h4>About the Speaker</h4>
                                <ul type="none">
                                    <li>Michael Frese,</li>
                                    <li>Provost's Chair,</li>
                                    <li>Head of Department,</li>
                                    <li>National University of Singapore</li>
                                </ul>
                                <br>
                                <b>Date : </b><b>30<sup>th</sup> November, 2017</b>
                                <br><br>
                                <h4>Insights</h4>
                                <p>
                                    Every organization is confronted with errors. Most errors are corrected easily,
                                    but some may lead to negative consequences. Organizations often focus on error
                                    prevention as a single strategy for dealing with errors. Our review suggests
                                    that error prevention needs to be supplemented by error management—an approach
                                    directed at effectively dealing with errors after they have occurred, with the
                                    goal of minimizing negative and maximizing positive error consequences
                                    (examples of the latter are learning and innovations). After defining errors
                                    and related concepts, we review research on error-related processes affected
                                    by error management (error detection, damage control). Empirical evidence on
                                    positive effects of error management in individuals and organizations is then
                                    discussed, along with emotional, motivational, cognitive, and behavioral
                                    pathways of these effects. Learning from errors is central, but like other
                                    positive consequences, learning occurs under certain circumstances—one being
                                    the development of a mind-set of acceptance of human error.
                                </p>
                            </div>
                        </div>
                        <!--error end-->
                        <!-- Item -->
                        <div class="s-portfolio__item cbp-item event motion">
                            <div class="s-portfolio__img-effect">
                                <img src="img/970x647/09.jpg" alt="Portfolio Image">
                            </div>
                            <div class="s-portfolio__caption-hover--cc">
                                <div class="g-margin-b-25--xs">
                                    <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Desiging a BPlan</h4>
                                    <p class="g-color--white">Devesh Chawla</p>
                                </div>
                                <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                                    <li>
                                        <a href="#bplan" class=" s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Portfolio Item <br/> by KeenThemes Inc.">
                                            <i class="ti-fullscreen"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--bplan start-->
                        <div class="card-content code">
                            <div class="container g-margin-b-100--xs" id="idea">
                                <h3><b>Desiging a BPlan</b></h3>
                                <br>
                                <h4>About the Speaker</h4>
                                <ul type="none">
                                    <li>Devesh Chawla,</li>
                                    <li>CEO & Founder,</li>
                                    <li>Chatur Ideas</li>
                                </ul>
                                <br>
                                <b>Date : </b><b>04<sup>th</sup> January, 2018</b>
                                <br><br>
                                <h4>Insights</h4>
                                <div>
                                    <ul>
                                        <li>
                                            What is a business plan?
                                            <ol type="a" start="1">
                                                <li>Why prepare a business plan?</li>
                                                <li>What to avoid in your business plan</li>
                                            </ol>
                                        </li>
                                        <li>
                                            Business Plan Format
                                            <ol type="a" start="3">
                                                <li>Vision statement</li>
                                                <li>The people</li>
                                                <li>Business profile</li>
                                                <li>Economic assessment</li>
                                            </ol>
                                         </li>
                                         <li>
                                             Eight Steps to a Great Business Plan
                                             <ol type="a" start="7">
                                                 <li>Set time aside to prepare</li>
                                                 <li>Focus and refine concept</li>
                                                 <li>Gather data</li>
                                                 <li>Outline the specifics of your business</li>
                                                 <li>Include experience</li>
                                                 <li>Put your plan into a compelling form</li>
                                                 <li>Enhance with graphics</li>
                                                 <li>Share draft with trusted advisers</li>
                                             </ol>
                                         </li>
                                         <li>
                                             Does Your Plan Include the Following Necessary Factors
                                             <ol type="a" start="15">
                                                 <li>A sound business concept</li>
                                                 <li>Understanding your market</li>
                                                 <li>Healthy, growing and stable industry</li>
                                                 <li>Capable management</li>
                                                 <li>Able financial control</li>
                                                 <li>Consistent business focus</li>
                                                 <li>Mindset to anticipate change</li>
                                                 <li>Plans for online business</li>
                                             </ol>
                                         </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <!--bplan end-->
                        <!-- Item -->
                        <div class="s-portfolio__item cbp-item event motion">
                            <div class="s-portfolio__img-effect">
                                <img src="img/970x647/11.jpg" alt="Portfolio Image">
                            </div>
                            <div class="s-portfolio__caption-hover--cc">
                                <div class="g-margin-b-25--xs">
                                    <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Web Session</h4>
                                    <p class="g-color--white">Matt Abrahams</p>
                                </div>
                                <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                                    <li>
                                        <a href="#matt" class=" s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Portfolio Item <br/> by KeenThemes Inc.">
                                            <i class="ti-fullscreen"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--matt start-->
                        <div class="card-content code">
                            <div class="container g-margin-b-100--xs" id="idea">
                                <h3><b>Web Session by Matt Abrahams with register button</b></h3>
                                <br>
                                <h4>About:</h4>
                                <ul type="none">
                                    <li>Matt Abrahams,</li>
                                    <li>Lectures on organizational behavior,</li>
                                    <li>Stanford Graduate School of Business</li>
                                    <li>Author of <i>Speaking Up Without Freaking Out</i></li>
                                    <li><b>TEDx Speaker</b> on <i>“Think fast, talk smart”</i></li>
                                </ul>
                                <br>
                                <b>Date : </b><b>03<sup>rd</sup> February, 2018</b>
                                <br><br>
                                <h4>In his words:</h4>
                                <p><i>
                                    As a communication professor and coach, I hear a lot from presenters about anxiety.
                                    Their two greatest fears are that they will forget what to say and that the audience
                                    won’t remember what was spoken. These fears are certainly understandable, but create
                                    much angst among nervous and novice presenters. In this series of posts, I will suggest
                                    several steps you can take to make your presentations more memorable for everyone.
                                </i></p>
                            </div>
                        </div>
                        <!--matt end-->
                    </div>
                </div>
            </div>
            <!--Session End-->

            <!--Initiatives Start-->
            <div class="card-content code">
                <div class="container g-margin-b-100--xs" id="initiative">
                    <br>
                    <h4>Plantation</h4>
                    <h5>Smart Plantation by using Innovative Self Watering Tree Gaurds</h5>
                    <i>Sponsored by- Rainbow Greeners, Rakshak</i>
                    <p>Date: 26<sup>th</sup> January 2018</p>
                    <br>
                    <i><h6>About</h6></i>
                    <p>The 69th Republic Day of India witnessed a Self-Watering Tree Plantation Drive
                       organized by Entrepreneurship Cell, VNIT in association with Rakshak by Rainbow
                       Greeners. The Director of VNIT, Nagpur, Dr. N. S. Chaudhari, welcomed the initiative
                       along with the authorities and dignitaries of the institute.  The environment and its
                       greenery help make a nation healthier in the most direct way possible, and the students
                       of E-Cell, VNIT, decided that this auspicious day called for a step in the right direction.
                       The self-watering tree guards ensure that water directly goes to the roots of the plant, and
                       needs water only once every fifteen days. The CEO of Ajmera Tires, Dipesh Ajmera, also attended
                       the event to show his support. Mr. Ajmera is also a mentor on the panel of Startup Conclave, a pan
                       India exhibition of startups as part of Consortium ’18, coming up on 9 March, 2018. The initiative
                       today goes hand in hand with E-Cell’s mantra this year to ‘Push the Human Race Forward’, and create
                       a growth-driven youth for the city and the nation at large.  </p>
                </div>
            </div>
            <!--Inititatives End-->

            <!--Startup Expo Start-->
            <div class="card-content code">
                <div class="container g-margin-b-100--xs" id="startup">
                    <h5>Comming Soon..</h5>
                </div>
            </div>
            <!--Startup Expo End-->

        </div>

        <!-- Subscribe -->
        <div class="js__parallax-window" style="background: url(img/1920x1080/07.jpg) 50% 0 no-repeat fixed;">
            <div class="g-container--sm g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-margin-b-80--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Join In</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">Startup Expo</h2>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <form class="input-group" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <input type="email" class="form-control s-form-v1__input g-radius--left-50" name="emailexpo" placeholder="Email ?">
                            <span class="input-group-btn">
                                <button type="submit" class="s-btn s-btn-icon--md s-btn-icon--white-brd s-btn--white-brd g-radius--right-50" name="submitexpo"><i class="ti-arrow-right"></i></button>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Subscribe -->

        <!-- Feedback Form -->
        <div class="g-bg-color--sky-light" id="contact">
            <div class="container g-padding-y-0--xs g-padding-y-0--sm">
                <div class="g-text-center--xs g-margin-b-40--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Contact</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--md">Mail Us</h2>
                </div>
                <form method="post" action="">
                    <div class="row g-margin-b-40--xs">
                        <div class="col-sm-6 g-margin-b-20--xs g-margin-b-0--md">
                            <div class="g-margin-b-20--xs">
                                <input type="text" name="name" class="form-control s-form-v2__input g-radius--50" placeholder="* Name">
                            </div>
                            <div class="g-margin-b-20--xs">
                                <input type="email" name="email" class="form-control s-form-v2__input g-radius--50" placeholder="* Email">
                            </div>
                            <input type="text" name="phone" class="form-control s-form-v2__input g-radius--50" placeholder="* Phone">
                        </div>
                        <div class="col-sm-6">
                            <textarea class="form-control s-form-v2__input g-radius--10 g-padding-y-20--xs" rows="8" name="message" placeholder="* Your message"></textarea>
                        </div>
                    </div>
                    <div class="g-text-center--xs">
                        <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--primary-bg g-radius--50 g-padding-x-80--xs">Submit</button>
                    </div>
                </form>
                <div class="g-text-center--xs" id="confirm"></div>
                <div class="g-text-center--xs g-margin-b-40--xs">
                    <br><br>
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--400 g-letter-spacing--2 g-margin-b-25--xs">Or Need Any Help? Contact: <a href="team.php">Team</a></p>
                </div>
            </div>
        </div>
        <!-- End Feedback Form -->

        <!--========== END PAGE CONTENT ==========-->

        <!--========== FOOTER ==========-->
        <?php include("footer.php");?>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>

        <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
        <!-- Vendor -->
        <script type="text/javascript" src="vendor/jquery.min.js"></script>
		<script src="js/main.js"></script>
        <script type="text/javascript" src="vendor/jquery.migrate.min.js"></script>
        <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.smooth-scroll.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.back-to-top.min.js"></script>
        <script type="text/javascript" src="vendor/scrollbar/jquery.scrollbar.min.js"></script>
        <script type="text/javascript" src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="vendor/swiper/swiper.jquery.min.js"></script>
        <script type="text/javascript" src="vendor/waypoint.min.js"></script>
        <script type="text/javascript" src="vendor/counterup.min.js"></script>
        <script type="text/javascript" src="vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.parallax.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U"></script>
        <script type="text/javascript" src="vendor/jquery.wow.min.js"></script>
        <script src="/js/cards.js"></script>
		<script src="/js/materialize.js"></script>


        <!-- General Components and Settings -->
        <script type="text/javascript" src="js/global.min.js"></script>
        <script type="text/javascript" src="js/components/header-sticky.min.js"></script>
        <script type="text/javascript" src="js/components/scrollbar.min.js"></script>
        <script type="text/javascript" src="js/components/magnific-popup.min.js"></script>
        <script type="text/javascript" src="js/components/swiper.min.js"></script>
        <script type="text/javascript" src="js/components/counter.min.js"></script>
        <script type="text/javascript" src="js/components/portfolio-3-col.min.js"></script>
        <script type="text/javascript" src="js/components/parallax.min.js"></script>
        <script type="text/javascript" src="js/components/google-map.min.js"></script>
        <script type="text/javascript" src="js/components/wow.min.js"></script>
        <!--========== END JAVASCRIPTS ==========-->

    </body>
    <!-- End Body -->
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo("
<script type=\"text/javascript\">
    $('#confirm').append('<br><p class=\"text-uppercase g-font-size-14--xs g-font-weight--400 g-letter-spacing--2 g-margin-b-25--xs\">Plz! Fill the form</p>');
    location.replace(\"#contact\");
</script>
");

   return false;
   }

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));

require_once "Mail.php";
#include("Mail.php");
$from = "E-CELL VNIT <noreply@ecellvnit.org>";    //your mail id
$to = "<contact@ecellvnit.org>";
$subject = "Website Contact Form:  $name";
$body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$host = "ssl://sharedlinux.cloudhostdns.net";
$port = "465";
$username = "noreply@ecellvnit.org";          //your mail id
$password = "Ecellvnit123@";                      //password of this mail id

$headers = array ('From' => $from,
'To' => $to,
'Subject' => $subject);
$smtp = Mail::factory('smtp',
array ('host' => $host,
'port' => $port,
'auth' => true,
'username' => $username,
'password' => $password));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
echo("<p>" . $mail->getMessage() . "</p>");
} else {
   echo("
<script type=\"text/javascript\">
    $('#confirm').append('<br><p class=\"text-uppercase g-font-size-14--xs g-font-weight--400 g-letter-spacing--2 g-margin-b-25--xs\">Your Message Sent!</p>');
</script>
");
}

$from = "E-CELL VNIT <noreply@ecellvnit.org>";    //your mail id
$to = $email_address;
$subject = "Thank You For Contacting us";
$body = "Thank You $name for Contacting us.\n\nWe will surely contact you soon.\n\nFor instant support contact\nName: Vipul Wairagade\nEmail: sonu.wairagade@gmail.com\nPhone: 8275868277/7020172097";
$host = "ssl://sharedlinux.cloudhostdns.net";
$port = "465";
$username = "noreply@ecellvnit.org";          //your mail id
$password = "Ecellvnit123@";                      //password of this mail id

$headers = array ('From' => $from,
'To' => $to,
'Subject' => $subject);
$smtp = Mail::factory('smtp',
array ('host' => $host,
'port' => $port,
'auth' => true,
'username' => $username,
'password' => $password));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
echo("<p>" . $mail->getMessage() . "</p>");
}
}
?>
