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
    case 'Send-Message':
        $fullName = $_POST['full-name'];
        $phone = $_POST['phone-number'];
        $emailOf = $_POST['email-of'];
        $message = $_POST['message'];
        $to = 'protechsolutionsri@gmail.com';
        $subject = 'Hello Protech';
        $from = "From: $fullName";
        $body = "From: $fullName\n Phone Number: $phone\n Email: $emailOf\n Message: $message\n";
        if (!empty($_POST)) {
            mail($to, $subject, $body, $from);
        }
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