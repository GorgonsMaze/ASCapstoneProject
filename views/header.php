<?php
/**
 * Created by PhpStorm.
 * User: Ian
 * Date: 9/2/2016
 * Time: 9:23 PM
 */
$action = $_REQUEST['action'];
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
    <!-- Favicon logo -->
    <link rel="shortcut icon" href="images/logos/logofavicon.ico" type="image/x-icon">
    <!--<link rel="icon" href="/images/logos/logofavicon.png" type="image/png">-->
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
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!-- Stylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" media="screen,projection" />
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
<?php if($action == 'checkoutCart' || $action == 'completePurchase')  {
    echo "<body id=\"topPage\">";
} else {
    echo "<body class=\"stop-scrolling\" id=\"topPage\">";
}
?>

<!-- MAIN CONTENT -->
<div class="main-section">
    <header>
        <!-- Begin Navbar -->
        <div class="navbar-fixed home-nav open-sans3">
            <nav id="navbar home-nav">
                <div class="nav-wrapper nav-text-color">
                    <a href="index.php" class="brand-logo center-on-xlarge great-vibes">Protech Solutions</a>
                    <a href="#" data-activates="slide-out" class="button-collapse" id="hamburger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down hide-on-xlarge">
                        <li><a href="<?php if($action == 'checkoutCart' || $action == 'completePurchase') {echo "index.php#about";} else {echo "#about";}?>">About</a></li>
                        <li><a href="<?php if($action == 'checkoutCart' || $action == 'completePurchase') {echo "index.php#product";} else {echo "#product";}?>">Product</a></li>
                        <li><a href="<?php if($action == 'checkoutCart' || $action == 'completePurchase') {echo "index.php#testimonial";} else {echo "#testimonial";}?>">Testimonials</a></li>
                        <li><a href="<?php if($action == 'checkoutCart' || $action == 'completePurchase') {echo "index.php#demo";} else {echo "#demo";}?>">Demo</a></li>
                        <li><a href="<?php if($action == 'checkoutCart' || $action == 'completePurchase') {echo "index.php#buy";} else {echo "#buy";}?>" class="dropdown-button" data-activates="ddCheckout" data-belowOrigin="true" data-hover="true" data-constrainwidth="true">Buy</a></li>
                        <!-- Dropdown Structure -->
                        <ul id="ddCheckout" class="dropdown-content">
                            <li><a href="index.php?action=checkoutCart">Checkout</a></li>
                        </ul>
                        <li><a href="<?php if($action == 'checkoutCart' || $action == 'completePurchase') {echo "index.php#contact";} else {echo "#contact";}?>">Contact</a></li>
                        <!-- Extra Drop Down Trigger -->
                        <li><a class="dropdown-button" href="#!" data-activates="ddExtra" data-belowOrigin="true" data-alignment="right" data-gutter="-5" data-hover="true" data-constrainwidth="true "><i class="material-icons">more_vert</i></a></li>
                        <!-- Dropdown Structure -->
                        <ul id="ddExtra" class="dropdown-content">
                            <li><a href="<?php if($action == 'checkoutCart' || $action == 'completePurchase') {echo "index.php#location";} else {echo "#location";}?>">Location</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php if($action == 'checkoutCart' || $action == 'completePurchase') {echo "index.php#team";} else {echo "#team";}?>">Team</a>
                            <li class="divider"></li>
                            <li><a href="<?php if($action == 'checkoutCart' || $action == 'completePurchase') {echo "index.php#social-footer";} else {echo "#social-footer";}?>">Social Media</a></li>
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
                        <img class="circle side-logo" src="images/logos/logo.png">
                    </div>
                    <a href="#topPage"><span class="white-text name userview-link">Protech Solutions</span></a>
                    <a href="mailto:protechsolutionsri@gmail.com?Subject=Hello%20Protech%20Solutions"><span class="white-text email userview-link">ProtechSolutionsRI@gmail.com</span></a>
                </div></li>
            <ul class="main-side-links">
                <li><a class="waves-effect" href="<?php if($action == 'checkoutCart' || $action == 'completePurchase') {echo "index.php#about";} else {echo "#about";}?>" id="sBtn1"><i class="material-icons left">description</i>About</a></li>
                <li><div class="divider"></div></li>
                <li><a class="waves-effect" href="<?php if($action == 'checkoutCart' || $action == 'completePurchase') {echo "index.php#product";} else {echo "#product";}?>" id="sBtn2"><i class="material-icons left">developer_board</i>Product</a></li>
                <li><div class="divider"></div></li>
                <li><a class="waves-effect" href="<?php if($action == 'checkoutCart' || $action == 'completePurchase') {echo "index.php#testimonial";} else {echo "#testimonial";}?>" id="sBtn3"><i class="material-icons left">comment</i>Testimonials</a></li>
                <li><div class="divider"></div></li>
                <li><a class="waves-effect" href="<?php if($action == 'checkoutCart' || $action == 'completePurchase') {echo "index.php#demo";} else {echo "#demo";}?>" id="sBtn4"><i class="material-icons left">whatshot</i>Demo</a></li>
                <li><div class="divider"></div></li>
                <li><a class="waves-effect" href="<?php if($action == 'checkoutCart' || $action == 'completePurchase') {echo "index.php#buy";} else {echo "#buy";}?>" id="buySidenav"><i class="material-icons left">shopping_cart left</i>Buy</a></li>
                <?php
                if ($action == '') {
                    echo "<div class=\"hide-checkout\">";
                    echo "<li class=\"hidden-checkout-btn\"><a class=\"waves-effect\" href=\"index.php?action=checkoutCart\"><i class=\"material-icons left\">subdirectory_arrow_right</i>Checkout</a></li>";
                } else {
                    echo "<div>";
                    echo "<li><a class=\"waves-effect\" href=\"index.php?action=checkoutCart\"><i class=\"material-icons left red-text\">subdirectory_arrow_right</i>Checkout</a></li>";
                }
                ?>
<!--                <div class="hide-checkout">-->
<!--                    <li class="hidden-checkout-btn"><a class="waves-effect" href="index.php?action=checkoutCart"><i class="material-icons left">subdirectory_arrow_right</i>Checkout</a></li>-->
                    <li><div class="divider"></div></li>
                    <li><a class="waves-effect" href="<?php if($action == 'checkoutCart' || $action == 'completePurchase') {echo "index.php#contact";} else {echo "#contact";}?>"><i class="material-icons left">email</i>Contact</a></li>
                    <li><div class="divider"></div></li>
                    <li><a class="waves-effect" href="<?php if($action == 'checkoutCart' || $action == 'completePurchase') {echo "index.php#location";} else {echo "#location";}?>"><i class="material-icons left">location_city</i>Location</a></li>
                    <li><div class="divider"></div></li>
                    <li><a class="waves-effect" href="<?php if($action == 'checkoutCart' || $action == 'completePurchase') {echo "index.php#team";} else {echo "#team";}?>"><i class="material-icons left">group</i>Dev Team</a>
                    <li><div class="divider"></div></li>
                    <li><a class="waves-effect" href="<?php if($action == 'checkoutCart' || $action == 'completePurchase') {echo "index.php#social-footer";} else {echo "#social-footer";}?>"><i class="material-icons left">share</i>Social Media</a></li>
                    <li><div class="divider"></div></li>
                <?php
                echo "</div>";
                ?>

            </ul>
        </ul> <!-- END FIXED SIDE-NAV XL -->
    </header>
