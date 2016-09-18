<?php
/**
 * Created by Ian Arsenault.
 * Section: MAIN - Homepages
 *
 *
 *  TODO: ADD CONTACT PHP MYSQL SECTION
 */
$action = $_REQUEST['action'];
if ($action == 'Send-Message') {
    // Make scroll point back to contact us form
    /***STILL TESTING GOOGLE.COM REDIRECT ***/
    echo "relocate();";
}
?>

<!-- LANDING SPLASH -->
<div class="loading-overlay">
    <div id="fadediv">
        <!--  LOGO -->
        <div class="logo-land logo-transform">
            <img height="256" width="256" src="images/logos/logo.png" />
        </div>
        <!-- PROGRESS BAR 1 -->
        <div class="progress progress-1-transform">
            <div class="progress-bar-1"></div>
        </div>
        <div class="progress progress-middle-transform">
            <div class="progress-bar-middle"></div>
        </div>
        <!-- PROGRESS BAR 2 -->
        <div class="progress progress-2-transform">
            <div class="progress-bar-2"></div>
        </div>
    </div>
</div>
<!-- End Landing Splash -->

<!-- ADDED DIV FOR AJAX CALL -- IF ISSUES ON BIG SCREENS CHANGE BACK TO MAIN -->
<div id="content">
    <main>
        <!-- Parallax Or Jumbotron Head -->
        <div class="parallax-container">
            <!--<div class="parallax"><img src="https://rimbizblog.files.wordpress.com/2016/03/medical-computer.jpg"></div>-->
            <div class="parallax"><img src="images/images/backgroundskelcopy.jpeg"></div>

        </div><!-- End Parallax Container-->

        <!-- Top Page Header -->
        <div class="Message-Header-Top">
            <div class="row" id="topDemo">
                <div class="center-align"><span class="title-top">Latest Demo Here!&nbsp;</span>
                    <a class="download-demo-btn" href="#demo"><i
                            class="fa fa-download green-text text-lighten-1 fa-2x top-dl-btn"
                            aria-hidden="true"></i></a>
                </div>
            </div>
        </div><!-- End Top Page Header -->


        <!-- Begin About -->
        <section class="about-section scrollspy" id="about">
            <div class="row">
                <div class="col s12 m8 offset-m2 l6 offset-l3">
                    <h4 class="center-align">About</h4>
                    <hr/>
                    <p></p>
                </div>
            </div>

            <!-- About Us Section Card -->
            <div class="row">
                <div class="col s12 m8 l8 offset-m2 offset-l2">
                    <div class="card">
                        <div class="card-content black-text">
                            <ul id="aboutImg">
                                <li>
                                    <div class="center-align">
                                        <img height="256" width="256" src="images/logos/logo.png"/>
                                    </div>
                                </li>
                            </ul>
                            <ul id="aboutTitle">
                                <li>
                                    <h3 class="card-title center-align">Our Purpose</h3>
                                    <hr/>
                                </li>
                            </ul>
                            <ul id="aboutParagraphs">
                                <li>
                                    <div class="row">
                                        <div class="col s10 offset-s1">
                                            <div class="card z-depth-0">
                                                <div class="card-content black-text">
                                                    <p><span class="cap-P ralewayThin">P</span>rotech Solutions is a
                                                        software development company, and we love what we do. We're
                                                        always evolving, but right now we specialize in key components
                                                        in the health and medical industry, to make both medical
                                                        facilities, and small out-patient facilities run smoother, and
                                                        more reliable. We're a small,
                                                        but dedicated team of software engineers who continue to find
                                                        inspiration in our work, as we strive to integrate our
                                                        applications with ease into any
                                                        health field environment.</p>
                                                    <p class="about-ptwo"><span class="cap-o ralewayThin">S</span>killfully,
                                                        our goal at Protech Solutions is to create intuitive, useful,
                                                        and functional applications that are easy to use, visually
                                                        appealing, and can save our customers
                                                        time and energy in their busy field. We feel it's necessary to
                                                        sit down with all clientele to make sure that they receive the
                                                        best support needed for our
                                                        applications to run smoothly in their work environment</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="card-action center-align"></div>
                    </div>
                </div>
            </div>
        </section><!-- End About -->

        <!-- Begin Product Details -->
        <section class="product-section section scrollspy container" id="product">
            <!-- Application Title -->
            <ul id="fireApplicationTitle">
                <li>
                    <div class="row">
                        <div class="col s12 m8 offset-m2 l6 offset-l3">
                            <h4 class="center-align">Applications</h4>
                            <hr/>
                            <p></p>
                        </div>
                    </div>

                </li>
            </ul>
            <!-- Applications Collapsible Section --->
            <div class="row app-collaps">
                <div class="col s12 m8 offset-m2 l6 offset-l3 open-sans4">
                    <ul id="collapseApps" class="collapsible popout" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header apps-header active"><i class="material-icons">storage</i>Advanced
                                EHR Suite
                            </div>
                            <div class="collapsible-body">
                                <img src="images/images/doc-tablet.jpg" class="responsive-img"/>
                                <p>A intuitive, customizable, interconnected application that allows for instant
                                    information on patients. While allowing users to update records on the fly, pull
                                    patient information,
                                    and add dynamic medical data without any hassle.
                                </p></div>
                        </li>
                        <li>
                            <div class="collapsible-header apps-header"><i class="material-icons">filter_drama</i>Advanced
                                Medical Billing Suite<span class="new badge right-align"
                                                           data-badge-caption="Coming Soon"></span></div>
                            <div class="collapsible-body">
                                <p>A comprehensive cloud based application, that creates an easy, precise, billing
                                    experience,
                                    that supports claims management, insurance adjustments, and patient billing.
                                </p></div>
                        </li>
                        <li>
                            <div class="collapsible-header apps-header"><i class="material-icons">devices_other</i>Advanced
                                Patient Portal Suite<span class="new badge left-align"
                                                          data-badge-caption="Coming Soon"></span></div>
                            <div class="collapsible-body">
                                <p>A well designed application tool for your office and patients. Designed with ease in
                                    mind
                                    for any user. Easy access to update a patients record, billing, or medical history.
                                    Creating a
                                    hub, so that your patients can schedule an appointment with a click of the
                                    button.</p></div>
                        </li>
                    </ul>
                </div>
            </div>

            <ul id="fireApplicationDetails">
                <li>
                    <div class="row">
                        <div class="col s12 m8 offset-m2 l6 offset-l3">
                            <h4 class="center-align">Application Details</h4>
                            <hr/>
                            <p></p>
                        </div>
                    </div>

                </li>
            </ul>

            <!-- ROW - UNIQUE -->
            <div class="row">
                <!-- Unique1 Fire --->
                <ul id="uniqueCard1">
                    <li>
                        <!-- Unique Image --->
                        <div class="col s12 m6 push-m1">
                            <div class="card" id="uniqueone">
                                <div class="card-image">
                                    <div class="uniq-card-overlay">
                                        <img src="images/images/unique.jpeg">
                                    </div>
                                    <span class="card-title"></span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- Unique2 Fire --->
                <ul id="uniqueCard2">
                    <li>
                        <!-- Unique Content --->
                        <div class="col s12 m6 pull-m1">
                            <div class="card unique-push">
                                <div class="card-content white-text">
                                    <div class="center-align">
                                        <span class="card-title"><i
                                                class="material-icons">fingerprint</i> Uniqueness</span>
                                    </div>
                                    <p>Our applications are designed with the user in mind. Our EHR Suite is unique in
                                        that
                                        it allows for an intuitive flow, and experience for the user to accomplish their
                                        tasks.
                                    </p>
                                </div>
                                <div class="card-action">
                                    <div class="center-align">
                                        <a href="#demo" id="uniqueLink">View Screenshots</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div><!-- End horizontal card about -->

            <!-- ROW - SPEED -->
            <div class="row">
                <ul id="speedImage">
                    <li>
                        <!-- Speed Content Card -->
                        <div class="col s12 m6 push-m5">
                            <div class="card" id="speedcard">
                                <div class="card-image">
                                    <div class="speed-img-overlay">
                                        <img class="" src="images/images/speed.jpeg">
                                    </div>
                                    <span class="card-title" id="righter"></span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul id="speedContent">
                    <li>
                        <!-- Speed Image Card -->
                        <div class="col s12 m6 pull-m5">
                            <div class="card speed-push">
                                <div class="card-content white-text">
                                    <div class="center-align">
                                        <span class="card-title">Data <i class="material-icons">timeline</i></span>
                                    </div>
                                    <p>We've built a structured application that allows your health-care staff to easily
                                        retrieve, update, delete and add to new and existing patient records.</p>
                                </div>
                                <div class="card-action">
                                    <div class="center-align">
                                        <a href="#testimonial" id="datalink">View Testimonials</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div><!-- END ROW - SPEED -->

            <!-- ROW - SPEED -->
            <div class="row open-sans4 bottom-row">
                <ul id="supportImage">
                    <li>
                        <!-- Support Image Card --->
                        <div class="col s12 m6 push-m1">
                            <div class="card" id="supprt1">
                                <div class="card-image">
                                    <div class="support-img-overlay">
                                        <img class="" src="images/images/support.jpg">
                                    </div>
                                    <!--<span class="card-title"><i class="material-icons tab-icon">live_help</i> Support 24/7</span>-->
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul id="supportContent">
                    <li>
                        <!-- Support Content Card --->
                        <div class="col s12 m6 pull-m1">
                            <div class="card support-push" id="supprt2">
                                <div class="card-content white-text">
                                    <div class="center-align">
                                        <span class="card-title"><i class="material-icons tab-icon">live_help</i> Support 24/7</span>
                                    </div>
                                    <p>Whether you have a questions about our products, or if you just need help with an
                                        existing issue with an application.
                                        Please contact us, by either our live chat, telephone, or email.</p>
                                </div>
                                <div class="card-action">
                                    <div class="center-align">
                                        <a href="#modal-chat" id="supportLink" class="modal-trigger">Need Help?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div><!-- End horizontal card about -->

            <!-- TECHNOLOGY  && TOOL ROW  -->

            <!-- Application Title -->
            <div class="row">
                <ul id="fireTechnologyTitle">
                    <li>
                        <div class="col s12 m8 offset-m2 l6 offset-l3">
                            <h4 class="center-align">Technology</h4>
                            <hr/>
                            <p></p>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Stack Technology First Row -->
            <div class="row tool-row-1">
                <ul id="techIcons1">
                    <li>
                        <div class="col s12">
                            <div class="col s3 tool-icons center-align">
                                <i class="devicon-javascript-plain colored large hvr-float"></i>
                            </div>
                            <div class="col s3 tool-icons center-align">
                                <i class="devicon-jquery-plain-wordmark large colored hvr-float"></i>
                            </div>
                            <div class="col s3 tool-icons center-align">
                                <i class="devicon-php-plain colored large hvr-float"></i>
                            </div>
                            <div class="col s3 tool-icons center-align">
                                <i class="devicon-mysql-plain-wordmark colored large hvr-float"></i>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Stack Technology Second Row -->
            <div class="row tool-row-2">
                <ul id="techIcons2">
                    <li>
                        <div class="col s12">
                            <div class="col s3 tool-icons center-align">
                                <i class="devicon-csharp-plain colored large hvr-float"></i>
                            </div>
                            <div class="col s3 tool-icons center-align">
                                <i class="devicon-dot-net-plain-wordmark colored large hvr-float"></i>
                            </div>
                            <div class="col s3 tool-icons center-align">
                                <i class="devicon-github-plain-wordmark colored large hvr-float"></i>
                            </div>
                            <div class="col s3 tool-icons center-align">
                                <img src="http://findicons.com/files/icons/2779/simple_icons/4096/visualstudio.png"
                                     class="vs-icon hvr-float">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- To-top Arrow -->
            <div class="center-align">
                <a href="#topPage"><i class="material-icons fa-2x">arrow_upward</i></a>
            </div>
        </section><!-- End PRODUCT Details -->


        <!-- Begin TESTIMONIALS -->
        <section class="testimonials-section scrollspy" id="testimonial">
            <ul id="testimonialTitle">
                <li>
                    <div class="row">
                        <div class="col s12 m8 offset-m2 l6 offset-l3">
                            <h4 class="center-align">TESTIMONIALS</h4>
                            <hr/>
                            <p></p>
                        </div>
                    </div>
                </li>
            </ul>

            <ul id="testimonialSlider">
                <li>
                    <!-- CAROUSEL TESTIMONIAL - MED-UP -->
                    <div class="carousel carousel-slider center hide-on-small-and-down" data-indicators="true">
                        <div class="carousel-item first-title white-text" href="#one!">
                            <div class="slider-quotebox-first">
                                <blockquote>
                                    <p class="test-titles">Testimonials</p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="carousel-item one white-text" href="#two!">
                            <div class="slider-quotebox1">
                                <blockquote>
                                    "Protech Solutions has provided my office with the best EHR application for my fast
                                    paced environment.
                                    They continue to work with it's customers to provide the best updates and support."
                                    <cite class="kristi signature right"> - Alan Birche</cite>
                                </blockquote>
                            </div>
                        </div>
                        <div class="carousel-item two white-text" href="#three!">
                            <div class="slider-quotebox2">
                                <blockquote>
                                    "The Advanced EHR Suite from Protech Solutions makes keeping track of patient
                                    records extremely easy. I would
                                    not have it any other way."
                                    <cite class="kristi signature right"> - Laura Hagan</cite>
                                </blockquote>
                            </div>
                        </div>
                        <div class="carousel-item three white-text" href="#four!">
                            <div class="slider-quotebox3">
                                <blockquote>
                                    "I've been a happy customer of Protech Solutions for the past year. They continue to
                                    amaze me with their
                                    ability to listen to what the user wants, and work on ways to make their
                                    applications for us."
                                    <cite class="kristi signature right"> - Rachel Dobbson</cite>
                                </blockquote>
                            </div>
                        </div>
                        <div class="carousel-item four white-text" href="#five!">
                            <div class="slider-quotebox4">
                                <blockquote>
                                    "Protech Solutions support gave me step-by-step instructions on how to set up my EHR
                                    Suite, which allowed me and my office
                                    to transition our existing patient records system over flawlessly. We're pleased
                                    with the transition, and the outstanding support."
                                    <cite class="kristi signature right"> - Joseph Dunn</cite>
                                </blockquote>
                            </div>
                        </div>
                        <div class="carousel-item five white-text" href="#six!">
                            <div class="slider-quotebox5">
                                <blockquote>
                                    "Advanced EHR Suite is a great application for any healthcare facility to use. I
                                    oversee a few different locations in Southern New England,
                                    and we're very happy with the application."
                                    <cite class="kristi signature right"> - Tyrell Willard</cite>
                                </blockquote>
                            </div>
                        </div>
                    </div><!-- END SHOW ON MED-UP TESTIMONIALS -->
                </li>
            </ul>


            <!-- SHOW ON SMALL TESTIMONIALS -->
            <div class="row hide-on-med-and-up">
                <ul id="hiddenTestimonials">
                    <li>
                        <div class="col s12 m8 offset-m2 l6">
                            <div class="card-panel grey lighten-5 z-depth-1">
                                <div class="row test-row valign-wrapper">
                                    <div class="col s3">
                                        <img src="images/images/roundtestimages/testimg1.png" alt=""
                                             class="responsive-img"> <!-- notice the "circle" class -->
                                    </div>
                                    <div class="col s9">
                                        <blockquote>
                                            "Protech Solutions has provided my office with the best EHR application for
                                            my fast paced environment.
                                            They continue to work with it's customers to provide the best updates and
                                            support."
                                            <cite class="kristi signature right"> - Alan Birche</cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col s12 m8 offset-m2 l6">
                            <div class="card-panel grey lighten-5 z-depth-1">
                                <div class="row test-row valign-wrapper">
                                    <div class="col s3">
                                        <img src="images/images/roundtestimages/testimg2.png" alt=""
                                             class="responsive-img"> <!-- notice the "circle" class -->
                                    </div>
                                    <div class="col s9">
                                        <blockquote>
                                            "Protech Solutions support gave me step-by-step instructions on how to set
                                            up my EHR Suite, which allowed me and my office
                                            to transition our existing patient records system over flawlessly. We're
                                            pleased with the transition, and the outstanding support."
                                            <cite class="kristi signature right"> - Joseph Dunn</cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m8 offset-m2 l6 offset-l3">
                            <div class="card-panel grey lighten-5 z-depth-1">
                                <div class="row test-row valign-wrapper">
                                    <div class="col s3">
                                        <img src="images/images/roundtestimages/testimg3.png" alt=""
                                             class="responsive-img"> <!-- notice the "circle" class -->
                                    </div>
                                    <div class="col s9">
                                        <blockquote>
                                            "I've been a happy customer of Protech Solutions for the past year. They
                                            continue to amaze me with their
                                            ability to listen to what the user wants, and work on ways to make their
                                            applications better for us."
                                            <cite class="kristi signature right"> - Rachel Dobbson</cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m8 offset-m2 l6 offset-l3">
                            <div class="card-panel grey lighten-5 z-depth-1">
                                <div class="row test-row valign-wrapper">
                                    <div class="col s3">
                                        <img src="images/images/roundtestimages/testimg4.png" alt=""
                                             class="responsive-img"> <!-- notice the "circle" class -->
                                    </div>
                                    <div class="col s9">
                                        <blockquote>
                                            "The Advanced EHR Suite from Protech Solutions makes keeping track of
                                            patient records extremely easy. I would
                                            not have it any other way."
                                            <cite class="kristi signature right"> - Laura Hagan</cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div><!-- END SHOW ON SMALL TESTIMONIALS -->


            <div class="center-align">
                <a href="#topPage"><i class="material-icons fa-2x">arrow_upward</i></a>
            </div>

        </section><!-- End Testimonials -->

        <!-- Begin DEMO -->
        <section class="demo-section scrollspy" id="demo">
            <div class="row">
                <ul id="demoTitle">
                    <li>
                        <div class="col s12 m8 offset-m2 l6 offset-l3">
                            <h4 class="center-align">DEMO</h4>
                            <hr/>
                            <p></p>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Container tabs -->
            <div class="container">
                <div class="row tabs-section">
                    <div class="col s12">
                        <!-- DEMO TABS -->
                        <ul class="tabs" id="tabHeader">
                            <li class="tab col s3"><a href="#test1"><i class="material-icons tab-icon">web</i>Patient
                                    Portal</a></li>
                            <li class="tab col s3"><a class="active" href="#test2"><i class="material-icons tab-icon">storage</i>Advanced
                                    EHR</a></li>
                            <!-- .disabled-->
                            <li class="tab col s3"><a href="#test3"><i class="material-icons tab-icon">insert_chart</i>Billing
                                    Suite</a></li>
                        </ul> <!-- END DEMO TABS -->
                    </div>
                    <div class="col s12">
                        <ul id="tabContent">
                            <li>
                                <div id="test1" class="col s12 m10 offset-m1 l8 offset-l2">
                                    <div class="card">
                                        <div class="card-content">
                                            <video loop class="responsive-video" controls>
                                                <source src="/assets/appdemo2.mp4" type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                </div>
                                <div id="test2" class="col s12 m10 offset-m1 l8 offset-l2">
                                    <div class="card">
                                        <div class="card-content">
                                            <video loop autoplay class="responsive-video" controls>
                                                <source src="/assets/appdemo1.mp4" type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <div class="card">
                                                <div class="card-content">
                                                    <img class="responsive-img materialboxed"
                                                         src="images/images/backgroundoffice.jpeg">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="test3" class="col s12 m10 offset-m1 l8 offset-l2">
                                    <div class="card">
                                        <div class="card-content">
                                            <video loop class="responsive-video" controls>
                                                <source src="assets/appdemo2.mp4" type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="center-align">
                <a href="#topPage"><i class="material-icons fa-2x">arrow_upward</i></a>
            </div>

        </section><!-- End DEMO -->


        <!-- PURCHASE -->
        <section class="buy-section scrollspy" id="buy">
            <div class="row">
                <ul id="purchaseTitle">
                    <li>
                        <div class="col s12 m8 offset-m2 l6 offset-l3">
                            <h4 class="center-align">PURCHASE</h4>
                            <hr/>
                            <p></p>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- ROW OF PRODUCTS -->
            <div class="row buy-blocks">
                <div class="col s12 m4">
                    <ul id="portalCard">
                        <li>
                            <div class="card" id="purchaseCard">
                                <div class="card-image">
                                    <div class="card-img-overlay-third">
                                        <!--http://www.freepik.com/free-photo/finger-pressing-a-social-network-button-on-a-touch-screen_903499.htm-->
                                        <img src="images/images/heart.jpg">
                                    </div>
                                    <div class="center-align">
                                        <div class="buy-card-price">$149.99<br/><span
                                                class="monthly-title">monthly</span></div>
                                        <span
                                            class="card-title-purchase buy-title-secondary">Advanced Patient Portal Suite</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col s12 m4">
                    <ul id="ehrCard">
                        <li>
<!--                            <a href="/ASCapstoneProject/index.php?action=checkoutAjax" id="chkoutBtn">-->
                            <a href="index.php?action=checkoutCart" id="chkoutBtn">
                            <div class="card" id="purchaseCard">
                                    <div class="card-image">
                                        <div class="card-img-overlay-main">
                                            <!--http://www.freepik.com/free-photo/doctor-using-a-modern-computer_903500.htm-->
                                            <img
                                                src="images/images/heart.jpg">
                                        </div>
                                        <div class="center-align">
                                            <div class="buy-card-price">$199.99<br/><span
                                                    class="monthly-title">monthly</span></div>
                                            <span class="card-title-purchase buy-title-main">Advanced EHR Suite</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col s12 m4">
                    <ul id="billingCard">
                        <li>
                            <div class="card" id="purchaseCard">
                                <div class="card-image">
                                    <div class="card-img-overlay-secondary">
                                        <img
                                            src="images/images/heart.jpg">
                                    </div>
                                    <div class="center-align">
                                        <div class="buy-card-price">$79.99<br/><span
                                                class="monthly-title">monthly</span></div>
                                        <span
                                            class="card-title-purchase buy-title-secondary">Advanced Medical Billing Suite</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END ROW OF PRODUCTS -->

            <!-- ROW -->
            <div class="row overview-table">
                <div class="col s12 m10 offset-m1 l8 offset-l2">
                    <ul id="priceOverviewCard">
                        <li>
                            <!-- CARD PRICE TABLE -->
                            <div class="card white">
                                <div class="card-content">
                                    <div class="center-align">
                                        <span class="card-title">Pricing Overview</span>
                                    </div>
                                    <table class="striped highlight">
                                        <thead>
                                        <tr>
                                            <th data-field="id">Applications</th>
                                            <th data-field="description">Description</th>
                                            <th data-field="price">Pricing <span class="require">* Monthly</span></th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr>
                                            <td>Advanced EHR Suite</td>
                                            <td>Electronic Health Record</td>
                                            <td>$199.99</td>
                                        </tr>
                                        <tr>
                                            <td>Advanced Medical Billing Suite</td>
                                            <td>Patient + Insurance Billing</td>
                                            <td>$79.99</td>
                                        </tr>
                                        <tr>
                                            <td>Advanced Patient Portal Suite</td>
                                            <td>Patient Portal Application</td>
                                            <td>$149.99</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-action center-align">
                                    <a href="#!">View Catelog Demo</a>
                                </div>
                            </div> <!-- END CARD PRICE TABLE -->
                        </li>
                    </ul>
                </div>
            </div><!-- END ROW -->

            <!-- PURCHASE CARD -->
            <div class="row purchase-overview">
                <div class="col s12 m12 l10 offset-l1">
                    <ul id="ehrOverviewCard">
                        <li>
                            <div class="card">
                                <div class="card-content">
                                    <div class="center-align">
                                        <span class="card-title">Protech Solutions EHR</span>
                                    </div>
                                    <div class="row">
                                        <div class="col s3">
                                            <div class="center-align">
                                                <img height="158" width="158" class="responsive-img"
                                                     src="images/logos/logo.png"/>
                                            </div>
                                        </div>
                                        <div class="col s9">
                                            <table class="responsive-table">
                                                <thead>
                                                <tr class="">
                                                    <th class="center-align" data-field="id" colspan="2">Advanced EHR
                                                        Suite
                                                    </th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                <tr>
                                                    <td><b>Rating:</b> &nbsp;&nbsp;<i
                                                            class="material-icons star-icon">star</i>
                                                        <i class="material-icons star-icon">star</i><i
                                                            class="material-icons star-icon">star</i>
                                                        <i class="material-icons star-icon">star</i><i
                                                            class="material-icons star-icon">star_half</i>
                                                    </td>
                                                    <td><b>Price:</b>&nbsp;&nbsp;$199.99</td>
                                                    <td><b>Recommended:</b>&nbsp;&nbsp;(<a href="#!">189</a>)</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Platforms:</b> &nbsp;&nbsp;<a class="tooltipped"
                                                                                         data-position="bottom"
                                                                                         data-delay="50"
                                                                                         data-tooltip="Windows"><i
                                                                class="fa fa-windows" aria-hidden="true"></i></a></td>
                                                    <td><b>Version:</b>&nbsp;&nbsp; 1.0</td>
                                                    <td><b>Support:</b>&nbsp;&nbsp; 3 months <a class="modal-trigger"
                                                                                                href="#freeSupport">free</a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-action center-block">
                                    <div class="center-align">
                                        <a href="index.php?action=checkoutCart" class="waves-effect waves-light btn purchase-btn"><i
                                                class="material-icons left money-icon">attach_money</i>Purchase</a>
                                        <a href="#demo" class="waves-effect waves-light btn demo-btn"><i
                                                class="material-icons left">collections</i>Demo</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- END PURCHASE CARD -->

            <!-- Modal Structure -->
            <div id="freeSupport" class="modal">
                <div class="modal-content">
                    <h4>Free Customer Support</h4>
                    <p>We feel it's necessary as a compnay to provide basic customer service support to help transition
                        your company into our robust EHR Suite. If you have any questions, or there are any issues with
                        your application, we will do our best to resolve any issues as soon as we're alerted.</p>
                    <p>If you have any questions, we have 24/7 customer chat support, located in the bottom left corner
                        of our website,
                        or you can call us anytime at 1.401.555.5555 <br><br><br><span>Thank you,</span></p><span
                        class="signature kristi">Protech Solutions</span>
                </div>
                <div class="modal-footer">
                    <a href="#!" class=" modal-action modal-close waves-effect btn-flat">Exit</a>
                </div>
            </div>

            <!-- To Top Arrow -->
            <div class="center-align">
                <a href="#topPage"><i class="material-icons fa-2x">arrow_upward</i></a>
            </div>

        </section><!-- End PURCHASE -->


        <!-- Contact Us Section -->
        <section class="contact-section section scrollspy" id="contact">
            <div class="row">
                <div class="col s12 m8 offset-m2 l6 offset-l3">
                    <ul id="contactTitle">
                        <li>
                            <h4 class="center-align">GET IN TOUCH</h4>
                            <hr/>
                            <div class="container contact-details">
                                <p>Whether you have a question about your application, or are curious about future
                                    projects we're are building. Or
                                    if you have recommendations as to how we can improve upon our current versions,
                                    please feel free to contact us
                                    in any of the following ways. <span
                                        class="kristi signature right">- Protech Solutions</span>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- CONTACT US FORM -->
            <div class="row">
                <div class="col s12 m8 offset-m2 l5 offset-l1 open-sans3">
                    <ul id="contactFrm">
                        <li>
                            <!-- <div class="card white card-form z-depth-2">-->
                            <form class="col s12 contact-form" role="form" method="POST" name="contactForm" action="">
                                <div class="row">
                                    <h5>Send us a message <span
                                            class="require hide-on-small-only">* All fields required</span></h5>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12 m6">
                                        <!--placeholder="Mr. Reynolds"-->
                                        <input id="name_of" placeholder="Mr. Reynolds" type="text" name="full-name"
                                               pattern="^[a-zA-Z'.,\s-]{4,150}$" title="Enter first and last name"
                                               class="validate" required="" aria-required="true">
                                        <label for="name_of"><b>Name</b></label>
                                    </div>
                                    <div class="input-field col l6 m6 s12">
                                        <!--placeholder="123-456-7890"-->
                                        <input placeholder="123-456-7890" id="phone" name="phone-number" type="text"
                                               pattern="^(1\s*[-\/\.]?)?(\((\d{3})\)|(\d{3}))\s*[-\/\.]?\s*(\d{3})\s*[-\/\.]?\s*(\d{4})\s*(([xX]|[eE][xX][tT])\.?\s*(\d+))*$"
                                               title="Include area code | Numbers only" required minlength=10>
                                        <label for="phone"><b>Phone Number</b></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <!-- placeholder="Name@yourdomain.com" -->
                                        <input id="email_of" placeholder="Name@yourdomain.com" type="text" name="email-of"
                                               pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                                               title="Enter email address correctly" class="validate" required=""
                                               aria-required="true">
                                        <label for="email_of"><b>Email</b></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <!-- placeholder="Write your message here!" -->
                                        <textarea id="message" placeholder="Write your message here!" name="message"
                                                  class="materialize-textarea validate" required=""
                                                  aria-required="true"></textarea>
                                        <label for="message"><b>Message</b></label>
                                    </div>
                                </div>
                                <!-- Submit -->
                                <div class="center-align">
                                    <button class="btn waves-effect waves-light send-mail-btn" id="sendMailBtn"
                                            type="submit" name="action" value="Send-Message">Send
                                        <i class="material-icons right">send</i>
                                    </button>
                                </div>
                            </form>
                            <!--</div>-->
                        </li>
                    </ul>
                </div>
                <div class="col s12 m8 offset-m2 l5 open-sans3 contact-details">
                    <ul id="contactContainer">
                        <li>
                            <div class="row">
                                <h5>Contact Info</h5>
                            </div>
                            <ul class="collection">
                                <li class="collection-item"><span>Email: </span>ProtechSolutionsRI@gmail.com<a href="#!"
                                                                                                               class="secondary-content"><i
                                            class="material-icons">send</i></a></li>
                                <li class="collection-item"><span>Phone: </span>1.401.555.5555</li>
                            </ul>
                            <ul class="collection">
                                <li class="collection-item topper"><span>Mail:</span></li>
                                <li class="collection-item">Protech Solutions</li>
                                <li class="collection-item">324 Washington Street</li>
                                <li class="collection-item">Providence, RI 02906</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="center-align">
                <a href="#topPage"><i class="material-icons fa-2x">arrow_upward</i></a>
            </div>
        </section>


        <!-- GOOGLE MAPS LOCATION  -->
        <section class="googlemap-section section scrollspy" id="location">
            <div class="row">
                <div class="col s12 m8 offset-m2 l6 offset-l3">
                    <ul id="googleTitle">
                        <li>
                            <h4 class="center-align">Location</h4>
                            <hr/>
                            <p></p>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- GOOGLE MAP -->
            <div class="col s12 m12 l6">
                <ul id="googleContainer">
                    <li>
                        <div id="map"></div>
                    </li>
                </ul>
            </div>

            <div class="center-align">
                <a href="#topPage"><i class="material-icons fa-2x">arrow_upward</i></a>
            </div>
        </section><!-- End Google Maps Location -->


        <!-- DEV TEAM -->
        <section class="dev-section scrollspy" id="team">
            <div class="row">
                <div class="col s12 m8 offset-m2 l6 offset-l3">
                    <ul id="devTitle">
                        <li>
                            <h4 class="center-align">DEVELOPER TEAM</h4>
                            <hr/>
                            <p></p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row dev-row">
                <div class="col s12 m5 offset-m1 l5 offset-l1">
                    <ul id="devOne">
                        <li>
                            <div class="card">
                                <div class="card-content black-text open-sans3">
                                    <div class="center-align">
                                        <img class="responsive-img" src="http://i.imgur.com/kSnJSMb.png"/>
                                    </div>
                                    <h3 class="card-title center-align">Ian Arsenault</h3>
                                    <p class="team-titles center-align">Co-Founder + Software Engineer</p>
                                    <hr class="team-hr"/>
                                    <div class="center-align team-social-icons">
                                        <!--#ff2c06-->
                                        <a href="#!"><i class="fa fa-github fa-lg" aria-hidden="true"></i></a>
                                        <a href="#!"><i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i></a>
                                        <a href="#!"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a>
                                    </div>
                                    <p class="">Born in Southern Massachusetts, Ian has travelled across the country
                                        playing hockey for 15 years, and has lived
                                        in Providence, Rhode Island for the past 5 years. He is majoring in IT -
                                        Software Engineering at New England Institute of Technology,
                                        concentrating on web development and database management. He has a deep passion
                                        for technology, learning new languages, and trying out
                                        new developer tools. In his off-time he enjoys playing video games on his PS4,
                                        watching hockey, and going hiking.
                                    </p>
                                </div>
                                <div class="card-action center-align"></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col s12 m5 l5">
                    <ul id="devTwo">
                        <li>
                            <div class="card">
                                <div class="card-content black-text open-sans3">
                                    <div class="center-align">
                                        <img class="responsive-img"
                                             src="http://www.piedpiper.com/app/themes/pied-piper/dist/images/bighead.png"/>
                                    </div>
                                    <h3 class="card-title center-align">Jameson Arsenault</h3>
                                    <p class="team-titles  center-align">Co-Founder + Software Engineer</p>
                                    <hr class="team-hr"/>
                                    <div class="center-align team-social-icons">
                                        <!--#ff2c06-->
                                        <a href="#!"><i class="fa fa-github fa-lg" aria-hidden="true"></i></a>
                                        <a href="#!"><i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i></a>
                                        <a href="#!"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a>
                                    </div>
                                    <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Sed libero metus, commodo
                                        sed arcu sed,
                                        pretium fermentum metus. Nullam semper nec justo vel tincidunt. Maecenas sed
                                        augue euismod, viverra
                                    </p>
                                </div>
                                <div class="card-action center-align"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="center-align">
                <a href="#topPage"><i class="material-icons fa-2x">arrow_upward</i></a>
            </div>
        </section><!-- End Dev Team -->

        <section class="social-media-section scrollspy" id="social-footer">
            <div class="row">
                <div class="col s12 m8 offset-m2 l6 offset-l3">
                    <ul id="socialTitle">
                        <li>
                            <h4 class="center-align">Social Media</h4>
                            <hr/>
                            <p></p>
                        </li>
                    </ul>
                </div>
            </div>
            <ul id="socialContainer">
                <li>
                    <div class="center-align twit-btn">
                        <a href="https://twitter.com/intent/tweet?screen_name=Protech_RI" class="twitter-mention-button"
                           data-size="large"
                           data-text="Hey World! Checkout @Protech_RI&#39;s latest Electronic Health Record application! #Sweet"
                           data-related="" data-show-count="false">Tweet to @TwitterDev</a>
                        <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                    <div class="center-align twitter-box">
                        <a class="twitter-timeline" href="https://twitter.com/search?q=%40Protech_RI"
                           data-widget-id="769293779371167749" data-screen-name="Protech_RI">Tweets by @Protech_RI</a>
                        <script>!function (d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                                if (!d.getElementById(id)) {
                                    js = d.createElement(s);
                                    js.id = id;
                                    js.src = p + "://platform.twitter.com/widgets.js";
                                    fjs.parentNode.insertBefore(js, fjs);
                                }
                            }(document, "script", "twitter-wjs");</script>
                    </div>
                </li>
            </ul>
            <div class="center-align">
                <a href="#topPage"><i class="material-icons fa-2x">arrow_upward</i></a>
            </div>
        </section>

    </main><!-- END MAIN -->
</div>
