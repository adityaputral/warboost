  <div class="content-wrap">
  <section class="youplay-banner banner-top youplay-banner-parallax small">

    <div class="image" data-speed="0.4">
      <img src="<?php echo base_url();?>assets/images/dark/game-diablo-iii-1400x656.jpg" alt="" class="jarallax-img">
    </div>


    <div class="youplay-user-navigation">
      <div class="container">
        <ul>
          <li><a href="order">Order</a></li>
          <li class="active"><a href="user-profile.html">Profile</a></li>
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

      <h3 class="mt-0 mb-20">John Doe</h3>
      <table class="table table-bordered">
        <tbody>
          <tr>
            <td style="width: 200px;"><p>Hometown</p></td>
            <td><p><a href="#">New York</a></p></td>
          </tr>
          <tr>
            <td><p>Relationship status</p></td>
            <td><p><a href="#">Married</a></p></td>
          </tr>
          <tr>
            <td><p>Studied at</p></td>
            <td><p><a href="#">New York University, NYU</a></p></td>
          </tr>
          <tr>
            <td><p>Languages</p></td>
            <td><p><a href="#">English</a>, <a href="#">Japan</a></p></td>
          </tr>
        </tbody>
      </table>

      <h3 class="mt-40 mb-20">Contact Information</h3>
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
      </table>
    </div>

    <!-- Right Side -->
    <div class="col-md-3">
      <div class="side-block">
        <h4 class="block-title">About</h4>
        <div class="block-content">
          <?php echo $this->session->userdata('about');?>
        </div>
      </div>
    </div>
    <!-- Right Side -->

  </div>
</div>
