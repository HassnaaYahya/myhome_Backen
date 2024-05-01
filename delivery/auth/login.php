<?php

include "../../connect.php";
 
$password = sha1("password");


$email = filterRequest("email"); 

getData("delivery" , "delivery_email = ? AND  delivery_password = ? AND delivery_approve = 1 " , array($email , $password)) ; 