<?php

require("../database/Database.php");
require("../classes/Product.php");


$db = new DBController();

$products = new Product($db);

if(isset($_POST['itemId'])){
    $product = $products->getSpecificData($_POST['itemId']);
    echo json_encode($product);
}

