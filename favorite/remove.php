<?php 

include "../connect.php" ; 

$usersid = filterRequest("usersid") ; 
$productsid = filterRequest("productsid") ; 

deleteData("favorite" , "favorite_usersid = $usersid AND favorite_productsid = $productsid") ; 
