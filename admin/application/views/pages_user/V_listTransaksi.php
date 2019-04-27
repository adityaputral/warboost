

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="#">Simulor</a></li>
                                            <li class="breadcrumb-item active">List Transaction</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">List Transaction</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Recent Transaction</h4>

                                        <div class="table-responsive mt-3">
                                            <table class="table table-hover table-centered mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Tanggal</th>
                                                        <th>User</th>
                                                        <th>Booster</th>
                                                        <th>Tipe Boosting</th>
                                                        <th>Price</th>
                                                    </tr>
                                                </thead>
                                            
                                            
                                                <tbody>

                                                    <?php foreach ($listTransaksi as $transaksi) { ?>   
                                                        <tr>
                                                            <td><b>#<?php echo $transaksi['id'];?></b></td>
                                                            <td><b>#<?php echo $transaksi['tanggal'];?></b></td>
                                                            <td>
                                                                <img src="assets/images/users/avatar-2.jpg" alt="contact-img" height="36" title="contact-img" class="rounded-circle float-left mr-2" />
                                                                <p class="mb-0 font-weight-bold"><a href="javascript: void(0);"><?php echo $transaksi['nama'];?></a></p>
                                                            </td>

                                                            <td>
                                                                <img src="assets/images/users/avatar-2.jpg" alt="contact-img" height="36" title="contact-img" class="rounded-circle float-left mr-2" />
                                                                <p class="mb-0 font-weight-bold"><a href="http://localhost/warboost/boosters/<?php echo $transaksi['ingame_nickname'];?>"><?php echo $transaksi['ingame_nickname'];?></a></p>
                                                            </td>

                                                            <td><b><?php echo $transaksi['nama_boosting'];?></b></td>

                                                            <td><b><?php echo $transaksi['price'];?></b></td>
                                                        </tr>
                                                    <?php } ?>
                                                    
                                                </tbody>
                                            </table>
            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div> <!-- container -->

                </div> <!-- content -->

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