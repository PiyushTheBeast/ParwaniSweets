<!DOCTYPE html>
<html lang="en">
<head>
    <title>All Products-Parwani Sweets |Online Sweet shop </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <?php
    require('functions.php');
    ?>
    
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
<div class="navbar">
    <div class = "logo">
        <img src="images/logo1.jpg" width="200px">
    </div>
    <nav>
        <ul id="menuitems">
            <li><a href="index.php">Home</a></li>
            <li><a href="productlist.php">Products</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#about">Contact</a></li>
            <li><a href="">Account</a></li>
        </ul>
    </nav>
   <a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
    <img src="images/menu.png" class="menuicon" onclick="menutoggle()">
</div>
</div>
</body>