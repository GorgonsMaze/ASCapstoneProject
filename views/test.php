<?php ?>
<!---->
<!--<!-- BEGIN FORM -->-->
<!--<form class="col s12" role="form" id="checkoutForm" method="POST" name="formCheckout" action="">-->
<!--    <!-- ROW -->-->
<!--    <div class="row">-->
<!--        <div class="col s12 m8 offset-m2 l6">-->
<!--            <!-- CARD -->-->
<!--            <div class="card chk-out-card">-->
<!--                <div class="card-content billing-content">-->
<!--                    <div class="row">-->
<!--                        <h5 class="center-align">Payment Information</h5>-->
<!--                        <div class="require center-align">* All fields required</div><br/>-->
<!--                    </div>-->
<!--                    <div class="row">-->
<!--                        <!-- Product -->-->
<!--                        <div class="row">-->
<!--                            <div class="col s12 m8 l6 offset-m2 offset-l3">-->
<!--                                <p>-->
<!--                                    <input name="product" type="radio" id="chkEHR" title="Please check off correct product" class="with-gap validate"  value="EHR Suite"/>-->
<!--                                    <label for="chkEHR" class="chk-ehr-label">Advanced EHR Suite - <i>$199.99 /month</i></label>-->
<!--                                </p>-->
<!--                            </div>-->
<!--                        </div><!-- END CHECKBOX - PRODUCT SECTION -->-->
<!--                        <!-- First Name-->-->
<!--                        <div class="row">-->
<!--                            <div class="input-field col s6">-->
<!--                                <input id="first_name" placeholder="John" type="text" name="fName" pattern="^[a-zA-Z'.,\s-]{2,35}$" title="Enter first name" class="validate" required="required" aria-required="true">-->
<!--                                <label for="first_name"><b>First Name</b></label>-->
<!--                            </div>-->
<!--                            <!-- Last Name-->-->
<!--                            <div class="input-field col s6">-->
<!--                                <input id="last_name" placeholder="Juggerknot" type="text" name="lName" pattern="^[a-zA-Z'.,\s-]{2,50}$" title="Enter last name" class="validate" required="" aria-required="true">-->
<!--                                <label for="last_name"><b>Last Name</b></label>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="row">-->
<!--                            <!-- email -->-->
<!--                            <div class="input-field col s12">-->
<!--                                <input  id="email_of" placeholder="example@yourdomain.com" type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Enter email address correctly" class="validate" required="" aria-required="true">-->
<!--                                <label for="email_of"><b>Email</b></label>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="center-align">-->
<!--                            <!-- Submit button -->-->
<!--                            <button class="btn waves-effect waves-light" type="submit" name="action" value="completePurchase" id="chkOutBtn">Purchase-->
<!--                                <i class="material-icons right">send</i>-->
<!--                            </button>-->
<!--                        </div>-->
<!--                    </div><!-- END ROW -->-->
<!--                </div><!-- END CARD CONTENT -->-->
<!--            </div> <!-- END CARD -->-->
<!--        </div><!-- END COL -->-->
<!--    </div><!--END  ROW -->-->
<!--</form>-->
<!---->




<main>
    <!-- CHECKOUT FORMS -->
    <div class="section checkout-section open-sans3">
        <div class="container">
            <!-- BEGIN FORM -->
            <form class="col s12" role="form" id="checkoutForm" method="POST" name="formCheckout" action="">
                <div class="row">
                    <div class="col s12 m8 l6 offset-m2 offset-l3" id="validateAnimate">
                        <ul class="collection with-header center-align">
                            <li class="collection-header" id="chk-collection-header"><img src="/ASCapstoneProject/images/logos/logo.png" height="128" width="128"/><h4>Protech Checkout</h4></li>
                            <li class="collection-item" id="chk-collection">
                                <p>
                                    <input name="product" type="radio" id="chkEHR" title="Please check off correct product" class="with-gap validate"  value="EHR Suite"/>
                                    <label for="chkEHR" class="chk-ehr-label">Advanced EHR Suite - <i>$199.99 /month</i></label>
                                </p>
                                <p>
                                    <input name="group1" type="radio" id="chkBilling" disabled="disabled" />
                                    <label for="chkBilling">Advanced Medical Billing Suite - <i>$79.99 /month</i></label>
                                </p>
                                <p>
                                    <input name="group1" type="radio" id="chkPortal" disabled="disabled" />
                                    <label for="chkPortal">Advanced Patient Portal Suite - <i>$149.99 /month</i></label>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div><!-- END CHECKBOX - PRODUCT SECTION -->
                <!-- ROW -->
                <div class="row">
                    <div class="col s12 m8 offset-m2 l6">
                        <!-- CARD -->
                        <div class="card chk-out-card">
                            <div class="card-content billing-content">
                                <div class="row">
                                    <h5 class="center-align">Payment Information</h5>
                                    <div class="require center-align">* All fields required</div><br/>
                                </div>
                                <div class="row">
                                    <!-- First Name-->
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input id="first_name" placeholder="John" type="text" name="fName" pattern="^[a-zA-Z'.,\s-]{2,35}$" title="Enter first name" class="validate" required="required" aria-required="true">
                                            <label for="first_name"><b>First Name</b></label>
                                        </div>
                                        <!-- Last Name-->
                                        <div class="input-field col s6">
                                            <input id="last_name" placeholder="Juggerknot" type="text" name="lName" pattern="^[a-zA-Z'.,\s-]{2,50}$" title="Enter last name" class="validate" required="" aria-required="true">
                                            <label for="last_name"><b>Last Name</b></label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- Address 1-->
                                        <div class="input-field col s12">
                                            <input id="address_one" placeholder="123 Holiday Lane" type="text" name="address"  title="Enter your street address" class="validate" required="" aria-required="true">
                                            <label for="address_one"><b>Address 1</b></label>
                                        </div>
                                    </div>
                                    <!-- Address 2-->
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="address_two" placeholder="Apartment 2C" type="text" name="address2" title="Enter secondary address">
                                            <label for="address_two"><b>Address 2</b></label>
                                        </div>
                                    </div>
                                    <!-- CITY -->
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="city" placeholder="Narnia" type="text" name="city"  title="Enter your city or town" class="validate" required="" aria-required="true">
                                            <label for="city"><b>City</b></label>
                                        </div>
                                    </div>
                                    <!-- STATES -->
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <select id="states" title="Select a state" name="state" class="validate" required="" aria-required="true">
                                                <option value="None" class="grey-text" disabled selected>Select a State</option>
                                                <?php
                                                $statesArray = array("AL" => "Alabama", "AK" => "Alaska", "AZ" => "Arizona", "AR" => "Arkansas", "CA" => "California", "CO" => "Colorado",
                                                    "CT" => "Connecticut","DE" => "Delaware", "DC" => "District Of Columbia","FL" => "Florida", "GA" => "Georgia", "HI" => "Hawaii","ID" => "Idaho",
                                                    "IL" => "Illinois", "IN" => "Indiana", "IA" => "Iowa","KS" => "Kansas", "KY" => "Kentucky", "LA" => "Louisiana","ME" => "Maine", "MD" => "Maryland",
                                                    "MA" => "Massachusetts", "MI" => "Michigan", "MN" => "Minnesota", "MS" => "Mississippi", "MO" => "Missouri", "MT" => "Montana","NE" => "Nebraska",
                                                    "NV" => "Nevada", "NH" => "New Hampshire", "NJ" => "New Jersey", "NM" => "New Mexico", "NY" => "New York", "NC" => "North Carolina", "ND" => "North Dakota",
                                                    "OH" => "Ohio", "OK" => "Oklahoma", "OR" => "Oregon", "PA" => "Pennsylvania", "RI" => "Rhode Island", "SC" => "South Carolina", "SD" => "South Dakota",
                                                    "TN" => "Tennessee", "TX" => "Texas","UT" => "Utah", "VT" => "Vermont", "VA" => "Virginia", "WA" => "Washington", "WV" => "West Virginia", "WI" => "Wisconsin","WY" => "Wyoming");
                                                foreach($statesArray as $key => $val) { ?>
                                                    <option value="<?php echo $key; ?>"><?php echo $val; ?></option>
                                                <?php } ?>
                                            </select>
                                            <label for="states"><b>State</b></label>
                                        </div>
                                    </div>
                                    <!-- ZIPCODE -->
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="zipcode" placeholder="03543 or 02454-4533" type="text" name="zip"  pattern="^\d{5}(?:[-\s]\d{4})?$" title="Enter your zipcode" class="validate" required="" aria-required="true">
                                            <label for="zipcode"><b>Zip</b></label>
                                        </div>
                                    </div>
                                    <!-- Country -->
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input value="United States" id="country" name="country" type="text" class="validate">
                                            <label for="country"><b>Country</b></label>
                                        </div>
                                    </div>
                                    <!-- PHONE -->
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <!-- CHECK VALIDATION ******************* -->
                                            <input id="phone_number" placeholder="1234567890" type="text" name="phoneNumber" pattern="^\d{10}$" title="Enter your 10 digit phone number with dashes ex. 508-234-1233" class="validate" required="" aria-required="true">
                                            <label for="phone_number"><b>Phone</b></label>
                                        </div>
                                    </div>
                                    <!-- EMAIL -->
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <!-- placeholder="Name@yourdomain.com" -->
                                            <input  id="email_of" placeholder="example@yourdomain.com" type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Enter email address correctly" class="validate" required="" aria-required="true">
                                            <label for="email_of"><b>Email</b></label>
                                        </div>
                                    </div>
                                    <!-- Purchase Button -->
                                    <div class="center-align">
                                        <button class="btn waves-effect waves-light" type="submit" name="action" value="completePurchase" id="chkOutBtn">Purchase
                                            <i class="material-icons right">send</i>
                                        </button>
                                    </div>
                                </div><!-- END ROW -->
                            </div><!-- END CARD CONTENT -->
                        </div> <!-- END CARD -->
                    </div><!-- END COL -->
                </div><!--END  ROW -->
            </form>

        </div> <!-- END CONTAINER -->
    </div><!-- END Checkout Forms -->

    <div class="section bottom-sec">
        <div class="checkout-banner">
            <!--https://hd.unsplash.com/photo-1468743428993-661b9309fa2c-->
            <div class="banner-overlay">
                <div class="center-align">
                    <img height="256" width="256" src="/ASCapstoneProject/images/logos/logo.png" />
                    <p class="open-sans7 white-texxt chkout-co-name">Protech Solutions</p>
                </div>
            </div>
            <img class="checkout-bnr-img" src="/ASCapstoneProject/images/images/building-two.jpeg">
        </div>
    </div>
</main>
