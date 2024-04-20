<?php 

include "connect.php" ; 

$alldata = array() ; 

$alldata['status'] = "success" ; 


$categories = getAllData("categories" , null , null , false )  ;

$alldata['categories'] = $categories ; 

$products = getAllData("products1view" , "products_discount != 0" , null , false )  ;

$alldata['products'] = $products ; 

 
echo json_encode($alldata) ;
