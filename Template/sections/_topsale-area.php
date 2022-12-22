<?php 

  shuffle($products);

  if($_SERVER['REQUEST_METHOD']=="POST"){

    if(isset($_POST['top_sell_cart_button'])){
        $Cart->addToCart($_POST['user_id'],$_POST['item_id']);
    }

  }
?>
<section id="top-sale">
    <div class="container">
        <h4 class="font-rubic font-size-20">Top sale</h4>
        <hr>
        <!-- Owl carosuel for product  -->
        <div class="owl-carousel owl-theme">
            <?php foreach($products as $prod){?>
            <div class="item py-2">
                <div class="product font-rale">
                    <a href="product.php?item_id=<?php echo $prod['item_id']?>"><img class="img-fluid" src="<?php echo $prod['item_image']?>" alt="<?php echo $prod['item_name']?>"></a>
                    <div class="text-center">
                    <h6><?php echo $prod['item_name']?></h6>
                    <div class="rating text-warning text-center font-size-12">
                        <span>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        </span>
                    </div>
                    <div class="price py-2">
                        <span><?php echo $prod['item_price']?></span>
                    </div>
                    <form method="POST">
                       <input type="hidden" name="item_id" value="<?php echo $prod['item_id'] ?? 1?>"/>
                       <input type="hidden" name="user_id" value="1"/>
                       <?php
                          if(in_array($prod['item_id'], $Cart->preventDuplicateCartItem($product->getData(table:'cart')) ?? [])){
                              echo '<button disabled class="btn btn-success font-size-12">Already in cart</button>';
                          }else{
                              echo '<button type="submit" name="top_sell_cart_button" class="btn btn-warning font-size-12">Add to cart</button>';
                          };
                      ?>
                    </form>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
        <!-- End owl carouel  -->
    </div>
</section>