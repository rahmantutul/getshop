<?php

require("database/Database.php");
require("classes/Product.php");
require("classes/Cart.php");


$db = new DBController();

$product = new Product($db);
$products = $product->getData();
$Cart = new Cart($db);
