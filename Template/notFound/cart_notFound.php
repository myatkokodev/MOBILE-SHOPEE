
            <!--shopping cart section-->

            <section id="cart" class="py-3">
                <div class="container-fluid w-75">
                    <h5 class="font-baloo font-size-20">Shopping Cart</h5>

                    <!--shopping cart item-->
                    <div class="row">
                        <div class="col-sm-9 text-center my-2">
                            <!--Empty Cart-->
                            <div class="row border-top py-3 mt-3">
                                <div class="col-sm-12">
                                    <img src="./assets/blog/empty_cart.png" alt="Empty Cart" class="img-fluid" style="height:200px">
                                    <p class="font-baloo font-size-16 text-black-50">Empty Cart</p>
                                </div>
                            </div>
                            <!--End Empty Cart-->
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