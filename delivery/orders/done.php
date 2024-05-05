<?php

include "../../connect.php";

$orderid = filterRequest("ordersid");

$userid = filterRequest("usersid");

$data = array(
    "orders_status" => 4
);

updateData("orders", $data, "orders_id = $orderid AND orders_status = 3");


insertNotify("success", "The Order has been approved # Thank you for used us app", $userid, "users$userid", "none",  "refreshorderpending");

// insertNotify("    شكرا على استخدامك لتطبيقنا ،ل نجحت ", " تم توصيل طلبك  ", $userid, "users$userid", "none",  "refreshorderpending");

 sendGCM("warning" , "The Order Has been delivered to customer " , "services", "none" , "none"); 
