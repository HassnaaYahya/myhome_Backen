<?php 

include "../connect.php" ; 


$usersid = filterRequest("usersid") ; 
$productsid = filterRequest("productsid") ; 


$data = array(
    "favorite_usersid"  =>   $usersid , 
    "favorite_productsid"  =>   $productsid
);


insertData("favorite" ,$data) ; 
