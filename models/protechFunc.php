<?php /** Protech Solutions Functions */

/**  Order Data Function
 * @param $db
 * @param $product
 * @param $fName
 * @param $lName
 * @param $email
 * @return mixed
 */
function order_Data($db, $product, $fName, $lName, $email) {
    try {
        $sql = "INSERT INTO orders SET product = :product, fName = :fName, lName = :lName, email = :email";
        $ps = $db->prepare($sql);
        $ps->bindValue(':product', $product);
        $ps->bindValue(':fName', $fName);
        $ps->bindValue(':lName', $lName);
        $ps->bindValue(':email', $email);
        $ps->execute();
        return $db->lastInsertId();

    } catch (PDOException $e) {
        die("Sorry, There was a problem order table.");
    }
}

/**  Customer Purchase Information Function
 * @param $db
 * @param $orderID
 * @param $fName
 * @param $lName
 * @param $address
 * @param $address2
 * @param $city
 * @param $state
 * @param $zip
 * @param $country
 * @param $phoneNumber
 * @param $email
 * @return mixed
 */
function order_custData($db, $orderID , $fName, $lName, $address, $address2, $city, $state, $zip, $country, $phoneNumber, $email) {
    try {
        $sql = "INSERT INTO customers SET  orderID = :orderID, fName = :fName, lName = :lName, address = :address, address2 = :address2,city = :city, state = :state, zip = :zip, country = :country, phoneNumber = :phoneNumber, email = :email";
        $ps = $db->prepare($sql);
        $ps->bindValue(':orderID', $orderID); // Foreign key from orders table
        $ps->bindValue(':fName', $fName);
        $ps->bindValue(':lName', $lName);
        $ps->bindValue(':address', $address);
        $ps->bindValue(':address2', $address2);
        $ps->bindValue(':city', $city);
        $ps->bindValue(':state', $state);
        $ps->bindValue(':zip', $zip);
        $ps->bindValue(':country', $country);
        $ps->bindValue(':phoneNumber', $phoneNumber);
        $ps->bindValue(':email', $email);
        return $ps->execute();
    } catch (PDOException $e) {
        die("Sorry, There was a problem with the customer table!");
    }
}

//$product = $_POST['product'];
//$fName = $_POST['fName'];
//$lName = $_POST['lName'];
//$address = $_POST['address'];
//$address2 = $_POST['address2'];
//$city = $_POST['city'];
//$state = $_POST['state'];
//$zip = $_POST['zip'];
//$country = $_POST['country'];
//$phoneNumber = $_POST['phoneNumber'];
//$email = $_POST['email'];

/**  Function for sending Customer Credit Card Information **/
/**
 * @param $db
 * @param $ccType
 * @param $ccNum
 * @param $ccName
 * @param $ccExpMo
 * @param $ccExpYr
 * @param $ccCCV
 * @return mixed
 */
function order_ccData($db, $ccType, $ccNum, $ccName, $ccExpMo, $ccExpYr, $ccCCV) {
    try {
        $sql = "INSERT INTO ccdata SET  ccType = :ccType, ccNum = :ccNum,  ccName = :ccName, ccExpMo = :ccExpMo, ccExpYr = :ccExpYr, ccCCV = :ccCCV";
        $ps = $db->prepare($sql);
        $ps->bindValue(':ccType', $ccType);
        $ps->bindValue(':ccNum', $ccNum);
        $ps->bindValue(':ccName', $ccName);
        $ps->bindValue(':ccExpMo', $ccExpMo);
        $ps->bindValue(':ccExpYr', $ccExpYr);
        $ps->bindValue(':ccCCV', $ccCCV);
        return $ps->execute();
    } catch (PDOException $e) {
        die("There was a problem with add query.");
    }
}

/** Function for getting purchase information **/
function get_OrderDetails() {

}

/** Function to get Contact Form Information **/
function contact_Us() {

}
/** Function to get states **/
function get_States($db) {
    $sql = "SELECT * FROM states ORDER BY name";
    try {
        $ps = $db->prepare($sql);
        $ps->execute();
        $results = $ps->fetchALL(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        exit("There was a problem with populating the states");
    }
    return $results; // returns the results of the sql query
}
?>