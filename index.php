<?php
require ("models/dbConn.php");
require ("models/protechFunc.php");
$action = $_REQUEST['action'];
if ($action == NULL || empty($action)):
    $action = '';
endif;
include_once ("views/header.php");
switch ($action) :
    case '':
        include ("views/main.php");
        break;
    case 'checkoutCart':
        // Once form button is clicked action = completePurchase
        //include ("views/test.php");
        include ("views/checkout.php");
        break;
    case 'completePurchase':
        $product = $_POST['product'];
        $fName = $_POST['fName'];
        $lName = $_POST['lName'];
        $address = $_POST['address'];
        $address2 = $_POST['address2'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zip = $_POST['zip'];
        $country = $_POST['country'];
        $phoneNumber = $_POST['phoneNumber'];
        $email = $_POST['email'];
        // Credit Card
        $ccType = $_POST['ccType'];
        $ccName = $_POST['ccName'];
        $ccNum = $_POST['ccNum'];
        $ccExpMo = $_POST['ccExpMo'];
        $ccExpYr = $_POST['ccExpYr'];
        $ccCCV = $_POST['ccCCV'];
        $orderID = order_Data($db, $product, $fName, $lName, $email);
        $customerID = order_custData($db, $orderID, $fName, $lName, $address, $address2, $city, $state, $zip, $country, $phoneNumber, $email);
        order_ccData($db, $customerID, $ccType, $ccNum, $ccName, $ccExpMo, $ccExpYr, $ccCCV);
        // Order Details
        $order = get_OrderDetails($db);
        // Completed Order Page
        include ("views/complete.php");
        break;
    case 'sendMessage':
        // Senders full name
        $fullName = $_POST['fullname'];
        // Senders phone number for contact
        $phone = $_POST['phonenumber'];
        // Senders email
        $emailFrom = $_POST['emailfrom'];
        // Message from sender
        $messageFrom = $_POST['messagefrom'];
        // To compnay email
        $to = 'protechsolutionsri@gmail.com';
        // Email body
        $body = 'Great website mister!'.$messageFrom;
        // Subject of email
        $subject = $fullName . '- Contacting from Protech Site';
        //Headers
        $headers = "MIME-Version 1.0\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8\r\n";
        $headers .= "From: <".$emailFrom.">";
        // PHP Mail function
        mail($to, $subject, $body, $headers);
        include ("views/main.php");
        break;
    case 'ajaxOrderComplete':
        include ("views/complete.php");
        break;
//    case 'checkoutAjax':
//        include ("views/header.php");
//        include ("views/checkout.php");
//        include ("views/footer.php");
//        break;
endswitch;
include_once ("views/footer.php");
?>