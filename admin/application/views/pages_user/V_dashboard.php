

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="#">Simulor</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-xl-3 col-lg-6">
                                <div class="card widget-flat">
                                    <div class="card-body p-0">
                                        <div class="p-3 pb-0">
                                            <div class="float-right">
                                                <i class="mdi mdi-cart text-primary widget-icon"></i>
                                            </div>
                                            <h5 class="text-muted font-weight-normal mt-0">Total Boosting</h5>
                                            <h3 class="mt-2"><?php echo $totalTransaksi;?></h3>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-xl-3 col-lg-6">
                                <div class="card widget-flat">
                                    <div class="card-body p-0">
                                        <div class="p-3 pb-0">
                                            <div class="float-right">
                                                <i class="mdi mdi-currency-usd text-danger widget-icon"></i>
                                            </div>
                                            <h5 class="text-muted font-weight-normal mt-0">Income amounts</h5>
                                            <h3 class="mt-2"><?php echo $totalPrice['price'];?></h3>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-xl-3 col-lg-6">
                                <div class="card widget-flat">
                                    <div class="card-body p-0">
                                        <div class="p-3 pb-0">
                                            <div class="float-right">
                                                <i class="mdi mdi-account-multiple text-primary widget-icon"></i>
                                            </div>
                                            <h5 class="text-muted font-weight-normal mt-0">Total Users</h5>
                                            <h3 class="mt-2"><?php echo $totalUser;?></h3>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-xl-3 col-lg-6">
                                <div class="card widget-flat">
                                    <div class="card-body p-0">
                                        <div class="p-3 pb-0">
                                            <div class="float-right">
                                                <i class="mdi mdi-account text-danger widget-icon"></i>
                                            </div>
                                            <h5 class="text-muted font-weight-normal mt-0">Total Booster</h5>
                                            <h3 class="mt-2"><?php echo $totalBooster;?></h3>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Recent Customers</h4>

                                        <div class="table-responsive mt-3">
                                            <table class="table table-hover table-centered mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Nama - Username</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                            
                                            
                                                <tbody>

                                                    <?php foreach ($listAdmin as $admin) { ?>   
                                                        <tr>
                                                            <td><b>#<?php echo $admin['id'];?></b></td>
                                                            <td>
                                                                <img src="assets/images/users/avatar-2.jpg" alt="contact-img" height="36" title="contact-img" class="rounded-circle float-left mr-2" />
                                                                <p class="mb-0 font-weight-bold"><a href="javascript: void(0);"><?php echo $admin['username'];?></a></p>
                                                                <span class="font-13"><?php echo $admin['nama'];?></span>
                                                            </td>
                
                                                            <td>
                                                                <div class="btn-group dropdown">
                                                                    <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="<?php echo base_url();?>removeAdmin/<?php echo $admin['id'];?>"><i class="mdi mdi-delete mr-1 text-muted"></i>Remove</a>
                                                                    </div>
                                                                </div>
                                                            </td>
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