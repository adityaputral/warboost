<div class="content-wrap">

    <!--
    Banner

    Additional classes:
        .small
        .xsmall
        .big
        .full
-->
    <section class="youplay-banner banner-top youplay-banner-parallax xsmall">

        <div class="image" data-speed="0.4">
            <img src="assets/images/dark/banner-blog-bg.jpg" alt="" class="jarallax-img">
        </div>


        <div class="info">
            <div>
                <div class="container">


                    <h1 class="h1">Checkout</h1>



                </div>
            </div>
        </div>
    </section>
    <!-- /Banner -->




    <div class="container youplay-content">

        <div class="col-md-9">
            <!-- Billing Information -->
            <h2 class="mt-0">Billing Details</h2>

            <form method="post" action="<?php echo base_url(); ?>test2">
                <div class="row">
                    <div class="col-md-6">
                        <p>Username account:</p>
                        <div class="youplay-input">
                            <input type="text" name="username_akun" placeholder="Username game account">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p>Password account:</p>
                        <div class="youplay-input">
                            <input type="password" name="password_akun" placeholder="Password game account">
                        </div>
                    </div>
                    <input type="hidden" id="str_var" name="cart" value="<?php print base64_encode(serialize($listCart)) ?>">;
                </div>

                <p>Additional Info:</p>
                <div class="youplay-textarea">
                    <textarea name="notes" rows="5" placeholder="Additional Info"></textarea>
                </div>
                <!-- /Billing Information -->


                <!-- Cart -->
                <h2>Your Boosting Cart</h2>

                <?php $total_price = 0.00;
                foreach ($listCart as $cart) { ?>

                    <!-- Single Product Block -->
                    <div class="item angled-bg">
                        <div class="row">
                            <div class="col-xs-6 col-md-9">
                                <h4 class="ml-20"><?php echo $cart['nama_boosting'] ?></h4>
                            </div>
                            <div class="col-xs-6 col-md-3 align-right">
                                <div class="price">
                                    $<?php echo $cart['price']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Single Product Block -->

                    <?php $total_price += $cart['price'];
                } ?>

                <div class="align-right h3 mr-20 mb-20">

                    Total: <strong>$<input type="text" id="total_price" name="total_price" style="color:white;border: none;background: transparent;width:8%" value="<?php echo $total_price; ?>" readonly></strong>
                </div>
                <!-- Cart -->

                <!-- Payment Type -->
                <h2>Payment Type</h2>
                
                    <?php $counter =0; foreach ($listPayment as $payment) { ?>
                        <div class="youplay-radio">
                            <input type="radio" name="payment_type" value="<?php echo $payment['id']; ?>" id="radio<?php echo $counter;?>">
                            <label for="radio<?php echo $counter;?>"><?php echo $payment['nama_payment']; ?></label>
                        </div>
                    <?php $counter++;} ?>
                
                
                <!-- /Payment Type -->


                <!-- Order Button -->
                <div class="align-right">
                    <button class="btn btn-lg" name="submit" <?php if (count($listCart) == 0) { echo "disabled"; }?>>Place Order</button>
                </div>
                <!-- /Order Button -->
            </form>


        </div>
    </div>