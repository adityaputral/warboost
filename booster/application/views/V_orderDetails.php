<div class="content-wrap">
  <section class="youplay-banner banner-top youplay-banner-parallax small">

    <div class="image" data-speed="0.4">
      <img src="<?php echo base_url();?>assets/images/dark/game-diablo-iii-1400x656.jpg" alt="" class="jarallax-img">
    </div>

    <div class="youplay-user-navigation">
      <div class="container">
        <ul>
          <li class="active"><a href="<?php echo base_url();?>booster/order">Order</a></li>
          <li><a href="<?php echo base_url();?>booster/login">Profile</a></li>
          <li><a href="<?php echo base_url();?>booster/setting">Settings</a></li>
        </ul>
      </div>
    </div>

    <div class="info">
      <div>
        <div class="container youplay-user">
          <a href="assets/images/dark/user-photo.jpg" class="angled-img image-popup">
            <div class="img">
              <img src="assets/images/dark/user-avatar.jpg" alt="">
            </div>
            <i class="fa fa-search-plus icon"></i>
          </a>
          <div class="user-data">
            <h2><?php echo $this->session->userdata('nickname');?></h2>

            <div class="activity">
              <div>
                <div class="title">Rating</div>
                <div class="num"><?php echo $this->session->userdata('rating');?>/5</div>

              </div>
              <div>
                <div class="title">Your Status</div>
                <div class="num"><?php
                if($this->session->userdata('status')==1){
                  echo "Available";
                }
                else if($this->session->userdata('status')==2){
                  echo "Not Available";
                }
                else if($this->session->userdata('status')==3){
                  echo "Working";
                }
                ?>
              </div>
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
      <?php
      foreach ($listOrder as $order) {
        ?>

        <?php
      }
      ?>
      <!-- content -->
    </div>
  </div>
</div>
