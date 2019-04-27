<section class="youplay-banner banner-top youplay-banner-parallax small">
    
        <div class="image" data-speed="0.4">
            <img src="http://localhost/warboost/assets/images/banner-bg.jpg" alt="" class="jarallax-img">
        </div>
    

    <div class="youplay-user-navigation">
        <div class="container">
            <ul>
                <li class="active"><a href="<?php echo base_url();?>users/activity">Activity</a></li>
                <li><a href="<?php echo base_url();?>users/profile">Profile</a></li>
                <li><a href="<?php echo base_url();?>users/settings">Settings</a></li>
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
                    <h2><?php echo $this->session->userdata('username')?></h2>
                    <div class="activity">
                        <div>
                            <div class="num">2</div>
                            <div class="title">Boosters</div>
                        </div>
                        <div>
                            <div class="num">5</div>
                            <div class="title">Games Boosted</div>
                        </div>
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
                <!-- Activity -->
                <div class="youplay-timeline">

                    <!-- Timeline Notification -->
                    <div class="youplay-timeline-block">
                        <!-- icon -->
                        <div class="youplay-timeline-icon bg-warning">
                            <i class="fa fa-bell"></i>
                        </div>
                        <!-- /icon -->

                        <!-- content -->
                        <div class="youplay-timeline-content">
                            <h3 class="mb-0">Notification</h3>
                            <span class="youplay-timeline-date pt-0">20 minutes ago</span>
                            <p>Your Booster, <a href="#">John Doe</a>, have completed the boost on Rocket League!</p>
                            <a href="#" class="btn">OK</a>
                        </div>
                        <!-- content -->
                    </div>
                    <!-- /Timeline Notification -->

                    <!-- Timeline Notification -->
                    <div class="youplay-timeline-block">
                        <!-- icon -->
                        <div class="youplay-timeline-icon bg-warning">
                            <i class="fa fa-bell"></i>
                        </div>
                        <!-- /icon -->

                        <!-- content -->
                        <div class="youplay-timeline-content">
                            <h3 class="mb-0">Notification</h3>
                            <span class="youplay-timeline-date pt-0">1 day ago</span>
                            <p>Your Booster, <a href="#">Joe Public</a>, reached level 8 in CS:GO, 2 levels to go to finish the boost.</p>
                            <a href="#" class="btn">OK</a>
                        </div>
                        <!-- content -->
                    </div>
                    <!-- /Timeline Notification -->

                    <!-- Timeline Video -->
                    <div class="youplay-timeline-block">
                        <!-- icon -->
                        <div class="youplay-timeline-icon bg-success">
                            <i class="fab fa-youtube"></i>
                        </div>
                        <!-- /icon -->

                        <!-- content -->
                        <div class="youplay-timeline-content">
                            <h3 class="mb-0">Good Music for the Soul</h3>
                            Enjoy the good side of internet.
                            <span class="youplay-timeline-date pt-0">Published on Jan 10, 2015</span>
                            <div class="responsive-embed responsive-embed-16x9">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <!-- /content -->
                    </div>
                    <!-- /Timeline Video -->
                </div>
                <!-- /Activity -->
                <h2></h2>
            </div>
        </div>
    </div>
</div>