<?php
error_reporting(0);
include'./iPaymentsLib/config.php';
include'./iPaymentsLib/lib.php';
$id = $_GET["orderID"];
if(!isset($id)){
    echo'{"Status":"Failed","Message":"Use -> https://botroid.in/success.php?orderID=HereID"}';
    return;
}
$order_stat = "SELECT * FROM `ips_tbl_orders` WHERE `order_id`='$id'";
if($result = mysqli_query($connection, $order_stat)){
    if(!mysqli_num_rows($result) > 0){
    echo'{"Status":"Failed","Message":"Your Order Not Found"}'; 
    return;
    }
    $row = mysqli_fetch_array($result);
    $order_Id = $row["order_id"];
    $status = $row["status"];
    if(strtoupper($status)!="PENDING"){
    echo'{"Status":"Failed","Message":"Your Order Is Already In Databse And It Is '.$status.'"}';
    //For Protecting By Multiple Quantity
    return;    
    }    
    $order_status = checkOrder($id);
    if($order_status!="Success"){
        header("Location: https://secure-pay.i-payments.site/?orderID=$id");
        return;
    }
   $order_stat_update = "UPDATE `ips_tbl_orders` SET `status`='Success' WHERE `order_id`='$id'";
   if(mysqli_query($connection, $order_stat_update)){
    echo'{"Status":"Success","Message":"Your Order Is Successful"}';
     //Other Codes Here
    header("Location: ./");
   }
}
