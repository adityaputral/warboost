<section class="youplay-banner banner-top youplay-banner-parallax small">

    <div class="image" data-speed="0.4">
        <img src="http://localhost/warboost/assets/images/banner-bg.jpg" alt="" class="jarallax-img">
    </div>


    <div class="youplay-user-navigation">
        <div class="container">
            <ul>
                <li><a href="<?php echo base_url(); ?>users/activity">Activity</a></li>
                <li><a href="<?php echo base_url(); ?>users/profile">Profile</a></li>
                <li class="active"><a href="<?php echo base_url(); ?>users/settings">Settings</a></li>
            </ul>
        </div>
    </div>

    <div class="info">
        <div>
            <div class="container youplay-user">
                <a href="http://localhost/warboost/assets/images/profile/gamers.jpg" class="angled-img image-popup">
                    <div class="img">
                        <img src="http://localhost/warboost/assets/images/profile/gamers.jpg" alt="">
                    </div>
                    <i class="fa fa-search-plus icon"></i>
                </a>
                <div class="user-data">
                    <h2><?php echo $this->session->userdata('username') ?></h2>
                    <div class="activity">
                    <!--
                       <div>
                            <div class="num"><?php //echo $booster; ?></div>
                            <div class="title">Boosters</div>
                        </div>
                        <div>
                            <div class="num"><?php //echo $gamesBoosted; ?></div>
                            <div class="title">Games Boosted</div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Banner -->




<div class="container youplay-content">

    <div class="row">

        <div class="col-md-9">

            <h2></h2>
            <ul class="pagination pagination-sm mt-0">
                <li class="active">
                    <a href="#unam">Username</a>
                </li>
                <li>
                    <a href="#nam">Name</a>
                </li>
                <li>
                    <a href="#em">E-mail</a>
                </li>
                <li>
                    <a href="#pass">Password</a>
                </li>
            </ul>

            <form action="">
                <h3 id="unam">Username</h3>
                <div class="form-horizontal mt-30 mb-40">
                    <div class="form-group">
                        <label class="control-label col-sm-2">Current Username:</label>
                        <div class="col-sm-10">
                            <?php echo $this->session->userdata('username') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="new_email">New Username:</label>
                        <div class="col-sm-10">
                            <div class="youplay-input">
                                <input type="email" id="new_email" placeholder="New Username">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Change Username</button>
                        </div>
                    </div>
                </div>

                <h3 id="nam">Name</h3>
                <div class="form-horizontal mt-30 mb-40">
                    <div class="form-group">
                        <label class="control-label col-sm-2">Current Name:</label>
                        <div class="col-sm-10">
                            <?php echo $this->session->userdata('nama') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="new_email">New Name:</label>
                        <div class="col-sm-10">
                            <div class="youplay-input">
                                <input type="email" id="new_email" placeholder="New Name">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Change Name</button>
                        </div>
                    </div>
                </div>

                <h3 id="em">Email:</h3>
                <div class="form-horizontal mt-30 mb-40">
                    <div class="form-group">
                        <label class="control-label col-sm-2">Current Email:</label>
                        <div class="col-sm-10">
                            <?php echo $email; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="new_email">New Email:</label>
                        <div class="col-sm-10">
                            <div class="youplay-input">
                                <input type="email" id="new_email" placeholder="New Email">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Change Email</button>
                        </div>
                    </div>
                </div>

                <h3 id="pass">Change Password:</h3>
                <div class="form-horizontal mt-30 mb-40">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="cur_password">Current Password:</label>
                        <div class="col-sm-10">
                            <div class="youplay-input">
                                <input type="password" id="cur_password" placeholder="Current Password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="new_password">New Password:</label>
                        <div class="col-sm-10">
                            <div class="youplay-input">
                                <input type="password" id="new_password" placeholder="New Password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Change Password</button>
                        </div>
                    </div>
                </div>
            </form>
            <h2></h2>
        </div>
    </div>
</div>