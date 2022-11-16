   <?php 
   
  if($_SERVER['REQUEST_METHOD']=="POST"){

    if(isset($_POST['product_page_cart_button'])){
        $Cart->addToCart($_POST['user_id'],$_POST['item_id']);
    }
    
   }
     $item_id = $_GET['item_id'] ?? 1;
     foreach($product->getData() as $item) :
        if ($item['item_id'] == $item_id) :
   ?>
   
   <!-- Start product section  -->
    <section id="pdoduct-details">
        <div class="container py-4">
                <div class="row">
                <div class="col-sm-6 col-12">
                    <img  src="<?php echo $item['item_image'] ?? "./assets/image/products/11.png";?> " alt="Product Image" class="img-fluid">
                    <div class="form-row font-size-16 font-rubik">
                        <div class="col">
                            <button type="submit" class="btn btn-danger form-control">Procced to Buy</button>
                        </div>
                        <div class="col">
                        <form method="POST">
                            <input type="hidden" name="item_id" value="<?php echo $prod['item_id'] ?? 1?>"/>
                            <input type="hidden" name="user_id" value="1"/>
                            <button type="submit" name="product_page_cart_button" class="btn btn-warning font-size-12">Add to cart</button>
                        </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-12 py-5">
                    <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown"?></h5>
                    <small>by <?php echo $item['item_brand'] ?? "Unknown"?></small>
                    <div class="d-flex">
                        <div class="rating text-warning text-center font-size-12">
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star-half-o"></i></span>
                        </div>
                        <a class="font-rale px-2 font-size-14 color-secondary" href="">102+ Rating, 1112 Answers</a>
                    </div>
                    <hr class="m-0">
                    <!-- Product price  -->
                    <table class="my-3">
                        <tr class="font-rale font-size-14">
                            <td>M.R.P: </td>
                            <td><strike>$<?php echo $item['item_price'] ?></strike></td>
                        </tr>
                        <tr>
                            <td>Deal Price: </td>
                            <td class="font-size-20 text-danger">$<span><?php echo $item['item_price'] ?></span> <small class="text-dark font-size-12"> &nbsp; Inclusive of all taxes</small></td>
                        </tr>
                        <tr>
                            <td>You Save: </td>
                            <td class="font-size-20 text-danger">$<span>15.00</span></td>
                        </tr>
                    </table>
                    <div id="policy" class="d-flex">
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-secondary">
                            <span class="fa fa-retweet border rounded-pill p-3"></span>
                            </div>
                            <a class="color-secondary" href="">10 days <br> Return</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-secondary">
                            <span class="fa fa-truck border rounded-pill p-3"></span>
                            </div>
                            <a class="color-secondary" href="">3 days <br> Delivery</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-secondary">
                            <span class="fas fa fa-check-square-o border rounded-pill p-3"></span>
                            </div>
                            <a class="color-secondary" href="">1 Year <br> Warrenty</a>
                        </div>
                    </div>
                    <hr>
                    <div id="delivery-details" class="text-dark d-flex flex-column py-2">
                        <small class="mt-1">Delivered By : Mar 29 - Apr: 2</small>
                        <small class="mt-1">Sold By : <a href="">Rahman Electronics</a> (Rating: 4.5 Out of 5 | 1000+ rating)</small>
                        <small class="mt-1"><i class="fa fa-map-marker color-primary"></i> &nbsp; Deliver to customer #42232 </small>
                    </div>
                    <div class="row">
                        <div class="col-6 my-3">
                        <!-- Color  -->
                        <div class="d-flex justify-content-between">
                            <h6 class="font-baloo">Color</h6>
                            <div class="color-yellow-bg rounded-circle p-2"><button class="btn font-size-14"></button></div>
                            <div class="color-primary-bg rounded-circle p-2"><button class="btn font-size-14"></button></div>
                            <div class="color-secondary-bg rounded-circle p-2"><button class="btn font-size-14"></button></div>
                        </div>
                            
                        <!-- !Color  -->
                        </div>
                        <div class="col-6 mt-2">
                        <div class="d-flex">
                            <h6 class="font-rale">Qty</h6>
                            <div class="qty d-flex px-4">
                                <button data-id="prod3" class="qty_up border bg-light"><i class="fa fa-angle-up"></i></button>
                                <input data-id="prod3" type="text" class="qty_input px-1 bg-light border w-50 text-center" disabled value="1" placeholder="1">
                                <button data-id="prod3" class="qty_down border bg-light"><i class="fa fa-angle-down"></i></button>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- Vartiation  -->
                        <div class="size my-4">
                        <h6 class="font-rale font-size-16">Size :</h6>
                        <div class="d-flex justify-content-between mt-2 w-75">
                            <div class="font-rubic border p-2">
                            <button class="btn p-0 font-size-14">4GB RAM</button>
                            </div>
                            <div class="font-rubic border p-2">
                            <button class="btn p-0 font-size-14">6GB RAM</button>
                            </div>
                            <div class="font-rubic border p-2">
                            <button class="btn p-0 font-size-14">8GB RAM</button>
                            </div>
                        </div>
                        </div>
                    <!-- End Variation  -->
                </div>
                <div class="col-12">
                    <h6 class="font-rubic"> Product Description</h6>
                    <hr>
                    <p class="font-rale font-size-14">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, velit optio perspiciatis odit possimus nobis repudiandae cupiditate ipsa repellat nam, veniam repellendus, quaerat ullam! Minus culpa natus fugiat sed enim.
                    </p>
                    <p class="font-rale font-size-14">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, velit optio perspiciatis odit possimus nobis repudiandae cupiditate ipsa repellat nam, veniam repellendus, quaerat ullam! Minus culpa natus fugiat sed enim.
                    </p>
                    <p class="font-rale font-size-14">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, velit optio perspiciatis odit possimus nobis repudiandae cupiditate ipsa repellat nam, veniam repellendus, quaerat ullam! Minus culpa natus fugiat sed enim.
                    </p>
                </div>
                </div>
        </div>
    </section>

  <?php endif; endforeach;?>
    <!-- End product section  -->