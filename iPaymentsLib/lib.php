<?php
function createOrder($amount,$accepted_currencys,$callback,$back_url,$private_key,$public_key){
$curl = curl_init(); 
 
curl_setopt_array($curl, array( 
    CURLOPT_URL => "https://secure-pay.i-payments.site/createOrder.php?amount=$amount&acceptedCurrencys=$accepted_currencys&callbackTYPE=$callback&callBackURL=$back_url&ownerPrivateKey=$private_key&ownerPublicKey=$public_key", 
    CURLOPT_RETURNTRANSFER => true, 
    CURLOPT_ENCODING => "", 
    CURLOPT_MAXREDIRS => 2, 
    CURLOPT_TIMEOUT => 10, 
    CURLOPT_FOLLOWLOCATION => true, 
    CURLOPT_CUSTOMREQUEST => "GET" 
    )); 
$response = curl_exec($curl); 
 
curl_close($curl);
$data = json_decode($response,true);
$status = $data["Status"];
if($status!="Success"){
$excep_error = $data["Message"];
throw new Exception("$excep_error");
return;
}
$orderId = $data["OrderID"];
return "$orderId";
}

function checkOrder($orderID){
$curl = curl_init(); 
 
curl_setopt_array($curl, array( 
    CURLOPT_URL => "https://secure-pay.i-payments.site/orderStatus.php?orderID=$orderID", 
    CURLOPT_RETURNTRANSFER => true, 
    CURLOPT_ENCODING => "", 
    CURLOPT_MAXREDIRS => 2, 
    CURLOPT_TIMEOUT => 10, 
    CURLOPT_FOLLOWLOCATION => true, 
    CURLOPT_CUSTOMREQUEST => "GET" 
    )); 
$response = curl_exec($curl); 
 
curl_close($curl);
$data = json_decode($response,true);
$status = $data["Status"];
if($status!="Success" || $status!="Pending"){
$excep_error = $data["Message"];
//throw new Exception("$excep_error");
return;
}
return "$status";
}
?>
