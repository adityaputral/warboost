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





<div class="container youplay-store store-grid mt-0">

    <!-- Games List -->
    <div class="md-12 isotope">
        <!-- Sort Categories -->
        <ul class="pagination isotope-options">
            <li data-filter="all" class="active"><span>All</span></li>
            <li data-filter="CSGO"><span>CS:GO</span></li>
            <li data-filter="APEX"><span>Apex Legends</span></li>
            <li data-filter="DOTA"><span>Dota 2</span></li>
            <li data-filter="LOL"><span>League of Legends</span></li>
            <li data-filter="OW"><span>Overwatch</span></li>
            <li data-filter="RL"><span>Rocket League</span></li>
        </ul>
        <!-- /Sort Categories -->

        <div class="isotope-list row vertical-gutter">

        <?php foreach ($listBoosterCSGO as $booster) { ?>
                <div class="item col-lg-4 col-md-6 col-xs-12" data-filters="CSGO">
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
                </div>
            <?php } ?>

            <!-- /Single Product Block -->
        
            <?php foreach ($listBoosterAPEX as $booster) { ?>
                <div class="item col-lg-4 col-md-6 col-xs-12" data-filters="APEX">
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
                </div>
            <?php } ?>

            <!-- /Single Product Block -->

            <?php foreach ($listBoosterDOTA as $booster) { ?>
                <div class="item col-lg-4 col-md-6 col-xs-12" data-filters="DOTA">
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
                </div>
            <?php } ?>

            <!-- /Single Product Block -->

            <!-- /Single Product Block -->

            <?php foreach ($listBoosterLOL as $booster) { ?>
                <div class="item col-lg-4 col-md-6 col-xs-12" data-filters="LOL">
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
                </div>
            <?php } ?>

            <!-- /Single Product Block -->

            <!-- /Single Product Block -->

            <?php foreach ($listBoosterOW as $booster) { ?>
                <div class="item col-lg-4 col-md-6 col-xs-12" data-filters="OW">
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
                </div>
            <?php } ?>

            <!-- /Single Product Block -->

            <!-- Single Product Block -->

            <?php foreach ($listBoosterRL as $booster) { ?>
                <div class="item col-lg-4 col-md-6 col-xs-12" data-filters="RL">
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
                </div>
            <?php } ?>

            <!-- /Single Product Block -->


        </div>

    </div>

</div>