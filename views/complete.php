<?php
$order = get_OrderDetails($db);
?>
<!-- MAIN -->
<main>
    <div class="container">
        <div class="row">
            <div class="center-align">
                <img height="256" width="256" src="images/logos/logo.png" alt="Logo"/>
            </div>
        </div>

        <div class="row">
            <div class="col s12 m12">
                <div class="card complete-card open-sans3">
                    <div class="card-content">
                        <div class="center-align">
                            <!-- Thank You Notice -->

                            <?php foreach($order as $cust): ?>
                            <h4>Thank you <?php echo $cust['fName'] ." " . $cust['lName']; ?>, for your purchase!</h4><br/>
                            <h6>Your order number is: <b><?php echo $cust['orderID']; ?></b></h6><br/>
                            <p class="open-sans4 order-paragraph">You will receive an email shortly with more
                                information regarding your purchase.
                                If you have any questions feel free to contact us through email, chat, or phone. You can
                                find this information
                                at the bottom of the page.</p><br/>
                        </div>

                        <div class="row">
                            <div class="col s12 m10 offset-m1">
                                <ul class="collapsible white" data-collapsible="accordion">
                                    <li>
                                        <div class="collapsible-header left-align active"><i class="material-icons">description</i>View
                                            Order Details
                                        </div>
                                        <div class="collapsible-body order-det-body">
                                            <div class="row">
                                                <div class="col s12 m5 offset-m1">
                                                    <div class="center-align" id="left-complete">
                                                        <h6 class="detail-title">Buyer Address</h6>
                                                        <ul>
                                                            <li><?php echo $cust['fName'] . " " . $cust['lName']; ?></li>
                                                            <li><?php echo $cust['address'] ." " . $cust['address2']; ?></li>
                                                            <li><?php echo $cust['city'] . ", " . $cust['state'] . " " . $cust['zip']?></li>
                                                            <li><?php echo $cust['country'] ?></li>
                                                            <li>Email: <?php echo $cust['email'] ?></li>
                                                            <li>Phone: <?php echo $cust['phoneNumber'] ?></li>
                                                        </ul>
                                                    </div>
                                                    <!-- Buyer Address -->
                                                </div>
                                                <div class="col s12 m5">
                                                    <div class="center-align" id="right-complete">
                                                        <!-- Product Details -->
                                                        <h6 class="detail-title">Product Details</h6>
                                                        <ul>
                                                            <li>Advanced EHR Suite</li>
                                                            <li>Quantity: 1</li>
                                                            <li>Order #: <?php echo $cust['orderID']; ?></li>
                                                            <li>Date: <?php
                                                                $dateTime = new DateTime('now', new DateTimeZone('America/New_York'));
                                                                echo $dateTime->format("m-d-Y  H:i A");
                                                                ?>
                                                            </li>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <div class="center-align">
                            <!-- .Executable File of EHR Application -->
                            <a class="btn btn-large waves-effect waves-light download-btn" href="/assets/PatientRecords.exe" download="AdvancedEHR">Download Program</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main> <!-- END MAIN -->


