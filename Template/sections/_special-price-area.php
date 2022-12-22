<?php 
  $brands = array_map(function($prod){ return $prod['item_brand'];}, $products);
  $unique= array_unique($brands);
  sort($unique);
//   print_r($unique);

if($_SERVER['REQUEST_METHOD']=="POST"){

    if(isset($_POST['special_price_cart_button'])){
        $Cart->addToCart($_POST['user_id'],$_POST['item_id']);
    }
    
  }

  $in_cart =$Cart->preventDuplicateCartItem($product->getData(table:'cart'));
?>

<section id="special-price" class="mt-5">
    <div class="container">
    <h4 class="font-rubik font-size-20">Special Price</h4>
    <hr>
    <div id="filters" class="button-group text-right font-rubik font-size-16">
        <button class="is-checked btn" data-filter="*">All Brands</button>
        <?php foreach ($unique as  $item) { ?>
            <button class="is-checked btn" data-filter=".<?php echo $item?>"><?php echo $item?></button>
        <?php } ?>
    </div>
    <div class="grid">
        <?php array_map(function($item) use($in_cart){?>
        <div class="grid-item border <?php echo $item['item_brand']?>">
            <div class="item py-2" style="width: 200px;">
                <div class="product font-rale">
                <a href="product.php?item_id=<?php echo $item['item_id']?>"><img class="img-fluid" src="<?php echo $item['item_image'] ?? "./assets/image/products/11.png";?> " alt="Product"></a>
                <div class="text-center">
                    <h6><?php echo $item['item_name']?></h6>
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
                    <span>$ <?php echo $item['item_price']?></span>
                    </div>
                    <form method="POST">
                       <input type="hidden" name="item_id" value="<?php echo $prod['item_id'] ?? 1?>"/>
                       <input type="hidden" name="user_id" value="1"/>
                       <?php
                          if(in_array($item['item_id'], $in_cart ?? [])){
                            echo '<button disabled class="btn btn-success font-size-12">Already in cart</button>';
                          }else{
                            echo '<button type="submit" name="top_sell_cart_button" class="btn btn-warning font-size-12">Add to cart</button>';
                          };
                       ?>
                    </form>
                </div>
                </div>
            </div>
        </div>
        <?php },$products) ?>
    </div>
</section>