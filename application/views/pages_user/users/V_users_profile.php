<section class="youplay-banner banner-top youplay-banner-parallax small">

    <div class="image" data-speed="0.4">
        <img src="http://localhost/warboost/assets/images/banner-bg.jpg" alt="" class="jarallax-img">
    </div>


    <div class="youplay-user-navigation">
        <div class="container">
            <ul>
                <li><a href="<?php echo base_url(); ?>users/activity">Activity</a></li>
                <li class="active"><a href="<?php echo base_url(); ?>users/profile">Profile</a></li>
                <li><a href="<?php echo base_url(); ?>users/settings">Settings</a></li>
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
                            <div class="num"><?php //echo $booster;?></div>
                            <div class="title">Boosters</div>
                        </div>
                        <div>
                            <div class="num"><?php //echo$gamesBoosted;?></div>
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
            <h2>User Data</h2>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td style="width: 200px;">
                            <p>Username</p>
                        </td>
                        <td>
                            <p><?php echo $this->session->userdata('username') ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Name</p>
                        </td>
                        <td>
                            <p><?php echo $this->session->userdata('nama') ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>E-mail Address</p>
                        </td>
                        <td>
                            <p><?php echo $email; ?></p>
                        </td>
                    </tr>
                    
                </tbody>
            </table>

            
            <h2></h2>
        </div>
    </div>
</div>