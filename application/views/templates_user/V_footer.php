            <!-- Footer -->
            <footer class="youplay-footer youplay-footer-parallax">

                <div class="image" data-speed="0.4" data-img-position="50% 0%">
                    <img src="<?php echo base_url(); ?>assets/images/footer-bg.jpg" alt="" class="jarallax-img">
                </div>


                <div class="wrapper">




                    <!-- Social Buttons -->
                    <div class="social">
                        <div class="container">
                            <h3>Connect socially with <strong>Warboost</strong></h3>

                            <div class="social-icons">
                                <div class="social-icon">
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                        <span>Follow Us on Instagram</span>
                                    </a>
                                </div>
                                <div class="social-icon">
                                    <a href="#">
                                        <i class="fab fa-facebook-square"></i>
                                        <span>Follow Us on Facebook</span>
                                    </a>
                                </div>
                                <div class="social-icon">
                                    <a href="#">
                                        <i class="fab fa-twitter-square"></i>
                                        <span>Follow Us on Twitter</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Social Buttons -->



                    <!-- Copyright -->
                    <div class="copyright">
                        <div class="container">
                            <p>2018 &copy; <strong>Warboost</strong>. All rights reserved</p>
                        </div>
                    </div>
                    <!-- /Copyright -->

                </div>
            </footer>
            <!-- /Footer -->


            </div>




            <!-- Search Block -->
            <div class="search-block">
                <a href="#" class="search-toggle">
                    <i class="fa fa-times"></i>
                </a>
                <form action="search.html">
                    <div class="youplay-input">
                        <input type="text" name="search" placeholder="Search...">
                    </div>
                </form>
            </div>
            <!-- /Search Block -->

            <!-- Order Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Choose Game to Boost</h4>
                        </div>
                        <div class="modal-body">
                            <?php $i = 0;
                            foreach ($listGame as $game) { ?>
                                <?php if ($i == 2) { ?>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a class="angled-img" href="games/<?php echo $game['abreviasi']; ?>">
                                                <div class="img">
                                                    <img src="<?php echo base_url(); ?>assets/images/games/<?php echo $game['path_logo']; ?>" alt="">
                                                </div>
                                                <div class="over-info">
                                                    <div>
                                                        <div>
                                                            <h4><?php echo $game['nama_game']; ?></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <div class="col-md-4">
                                        <a class="angled-img" href="games/<?php echo $game['abreviasi']; ?>">
                                            <div class="img">
                                                <img src="<?php echo base_url(); ?>assets/images/games/<?php echo $game['path_logo']; ?>" alt="">
                                            </div>
                                            <div class="over-info">
                                                <div>
                                                    <div>
                                                        <h4><?php echo $game['nama_game']; ?></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php } ?>
                                <?php $i++;
                            } ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Modals -->





            <!-- START: Scripts -->

            <!-- Object Fit Polyfill -->
            <script src="<?php echo base_url(); ?>assets/vendor/object-fit-images/dist/ofi.min.js"></script>

            <!-- jQuery -->
            <script src="<?php echo base_url(); ?>assets/vendor/jquery/dist/jquery.min.js"></script>

            <!-- Hexagon Progress -->
            <script src="<?php echo base_url("assets/vendor/HexagonProgress/jquery.hexagonprogress.min.js"); ?>"></script>

            <!-- Bootstrap -->
            <script src="<?php echo base_url("assets/vendor/bootstrap/dist/js/bootstrap.min.js"); ?>"></script>

            <!-- Jarallax -->
            <script src="<?php echo base_url("assets/vendor/jarallax/dist/jarallax.min.js"); ?>"></script>

            <!-- Flickity -->
            <script src="<?php echo base_url("assets/vendor/flickity/dist/flickity.pkgd.min.js"); ?>"></script>

            <!-- jQuery Countdown -->
            <script src="<?php echo base_url("assets/vendor/jquery-countdown/dist/jquery.countdown.min.js"); ?>"></script>

            <!-- Moment.js -->
            <script src="<?php echo base_url("assets/vendor/moment/min/moment.min.js"); ?>"></script>
            <script src="<?php echo base_url("assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js"); ?>"></script>

            <!-- Magnific Popup -->
            <script src="<?php echo base_url("assets/vendor/magnific-popup/dist/jquery.magnific-popup.min.js"); ?>"></script>

            <!-- Revolution Slider -->
            <script src="<?php echo base_url("assets/vendor/slider-revolution/js/jquery.themepunch.tools.min.js"); ?>"></script>
            <script src="<?php echo base_url("assets/vendor/slider-revolution/js/jquery.themepunch.revolution.min.js"); ?>"></script>

            <!-- ImagesLoaded -->
            <script src="<?php echo base_url("assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"); ?>"></script>

            <!-- Isotope -->
            <script src="<?php echo base_url("assets/vendor/isotope-layout/dist/isotope.pkgd.min.js"); ?>"></script>

            <!-- Bootstrap Validator -->
            <script src="<?php echo base_url("assets/vendor/bootstrap-validator/dist/validator.min.js"); ?>"></script>

            <!-- Bootstrap Sweetalert -->
            <script src="<?php echo base_url("assets/vendor/bootstrap-sweetalert/dist/sweetalert.min.js"); ?>"></script>

            <!-- Social Likes -->
            <script src="<?php echo base_url("assets/vendor/social-likes/dist/social-likes.min.js"); ?>"></script>

            <!-- Youplay -->
            <script src="<?php echo base_url("assets/js/youplay.min.js"); ?>"></script>
            <script src="<?php echo base_url("assets/js/youplay-init.js"); ?>"></script>

            <script type="text/javascript">
                // $(document).ready(function(){
                // $('#add_cart').click(function(){id_game
                //     var tipe_boosting    = $('#tipe_boosting').val();
                //     var game  = $('#id_game').val();
                //     var current_rank = $('#current_rank option:selected').val();
                //     var desired_rank  = $('#desired_rank option:selected').val();
                //     var booster = $('#booster option:selected').val();
                //     var total_price = $('#total_price').val();
                //     $.ajax({
                //         url : "<?php echo base_url(); ?>addToCart",
                //         method : "POST",
                //         data : {tipe_boosting: tipe_boosting, id_game: game, current_rank: current_rank, desired_rank: desired_rank, booster: booster, total_price:total_price},
                //         success: function(data){
                //             $('#all-cart').html(data);
                //         }
                //     });
                // });


                //     $('#detail_cart').load("<?php echo site_url('product/load_cart'); ?>");


                //     $(document).on('click','.romove_cart',function(){
                //         var row_id=$(this).attr("id"); 
                //         $.ajax({
                //             url : "<?php echo site_url('product/delete_cart'); ?>",
                //             method : "POST",
                //             data : {row_id : row_id},
                //             success :function(data){
                //                 $('#detail_cart').html(data);
                //             }
                //         });
                //     });
                // });

                $(document).ready(function() {
                    $('#desired_rank').change(function() {
                        var currentRank = $('#current_rank option:selected').val();
                        var desiredRank = $('#desired_rank option:selected').val();
                        $.ajax({
                            url: "<?php echo base_url(); ?>calculate/0",
                            method: "POST",
                            data: {
                                current_rank: currentRank,
                                desired_rank: desiredRank
                            },
                            success: function(data) {
                                $('#pricing_rank').html(data);
                            }
                        });
                    });

                    $('#current_rank').change(function() {
                        var currentRank = $('#current_rank option:selected').val();
                        var desiredRank = $('#desired_rank option:selected').val();
                        $.ajax({
                            url: "<?php echo base_url(); ?>calculate/0",
                            method: "POST",
                            data: {
                                current_rank: currentRank,
                                desired_rank: desiredRank
                            },
                            success: function(data) {
                                $('#pricing_rank').html(data);
                            }
                        });
                    });

                    $('#current_level').change(function() {
                        var currentLevel = $('#current_level').val();
                        var desiredLevel = $('#desired_level').val();
                        var idGame = $('#id_game').val();
                        $.ajax({
                            url: "<?php echo base_url(); ?>calculate/1",
                            method: "POST",
                            data: {
                                current_level: currentLevel,
                                desired_level: desiredLevel,
                                id_game: idGame
                            },
                            success: function(data) {
                                $('#pricing_level').html(data);
                            }
                        });
                    });

                    $('#desired_level').change(function() {
                        var currentLevel = $('#current_level').val();
                        var desiredLevel = $('#desired_level').val();
                        var idGame = $('#id_game').val();
                        $.ajax({
                            url: "<?php echo base_url(); ?>calculate/1",
                            method: "POST",
                            data: {
                                current_level: currentLevel,
                                desired_level: desiredLevel,
                                id_game: idGame
                            },
                            success: function(data) {
                                $('#pricing_level').html(data);
                            }
                        });
                    });

                    $('#total_win').change(function() {
                        var totalWin = $('#total_win').val();
                        var idGame = $('#id_game').val();
                        $.ajax({
                            url: "<?php echo base_url(); ?>calculate/2",
                            method: "POST",
                            data: {
                                total_win: totalWin,
                                id_game: idGame
                            },
                            success: function(data) {
                                $('#pricing_win').html(data);
                            }
                        });
                    });
                });
            </script>

            <?php
            $notif = $this->session->flashdata('notification');
            $stat = $this->session->flashdata('status');
            if (isset($notif)) {
                echo "<script>
                    $(window).on('load', function(){
                        showRegistrationStatus('$stat');
                    });

                    function showRegistrationStatus(status) {
                        if(status == 'error'){
                        swal(
                            'Gagal',
                            '$notif',
                            status
                        )
                        } else if(status == 'success'){
                        swal(
                            'Berhasil',
                            '$notif',
                            status
                        )
                        }
                        
                    }
                    </script>";
            }
            ?>



            <!-- END: Scripts -->



            </body>

            </html>