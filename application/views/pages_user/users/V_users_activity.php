<section class="youplay-banner banner-top youplay-banner-parallax small">

    <div class="image" data-speed="0.4">
        <img src="http://localhost/warboost/assets/images/banner-bg.jpg" alt="" class="jarallax-img">
    </div>


    <div class="youplay-user-navigation">
        <div class="container">
            <ul>
                <li class="active"><a href="<?php echo base_url(); ?>users/activity">Activity</a></li>
                <li><a href="<?php echo base_url(); ?>users/profile">Profile</a></li>
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
      <h2 class="h1">Orders</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Tanggal</th>
            <th>Username</th>
            <th>Game</th>
            <th>Rank sekarang</th>
            <th>Rank yang diinginkan</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i=1;
          foreach ($listOrder as $order) {
            ?>
            <tr>
              <th scope="row"><?php echo $i; ?></th>
              <td><?php echo $order['tanggal']; ?></td>
              <td><?php echo $order['username_akun']; ?></td>
              <td><?php echo $order['nama_game']; ?></td>
              <td><?php echo $order['current_rank'] ?></td>
              <td><?php echo $order['desired_rank'] ?></td>
              <td><?php if ($order['keterangan'] != null) {
                echo $order['keterangan'];
              }else{
                echo "new";
              } ?></td>
            </tr>
            <?php
            $i += 1;
          }
          ?>
        </tbody>
      </table>
      <!-- content -->
    </div>
  </div>
</div></div>
