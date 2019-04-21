<section class="youplay-banner banner-top youplay-banner-parallax xsmall">

    <div class="image" data-speed="0.4">
        <img src="assets/images/banner-bg.jpg" alt="" class="jarallax-img">
    </div>


    <div class="info">
        <div>
            <div class="container">

                <h1 class="h1">Warung Boosting</h1>

            </div>
        </div>
    </div>
</section>

<div class="container youplay-news news-grid">
    <h2 class="h2" align="center">Boosters Lists</h2>
    <!-- News List -->

    <div class="youplay-carousel">
        <?php foreach ($listBooster as $booster) { ?>
            <a class="angled-img" href="store-product-1.html">
                <div class="img img-offset">
                    <img src="<?php echo base_url(); ?>assets/images/profile/booster/<?php echo $booster['path_profilpic']; ?>" alt="">
                    <div class="badge bg-default">
                        <?php echo $booster['nama']; ?>
                    </div>
                </div>
                <div class="bottom-info">
                    <h4><?php echo $booster['ingame_nickname']; ?></h4>
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="rating">
                                <div class="rating-front" style="width: <?php echo $booster['rating'] * 20; ?>%;">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="rating-back">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <?php if ($booster['keterangan'] == "Available") { ?>
                                <div class="price"><span class="text-success">Available</span></div>
                            <?php } else if ($booster['keterangan'] == "Not Available") { ?>
                                <div class="price"><span class="text-danger">Not Available</span></div>
                            <?php } else { ?>
                                <div class="price"><span class="text-warning"><i class="fas fa-stopwatch"></i>Working</span></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </a>
        <?php } ?>
    </div>
    <!-- /Single News Block -->
</div>
<!-- /News List -->
</div>