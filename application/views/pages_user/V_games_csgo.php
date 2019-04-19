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
                
                
                    <h1 class="h1">Counter Strike : Global Offensive</h1>
                
                
                
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
            <li role="presentation"><a href="#winboost" aria-controls="profile" role="tab" data-toggle="tab">Win Boost</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="rankboost">
                Boost your CS:GO rank fast and easy.
                After we receive your payment, we will contact you via e-mail or live chat for further instructions
                <form>
                    <div class="form-group row">
                        <label class="control-label col-sm-2">Current rank : <span style="color: red">*</span></label>
                        <div class="col-sm-6">
                            <div class="youplay-select">
                                <select>
                                    <option>Silver 1</option>
                                    <option>Silver 2</option>
                                    <option>Silver 3</option>
                                    <option>Silver 4</option>
                                    <option>Silver Elite</option>
                                    <option>Silver Elite Master</option>
                                    <option>Gold Nova 1</option>
                                    <option>Gold Nova 2</option>
                                    <option>Gold Nova 3</option>
                                    <option>Gold Nova Master</option>
                                    <option>Master Guardian</option>
                                    <option>Master Guardian 2</option>
                                    <option>Master Guardian Elite</option>
                                    <option>Distinguished Master Guardian</option>
                                    <option>Legendary Eagle</option>
                                    <option>Legendary Eagle Master</option>
                                    <option>Supreme Master First Class</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-sm-2">Desired rank : <span style="color: red">*</span></label>
                        <div class="col-sm-6">
                            <div class="youplay-select">
                                <select>
                                    <option>Silver 1</option>
                                    <option selected>Silver 2</option>
                                    <option>Silver 3</option>
                                    <option>Silver 4</option>
                                    <option>Silver Elite</option>
                                    <option>Silver Elite Master</option>
                                    <option>Gold Nova 1</option>
                                    <option>Gold Nova 2</option>
                                    <option>Gold Nova 3</option>
                                    <option>Gold Nova Master</option>
                                    <option>Master Guardian</option>
                                    <option>Master Guardian 2</option>
                                    <option>Master Guardian Elite</option>
                                    <option>Distinguished Master Guardian</option>
                                    <option>Legendary Eagle</option>
                                    <option>Legendary Eagle Master</option>
                                    <option>Supreme Master First Class</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-sm-2">Choose your booster : <span style="color: red">*</span></label>
                        <div class="col-sm-6">
                            <div class="youplay-select">
                                <select>
                                    <option selected>Auto</option>
                                    <?php foreach ($listBooster as $booster){?>
                                        <option selected><?php echo $booster['ingame_nickname'];?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
                <h3>Price : $<span id="price">45</span><h3>
                <a class="btn btn-md" href="https://themeforest.net/item/youplay-game-template-based-on-bootstrap/11306207?ref=_nK"><i class="fa fa-shopping-cart"></i>&nbsp; Add to cart</a>
            </div>
            <div role="tabpanel" class="tab-pane" id="winboost">
                Our professional players can play for you or with you for wins. This is an excellent and safe way if you want to improve rank.
                <form>
                    <div class="form-group row">
                        <label class="control-label col-sm-2">Win : <span style="color: red">*</span></label>
                        <div class="col-sm-6">
                            <div class="youplay-select">
                                <select>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
                <a class="btn btn-md" href="https://themeforest.net/item/youplay-game-template-based-on-bootstrap/11306207?ref=_nK"><i class="fa fa-shopping-cart"></i>&nbsp; Add to cart</a>
            </div>
        </div>

    </div>
    <!-- /Tabs -->

</div>