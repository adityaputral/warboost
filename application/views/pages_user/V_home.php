<div class="content-wrap">
        
            <!--
    Banner

    Additional classes:
        .small
        .xsmall
        .big
        .full
-->
<section class="youplay-banner banner-top youplay-banner-parallax">
    
        <div class="image" data-speed="0.4">
            <img src="assets/images/banner-bg.jpg" alt="" class="jarallax-img">
        </div>
    

    <div class="info">
        <div>
            <div class="container">
                
                
                
                    
    <h1>Warung Boosting </h1>
    <em>Quality Boosting in 5 Games with Various Features </em>
    <br><br><br>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
        Order
    </button>
</section>
<!-- /Banner -->

        

        
    <!--
            Carousel

            Additional classes:
                .youplay-carousel-size-1
                .youplay-carousel-size-2
                .youplay-carousel-size-3
                .youplay-carousel-size-4
                .youplay-carousel-size-5
                .youplay-carousel-size-6

            Additional attributes:
                data-autoplay
                data-loop
                data-dots
                data-arrows
                data-stage-padding
                data-item-padding
        -->
    <div class="youplay-carousel" data-autoplay="5000">
        <?php foreach ($listGame as $game){?>
            <a class="angled-img" href="games/<?php echo $game['abreviasi']; ?>">
                <div class="img">
                    <img src="<?php echo base_url();?>assets/images/games/<?php echo $game['path_logo'];?>" alt="">
                </div>
                <div class="over-info">
                    <div>
                        <div>
                            <h4><?php echo $game['nama_game']; ?></h4>
                        </div>
                    </div>
                </div>
            </a>
            
        <?php } ?>
    </div>
    <!-- /Images With Text -->


    <!-- Specials -->
    <h2 class="container h1">Booster <a href="<?php echo base_url();?>boosters" class="btn pull-right">See More</a></h2>
    <!--
        Carousel

        Additional classes:
            .youplay-carousel-size-1
            .youplay-carousel-size-2
            .youplay-carousel-size-3
            .youplay-carousel-size-4
            .youplay-carousel-size-5
            .youplay-carousel-size-6

        Additional attributes:
            data-autoplay
            data-loop
            data-dots
            data-arrows
            data-stage-padding
            data-item-padding
    -->
    <div class="youplay-carousel">
        <?php foreach ($listBooster as $booster){?>
            <a class="angled-img" href="store-product-1.html">
                <div class="img img-offset">
                    <img src="<?php echo base_url();?>assets/images/profile/booster/<?php echo $booster['path_profilpic'];?>" alt="">
                    <div class="badge bg-default">
                        <?php echo $booster['nama'];?>
                    </div>
                </div>
                <div class="bottom-info">
                    <h4><?php echo $booster['ingame_nickname'];?></h4>
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="rating">
                                <div class="rating-front" style="width: <?php echo $booster['rating']*20;?>%;">
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
                            <?php if($booster['keterangan'] == "Available"){ ?>
                                <div class="price"><span class="text-success">Available</span></div>
                            <?php } else if($booster['keterangan'] == "Not Available"){?>
                                <div class="price"><span class="text-danger">Not Available</span></div>
                            <?php } else{?>
                                <div class="price"><span class="text-warning"><i class="fas fa-stopwatch"></i>Working</span></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </a>
        <?php } ?>
    </div>
    <!-- /Specials -->


    <!-- Latest News -->
    <h2 class="container h1">Latest Boost</h2>
    <section class="youplay-news container">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <?php foreach ($list5LatestTransaksi as $trx){?>
                <!-- Single News -->
                <div class="angled-bg">
                    <div class="row">
                        <div class="col-md-3 col-xs-4">
                            <div class="angled-img">
                                <div class="img">
                                    <img src="<?php echo base_url();?>assets/images/games/<?php echo $trx['path_logo'];?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 col-xs-8">
                            <div class="row">
                                <div class="col-xs-6 col-md-9">
                                    <h4><a href="#" style="text-decoration:none"><?php echo $trx['nama_game'];?></a></h4>
                                    <div class="tags">
                                        <i class="fa fa-tags"></i> <?php echo $trx['nama_boosting']?>
                                    </div>
                                    <p>
                                        <?php echo $trx['username']?> boosted by <a href="#"><?php echo $trx['ingame_nickname']?></a>.
                                    </p>
                                </div>
                                <div class="col-xs-6 col-md-3 align-right">
                                    <div class="date">
                                        <i class="fa fa-calendar"></i> </i><?php echo $trx['tanggal']?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- /Single News -->
            <?php } ?>
        </div>
        <div class="col-md-2"></div>
    </section>
    <!-- /Latest News -->


    <!-- Partners -->
    <section class="youplay-banner youplay-banner-parallax small mt-80">
        <div class="image" data-speed="0.4">
            <img class="jarallax-img" src="<?php echo base_url();?>assets/images/banner-bg.jpg" alt="">
        </div>

        <div class="info align-center">
            <div>
                <h2 class="mb-40">Partners</h2>

                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <!--
                            Carousel

                            Additional classes:
                                .youplay-carousel-size-1
                                .youplay-carousel-size-2
                                .youplay-carousel-size-3
                                .youplay-carousel-size-4
                                .youplay-carousel-size-5
                                .youplay-carousel-size-6

                            Additional attributes:
                                data-autoplay
                                data-loop
                                data-dots
                                data-arrows
                                data-stage-padding
                                data-item-padding
                        -->
                        <div class="youplay-carousel youplay-carousel-size-6" data-autoplay="6000" data-arrows="false" data-stage-padding="0">
                            <a href="#"><img src="<?php echo base_url();?>assets/images/partners/partner_steam.png" alt="" style="color:white"></a>
                            <a href="#"><img src="<?php echo base_url();?>assets/images/partners/partner_garena.png" alt=""></a>
                            <a href="#"><img src="<?php echo base_url();?>assets/images/partners/partner_blizzard.png" alt=""></a>
                            <a href="#"><img src="<?php echo base_url();?>assets/images/partners/partner_riot.png" alt=""></a>
                            <a href="#"><img src="<?php echo base_url();?>assets/images/partners/partner_valve.png" alt=""></a>
                            <a href="#"><img src="<?php echo base_url();?>assets/images/partners/partner_ea.png" alt=""></a>
                            <a href="#"><img src="<?php echo base_url();?>assets/images/partners/partner_paypal.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Partners -->


    <!-- Features -->
    <h2 class="container h1">Why Order from Us</h2>
    <section class="youplay-features container">
        <div class="col-md-3 col-sm-6">
            <a class="feature angled-bg" href="#">
                <i class="fab fa-cc-visa"></i>
                <h3>Payment</h3>
                <small>More than 10 payment systems</small>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="feature angled-bg">
                <i class="fa fa-gamepad"></i>
                <h3>Games</h3>
                <small>A large number of games</small>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="feature angled-bg">
                <i class="far fa-money-bill-alt"></i>
                <h3>Cheap</h3>
                <small>Lowest prices on the Internet</small>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="feature angled-bg">
                <i class="fas fa-shield-alt"></i>
                <h3>Trusted</h3>
                <small>100% safe</small>
            </div>
        </div>
    </section>