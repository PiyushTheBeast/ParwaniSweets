<?php
    include ("header.php");
    ?>
    <?php 
    $product_shuffle = $product->getData();
    // request method post
    if($_SERVER['REQUEST_METHOD']=="POST"){
        // call method addtocart
        $Cart->addToCart($_POST['user_id'],$_POST['id']);
    }
    ?>
<!-- Featured Products -->
    <div class="small-container">
        <h2 class="title">All Products</h2>
      <div class="row">
            <?php foreach($product_shuffle as $item){?>
                <div class="col-4">
                    <a href="<?php printf('%s?id=%s', 'product.php', $item['id']); ?>"><img src="<?php echo $item['image']??"image/bundi.jpg";?>"></a>
                    <h4><?php echo $item['product_name']??"Unknown";?></h4>
                    <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o"></i>
                    </div>
                    <p>Rs.<?php echo $item['price']??"Unknown";?></p>
                    <form method="post">
                            <input type="hidden" name="id" value="<?php echo $item['id'] ?? '1'; ?>">
                            <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                            <?php
                            if (in_array($item['id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                                echo '<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button>';
                            }else{
                                echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                            }
                            ?>

                    </form>
                    
                    <!-- <button type="Add to cart" onclick="">Details</button> -->
                </div>
        <?php }?>
        </div>
    </div>

    <!-- js for toggle menu -->
    <script>
        var MenuItems= document.getElementById("menuitems");
        MenuItems.style.maxheight="0px";
        function menutoggle(){
            if(MenuItems.style.maxheight=="0px"){
                MenuItems.style.maxheight="200px"
            }
            else{
                MenuItems.style.maxheight="0px"
            }
        }
    </script>
<?php
    include ("footer.php");
    ?>
</body>
</html>