<section class="youplay-banner banner-top youplay-banner-parallax small">
    
        <div class="image" data-speed="0.4">
            <img src="http://localhost/warboost/assets/images/banner-bg.jpg" alt="" class="jarallax-img">
        </div>
    

    <div class="youplay-user-navigation">
        <div class="container">
            <ul>
                <li><a href="<?php echo base_url();?>users/activity">Activity</a></li>
                <li class="active"><a href="<?php echo base_url();?>users/profile">Profile</a></li>
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

        <table class="table table-bordered">
            <tbody>
            <tr>
                <td style="width: 200px;"><p>Username</p></td>
                <td><p><?php echo $this->session->userdata('username')?></p></td>
            </tr>
            <tr>
                <td><p>Name</p></td>
                <td><p><?php echo $this->session->userdata('nama')?></p></td>
            </tr>
            <tr>
                <td><p>E-mail Address</p></td>
                <td><p><?php echo $email;?></p></td>
            </tr>
            </tbody>
        </table>

        <!-- <h3 class="mt-40 mb-20">Contact Information</h3>
        <table class="table table-bordered">
            <tbody>
            <tr>
                <td style="width: 200px;"><p>Current City</p></td>
                <td><p><a href="#">New York</a></p></td>
            </tr>
            <tr>
                <td><p>Mobile</p></td>
                <td><p>+1 *** ** ** 11 11</p></td>
            </tr>
            <tr>
                <td><p>Instagram</p></td>
                <td><p><a href="#">@instagram</a></p></td>
            </tr>
            <tr>
                <td><p>Twitter</p></td>
                <td><p><a href="#">#twitter</a></p></td>
            </tr>
            </tbody>
        </table>

        <h3 class="mt-40 mb-20">Personal Information</h3>
        <table class="table table-bordered">
            <tbody>
            <tr>
                <td style="width: 200px;"><p>Current City</p></td>
                <td><p><a href="#">New York</a></p></td>
            </tr>
            <tr>
                <td><p>Favorite games</p></td>
                <td><p><a href="#">Bloodborne</a>, <a href="#">Dark Souls II</a>, <a href="#">Kingdoms of Amalur</a>, <a href="#">The Witcher</a></p></td>
            </tr>
            <tr>
                <td><p>About Me</p></td>
                <td>
                    <p>Netus. Nascetur arcu amet accumsan natoque. Augue aptent euismod sed magna diam nostra, molestie mi felis. Egestas nisl ante posuere dui Nostra tempus pulvinar at dui augue mattis placerat iaculis hac arcu rutrum.</p>

                    <p>Vel <strong>class</strong> lectus auctor interdum. Mi <strong>nec</strong> senectus commodo sed suscipit vitae parturient, risus vivamus quisque dolor aliquet amet. Etiam penatibus nascetur netus. Non leo eu vitae sem laoreet. Varius in augue. Mollis convallis.</p>
                </td>
            </tr>
            </tbody>
        </table> -->

    </div>

    <!-- Right Side -->
    <div class="col-md-3">
                <div class="side-block">
    
</div>
            </div>
            <!-- Right Side -->


            </div>
            </div>