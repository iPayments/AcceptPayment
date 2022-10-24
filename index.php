<?php
include'./iPaymentsLib/config.php';
include'./iPaymentsLib/lib.php';
//Your Other Code
$order_ID = createOrder("2",$accepted_currency,$callback,$site_orderSuccess_link,$private_key,$public_key);
$new_order = "INSERT INTO `ips_tbl_orders`(`order_id`, `status`, `order_for`, `amount`) VALUES ('$order_ID','Pending','cloudMini','2')";
if(mysqli_query($connection, $new_order)){
header("Location: https://secure-pay.i-payments.site/?orderID=$order_ID");
}
//You Can Use It Like Form POST
/*Example :
if(isset($_POST['parameter'])){
//Code
}
*/
?>
