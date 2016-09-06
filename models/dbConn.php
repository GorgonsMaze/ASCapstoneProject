<?php
$dsn = "mysql:host=localhost;dbname=protechdb";
$username = "protechy";
$pwd = "password";
try {
    $db = new PDO($dsn, $username, $pwd);
    echo "YOU GOT CONNECTED!";
} catch (PDOException $e) {
//    $error_msg = $e->getMessage();
//    echo $error_msg;
    exit("<br /><h4>Sorry, but we can't seem to connect right now. Try again in a little while!</h4>");
}