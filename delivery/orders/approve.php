<?php

include "../../connect.php";

$orderid = filterRequest("ordersid");

$userid = filterRequest("usersid");

$deliveryid = filterRequest("deliveryid");


$data = array(
    "orders_status" => 3 ,
    "orders_delivery"=> $deliveryid
);

updateData("orders", $data, "orders_id = $orderid AND orders_status = 2");


insertNotify("success", "The Order is on the way", $userid, "users$userid", "none",  "refreshorderpending");

// insertNotify("نجحت ", "  طلبك على الطريق  ", $userid, "users$userid", "none",  "refreshorderpending");

 sendGCM("warning" , "The Order Has been Approved by delivery" , "services", "none" , "none"); 

 sendGCM("warning" , "The Order Has been Approved by delivery ".$deliveryid , "delivery", "none" , "none"); 
