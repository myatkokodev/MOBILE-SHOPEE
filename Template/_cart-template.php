<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(isset($_POST['delete-cart-submit'])){
            $deleterecord = $Cart->deleteCart($_POST['item_id']);
        }

        //save for later
        if(isset($_POST['wishlist-submit'])){
            $Cart->saveForLater($_POST['item_id']);
        }
    }
?>

            <!--shopping cart section-->

            <section id="cart" class="py-3">
                <div class="container-fluid w-75">
                    <h5 class="font-baloo font-size-20">Shopping Cart</h5>

                    <!--shopping cart item-->
                    <div class="row">
                        <div class="col-sm-9">

                        <?php  
                            
                            foreach($product->getData($table = 'cart') as $item):
                                $cart = $product->getProducts($item_id = $item['item_id']);
                                $subTotal[] = array_map(function($item){
                        ?>
                            <!--cart item-->
                            <div class="row border-top py-3 mt-3">
                                <div class="col-sm-2">
                                    <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png"; ?>" style="height: 120px;" alt="card1" class="img-fluid">
                                </div>
                                <div class="col-sm-8">
                                    <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                                    <small>by <?php echo $item['item_brand'] ?? "Brand"; ?></small>

                                    <!--product rating-->
                                    <div class="d-flex">
                                        <div class="rating text-warning font-size-12">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="far fa-star"></i></span>
                                        </div>
                                        <a href="#" class="font-rale font-size-14 px-2">20.534ratings</a>
                                    </div>
                                    <!--end product rating-->

                                    <!--product qty-->
                                    <div class="qty d-flex pt-2">
                                        <div class="d-flex font-rale w-25">
                                            <button class="qty-up border bg-light" data-id="<?php echo $item['item_id'] ?? 0; ?>"><i class="fas fa-angle-up"></i></button>
                                            <input type="text" data-id="<?php echo $item['item_id'] ?? 0; ?>" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                            <button class="qty-down border bg-light" data-id="<?php echo $item['item_id'] ?? 0; ?>"><i class="fas fa-angle-down"></i></button>
                                        </div>
                                        <form method="POST">
                                            <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                            <button type="submit" name="delete-cart-submit" class="btn font-baloo text-danger px-3 border-right" onclick="return confirm('Are you sure to delete?');">Delete</button>
                                        </form>

                                        <form method="POST">
                                            <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                            <button type="submit" name="wishlist-submit" class="btn font-baloo text-danger px-3">Save for later</button>
                                        </form>
                                        
                                        
                                    </div>
                                    <!-- end product qty-->
                                </div>
                                <div class="col-sm-2">
                                    <div class="font-baloo font-size-20 text-danger text-right">
                                        $<span class="product_price" data-id="<?php echo $item['item_id'] ?? 0; ?>"><?php echo $item['item_price'] ?? 0; ?></span>
                                    </div>
                                </div>
                            </div>
                            <!--end cart item-->

                        <?php
                            return $item['item_price'];
                            },$cart);
                            
                            endforeach;
                            
                            ?>
                        </div>
                        
                        <!--subtotal section-->
                        <div class="col-sm-3">
                            <div class="sub-total text-center border mt-2 py-3">
                                <h6 class="py-3 font-size-12 font-rale text-success"><i class="fas fa-check"></i> order is eligible for FREE Delivery.</h6>
                                <div class="border-top py-4"> 
                                    <h5 class="font-baloo font-size-16">
                                    subtotal (<?php echo isset($subTotal) ? count($subTotal): 0; ?>items) : &nbsp; <span class="text-danger">$ <span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?></span></span>
                                    </h5>
                                </div>
                                <button type="submit" class="btn btn-warning mt-2">Proceed To Cart</button>
                            </div>
                        </div>
                        <!--end subtotal section-->
                    </div>
                    <!--end shopping cart item-->
                </div>
            </section>
            <!--end shopping cart section-->