<div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="#">Warboost</a></li>
                                            <li class="breadcrumb-item active">Register Booster</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Register Booster</h4>
                                </div>
                            </div>
                        </div> 
                        
                        <?php echo form_open_multipart('/addBooster');?>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                        <input name="username" type="text" class="form-control" value="">
                                    </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input name="password" type="password" class="form-control" value="password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input name="nama" type="text" class="form-control" value="">
                                    </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nickname(In Game)</label>
                                    <div class="col-sm-10">
                                        <input name="ingame_nickname" type="text" class="form-control" value="">
                                    </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input name="tanggal_lahir" class="form-control" type="date" name="date">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Handphone</label>
                                    <div class="col-sm-10">
                                        <input name="nomor_hp" type="text" class="form-control" value="">
                                    </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="example-email">Email</label>
                                <div class="col-sm-10">
                                    <input name="email" type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <input name="rating" type="text" id="rating" name="rating" class="form-control" hidden>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <select name="id_status" class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Profile Picture</label>
                                    <div class="col-sm-10">
                                        <input name="path_profilPic" type="file" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">About Me</label>
                                    <div class="col-sm-10">
                                        <input name="about_me" type="text" class="form-control" value="">
                                    </div>
                            </div>


                            <div class="form-group row">
                                <button class="btn btn-primary" type="submit">Register Booster</button>
                            </div>

                            <?php echo form_close(); ?>
                    
            </div>