<div class="content-wrap">
  <section class="youplay-banner banner-top youplay-banner-parallax small">

    <div class="image" data-speed="0.4">
      <img src="<?php echo base_url();?>assets/images/dark/game-diablo-iii-1400x656.jpg" alt="" class="jarallax-img">
    </div>


    <div class="youplay-user-navigation">
      <div class="container">
        <ul>
          <li><a href="<?php echo base_url();?>booster/order">Order</a></li>
          <li ><a href="<?php echo base_url();?>booster/login">Profile</a></li>
          <li class="active"><a href="<?php echo base_url();?>booster/setting">Settings</a></li>

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

      <ul class="pagination pagination-sm mt-0">
        <li class="active">
          <a href="#">General</a>
        </li>
        <li>
          <a href="#">Security</a>
        </li>
        <li>
          <a href="#">Privacy</a>
        </li>
        <li>
          <a href="#">Notifications</a>
        </li>
      </ul>

      <form action="<?php echo base_url();?>booster/changestatus" method="post">

        <h3>Change status</h3>
        <div class="form-horizontal mt-30 mb-40">
          <div class="form-group">

            <label class="control-label col-sm-2">Status:</label>
            <div class="col-sm-10">
              <div name="status" class="youplay-select" >
                <select name="status">
                  <?php
                  foreach ($listStatus as $status) {
                    ?>
                    <option value="<?php echo $status['id']; ?>"<?php if ($status['id']==$this->session->userdata('status')) {
                      echo " selected";
                    }?>><?php echo $status['keterangan']; ?></option>
                    <?php
                  }
                  ?>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Save Status</button>
            </div>
          </div>
        </div>
      </form>

      <form action="<?php echo base_url();?>booster/changepassword" method="post">

        <h3>Change Password:</h3>
        <div class="form-horizontal mt-30 mb-40">
          <div class="form-group">
            <label class="control-label col-sm-2" for="cur_password">Current Password:</label>
            <div class="col-sm-10">
              <div class="youplay-input">
                <input type="password" id="cur_password" name="oldPass" placeholder="Current Password">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="new_password">New Password:</label>
            <div class="col-sm-10">
              <div class="youplay-input">
                <input type="password" id="new_password" name="newPass" placeholder="New Password">
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
    </div>

    <!-- Right Side -->
    <div class="col-md-3">
      <div class="side-block">
        <h4 class="block-title">About</h4>
        <div class="block-content">
          Ecce dabo Pinkman Isai OK? Sicut locutus est tibi, et datus est, et hic sine Semper consequat volumus ... et ille in urbe ista licet? Et infernus, ubi tu non Virginiae ornare vel ipsum. Ut enim Albuquerque et ille eum iure hic, et ego ducam te ad iustitiam.
        </div>
      </div>
      <div class="side-block">
        <h4 class="block-title">Location</h4>
        <div class="block-content pt-5">
          <div class="responsive-embed responsive-embed-16x9">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423284.59051352815!2d-118.41173249999999!3d34.0204989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2z0JvQvtGBLdCQ0L3QtNC20LXQu9C10YEsINCa0LDQu9C40YTQvtGA0L3QuNGPLCDQodCo0JA!5e0!3m2!1sru!2sru!4v1430158354122" width="600" height="450"></iframe>
          </div>
        </div>
      </div>
    </div>
    <!-- Right Side -->

  </div>
</div>

<!-- Footer -->
<footer class="youplay-footer youplay-footer-parallax">

  <div class="image" data-speed="0.4" data-img-position="50% 0%">
    <img src="assets/images/dark/footer-bg.jpg" alt="" class="jarallax-img">
  </div>

  <div class="wrapper">
    <!-- Social Buttons -->
    <div class="social">
      <div class="container">
        <h3>Connect socially with <strong>Youplay</strong></h3>

        <div class="social-icons">
          <div class="social-icon">
            <a href="#">
              <i class="fab fa-discord"></i>
              <span>Subscribe to Discord</span>
            </a>
          </div>
          <div class="social-icon">
            <a href="#">
              <i class="fab fa-twitch"></i>
              <span>Watch on Twitch</span>
            </a>
          </div>
          <div class="social-icon">
            <a href="#">
              <i class="fab fa-youtube"></i>
              <span>Watch on Youtube</span>
            </a>
          </div>
          <div class="social-icon">
            <a href="#">
              <i class="fab fa-twitter-square"></i>
              <span>Follow on Twitter</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- /Social Buttons -->

    <!-- Copyright -->
    <div class="copyright">
      <div class="container">
        <p>2018 &copy; <strong>nK</strong>. All rights reserved</p>
      </div>
    </div>
    <!-- /Copyright -->
  </div>
