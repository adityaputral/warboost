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
            <img src="<?php echo base_url(); ?>assets/images/banner-<?php echo $tipeBoosting[0]['abreviasi'];?>.png" alt="" class="jarallax-img">
        </div>
    

    <div class="info">
        <div>
            <div class="container">
                
                
                    <h1 class="h1"><?php echo $tipeBoosting[0]['nama_game'];?></h1>
                
                
                
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
                    <?php foreach ($tipeBoosting as $tipeBoost){?>
                        <?php if ($tipeBoost['jenis_boost'] == 0){?>
                            <li role="presentation" class="active"><a href="#rankboost" aria-controls="home" role="tab" data-toggle="tab">Rank Boost</a></li>
                        <?php } else if($tipeBoost['jenis_boost'] == 1){ ?>
                            <li role="presentation"><a href="#levelboost" aria-controls="home" role="tab" data-toggle="tab">Level Boost</a></li>
                        <?php } else if($tipeBoost['jenis_boost'] == 2){?>
                            <li role="presentation" class="active"><a href="#winboost" aria-controls="home" role="tab" data-toggle="tab">Win Boost</a></li>
                        <?php } ?>
                    <?php } ?>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <?php foreach ($tipeBoosting as $tipeBoost){?>
                        <?php if ($tipeBoost['jenis_boost'] == 0){?>
                            <div role="tabpanel" class="tab-pane active" id="rankboost">
                                Boost your <?php echo $listRank[0]['nama_game'];?> rank fast and easy.
                                After we receive your payment, we will contact you via e-mail or live chat for further instructions
                                <form method="post" action="<?php echo base_url();?>addToCart">
                                    <input type="text" value="<?php echo $tipeBoost['id_tipeboosting'];?>" name="tipe_boosting" id="tipe_boosting" hidden>
                                    <input type="text" value="<?php echo $tipeBoost['id_game'];?>" name="game" id="id_game" hidden>
                                    <input type="text" value="<?php echo $tipeBoost['jenis_boost'];?>" name="jenis_boost" id="jenis_boost" hidden>

                                    
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
                                    <div id="pricing_rank"></div>
                                    <button class="btn btn-sm ml-0 mr-0" name="submit" id="add_cart"><i class="fa fa-shopping-cart"></i>&nbsp; Add to cart</button>
                                </form>

                                
                                
                                <!-- <a class="btn btn-md" href="https://themeforest.net/item/youplay-game-template-based-on-bootstrap/11306207?ref=_nK"><i class="fa fa-shopping-cart"></i>&nbsp; Add to cart</a> -->
                            </div>
                        <?php } else if($tipeBoost['jenis_boost'] == 1){ ?>
                            <div role="tabpanel" class="tab-pane" id="levelboost">
                                Boost your <?php echo $tipeBoost['nama_game'];?> level fast and easy.
                                After we receive your payment, we will contact you via e-mail or live chat for further instructions
                                <form method="post" action="<?php echo base_url();?>addToCart">
                                    <input type="text" value="<?php echo $tipeBoost['id_tipeboosting'];?>" name="tipe_boosting" id="tipe_boosting" hidden>
                                    <input type="text" value="<?php echo $tipeBoost['id_game'];?>" name="game" id="id_game" hidden>
                                    <input type="text" value="<?php echo $tipeBoost['jenis_boost'];?>" name="jenis_boost" id="jenis_boost" hidden>

                                    
                                    <div class="form-group row">
                                        <label class="control-label col-sm-2">Current level : <span style="color: red">*</span></label>
                                        <div class="col-sm-6">
                                            <div class="youplay-input">
                                                <input type="number" name="current_level" id="current_level" placeholder="Current level" min="1" max="100" value="1">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label col-sm-2">Desired level : <span style="color: red">*</span></label>
                                        <div class="col-sm-6">
                                            <div class="youplay-input">
                                                <input type="number" id="desired_level" name="desired_level" placeholder="Desired level" min="1" max="100" value="2">
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
                                    <div id="pricing_level"></div>
                                    <button class="btn btn-sm ml-0 mr-0" name="submit" id="add_cart"><i class="fa fa-shopping-cart"></i>&nbsp; Add to cart</button>
                                </form>

                                
                                
                                <!-- <a class="btn btn-md" href="https://themeforest.net/item/youplay-game-template-based-on-bootstrap/11306207?ref=_nK"><i class="fa fa-shopping-cart"></i>&nbsp; Add to cart</a> -->
                            </div>
                        <?php } else if($tipeBoost['jenis_boost'] == 2){?>
                            <div role="tabpanel" class="tab-pane active" id="winboost">
                                Boost your <?php echo $listWin[0]['nama_game'];?> win fast and easy.
                                After we receive your payment, we will contact you via e-mail or live chat for further instructions
                                <form method="post" action="<?php echo base_url();?>addToCart">
                                    <input type="text" value="<?php echo $tipeBoost['id_tipeboosting'];?>" name="tipe_boosting" id="tipe_boosting" hidden>
                                    <input type="text" value="<?php echo $tipeBoost['id_game'];?>" name="game" id="id_game" hidden>
                                    <input type="text" value="<?php echo $tipeBoost['jenis_boost'];?>" name="jenis_boost" id="jenis_boost" hidden>

                                    
                                    <div class="form-group row">
                                        <label class="control-label col-sm-2">Total Win : <span style="color: red">*</span></label>
                                        <div class="col-sm-6">
                                            <div class="youplay-select">
                                                <select name="total_win" id="total_win">
                                                    <?php foreach ($listWin as $win){?>
                                                        <option data-totalWin="<?php echo $win['id_win'];?>" value="<?php echo $win['id_win'];?>"><?php echo $win['jumlah_win'];?></option>
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
                                    <div id="pricing_win"></div>
                                    <button class="btn btn-sm ml-0 mr-0" name="submit" id="add_cart"><i class="fa fa-shopping-cart"></i>&nbsp; Add to cart</button>
                                </form>

                                
                                
                                <!-- <a class="btn btn-md" href="https://themeforest.net/item/youplay-game-template-based-on-bootstrap/11306207?ref=_nK"><i class="fa fa-shopping-cart"></i>&nbsp; Add to cart</a> -->
                            </div>
                        <?php } ?>
                        
                    <?php } ?>
                    
                </div>
        

    </div>
    <!-- /Tabs -->

</div>