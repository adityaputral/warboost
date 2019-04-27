<!-- Footer Start -->
<footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                Warboost &copy; 2019 - warboost.com
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
        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/vendor/Chart.bundle.js"></script>
        <script src="<?php echo base_url();?>assets/js/vendor/jquery.sparkline.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/vendor/jquery.knob.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/vendor/sweetalert2.min.js"></script>

        

    </body>
</html>