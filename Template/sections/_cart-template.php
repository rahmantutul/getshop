<?php 
  if($_SERVER['REQUEST_METHOD']=="POST"){
    
    if(isset($_POST['delete-cart-item'])){
       $record= $Cart->deleteCartItem($_POST['item_id']);
     }
  }
?>

<!-- Start cart section  -->
<section id="cart" class="py-4">
    <div class="container-fluid w-75">
        <h4 class="font-size-20 font-rubik">Sopping Cart</h4>
        <div class="row">
        <div class="col-sm-9">
            <?php foreach($product->getData('cart') as $cart): 
               $cart=$product->getSpecificData(itemId:$cart['item_id']);
               $subTotal[]= array_map(function($item){
            ?>
            <!-- cart item  -->
            <div class="row border-top py-3 mt-3">
                <div class="col-sm-2">
                    <img src="<?php echo $item['item_image'] ?? "./assets/image/products/11.png";?> " alt="Product Image" style="height:120px;" class="img-fluid">
                </div>
                <div class="col-sm-8">
                    <h5 class="font-rubik font-size-20"><?php echo $item['item_name']?></h5>
                    <small>by <?php echo $item['item_brand']?></small>
                    <div class="d-flex mt-2">
                        <div class="rating text-warning font-size-12">
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star-half-o"></i></span>&nbsp;&nbsp;
                        </div>
                        <a href="" class="px-2 font-rubic font-size-14 color-secondary"> 125 Rating this product</a>
                    </div>

                    <!-- qty button -->
                    <div class="d-flex mt-2">
                        <div class="qty d-flex">
                            <button class="qty_up border bg-light" data-id="<?php echo $item['item_id']?>"><i class="fa fa-angle-up"></i></button>
                            <input data-id="<?php echo $item['item_id']?>" type="text" class="qty_input px-1 bg-light border w-100 text-center" disabled value="1" placeholder="1">
                            <button data-id="<?php echo $item['item_id']?>" class="qty_down border bg-light"><i class="fa fa-angle-down"></i></button>
                        </div>
                        <form method="post">
                          <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?>"/>
                          <button name="delete-cart-item" class="btn border-right text-danger px-3">Delete</button>
                        </form>
                        
                        <button class="btn text-danger">Save for latter</button>
                    </div>
                    
                </div>
                <div class="col-sm-2 text-right">
                    <div class="font-rubic font-size-20 text-danger">
                     <strong>$ <?php echo $item['item_price']?></strong>
                    </div>
                </div>
            </div>
            <!-- End cart item  -->
            <?php 
               return $item['item_price'];
              }, $cart);
              endforeach; 
            ?>
        </div>
        <div class="col-sm-3 text-center">
            <div class="subtotal border mt-2">
                <h6 class=" text-success fon-size-16 font-rale py-3"><i class="fa fa-check"></i> Your order is eligible for Free </h6>
                <div class="border-top py-4">
                    <h5 class="font-rubik font-size-20">Subtotal (<?php echo isset($subTotal) ? count($subTotal) : 0; ?> Items) <span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0 ?></span></h5>
                    <button type="submit" class="btn btn-warning mt-3">Procced to Buy</button>
                </div>
            </div>
            
        </div>
        </div>
    </div>
</section>
<!-- End cart section  -->