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
  <form class="" action="<?php echo base_url();?>booster/updateStatus/" method="post">
    <div class="row">
      <div class="col-md-9">
        <h2 class="h1">Order Details</h2>
        <table class="table">
          <?php foreach ($order_details as $order): ?>
            <tr>
              <th>Order ID</th>
              <td><?php $id_progress=$order['id_transaction']; echo $order['id_transaction']; ?></td>
            </tr>
            <tr>
              <th>Tanggal Order</th>
              <td><?php echo $order['tanggal']; ?></td>
            </tr>
            <tr>
              <th>Username</th>
              <td><?php echo $order['username_akun']; ?></td>
            </tr>
            <tr>
              <th>Game</th>
              <td><?php echo $order['nama_game']; ?></td>
            </tr>
            <tr>
              <th>Rank Sekarang</th>
              <td><?php echo $order['current_rank']; ?></td>
            </tr>
            <tr>
              <th>Rank yang diinginkan</th>
              <td><?php echo $order['desired_rank']; ?></td>
            </tr>
            <tr>
              <th>Status Terakhir</th>
              <td>
                <div class="youplay-select">
                  <select name="current_status" id="current_status">
                    <?php foreach ($list_status as $status){?>
                      <option data-currentRank="<?php echo $status['id'];?>" value="<?php echo $status['id'];?>" <?php echo $status['keterangan']==$order['keterangan'] ? "selected" : "" ; ?>><?php echo $status['keterangan'];?></option>
                    <?php } ?>
                  </select>
                </div>
              </td>
            </tr>
          <?php endforeach; ?>
        </table>
        <!-- content -->
      </div>
    </div>
    <nav>
      <ul class="pager">
        <?php foreach ($order_details as $order): ?>
          <?php if ($order['keterangan']=="New") {
            $is_disabled = 0;
            $text_button = "Confirm";
          } else if ($order['keterangan']=="On Progress") {
            $is_disabled = 0;
            $text_button = "Update";
          } else {
            $is_disabled = 1;
            $text_button = "Update";
          }?>
          <input type="hidden" name="id_progress" value="<?php echo $id_progress; ?>">

          <li><button class="btn" type="submit" name="mode" value="0">Confirm</button></li>
          <li><button class="btn" type="submit" name="mode" value="1">Delete</button></li>

        <?php endforeach; ?>
      </ul>
    </nav>
  </form>
</div>
