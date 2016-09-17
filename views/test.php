<?php ?>

<main>
    <!-- CHECKOUT FORMS -->
    <div class="section checkout-section open-sans3">
        <div class="container">
            <!-- BEGIN FORM -->
            <form class="col s12" role="form" id="checkoutForm" method="POST" name="formCheckout" action="">
                <div class="row">
                    <div class="col s12 m8 l6 offset-m2 offset-l3" id="validateAnimate">
                        <ul class="collection with-header center-align">
                            <li class="collection-header" id="chk-collection-header"><img src="images/logos/logo.png" height="128" width="128"/><h4>Protech Checkout</h4></li>
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
                                            <input id="zipcode" placeholder="03543" type="text" name="zip"  pattern="^\d{5}(?:[-\s]\d{4})?$" title="Enter your zipcode ex.03246" class="validate" required="" aria-required="true">
                                            <label for="zipcode"><b>Zip</b></label>
                                        </div>
                                    </div>
                                    <!-- Country -->
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input value="United States" id="country" name="country" type="text" class="" readonly>
                                            <label for="country"><b>Country</b></label>
                                        </div>
                                    </div>
                                    <!-- PHONE -->
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <!-- CHECK VALIDATION ******************* ^[\d]{3}-[\d]{3}-[\d]{4}$  ^\d{10}$-->
                                            <input id="phone_number" placeholder="123-456-7890" type="text" name="phoneNumber" pattern="^[\d]{3}-[\d]{3}-[\d]{4}$" title="Enter your 10 digit phone number with dashes ex. 5082341233" class="validate" required="" aria-required="true">
                                            <label for="phone_number"><b>Phone</b></label>
                                        </div>
                                    </div>
                                    <!-- EMAIL -->
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <!-- placeholder="Name@yourdomain.com" -->
                                            <input  id="email_of" placeholder="example@yourdomain.com" type="text" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,4}$" title="Enter email address correctly" class="validate" required="" aria-required="true">
                                            <label for="email_of"><b>Email</b></label>
                                        </div>
                                    </div>
                                </div><!-- END ROW -->
                            </div><!-- END CARD CONTENT -->
                        </div> <!-- END CARD -->
                    </div><!-- END COL -->

                    <!-- CC FORM -->
                    <div class="col s12 m8 offset-m2 l6">
                        <!-- CARD -->
                        <div class="card chk-out-card">
                            <div class="card-content billing-content">
                                <div class="row">
                                    <h5 class="center-align">Credit Card Information</h5>
                                    <div class="require hide-on-small-only center-align">* All fields required</div><br />
                                </div>
                                <div class="row">
                                    <div class="row">
                                        <!-- Credit Card Type  -->
                                        <div class="input-field col s12">
                                            <select id="cc_type" title="Select a Card Type" name="ccType" type="select" class="validate" required="" aria-required="true">
                                                <option value="" disabled selected>Select a card</option>
                                                <?php
                                                $cards = array("AM" => "American Express", "DI" => "Discover", "MC" => "Mastercard", "VA" => "Visa");
                                                foreach($cards as $key => $val) { ?>
                                                    <option value="<?php echo $key; ?>"><?php echo $val; ?></option>
                                                <?php }?>
                                            </select>
                                            <label for="cc_type"><b>Credit Card</b></label>
                                        </div>
                                    </div>
                                    <!-- Credit Card Number -->
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="cc_number" placeholder="0000000000000000" type="text" name="ccNum" pattern="^[1-9][0-9]{11,15}$" title="Enter credit card number" class="validate" required="" aria-required="true">
                                            <label for="cc_number"><b>Card Number</b></label>
                                        </div>
                                    </div>
                                    <!-- Credit Card  Name-->
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="cc_name" placeholder="First Last" type="text" name="ccName" pattern="^[a-zA-Z'.,\s-]{2,50}$" title="Enter full name on card" class="validate" required="" aria-required="true">
                                            <label for="cc_name"><b>Card Name</b></label>
                                        </div>
                                    </div>
                                    <!-- Expiration Dates -->
                                    <div class="row">
                                        <!-- Month Expr -->
                                        <div class="input-field col s6">
                                            <select id="cc_month" title="Select a month" name="ccExpMo" type="select" class="validate" required="" aria-required="true">
                                                <option value="" disabled selected>Month</option>
                                                <?php
                                                $monthArray = array("01" => "01 - January", "02" => "02 - February", "03" => "03 - March", "04" => "04 - April", "05" => "05 - May", "06" => "06 - June", "07" => "07 - July", "08" => "08 - August", "09" => "09 - September", "10" => "10 - October", "11" => "11 -November", "12" => "12 - December");
                                                foreach($monthArray as $key => $val) { ?>
                                                    <option value="<?php echo $key; ?>"><?php echo $val;?></option>
                                                <?php } ?>
                                            </select>
                                            <label for="cc_month"><b>Month</b></label>
                                        </div>
                                        <!-- Year Expr -->
                                        <div class="input-field col s6">
                                            <select id="cc_year" title="Select a year" name="ccExpYr" type="select" class="validate" required="" aria-required="true">
                                                <option value="" disabled selected>Year</option>
                                                <?php
                                                $year = date('Y');
                                                for($y=$year; $y<$year+5; $y++) { ?>
                                                    <option value="<?php echo $y;?>"><?php echo $y; ?></option>
                                                <?php } ?>
                                            </select>
                                            <label for="cc_year"><b>Year</b></label>
                                        </div>
                                    </div>
                                    <!-- CCV Security Code -->
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input id="cc_ccv" placeholder="Ex: 121" type="text" name="ccCCV"  pattern="^[1-9][0-9]{2,3}$" title="Enter your CCV number (3 or 4 digits)" class="validate" required="" aria-required="true">
                                            <label for="cc_ccv"><b>CCV</b></label>
                                        </div>
                                        <div class="col s6">
                                            <div class="whats-CCV">
                                                <a class="chk-links tooltipped" data-position="bottom" data-delay="50" data-tooltip="CCV is the final 3 or 4 digits of the number printed on the back of your card" href="#!">What is this?</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- END ROW -->
                            </div><!-- END CARD CONTENT -->
                        </div> <!-- END CARD -->
                    </div><!-- END COL -->



                    <div class="col s12 m8 offset-m2 l6">
                        <!-- CARD -->
                        <div class="card chk-out-card">
                            <div class="card-content checkout-card-complete">
                                <div class="row">
                                    <div class="row complete-box">
                                        <h5 class="">Complete Order:</h5>
                                    </div>
                                    <div class="center-align tos" id="tocBox">
                                        <!--onchange="this.setCustomValidity(validity.valueMissing ? 'Please agree to the Terms of Service' : '');"-->
                                        <input type="checkbox" class="filled-in" name="terms" id="chk_termsOfService" title="Please agree to the terms of service" required="" aria-required="true" />
                                        <!-- TOS Modal Trigger -->
                                        <label for="chk_termsOfService"><a href="#tosModal" class="chk-links modal-trigger">Terms of Service</a></label>
                                    </div>
                                    <!-- Modal Structure -->
                                    <div id="tosModal" class="modal modal-fixed-footer">
                                        <div class="modal-content open-sans3 tos-contents">
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
                                            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" id="tosAgreeBtn">Agree</a>
                                        </div>
                                    </div>
                                    <!-- Purchase Button -->
                                    <div class="center-align">
                                        <button class="btn waves-effect waves-light" type="submit" name="action" value="completePurchase" id="chkOutBtn">Purchase
                                            <i class="material-icons right">send</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div><!--END  ROW -->
            </form>
        </div> <!-- END CONTAINER -->
    </div><!-- END Checkout Forms -->

    <div class="section bottom-sec">
        <div class="checkout-banner">
            <!--https://hd.unsplash.com/photo-1468743428993-661b9309fa2c-->
            <div class="banner-overlay">
                <div class="center-align">
                    <img height="256" width="256" src="images/logos/logo.png" />
                    <p class="open-sans7 white-texxt chkout-co-name">Protech Solutions</p>
                </div>
            </div>
            <img class="checkout-bnr-img" src="images/images/building-two.jpeg">
        </div>
    </div>
</main>
