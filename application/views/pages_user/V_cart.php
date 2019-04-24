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


                    <h1 class="h1">Cart</h1>



                </div>
            </div>
        </div>
    </section>
    <!-- /Banner -->




    <div class="container youplay-content">

        <div class="col-md-12">

            <?php if (count($listCart) > 0) { ?>
                <?php $total_price = 0.00; foreach ($listCart as $cart) { ?>
                    <h2 class="mt-0">Your Boosting Order in Cart</h2>
                    <!-- Single Product Block -->
                    <div class="item angled-bg">
                        <div class="row">
                            <div class="col-lg-2 col-md-3 col-xs-4">
                                <div class="angled-img">
                                    <div class="img">
                                        <img src="assets/images/dark/game-skyrim-500x375.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-9 col-xs-8">
                                <div class="row">
                                    <div class="col-xs-6 col-md-9">
                                        <h4><?php echo $cart['nama_boosting']?></h4>
                                    </div>
                                    <div class="col-xs-6 col-md-3 align-right">
                                        <div class="price">
                                            $<?php echo $cart['price'];?>
                                        </div>
                                        <a href="<?php echo base_url();?>removeItem/<?php echo $cart['id_cart'];?>" class="remove">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Single Product Block -->
                <?php $total_price+=$cart['price']; } ?>
                <div class="align-right h3 mr-20 mb-20">
                    Total: <strong>$<?php echo $total_price; ?></strong>
                </div>
                <div class="align-right">
                    <a href="<?php echo base_url(); ?>checkout" class="btn btn-lg">Proceed to Checkout</a>
                </div>
            <?php } else { ?>
                <h1> There is no item in cart.</h1>
            <?php } ?>

            
        </div>

    </div>

</div>