<?php
require ("models/dbConn.php");
//require ("models/protechFunc.php");
include ("views/header.php");
include ("views/main.php");
include ("views/footer.php");
$action = $_REQUEST['action'];
if ( $action == NULL || empty($action)) :
    $action = '';
endif;
//switch ($action) :
//    case '':
//        include ("views/header.php");
//        include ("views/main.php");
//        include ("views/footer.php");
//        break;
//    case 'checkoutAjax':
//        include ("views/header.php");
//        include ("views/checkout.php");
//        include ("views/footer.php");
//        break;
//endswitch;
?>
