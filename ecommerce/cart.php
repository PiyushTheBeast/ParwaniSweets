 <?php 
 include("header.php");
 ?>
 <!-- Cart Item details -->
 <?php
  count($product->getData('cart')) ? include ('cart_template.php') :  include ('cart_not_found.php');
 ?>
<?php 
 include("footer.php");
 ?>
 