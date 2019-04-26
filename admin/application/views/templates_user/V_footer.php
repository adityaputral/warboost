<!-- Footer Start -->
<footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                Simulor Admin &copy; 2018 - Coderthemes.com
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="#">About Us</a>
                                    <a href="#">Help</a>
                                    <a href="#">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

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


        <!-- App js -->
        <script src="<?php echo base_url();?>assets/js/vendor.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/app.min.js"></script>

        <!-- Plugins js -->
        <script src="<?php echo base_url();?>assets/js/vendor/Chart.bundle.js"></script>
        <script src="<?php echo base_url();?>assets/js/vendor/jquery.sparkline.min.js"></script>
        <!-- demo -->
        <script src="<?php echo base_url();?>assets/js/pages/chartjs.init.js"></script>
        <script src="<?php echo base_url();?>assets/js/pages/sparkline.init.js"></script>

    </body>
</html>