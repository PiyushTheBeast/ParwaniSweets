<!-- Shopping cart section  -->
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset($_POST['delete-cart-submit'])){
            $deletedrecord = $Cart->deleteCart($_POST['id']);
        }
    }
?>
<div class="small-container cart-page">
            <h5 class="font-baloo font-size-20">Shopping Cart</h5>
                <?php
                    foreach ($product->getData('cart') as $item) :
                        $cart = $product->getProduct($item['id']);
                        $subTotal[] = array_map(function ($item){
                ?> 

            <table>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>SubTotal</th>
                </tr>
                <tr>
                    <td>
                        <div class="cart-info">
                        <img src="<?php echo $item['image'] ?? "./assets/products/1.png" ?>">
                            <div>
                                <p><?php echo $item['product_name'] ?? "Unknown"; ?></p>
                                <small>Price : <?php //echo $item['id'] ?? '0'; ?><?php echo $item['price'] ?? 0; ?></small><br>
                                <a href="">Remove</a>
                            </div>
                        </div>
                    </td>
                    <td><input type="number" value="1"></td>
                    <td>Rs<?php// echo $item['id'] ?? '0'; ?><?php echo $item['price'] ?? 0; ?></td>
                </tr>
        </table>
        <div class="qty d-flex pt-2"> 
            <form method="post">
                 <input type="hidden" value="<?php echo $item['id'] ?? 0; ?>" name="id">
               <button type="submit" name="delete-cart-submit" class="btn font-baloo text-danger px-3 border-right">Delete</button>
            </form>


        </div>
        <?php
        return $item['price'];
        }, $cart); // closing array_map function
        endforeach;
                ?>
                <div class="total-price">
                <table>
                    <tr>
                        <td>Subtotal</td>
                        <td><h3><?php echo isset($subTotal) ? count($subTotal) : 0; ?> items:&nbsp;Rs.<?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?></h3></td>
                        <td><button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button>
                    </tr>
                </table>
                </div>
        </div>
</div>

