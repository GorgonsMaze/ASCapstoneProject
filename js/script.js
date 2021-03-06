/**
 * Created by Ian Arsenault on 8/8/2016.
 */

// Carousel Slider function
var carouselChange = function () {
    // Change slider item every 10 seconds
    var carousel_interval = 10000;
    // Initialize materialize carousel slider
    $('.carousel.carousel-slider').carousel({full_width: true});
    // set timed interval function for slider change
    var timer = setInterval(function () {
        $('.carousel.carousel-slider').carousel('next');
    }, carousel_interval);

    // On a slider indicator click
    $("li .indicator-item").on('click', function () {
        console.log("Indicator clicked!");
        // Clear the set interval timer
        clearInterval(timer);
        // Set a timeout
        setTimeout(function () {
            // Reset an interval for the slider
            timer = setInterval(function () {
                $('.carousel.carousel-slider').carousel('next');
            }, carousel_interval);
        });

    });
};

// Function handles progress bar animations for loading div
var progressBar = function () {
    // Blue Progress Bar
    $(".progress-bar-1").animate({
        width: "100%"
    }, 2500);
    // Blue Progress Bar
    $(".progress-bar-middle").animate({
        width: "100%"
    }, 2500);
    // Blue Progress Bar
    $(".progress-bar-2").animate({
        width: "100%"
    }, 2500);
};

// Function for scrolling effects
var scrollChange = function () {
    /* Fixed Navbar Scroll */
    var lastScrollTop = 0;
    // .navbar-fixed will change all pages navbar
    /*var navbar = $('.navbar-fixed');*/
    // home nav Will only change homepage navigation
    var navbar = $('.home-nav');
    // Fixed Chat button for customer help
    var chatbtn = $("#fixChatBtn");

    $(window).scroll(function () {
        // If window width is greater than 992 & less than 1550px
        // do scrollTop function stuff > transition + opacity changes
        if ($(window).width() > 992 && $(window).width() < 1550) {
            var y = $(this).scrollTop();
            // If scrolltop point is greater than last scroll position
            if (y > lastScrollTop) {
                // scrolling down code
                //alert("down");
                // Change navbar opacity to almost transparent
                navbar.css({
                    //visibility: "hidden",
                    transition: "opacity 0.5s linear",
                    opacity: 0.2
                });
                chatbtn.css({
                    transition: "opacity 0.5s linear",
                    opacity: 0.2
                });
            } else {
                // scrolling up code
                //alert("up");
                // If it's scrolling up lose opacity
                navbar.css({
                    visibility: "visible",
                    transition: "opacity 0.5s linear",
                    opacity: 1
                });
                chatbtn.css({
                    transition: "opacity 0.5s linear",
                    opacity: 0.2
                })

            } // end else

            // If scroll point  is at the same last scrollpoint after .5 seconds lose opacity
            lastScrollTop = y;
            var scrolly = $('body').scrollTop();
            setTimeout(function () {
                if (scrolly == $('body').scrollTop()) {
                    navbar.css({
                        visibility: "visible",
                        transition: "opacity 0.5s linear",
                        opacity: 1
                    });
                    chatbtn.css({
                        visibility: "visible",
                        transition: "opacity 0.5s linear",
                        opacity: 1
                    })
                }
            }, 500);

        } // end if

        // For side-nav popout on devices smaller than 993px
        if ($(window).width() < 993) {
            var y2 = $(this).scrollTop();
            if (y2 > lastScrollTop) {
                chatbtn.css({
                    transition: "opacity 0.5s linear",
                    opacity: 0.2
                });
            } else {
                chatbtn.css({
                    transition: "opacity 0.5s linear",
                    opacity: 0.2
                });
            }


            // If scroll point  is at the same last scrollpoint after .5 seconds lose opacity
            lastScrollTop = y2;
            var scrolly2 = $('body').scrollTop();
            setTimeout(function () {
                if (scrolly2 == $('body').scrollTop()) {
                    chatbtn.css({
                        visibility: "visible",
                        transition: "opacity 0.5s linear",
                        opacity: 1
                    })
                }
            }, 500);
        }

        // // If window width is small or less than 600px
        // if ($(window).width() < 600) {
        //     // Add center align class to customer complete detail report
        //     $("#left-complete").addClass("center-align");
        //     $("#right-complete").addClass("center-align");
        // } else {
        //     // Remove center align class to customer complete detail report
        //     $("#left-complete").removeClass("center-align");
        //     $("#right-complete").removeClass("center-align");
        // }


        // Displays scrollTop in console (Showing when user reached bottom of page)
        console.log($(window).scrollTop() == ($(document).height() - $(window).height()));
    });
};


// Active scroll spy functionality
var activeScrollspy = function () {
    /** Need to update this function to get rid of active class when entering
     *   new scrollspy section - Now it activates 2 at the same time at bottom
     *   and top points **/
    // Scrollspy initalization
    $('.scrollspy').scrollSpy({scrollOffset: 50});
    //$(".scrollspy").scrollSpy();
    // Scrollspy enter function - Confirms when
    // user enters specified scrollspy id
    $(".scrollspy").on('scrollSpy:enter', function () {
        // Display enter scrolling points of each div id to console
        console.log('enter:', $(this).attr('id'));
        // add active class to parent li in horizontal navigation
        $(".navbar-fixed").find('a[href="#' + $(this).attr('id') + '"]').parent().addClass('active-nav');
        // add active class to parent li in vertical side-navigation
        $("#slide-out").find('a[href="#' + $(this).attr('id') + '"]').parent().addClass('active-nav');

    });
    // Scrollspy enter function - Confirms when
    // user exits specified scrollspy id
    $(".scrollspy").on('scrollSpy:exit', function () {
        // Display exit scrolling points of each div id to console
        console.log('exit:', $(this).attr('id'));
        // remove active class from parent li
        $(".navbar-fixed").find('a[href="#' + $(this).attr('id') + '"]').parent().removeClass('active-nav');
        // add active class to parent li in vertical side-navigation
        $("#slide-out").find('a[href="#' + $(this).attr('id') + '"]').parent().removeClass('active-nav');

    });
};

// Element fire function
var scrollfire = function () {
    var options = [
        // About card image
        {
            selector: '#aboutImg', offset: 300, callback: function (el) {
            Materialize.showStaggeredList($(el));
        }
        },
        // About card title
        {
            selector: '#aboutTitle', offset: 300, callback: function (el) {
            Materialize.showStaggeredList($(el));
        }
        },
        // About card paragraph
        {
            selector: '#aboutParagraphs', offset: 300, callback: function (el) {
            Materialize.showStaggeredList($(el));
        }
        },
        // Applications Products Title
        {
            selector: '#fireApplicationTitle', offset: 300, callback: function (el) {
            Materialize.showStaggeredList($(el));
        }
        },
        // Collapsible Application Section
        {
            selector: '#collapseApps', offset: 300, callback: function (el) {
            Materialize.showStaggeredList($(el));
        }
        },
        // Applications Details Title
        {
            selector: '#fireApplicationDetails', offset: 300, callback: function (el) {
            Materialize.showStaggeredList($(el));
        }
        },
        // Uniqueness Product Card - Product Section
        {
            selector: '#uniqueCard1', offset: 350, callback: function (el) {
            Materialize.showStaggeredList($(el));
        }
        },
        // Uniqueness Product Card - Product Section
        {
            selector: '#uniqueCard2', offset: 300, callback: function (el) {
            Materialize.showStaggeredList($(el));
        }
        },
        // Speed & Data Card Content - Product Section
        {
            selector: '#speedImage', offset: 300, callback: function (el) {
            Materialize.showStaggeredList($(el));
        }
        },
        // Speed & Data Card Image - Product Section
        {
            selector: '#speedContent', offset: 350, callback: function (el) {
            Materialize.showStaggeredList($(el));
        }
        },
        // Support Image Card - Product Section
        {
            selector: '#supportImage', offset: 350, callback: function (el) {
            Materialize.showStaggeredList($(el));
        }
        },
        // Support Content  Card - Product Section
        {
            selector: '#supportContent', offset: 300, callback: function (el) {
            Materialize.showStaggeredList($(el));
        }
        },
        // Testimonial Title
        {
            selector: '#testimonialTitle', offset: 300, callback: function (el) {
            Materialize.showStaggeredList($(el));
        }
        },
        // Testimonial Slider
        {
            selector: '#testimonialSlider', offset: 300, callback: function (el) {
            Materialize.showStaggeredList($(el));
        }
        },
        // Hidden Testimonial Slider - small screens
        {
            selector: '#hiddenTestimonials', offset: 300, callback: function (el) {
            Materialize.showStaggeredList($(el));
        }
        },
        // Stack Tech Icon Titles
        {
            selector: '#fireTechnologyTitle', offset: 300, callback: function (el) {
            Materialize.showStaggeredList($(el));
        }
        },
        // Stack Tech Icon Row 1
        {
            selector: '#techIcons1', offset: 300, callback: function (el) {
            Materialize.showStaggeredList($(el));
        }
        },
        // Stack Tech Icon Row 2
        {
            selector: '#techIcons2', offset: 300, callback: function (el) {
            Materialize.showStaggeredList($(el));
        }
        },
        // Demo Section title
        {
            selector: '#demoTitle', offset: 300, callback: function (el) {
            Materialize.showStaggeredList($(el));
        }
        },
        // Demo - tabs
        {
            selector: '#tabHeader', offset: 300, callback: function (el) {
            Materialize.showStaggeredList($(el));
        }
        },
        // Demo - tab content
        {
            selector: '#tabContent', offset: 300, callback: function (el) {
            Materialize.showStaggeredList($(el));
        }
        },
        // Purchase Section Title
        {
            selector: '#purchaseTitle', offset: 300, callback: function (el) {
            Materialize.showStaggeredList($(el));
        }
        },
        // Patient Portal Card - pricing
        {
            selector: '#portalCard', offset: 390, callback: function (el) {
            Materialize.showStaggeredList($(el));
        }
        },
        // EHR Card Pricing Card
        {
            selector: '#ehrCard', offset: 350, callback: function (el) {
            Materialize.showStaggeredList($(el));
        }
        },
        // Billing Pricing Card
        {
            selector: '#billingCard', offset: 300, callback: function (el) {
            Materialize.showStaggeredList($(el));
        }
        },
        // Product Overview Card - table
        {
            selector: '#priceOverviewCard', offset: 300, callback: function (el) {
            Materialize.showStaggeredList($(el));
        }
        },
        // EHR Overview Card table
        {
            selector: '#ehrOverviewCard', offset: 300, callback: function (el) {
            Materialize.showStaggeredList($(el));
        }
        },
        // Contact Title
        {
            selector: '#contactTitle', offset: 300, callback: function (el) {
            Materialize.showStaggeredList($(el));
        }
        },
        // Contact Us Form
        {
            selector: '#contactFrm', offset: 300, callback: function (el) {
            Materialize.showStaggeredList($(el));
        }
        },
        // Direct Mail and Phone Container
        {
            selector: '#contactContainer', offset: 300, callback: function (el) {
            Materialize.showStaggeredList($(el));
        }
        },
        // Location Title
        {
            selector: '#googleTitle', offset: 300, callback: function (el) {
            Materialize.showStaggeredList($(el));
        }
        },
        // Location Container Google Maps
        {
            selector: '#googleContainer', offset: 300, callback: function (el) {
            Materialize.showStaggeredList($(el));
        }
        },
        // Dev Title
        {
            selector: '#devTitle', offset: 300, callback: function (el) {
            Materialize.showStaggeredList($(el));
        }
        },
        // Developer One card
        {
            selector: '#devOne', offset: 350, callback: function (el) {
            Materialize.showStaggeredList($(el));
        }
        },
        // Developer Two Card
        {
            selector: '#devTwo', offset: 300, callback: function (el) {
            Materialize.showStaggeredList($(el));
        }
        },
        // Social Media Title
        {
            selector: '#socialTitle', offset: 300, callback: function (el) {
            Materialize.showStaggeredList($(el));
        }
        },
        // Social Media Twitter Container
        {
            selector: '#socialContainer', offset: 300, callback: function (el) {
            Materialize.showStaggeredList($(el));
        }
        }

        // {selector: '.class', offset: 200, callback: customCallbackFunc } },
        // {selector: '.other-class', offset: 200, callback: function() {
        //     customCallbackFunc();
        // } }

    ];
    Materialize.scrollFire(options);

};

// Contact form function
var contactForm = function () {
    var textMessage = document.getElementById("message");
    $(textMessage).on('input', function () {
        var submitBtn = $("#sendMailBtn");
        // If the value length of message is greater than 3 - "hey"
        if (this.value.length > 3) {
            // Change color
            submitBtn.css({
                backgroundColor: "#5e35b1"
            });
            // on hover transition between light and dark colors
            $(submitBtn).hover(function () {
                $(this).css("background-color", "#7B46E9");
            }, function () {
                $(this).css("background-color", "#5e35b1");
            });
        } else {
            // else transition back to color
            submitBtn.css({
                transition: "all 1s ease-in-out",
                backgroundColor: "#388e3c"

            });
            // on hover transition between light and dark colors
            $(submitBtn).hover(function () {
                $(this).css("background-color", "#41B145");
            }, function () {
                $(this).css("background-color", "#388e3c");
            });
        }

    });
};

// Enables scrolling after 5.6 seconds -- loading screen
var switchScroll = function () {
    var body = $("body");
    // Timed function that allows scrolling to
    // activate after 5.6 seconds
    setTimeout(function () {
        body.removeClass("stop-scrolling");
    }, 5600);
};


// Show main content after landing div loads first
var mainContent = function () {
    var main = $(".main-section");
    // Timed function that fades in main.php content
    setTimeout(function () {
        main.fadeIn();
    }, 1500);
};

var validSelect = function () {
    // var states = document.getElementById("states");
    // var statesValue = states.options[states.selectedIndex].value;


    var ccv = document.getElementById("cc_ccv");
    $(ccv).on('input', function () {
        if (this.value.length == 3) {
            $(".select-wrapper input.select-dropdown").css({
                "border-bottom": "2px solid #4CAF50"
            });
        } else {
            $(".select-wrapper input.select-dropdown").css({
                "border-bottom": "1px solid black"
            });
        }
    });


    // $(states).on('change', function () {
    //     if (statesValue.value == "MA") {
    //         $(".select-wrapper input.select-dropdown").css({
    //             "border-bottom": "2px solid #4CAF50"
    //         });
    //     } else {
    //         $(".select-wrapper input.select-dropdown").css({
    //             "border-bottom": "1px solid black"
    //         });
    //     }
    // });
    // $(statesValue).on('change', function () {
    //     $(".select-wrapper input.select-dropdown").css({
    //         "border-bottom": "2px solid #4CAF50"
    //     });
    // });
    // if (statesValue != "None") {
    //     $(".select-wrapper input.select-dropdown").css({
    //         "border-bottom": "2px solid #4CAF50"
    //     });
    // }
};

// Radio Button & checkbox validation -- added due to HTML5 Required not working
var formValidation = function () {
    // On form submit click
    $("#chkOutBtn").on('click', function () {
        // if there are any validation toasts showing remove them
        $(".toast").remove();
        // If product radio btn isn't checked
        if (!document.getElementById('chkEHR').checked) {
            //alert("Please choose a product!");
            // Scroll to top to display radio button selection
            $("html, body").animate({scrollTop: 0}, 600);
            setTimeout(function () {
                // Fire toast with error message
                Materialize.toast(' Please choose a product!', 50000, 'red darken-1 radio-toast');
                // Add orange CSS Border - for alerting to selection area
                $(".collection").css({
                    "border": "3px solid rgb(255, 143, 0)"
                });
                // Add animation class - Shake - to alert user even more lol -> dumb user
                $("#validateAnimate").addClass("shake");
                // Set timeout function to remove classes to
                // allow for the animation to continue each click until checked
                setTimeout(function () {
                    $("#validateAnimate").removeClass("shake");
                }, 1000);
            }, 500);

            return false;

        }

        // If product radio btn is checked
        if (document.getElementById('chkEHR').checked) {
            var ccv = document.getElementById('cc_ccv');
            // and if CCV input value is = 3 || 4
            if (ccv.value.length == 3 || ccv.value.length == 4) {
                // If the TOS checkbox is not checked
                if (!document.getElementById('chk_termsOfService').checked) {
                    // Fire toast with error message
                    Materialize.toast('Please agree to the Terms of Service', 50000, 'green darken-1 checkbox-toast');
                    // Add animation class
                    $("#tocBox").addClass("shake");
                    // Set timeout for 1 second
                    setTimeout(function () {
                        // then remove animation class
                        $("#tocBox").removeClass("shake");
                    }, 1000);
                }
            }
        }

    });

    // Once a radio button is checked -
    $("#chkEHR").change(function () {
        $(".radio-toast").fadeOut(function () {
            $(this).remove();
        });
        // If the value is for the Advanced EHR Suite
        if ($(this).val() == 'EHR Suite') {
            // Remove own required styling border
            $(".collection").css({
                "border": "1px solid #e0e0e0"
            });
        }
    });


    // Once TOS is checked off
    $("input[type='checkbox']").change(function () {
        // remove checkbox toast
        $(".checkbox-toast").fadeOut(function () {
            $(this).remove();
        });
    });


    // If user clicks agree button in TOS modal
    $("#tosAgreeBtn").on('click', function () {
        // make TOS checkbox -> checked / true
        $("input[name='terms']").prop('checked', true);
        $(".checkbox-toast").fadeOut(function () {
            $(this).remove();
        });
    });

    // Fixes the invalid error on Country input
    // due to the input field being read-only
    // an invalid error on required html5 is thrown
    var zipcode = document.getElementById("zipcode");
    $(zipcode).on('input', function () {
        var countryInput = $("#country");
        if (this.value.length == 5) {
            countryInput.css({
                borderBottom: "1px solid #4CAF50",
                boxShadow: "0 1px 0 0 #4CAF50"
            });
        } else {
            countryInput.css({
                borderBottom: "1px solid #9e9e9e"
            });
        }
    });

};

// Function allows for the showing of Checkout button in side-nav
var sideNavTransform = function () {
    // On click of "BUY" btn in side-nav
    $("#buySidenav").on('click', function () {
        // The translated div hiding Checkout button will
        // translate down into view
        $(".hide-checkout").css({
            "transform": "translateY(0px)"
        });
        // While changing it's opacity to become visible
        $(".hidden-checkout-btn ").css({
            "opacity": "1"
        })
    });
};

var chckoutAjax = function () {
    var content = $("#content");
    $("#checkoutForm").on('submit', function () {
        // window.location.hash = $(this).attr("href");
        // $("#content").load($(this).attr("href"));
        // alert("load works?");
        $.ajax({
            url: 'index.php?action=ajaxOrderComplete',
            type: 'POST',
            success: function (data) {
                console.log("IT WORKS. THE AJAX");
                //alert("AJAX WORKS");
                $("#content").html(data);
                // $("html, body").animate({ scrollTop: 0}, 0);
                // Materialize.updateTextFields();
                // $("select").material_select();
                //localStorage.setItem('checkout', content.html());
            }
        });
        return false;
    });
};

// var localStore = function () {
//     var content = $("#content");
//     var storedBlock = localStorage.getItem('checkout');
//     if (storedBlock !== null) {
//         content.html(storedBlock).show();
//     }
// };
// var clearStorage = function () {
//
//     if (sessionStorage.getItem("is_reloaded")) {
//         alert("Reloaded!");
//     } else {
//         localStorage.clear();
//     }
//
// };
// window.onbeforeunload = function () {
//     window.localStorage.removeItem(key);
//     return '';
// };

// Function gets value from input field in chat modal and displays it in chat
var chatMessage = function () {
    // Assign input value to variable
    var customerMessage = $("#custMsg").val();
    // creates a newMessage variable that contains an object for the input
    var newMsg = {
        custMsg: customerMessage
    };

    // Create the display message
    var str = "";
    str += "<p><span class='cust-name'>You:</span>&nbsp;" + newMsg.custMsg + "</p>";

    // Append the new message to the Results Section
    $(".response-section").append(str);

    console.log(str);
};

var clearInput = function () {
    // Clears Support Chat input
    $("#custMsg").val("");
};
$(document).ready(function () {
    // sessionStorage.setItem("is_reloaded", true);
    // clearStorage();
    // localStore();
    // localStorage.removeItem(key)

    // Catch the forms submit event
    $("#supportBtn").on('submit', function (e) {
        // Prevent form from refreshing page
        $.ajax({
            data: $(this).serialize(), // get form data
            type: $(this).attr("method"),
            url: 'index.php?action=customerSupport',
            success: function(response) {
                alert("ajaxworks");
                $(".response-section").append(response);
            }
        });
        e.preventDefault();
        //return false; // cancel original event to prevent form submitting
        // Materialize.toast("Contact is avaialble 24/7", 3000, "blue white-text");
        // chatMessage();
        // clearInput();
    });

    // Fade in Main Section -- Whole Website
    $(".main-section").fadeIn(2500);

    /* Fade out overlay and loading screen */
    // $(".loading-overlay").fadeIn('slow').show().delay(4500).fadeOut(2000);
    $(".loading-overlay").show().delay(5000).fadeOut(2500);
    // Show Div containing Logo and Progress bars
    $("#fadediv").show();
    // Delay window scroll function
    switchScroll();
    // Function displays main content after set time
    mainContent();
    // Fade in download demo section on page load
    $(".Message-Header-Top").fadeIn(5000);
    // Side-nav Initialization
    $(".button-collapse").sideNav();
    // Materialbox Initialization
    $('.materialboxed').materialbox();
    // Modal Initialization
    $('.modal-trigger').leanModal();
    // Parallax Initialization
    $('.parallax').parallax();
    // Dropdown Initialization
    $('.dropdown-button').dropdown();

    // Scrollspy function
    activeScrollspy();

    // Carousel Slider item change
    carouselChange();

    // Side nav checkout function
    sideNavTransform();

    // Landing page loading bar
    progressBar();
    // Scroll effects
    scrollChange();
    // Scrollfire function
    scrollfire();
    // Contact form function
    contactForm();
    // Tabs Initialization
    $('ul.tabs').tabs();
    // Form Drop Doww -- CHECKOUT
    $("select").material_select();
    //Radio button validation
    formValidation();
    // AJAX Function
    //chckoutAjax();

    validSelect();

    // for HTML5 "required" attribute
    $("select[required]").css({display: "inline", height: 0, padding: 0, width: 0});
    //$("input['type=radio'][required]").css({display: "inline", height: 0, padding: 0, width: 0});
    //$('#chkEHR[required]').css({visibility: "visible", marginLeft: "200px"});
});