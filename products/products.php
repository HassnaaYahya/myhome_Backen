<?php

include "../connect.php";


$categoryid = filterRequest("id");

// getAllData("productsview", "categories_id = $categoryid");

$userid = filterRequest("usersid");



$stmt = $con->prepare("SELECT products1view.* , 1 as favorite FROM products1view 
INNER JOIN favorite ON favorite.favorite_productsid = products1view.products_id AND favorite.favorite_usersid = $userid
WHERE categories_id = $categoryid
UNION ALL 
SELECT *  , 0 as favorite  FROM products1view
WHERE  categories_id = $categoryid AND products_id NOT IN  ( SELECT products1view.products_id FROM products1view 
INNER JOIN favorite ON favorite.favorite_productsid = products1view.products_id AND favorite.favorite_usersid =  $userid  )");

$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
$count  = $stmt->rowCount();

if ($count > 0) {
    echo json_encode(array("status" => "success", "data" => $data));
} else {
    echo json_encode(array("status" => "failure"));
}
