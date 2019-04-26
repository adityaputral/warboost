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
    
        <!-- Preloader -->
<div class="page-preloader preloader-wrapp">
    
        <img src="<?php echo base_url();?>assets/images/logo-light.png" alt="">
    
    <div class="preloader"></div>
</div>
<!-- /Preloader -->

    

    





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
            
                <a class="navbar-brand" href="<?php echo base_url(); ?>">
                    <img src="<?php echo base_url();?>assets/images/logo-light.png" alt="">
                </a>
            
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            
                <ul class="nav navbar-nav">
                    
        <li class=" dropdown dropdown-hover">
            <a href="<?php echo base_url();?>aboutUs" class role="button" aria-expanded="false">
                About Us
                <span class="label">information</span>
            </a>
        </li>

        <li class=" dropdown dropdown-hover">
            <a href="components.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                Games
                <span class="caret"></span>
                <span class="label">all games</span>
            </a>
            <div class="dropdown-menu" style="width: 320px;">
                <?php $counter=0; foreach ($games as $game){
                    if($counter%3 == 0){?>
                        <ul role="menu">
                    <?php } ?>

                    <li><a href="<?php echo base_url();?>games/<?php echo $game['abreviasi'];?>"><?php echo $game['nama_game'];?></a></li>

                    <?php if($counter%3 == 2){?>
                        </ul>
                    <?php } ?>
                <?php $counter++;} ?>
                
                    
                    <!-- <li><a href="<?php echo base_url();?>games/dota-2">Dota 2</a>
                    </li>
                    <li><a href="<?php echo base_url();?>games/overwatch">Overwatch</a>
                    </li> -->
                
                <!--
                        -->
                <!-- <ul role="menu">
                <li><a href="<?php echo base_url();?>games/rocket-league">Rocket League</a>
                    </li>
                    <li><a href="<?php echo base_url();?>games/lol">League of Legends</a>
                    </li>
                    <li><a href="<?php echo base_url();?>games/apex-legends">Apex Legends</a>
                    </li>
                </ul> -->
            </div>
        </li>

        <li class="">
            <a href="<?php echo base_url() ?>boosters" class role="button" aria-expanded="false">
                Boosters
                <span class="label">full list</span>
            </a>
        </li>
                </ul>
            

            
            <ul class="nav navbar-nav navbar-right">
                
                    
        <?php if($this->session->userdata('logged_in')){ ?>
            <li class=" dropdown dropdown-hover">
            <a href="<?php echo base_url();?>users/activity" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                <?php echo $this->session->userdata('nama');?>
                <span class="badge bg-default">2</span>
                <span class="caret"></span>
                <span class="label">user</span>
            </a><div class="dropdown-menu"><ul role="menu">
                            
            <li>
                <a href="<?php echo base_url();?>users/activity">
                    Activity
                    
                    
                    
                </a>
            </li>
            <li>
                <a href="<?php echo base_url();?>users/profile">
                    Profile
                    
                    
                    
                </a>
            </li>
            <li>
                <a href="<?php echo base_url();?>users/settings">
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
                
                    <li>
                        <a class="search-toggle" href="search.html">
                            <i class="fa fa-search"></i>
                        </a>
                    </li>
                

                
                    <li class="dropdown dropdown-hover dropdown-cart">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <i class="fa fa-shopping-cart"></i><span class="badge bg-default"><?php echo count($listCart)?></span>
                        </a>
                        <div class="dropdown-menu" id="all-cart">
                            <?php if(count($listCart) > 0){ ?>
                                <?php  $total_price=0.00; foreach ($listCart as $cart){?>
                                <div class="row youplay-side-news">
                                    <div class="col-xs-3 col-md-4">
                                        <a href="#" class="angled-img">
                                            <div class="img">
                                                
                                                    <img src="<?php echo base_url();?>assets/images/dark/game-bloodborne-500x375.jpg" alt="">
                                                    
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xs-9 col-md-8">
                                        <a href="<?php echo base_url();?>removeItem/<?php echo $cart['id_cart'];?>" class="pull-right mr-10"><i class="fa fa-times"></i></a>
                                        
                                            <h4 class="ellipsis"><a href="#"><?php echo $cart['nama_boosting']?></a></h4>
                                            
                                        <span class="quantity"><span class="amount"><?php echo $cart['price'];?></span></span>
                                    </div>
                                </div>
                                <?php $total_price+=$cart['price']; } ?>

                                <div class="ml-20 mr-20 pull-right"><strong>Subtotal:</strong> <span class="amount">$<?php echo $total_price;?></span></div>

                                <div class="btn-group pull-right m-15">
                                    <a href="<?php echo base_url();?>cart" class="btn btn-default btn-sm">View Cart</a>
                                    <a href="<?php echo base_url();?>checkout" class="btn btn-default btn-sm">Checkout</a>
                                </div>
                            <?php } else{?>
                                <div class="row youplay-side-news">
                                    <div class="col-xs-12 col-md-12">
                                        <h4>There is no item in cart</h4>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </li>
                

                    <?php if(!$this->session->userdata('logged_in')){ ?>
                        <li class="dropdown dropdown-hover dropdown-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">
                            <i class="fa fa-user"></i>
                            <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu">
                            <form class="navbar-login-form" action="<?php echo base_url();?>loginAttempt" method="post">
                            
                                <p>Username:</p>
                                <div class="youplay-input">
                                    <input type="text" name="username" required>
                                </div>

                                <p>Password:</p>
                                <div class="youplay-input">
                                    <input type="password" name="pwd" required>
                                </div>

                                <div class="youplay-checkbox mb-15 ml-5">
                                    <input type="checkbox" name="rememberme" value="forever" id="nav-rememberme">
                                    <label for="nav-rememberme">Remember Me</label>
                                </div>

                                <button class="btn btn-sm ml-0 mr-0" name="submit">Log In</button>
                                <br>

                                <p>
                                    <a class="no-fade" href="#">Lost password?</a> | <a href="#" class="no-fade" data-toggle="modal" data-target="#nav-registration">Register</a>
                                </p>
                            </form>
                        </div>
                    </li>
                    <?php } ?>
                    
                
            </ul>
            
        </div>
    </div>
</nav>
<!-- /Navbar -->

<!-- Registration Form -->
<div id="nav-registration" class="modal fade">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Register</h4>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url();?>register" method="post">
                        <div>
                            <p>Name:</p>
                            <div class="youplay-input">
                                <input type="text" name="name" required/>
                            </div>

                            <p>E-mail:</p>
                            <div class="youplay-input">
                                <input type="text" name="email" required/>
                            </div>

                            <p>Username:</p>
                            <div class="youplay-input">
                                <input type="text" name="username" required/>
                            </div>

                            <p>Password:</p>
                            <div class="youplay-input">
                                <input type="password" name="pwd" required/>
                            </div>

                            <p>
                                <em>Confirmation link will be emailed to you.</em>
                            </p>

                            <button class="btn ml-3" name="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Registration Form -->