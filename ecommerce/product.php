<?php
    include ("header.php");
?>
<?php
    $item_id = $_GET['id']??1;
    foreach($product->getData()as$item):
        if($item['id'] == $item_id):
?>
<div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="<?php echo $item['image']?>">
            </div>
            <div class="col-2">
                <p>Home/Sweets</p>
                <h1><?php echo $item['product_name']??"Unknown";?></h1>
                <select>
                <option >500g (Rs(<?php echo $item['price'];?>))</option>
                    <option>1kg (Rs(<?php echo $item['price']*2;?>))</option>
                    <option>2kg (Rs(<?php echo $item['price']*4;?>))</option>
                </select>
                <a href="" class="btn">Add To cart</a>
            </div>
        </div>
        <h4>Related Products</h4>             
        <div class="row">
            <div class="col-4">
                <img src="images/bundi.jpg">
                <h4>Bundi Ke Laddu (400g)</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs.300</p>
            </div>
            <div class="col-4">
                <img src="images/coconut.jpg" height="150px">
                <h4>Coconut Barfi (400g)</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>Rs.350</p>
            </div>
            <div class="col-4">
                <img src="images/khorak.jpg" height="150px">
                <h4>Korak (400g)<br>[Sindhi Special]</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <p>Rs.400</p>
            </div>
            <div class="col-4">
                <img src="images/balushahi.jpg">
                <h4>Balushahi (1kg)</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <p>Rs.160</p>
            </div>
        </div>
    </div>
</div>
<?php
    include ("footer.php");
    ?>

    <?php 
    endif;
    endforeach;
    ?>