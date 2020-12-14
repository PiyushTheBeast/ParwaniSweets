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
    <div class="row">
        <div class="col-2">
            <h1>Stressed is Desserts <br>Spelled backwards!!</h1>
            <p>Handles Your Hunger so you can handle,<br> Well....Anything</p>
            <a href="" class = "btn">Explore Now &#8594;</a>
        </div>
        <div class="col-2">
            <img src="images/back.jpg">
        </div>
    </div>

<!-- Features -->
    <div class="categories">
        <div class="small-container">
        <div class="row">
            <div class="col-3">
                <img src="images/soan.jpg" width="300px" height="300px">
            </div>
            <div class="col-3">
                <img src="images/rass.jpg" width="300px" height="300px">
            </div>
            <div class="col-3">
                <img src="images/kaju.jpg" width="300px" height="300px">
            </div>
        </div>
    </div>
    </div>
<!-- Featured Products -->
    <div class="small-container">
        <h2 class="title">Featured Products</h2>
      <div class="row">
            <?php foreach($product_shuffle as $item){?>
                <div class="col-4" id="p1">
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

<!-- Testimonial -->

    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left" ></i>
                    <p>
                        Sweets are for every occasion!<br> 
                        Sweets are for family and friends!<br>
                         Sweets are for every festival and season!<br> 
                        Sweets are for good and bad times! May be that's why they say<br> 
                        "Mitha bandhan zindagi ka"! Completely justified!!!
                    </p>
                    <div class="rating">
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                   <h3>Gulshan Kumar</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left" ></i>
                    <p>
                        I love this place! Prices are reasonable and menu is vast.
                         Staff is friendly and quick to meet your needs!
                         Can't wait to come back for more!
                    </p>
                    <div class="rating">
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                   <h3>Aman Paul</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left" ></i>
                    <p>
                        If you are a sweets lover and looking for some popular 
                        sweet corners around the city then Parwani Sweets is a must try! 
                        They serve varieties of sweets from Rasmalai, Pan Sweet to Chocolate Barfi & Rosogulla,
                         each one being so mouth-watering
                        </p>
                    <div class="rating">
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                   <h3>Avani Singh</h3>
            </div>
        </div>
    </div>
</div>
    <!-- Footer -->
    <div class="footer" id="about">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download our app</h3>
                    <p>Download our app for adroid and ios</p>
                    <div class="app-logo">
                        <img src="images/icon.png">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="images/logo.jpg">
                    <p>Write motto here</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow us on</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright2020- Parwani Group</p>
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
    <script>
        function details() {
            location.replace("./productdetail.html");
        }
    </script>
</body>
</html>