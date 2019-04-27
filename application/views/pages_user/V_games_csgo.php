<div class="content-wrap">
        
            <!--
    Banner

    Additional classes:
        .small
        .xsmall
        .big
        .full
-->
<section class="youplay-banner banner-top youplay-banner-parallax small">
    
        <div class="image" data-speed="0.4">
            <img src="<?php echo base_url(); ?>assets/images/banner-csgo.jpeg" alt="" class="jarallax-img">
        </div>
    

    <div class="info">
        <div>
            <div class="container">
                
                
                    <h1 class="h1">Counter Strike:Global Offensive</h1>
                
                
                
            </div>
        </div>
    </div>
</section>
<!-- /Banner -->

<div class="container youplay-content">

    <!-- Tabs -->
    <h2 class="h1 mt-0">Services</h2>
    <div role="tabpanel">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#rankboost" aria-controls="home" role="tab" data-toggle="tab">Rank Boost</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="rankboost">
                Boost your CS:GO rank fast and easy.
                After we receive your payment, we will contact you via e-mail or live chat for further instructions
                <form method="post" action="<?php echo base_url();?>addToCart">
                    <input type="text" value="11" name="tipe_boosting" id="tipe_boosting" hidden>
                    <input type="text" value="5" name="game" id="id_game" hidden>

                    
                    <div class="form-group row">
                        <label class="control-label col-sm-2">Current rank : <span style="color: red">*</span></label>
                        <div class="col-sm-6">
                            <div class="youplay-select">
                                <select name="current_rank" id="current_rank">
                                    <?php foreach ($listRank as $rank){?>
                                        <option data-currentRank="<?php echo $rank['id_rank'];?>" value="<?php echo $rank['id_rank'];?>"><?php echo $rank['rank'];?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-sm-2">Desired rank : <span style="color: red">*</span></label>
                        <div class="col-sm-6">
                            <div class="youplay-select">
                                <select name="desired_rank" id="desired_rank">
                                    <?php foreach ($listRank as $rank){?>
                                        <option data-desiredRank="<?php echo $rank['id_rank'];?>" value="<?php echo $rank['id_rank'];?>"><?php echo $rank['rank'];?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-sm-2">Choose your booster : <span style="color: red">*</span></label>
                        <div class="col-sm-6">
                            <div class="youplay-select">
                                <select name="booster" id="booster">
                                    <?php foreach ($listBooster as $booster){?>
                                        <option value="<?php echo $booster['id_booster'];?>"><?php echo $booster['ingame_nickname'];?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div id="pricing"></div>
                    <button class="btn btn-sm ml-0 mr-0" name="submit" id="add_cart"><i class="fa fa-shopping-cart"></i>&nbsp; Add to cart</button>
                </form>

                
                
                <!-- <a class="btn btn-md" href="https://themeforest.net/item/youplay-game-template-based-on-bootstrap/11306207?ref=_nK"><i class="fa fa-shopping-cart"></i>&nbsp; Add to cart</a> -->
            </div>
        </div>

    </div>
    <!-- /Tabs -->

</div>