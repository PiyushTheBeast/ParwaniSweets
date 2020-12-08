<?php

// require MySQL Connection
require ('database/DBController.php');

// require Product Class
require ('database/product.php');

// require Cart Class
require ('database/cart.php');


// DBController object
$db = new DBController();

// Product object
$product = new Product($db);
$product_shuffle = $product->getData();

// Cart object
$Cart = new Cart($db );
