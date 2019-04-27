            <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="#">Warboost</a></li>
                                            <li class="breadcrumb-item active">Add Game</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Add Game</h4>
                                </div>
                            </div>
                        </div> 
            
                        <div class="valid-feedback">
                            <?php echo validation_errors(); ?>
                        </div> 
                        <form class="form-horizontal" method="post" action="<?php echo base_url();?>gameRegister">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Game</label>
                                    <div class="col-sm-10">
                                        <input name="name_game" type="text" class="form-control" value="">
                                    </div>
                                    
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Path Logo</label>
                                    <div class="col-sm-10">
                                        <input name="path_logo" type="file" class="form-control">
                                    </div>  
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Input Select</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="id_genre">
                                            <option value="1">FPS</option>
                                            <option value="2">Battle Royale</option>
                                            <option value="3">MOBA</option>
                                            <option value="4">Sports</option>
                                        </select>
                                    </div> 
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Abreviasi</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="abreviasi" class="form-control" value="">
                                    </div>
                                    <div class="valid-feedback">

                                    </div>
                            </div>
                            <div class="form-group row">
                                <button class="btn btn-primary" type="submit">Register Game</button>
                            </div>

                        </form>
                        
            
            </div>