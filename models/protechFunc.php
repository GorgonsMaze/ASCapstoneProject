<?php
/** Protech Solutions MySQL Functions */

/** Function for sending Purchase information */
function order_Complete($db) {

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





























