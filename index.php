<?php
require_once ("models/dbConn.php");
require_once ("models/protechFunc.php");

$action = $_REQUEST['action'];
include_once ("views/header.php");
if ( $action == NULL || empty($action)) :
    $action = '';
endif;
switch ($action) :
    case '':
        include ("views/main.php");
        break;
    case 'checkoutCart':
        //include ("views/test.php");
        include ("views/checkout.php");
        break;
    /*** Complete order ***/
    case 'completePurchase':
        // Customer Information
        $product = $_POST['ehrproduct'];
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
        break;
//    case 'checkoutAjax':
//        include ("views/header.php");
//        include ("views/checkout.php");
//        include ("views/footer.php");
//        break;
endswitch;
include_once ("views/footer.php");
?>
