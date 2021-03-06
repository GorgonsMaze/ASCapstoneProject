<?php
?>
<!DOCTYPE html>
<!--
 ______ ______  ______  ______ ______  ______  __  __     ______  ______  __      __  __  ______ __  ______  __   __  ______
/\  == /\  == \/\  __ \/\__  _/\  ___\/\  ___\/\ \_\ \   /\  ___\/\  __ \/\ \    /\ \/\ \/\__  _/\ \/\  __ \/\ "-.\ \/\  ___\
\ \  _-\ \  __<\ \ \/\ \/_/\ \\ \  __\\ \ \___\ \  __ \  \ \___  \ \ \/\ \ \ \___\ \ \_\ \/_/\ \\ \ \ \ \/\ \ \ \-.  \ \___  \
 \ \_\  \ \_\ \_\ \_____\ \ \_\\ \_____\ \_____\ \_\ \_\  \/\_____\ \_____\ \_____\ \_____\ \ \_\\ \_\ \_____\ \_\\"\_\/\_____\
  \/_/   \/_/ /_/\/_____/  \/_/ \/_____/\/_____/\/_/\/_/   \/_____/\/_____/\/_____/\/_____/  \/_/ \/_/\/_____/\/_/ \/_/\/_____/
  -->
<html lang="en">
<head>
    <title>Protech Solutions | Rhode Island</title>
    <!-- Favicon logo
    <link rel="shortcut icon" href="images/logos/logofavicon.ico" type="image/x-icon">-->
    <!--<link rel="icon" href="images/logos/logofavicon.png" type="image/png">-->
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Raleway Font -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:300,900,800,500' rel='stylesheet' type='text/css'>
    <!-- Abel Font -->
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
    <!-- Great Vibes Cursive -->
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <!-- Titillium Web Font-->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,700" rel="stylesheet">
    <!-- Open Sans -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- Chat text -->
    <link href='https://fonts.googleapis.com/css?family=Inconsolata' rel='stylesheet' type='text/css'>
    <!-- Kristi Font -->
    <link href='https://fonts.googleapis.com/css?family=Kristi' rel='stylesheet' type='text/css'>
    <!-- Materialize css -->
    <link type="text/css" rel="stylesheet" href="/ASCapstoneProject/css/materialize.min.css"  media="screen,projection"/>
    <!-- Stylesheet -->
    <link type="text/css" rel="stylesheet" href="/ASCapstoneProject/css/style.css" media="screen,projection" />
    <!--  Devicons Color Version -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/master/devicon.min.css">
    <!--<link rel="stylesheet" href="css/devicon-colors.css">-->
    <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/devicons/1.8.0/css/devicons.min.css" rel="stylesheet" type="text/css">-->
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8">
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZ-d-T3vJzzvCv3TpPuNlpXNpUvLGK_zU&callback=initMap"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript">
        function init() {
            // Basic options for google map
            var mapOptions = {
                // Zoomed in level
                zoom: 14,
                scrollwheel: false, // Set scrolling to false

                // The latitude and longitude to center the map
                center: new google.maps.LatLng(41.82399, -71.41283), //Providence

                // Styling
                styles: [
                    {
                        "featureType": "landscape",
                        "stylers": [
                            {
                                "hue": "#FFBB00"
                            },
                            {
                                "saturation": 43.400000000000006
                            },
                            {
                                "lightness": 37.599999999999994
                            },
                            {
                                "gamma": 1
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "stylers": [
                            {
                                "hue": "#FFC200"
                            },
                            {
                                "saturation": -61.8
                            },
                            {
                                "lightness": 45.599999999999994
                            },
                            {
                                "gamma": 1
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "stylers": [
                            {
                                "hue": "#FF0300"
                            },
                            {
                                "saturation": -100
                            },
                            {
                                "lightness": 51.19999999999999
                            },
                            {
                                "gamma": 1
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "stylers": [
                            {
                                "hue": "#FF0300"
                            },
                            {
                                "saturation": -100
                            },
                            {
                                "lightness": 52
                            },
                            {
                                "gamma": 1
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "stylers": [
                            {
                                "hue": "#0078FF"
                            },
                            {
                                "saturation": -13.200000000000003
                            },
                            {
                                "lightness": 2.4000000000000057
                            },
                            {
                                "gamma": 1
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "stylers": [
                            {
                                "hue": "#00FF6A"
                            },
                            {
                                "saturation": -1.0989010989011234
                            },
                            {
                                "lightness": 11.200000000000017
                            },
                            {
                                "gamma": 1
                            }
                        ]
                    }
                ]
            };

            // get the DOM element that will contain the map
            var mapElement = document.getElementById('map');

            // Create the map
            var map = new google.maps.Map(mapElement, mapOptions);

            /* Providence Marker */
            var marker1 = new google.maps.Marker({
                position: new google.maps.LatLng(41.82399, -71.41283),
                map: map,
                title: 'Stop By!'
            });

            google.maps.event.addListener(map, 'mousedown', function (event) {
                this.setOptions({scrollwheel:true});
            });

            google.maps.event.addListener(map, 'mouseover', function(event){
                self = this;
                timer = setTimeout(function() {
                    self.setOptions({scrollwheel:true});
                }, 2000);
            });

            google.maps.event.addListener(map, 'mouseout', function(event){
                this.setOptions({scrollwheel:false});
                clearTimeout(timer);
            });

        }

        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

    </script>
</head>
<body class="stop-scrolling" id="topPage">

<!-- LANDING SPLASH
<div class="loading-overlay">
    <div id="fadediv">
        <!--  LOGO -
        <div class="logo-land logo-transform">
            <img height="256" width="256" src="/ASCapstoneProject/images/logos/logo.png" />
        </div>
        <!-- PROGRESS BAR 1 --
        <div class="progress progress-1-transform">
            <div class="progress-bar-1"></div>
        </div>
        <div class="progress progress-middle-transform">
            <div class="progress-bar-middle"></div>
        </div>
        <!-- PROGRESS BAR 2 --
        <div class="progress progress-2-transform">
            <div class="progress-bar-2"></div>
        </div>
    </div>
</div>-->
<!-- End Landing Splash -->


<!-- MAIN CONTENT -->
<div class="main-section">
    <header>
        <!-- Begin Navbar -->
        <div class="navbar-fixed home-nav open-sans3">
            <nav id="navbar home-nav">
                <div class="nav-wrapper nav-text-color">
                    <a href="#!" class="brand-logo center-on-xlarge great-vibes">Protech Solutions</a>
                    <a href="#" data-activates="slide-out" class="button-collapse" id="hamburger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down hide-on-xlarge">
                        <li><a href="#about">About</a></li>
                        <li><a href="#product">Product</a></li>
                        <li><a href="#testimonial">Testimonials</a></li>
                        <li><a href="#demo">Demo</a></li>
                        <li><a href="#buy">Buy</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <!-- Extra Drop Down Trigger -->
                        <li><a class="dropdown-button" href="#!" data-activates="ddExtra" data-belowOrigin="true" data-alignment="right" data-gutter="-5" data-hover="true" data-constrainwidth="true "><i class="material-icons">more_vert</i></a></li>
                        <!-- Dropdown Structure -->
                        <ul id="ddExtra" class="dropdown-content">
                            <li><a href="#location">Location</a></li>
                            <li class="divider"></li>
                            <li><a href="#team">Team</a>
                            <li class="divider"></li>
                            <li><a href="#social-footer">Social Media</a></li>
                        </ul>
                    </ul>
                </div>
            </nav>
        </div><!-- End Navbar -->
        <!-- FIXED SIDE-NAV XL -->
        <!-- <ul id="slide-out" class="side-nav fixed blue-grey lighten-4 ralewayBold">-->
        <ul id="slide-out" class="side-nav fixed max-side-nav ralewayBold">
            <!--<li><div class="userView blue-grey lighten-2">-->
            <li><div class="userView">
                    <div class="center-align">
                        <img class="circle side-logo" src="/ASCapstoneProject/images/logos/logo.png">
                    </div>
                    <a href="#!name"><span class="white-text name userview-link">Protech Solutions</span></a>
                    <a href="#!email"><span class="white-text email userview-link">ProtechSolutionsRI@gmail.com</span></a>
                </div></li>
            <ul class="main-side-links">
                <li><a class="waves-effect" href="#about" id="sBtn1"><i class="material-icons left">description</i>About</a></li>
                <li><div class="divider"></div></li>
                <li><a class="waves-effect" href="#product" id="sBtn2"><i class="material-icons left">developer_board</i>Product</a></li>
                <li><div class="divider"></div></li>
                <li><a class="waves-effect" href="#testimonial" id="sBtn3"><i class="material-icons left">comment</i>Testimonials</a></li>
                <li><div class="divider"></div></li>
                <li><a class="waves-effect" href="#demo" id="sBtn4"><i class="material-icons left">whatshot</i>Demo</a></li>
                <li><div class="divider"></div></li>
                <li><a class="waves-effect" href="#buy" id="buySidenav"><i class="material-icons left">shopping_cart left</i>Buy</a></li>
                <div class="hide-checkout">
                    <li class="hidden-checkout-btn"><a class="waves-effect" href="checkout.html"><i class="material-icons left">subdirectory_arrow_right</i>Checkout</a></li>
                    <li><div class="divider"></div></li>
                    <li><a class="waves-effect" href="#contact"><i class="material-icons left">email</i>Contact</a></li>
                    <li><div class="divider"></div></li>
                    <li><a class="waves-effect" href="#location"><i class="material-icons left">location_city</i>Location</a></li>
                    <li><div class="divider"></div></li>
                    <li><a class="waves-effect" href="#team"><i class="material-icons left">group</i>Dev Team</a>
                    <li><div class="divider"></div></li>
                    <li><a class="waves-effect" href="#social-footer"><i class="material-icons left">share</i>Social Media</a></li>
                    <li><div class="divider"></div></li>
                </div>
            </ul>
        </ul> <!-- END FIXED SIDE-NAV XL -->
    </header>

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
                    <a class="download-demo-btn" href="#!"><i class="fa fa-download green-text text-lighten-1 fa-2x top-dl-btn" aria-hidden="true"></i></a>
                </div>
            </div>
        </div><!-- End Top Page Header -->


        <!-- Begin About -->
        <section class="about-section scrollspy" id="about">
            <div class="row">
                <div class="col s12 m8 offset-m2 l6 offset-l3">
                    <h4 class="center-align">About</h4>
                    <hr />
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
                                        <img height="256" width="256" src="/ASCapstoneProject/images/logos/logo.png" />
                                    </div>
                                </li>
                            </ul>
                            <ul id="aboutTitle">
                                <li>
                                    <h3 class="card-title center-align">Our Purpose</h3>
                                    <hr />
                                </li>
                            </ul>
                            <ul id="aboutParagraphs">
                                <li>
                                    <div class="row">
                                        <div class="col s10 offset-s1">
                                            <div class="card z-depth-0">
                                                <div class="card-content black-text">
                                                    <p><span class="cap-P ralewayThin">P</span>rotech Solutions is a software development company, and we love what we do. We're always evolving, but right now we specialize in key components
                                                        in the health and medical industry, to make both medical facilities, and small out-patient facilities run smoother, and more reliable. We're a small,
                                                        but dedicated team of software engineers who continue to find inspiration in our work, as we strive to integrate our applications with ease into any
                                                        health field environment.</p>
                                                    <p class="about-ptwo"><span class="cap-o ralewayThin">S</span>killfully, our goal at Protech Solutions is to create intuitive, useful, and functional applications that are easy to use, visually appealing, and can save our customers
                                                        time and energy in their busy field. We feel it's necessary to sit down with all clientele to make sure that they receive the best support needed for our
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
                            <hr />
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
                            <div class="collapsible-header apps-header active"><i class="material-icons">storage</i>Advanced EHR Suite</div>
                            <div class="collapsible-body">
                                <img src="images/images/doc-tablet.jpg" class="responsive-img"/>
                                <p>A intuitive, customizable, interconnected application that allows for instant
                                    information on patients. While allowing users to update records on the fly, pull patient information,
                                    and add dynamic medical data without any hassle.
                                </p></div>
                        </li>
                        <li>
                            <div class="collapsible-header apps-header"><i class="material-icons">filter_drama</i>Advanced Medical Billing Suite<span class="new badge right-align" data-badge-caption="Coming Soon"></span></div>
                            <div class="collapsible-body">
                                <p>A comprehensive cloud based application, that creates an easy, precise, billing experience,
                                    that supports claims management, insurance adjustments, and patient billing.
                                </p></div>
                        </li>
                        <li>
                            <div class="collapsible-header apps-header"><i class="material-icons">devices_other</i>Advanced Patient Portal Suite<span class="new badge left-align" data-badge-caption="Coming Soon"></span></div>
                            <div class="collapsible-body">
                                <p>A well designed application tool for your office and patients. Designed with ease in mind
                                    for any user. Easy access to update a patients record, billing, or medical history. Creating a
                                    hub, so that your patients can schedule an appointment with a click of the button.</p></div>
                        </li>
                    </ul>
                </div>
            </div>

            <ul id="fireApplicationDetails">
                <li>
                    <div class="row">
                        <div class="col s12 m8 offset-m2 l6 offset-l3">
                            <h4 class="center-align">Application Details</h4>
                            <hr />
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
                                        <span class="card-title"><i class="material-icons">fingerprint</i> Uniqueness</span>
                                    </div>
                                    <p>Our applications are designed with the user in mind. Our EHR Suite is unique in that
                                        it allows for an intuitive flow, and experience for the user to accomplish their tasks.
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
                                        <img class="image-overl-card" src="images/images/support.jpg">
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
                                    <p>Whether you have a questions about our products, or if you just need help with an existing issue with an application.
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
                            <hr />
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
                                <img src="http://findicons.com/files/icons/2779/simple_icons/4096/visualstudio.png" class="vs-icon hvr-float">
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
                            <hr />
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
                                    "Protech Solutions has provided my office with the best EHR application for my fast paced environment.
                                    They continue to work with it's customers to provide the best updates and support."
                                    <cite class="kristi signature right"> - Alan Birche</cite>
                                </blockquote>
                            </div>
                        </div>
                        <div class="carousel-item two white-text" href="#three!">
                            <div class="slider-quotebox2">
                                <blockquote>
                                    "The Advanced EHR Suite from Protech Solutions makes keeping track of patient records extremely easy. I would
                                    not have it any other way."
                                    <cite class="kristi signature right"> - Laura Hagan</cite>
                                </blockquote>
                            </div>
                        </div>
                        <div class="carousel-item three white-text" href="#four!">
                            <div class="slider-quotebox3">
                                <blockquote>
                                    "I've been a happy customer of Protech Solutions for the past year. They continue to amaze me with their
                                    ability to listen to what the user wants, and work on ways to make their applications for us."
                                    <cite class="kristi signature right"> - Rachel Dobbson</cite>
                                </blockquote>
                            </div>
                        </div>
                        <div class="carousel-item four white-text" href="#five!">
                            <div class="slider-quotebox4">
                                <blockquote>
                                    "Protech Solutions support gave me step-by-step instructions on how to set up my EHR Suite, which allowed me and my office
                                    to transition our existing patient records system over flawlessly. We're pleased with the transition, and the outstanding support."
                                    <cite class="kristi signature right"> - Joseph Dunn</cite>
                                </blockquote>
                            </div>
                        </div>
                        <div class="carousel-item five white-text" href="#six!">
                            <div class="slider-quotebox5">
                                <blockquote>
                                    "Advanced EHR Suite is a great application for any healthcare facility to use. I oversee a few different locations in Southern New England,
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
                                        <img src="images/images/roundtestimages/testimg1.png" alt="" class="responsive-img"> <!-- notice the "circle" class -->
                                    </div>
                                    <div class="col s9">
                                        <blockquote>
                                            "Protech Solutions has provided my office with the best EHR application for my fast paced environment.
                                            They continue to work with it's customers to provide the best updates and support."
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
                                        <img src="images/images/roundtestimages/testimg2.png" alt="" class="responsive-img"> <!-- notice the "circle" class -->
                                    </div>
                                    <div class="col s9">
                                        <blockquote>
                                            "Protech Solutions support gave me step-by-step instructions on how to set up my EHR Suite, which allowed me and my office
                                            to transition our existing patient records system over flawlessly. We're pleased with the transition, and the outstanding support."
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
                                        <img src="images/images/roundtestimages/testimg3.png" alt="" class="responsive-img"> <!-- notice the "circle" class -->
                                    </div>
                                    <div class="col s9">
                                        <blockquote>
                                            "I've been a happy customer of Protech Solutions for the past year. They continue to amaze me with their
                                            ability to listen to what the user wants, and work on ways to make their applications better for us."
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
                                        <img src="images/images/roundtestimages/testimg4.png" alt="" class="responsive-img"> <!-- notice the "circle" class -->
                                    </div>
                                    <div class="col s9">
                                        <blockquote>
                                            "The Advanced EHR Suite from Protech Solutions makes keeping track of patient records extremely easy. I would
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
                            <hr />
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
                            <li class="tab col s3"><a href="#test1"><i class="material-icons tab-icon">web</i>Patient Portal</a></li>
                            <li class="tab col s3"><a class="active" href="#test2"><i class="material-icons tab-icon">storage</i>Advanced EHR</a></li>
                            <!-- .disabled-->
                            <li class="tab col s3"><a href="#test3"><i class="material-icons tab-icon">insert_chart</i>Billing Suite</a></li>
                        </ul> <!-- END DEMO TABS -->
                    </div>
                    <div class="col s12">
                        <ul id="tabContent">
                            <li>
                                <div id="test1" class="col s12 m10 offset-m1 l8 offset-l2">
                                    <div class="card">
                                        <div class="card-content">
                                            <video loop class="responsive-video" controls>
                                                <source src="/ASCapstoneProject/images/logos/logo.png" type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                </div>
                                <div id="test2" class="col s12 m10 offset-m1 l8 offset-l2">
                                    <div class="card">
                                        <div class="card-content">
                                            <video loop autoplay class="responsive-video" controls>
                                                <source src="assets/appdemo1.mp4" type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <div class="card">
                                                <div class="card-content">
                                                    <img class="responsive-img materialboxed" src="images/images/backgroundoffice.jpeg">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="test3" class="col s12 m10 offset-m1 l8 offset-l2">
                                    <div class="card">
                                        <div class="card-content">
                                            <video loop class="responsive-video" controls>
                                                <source src="/ASCapstoneProject/images/logos/logo.png" type="video/mp4">
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
                            <hr />
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
                                        <img src="https://image.freepik.com/free-photo/doctor-working-with-a-modern-touch-screen_1112-497.jpg">
                                    </div>
                                    <div class="center-align">
                                        <div class="buy-card-price">$149.99<br/><span class="monthly-title">monthly</span></div>
                                        <span class="card-title-purchase buy-title-secondary">Advanced Patient Portal Suite</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col s12 m4">
                    <ul id="ehrCard">
                        <li>
                            <a href="checkout.html">
                                <div class="card" id="purchaseCard">
                                    <div class="card-image">
                                        <div class="card-img-overlay-main">
                                            <!--http://www.freepik.com/free-photo/doctor-using-a-modern-computer_903500.htm-->
                                            <img src="https://image.freepik.com/free-photo/doctor-working-with-a-modern-touch-screen_1112-497.jpg">
                                        </div>
                                        <div class="center-align">
                                            <div class="buy-card-price">$199.99<br/><span class="monthly-title">monthly</span></div>
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
                                        <img src="https://image.freepik.com/free-photo/doctor-working-with-a-modern-touch-screen_1112-497.jpg">
                                    </div>
                                    <div class="center-align">
                                        <div class="buy-card-price">$79.99<br/><span class="monthly-title">monthly</span></div>
                                        <span class="card-title-purchase buy-title-secondary">Advanced Medical Billing Suite</span>
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
                                                <img height="158" width="158" class="responsive-img" src="/ASCapstoneProject/images/logos/logo.png" />
                                            </div>
                                        </div>
                                        <div class="col s9">
                                            <table class="responsive-table">
                                                <thead>
                                                <tr class="">
                                                    <th class="center-align" data-field="id" colspan="2">Advanced EHR Suite</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                <tr>
                                                    <td><b>Rating:</b> &nbsp;&nbsp;<i class="material-icons star-icon">star</i>
                                                        <i class="material-icons star-icon">star</i><i class="material-icons star-icon">star</i>
                                                        <i class="material-icons star-icon">star</i><i class="material-icons star-icon">star_half</i>
                                                    </td>
                                                    <td><b>Price:</b>&nbsp;&nbsp;$199.99</td>
                                                    <td><b>Recommended:</b>&nbsp;&nbsp;(<a href="#!">189</a>)</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Platforms:</b>  &nbsp;&nbsp;<a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Windows"><i class="fa fa-windows" aria-hidden="true"></i></a></td>
                                                    <td><b>Version:</b>&nbsp;&nbsp; 1.0</td>
                                                    <td><b>Support:</b>&nbsp;&nbsp; 3 months <a class="modal-trigger" href="#freeSupport">free</a></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-action center-block">
                                    <div class="center-align">
                                        <a href="#" class="waves-effect waves-light btn purchase-btn"><i class="material-icons left money-icon">attach_money</i>Purchase</a>
                                        <a href="#" class="waves-effect waves-light btn demo-btn"><i class="material-icons left">collections</i>Demo</a>
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
                        your company into our robust EHR Suite. If  you have any questions, or there are any issues with
                        your application, we will do our best to resolve any issues as soon as we're alerted.</p>
                    <p>If you have any questions, we have 24/7 customer chat support, located in the bottom left corner of our website,
                        or you can call us anytime at 1.401.555.5555 <br><br><br><span>Thank you,</span></p><span class="signature kristi">Protech Solutions</span>
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
                            <hr />
                            <div class="container contact-details">
                                <p>Whether you have a question about your application, or are curious about future projects we're are building. Or
                                    if you have recommendations as to how we can improve upon our current versions, please feel free to contact us
                                    in any of the following ways. <span class="kristi signature right">- Protech Solutions</span></p>
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
                            <form class="col s12 contact-form">
                                <div class="row">
                                    <h5>Send us a message <span class="require hide-on-small-only">* All fields required</span></h5>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12 m6">
                                        <!--placeholder="Mr. Reynolds"-->
                                        <input id="name_of" placeholder="Mr. Reynolds" type="text" name="" pattern="^[a-zA-Z'.,\s-]{4,150}$" title="Enter first and last name" class="validate" required="" aria-required="true">
                                        <label for="name_of"><b>Name</b></label>
                                    </div>
                                    <div class="input-field col l6 m6 s12">
                                        <!--placeholder="123-456-7890"-->
                                        <input placeholder="123-456-7890" id="phone" name="" type="text" pattern="^(1\s*[-\/\.]?)?(\((\d{3})\)|(\d{3}))\s*[-\/\.]?\s*(\d{3})\s*[-\/\.]?\s*(\d{4})\s*(([xX]|[eE][xX][tT])\.?\s*(\d+))*$"  title="Include area code | Numbers only" required minlength=10>
                                        <label for="phone"><b>Phone Number</b></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <!-- placeholder="Name@yourdomain.com" -->
                                        <input  id="email_of" placeholder="Name@yourdomain.com" type="text" name="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Enter email address correctly" class="validate" required="" aria-required="true">
                                        <label for="email_of"><b>Email</b></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <!-- placeholder="Write your message here!" -->
                                        <textarea  id="message" placeholder="Write your message here!" name="" class="materialize-textarea validate" required="" aria-required="true"></textarea>
                                        <label for="message"><b>Message</b></label>
                                    </div>
                                </div>
                                <!-- Submit -->
                                <div class="center-align">
                                    <button class="btn waves-effect waves-light send-mail-btn" id="sendMailBtn" type="submit" name="action">Send
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
                                <li class="collection-item"><span>Email: </span>ProtechSolutionsRI@gmail.com<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></li>
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
                            <hr />
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
                            <hr />
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
                                        <img class="responsive-img" src="http://i.imgur.com/kSnJSMb.png" />
                                    </div>
                                    <h3 class="card-title center-align">Ian Arsenault</h3>
                                    <p class="team-titles center-align">Co-Founder + Software Engineer</p>
                                    <hr class="team-hr" />
                                    <div class="center-align team-social-icons">
                                        <!--#ff2c06-->
                                        <a href="#!"><i class="fa fa-github fa-lg" aria-hidden="true"></i></a>
                                        <a href="#!"><i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i></a>
                                        <a href="#!"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a>
                                    </div>
                                    <p class="">Born in Southern Massachusetts, Ian has travelled across the country playing hockey for 15 years, and has lived
                                        in Providence, Rhode Island for the past 5 years. He is majoring in IT - Software Engineering at New England Institute of Technology,
                                        concentrating on web development and database management. He has a deep passion for technology, learning new languages, and trying out
                                        new developer tools. In his off-time he enjoys playing video games on his PS4, watching hockey, and going hiking.
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
                                        <img class="responsive-img" src="http://www.piedpiper.com/app/themes/pied-piper/dist/images/bighead.png" />
                                    </div>
                                    <h3 class="card-title center-align">Jameson Arsenault</h3>
                                    <p class="team-titles  center-align">Co-Founder + Software Engineer</p>
                                    <hr class="team-hr" />
                                    <div class="center-align team-social-icons">
                                        <!--#ff2c06-->
                                        <a href="#!"><i class="fa fa-github fa-lg" aria-hidden="true"></i></a>
                                        <a href="#!"><i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i></a>
                                        <a href="#!"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a>
                                    </div>
                                    <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Sed libero metus, commodo sed arcu sed,
                                        pretium fermentum metus. Nullam semper nec justo vel tincidunt. Maecenas sed augue euismod, viverra
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
                            <hr />
                            <p></p>
                        </li>
                    </ul>
                </div>
            </div>
            <ul id="socialContainer">
                <li>
                    <div class="center-align twit-btn">
                        <a href="https://twitter.com/intent/tweet?screen_name=Protech_RI" class="twitter-mention-button" data-size="large" data-text="Hey World! Checkout @Protech_RI&#39;s latest Electronic Health Record application! #Sweet" data-related="" data-show-count="false">Tweet to @TwitterDev</a>
                        <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                    <div class="center-align twitter-box">
                        <a class="twitter-timeline" href="https://twitter.com/search?q=%40Protech_RI" data-widget-id="769293779371167749" data-screen-name="Protech_RI">Tweets by @Protech_RI</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                    </div>
                </li>
            </ul>
            <div class="center-align">
                <a href="#topPage"><i class="material-icons fa-2x">arrow_upward</i></a>
            </div>
        </section>

    </main><!-- END MAIN -->


    <!-- FOOTER -->
    <footer class="page-footer abel">
        <div class="container">
            <div class="row">
                <div class="col l6 m6 s12 center-align foot-text">
                    <h5 class="center-align">Have a question?</h5>
                    <!-- Help Chat Modal Trigger -->
                    <p class="center-align">You can reach us 24 hours a day, 7 days a week by connecting to our live <a href="#modal-chat" class="modal-trigger">customer service representative</a></p>
                    <!-- Modal Structure -->
                    <div id="modal-chat" class="modal modal-fixed-footer">
                        <div class="modal-content chat-content">
                            <div class="modal-header right-align">
                                <a href="#!" class="chat-action-icon"><i class="material-icons">remove</i></a>
                                <a href="#!" class="chat-action-icon modal-action modal-close"><i class="material-icons">clear</i></a>
                            </div>
                            <h4>Live Customer Support</h4>
                            <p class="chat-header">One of our customer support staff will be glad to help you out with any questions or issues you may be facing. Thank you!</p>
                            <div class="row">
                                <div class="col s12">
                                    <div class="card chat-box left-align">
                                        <div class="card-content black-text inconsolata">
                                            <p><span class="rep-name">Tim:</span>&nbsp;I am a very simple card. I am good at containing small bits of information.
                                                I am convenient because I require little markup to use effectively.</p>

                                            <p><span class="cust-name">Customer24124:</span>&nbsp;I am a very simple card. I am good at containing small bits of information.
                                                I am convenient because I require little markup to use effectively.</p>

                                            <p><span class="rep-name">Tim:</span>&nbsp;I am a very simple card. I am good at containing small bits of information.
                                                I am convenient because I require little markup to use effectively.</p>

                                            <p><span class="cust-name">Customer24124:</span>&nbsp;I am a very simple card. I am good at containing small bits of information.
                                                I am convenient because I require little markup to use effectively.</p>

                                            <p><span class="rep-name">Tim:</span>&nbsp;I am a very simple card. I am good at containing small bits of information.
                                                I am convenient because I require little markup to use effectively.</p>

                                            <p><span class="cust-name">Customer24124:</span>&nbsp;I am a very simple card. I am good at containing small bits of information.
                                                I am convenient because I require little markup to use effectively.</p>

                                            <p><span class="rep-name">Tim:</span>&nbsp;I am a very simple card. I am good at containing small bits of information.
                                                I am convenient because I require little markup to use effectively.</p>

                                            <p><span class="cust-name">Customer24124:</span>&nbsp;I am a very simple card. I am good at containing small bits of information.
                                                I am convenient because I require little markup to use effectively.</p>
                                            <p><span class="rep-name">Tim:</span>&nbsp;I am a very simple card. I am good at containing small bits of information.
                                                I am convenient because I require little markup to use effectively.</p>

                                            <p><span class="cust-name">Customer24124:</span>&nbsp;I am a very simple card. I am good at containing small bits of information.
                                                I am convenient because I require little markup to use effectively.</p>

                                            <p><span class="rep-name">Tim:</span>&nbsp;I am a very simple card. I am good at containing small bits of information.
                                                I am convenient because I require little markup to use effectively.</p>

                                            <p><span class="cust-name">Customer24124:</span>&nbsp;I am a very simple card. I am good at containing small bits of information.
                                                I am convenient because I require little markup to use effectively.</p>

                                            <p><span class="rep-name">Tim:</span>&nbsp;I am a very simple card. I am good at containing small bits of information.
                                                I am convenient because I require little markup to use effectively.</p>

                                            <p><span class="cust-name">Customer24124:</span>&nbsp;I am a very simple card. I am good at containing small bits of information.
                                                I am convenient because I require little markup to use effectively.</p>

                                            <p><span class="rep-name">Tim:</span>&nbsp;I am a very simple card. I am good at containing small bits of information.
                                                I am convenient because I require little markup to use effectively.</p>

                                            <p><span class="cust-name">Customer24124:</span>&nbsp;I am a very simple card. I am good at containing small bits of information.
                                                I am convenient because I require little markup to use effectively.</p>


                                            <div class="response-section">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer chat-footer">
                            <div class="row">
                                <form class="col s12">
                                    <div class="input-field col s10">
                                        <input id="" type="text" length="255" placeholder="Write message here!">
                                    </div>
                                    <div class="col s2" style="margin-top: 10px;">
                                        <button class="btn waves-effect waves-light blue darken-4  white-text" type="submit" name="action">Send
                                            <i class="material-icons right">send</i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col s12">
                        <a class="modal-trigger" href="#tosModalHome">Terms of Service</a>

                        <!-- Modal Structure -->
                        <div id="tosModalHome" class="modal modal-fixed-footer">
                            <div class="modal-content open-sans3 tos-contents left-align">
                                <h4 class="center-align">Protech Solutions Terms of Service</h4>
                                <h5>1. Terms</h5>
                                <p>By accessing this web site, you are agreeing to be bound by these
                                    web site Terms and Conditions of Use, all applicable laws and regulations,
                                    and agree that you are responsible for compliance with any applicable local
                                    laws. If you do not agree with any of these terms, you are prohibited from
                                    using or accessing this site. The materials contained in this web site are
                                    protected by applicable copyright and trade mark law.</p>
                                <h5>2. Use License</h5>
                                <ol type="a">
                                    <li>
                                        Permission is granted to temporarily download one copy of the materials
                                        (information or software) on Protech Solutions's web site for personal,
                                        non-commercial transitory viewing only. This is the grant of a license,
                                        not a transfer of title, and under this license you may not:

                                        <ol type="i">
                                            <li>modify or copy the materials;</li>
                                            <li>use the materials for any commercial purpose, or for any public display (commercial or non-commercial);</li>
                                            <li>attempt to decompile or reverse engineer any software contained on Protech Solutions's web site;</li>
                                            <li>remove any copyright or other proprietary notations from the materials; or</li>
                                            <li>transfer the materials to another person or "mirror" the materials on any other server.</li>
                                        </ol>
                                    </li>
                                    <li>
                                        This license shall automatically terminate if you violate any of these restrictions and may be terminated by Protech Solutions at any time. Upon terminating your viewing of these materials or upon the termination of this license, you must destroy any downloaded materials in your possession whether in electronic or printed format.
                                    </li>
                                </ol>

                                <h5>3. Disclaimer</h5>

                                <ol type="a">
                                    <li>
                                        The materials on Protech Solutions's web site are provided "as is". Protech Solutions makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties, including without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights. Further, Protech Solutions does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on its Internet web site or otherwise relating to such materials or on any sites linked to this site.
                                    </li>
                                </ol>

                                <h5>4. Limitations</h5>
                                <p>In no event shall Protech Solutions or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption,) arising out of the use or inability to use the materials on Protech Solutions's Internet site, even if Protech Solutions or a Protech Solutions authorized representative has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.</p>

                                <h5>5. Revisions and Errata</h5>

                                <p>The materials appearing on Protech Solutions's web site could include technical, typographical, or photographic errors. Protech Solutions does not warrant that any of the materials on its web site are accurate, complete, or current. Protech Solutions may make changes to the materials contained on its web site at any time without notice. Protech Solutions does not, however, make any commitment to update the materials.</p>

                                <h5>6. Links</h5>

                                <p>Protech Solutions has not reviewed all of the sites linked to its Internet web site and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by Protech Solutions of the site. Use of any such linked web site is at the user's own risk.</p>

                                <h5>7. Site Terms of Use Modifications</h5>

                                <p>Protech Solutions may revise these terms of use for its web site at any time without notice. By using this web site you are agreeing to be bound by the then current version of these Terms and Conditions of Use.</p>

                                <h5>8. Governing Law</h5>

                                <p>Any claim relating to Protech Solutions's web site shall be governed by the laws of the State of Rhode Island without regard to its conflict of law provisions.</p>

                                <p>General Terms and Conditions applicable to Use of a Web Site.</p>
                                <h5>Privacy Policy</h5>

                                <p>Your privacy is very important to us. Accordingly, we have developed this Policy in order for you to understand how we collect, use, communicate and disclose and make use of personal information. The following outlines our privacy policy.</p>

                                <ul>
                                    <li>
                                        Before or at the time of collecting personal information, we will identify the purposes for which information is being collected.
                                    </li>
                                    <li>
                                        We will collect and use of personal information solely with the objective of fulfilling those purposes specified by us and for other compatible purposes, unless we obtain the consent of the individual concerned or as required by law.
                                    </li>
                                    <li>
                                        We will only retain personal information as long as necessary for the fulfillment of those purposes.
                                    </li>
                                    <li>
                                        We will collect personal information by lawful and fair means and, where appropriate, with the knowledge or consent of the individual concerned.
                                    </li>
                                    <li>
                                        Personal data should be relevant to the purposes for which it is to be used, and, to the extent necessary for those purposes, should be accurate, complete, and up-to-date.
                                    </li>
                                    <li>
                                        We will protect personal information by reasonable security safeguards against loss or theft, as well as unauthorized access, disclosure, copying, use or modification.
                                    </li>
                                    <li>
                                        We will make readily available to customers information about our policies and practices relating to the management of personal information.
                                    </li>
                                </ul>

                                <p>We are committed to conducting our business in accordance with these principles in order to ensure that the confidentiality of personal information is protected and maintained.</p>

                            </div>
                            <div class="modal-footer">
                                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" >Exit</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col l6 m6 s12">
                    <h5 class="center-align">Social Media</h5>
                    <div class="col s2 offset-s1">
                        <a href="#!"><img src="images/blue-circle-icons/facebook-blue.png" alt="facebook icon" class="social-icons"></a>
                    </div>
                    <div class="col s2">
                        <a href="#!"><img src="images/blue-circle-icons/google-blue.png" alt="google plus icon" class="social-icons"></a>
                    </div>
                    <div class="col s2">
                        <a href="#!"><img src="images/blue-circle-icons/instragram-blue.png" alt="instagram icon" class="social-icons"></a>
                    </div>
                    <div class="col s2">
                        <a href="#!"><img src="images/blue-circle-icons/linkedin-blue.png" alt="linked-in icon" class="social-icons"></a>
                    </div>
                    <div class="col s2">
                        <a href="https://twitter.com/Protech_RI" target="_blank"><img src="images/blue-circle-icons/twitter-blue.png" alt="twitter icon" class="social-icons"></a>
                    </div>
                    <div class="col s12 privacy-link">
                        <div class="center-align">
                            <!-- Privacy Policy Modal Trigger -->
                            <a class="modal-trigger" href="#modalPrivacy">Privacy Policy</a>

                            <!-- Privacy Policy Modal Structure -->
                            <div id="modalPrivacy" class="modal modal-fixed-footer">
                                <div class="modal-content left-align privacy-content">
                                    <h3 class="center-align">Protech Solutions Privacy Policy</h3>
                                    <h6> This privacy policy discloses the privacy practices for www.protechsolutionsri.com . This privacy
                                        policy applies solely to information collected by this web site. It will notify you of
                                        the following:
                                    </h6>
                                    <ul>
                                        <li>What personally identifiable information is collected from you through the web site,
                                            how it is used and with whom it may be shared.</li>
                                        <li> What choices are available to you regarding the use of your data.</li>
                                        <li>The security procedures in place to protect the misuse of your information.</li>
                                        <li>How you can correct any inaccuracies in the information.</li>

                                    </ul>
                                    <h5>Information Collection, Use, and Sharing</h5>
                                    <p> We are the sole owners of the information collected on this site. We only have access
                                        to/collect information that you voluntarily give us via email or other direct contact from you.
                                        We will not sell or rent this information to anyone.
                                    </p>
                                    <p>We will use your information to respond to you, regarding the reason you contacted us.
                                        We will not share your information with any third party outside of our organization,
                                        other than as necessary to fulfill your request, e.g. to ship an order.
                                    </p>
                                    <p> Unless you ask us not to, we may contact you via email in the future to tell you about
                                        specials, new products or services, or changes to this privacy policy.
                                    </p>
                                    <h5>Your Access to and Control Over Information</h5>
                                    <p>You may opt out of any future contacts from us at any time. You can do the following at any
                                        time by contacting us via the email address or phone number given on our website:
                                    </p>
                                    <ul>
                                        <li>See what data we have about you, if any.</li>
                                        <li>Change/correct any data we have about you.</li>
                                        <li>Have us delete any data we have about you.</li>
                                        <li>Express any concern you have about our use of your data.</li>
                                    </ul>
                                    <h5>Security</h5>
                                    <p>We take precautions to protect your information. When you submit sensitive information
                                        via the website, your information is protected both online and offline.
                                    </p>
                                    <p>Wherever we collect sensitive information (such as credit card data), that information
                                        is encrypted and transmitted to us in a secure way. You can verify this by looking for a
                                        closed lock icon at the bottom of your web browser, or looking for "https" at the beginning
                                        of the address of the web page.
                                    </p>
                                    <p>While we use encryption to protect sensitive information transmitted online, we also protect
                                        your information offline. Only employees who need the information to perform a specific job (for example, billing or customer service) are granted access to personally identifiable information. The computers/servers in which we store personally identifiable information are kept in a secure environment.
                                    </p>
                                    <h5>Updates</h5>
                                    <p>Our Privacy Policy may change from time to time and all updates will be posted on this page.
                                    </p>
                                    <p>If you feel that we are not abiding by this privacy policy, you should contact us immediately
                                        via telephone at 555-555-5555 or via email at information@protechsolutions.com
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Exit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container center-align">
                &copy; 2016 Protech Solutions
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->

    <!-- FIXED CHAT BUTTON -->
    <div class="fix-btn-transform" id="fixChatBtn">
        <a href="#modal-chat" class="btn-floating btn-large modal-trigger">
            <i class="material-icons">message</i>
        </a>
    </div><!-- End  Fixed Chatbox Button -->

</div> <!-- END MAIN CONTENT -->



<!--Import jQuery before materialize.js-->
<!--<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>-->
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script type="text/javascript" src="/ASCapstoneProject/js/materialize.min.js"></script>
<script type="text/javascript" src="/ASCapstoneProject/js/script.js"></script>
<!-- Fonts Awesome -->
<script src="https://use.fontawesome.com/351ac21fcd.js"></script>
</body>
</html>

