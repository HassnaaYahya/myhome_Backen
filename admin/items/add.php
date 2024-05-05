<?php

include "../../connect.php";

$msgError = array();

$table="items";

$name = filterRequest("name");
$namear = filterRequest("namear");
$desc = filterRequest("desc");
$descar = filterRequest("descar");
$count = filterRequest("count");
// $active = filterRequest("active"); يجب ان تكون دائما ظاهرة
$price = filterRequest("price");
$discount = filterRequest("discount");
$catid = filterRequest("catid");
//$datenow = filterRequest("datenow");
$datenow = date("Y-m-d H:i:s");

$imagename = imageUpload("../../upload/items","files");

$data=array(
    "items_name"     => $name ,
    "items_name_ar"  => $namear , 
    "items_desc"     => $desc , 
    "items_desc_ar"  => $descar , 
    "items_count"    => $count ,
    "items_active"   => 1 , 
    "items_price"    => $price , 
    "items_discount" => $discount ,
    "items_cat "     => $catid ,  
    "items_image"    => $imagename ,
    "items_date "    => $datenow 
);
insertData($table, $data);