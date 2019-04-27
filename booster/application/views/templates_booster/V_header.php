<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Warung Boosting | Fast and Cheap Game Boosting</title>

  <meta name="description" content="Youplay - Gaming HTML Template based on Bootstrap">
  <meta name="keywords" content="gaming, game, community, template, html, bootstrap, webpack">
  <meta name="author" content="Warboost Dev">

  <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/images/dark/icon.png">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- START: Styles -->

  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/bootstrap/dist/css/bootstrap.min.css" />

  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/sweetalert2.min.css">

  <!-- Flickity -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/flickity/dist/flickity.min.css" />

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/magnific-popup/dist/magnific-popup.css" />

  <!-- Revolution Slider -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/slider-revolution/css/settings.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/slider-revolution/css/layers.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/slider-revolution/css/navigation.css">

  <!-- Bootstrap Sweetalert -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap-sweetalert/dist/sweetalert.css" />

  <!-- Social Likes -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/social-likes/dist/social-likes_flat.css" />

  <!-- FontAwesome -->
  <script defer src="<?php echo base_url(); ?>assets/vendor/font-awesome/svg-with-js/js/fontawesome-all.min.js"></script>
  <script defer src="<?php echo base_url(); ?>assets/vendor/font-awesome/svg-with-js/js/fa-v4-shims.min.js"></script>

  <!-- Youplay -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/youplay.css">

  <!-- RTL (uncomment this to enable RTL support) -->
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/youplay-rtl.min.css" /> -->

  <!-- Custom Styles -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">

  <!-- END: Styles -->

  <!-- jQuery -->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery/dist/jquery.min.js"></script>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar-youplay navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="off-canvas" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <a class="navbar-brand" href="<?php echo base_url();?>booster/login">
          <img src="<?php echo base_url();?>assets/images/logo-light.png" alt="">
        </a>

      </div>
      <div id="navbar" class="navbar-collapse collapse">

        <ul class="nav navbar-nav navbar-right">
          <?php if($this->session->userdata('logged_in')){ ?>
            <li class=" dropdown dropdown-hover">
              <a href="user-activity.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                <?php echo $this->session->userdata('nama');?>
                <!--<span class="badge bg-default">8</span>-->
                <span class="caret"></span>
                <span class="label">user</span>
              </a><div class="dropdown-menu"><ul role="menu">

                <li>
                  <a href="<?php echo base_url();?>booster/order">
                    Order
                  </a>
                </li>
                <li>
                  <a href="<?php echo base_url();?>booster/login">
                    Profile
                  </a>
                </li>
                <li>
                  <a href="<?php echo base_url();?>booster/setting">
                    Settings
                  </a>
                </li>
                <li>
                  <a href="<?php echo base_url(); ?>logout">
                    Logout
                  </a>
                </li>
              </ul></div>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>
  <!-- /Navbar -->
