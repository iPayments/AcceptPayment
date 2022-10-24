<?php
$site_orderSuccess_link = "https://example.com/success.php"; //Site Success Page
$host = "localhost"; //Host
$dbPass = "pass"; //DB Pass
$dbName = "name"; //DB Name
$dbuser = "user"; //DB UserName
$private_key = "key1"; //iPayments Developer Private Key
$public_key = "key2"; //iPayments Developer Public Key
$accepted_currency = "TRX"; //Payment Accepted Currencys
$callback = "redirect"; //Always Redirect
$connection = new mysqli($host, $dbuser, $dbPass, $dbName);
// Check connection
if ($connection->connect_error) {
die("Connection failed: " . $connection->connect_error);
}else{
//Nothing;
}
?>
